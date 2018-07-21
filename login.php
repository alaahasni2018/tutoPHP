<?php 
	require_once('config.inc.php');
 


	session_start();

	if (isset($_SESSION['user'])){
		header('location: home.php'); 
	} 

		
	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$requete = "SELECT * FROM user WHERE (email=? AND password=?)" ; 
		$stmt = $conn->prepare($requete) ;
		$stmt->execute(array($email, $password)); 	
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		if (!$user){
			echo 'error user does not exist' ;
		} else {
			$_SESSION['user']=$user['name'] ;
			header('location: home.php');
		}
	}

?>

<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	</head>
	<body>
		


		<div class="container"> 

		<div class="card">
		  <div class="card-body">
		    Login to our application
		  </div>
		</div>

		<form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF'] ; ?>">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  
		  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
		</form>
		<small> You don't have an account ? register <a href="register.php"> here </a></small>
		</div>


		<br>
		
	</body>
</html>