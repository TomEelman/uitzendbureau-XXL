<head>
  <link rel="stylesheet" href="../style/main.scss">
  <link rel="stylesheet" href="../style/headerfooter.css">
</head>

<header>
  <nav class="navbar">
    <img class="logo" src="../img/logo.png" alt="Logo">
    <ul class="nav-links-container">
      <li><a class="nav-links" href="../index.php">Home</a></li>
      <li><a class="nav-links" href="../paginas/prikbord-page.php">Vacaturelijst</a></li>
      
      <?php if (isset($_SESSION["firstname"])) { ?>
        <li><a class="nav-links" href="../index.php">Account</a></li>
        <li><a class="nav-links" href="../components/logout-page.php">Logout</a></li>
      <?php } else { ?>
        <li><a class="nav-links" href="../paginas/login-page.php">Inloggen</a></li>
      <?php } ?> 

      <li><a class="nav-links" href="../paginas/rules-page.php">Huisregels</a></li>
    </ul>
  </nav>
</header>