<?php

    $year = 0;
    $colors = "";
    $colors= (string)$colors;
    $yearColor = '';

if(isset($_POST['year'])){
    $year = $_POST['year'];
    $colors = ($year % 60) - 4;

};
if((substr($colors, 1,1)) == 1 || (substr($colors, 1,1)) == 2 ){
    $colors = 1;

};
if((substr($colors, 1,1)) == 3 || (substr($colors, 1,1)) == 4 ){
    $colors = 3;

}
if((substr($colors, 1,1)) == 5 || (substr($colors, 1,1)) == 6 ){
    $colors = 5;

}
if((substr($colors, 1,1)) == 7 || (substr($colors, 1,1)) == 8 ){
    $colors = 7;

}
if((substr($colors, 1,1)) == 9 || (substr($colors, 1,1)) == 0 ){
    $colors = 9;

}


    switch($colors){



        case 1 :
        case 2 :

            $yearColor = '<div class="text-success"><h1>'.$year.' Tai yra zalieji metai</h1> </div>';
            break;

        case 3 :
        case 4 :
        $yearColor = '<div class="text-danger"><h1>'.$year.' Tai yra raudonieji metai</h1> </div>';
        break;

        case 5 :
        case 6 :
        $yearColor = '<div class="text-warning"><h1>'.$year.' Tai yra geltonieji metai</h1> </div>';
        break;

        case 7 :
        case 8 :
            $yearColor = '<div class="text-light bg-dark"><h1>'.$year.' Tai yra baltieji metai</h1> </div>';
            break;

        case 9 :
        case 0 :
            $yearColor = '<div class="text-dark"><h1>'.$year.' Tai yra juodieji metai</h1> </div>';
            break;
    }



?>
<?php include "head.php" ?>
    <body>

<?php include "nav.php"?>
<div class="container  d-flex flex-column align-items-center ">
    <form class="col-md-8 mt-5 " method="post">
        <div class="card letters ">
        <div class="card-header bg-success letters text-center text-light text-uppercase  ">
            <h2 class="wider">iveskite metus</h2>
        </div>
        <div class="card-body text-center bg-dark pt-4 ">
            <input class="form-control bg-danger" type="text" name="year" placeholder="Iveskite metus pvz... 1984">
            <button class="btn btn-warning mt-5">Rezultatas</button>
        </div>
        </div>
    </form>
    <div class="mt-5"><h1><?= $yearColor ?></h1></div>


</div>


<?php include "footer.php"?>