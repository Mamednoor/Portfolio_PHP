<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/png" href="" />
	<title>
		Mamed Noor Gohabur, Développeur Fullstack basé à Paris, France.
	</title>
	<meta name="description" content="Add small description of yourslef." />
	<meta name="keywords" content="GOHABUR Mamed Noor, Programming Stacks : React and React-Native, Node.js, PHP, Python, MySQL" />
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>

	<?php
		include "frontend/header.php";
		include "frontend/main.php";
		include "frontend/display.php";
		include "frontend/experience.php";
		include "frontend/contact.php";
		include "frontend/footer.php";
	?>

	<a href="#top" class="back-to-top" title="Back to Top">
		<img src="asset/images/arrow-up.svg" alt="Back to Top" class="back-to-top__image" />
	</a>
	<script src="js/script.js"></script>
	<script>
		function myFunction() {
			var x = document.getElementById("top");
			if (x.className === "header") {
				x.className += " responsive";
			} else {
				x.className = "header";
			}
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script>
		var typed = new Typed('#typed', {
			stringsElement: '#typed-strings',
			typeSpeed: 50,
			smartBackspace: true,
			loop: true,
			backDelay: 1500,
		});
	</script>
</body>

</html>