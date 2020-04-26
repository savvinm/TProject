<head>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="header_content">
            <div class="logo">
              <a href="../"><img src="../img/logo.png" alt=""></a>
            </div>
            <div class="left_part">
              <div class="menu">
                <nav>
                  <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Наша работа</a></li>
                    <li><a href="../admin">Админ</a></li>
                    <li><a href="account.php">Аккаунт</a></li>
                    <?php if(checkisauth($connection))
                    echo '<li><a href="logout.php">Выход</a></li>'; ?>
                  </ul>
                </nav>
              </div>
              <div class="register">
                <ul>
                  <?php if(!checkisauth($connection))
                  echo '<li><a href="register.php">Регистрация </a></li> /
                  <li><a href="auth.php">Вход</a></li>'; ?>
                </ul>
              </div>
            </div>
          </div>
            <hr class="hr-bline">
            <hr class="hr-rline">
        </div>
      </div>
    </div>

  </header>
</body>