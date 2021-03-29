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
    include "../core/service_client.php";
    include "../config.php";
    $service_client1C=new service_client();
    $listeClients=$service_client1C->afficherClient();

    //var_dump($listeEmployes->fetchAll());
    ?>
        <div class="card">
        <div class="card-header">
        <h2 class="card-title">Clients List </h2>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>

        <table class="table">
        <tr>
        <th>First Name</th>
        <th>Last Name</th>        
        <th>Age</th>
        <th>Sexe</th>
        <th>E-mail</th>
        <th>Adresse</th>
        

        </tr>

        <?PHP
        foreach($listeClients as $row){
            ?>
            <tr>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['prenom']; ?></td>
            <td><?PHP echo $row['age']; ?></td>
            <td><?PHP echo $row['sexe']; ?></td>
            <td><?PHP echo $row['email']; ?></td>
            <td><?PHP echo $row['adresse']; ?></td>
            

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