<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="icon" href="./images/adminhead.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/9ca0b62f92.js" crossorigin="anonymous"></script>
   
</head>
<body>
    
    
    <main>
        
        <div id="mydiv1">
            <h4>WELCOME TO ADMIN MODE<i class="fas fa-user-shield"></i></h4><br>
        <form action="#" method="post">
        <label for="adminname">ADMIN--ID <i class="fas fa-hand-point-right"></i> </label><input type="text"  id="admin1" placeholder="Enter your Name" required>
        <br>
        <label for="adminpass">PASSWORD <i class="fas fa-hand-point-right"></i> </label><input type="password" id="admin2" placeholder="Enter your Password"><br>
        <input type="checkbox" onclick="myFunction()"><b>Show Password</b>
        <br><br>
        <div class="wrapper"><button type="submit" class="btn btn-success">LOGIN</button></div>
        </form>
        
    </div></main>
    <script src="admin.js"></script>
</body>

<?php      
    include('db.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
?>
</html>
