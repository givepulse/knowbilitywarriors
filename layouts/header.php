<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../js/jquery-accessibleMegaMenu.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="../js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript">
	function fixGoogleSearch()
	{
		document.getElementById("gsc-i-id1").title = "search terms"; // fix for search input title
		$("table.gsc-search-box").attr("role", "presentation"); // fix for table role
		$("input.gsc-input").css("border-width", "3px"); // fix for high contrast
	}
</script>
</head>
<body class="container" onload="fixGoogleSearch()">
<div class="row" >
    <div class="col-md-1">
        <header style="margin: 1em 0;" role="banner">
	        <div class="skip">
				<a href="#mainContent">Skip to Main Content</a>
			</div>
			<a href="../" title="Accessible Housing Austin! HomePage">
				<img id="aha-logo" src="../images/aha_logo.png" alt="Accessible Housing Austin! AHA!">
			</a>
        </header>        
    </div>
        <div role="search" aria-labelledby="Search Site" class="col-md-4 col-md-offset-7" style="margin-top:1em;">
            <label for="search" style="position: absolute;left: -3000px;">Search</label><gcse:searchbox-only></gcse:searchbox-only>
        </div>
    <div class="col-md-9" style="margin-top:2em;padding-left:4em;">
        <?php include '../templates/nav.php'; ?>
    </div>
</div>
