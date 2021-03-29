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
    include "../core/produitC.php";
    include "../config.php";
    $produit1C=new produitC();
    $listeProduits=$produit1C->afficherProduits();

    //var_dump($listeEmployes->fetchAll());
    ?>
        <div class="card">
        <div class="card-header">
        <h2 class="card-title">Product List</h2>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
        <div id='cssmenu'>
            <ul>
                        <li><a href='AddProducts'>Add</a></li>
                        <li class='active'><a href='views/afficherproduit.php'>View</a></li>
            </ul>
        </div>

        <table class="table table-bordered table-striped table-condensed cf">
        <tr>
        <th>Libelle</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Description</th>
        <th><i class="ft-trash ft-align-center" ></i></th>
        <th><i class="ft-edit"></i></th>
        </tr>

        <?PHP
        foreach($listeProduits as $row){
            $image=$row['image'];
            $rep="../ViewClient/assets/img/categori/"
            ?>
            <tr>
            <td><?PHP echo $row['lib_prod']; ?></td>
            <td><?PHP echo $row['prix']; ?></td>
            <td><?PHP echo $row['qte_prod']; ?></td>
            <td><img src="<?PHP echo $rep.$image; ?>" style="width: 200px;">  </td>
            <td><?PHP echo $row['description']; ?></td>
            <td><form method="POST" action="./views/supprimerProduit.php">
            <input type="submit" class="btn btn-outline-danger" name="Delete" value="Delete">
            <input type="hidden" value="<?PHP echo $row['idp']; ?>" name="idp">
            </form>
            </td>
            <td><a class="btn btn-outline-blue" href="modifierProduit.php?idp=<?PHP echo $row['idp']; ?>">
            Edit</a></td>
            </tr>
                <?PHP
        }
        ?>
        </table>

        </div>
        </div>
    </div>



</body>



<?php include "scripts.php"; ?>