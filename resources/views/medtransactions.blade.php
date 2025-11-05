@extends('layouts.app')

@section('title', 'Medicine Transactions')

@section('content')
@if(session('level') == 2)
<br><br><br>
<div class="p-4 border rounded shadow bg-dark text-light">
    <h2 class="fw-bold mb-3 text-white">Medicine Transactions</h2>

    {{-- 🔹 Top Summary and Export Buttons --}}
    <div class="d-flex justify-content-between align-items-start mb-3">
        <div>
            <p><strong>Total Sales:</strong> ${{ number_format($totalSales, 2) }}</p>

            @if(request('from_date') && request('until_date'))
                <p><small>Showing results from 
                    <strong>{{ request('from_date') }}</strong> 
                    to <strong>{{ request('until_date') }}</strong>
                </small></p>
            @endif
        </div>

        <div class="text-end">
            <a href="{{ url('/exportMedPdf') }}" class="btn btn-outline-danger me-2">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
            <a href="{{ url('/exportMedExcel') }}" class="btn btn-outline-success me-2">
                <i class="bi bi-file-earmark-excel"></i> Export Excel
            </a>
            <button onclick="window.print()" class="btn btn-outline-secondary me-2">
                <i class="bi bi-printer"></i> Print
            </button>
            <form action="{{ url('/clearMedTransactions') }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" 
                    onclick="return confirm('Delete all medicine transactions?')">
                    <i class="bi bi-trash"></i> Clear All
                </button>
            </form>
        </div>
    </div>

    {{-- 🔹 Date Filter Form --}}
    <form action="{{ url('/medtransactions') }}" method="GET" class="border p-3 rounded bg-secondary text-light mb-4">
        <div class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label">From</label>
                <input type="date" name="from_date" value="{{ request('from_date') }}" class="form-control bg-dark text-light border-light">
            </div>

            <div class="col-md-3">
                <label class="form-label">Until</label>
                <input type="date" name="until_date" value="{{ request('until_date') }}" class="form-control bg-dark text-light border-light">
            </div>

            <div class="col-md-3">
                <label class="form-label">Sort By</label>
                <select name="sort" class="form-select bg-dark text-light border-light">
                    <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Newest First</option>
                    <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Oldest First</option>
                </select>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">
                    <i class="bi bi-funnel"></i> Filter
                </button>
            </div>

             <div class="col-md-1">
                <a href="{{ url('/kli') }}" class="btn btn-outline-light w-100">
                    <i class="bi bi-x-circle"></i>
                </a>
            </div>
        </div>
    </form>

    {{-- 🔹 Table of Transactions --}}
    <table class="table table-dark table-bordered table-striped align-middle">
        <thead class="table-secondary text-dark">
            <tr>
                <th>Date</th>
                <th>Customer</th>
                <th>Items</th>
                <th>Total ($)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d') }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>
                    @php
                        $items = json_decode($order->items, true);
                    @endphp
                    <ul>
                        @foreach($items as $item)
                            <li>{{ $item['name'] ?? 'Unknown' }} × {{ $item['quantity'] ?? 1 }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>${{ number_format($order->total, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
body {
    background-color: #1f1f1f !important;
}
.table-dark td, .table-dark th {
    border-color: #444 !important;
}
.table-secondary th {
    background-color: #d1d1d1 !important;
}
.btn {
    border-radius: 10px !important;
}
@media print {
    a.btn, button.btn, form, .collapse, hr {
        display: none !important;
    }
    body {
        background: #fff !important;
        color: #000 !important;
    }
}
</style>
@endsection
@endif