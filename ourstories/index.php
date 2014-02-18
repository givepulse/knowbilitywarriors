<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Stories</title>
<!-- Acorn Media Player specific -->
<link href="acornmediaplayer/acornmediaplayer.base.css" rel="stylesheet" type="text/css">
<!-- Theme -->
<link href="acornmediaplayer/themes/access/acorn.access.css" rel="stylesheet" type="text/css">
<?php include '../layouts/header.php'; ?>

<main id="mainContent" role="main" tabindex="-1">
    <div>
        <h1>Our Stories</h1>
    </div>
    <p class="lead" style="font-size:150%; margin-bottom:3em;">We serve a diverse range of Austinites with disabilities, including adults and children with mobility impairments, visual impairment, chronic illness, and other physical and emotional disabilities.</p>
    
    <h2>Meet Elainna</h2>
    <div class="row clearfix" style="margin-bottom:4em;">
        <div class="col-md-6">
            <img src="../images/elainna.jpg" style="width:480px" class="img-rounded" alt="Elainna smiling in front of her house">
        </div>
        <div class="col-md-6">
            <p style="font-size:130%;">
                Elainna is a vibrant young woman with a warm smile. The oldest of several children, she grew up in Austin and graduated from Pflugerville High School. Nine years later, she developed a skin disorder that caused her to have chronic arthritis and difficulty walking. Unable to work, she was able to obtain housing through AHA!. Elainna and her son are very happy in their new home and neighborhood. Elainna feels safe letting her son play outdoors. Her son loves his teachers and is doing much better at his new school.
            </p>
        </div>
    </div>
    
    <h2>Meet James</h2>
    <div class="row clearfix" style="margin-bottom:4em;">
        <div class="col-md-6">
            <img src="../images/thompsons.jpg" style="width:480px" class="img-rounded" alt="Father with kids in front of house">
        </div>
        <div class="col-md-6 clearfix">
            <p style="font-size:130%;">
                James worked in the commercial and residential construction business until he had a stroke in 2011 which caused paralysis in his legs . While he was recovering in rehab, he was unable to pay his mortgage, and he lost his house to foreclosure. He was able to move into a home that had been rehabilitated for accessibility by AHA!. He says, “The house is in a good location for me and I’d like to stay as long as possible. I am able to go grocery shopping with my kids using the bus…The elementary school that my son goes to is just up the street.”
            </p>
        </div>
    </div>
    
    
     <h2>Meet Linda</h2>
        <div class="row clearfix">
			<figure>
            <div class="col-md-6">
				<video controls="controls" width="480" height="360" poster="video/LindaPrevieImage.png" preload="metadata" aria-describedby="full-descript">
					<source type="video/mp4" src="video/LindasStory.mp4" />
					<track src="video/CCLindasStory.srt" kind="subtitles" srclang="en" label="English" />
					You can also download <a href="video/LindasStory.mp4">Linda's Story</a>.
				</video>
            </div>
            <div class="col-md-6">
				<figcaption id="full-descript">
					<p style="font-size:130%;">
						When Christine S. needed surgery, her twin adult daughters, Linda and Kathy, were forced to live in a nursing home until they all found affordable and accessible housing with Accessible Housing Austin!.
					</p>
				</figcaption>
            </div>
			</figure>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>

	<script src="../js/jquery-ui-1.10.0.custom.min.js"></script>

	<!-- Optional - for older browser support - Webshim Polyfill -->
	<script src="../js/modernizr.custom.js"></script>
	<script src="//afarkas.github.io/webshim/demos/js-webshim/minified/polyfiller.js"></script>
	<script>
		if(window.webshims) {
			webshims.polyfill('mediaelement');
		}
	</script>

	<script src="acornmediaplayer/jquery.acornmediaplayer.js"></script>

	<!-- Call the plugin -->
	<script>
		jQuery(function() {
			jQuery('video, audio').acornMediaPlayer();
		});
	</script>

</body>
</html>
