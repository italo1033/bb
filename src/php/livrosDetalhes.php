<?php
include "conecntion.php";
$livro = $_GET['livro'];
$sql = "SELECT * FROM livro WHERE nome='$livro' ";

$result = $conn->query($sql);

$row = $result -> fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="../style/bar.css" class="logo" media="screen" />
    <link rel="stylesheet" type="text/css" href="../style/livroDetalhes.css" class="logo" media="screen" />
    <link rel="stylesheet" type="text/css" href="./src/css/indexredimensional.css" class="logo" media="screen" />
    <link rel="stylesheet" type="text/css" href="src/css/cards.css"class="logo" media="screen" />
    <!-- icones -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Livro</title>
</head>
<body>
    <nav class="navbar">
        <div>
            <h1>Biblioteca</h1>
        </div>
    </nav>

      <div class="d-flex flex-row align-items-center justify-content-center">
        <!-- imagem -->
        <div>
            <?php 
                 echo ' <img src="'. $row["imageUrl"].'"  />';
            ?>
        </div>

        <!-- descrições -->
        <div class="d-flex flex-column" style="width: 400px; height: 400px;">
        <form action="./reserva.php" method="post">
            <div class="d-flex flex-row align-items-center" style="width: 100%; height: 100%;">
                <div class="d-flex flex-column w-50 align-items-end">
                    <label>Nome:</label>
                    <label>Idioma:</label>
                    <label>Autores:</label>
                    <label>Informações de Publicação:</label>
                    <label>Descrição Física:</label>
                    <label>Tipo de Publicação:</label>
                    <label>Tipo de Documento:</label>
                    <label>Termos do Assunto:</label>
                    <label>Isbn:</label>
                    <label>Número de Acesso:</label>
                </div>
                <div class="d-flex flex-column w-50 align-items-start">
                    <?php echo "<b>" . $row["nome"]. "</b>";?>
                    <?php echo "<b>" . $row["idioma"]. "</b>";?>
                    <?php echo "<b>" . $row["autores"]. "</b>";?>
                    <?php echo "<b>" . $row["ip"]. "</b>";?>
                    <?php echo "<b>" . $row["df"]. "</b>";?>
                    <?php echo "<b>" . $row["tp"]. "</b>";?>
                    <?php echo "<b>" . $row["td"]. "</b>";?>
                    <?php echo "<b>" . $row["ta"]. "</b>";?>
                    <?php echo "<b>" . $row["isbn"]. "</b>";?>
                    <?php echo "<b>" . $row["na"]. "</b>";?>
                </div>
            </div>
         
                <button type="submit">Reservar Matérial</button>
            </form>
            
        </div>
      </div>

    <div class="d-flex justify-content-center w-100">
        <div class="d-flex flex-column justify-content-start" style="width: 60%;">
            <h3>Resumo:</h3>
            <?php echo "<p>" . $row["resumo"]. "</p>";?> 
        </div>
    </div>
</body>
</html>