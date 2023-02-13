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
        <form class="form_login" action="save_sign_up.php" method="POST">
            <h2>SIGN UP</h2>
            <div class="mt d-f f-d">
                <label for="email">Email</label>
                <input type="email" placeholder="Please enter your email" id="email" class="email" name="email" />
            </div>
            <div class="mt d-f f-d">
                <label for="name">Name</label>
                <input type="text" placeholder="Please enter your name" id="name" class="email" name="name" />
            </div>
            <!-- <div class="mt mb d-f f-d">
                <label for="pwd">Password</label>
                <input type="password" placeholder="Please enter your password" id="pwd1" class="pwd" />


            </div> -->

            <div class="mt mb d-f f-d">
                <label for="pwd">Password </label>
                <input type="password" placeholder="Please enter your password" id="pwd" class="pwd" name="password" />
                <div class="d-f mt1">
                    <label class="mr" for="">Show Password</label>
                    <input type="checkbox" onclick="myFunction()" />
                </div>

            </div>

            <div class="d-f">
            <div class="sign-in mr">
                <input class="btn_submit_sign-in" type="submit" name="sign-up"
                   
                />
            </div>
            <div class="sign-in">
                <button class="btn_submit_sign-in" >
                    <a style="text-decoration : none;" href="login.php">
                       Back
                    </a>
                </button>
            </div>
            </div>
            


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