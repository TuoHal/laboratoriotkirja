<?php

function doDB(){
global $mysqli;

//luodaan yhteys
$mysqli = mysqli_connect();

//testataan yhteys
if (mysqli_connect_errno()){
	printf("Svituix mäni: %s\n", mysqli_error());	
}

}
?>