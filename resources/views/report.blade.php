<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .tab-content > .tab-pane { display: none; }
        .tab-content > .active { display: block; }
    </style>
</head>
<body class="bg-light">

<br><br><br><br>
<!-- =======================halaman======================= -->
<div class="container-fluid mt-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctor Dashboard</h1>
        <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#profileModal">
        <i class="bi bi-person-gear"></i> Edit Profile
        </button>
</div>

<div class="row mb-4">
<div class="col-md-4 mb-3">
<div class="card text-white bg-primary">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
    <h5 class="card-title">Today's Patients</h5>
    <p class="card-text fs-2">10</p>
</div>
    <i class="bi bi-people-fill" style="font-size: 2.5rem;"></i>
</div>
</div>
</div>
</div>

<div class="col-md-4 mb-3">
<div class="card text-white bg-info">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
    <h5 class="card-title">Total Patients</h5>
    <p class="card-text fs-2">30</p>
</div>
    <i class="bi bi-person-check-fill" style="font-size: 2.5rem;"></i>
</div>
</div>
</div>
</div>
            
<div class="col-md-4 mb-3">
<div class="card text-white bg-warning">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
    <h5 class="card-title">Reservations Due</h5>
    <p class="card-text fs-2">3</p>
</div>
    <i class="bi bi-calendar-check-fill" style="font-size: 2.5rem;"></i>
</div>
</div>
</div>
</div>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-pane" type="button" role="tab">Schedule Today</button>
</li>

<li class="nav-item" role="presentation">
<button class="nav-link" id="patients-tab" data-bs-toggle="tab" data-bs-target="#patients-pane" type="button" role="tab">Patients List</button>
</li>

<li class="nav-item" role="presentation">
<button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports-pane" type="button" role="tab">Visits Report</button>
</li>
</ul>

<div class="tab-content" id="myTabContent">
            
<!-- Jadwal Hari Ini Tab -->
<div class="tab-pane fade show active" id="schedule-pane" role="tabpanel">
<div class="card mt-3">
<div class="card-body">
    <h5 class="card-title">Practice Schedule, Monday, October 27, 2025</h5>
<div class="table-responsive">
<table class="table table-hover align-middle">
<thead>
    <tr>
        <th>Time</th>
        <th>Patient's Name</th>
        <th>Illness</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody id="scheduleTableBody">
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- Daftar Pasien Tab -->
<div class="tab-pane fade" id="patients-pane" role="tabpanel">
<div class="card mt-3">
<div class="card-body">
    <h5 class="card-title">Patients List</h5>
<div class="table-responsive">
<table class="table table-hover align-middle">
<thead>
    <tr>
        <th>Patient ID</th>
        <th>Name</th>
        <th>Birthdate</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>
</thead>
<tbody id="patientsTableBody">
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- Laporan Tab (SUDAH DIUBAH) -->
<div class="tab-pane fade" id="reports-pane" role="tabpanel">
<div class="mt-3">
<div class="row">

<!--  Customer Baru -->
<div class="col-lg-6 mb-4">
<div class="card h-100">
<div class="card-header">
    <h5 class="mb-0"><i class="bi bi-person-plus"></i> New Customers (This Month)</h5>
</div>

<div class="card-body">
    <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Kai
    <small class="text-muted">10 Jan</small>
    </li>

<li class="list-group-item d-flex justify-content-between align-items-center">
                                            Chips 
    <small class="text-muted">10 Dec</small>
    </li>

<li class="list-group-item d-flex justify-content-between align-items-center">
                                            Van 
    <small class="text-muted">20 Oct</small>
</li>
</ul>
</div>
</div>
</div>

<!--   Beli Obat -->
<div class="col-lg-6 mb-4">
<div class="card h-100">
<div class="card-header">
        <h5 class="mb-0"><i class="bi bi-capsule"></i> Medicine not Collected</h5>
