<?php
include "conecntion.php";

include "conecntion.php";
$sql = "SELECT * FROM reserva";
$result = $conn->query($sql);
$row = $result -> fetch_assoc();
$quantidade = null;
if($row['quantidade'] == null){
    $quantidade=1;
}
else{
    $quantidade=$row['quantidade']+1;
}
$hoje = date('Y-m-d H:i:s');

$sql2="INSERT INTO reserva(quantidade,data) VALUE($quantidade,'$hoje')";
// 

if (mysqli_query($conn, $sql2)) {
    echo  "<script>alert('Livro Reservado!');</script>";
    header("Location: ../../index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>