<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="https://wallpapers.com/images/hd/my-chemical-romance-live-on-the-murder-scene-c-d-31vn0kiykgfi6wbp.png" type="image/x-icon">

    <style>
@keyframes slideIn {
  0% {
    transform: translateX(-50px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
</style>
  
</head>

<body class="bg-[#141414] min-h-screen flex flex-col">

  <nav class="bg-[#700000] py-2">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">

      <div class="d-flex align-items-center gap-2">
        <a href="/home">
          <img src="https://www.pngall.com/wp-content/uploads/11/My-Chemical-Romance-Transparent.png" alt="Logo" style="height: 40px;">
        </a>
        <a class="font-creepster text-decoration-none" href="/home">
          <span class="text-white fs-4 fw-bold">I'm Not Okay (Net)</span>
        </a>
      </div>

      <div>
        <a href="/login" class="btn btn-outline-light btn-sm me-2">Sign in</a>
        <a href="/register" class="btn btn-light btn-sm">Sign up</a>
      </div>

    </div>
  </nav>

  <main class="flex-1 w-full">
    <div class="container mt-4 text-white">
      @yield('content')
    </div>
  </main>

  <footer class="bg-[#700000] text-white py-4 w-full mt-auto">
    <div class="container text-center text-md-start">
      <p class="mb-0">Copyright © 2026 I'm Not Okay (Net) - Todos os direitos reservados</p>
    </div>
  </footer>

</body>

</html>
