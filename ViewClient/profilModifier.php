<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Facebook and Twitter integration -->
  	 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopify </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="manifest" href="/application/favicons/site.webmanifest" crossorigin="use-credentials">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                

                <?php 
                include "../config.php";
                include "header.php"; 
                ?>
               
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>



    <section class="ftco-section" >
    <div class="bg-img">

        
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		
								
			      	</div>
			    <form class="signin-form">

                <?PHP

                        include "../core/service_client.php";

                        if (isset($_GET['ID'])){
                        $ser=new service_client();
                            $result=$ser->recuperer($_GET['ID']);

                        foreach($result as $row){
                            
                            $ID=$row['ID'];
                            $identifiant=$row['identifiant'];
                            $nom=$row['nom'];
                            $prenom=$row['prenom'];
                            $age=$row['age'];
                            $sexe=$row['sexe'];
                            $adresse=$row['adresse'];
                            $email=$row['email'];
                            $mdp=$row['mdp'];
                            $fidelite=$row['fidelite'];
                        ?>
                            <div class="w-100">
			      			    <h3 class="mb-4">Update your Profil</h3>
			      		    </div>
                                <input type="hidden" name="ID" value="<?PHP echo $ID ?>"><br>
                                <input type="hidden" name="identifiant" value="<?PHP echo $identifiant ?>"><br>
                                <input class="form-control" type="text" name="nom" value="<?PHP echo $nom ?>"><br>
                                <input class="form-control" type="text" name="prenom" value="<?PHP echo $prenom ?>"><br>
                                <input class="form-control" type="number" name="age" value="<?PHP echo $age ?>"><br>
                                <input class="form-control" type="text" name="sexe" value="<?PHP echo $sexe ?>"><br>
                                <input class="form-control" type="text" name="email" value="<?PHP echo $email ?>"><br>
                                <input class="form-control" type="text" name="adresse" value="<?PHP echo $adresse ?>"><br>
                                <input class="form-control" type="number" name="mdp" value="<?PHP echo $mdp ?>"><br>
                                <input class="form-control btn btn-sm btn-info rounded " type="submit" name="modifier" value="Update"><br>
                                <input type="hidden" name="ID_ini" value="<?PHP echo $_GET['ID'];?>">

                        <?php
                        }
                        ?>
                        <script type="text/javascript" src="js/clientcontrolesaisie.js"></script>


                        <?PHP
                        }

                        if (isset($_POST['modifier'])){
                            $cli=new service_client($_POST['ID'],$_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp'],$_POST['fidelite']);
                            $ser->modifier($cli,$_POST['ID_ini']);
                            echo $_POST['ID_ini'];
                        }
                        ?>

                        
                          
		      </form>
            
		        </div>
		      </div>
				</div>
			</div>
		</div>
    </div>
	</section>










       
        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="">

        <?PHP

        include "../core/service_client.php";

        if (isset($_GET['ID'])){
        $ser=new service_client();
            $result=$ser->recuperer($_GET['ID']);
        foreach($result as $row){
            $ID=$row['ID'];
            $identifiant=$row['identifiant'];
            $nom=$row['nom'];
            $prenom=$row['prenom'];
            $age=$row['age'];
            $sexe=$row['sexe'];
            $adresse=$row['adresse'];
            $email=$row['email'];
            $mdp=$row['mdp'];
            $fidelite=$row['fidelite'];
        ?>


  
         <div class="row">
       
          
              <div class="col-xs-12 text-center menu-2">

              <div class="fh5co-staff">
                
                <h3>Modifier votre Profil</h3>
                <input type="hidden" name="ID" value="<?PHP echo $ID ?>"><br>
                <input type="hidden" name="identifiant" value="<?PHP echo $identifiant ?>"><br>
                <input class="form-control" type="text" name="nom" value="<?PHP echo $nom ?>"><br>
                <input class="form-control" type="text" name="prenom" value="<?PHP echo $prenom ?>"><br>
                <input class="form-control" type="number" name="age" value="<?PHP echo $age ?>"><br>
                <input class="form-control" type="text" name="sexe" value="<?PHP echo $sexe ?>"><br>
                <input class="form-control" type="text" name="email" value="<?PHP echo $email ?>"><br>
                <input class="form-control" type="text" name="adresse" value="<?PHP echo $adresse ?>"><br>
                <input class="form-control" type="number" name="mdp" value="<?PHP echo $mdp ?>"><br>
                <input type="submit" name="modifier" value="modifier"><br>
                <input type="hidden" name="ID_ini" value="<?PHP echo $_GET['ID'];?>">
                

                  
              </div>
            </div>
      
        </div>
          
    <?php
}
?>
<script type="text/javascript" src="js/clientcontrolesaisie.js"></script>


<?PHP
}

if (isset($_POST['modifier'])){
$cli=new service_client($_POST['ID'],$_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp'],$_POST['fidelite']);
$ser->modifier($cli,$_POST['ID_ini']);
echo $_POST['ID_ini'];



}
?>


                            </div>
                
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>
        </div>
        <!-- Latest Offers End -->
       


    </main>

    <?php include "footer.php"; ?>

   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>