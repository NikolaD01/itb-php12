<?php
require_once 'connection.php';


$id = $ime = $prezime = $email = $broj_telefona = "";
if( $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']))
{

    $id = $_GET['id'];

    $q = "SELECT * FROM `studenti` WHERE `id`=".$id.";";

    $r = $conn->query($q);

    if($r->num_rows==1){

        $student = $r->fetch_assoc();

        $ime = $student['ime'];

        $prezime = $student['prezime'];

        $email = $student['email'];

        $broj_telefona = $student['broj_telefona'];

    }else{

        echo "<p>DOSLO JE DO GRESKE</p>";

    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Pregled</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalji o studentu
                            <a href="index.php" class="btn btn-danger float-end">Vrati se na početnu</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Ime i prezime:</strong> <?php $ime." ". $prezime;?></p>
                        <p><strong>Email:</strong> <?php $email?$email:"--";?></p>
                        <p><strong>Broj telefona:</strong> <?php $broj_telefona?$broj_telefona:"--";?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>