<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="Stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <nav>
            <div class="todo">
                <ul>
                    <li><i class="fas fa-home"></i></li>
                    <li>Todo list</li>
                </ul>
                <ul class="ul2">
                    <li>Login</li>
                </ul>
            </div>
        </nav>
        <div class="form-box">
            <h1>Login</h1>
            <form action="controle.php" method="post">
                <?php if(isset($_GET['error'])){?>
                    <p class="error" style="background: #f2dede;
                    font-size:15px;
                    position:relative;
                    top:55px;
                    right:95px;
  color: #a94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;"><?php echo $_GET['error'];?></p>
               <?php } ?>
               <table>
                   <tr>
                       <td><div class="icon-btn"><i class="fas fa-user-alt"></i></div><input class="index-input" type="text" name="u_name" placeholder=" User name" ></td>
                   </tr>
                   <tr>
                       <td><div class="icon-btn"><i class="fas fa-lock"></i></div><input class="index-input" type="password" name="pw" placeholder=" Password" ></td>
                   </tr>
               </table>
               <button type="submit" name="login_btn" class="login-btn"><i class="fas fa-sign-in-alt"></i> Login</button>
            </form>
        </div>
    </div>
</body>
</html>