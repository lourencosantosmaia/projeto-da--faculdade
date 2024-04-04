<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <!-- Navigation -->
    <div class="top-nav">
      <div class="container d-flex">
        <p>Faça seu pedido on-line ou ligue para nós: (13) 34222617</p>
        <ul class="d-flex">
          <li><a href="#">Sobre nós</a></li>
          <li><a href="#">Perguntas frequentes</li>
          <li><a href="#">Contato</a></li>
        </ul>
      </div>
    </div>
    <div class="navigation">
      <div class="nav-center container d-flex">
        <a href="index.html" class="logo"><h1>Santo Biquini</h1></a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.html" class="nav-link">Shop</a>
          </li>
          <li class="nav-item">
            <a href="#terms" class="nav-link">Termos</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contato</a>
          </li>
          <li class="icons d-flex">
            <a href="login.html" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </li>
        </ul>

        <div class="icons d-flex">
          <a href="login.html" class="icon">
            <i class="bx bx-user"></i>
          </a>
          <div class="icon">
            <i class="bx bx-search"></i>
          </div>
          <div class="icon">
            <i class="bx bx-heart"></i>
            <span class="d-flex">0</span>
          </div>
          <a href="cart.html" class="icon">
            <i class="bx bx-cart"></i>
            <span class="d-flex">0</span>
          </a>
        </div>

        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>
    <!-- Login -->
    <div class="container">
      <div class="login-form">
        <form action="cadastro.php" method="post">
          <h1>Cadastro Do Cliente</h1>
          <p>
            Por favor preencha este formulário para criar uma conta. ou
            <a href="login.html">Login</a>
          </p>

          <label for="email">Nome</label>
          <input type="text" id='nome'placeholder="Digite seu Nome " name="Nome" required />

          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter Email" name="email" required />

          <label for="psw">Password</label>
          <input
            type="password" id='password'
            placeholder="Enter Password"
            name="psw"
            required
          />

          <label for="psw-repeat">Repeat Password</label>
          <input
            type="password" id='repeat password'
            placeholder="Repeat Password"
            name="psw-repeat"
            required
          />

          <label>
            <input
              type="checkbox"
              checked="checked"
              name="remember"
              style="margin-bottom: 15px"
            />
            Lembre de mim
          </label>

          <p>
            Ao criar uma conta você concorda com nossos
            <a href="#">Termos e privacidade</a>.
          </p>

          <div class="buttons">
            <button type="button" class="cancelbtn">Cancelar</button>
            <button type="submit" class="signupbtn">Inscrever-se</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMAÇÃO</h4>
          <a href="">Sobre nós</a>
          <a href="">Entre em contato conosco</a>
          <a href="">Termos e Condições</a>
          <a href="">Guia de envio</a>
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="">Loja on-line</a>
          <a href="">Atendimento ao cliente</a>
          <a href="">Promoção</a>
          <a href="">Marca principal</a>
        </div>
        <div class="col d-flex">
          <a href="
          https://www.facebook.com/Stobiquini?mibextid=ZbWKwL" target="_blank">
          <span><i class="bx bxl-facebook-square"></i></span>
          </a>
          <a href="https://www.instagram.com/stobiquini?igsh=MWZqdzg0NGQybmFnZg%3D%3D" target="_blank">
          <span><i class="bx bxl-instagram-alt"></i></span>
        </a>
        </div>
      </div>
    </footer>

    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>