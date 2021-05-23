<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
	<title>
		Mamed Noor Gohabur, Développeur Fullstack basé à Paris, France.
	</title>
	<meta name="description" content="Add small description of yourslef." />
	<meta name="keywords" content="GOHABUR Mamed Noor, Programming Stacks : React and React-Native, Node.js, PHP, Python, MySQL" />
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>

	<?php
	include "./html/navbar.html";
	include "./html/main.html";
	include "./html/projet.html";
	include "./html/experience.html";
	include "./html/contact.html";
	include "./html/footer.html";
	?>

	<a href="#top" class="back-to-top" title="Back to Top">
		<img src="./images/arrow-up.svg" alt="Back to Top" class="back-to-top__image" />
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