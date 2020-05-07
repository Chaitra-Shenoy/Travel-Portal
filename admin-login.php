<!DOCTYPE html>
<html lang="en">
<title>Admin-Login</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
    <title>Bootstrap theme </title>
</head>
<body>

    <div class="container text-center" style="margin-top:25px; margin-bottom:25px">
        <h1 style="border-bottom:1px solid black;">ADMIN LOGIN</h1>
        <form action="admin-login.php" method="post">
            <label for="info" style="margin-bottom:10px; margin-top:20px;">Enter the employee number:</label>
            <br>
            <input type="text" name="admin_id" id="admin_id" style="margin-bottom:10px; margin-top:10px;" required>
            <br>
    
            <label for="info" style="margin-bottom:10px;">Enter the employee password</label>
            <br>
            <input type="password" name="admin_pass" id="admin_pass" style="margin-bottom:10px; margin-top:10px;" required>
            <br>
            <form action="admin-login.php" method="post" >
                     <button type="submit" class="btn btn-primary next-button" style="margin-bottom:15px" name="Submit1">LOG IN</button>
            </form>
            <br>

            <h1 style="border-bottom:1px solid black; margin-bottom:55px;"></h1>
        </form>
    </div>

    <?php
    if(isset($_POST['Submit1'])) 
    {
            session_start();
            $con = mysqli_connect("localhost:3306","root","","travels");
            if (mysqli_connect_errno())
            {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
           $emp_no=$_POST['admin_id'] ;
           $emp_pass=$_POST['admin_pass'];
           $sql1="SELECT emp_no from admin_login where emp_no='$emp_no' and emp_pass='$emp_pass';";
           $r1 = mysqli_query($con,$sql1);
           if(mysqli_num_rows($r1)==1)
           {
                $_SESSION['emp_id']=$emp_no;
                header('Location:admin-flights.php');
           }
           else
           {
                header('Location:index.html');
           }

    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
    //get the current year for the copyright

    $('#year').text(new Date().getFullYear());
    </script>
</body>
</html>