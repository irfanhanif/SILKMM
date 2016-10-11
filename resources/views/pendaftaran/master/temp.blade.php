<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-3">
  <nav class="black" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">SIHMTC ORG</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot teal" id="index-banner">
    <div class="container">
      <h1 class="header center white-text">Sistem Informasi LKMM ITS</h1>
      <div class="row center">
        <h5 class="header col s12 white-text">@yield('title')</h5>
      </div>
    </div>
  </div>

  <div class="container">
    @yield('body')
  </div>     

  <footer class="page-footer black">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sistem Informasi LKMM</h5>
          <p class="grey-text text-lighten-4">Ini adalah proyek percobaan yang akan digunakan untuk keperluan pelatihan LKMM PRA-TD IX BEM FTIf</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">BEM FTIf</a></li>
            <li><a class="white-text" href="#!">HMTC ITS</a></li>
            <li><a class="white-text" href="#!">HMSI ITS</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Dikembangkan oleh <a class="grey-text text-lighten-4" href="http://materializecss.com">Departemen Teknologi HMTC ITS</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="materialize/js/materialize.js"></script>
  <script src="materialize/js/init.js"></script>

  </body>
</html>
