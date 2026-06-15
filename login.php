<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mitra SMK Pusdikhubad</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: #f3f4f6; display: flex; justify-content: center; align-items: center; height: 100vh; }
        
        .login-wrapper {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 380px;
        }
        .login-wrapper h2 { text-align: center; color: #111827; font-weight: 600; margin-bottom: 0.5rem; }
        .login-wrapper p { text-align: center; color: #6b7280; font-size: 0.875rem; margin-bottom: 2rem; }
        
        .input-group { margin-bottom: 1.2rem; }
        .input-group label { display: block; font-size: 0.875rem; font-weight: 500; color: #374151; margin-bottom: 0.5rem; }
        .input-group input {
            width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 8px;
            font-size: 1rem; transition: border-color 0.2s; outline: none;
        }
        .input-group input:focus { border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); }
        
        .btn-login {
            width: 100%; padding: 0.75rem; background: #111827; color: white; border: none;
            border-radius: 8px; font-size: 1rem; font-weight: 500; cursor: pointer; transition: background 0.2s;
        }
        .btn-login:hover { background: #374151; }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <h2>Selamat Datang</h2>
        <p>Portal Kemitraan SMK Pusdikhubad</p>
        
        <form action="proses.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username..." required autocomplete="off">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password..." required>
            </div>
            <button type="submit" class="btn-login">Masuk Dashboard</button>
        </form>
    </div>

</body>
</html>
