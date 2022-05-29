var view = $('.hiddenView').attr("id");

if (view == "home") {
	$("#breadcrumbHome").show(0);
} else if (view == "services") {
	$("#breadcrumbServices").show(0);
} else if (view == "design") {
	$("#breadcrumbDesign").show(0);
}

$(".dropdown-trigger").dropdown();