<?php 
$title = "My Profile";
include("templates/main/head.php");
include_once("functions.php");
// If user is not logged redirect him to login.php
auth();

?>

<h1>My profile</h1>
<?php echo($_SESSION["username"]) ?>



<?php
include("templates/main/footer.php");
?>