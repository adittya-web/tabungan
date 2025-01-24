<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Penjualan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #8e44ad, #3498db);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .login-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            color: #333;
        }
        .login-container h3 {
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
            color: #8e44ad;
        }
        .btn-custom {
            background: #8e44ad;
            color: #fff;
            border: none;
        }
        .btn-custom:hover {
            background: #722e9b;
        }
        .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 0.2rem rgba(142, 68, 173, 0.25);
        }
        .login-footer {
            margin-top: 15px;
            text-align: center;
        }
        .login-footer a {
            color: #8e44ad;
            text-decoration: none;
        }
        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3>Login</h3>
        <form class="form-horizontal m-t-20" action="/login/ceklogin" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan username Anda" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan password Anda" required>
            </div>
            <button type="submit" class="btn btn-custom btn-block">Masuk</button>
            <div class="login-footer">
                <p>Belum punya akun? <a href="#">Daftar sekarang</a></p>
            </div>
        </form>
    </div>
</body>
</html>