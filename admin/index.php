<?php
    session_start();
    if(isset($_SESSION['administrator'])){
        header('Location:dashboard.php');
        exit();
    }

    $NoNavbar ='';
    include 'init.php';

    if($_SERVER['REQUEST_METHOD']){
        
        
        $userName = isset($_POST['username']) ? $_POST['username'] : 0;
        $password = isset($_POST['password']) ? $_POST['password'] : 0;
        $hashedpass     = sha1($password);
        $remember = isset($_POST['remember-me']) ? $_POST['remember-me'] : 0;

        $stmt = $con->prepare("SELECT * FROM admin WHERE Username = ? AND Password = ?");
        $stmt->execute(array($userName , $hashedpass));
        $count = $stmt->rowCount();
        if($count > 0){
            $_SESSION['administrator'] = $userName;
            header("Location:dashboard.php");
            exit();
        }
    }
?>

<section class='login'>
        <div class='container'>
            <form  class='text-center' action= <?php echo $_SERVER['PHP_SELF']; ?> METHOD='POST'>
                <h2>Admin Login</h2>

                <div class=' group'>
                <i class="fas fa-user"></i>
                <input type='text' class='form-control' name='username' placeholder='UserName' required autocomplete="off"/>
                </div>

                <div class=' group'>
                <i class="fas fa-lock"></i>
                <input type='password' class='form-control' name='password' placeholder='Password' required autocomplete='new-password'/>
                </div>
                <div class=' group'>
                    <input type="checkbox" id='check' name="remember-me" value ="1" '>
                    <label for='check'> <i class="fas fa-check remember"></i>Remember Me</label>
                </div>
                <input type='submit' value='Login' class='btn btn-primary'>
            </form>
        </div>
</section>
