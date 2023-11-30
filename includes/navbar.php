<head>
  <link rel="stylesheet" href="../style/main.scss">
  <link rel="stylesheet" href="../style/headerfooter.css">
</head>

<header>
  <nav class="navbar">
    <img class="logo" src="../img/logo.png" alt="Logo">
    <ul class="nav-links-container">
      <?php if (isset($_SESSION["email"])) { ?>
        <li class="nav-links">Welkom <?php echo $_SESSION['email']; ?></li>
      <?php } ?>

      <li><a class="nav-links" href="../index.php">Home</a></li>
      <li><a class="nav-links" href="../paginas/prikbord-page.php">Vacaturelijst</a></li>
      <li><a class="nav-links" href="../paginas/rules-page.php">Huisregels</a></li>

      <?php if (isset($_SESSION["email"])) { ?>
        <li><a class="nav-links" href="../paginas/account-page.php">Account</a></li>
        <li><a class="nav-links" href="../paginas/chat-hub.php">Messages</a></li>
        <li><a class="nav-links" href="../paginas/logout-page.php">Logout</a></li>
      <?php } else { ?>
        <li><a class="nav-links" href="../paginas/login-page.php">Inloggen</a></li>
      <?php } ?> 
    </ul>
  </nav>
</header>
