    <title>Account Settings</title>



    <form action="/settings/update" method="POST">
        @csrf
        <table>
            <tr><th colspan="2"><h3>Login Info</h3></th></tr>

            <tr>
                <th>Username:</th>
                <td><input type="text" name="username" value="{{ $info->username }}" required></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td><input type="password" name="password" placeholder="Leave blank to keep current"></td>
            </tr>
            <tr>
                <th>Role:</th>
                <td><input type="text" value="{{ $info->beingas }}" readonly></td>
            </tr>

            <tr><th colspan="2"><h3>Employee Info</h3></th></tr>

            <tr><th>Name:</th><td><input type="text" name="employeename" value="{{ $info->employeename }}"></td></tr>
            <tr><th>Age:</th><td><input type="number" name="employeeage" value="{{ $info->employeeage }}"></td></tr>
            <tr><th>Gender:</th>
                <td>
                    <select name="employeegender">
                        <option value="Male" @if($info->employeegender=='Male') selected @endif>Male</option>
                        <option value="Female" @if($info->employeegender=='Female') selected @endif>Female</option>
                        <option value="Other" @if($info->employeegender=='Other') selected @endif>Other</option>
                    </select>
                </td>
            </tr>
            <tr><th>Birthdate:</th><td><input type="date" name="employeebirthdate" value="{{ $info->employeebirthdate }}"></td></tr>
            <tr><th>Race:</th><td><input type="text" name="employeerace" value="{{ $info->employeerace }}"></td></tr>
            <tr><th>Religion:</th><td><input type="text" name="employeereligion" value="{{ $info->employeereligion }}"></td></tr>
            <tr><th>Blood Type:</th><td><input type="text" name="employeebloodtype" value="{{ $info->employeebloodtype }}"></td></tr>
            <tr><th>Position:</th><td><input type="text" name="employeeposition" value="{{ $info->employeeposition }}"></td></tr>
        </table>

        <center> <button type="submit" class="btn btn-outline-dark">Save Changes</button> </center>
    </form>
</center>
</body>
</html>
