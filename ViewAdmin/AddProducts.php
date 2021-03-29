<head>
  <?php include "header.php"; ?>
  </head>

    
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
    <!-- NAV BAR-->
    <?php 
                include "../config.php";
                include "navbar.php"; 
                ?>
    <!-- SIDE BAR-->
                <?php 
                
                include "sidebar.php"; 
                ?>

    <div class="app-content content">
        <div class="content-wrapper">
        <?PHP
        include "../core/produitC.php";
        $produit1C=new produitC();
        ?>
        <div class="card">
    <div class="card-header">
        <h2 class="card-title">Products</h2>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show" aria-expanded="true">
        <div class="card-body">
        <div id='cssmenu'>
                    <ul>
                        <li class='active'><a href='#'>Add</a></li>
                        <li><a href='afficherproduit.php'>View</a></li>
                    </ul>
                </div>
        </div>
    </div>
    <div class="card-footer">
        <form class="form" method="POST" action="./views/ajoutProduit.php">
							<div class="form-body">
                                <input class=" form-control" style="width: 40%" type="hidden" name="idp" id="idp" >
								<div class="form-group">
									<label for="complaintinput1">Libelle</label>
									<input class="form-control round" type="text" name="lib_prod" id="lib_prod">
                                    <div class="error-message"></div>
								</div>
                                
								<div class="form-group">
									<label for="complaintinput2">Price</label>
                                    <input class="form-control round" type="number" name="prix" id="prix">
                                    <div class="error-message"></div>
								</div>

								<div class="form-group">
									<label for="complaintinput3">Quantity</label>
									<input class="form-control round" type="number" name="qte_prod" id="qte_prod">
                                    <div class="error-message"></div>
								</div>

								<div class="form-group">
									<label for="complaintinput4">Image</label>
									<input class="form-control round" type="file" name="image" required >
								</div>

								<div class="form-group">
									<label for="complaintinput5">Description</label>
									<textarea rows="5" class="form-control round" type="text" name="description" id="description"></textarea>
                                    <div class="error-message"></div>
								</div>

							</div>

							<div class="form-actions">
                                <input type="submit" value="Confirm" name="ajouter" class="btn btn-outline-primary" id="ajouterProduit" onclick="notifyMe()" />
                                
                                <input type="button"  class="btn btn-outline-info" value="Reset" onclick="reset()"/>

							</div>
						</form>

    </div>
</div>
                
        </div>
    </div>



</body>





<?php include "scripts.php"; ?>
