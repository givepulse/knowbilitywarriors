<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Accessible Housing Austin! AHA!</title>
<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-accessibleMegaMenu.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="../js/html5shiv.js"></script>
<![endif]-->
</head>
<body>

<?php include '../templates/nav.php'; ?>

<header>
	<h1>
		<img src="../images/aha_logo.png" alt="Accessible Housing Austin! AHA!">
	</h1>
</header>

<main id="mainContent" role="main" tabindex="-1">
	<h2>
		Accessible, Affordable, and Integrated Housing for
		People with Disabilities in Austin, Texas
	</h2>

	<img src="../images/thompsons.jpg" alt="Father with kids in front of house">

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donate">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="99VH99YEQSKE8">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Donate via PayPal">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

	<aside role="complementary" aria-label="Elainna's comments">
		<blockquote>
			<p>
				This house is a home—it’s a home…The ramp is great because I can’t do stairs really
				well. I want to say thank you to all the people who support this cause because
				without it, I don’t know where I would be right now.
			</p>
			<footer>
				<cite>-Elainna, <abbr title="Accessible Housing Austin">AHA</abbr>! Tenant</cite>
			</footer>
		</blockquote>
	</aside>
</main>

<?php include '../templates/footer.php'; ?>

</body>
</html>
