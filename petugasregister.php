<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Perpustakaan Digital</title>
    <style>
        body {
            font-family: verdana;
            font-size: 12px;
            
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            color: green;
        }

        .container{
            background-color: transparent;
            width: 25%;
            margin: 15% 37%;
            border: 1px solid black;
            border-radius: 10px;
        }
        table{
            border-collapse: collapse;
            text-align: center;
            margin:7px;

        }
        input[type=submit]{
            width: 55px;
            cursor: pointer;
            margin: 4px 0;
            padding: 7px 6px;
            border: none;
        }
        input{
            border-radius:10px;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <h1 align="center">Register Account</h1>
    <hr>
    
        <div class="container">
        <table width="300" border="0" align="center">
            <form action="regis-proses.php" method="post">
            <tr>
                <td width="150">Username</td>
                <td>
                    <input type="text" name="username" required autofocus>
                </td>
            </tr>
            <tr>
                <td width="150">Password</td>
                <td>
                    <input type="password" name="password" required autofocus>
                </td>
            </tr>
            <tr>
                <td width="150">Email</td>
                    <td>
                    <input email="password" name="email" required autofocus>
                </td>
            </tr>
            <tr>
                <td width="150">Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" required autofocus>
                </td>
            </tr>
            <tr>
                <td width="150">Alamat</td>
                <td>
                    <input type="text" name="alamat" required autofocus>
                </td>
            </tr>
            <tr>
                <td width="150">Level</td>
                <td>
                    <select name="level">
                        <option value="petugas">Petugas</option>
                        <option value="admin">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <input type="submit" value="Register" required>
                </td>
            </tr>
            </form>
            <tr>
                <form action="index.php">
                    <td colspan = "2">
                        <input type="submit" value="Back" required>
                    </td>
                </form>
            </tr>
        </table>
    </div>
    
</body>
</html>