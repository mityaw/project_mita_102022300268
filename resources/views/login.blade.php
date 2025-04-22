<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login daftar superhero</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffe6f0; /* Soft pink background */
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-box {
      background: white;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(255, 192, 203, 0.5);
      width: 100%;
      max-width: 400px;
    }
    .login-title {
      color: #ff69b4;
      font-weight: bold;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .btn-soft-pink {
      background-color: #ffb6c1;
      color: white;
      border: none;
    }
    .btn-soft-pink:hover {
      background-color: #ff8da3;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2 class="login-title">Login dulu yeah 💖</h2>
    <form action="login" method ="POST">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" for="name" name="name">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" for="password" name="password">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-soft-pink">Yuk dilihat daftarnya <3</button>
      </div>
      <div class="text-center">
      <span>Belum punya akun? </span> <a href="http://127.0.0.1:8000/register" class="text-decoration-none" style="color: #ff69b4; font-weight: bold;">Daftar di sini 💫</a>
    
</div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
