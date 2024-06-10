<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="SignIn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <div class="container">

            <?php 
            
            include("php/config.php");
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['Email']);
                $password = mysqli_real_escape_string($con,$_POST['Password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password = '$password'") or die("Select error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['id'] = $row['Id'];
                    // $_SESSION['name'] = $row['name'];
                }else{
                    echo "<div class='message'>
                            <p>Wrong username or password</p>
                          </div> <br>";
                    echo "<a href='SignIn.php'><button class='btn'>Go Back</button>";

                }
                if(isset($_SESSION['valid'])){
                    header("Location: Home.php");
                }
            }else{

            ?>

            <div class="row">
                <!-- buat yg gambarnya -->
              <div class="col-5"> 
                <img src="Images/Van Gogh.jpg">
              </div>

                <!-- buat contentnya -->
                <div class="col-7">
                    <h2>Sign In</h2>
                    <p>
                        Don't have account? <a href="SignUp.php">Sign Up</a>
                    </p>
                    
                    <form action="" method="post">
                        <!-- <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" class="form-control" placeholder="Name" aria-label="default input" required>
                        </div> -->

                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" name="Email" id="Email" class="form-control" placeholder="Email" aria-label="default input" required>
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" name="Password" id="Password" class="form-control"  placeholder="Password" aria-label="default input example" required>
                        </div>

                        <!-- <button type="button" class="btn btn-primary">Sign In</button><br><br> -->

                        <div class="field">
                            <input type="submit" class="btn" name="submit" value="Sign In" required>
                        </div>

                        <p class="botext">Or Sign in With</p>
                        <div class="container_logo">
                            <div class="row row-cols-3">
                            <div class="col"><img src="Images/Instagram Logo.png"></div>
                            <div class="col"><img src="Images/Google Logo.png"></div>
                            <div class="col"><img src="Images/Facebook logo.png"></div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>