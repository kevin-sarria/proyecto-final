<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<?php include("../clases/sesiones.php"); ?>
<header class="cabecera">
  <div class="contenedor logo_nav_container">
    <a href="v_lista_empresas_admin.php" class="logo"><img src="../img/logo2.png" alt=""></a>
    <div class="menu-icon">
      <span class="material-icons">
        menu
      </span>
    </div>
    <nav class="navegacion">
      <ul>
        <!--Crea enlaces para redirecionar al usuario en el sist-->
        <!--<li><a href="../controlador/c_seccion.php">  Tablas </a></li>-->
        <li><a href="../vista/v_tabla_tipo_empresa.php"> Categoría </a></li>
        <li><a href="../vista/v_lista_empresas_admin.php"> Vista Usuario </a></li>
        <li><a href="../controlador/salir.php"> Salir </a></li>
      </ul>
    </nav>
  </div>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-X4RK0GG1C3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-X4RK0GG1C3');
  </script>
  <script src="../js/fn_menu.js"></script>
</header>