</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-sm table-hover">
<thead>
    <tr>
        <th>Patient</th>
        <th>Medicine</th>
        <th>Status</th>
    </tr>
</thead>

<tbody>
<tr>
    <td>Chips </td>
    <td>Paracetamol</td>
    <td><span class="badge bg-warning">Waiting</span></td>
</tr>

<tr>
    <td>Kai </td>
    <td>Anasthesia</td>
    <td><span class="badge bg-warning">Waiting</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<!--  Stok Obat -->
<div class="col-lg-8 mb-4">
<div class="card">
<div class="card-header">
<h5 class="mb-0"><i class="bi bi-box-seam"></i> Medicine Stock</h5>
</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>
            <th>Medicine Name</th>
            <th>Amount in Stock</th>
            <th>IDEK</th>
            <th>Status</th>
        </tr>
    </thead>
<tbody>
    <tr>
        <td>Paracetamol</td>
        <td>0</td>
        <td>Tablet</td>
        <td><span class="badge bg-success">Literally 0</span></td>
    </tr>
    <tr>
        <td>Knockout Drops</td>
        <td>25</td>
        <td>Syrup</td>
        <td><span class="badge bg-warning">Running Out</span></td>
    </tr>
    <tr>
        <td>Euthanasia</td>
        <td>30000000</td>
        <td>Lethal</td>
        <td><span class="badge bg-danger">Safe</span></td>
    </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<!--Reservations & Income -->
<div class="col-lg-4 mb-4">
    <!-- Sub-card for Reservations -->
<div class="card mb-3">
        <div class="card-header">
            <h6 class="mb-0"><i class="bi bi-calendar-check"></i> Reservasi Mendatang</h6>
        </div>

        <div class="card-body p-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0">dr. king - queen. (Besok, 09:00)</li>
                <li class="list-group-item px-0">dr. putri - yuli. (6 Okt, 10:00)</li>
            </ul>
        </div>
</div>
<!-- Sub-card for Income -->
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><i class="bi bi-currency-dollar"></i> Pendapatan (Bulan Ini)</h6>
    </div>
    <div class="card-body text-center">
        <h3 class="text-success">Rp 15,750,000</h3>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal Detail Pasien -->
<div class="modal fade" id="patientModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPatientName">Detail Pasien</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalPatientBody">
                <!-- Akan diisi oleh JavaScript -->
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------ Modal Edit Profil----------------------------------------- -->
<div class="modal fade" id="profileModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title">Edit Profil Dokter</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
<form>

<div class="mb-3">
    <label for="doctorName" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="doctorName" value="dr. king">
</div>

<div class="mb-3">
    <label for="doctorSpecialization" class="form-label">Spesialisasi</label>
    <input type="text" class="form-control" id="doctorSpecialization" value="Spesialis dalam">
</div>

<div class="mb-3">
    <label for="doctorSchedule" class="form-label">Jadwal Praktik</label>
    <input type="text" class="form-control" id="doctorSchedule" value="Senin, Rabu, Jumat (08:00 - 14:00)">
</div>
</form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
    <button type="button" class="btn btn-outline-success" onclick="alert('Profil berhasil diperbarui!')" data-bs-dismiss="modal">Simpan Perubahan</button>
