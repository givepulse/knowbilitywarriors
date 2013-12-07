<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Housing</title>
<?php include '../layouts/header.php'; ?>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<main id="mainContent" role="main" tabindex="-1">
    <div>
        <h1 style="padding-bottom:1em;">Our Housing</h1>
    </div>
    <div class="col-md-4">
        <img src="../images/construction.jpg" width="300px" class="img-rounded" alt="Couple in wheelchairs in front of lot under construction">
        <img src="../images/house.jpg" width="300px" class="img-rounded" style="margin-top:1em;" alt="House with trees in the front yard">
    </div>
    <div class="col-md-8" style="margin-bottom:2em;">
        <p>
            AHA!’s homes are integrated into neighborhoods around Austin. Our first two homes were
            received from and are dedicated to the memory of two ardent disability rights activists,
            Carol Eisenberg and James “J.T.” Templeton. Carol spent her life advocating for
            independence and access; after she died, her family wanted to ensure that the accessibility
            modifications she had made would continue to benefit other people with disabilities. AHA!
            purchased her home with City of Austin affordable housing bond funding. J.T., one of AHA!’s
            founding members,  fought his way out of state institutions where he had been forced to live
            for thirty years and, along with his wife Karen, eventually bought and built a fully
            accessible home through the Texas Home of Your Own program. Upon his death he gave his home
            to AHA! so that other people with disabilities could live in a home that was accessible,
            affordable and integrated into a neighborhood.
        </p>

        <p style="font-weight:bold;font-size:12pt;">
            AHA! believes that we all deserve to live in homes that are not only safe and decent but that
            allow us to exercise our rights to independence and dignity, that we can afford, and that
            allow our children and us to participate in our neighborhoods. For AHA!, the good home is
            supported by three pillars: Accessibility, Affordability, and Integration.
        </p>

        
        <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#dff0d8;">
            <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Accessibility = Dignity and Independence
                </a>
            </h2>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <h4>Our houses include the following features that allow our tenants to live comfortably and independently in their own homes:</h4>
                <ul>
                    <li>Ramps</li>
                    <li>Wide doorways</li>
                    <li>Levered door handles</li>
                    <li>Hardwood, tiled or laminate flooring</li>
                    <li>Roll-under sinks</li>
                    <li>Lowered counter-tops</li>
                    <li>Smoke detectors for people with hearing and visual impairments</li>
                    <li>Roll-in showers where possible</li>
                </ul>
            </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#dff0d8;">
            <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                Affordability = Security and Stability
                </a>
            </h2>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                Our tenants are people with disabilities who would otherwise be priced out of the current
                housing market or forced to live in institutions. Our housing alleviates the negative
                effects of poverty and removes uncertainty; our tenants pay rent that is commensurate with
                their incomes, and AHA! accepts Section Eight vouchers. We also strive to reduce the
                burden of utility costs by making our houses energy efficient.
            </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#dff0d8;">
            <h2 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                Integration = Participation in Community
                </a>
            </h2>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                AHA!’s scattered-site model allows our tenants be part of a neighborhood. Living in higher
                opportunity neighborhoods, they have access to shopping and public transportation; adults
                are close to community college and children are close to good schools. Our tenants actively
                participate in the life of the community: their children make friends with other children
                and their families enjoy neighborhood block parties.
            </div>
            </div>
        </div>
        </div>
        
<?php /*Below is the old code without the extra styling and js for collapse*/
/*
        <h2 class="alert alert-success">Accessibility = Dignity and Independence</h2>
        <div style="margin:0 1em;">
            <h4>Our houses include the following features that allow our tenants to live comfortably and independently in their own homes:</h4>
            <ul>
                <li>Ramps</li>
                <li>Wide doorways</li>
                <li>Levered door handles</li>
                <li>Hardwood, tiled or laminate flooring</li>
                <li>Roll-under sinks</li>
                <li>Lowered counter-tops</li>
                <li>Smoke detectors for people with hearing and visual impairments</li>
                <li>Roll-in showers where possible</li>
            </ul>
        </div>

        <h2 class="alert alert-success">Affordability = Security and Stability</h2>
        <p style="margin:0 1em;">
            Our tenants are people with disabilities who would otherwise be priced out of the current
            housing market or forced to live in institutions. Our housing alleviates the negative
            effects of poverty and removes uncertainty; our tenants pay rent that is commensurate with
            their incomes, and AHA! accepts Section Eight vouchers. We also strive to reduce the
            burden of utility costs by making our houses energy efficient.
        </p>

        <h2 class="alert alert-success">Integration = Participation in Community</h2>
        <p style="margin:0 1em;">
            AHA!’s scattered-site model allows our tenants be part of a neighborhood. Living in higher
            opportunity neighborhoods, they have access to shopping and public transportation; adults
            are close to community college and children are close to good schools. Our tenants actively
            participate in the life of the community: their children make friends with other children
            and their families enjoy neighborhood block parties.
        </p>
    </div>
 * 
 * 
 */?>
</main>

<?php include '../templates/footer.php'; ?>

</body>
</html>
