<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Donate</title>
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
	<h2>Donate</h2>

	<img src="../images/kitchen.jpg" alt="Accessible kitchen">
	<img src="../images/shower.jpg" alt="Roll-in shower">

	<h3>By making a donation to AHA, you:</h3>
	<ul>
		<li>help a low-income person with a disability live in a safe, decent home</li>
		<li>facilitate the full integration of people with disabilities into the community</li>
		<li>provide housing for someone transitioning out of a nursing home or other institution</li>
		<li>create a more diverse and inclusive community</li>
	</ul>
	<h3>You can support AHA! financially in a number of ways:</h3>
	<ul>
		<li>Direct a donation to support the accessibility, energy efficiency, and upkeep of an AHA! home</li>
		<li>Donate a gift card from Home Depot, Lowes, Office Depot, Staples, etc.</li>
		<li>Honor someone with a tribute or memorial gift</li>
		<li>Make an anonymous gift</li>
		<li>Donate or will a home to AHA!</li>
		<li>Employer matching gifts: please contact us if your employer matches contributions</li>
		<li>Direct a donation of stocks to AHA!</li>
	</ul>
	<h3>To make a tax-deductible donation, donate via PayPal or send a check to:</h3>
	<address class="vcard">
		<p class="org">Accessible Housing Austin!</p>
		<p class="adr">
			<span class="street-address">1640-A E. 2nd Street</span>,
			<span class="locality">Austin</span>,
			<span class="region">Texas</span>
			<span class="postal-code">78702</span>
		</p>
	</address>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donate">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="99VH99YEQSKE8">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Donate via PayPal">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

	<aside role="complementary" aria-label="Linda's comments">
		<blockquote>
			<p>
				The roll-in shower gives us a sense of independence and freedom and peace of mind
				knowing that we can function in this house freely…Housing is a basic implement in
				life and if people can’t afford it, they’re missing one of their fundamental
				rights.. Without those opportunities for everyone, how can we truly be free? Let
				everyone have a chance at happiness and contentment and a feeling of belonging in
				their community.
			</p>
			<footer>
				<cite>-Linda S., AHA! Tenant</cite>
			</footer>
		</blockquote>
	</aside>
</main>

<?php include '../templates/footer.php'; ?>

</body>
</html>
