<?php 
session_start();

if(isset($_SESSION['id']) &&($_SESSION['username'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="style.css">
    <title>HOME</title>
    <style>
        .logout-btn{
            color:#777;
            text-decoration:none;
        }
        table{
            position:relative;
            bottom:50px;
        }
        input{
            
            width:77%;
            outline:none;
        }
    </style>
</head>
<body>
        <nav>
            <div class="todo">
                <ul>
                    <li><i class="fas fa-home"></i></li>
                    <li>Todo list</li>
                </ul>
                <ul class="ul2">
                    <li><i class="fas fa-user-alt"></i><?php echo $_SESSION['username'];?> <a href="logout.php" class="logout-btn"> &nbsp Logout</a></li>
                </ul>
            </div>
        </nav><br><br><br><br>
    
    <hr class="bg-dark w-50 m-auto">
    <div class="w-50 m-auto">
        <h1>Todo List:</h1>
        <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>

        <?php 
        
        include "db_conn.php";
        $sql="SELECT * FROM todos WHERE user_id=$_SESSION[id]";
        $result=mysqli_query($conn , $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $i=$row['id'];
                $id=$row['user_id'];
                $description=$row['description'];
            ?>

            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $id ?></td>
                <td><?php echo $description ?></td>
                <td><a href="delete.php" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php
            }
        }
?>

      <th scope="row" colspan="3"><form action="data.php" method="post">
          <input type="text" name="des" required placeholder="Description....">
      </th>
      <td><button type="submit" class="btn btn-primary" name="sub-btn">Add</button><td></form>
    </tr>
  </tbody>
</table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>

<?php
}

else{
    header("Location: index.php");
    exit();
}
?>