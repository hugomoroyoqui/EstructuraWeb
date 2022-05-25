<?php

class Router {

  private $viewsManager;

  function __construct(){
    $this->viewsManager = new ViewsManager();
  }

  function loadView($viewType){
    switch ($viewType) {

      # 1. Registrar el nombre de la URL desde donde se va a acceder
      # 2. Ver ViewsManager.php para el paso 2
      # 3. Llamar método previamente creado en el viewsManager y salir del switch

      case "login":
      $this->viewsManager->loadLogin();
      break;

      case "home":
      $this->viewsManager->loadHome();
      break;

      case "coaching":
      $this->viewsManager->loadCoaching();
      break;

      case "company":
      $this->viewsManager->loadCompany();
      break;

      case "components":
      $this->viewsManager->loadComponents();
      break;

      case "contact":
      $this->viewsManager->loadContact();
      break;

      case "design":
      $this->viewsManager->loadDesign();
      break;

      case "development":
      $this->viewsManager->loadDevelopment();
      break;

      case "orders":
      $this->viewsManager->loadOrders();
      break;

      case "services":
      $this->viewsManager->loadServices();
      break;

      case "stock":
      $this->viewsManager->loadStock();
      break;

      case "support":
      $this->viewsManager->loadSupport();
      break;
      
      default:
      $this->viewsManager->loadLogin();
      break;
    }
  }
}
?>
