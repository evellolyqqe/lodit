 <title>data show-er thing</title>


    <center>
    <!-- <h1>Data Thingy</h1>
    
    <br><br>
    <table border="1" width=80%>
        <tr>
            <th>Name</th>
            <th>Photo</th>
            <th colspan=2>Action</th>
        </tr>

    </table>
    <br><br><br>
    <a href="/tambah">add new data </a> -->

    <!-- <table border=1 width=80%>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>MC</th>
            <th>ML</th>
            <th>Personal Rating</th>
        </tr>
        
@foreach ($notbl as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->Title }}</td>
            <td>{{ $value->MC }}</td>
            <td>{{ $value->ML }}</td>
            <td>{{ $value->{'personal_rating'} }}</td>
        </tr>
@endforeach
    </table> -->

    <!-- <table border=1>
    <tr><th>Main Table Names</th>

    <br><br>

<th>Joined Tables</th></tr><tr>
@foreach($joined as $value)
<td>
@foreach($y as $value)
    {{ $value->nama }}
@endforeach</td>

    <td>
        Table1: {{ $value->nama }} <br>
        Table2: {{ $value->suspicious_desc ?? 'None' }} <br>
        Table3: {{ $value->notatall_info ?? 'None' }}</td>
</tr>
@endforeach -->
<table border=1>
      @if(session('level') == 2 || session('level') == 3)

    <thead class="table-secondary">
      <tr>
        <th>No.</th>
        <!-- <th>Photo</th>  -->
        <th>Medicine</th>
        <th>Patient</th>
        <th>Caretaker</th>
        <th>Type</th>
        <th>Patient's Rating</th>
        <th>Amount</th>
        @endif
        @if(session('level') == 2 || session('level') == 3)
        <th colspan="2">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($joined as $value)
      

        <!-- <td>
          @if(!empty($value->photo))
            <img src="{{ asset('foto/' . $value->photo) }}" 
                 alt="Photo of {{ $value->nama }}"
                 style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
          @else
            <span>No photo</span>
          @endif
        </td> -->
 @if(session('level') == 2 || session('level') == 3)

        <tr>
    <td>{{ $value->id }}</td>
    <td>{{ $value->nama }}</td>
    <td>{{ $value->MC ?? 'None' }}</td>
    <td>{{ $value->ML ?? 'None' }}</td>
    <td>{{ $value->Website ?? 'None' }}</td>
    <td>{{ $value->personal_rating ?? 'None' }}</td>
    <td>{{ $value->Safeness ?? 'None' }}</td>
    @endif

        
@if(session ('level') == 2 || session('level') == 3)
        <td><a href="{{ url('/edit/'.$value->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
@if(session('level') == 3)

        <td><a href="{{ url('/hapus/'.$value->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</a></td>
        @endif
        @endif
      </tr>
@endforeach
    
    </tbody>
</table>
<br><br><br><br>
<!-- <h6>also probably dont search them up as nothing will shop up probably</h6>
<h1>dont ask why more than half of them are named kai</h1>
<h6>i like the name ok i place it as almost all of the names if i have the ability to pick the name</h6> -->
</center>
