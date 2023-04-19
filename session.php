
<?php 

session_start();

$printPass = $_SESSION['password'];

?>
<body>
 


 <main>

<h1>la tua passwor é:</h1>
<h2><?php echo $printPass ?></h2>


</main>

</body>