var view = $('.hiddenView').attr("id");

switch (view) {
      case "home":
      $("#breadcrumbHome").show(0);
      break;

      case "coaching":
      $("#breadcrumbCoaching").show(0);
      break;

      case "company":
      $("#breadcrumbCompany").show(0);
      break;

      case "components":
  	  $("#breadcrumbComponents").show(0);
      break;

      case "contact":
      $("#breadcrumbContact").show(0);
      break;

      case "design":
      $("#breadcrumbDesign").show(0);
      break;

      case "development":
      $("#breadcrumbDevelopment").show(0);
      break;

      case "orders":
      $("#breadcrumbOrders").show(0);
      break;

      case "services":
      $("#breadcrumbServices").show(0);
      break;

      case "stock":
      $("#breadcrumbStock").show(0);
      break;

      case "support":
      $("#breadcrumbSupport").show(0);
      break;
      
      default:
      $("#breadcrumbHome").show(0);
      break;
    }

$(".dropdown-trigger").dropdown();