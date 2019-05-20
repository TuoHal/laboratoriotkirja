<?php
//tuodaan mukaan tietokanta liitos joka eri tiedostossa
include "ch20_include.php";
if(isset($_POST['submit'])){
	

		doDB();
		// puhtaat syöte lauseet
		$safe_id = mysqli_real_escape_string($mysqli,$_POST['id']);
		$safe_kaytossa = mysqli_real_escape_string($mysqli,$_POST['kaytossa']);
		$safe_alkuteksti = mysqli_real_escape_string($mysqli,$_POST['alkuteksti']);
		$safe_indikaatiot = mysqli_real_escape_string($mysqli,$_POST['indikaatiot']);
		$safe_nayte = mysqli_real_escape_string($mysqli,$_POST['nayte']);
	
		if (($_POST['id'])||($_POST['kaytossa'])||($_POST['alkuteksti'])||($_POST['indikaatiot'])||($_POST['nayte'])){
			$lisaatutkimus = "INSERT INTO tutkimukset (id,kaytossa,alkuteksti,indikaatiot,nayte) VALUES ('".$safe_id."' , '".$safe_kaytossa."' , '".$safe_alkuteksti."' , '".$safe_indikaatiot."' , '".$safe_nayte."');" ;
			$lisaatutkimus_res = mysqli_query($mysqli, $lisaatutkimus) or die(mysqli_error($mysqli));
			
		}
	
}
?>
<?php include "templates/header.php"; ?>
<!luodaan tarvittava lomake tietojensyötälle. Huomaa tuodut header- ja footer osiot>
	<h2>Lisää tutkimus</h2>
    <form method="post">
    	<label for="id">Tutkimusnumero</label>
    	<input type="text" name="id" id="id">
    	<label for="kaytossa">Käytössä</label>
    	<input type="text" name="kaytossa" id="kaytossa">
    	<label for="alkuteksti">Teksti</label>
    	<input type="text" name="alkuteksti" id="alkuteksti">
    	<label for="indikaatiot">Indikaatiot</label>
    	<input type="text" name="indikaatiot" id="indikaatiot">
    	<label for="nayte">Näyte</label>
    	<input type="text" name="nayte" id="nayte">
    	<input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Aloitus sivulle</a>
    <?php include "templates/footer.php"; ?>