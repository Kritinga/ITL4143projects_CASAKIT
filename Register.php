<?php 
include "config.php";
include "style_login.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <form action="#" method="post">

                <div class="input-group"><br>
                    <label>Student Number</label>
                    <input type="text" name="ucodes" minlength="9" maxlength="9" required>
                </div>
                <div class="input-group"><br>
                    <label>Username</label>
                    <input type="text" name="ucode" required><br><br>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name= "upass" required>
                </div>
                <div class="submit-group">
                    <button type="submit" name="usubmit">Submit</button>
                </div>
                </form>
</body>
</html>
        <?php 
           
        if(isset($_POST['usubmit'])){
     $name = $_POST['ucodes'];
     $num = $_POST['ucode'];
     $email = '1';
     $pass = md5($_POST['upass']);
     $type = 'User';
        $Query = mysqli_query($con, "INSERT INTO applicants (stunum, stuname, email, password, project) VALUES ('".$_POST['ucodes']."','".$_POST['ucode']."','1','$pass','User')");
        echo "<script>alert('Successfully Added!')</script>";
        echo "<script>window.location.href='admin.php'</script>";
    }

?>