<?php 
$showAlert=false;
$showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){



include 'Dijelovi/_dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

//$exists=false;
//Provjera postoji li korisnik s ovim imenom
$existSql = "SELECT * FROM `korisnici` WHERE username='$username'";
$result=mysqli_query($conn, $existSql);
$numExistRows=mysqli_num_rows($result);
if ($numExistRows > 0){
   // $exists=true;
    $showError = "Netko već koristi to korisničko ime";

}
else {
    //$exists=false;


if(($password == $cpassword)){
    $hash= password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO `korisnici` ( `username`, `password`, `date`) VALUES ( '$username', '$password', 
    current_timestamp())";
    $result= mysqli_query($conn, $sql);

    if($result){
        $showAlert =  true;
    }
    

}
else{
    $showError = "Lozinke se ne podudaraju";
 }
}
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

    <title>Registracija</title>
  </head>
  <body>
  <?php require 'Dijelovi/_header.php'; ?>
  
  <?php include 'Dijelovi/_footer.php'; ?>
  
  <?php
   if($showAlert) { 

   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Uspješna registracija!</strong> Sada se možete ulogirati!
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
              </button>
        </div> ';  
    }
    if($showError) { 

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Neuspješna prijava!</strong> '.$showError.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                   </button>
             </div> ';  }

        
        
      ?>
      

  <div class="container my-4">
     <h1 class="text-center text-secondary">Registriraj se !</h1>
     <form action="/PZI/signup.php" method="post">
        <div class="form-group">
            <label for="username" >Korisničko ime</label>
            <input type="text" maxlength="11" class="form-control" id="username" name="username" placeholder="Korisničko ime" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Lozinka</label>
            <input type="password" class="form-control" placeholder="*******" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Potvrdi lozinku</label>
            <input type="password" placeholder="*******" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">registriraj se!</button>
     </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>



