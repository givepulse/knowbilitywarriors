<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home - Accessible Housing Austin! AHA!</title>
<?php include '../layouts/header.php'; ?>

<main id="mainContent" role="main" tabindex="-1">
    <div class="row" style="margin-top:2em;">
        <div class="col-md-5">
            <img src="../images/thompsons.jpg" class="img-rounded" width="400px" alt="Father with kids in front of house">
        </div>
        <div class="col-md-6">
            <h1>
                Accessible, Affordable, and Integrated <br/> 
                Housing for People with Disabilities in <br/>
                Austin, Texas
            </h1>
            <aside role="complementary">
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
            <div class="row" style="margin-bottom:2em;">
                <div class="col-md-3">
                    <img src="../images/fairhousinglogo.png" width="90px" alt="Equal Housing Opportunity">
                </div>
                <div class="col-md-3">
                    <form style="margin-top:1em;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donate">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="99VH99YEQSKE8">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate via PayPal">
                        <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>

</body>
</html>
