<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/main.css">
</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo img-fluid" src="../img/logo.png" alt="Logo">
      </a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <?php if (isset($_SESSION["email"])) { ?>
            <li class="nav-item">
              <li class="nav-link text-light m-4 bold">Welkom <?php echo $_SESSION['email']; ?></li>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link text-light m-4" href="../index.php">Homepagina</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light m-4" href="../paginas/prikbord-page.php">Vacaturelijst</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light m-4" href="../paginas/rules-page.php">Huisregels</a>
          </li>
          <?php if (isset($_SESSION["email"])) { ?>
            <li class="nav-item">
              <a class="nav-link text-light m-4" href="../paginas/account-page.php">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light m-4" href="../components/procces-logout.php">Logout</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link text-light m-4" href="../paginas/login-page.php">Inloggen</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
