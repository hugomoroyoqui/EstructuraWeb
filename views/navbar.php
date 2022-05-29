<?php 
  $view = $_GET['view'];
?>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="?view=services">Todos</a></li>
  <li><a href="?view=development">Desarrollo web y movil</a></li>
  <li><a href="?view=support">Soporte tecnico</a></li>
  <li><a href="?view=design">Diseño</a></li>
  <li><a href="?view=components">Venta de componentes</a></li>
  <li><a href="?view=coaching">Consultoria</a></li>
</ul>

<nav class="black">
  <div class="nav-wrapper">
    <a href="?view=home"><img src="./res/img/logo.png" class="brand-logo" style="margin: 5px;" /></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="?view=orders">Estado de pedido</a></li>
      <li><a href="?view=stock">Stock</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="?view=company">Empresa</a></li>
      <li><a href="?view=contact">Contacto</a></li>
    </ul>
  </div>
</nav>

 <nav>
  <div class="nav-wrapper">

    <!-- Home -->
    <div class="col s12" id="breadcrumbHome" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
    </div>

    <!-- Services -->
    <div class="col s12" id="breadcrumbServices" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=services" class="breadcrumb">Servicios</a>
    </div>

    <!-- Design -->
    <div class="col s12" id="breadcrumbDesign" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=services" class="breadcrumb">Servicios</a>
      <a href="?view=design" class="breadcrumb">Diseño</a>
    </div>

  </div>
</nav>

<h5 class="hiddenView" id="<?php if($view) echo $view ?>"></h5>

<script src="./scripts/navbar.js?v1.0.0"></script>
