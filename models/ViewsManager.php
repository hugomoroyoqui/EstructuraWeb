<?php

/**
*
*/
class ViewsManager
{

  private $head;
  private $fileName;

  function __construct()
  {
    $this->head = new Head();
  }

  function setFileName($fileName) {

    $this->fileName = $fileName;
    if($fileName == "login.php") {
      $this->generateBody();
    } else if($fileName == "home.php" || $fileName == "coaching.php" || $fileName == "company.php" || $fileName == "components.php" || $fileName == "contact.php" || $fileName == "design.php" || $fileName == "development.php" || $fileName == "orders.php" || $fileName == "serviceslist.php" || $fileName == "stock.php" || $fileName == "support.php"){
      $this->generateAdminBody();
    }

  }

  function generateBody(){
    echo '<body style="background: linear-gradient(#212121, #212121);
    width: 100vw;
    height: 100vh;">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div id="main_container" class="col s12">';
    include './views/' . $this->fileName;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
  }

  function generateAdminBody() {
    echo '<body style="background-color: #EEEEEE;">';
    echo '<header>';
    include './views/navbar.php';
    echo '</header>';
    echo '<main style="background-color: #EEEEEE; ">';
    echo '<div class="container">';
    echo '<div id="main_container" class="col s12">';
    include './views/' . $this->fileName;
    echo '</div>';
    echo '</div>';
    echo '</main>';
    include './views/footer.php';
    echo '</body>';
    echo '</html>';
  }

  # 2. Crear método con nombre loadNombreDeVista
    // Asignar el título del encabezado
    // Asignar el nombre de la vista

  function loadLogin(){
    $this->head->setTitle("Inicio de sesión");
    $this->setFileName("login.php");
  }

  function loadHome(){
    $this->head->setTitle("Dashboard");
    $this->setFileName("home.php");
  }

  function loadCoaching(){
    $this->head->setTitle("Consultoria");
    $this->setFileName("coaching.php");
  }

  function loadCompany(){
    $this->head->setTitle("Empresa");
    $this->setFileName("company.php");
  }

  function loadComponents(){
    $this->head->setTitle("Components");
    $this->setFileName("components.php");
  }

  function loadContact(){
    $this->head->setTitle("Contacto");
    $this->setFileName("contact.php");
  }

  function loadDesign(){
    $this->head->setTitle("Diseño");
    $this->setFileName("design.php");
  }

  function loadDevelopment(){
    $this->head->setTitle("Desarrollo");
    $this->setFileName("development.php");
  }

  function loadOrders(){
    $this->head->setTitle("Pedidos");
    $this->setFileName("orders.php");
  }

  function loadServices(){
    $this->head->setTitle("Servicios");
    $this->setFileName("serviceslist.php");
  }

  function loadStock(){
    $this->head->setTitle("Stock");
    $this->setFileName("stock.php");
  }

  function loadSupport(){
    $this->head->setTitle("Soporte Tecnico");
    $this->setFileName("support.php");
  }

}
?>
