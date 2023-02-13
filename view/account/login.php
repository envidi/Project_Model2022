<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./../../css/login.css" />
</head>

<body>
    <div class="container">
        <form class="form_login" action="save_login.php" method="POST">
            <h2>SIGN IN</h2>

            <div class="mt d-f f-d">
                <label for="name">Name</label>
                <input type="text" placeholder="Please enter your name" id="name" class="email" name="name" />
            </div>
            <div class="mt  d-f f-d">
                <label for="pwd">Password</label>
                <input type="password" placeholder="Please enter your password" id="pwd" name="pass" class="pwd" />
                <div class="d-f mt1">
                    <label for="showPass" class="mr" for="">Show Password</label>
                    <input id="showPass" type="checkbox" onclick="myFunction()" />
                </div>

            </div>

            <div class=" mb d-f f-d">
                
                <div class="d-f mt">
                    <label style="font-weight: 600;" for="remember" class="mr" for="">Remember me</label>
                    <input id="remember" type="checkbox" onclick="myFunction()" />
                </div>

            </div>

            <div class="sign-in">
                <!-- <button class="btn_submit_sign-in" type="submit">Submit</button> -->
                <input type="submit" value="Submit" class="btn_submit_sign-in" name="login">
            </div>

            <div class="d-f">
                <div class="mr forget_pass">
                    <a href="">Forget password </a>
                </div>
                <div class="sign_in">
                    <a href="sign_up.php">Sign up</a>
                </div>
            </div>
            <h3 class="mt" style="color:green">
            
            <?php
            $noti = isset($_GET['notify']) ? $_GET['notify'] : "";
            echo $noti;
            ?>

        </h3>
        </form>

       
    </div>



    <script>
        function myFunction() {
            var x = document.getElementById("pwd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>