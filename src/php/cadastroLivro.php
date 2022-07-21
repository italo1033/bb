<?php
include "conecntion.php";


$idioma = $_POST['idioma'];
$autores = $_POST['autor'];
$ip = $_POST['ip'];
$df = $_POST['df'];
$tp = $_POST['tp'];
$td = $_POST['td'];
$ta= $_POST['ta'];
$resumo = $_POST['resumo'];
$isbn = $_POST['isbn'];
$nc= $_POST['nc'];
$imageUrl= $_POST['imageUrl'];

$sql="INSERT INTO livro(idioma, autores, ip, df, tp, td, ta, resumo, isbn, nc, imageUrl)
VALUES(
'$idioma',
'$autores',
'$ip ',
'$df',
'$tp',
'$td',
'$ta',
'$resumo',
'$isbn',
'$nc',
'$imageUrl'
)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


