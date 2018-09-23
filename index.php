


<?php 

session_start();


include 'views/header.php';

$_SESSION['id'];

if(isset($_SESSION['id'])){
    include 'views/dashboard.php';
} else {
    
    include 'views/login.php';

}






include 'views/footer.php';

?>

