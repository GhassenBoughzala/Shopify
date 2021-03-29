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
        <?PHP
            include "../core/service_client.php";
            //include "../entities/client.php";

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

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		
								
			      	</div>
			   

               
                            <div class="w-100">
			      			    <h3 class="mb-4">Update your Profil</h3>
			      		    </div>
                                <input type="hidden" name="ID" value="<?PHP echo $ID ?>"><br>
                                <input type="hidden" name="identifiant" value="<?PHP echo $identifiant ?>"><br>
                                <label>Name</label>
                                <input disable class="form-control" type="text" name="nom" value="<?PHP echo $nom ?>"><br>
                                <label>Last Name</label>
                                <input disable class="form-control" type="text" name="prenom" value="<?PHP echo $prenom ?>"><br>
                                <label>Age</label>
                                <input disable class="form-control" type="number" name="age" value="<?PHP echo $age ?>"><br>
                                <label>Sexe</label>
                                <input disable class="form-control" type="text" name="sexe" value="<?PHP echo $sexe ?>"><br>
                                <label>E-mail</label>
                                <input disable class="form-control" type="text" name="email" value="<?PHP echo $email ?>"><br>
                                <label>Adress</label>
                                <input disable class="form-control" type="text" name="adresse" value="<?PHP echo $adresse ?>"><br>
                                <label>Password</label>
                                <input disable class="form-control" type="number" name="mdp" value="<?PHP echo $mdp ?>"><br>
                                <input class="form-control btn btn-sm btn-info rounded " type="submit" name="modifier" value="Confirm"><br>
                                <input type="hidden" name="ID_ini" value="<?PHP echo $_GET['ID'];?>">
                          
		       

              <?PHP
                            }
                     
                        }

                        if (isset($_POST['modifier'])){
                            $cli=new service_client($_POST['ID'],$_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp']);
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
	</section>










    </body>
</html>