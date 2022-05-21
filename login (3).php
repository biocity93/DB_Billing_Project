<?php

session_start();


if(isset($_POST['submit'])){

// if the form has been submitted check first that the username and password fields aren't blank

if ($_POST['name']!= '' & $_POST['pass']!= ''){
	
	
	// if they are NOT blank, check if the credentials exist
	
 	$userName = $_POST['name'];
        $passWord = $_POST['pass'];
 	
 	include 'connectPDO.php'; 
    	$sql = "SELECT count(*) from user WHERE name = :user AND password = :pass";
    	$stmt = $conn->prepare($sql);
    	$stmt->bindParam(':user', $userName);
        $stmt->bindParam(':pass', $passWord);
    	$stmt->execute(); 
        $rowCount = $stmt->fetchColumn();   
        
        // check if the user exists in the DB
        
       if($rowCount > 0){
     
        
        $validUser = true;
        $_SESSION['validUser'] = true; 
        $_SESSION['userName'] = $userName; 
           
        $sql = "SELECT * from user WHERE name = :user AND password = :pass";
    	$stmt = $conn->prepare($sql);
    	$stmt->bindParam(':user', $userName);
        $stmt->bindParam(':pass', $passWord);
    	$stmt->execute(); 
        

        while($rows=$stmt->fetch()){ 

        if ($rows['admin']==true){
            $_SESSION['admin']=true; }           
        
         else {$_SESSION['admin']=false;}
           }
           $division ='TESTING';
           $_SESSION['division']=$division;
           
       header("Location: index.php");

        
        }
        
        
        
       
        
        else {
        
        // show form with error message for invalid login
        
            $msg = "Invalid username or password, please try again!"; ?>
            



<div class="container d flex justify-content-center">
<div class="card text-white  text-center bg-dark mb-3">
<div class="card-body">
<h4 class="card-title"> Login Below</h4>
<h4 class="card-title bg-danger"> <?php echo $msg; ?></h4></div></div><br>

<!-- Form Card -->
<div class="card text-white  text-center bg-dark mb-3">
<div class="card-body">
<form method="post" action="login.php">
<div class="form-group">
<h1> </h1>
<label for="username">User Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Username"></div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="pass" placeholder="Password"></div><br><br>
<button type="submit" name="submit" class="btn btn-secondary">Submit</button>
</form> </div></div><br>
<br></div>
</body>
</html>
<?php
        }
        
// if the username or password fields are blank        
        }
        
        else { $msg = 'Username and password fields cannot be blank';
        ?>
<?php include 'header.html';?>
<body>
<div class="container d flex justify-content-center">
<div class="card text-white  text-center bg-dark mb-3">
<div class="card-body">
<h4 class="card-title"> Login Below</h4>
<h4 class="card-title bg-danger"> <?php echo $msg; ?></h4></div></div><br>

<!-- Form Card -->
<div class="card text-white  text-center bg-dark mb-3">
<div class="card-body">
<form method="post" action="login.php">
<div class="form-group">
<h1> </h1>
<label for="username">User Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Username"></div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="pass" placeholder="Password"></div><br><br>
<button type="submit" name="submit" class="btn btn-secondary">Submit</button>
</form> </div></div><br></div>
</body>
</html>
 

<?php }
} else {

	// if the form hasn't been submitted
 $msg='';
 ?>
<?php include 'header.html'; ?>
<body>
 <div class="container d flex justify-content-center">
<div class="card text-white  text-center bg-dark mb-3">
<div class="card-body">
<h4 class="card-title"> Login Below</h4>
<h4 class="card-title"> <?php echo $msg; ?></h4></div></div><br>

<!-- Form Card -->
<div class="card text-white  text-center bg-dark mb-3">
<div class="card-body">
<form method="post" action="login.php">
<div class="form-group">
<h1> </h1>
<label for="username">User Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Username"></div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" name="pass" placeholder="Password"></div><br><br>
<button type="submit" name="submit" class="btn btn-secondary">Submit</button>
</form> </div></div><br>
<br>

</div>

</form>



<?php }  


?>