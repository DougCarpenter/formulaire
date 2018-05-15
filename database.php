<?php
require_once('database.php'); 

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE); 
$sql = "SELECT * FROM questions"; 
$result = mysqli_query($conn, $sql); 
$res = mysqli_fetch_array($result); 
echo $res[2]; 
mysqli_close($conn); 
?>

<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "root");
  define("DB_BASE", "Christian");
$link = mysqli_connect("localhost", "root", "root", "Christian");

if ($link === false){
    die("ca marche pas". mysqli_connect_error());
}

$names = mysqli_real_escape_string($link, $_REQUEST['names']); 
$sql = "INSERT INTO Names(Names) VALUES ('$Names')";

if (mysqli_query($link, $sql))  {
    echo "C'est Gagné !";
}
else {
    echo "C'est Perdu !";
}
mysqli_close($link);
?>
