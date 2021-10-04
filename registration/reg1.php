<?php
if (isset($_REQUEST['submit'])) {
	$email = $_REQUEST['email'];
	if ($email == "") {
		echo "<h1>Enter info</h1>";
	} else {
		header('location:reg.html');
	}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>registration</title>
  </head>

  <body>
    <form border="2" method="get" action="#">
      Name <input type="text" name="name" value="" />
      <br>
      email<input type="email" name="email" value="">
      <br />
      ID<input type="text" name="id" value="" />
      <input type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>
