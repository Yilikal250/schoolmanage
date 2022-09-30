<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="imgBx">
         <img src="image/school.webp" alt="">
        </div>
        <div class="contentBx">
           <div class="formBx">
             <h2>Login</h2>
             <form  name="form" action="login.php" method="POST">
                <div class="inputBx">
                    <span>Username</span>
                    <input type="text" name="user">
                </div>
                <div class="inputBx">
                    <span>Password</span>
                    <input type="password" name="pass">
                </div>
                <div class="inputBx">
                  <input type="submit" id="btn" value="Login" name="submit"/>
                </div>
             </form>
           </div>
        </div>
    </section>
</body>
</html>