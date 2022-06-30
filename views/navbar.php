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

 <nav class="black">
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

    <!-- Coaching -->
    <div class="col s12" id="breadcrumbCoaching" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=services" class="breadcrumb">Servicios</a>
      <a href="?view=coaching" class="breadcrumb">Coaching</a>
    </div>

    <!-- Company -->
    <div class="col s12" id="breadcrumbCompany" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=company" class="breadcrumb">Empresa</a>
    </div>

    <!-- Components -->
    <div class="col s12" id="breadcrumbComponents" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=services" class="breadcrumb">Servicios</a>
      <a href="?view=components" class="breadcrumb">Componentes</a>
    </div>

    <!-- Contact -->
    <div class="col s12" id="breadcrumbContact" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=contact" class="breadcrumb">Contacto</a>
    </div>

    <!-- Development -->
    <div class="col s12" id="breadcrumbDevelopment" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=services" class="breadcrumb">Servicios</a>
      <a href="?view=development" class="breadcrumb">Desarrollo</a>
    </div>

    <!-- Orders -->
    <div class="col s12" id="breadcrumbOrders" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=orders" class="breadcrumb">Pedido</a>
    </div>

    <!-- Stock -->
    <div class="col s12" id="breadcrumbStock" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=stock" class="breadcrumb">Stock</a>
    </div>

    <!-- Support -->
    <div class="col s12" id="breadcrumbSupport" style="display: none;">
      <a href="?view=home" class="breadcrumb">Home</a>
      <a href="?view=services" class="breadcrumb">Servicios</a>
      <a href="?view=support" class="breadcrumb">Soporte</a>
    </div>

  </div>
</nav>

<h5 class="hiddenView" id="<?php if($view) echo $view ?>"></h5>

<script src="./scripts/navbar.js?v1.0.0"></script>
