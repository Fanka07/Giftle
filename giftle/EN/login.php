
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<?php include './include/header.php' ?>
<main>
<div class="formulaire">
        <div class="div1">
            <h1>REGISTER</h1>
            <div class="margin-bottom"></div>
            <form action="" method="post">
                <div>
                   <div><label for="name">Name </label></div> 
                    <input class="input" type="text" placeholder="Example: Steve"  name="user_name" value="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] : '' ?>">
                </div>
                <div>
                    <div><label for="mail">E-mail&nbsp;</label></div>
                    <input  class="input" type="email" placeholder="Name@gmail.com" name="user_mail" value="<?php echo isset($_POST['user_mail']) ? $_POST['user_mail'] : '' ?>">
                </div>
                <div>
                   <div><label for="msg">Password</label></div> 
                   <input class="input" type="password" placeholder="********"  name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
                </div>
                <div><label for="msg">Password confirmation</label></div> 
                <input class="input" type="password" placeholder="********"  name="password_con" value="<?php echo isset($_POST['password_con']) ? $_POST['password_con'] : '' ?>">
                <input class="greenButton" type="submit" value="Register" name="register">
                <?php
                    if(isset($_POST['register'])){
                        $user_name = $_POST['user_name'];
                        $user_mail = $_POST['user_mail'];
                        $password = $_POST['password'];
                        $password_con = $_POST['password_con'];
                        
                        if($user_mail =='' || $password == '' || $user_name = ''){
                            echo '
                            <div class="alert alert-danger mt-3">
                                <strong>All files are required !</strong>
                            </div>
                            ';
                        }elseif($password != $password_con){
                            echo '
                            <div class="alert alert-danger mt-3">
                                <strong>Password incorrect</strong>
                            </div>
                            ';
                        }else{
                            $sql = "SELECT * FROM user WHERE email = '$user_mail'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);
                            if($count > 0){
                                echo '
                                    <div class="alert alert-danger mt-3">
                                        <strong>This email already exists</strong>
                                    </div>
                                    ';
                            }else{
                                $passwords = md5($_POST['password']);
                                $user_name = $_POST['user_name'];
                                $insert = "INSERT INTO user (`nom`, `email`, `password`) VALUES ('$user_name','$user_mail','$passwords')";
                                $result_in = mysqli_query($conn,$insert);
                                if($result_in){
                                    echo '
                                    <div class="alert alert-success mt-3">
                                        <strong>Register successfully !</strong>
                                    </div>
                                    ';
                                }
                            }
                        }
                    }
                ?>
               </form>
            </div>
            <div id="trait"></div>
            <div class="div2">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <h1>LOGIN</h1>
                    <div class="margin-bottom"></div>
                    <div >
                        <div><label id="mail" for="mail">E-mail</label></div>
                        <input  class="input" type="email" placeholder="Name@gmail.com" id="" name="user_mail" value="<?php echo isset($_POST['user_mail']) ? $_POST['user_mail'] : '' ?>">
                    </div>
                    <div>
                       <div><label for="msg">Password</label></div> 
                       <input class="input" type="password" placeholder="********"  name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
                    </div>
                            
                    <input class="greenButton" type="submit" name="login" value="Login">
                    <?php
                    ob_start();
                   
                    if(isset($_POST['login'])){
                        $user_mail = $_POST['user_mail'];
                        $password = $_POST['password'];
                        if($user_mail =='' || $password == ''){
                            echo '
                            <div class="alert alert-danger mt-3">
                                <strong>The required Email and Password !</strong>
                            </div>
                            ';
                        }else{
                            $pass = md5($password);
                            $sql = "SELECT * FROM user WHERE email = '$user_mail' AND password = '$pass'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);
                            if($count > 0){
                                foreach ($result as $key => $value) {}
                                $_SESSION['userss'] = $value['nom'];
                                echo '<meta http-equiv="refresh" content="0;url=index.php">';
                            }else{
                                echo '
                                <div class="alert alert-danger mt-3">
                                    <strong>Email and Password are incorrect !</strong>
                                </div>
                                ';
                            }
                        }
                    }
                    ob_end_flush();
                ?>
                    
                </form>
            </div>
        </div>
        
</main>
<div>&ensp;</div>
<div>&ensp;</div>
<?php
	include "include/footer.php";
?>
</body>
</html>