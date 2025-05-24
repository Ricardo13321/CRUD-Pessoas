<?php 
if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
$gen = $_SESSION["generos"];
$num = count($gen);
echo "<b style='font-size:200px; color:rgb(100, 0, 131);'>$num</b>";
?>