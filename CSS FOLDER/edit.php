<?php
include "koneksi.php";
$username = $_GET['username'];
$query = mysqli_query($koneksi, "SELECT * FROM signup WHERE username='$username'") or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($query);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Edit</title>
   </head>
   <body>
     <h1>Form Edit Member</h1>
     <form action="proses_edit.php" method="POST">
       <input type="text" name="firstname" placeholder="firstname" value="<?php echo $data['firstname']; ?>">
       <input type="text" name="lastname" placeholder="lastname" value="<?php echo $data['lastname']; ?>"><br>
       <input type="text" name="username" placeholder="username" value="<?php echo $data['username']; ?>"><br>
       <input type="text" name="institution" placeholder="institution" value="<?php echo $data['institution']; ?>"><br>
       <input type="text" name="email" placeholder="email" value="<?php echo $data['email']; ?>"><br>
       <input type="text" name="counttry" placeholder="country" value="<?php echo $data['counttry']; ?>"><br>

       <input type="submit" value="Submit">
     </form>
   </body>
 </html>
