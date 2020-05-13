
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <?php include 'links.php' ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<body>
   
    <div class="container center-div ">
    <div class="heading text-center text-uppercase text-white">
        Admin login page
    </div>
     
     <div class="container row">
         <div class="admin-form">
          <form action="logincheck.php" method="POST">
           <div class="form-group">
               <label>Email ID</label>
               <input type="text" name="user" value="" class="form-control" autocomplete="off">
           </div>
           <div class="form-group">
               <label>Password</label>
               <input type="text" name="password" value="" class="form-control" autocomplete="off">
           </div>
           <input type="submit" class="btn btn-success" name="submit" style="background-color:	#002856;">
          </form>
         </div>
     </div>
    </div>
</body>
</html>