</div>
</div>
</div>
</div>

































    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // --- DATA PALSU (MOCK DATA) ---
            const patients = [
                { id: 'P001', name: 'feli', dob: '1990-05-15', phone: '0812-3456-7890', address: 'bali' },
                { id: 'P002', name: 'Sita', dob: '1985-11-22', phone: '0813-9876-5432', address: 'bali' },
                { id: 'P003', name: 'Budi ', dob: '1992-03-08', phone: '0821-1122-3344', address: 'bali' },
            ];

            const appointments = [
                { time: '08:00', patientId: 'P001', patientName: 'feli', complaint: 'tantrum', status: 'Dikonfirmasi' },
                { time: '09:30', patientId: 'P002', patientName: 'Sita', complaint: 'demam', status: 'Menunggu' },
                { time: '11:00', patientId: 'P003', patientName: 'Budi ', complaint: 'Keluhan dada', status: 'Dikonfirmasi' },
            ];

            const patientHistory = {
                'P001': [
                    { date: '2023-10-20', diagnosis: 'tantrum', therapy: 'Pemberian obat panadol' },
                    { date: '2023-09-15', diagnosis: 'stres', therapy: 'Edukasi dan manajemen stres' }
                ],
                'P002': [
                    { date: '2023-10-05', diagnosis: 'Demam Berdarah', therapy: 'Rawat inap dan cairan infus' }
                ]
            };

            // --- FUNGSI RENDER TABEL ---
            function renderSchedule() {
                const tbody = document.getElementById('scheduleTableBody');
                tbody.innerHTML = appointments.map(a => `
                    <tr>
                        <td>${a.time}</td>
                        <td><a href="#" class="text-decoration-none" onclick="showPatientDetail('${a.patientId}')">${a.patientName}</a></td>
                        <td>${a.complaint}</td>
                        <td><span class="badge bg-success">${a.status}</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" onclick="showPatientDetail('${a.patientId}')"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-check-circle"></i></button>
                        </td>
                    </tr>
                `).join('');
            }

            function renderPatients() {
                const tbody = document.getElementById('patientsTableBody');
                tbody.innerHTML = patients.map(p => `
                    <tr>
                        <td>${p.id}</td>
                        <td><a href="#" class="text-decoration-none" onclick="showPatientDetail('${p.id}')">${p.name}</a></td>
                        <td>${p.dob}</td>
                        <td>${p.phone}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" onclick="showPatientDetail('${p.id}')"><i class="bi bi-eye"></i> Detail</button>
                        </td>
                    </tr>
                `).join('');
            }

            // --- FUNGSI MODAL DETAIL PASIEN ---
            function showPatientDetail(patientId) {
                const patient = patients.find(p => p.id === patientId);
                const history = patientHistory[patientId] || [];

                document.getElementById('modalPatientName').innerText = Detail Pasien: ${patient.name};
                document.getElementById('modalPatientBody').innerHTML = `
                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>ID Pasien:</strong></div>
                        <div class="col-sm-9">${patient.id}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Nama Lengkap:</strong></div>
                        <div class="col-sm-9">${patient.name}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Tanggal Lahir:</strong></div>
                        <div class="col-sm-9">${patient.dob}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>No. Telepon:</strong></div>
                        <div class="col-sm-9">${patient.phone}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3"><strong>Alamat:</strong></div>
                        <div class="col-sm-9">${patient.address}</div>
                    </div>
                    <hr>
                    <h6>Riwayat Kunjungan</h6>
                    ${history.length > 0 ? `
                        <ul class="list-group">
                            ${history.map(h => `
                                <li class="list-group-item">
                                    <strong>${h.date}</strong> - ${h.diagnosis} <br>
                                    <small>Terapi: ${h.therapy}</small>
                                </li>
                            `).join('')}
                        </ul>
                    ` : '<p>Belum ada riwayat kunjungan.</p>'}
                `;
                
                const patientModal = new bootstrap.Modal(document.getElementById('patientModal'));
                patientModal.show();
            }

            // --- FUNGSI GRAFIK ---
            function renderChart() {
                const ctx = document.getElementById('visitChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober'],
                        datasets: [{
                            label: 'Jumlah Kunjungan',
                            data: [65, 78, 90, 81, 96, 105],
                            borderColor: 'rgb(25, 135, 84)', // Bootstrap success color
                            backgroundColor: 'rgba(25, 135, 84, 0.1)',
                            tension: 0.3,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { display: false }
                        },
                        scales: {
                            y: { beginAtZero: true }
                        }
                    }
                });
            }

            // --- INISIALISASI HALAMAN ---
            renderSchedule();
            renderPatients();
            renderChart();

        });
    </script>
</body>
</html>