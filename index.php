<?php
include "Controller/client/clientController.php";
$cc = new ClientController();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FUN ZONE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!--Font awsome-->
	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gluten&display=swap" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
	<?php include "./layout/navbar.php" ?>


	<!-- MAIN -->
	<main>
		<?php $cc->routes(); ?>
	</main>

	<?php include "./layout/footer.php" ?>

</body>
<script>
	const asideNav = document.querySelector(".search-nav-container");
	const footer = document.querySelector("#footer");
	if (asideNav && footer) {
		document.onscroll = () => {
			const rectFooter = footer.getBoundingClientRect();
			const rectAside = asideNav.getBoundingClientRect();
			if (rectFooter.top - rectAside.bottom <= 50 || rectAside.bottom === 0) {
				asideNav.classList.add("hidden-search-nav-container");
			} else {
				asideNav.classList.remove("hidden-search-nav-container");
			}
		}
	}
</script>

</html>