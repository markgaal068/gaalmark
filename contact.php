<?php

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
}

$EmailTo = "gaalmark.markit@gmail.com";
$headers = "From: ". $mailFrom;
$txt = "Kaptál egy e-mailt ".$Name."-től".\n\n".$Message;

mail($EmailTo, $Subject, $txt, $headers)

header("Location:index.html?status=success"); //redirect to your html with status

?>
