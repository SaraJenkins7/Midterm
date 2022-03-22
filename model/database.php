<?php 
$dsn ='mysql:host=localhost; dbname=zippyusedauto';
$username = 'root';
$password = 'Sj_7509696!';

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = 'Database Error';
    $error_message .= $e->getMessage();
    include('public/view/error.php');
    exit();
}

?>