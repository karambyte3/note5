<?php 
$title = "Regsiter"; 
include("templates/main/head.php");
include("validateRegister.php");
?>
    
<link rel="stylesheet" href="css/login.css">

    <div class="container">
      <form class="form-sign" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>Register account</h2>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="text" id="password" name="password" class="form-control" placeholder="Password" required>
        <label for="password2" class="sr-only">Confirm Password</label>
        <input type="text" id="password2" name="password2" class="form-control" placeholder="Confirm password" required>
        <p>Already have account? <br>Click <a href="login.php">here</a> to login.</p>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user">Sign up</button>
      </form>
    </div>



    <?php 
    include("errors.php");
    include("templates/main/footer.php");
    ?>