<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Perpustakaan Digital</title>
    <style>
        body {
            font-family: verdana;
            font-size: 15px; 
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
            margin: 5% 37%;
            border: 1px solid black;
            border-radius: 10px;
            
        }
        table{
            border-collapse: collapse;
            text-align: center;
            margin: 15px;
            
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
    <h1 align="center">Aplikasi Perpustakaan Digital</h1>
    <hr>
    <h2 align="center"><img src="assets/img/PRLogo.png" width = "200px" height = "200px" alt="Logo"></h2>
    
    
        <div class="container">
        <table width="300" border="0" align="center">
            <form action="login-proses.php" method="post">
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
                    <td colspan = "2">
                        <input type="submit" value="login" required>
                    </td>
                </tr> 
            </form>
                <tr>
                    <form action="register.php">
                        <td colspan = "2">
                            <input type="submit" value="Register">
                        </td>
                    </form>
                </tr>
           
        </table>
    </div>
   
</body>
</html>