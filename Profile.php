<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="Profile.css">
</head>

<body>
    <header>
        <img src="Images/Wheat Field.jpg" alt="">
    </header>
    <main>
        <?php

        include("php/config.php");
        function isGmail($email) {
            return substr($email, -10) === '@gmail.com';
        }

        if(isset($_POST['save'])){
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $website = $_POST['Website'];

            //Verify unique email
            $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$Email'");

            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                        <p>This email is used, Try another one please</p>
                    </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            }
            else{
                mysqli_query($con, "UPDATE user
                                    SET Name = '$Name', Email = '$Email', Website = '$website')
                                    WHERE ")
                            or die("An error has ocurred");
                        
                echo "<div class='message'>
                        <p>Saved successfully!</p>
                    </div> <br>";
                echo "<a href='Profile.php'><button class='btn'>Continue</button>";
            }
        }else{

        ?>

        <div class="Left">
            <div class="ProfilePic">
                <a href=""><img src="Images/People Face.jpg" alt=""></a>
            </div>    
            <div class="Creator">
                    <p>Creator</p>
            </div>
        </div>
        <div class="right">
            <div class="RightProperty">
                <h1>Profile</h1>
                <h3>Name</h3>
                <input type="input" value="" placeholder="Name..">
                <h3>Email</h3>
                <input type="input" value="" placeholder="Email..">
                <h3>Website</h3>
                <input type="input" value="" placeholder="Website">
                <div class="ButtonD">
                    <div class="Buttn">
                        <a href="javascript:self.history.back()"><button class="Cancel">Cancel</button></a>
                    </div>

                    <input type="submit" class="btn" name="save" value="Save" required>

                </div>
            </div>
        </div>
        <?php } ?>
    </main>

</body>

</html>