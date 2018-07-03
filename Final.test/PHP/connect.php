<?php
    $conn = mysqli_connect('localhost','root','', 'budgetdb') or die ('Can not connect to mysql'); //ket noi database
?>

<?php 
    $sql = mysqli_query($conn,'SELECT * FROM tblbillcategories ');
    
?>