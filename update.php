<?php 


include 'Dijelovi/_dbconnect.php';
  

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
        
		$username = $_POST['username'];
		$user_id= $_GET['id'];
		
		$password = $_POST['password'];
		

		// write the update query
		
        $sql= "UPDATE korisnici SET username= '$username', password= '$password'  WHERE id='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `korisnici` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			
			
			$password  = $row['password'];
			
			$id = $row['id'];
		}

	?>
 <!doctype html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>About us</title>
  </head>
  <body>
  <?php require 'Dijelovi/_header.php'; ?>
  
  <?php include 'Dijelovi/_footer.php'; ?>
    
  <div class="container my-4">
     <h1 class="text-center text-secondary">Update</h1>
     <form action="" method="post">
        <div class="form-group">
            <label for="username" >Korisničko ime</label>
            <input type="text" maxlength="11" class="form-control" value="<?php echo $username;?>" id="username" name="username" placeholder="Korisničko ime" aria-describedby="emailHelp">
            <!--<input type="text" maxlength="11" class="form-control" value="" id="user_id" name="user_id" placeholder="Korisničko ime" aria-describedby="emailHelp">-->
        </div>
        <div class="form-group">
            <label for="password">Lozinka</label>
            <input type="password" class="form-control" placeholder="*******" value="<?php echo $password; ?>" id="password" name="password">
        </div>
        
         
        <button type="submit" value="Update" name="update" class="btn btn-primary"> Promjena </button>
     </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>

 <?php  

 } else{
     header('location: /pzi/welcome.php'); }

 

}