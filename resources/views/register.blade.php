<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daftar Superhero</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #ffe6f0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .register-box {
      background: white;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(255, 192, 203, 0.5);
      width: 100%;
      max-width: 400px;
    }
    .register-title {
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

  <div class="register-box">
    <h2 class="register-title">Yuk daftar dulu 💫</h2>
    <form action="{{route('register.auth')}}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Buat name kerenmu" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="youremail@gmail.com" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Buat password rahasia" required />
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-soft-pink">Daftar Sekarang 💖</button>
        <span>sudah punya akun? </span><a href="{{ route('login') }}" class="text-decoration-none" style="color: #ff69b4; font-weight: bold;">login di sini 💫</a>

      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
