<?php include 'header.php'; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo $e->getMessage();
}


$sql = "SELECT * FROM post where id = 1";
$statement = $connection->prepare($sql);

// izvrsavamo upit
$statement->execute();

$posts = $statement->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($posts);
echo "</pre>";

?>
