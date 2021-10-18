
<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['id'] != ""){
			if($_POST['password'] != ""){
				if($_POST['password1'] != ""){
          if($_POST['name'] != ""){
            if($_POST['n'] != ""){

              $myfile = fopen('user.txt', 'a');
					$user = $_POST['username']."|".$_POST['password']."|".$_POST['email']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.html');

              }
            
          else {
          echo "Invalid name";
          }
        else{
					echo "Invalid password";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid id";
		}
	}
?>