<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
            header('Location: form.php?error=Email+tidak+valid');
        }else{
			echo "<h2>Yang kamu inputkan:</h2>";
            echo "Nama : ". $_POST['nama'];
            echo "<br>";
            echo "Alamat : ". $_POST['alamat'];
            echo "<br>";
            echo "Umur : ". $_POST['umur'];
            echo "<br>";
            echo "Email : ". $_POST['email'];
            echo "<br>";
            echo "Website : ". $_POST['web'];
            echo "<br>";
            echo "Username : ". $_POST['username'];
        }
    } 
?>