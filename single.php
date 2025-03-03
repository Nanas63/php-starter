<?php
include_once "data.php";


?>



<?php include_once "header.php";?>

<?php $position = $_GET['position'];
$sport = $articles[$position];
var_dump($sport);
?>



<?php
include_once "footer.php";?>