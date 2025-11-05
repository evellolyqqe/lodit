<title>Employee Viewer</title>

<center>
<table border="1">
  @if(session('level') == 2 || session('level') == 3)
    <thead class="table-secondary">
      <tr align=center>
        <th>No.</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Birthdate</th>
        <th>Race</th>
        <th>Religion</th>
        <th>Blood Type</th>
        <th>Position</th>
        <th>Username</th>
        <th>Level</th>
        <th>Role</th>
        @if(session('level') == 3)
          <th colspan="3">Action</th>
        @endif
      </tr>
    </thead>
  @endif

  <tbody>
    @foreach($joined as $value)
      @if(session('level') == 2 || session('level') == 3)
        <tr>
          <td>{{ $value->employeeid }}</td>
          <td>{{ $value->employeename }}</td>
          <td>{{ $value->employeeage }}</td>
          <td>{{ $value->employeegender }}</td>
          <td>{{ $value->employeebirthdate }}</td>
          <td>{{ $value->employeerace }}</td>
          <td>{{ $value->employeereligion }}</td>
          <td>{{ $value->employeebloodtype }}</td>
          <td>{{ $value->employeeposition }}</td>
          <td>{{ $value->username }}</td>
          <td>{{ $value->level }}</td>
          <td>{{ $value->beingas }}</td>

          @if(session('level') == 3)
            <td>
              <a href="{{ url('/EmployEdit/'.$value->employeeid) }}" class="btn btn-sm btn-primary">Edit</a>
            </td>
            <td>
              <a href="{{ url('/delEmployee/'.$value->employeeid) }}" class="btn btn-sm btn-danger"
                 onclick="return confirm('Are you sure you want to delete this employee?')">
                 Delete
              </a>
            </td>
            <td>
              <a href="{{ url('/resetPassword/'.$value->userid) }}" class="btn btn-sm btn-warning"
                 onclick="return confirm('Reset password for this user to default?')">
                 Reset
              </a>
            </td>
          @endif
        </tr>
      @endif
    @endforeach
  </tbody>
</table>
<br><br><br><br>
</center>
