<head>
  <?php include "header.php"; ?>
  </head>

    
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
    <!-- NAV BAR-->
    <?php 
                
                include "navbar.php"; 
                ?>
    <!-- SIDE BAR-->
                <?php 
                
                include "sidebar.php"; 
                ?>

    <div class="app-content content">
        <div class="content-wrapper">
        <?PHP
        include "../entities/produit.php";
        include "../core/produitC.php";
        include "../config.php";

        if (isset($_GET['idp'])){
            $produitC=new ProduitC();
            $result=$produitC->recupererProduit($_GET['idp']);
            
            foreach($result as $row){
                $idp=$row['idp'];
                $lib_prod=$row['lib_prod'];
                $prix=$row['prix'];
                $qte_prod=$row['qte_prod'];
                $image=$row['image'];
                $description=$row['description'];
        ?>
       
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Edit  </h2>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="card-footer">
        <form class="form" method="POST">
        <div class="form-body">
                                <input class=" form-control" style="width: 40%" type="hidden" name="idp" id="idp" value="<?PHP echo $idp ?>" >
								<div class="form-group">
									<label for="complaintinput1">Libelle</label>
									<input class="form-control round" type="text" name="lib_prod" id="lib_prod" value="<?PHP echo $lib_prod ?>" >
                                    <div class="error-message"></div>
								</div>
                                
								<div class="form-group">
									<label for="complaintinput2">Price</label>
                                    <input class="form-control round" type="number" name="prix" id="prix" value="<?PHP echo $prix ?>">
                                    <div class="error-message"></div>
								</div>

								<div class="form-group">
									<label for="complaintinput3">Quantity</label>
									<input class="form-control round" type="number" name="qte_prod" id="qte_prod" value="<?PHP echo $qte_prod ?>">
                                    <div class="error-message"></div>
								</div>

								<div class="form-group">
									<label for="complaintinput4">Image : </label>
									<?PHP echo $image ?>
                                    <input class="form-control round" type="file" name="image" value="<?PHP echo $image ?>" >                                    
								</div>

								<div class="form-group">
									<label for="complaintinput5">Description</label>
									<input rows="5" class="form-control round" type="text" name="description" id="description" value="<?PHP echo $description ?>"></input>
                                    <div class="error-message"></div>
								</div>

							</div>

							<div class="form-actions">
                                <input type="submit" value="Confirm" name="modifier" class="btn btn-outline-primary" id="ajouterProduit" onclick="notifyMe()" />                                
                                <input type="button"  class="btn btn-outline-info" value="Reset" onclick="reset()"/>
                                <a href='afficherproduit.php' class="btn btn-outline-blue-grey" >Back</a>
                                <input type="hidden" name="idp_ini" value="<?PHP echo $_GET['idp'];?>">
							</div>
						</form>

                        <?PHP
                        }
                    }
                    if (isset($_POST['modifier'])){
                        $produit=new Produit($_POST['idp'],$_POST['lib_prod'],$_POST['prix'],$_POST['qte_prod'],$_POST['image'],$_POST['description']);
                        $produitC->modifierProduit($produit,$_POST['idp_ini']);
                        echo $_POST['idp_ini'];
                        
                    }
                    ?>

    </div>
</div>
                
        </div>
    </div>



</body>





<?php include "scripts.php"; ?>
