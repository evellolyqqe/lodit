<!DOCTYPE html>
<html>
<head>
     <link rel="icon" href="{{ asset('foto/baobei.jpg') }}" type="image/png">

    <title>Register</title>
    <style>
        body {
            background-image: url('{{ asset('foto/bg2.jpg') }}');
            background-size: cover;
            color: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            background-color: rgba(45, 45, 45, 0.9); 
            width: 50%;
            border-collapse: collapse;
            max-width: 900px;
            margin: 100px auto 0 auto;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
            border-radius: 12px; 
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #333;
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 80%;
        }

        .btn {
            display: inline-block;
            padding: 10px 25px;
            margin: 10px 5px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: rgba(250, 250, 250, 0.8);
            border: none;
            border-radius: 25px; 
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: rgba(133, 133, 133, 1); 
            transform: scale(1.05); 
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid rgba(32, 32, 32, 0.8);
            color: rgba(97, 97, 97, 0.9);
        }

        .btn-outline:hover {
            background-color: rgba(37, 37, 37, 0.8);
            color: white;
        }
    </style>
</head>
<body>

<!-- =============================Table================================ -->
  
        <center>
        <table>
            <tr>
                <th colspan="2"><h1>Login</h1></th>
            </tr>
            <form action="/registersave" method="post">
                @csrf
                <tr>
                    <td>Username: <br>
                        <input type="text" name="u">
                    </td>
                </tr>
                <tr>
                    <td>Password: <br>
                        <input type="password" name="p">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Register" class="btn">
                    </td>
                </tr>
            </form>
        </table>

        <a href="/login" class="btn btn-outline">Already Have an Account?</a>
    </center>

</body>
</html>