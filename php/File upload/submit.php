<?php
if(isset($_POST['submit']) && isset($_FILES['fileToUplod']))
{
    echo "<pre>";
    print_r($_FILES['fileToUplod']);
    echo "</pre>";
}else {
    header("Location: index.php"); 
}

