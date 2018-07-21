<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="container"> 
		<form  name="register" method="post" action="addUser.php">
		  <div class="form-group">
		    <label for="exampleFormControlInput1">name</label>
		    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mex b sex">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Email address</label>
		    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlInput1">password</label>
		    <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="mot de passe">
		  </div>

		  <button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
</body>
</html>