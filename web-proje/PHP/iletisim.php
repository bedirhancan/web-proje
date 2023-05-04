<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>İletişim</title>
    <link rel="stylesheet" href="CSS/header-footer.css" />
    <link rel="stylesheet" href="CSS/iletisim.css" />
  </head>
  <body id="body">
    <script src="Javascript/validation.js"></script>
    <script src="Javascript/changeValidate.js"></script>

    <header class="main-header">
      <div id="main-nav" class="container-fluid">
        <a class="main-header__logo">Bedirhan Can</a>
        <nav class="main-nav">
          <ul class="main-nav__items">
            <li class="main-nav__item">
              <a href="ana-sayfa.html">Ana Sayfa</a>
            </li>
            <li class="main-nav__item">
              <a href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="main-nav__item">
              <a href="sehrim.html">Şehrim</a>
            </li>
            <li class="main-nav__item">
              <a href="takimimiz.html">Takımımız</a>
            </li>
            <li class="main-nav__item">
              <a href="ilgi-alani.html">İlgi Alanlarım</a>
            </li>
            <li class="main-nav__item">
              <a href="iletisim.html">İletişim</a>
            </li>
            <li class="main-nav__item main-nav__item--login">
              <a class="btn btn-secondary" href="login.html">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="signup-page">
      <div class="container">
      <table   class="table table-striped table-dark my-table" text-align="center">
             <tr>
            	   <td >İsim</td>
            	   <td ><?php echo $_POST["isim"]?></td>
            </tr>
            <tr>
            	   <td >Soyisim</td>
            	   <td ><?php echo $_POST["soyisim"]?></td>
          	</tr>
            <tr>
                <td>Mail</td>
                <td ><?php echo $_POST["email"]?></td>
          	</tr>
            <tr>
                <td>Şifre</td>
                <td ><?php echo $_POST["sifre"]?></td>
            </tr>
            <tr>
                <td>Cinsiyet</td>
                <td ><?php echo $_POST["cinsiyet"]?></td>         
            </tr>  
            <tr>
                <td>Favori Programlama Diliniz</td>
                <td ><?php echo $_POST["language"]?></td>
             </tr>
            <tr>
                <td>Adres</td>
                <td ><?php echo $_POST["adres"]?></td>
            </tr>
             
       </table>
              
    </div>
    </main>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-2">
            <ul id="footer-links">
              <li>
                <a href=""
                  ><small
                    >Copyright © Alaska Company. All rights reserved.</small
                  ></a
                >
              </li>
            </ul>
          </div>
          <div class="col-2">
            <ul id="social-links">
              <li>
                <a
                  href="https://www.facebook.com/bedocann8/"
                  class="fab fa-facebook"
                  target="_blank"
                ></a>
              </li>
              <li>
                <a
                  href="https://twitter.com/bedocann8"
                  class="fab fa-twitter"
                  target="_blank"
                ></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/bedocann8/"
                  class="fab fa-instagram"
                  target="_blank"
                ></a>
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/in/bedirhancan/"
                  class="fab fa-linkedin"
                  target="_blank"
                ></a>
              </li>
              <li>
                <a href="https://vsco.co/bedocann8/" target="_blank">
                  <img
                    class="vsco"
                    src="https://assets.vsco.co/assets/images/icons/vsco-seal.svg"
                    alt="vsco logo"
                  />
                </a>
              </li>
              <li>
                <a
                  href="https://open.spotify.com/user/c3p98u36gl1np9cwmypbmmnf7?si=760845a043b24cd1"
                  class="fab fa-spotify"
                  target="_blank"
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <a href="#body" id="backtotop">
      <i class="fas fa-chevron-circle-up"></i>
    </a>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="Javascript/jquery.js"></script>
    <script src="Javascript/popper.min.js"></script>
    <script src="Javascript/bootstrap.js"></script>
  </body>
</html>
