<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Uuemõisa Miil 2023</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .jumbo{
            background-image: url("https://picsum.photos/1200/400");
            color: Azure;
        }

  </style>
</head>
<body>
<!-- Banner-->
   <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 text-center jumbo">
              <h1 class="display-2">Uuemõisa Miil 2023</h1>
        </div>

  <!-- Navigeermine -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-md">
      <a class="navbar-brand" href="index.php?leht=index">Meiega jooksed kiiresti !</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="index.php?leht=index">Avaleht</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="galerii.php?leht=galerii">Galerii</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="kontakt.php?leht=kontakt">Kontakt</a>
          </li>
        </ul>
        <!-- Admini kontoga sisse logimine -->
        <form class="d-flex" method="POST" action="login.php">
          <input class="form-control me-2" type="text" name="username" placeholder="Kasutajanimi" required>
          <input class="form-control me-2" type="password" name="password" placeholder="Parool" required>
          <button class="btn btn-outline-primary" type="submit">Logi sisse</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

