<?php
    require_once 'connection.php';

    $q = "SELECT * FROM `studenti` ORDER BY ime, prezime;";
    $res = $conn->query($q);


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

    <title>Student CRUD</title>
</head>
<body>
  
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pregled studenata
                            <a href="create.php" class="btn btn-primary float-end">Dodaj studenta</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student</th>
                                    <th>Email</th>
                                    <th>Broj telefona</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($res->num_rows==0)
                                {
                                    echo "<p>Nema unethi podataka</p>";
                                }
                                else
                                {
                                    while($row = $res->fetch_assoc())
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['ime']. " ". $row['prezime']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['broj_telefona']; ?></td>
                                            <td>
                                                <a href="read.php?id=<?php echo $row['id']?>" class="btn btn-info">Pregled</a>
                                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-success">Izmena</a>
                                                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Brisanje</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>