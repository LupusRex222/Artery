<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="SignUp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <div class="container">

            <?php

            include("php/config.php");
            function isGmail($email) {
                return substr($email, -10) === '@gmail.com';
            }

            if(isset($_POST['submit'])){
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $password = $_POST['Password'];

                //Verify unique email
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$Email'");

                if(mysqli_num_rows($verify_query) != 0){
                    echo "<div class='message'>
                            <p>This email is used, Try another one please</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                }
                elseif (!isGmail($Email)) {
                    echo "<div class='message'>
                            <p>The email must end with @gmail.com</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";  
                }
                else{
                    mysqli_query($con, "INSERT INTO users(Name, Email, Password) VALUES('$Name', '$Email', '$password')")
                                or die("An error has ocurred");
                            
                    echo "<div class='message'>
                            <p>Registered successfully!</p>
                          </div> <br>";
                    echo "<a href='SignIn.php'><button class='btn'>Sign In</button>";
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
                    <h2>Get Sarted</h2>
                    <p>
                        Already have account? <a href="SignIn.php">Sign In</a>
                    </p>
                        
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input  type="text" name="Name" id="Name" class="form-control" placeholder="Name" aria-label="default input" required>
                        </div>

                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" name="Email" id="Email" class="form-control" placeholder="Email" aria-label="default input" required>
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" aria-label="default input example" required>
                        </div>

                        <!-- <button type="submit" class="btn btn-primary">Sign Up</button><br><br> -->
                       
                        <div class="field">
                            <input type="submit" class="btn" name="submit" value="Sign Up" required>
                        </div>

                        <p class="botext">Or Sign up With</p>
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