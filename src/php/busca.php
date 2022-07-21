<?php

if(!isset($_GET['nome_livro']))
{
    header("Location: ../../index.php");
    exit;
}
include "conecntion.php";
$livro = "%".trim($_GET['nome_livro'])."%";
$sql = "SELECT * FROM livro WHERE nome LIKE '$livro' ";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="../style/bar.css" class="logo" media="screen" />
    <link rel="stylesheet" type="text/css" href="../style/busca.css" class="logo" media="screen" />
    <!-- icones -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Pesquisa</title>
</head>
<body>
<nav class="navbar">
        <div>
            <h1>Biblioteca</h1>
        </div>
      </nav>

      <div class="d-flex flex-column justify-content-start ms-2 mt-1">
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<h2>Resultado da Pesquisa</h2>";
                while($row = $result->fetch_assoc()) {
                echo '
                <div class="d-flex flex-column mb-2">
                  <div class="d-flex flex-row">
                    <a href="./livrosDetalhes.php?livro='. $row["nome"].'">
                      <img  src="'. $row["imageUrl"].'" alt="'. $row["nome"].'"  />
                    </a>
                    <div class="d-flex flex-column ms-2">
                    <a href="./livrosDetalhes.php?livro='. $row["nome"].' style="color:blue;">'. $row["nome"].'</a>
                    <label>Autores:'. $row["autores"].'</label>
                    <label>Isbn:'. $row["isbn"].'</label>
                    <label>'. $row["td"].'</label>
                    <label>'. $row["ta"].'</label>
                  </div>
                  </div>
                </div>
                ';
                }
            } else {
                echo "0 results";
            }
            ?>
    </div>

   
</body>
</html>