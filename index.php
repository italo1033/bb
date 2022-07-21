<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="./src/style/bar.css" class="logo" media="screen" />
    <link rel="stylesheet" type="text/css" href="./src/style/index.css" class="logo" media="screen" />
    <!-- icones -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <nav class="navbar">
        <div>
            <h1>Biblioteca</h1>
        </div>
        <div class="linksTop">
            <ul class="nav-links">
                <div class="menu">
                  <li style="border-bottom: 1px solid #fff;"><a href="/">Home</a></li>
                  <li><a href="./src/pages/cadastroUser.html" target="_blank">Cadastra Usuario</a></li>
                  <li><a href="./src/pages/cadastroLivros.html" target="_blank">Cadastra Livro</a></li>
                </div>
              </ul>
        </div>
      </nav>

    <form action="./src/php/busca.php" method="get">
        <div class="d-flex flex-row justify-content-center">
            <div class="search">
                <button style="border: none; background-color: transparent;" type="submit" value="Pesquisar"><ion-icon  class="text" name="search-outline"></ion-icon></button>
                <input type="text"  name="nome_livro" placeholder="Busca">
            </div>
        </div>
    </form>

    <div class="d-flex flex-row justify-content-center">
    <?php
        include "./src/php/conecntion.php";
        $sql = "SELECT * FROM livro";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '
              <a href="src/php/livrosDetalhes.php?livro='. $row["nome"].'">
              <img src="'. $row["imageUrl"].'" alt="'. $row["nome"].'"  />
              </a>
              ';
            }
          } else {
            echo "0 results";
          }
        ?>
    </div>
</body>
</html>