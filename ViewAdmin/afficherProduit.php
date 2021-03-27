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
        <div id='cssmenu'>
            <ul>
                        <li><a href='AddProducts'>Add</a></li>
                        <li class='active'><a href='views/afficherproduit.php'>View</a></li>
            </ul>
        </div>

        <table class="table table-bordered table-striped table-condensed cf">
        <tr>
        <th>Libelle</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Image</th>
        <th>Description</th>
        <th><i class="fas fa-trash-alt"></i></th>
        <th><i class="fas fa-edit"></i></th>
        </tr>

        <?PHP
        foreach($listeProduits as $row){
            $image=$row['image'];
            $rep="../../ViewClient/assets/img/categori"
            ?>
            <tr>
            <td><?PHP echo $row['lib_prod']; ?></td>
            <td><?PHP echo $row['prix']; ?></td>
            <td><?PHP echo $row['qte_prod']; ?></td>
            <td><img src="<?PHP echo $rep.$image; ?>" style="width: 200px;">  </td>
            <td><?PHP echo $row['description']; ?></td>
            <td><form method="POST" action="supprimerProduit.php">
            <input type="submit" name="supprimer" value="supprimer">
            <input type="hidden" value="<?PHP echo $row['idp']; ?>" name="idp">
            </form>
            </td>
            <td><a href="modifierProduit.php?idp=<?PHP echo $row['idp']; ?>">
            Modifier</a></td>
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