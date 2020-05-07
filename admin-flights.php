<!DOCTYPE html>
<html lang="en">
<title>Flight Admin</title>
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

    <div class="container text-center" style="margin-top:15px; margin-bottom:15px;">
        <h1 style="margin-top:30px; margin-bottom:30px; border-bottom:1px solid black;">ENTER THE DETAILS OF THE FLIGHTS</h1>
        <form action="admin-flights.php" method="post">
            <label for="info" style="margin-bottom:10px">Enter the airline code</label>
            <br>
            <input type="text" name="a_code" id="a_code" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the flight code</label>
            <br>
            <input type="text" id="flight_code" name="flight_code" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the starting point of travel</label>
            <br>
            <input type="text" id="from_source" name="from_source" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the destination</label>
            <br>
            <input type="text" id="to_dest" name="to_dest" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the time of departure</label>
            <br>
            <input type="text" id="departure_time" name="departure_time" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the time of arrival</label>
            <br>
            <input type="text" id="arrival_time" name="arrival_time" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the no. of seats available</label>
            <br>
            <input type="text" id="seats_available" name="seats_available" style="margin-top:5px; margin-bottom:5px;" required>
            <br>

            <label for="info" style="margin-bottom:10px">Enter the date of flight</label>
            <br>
            <input type="text" id="date_of_flight" name="date_of_flight" style="margin-top:5px; margin-bottom:5px;" required>
            <br>
            
            <form action="admin-login.php" method="post" >
                <button type="submit" class="btn btn-primary next-button" style="margin-bottom:1px" name="Submit1">Next</button>
            </form>
            <br>

            <form action="logout.php" method="post" >
                <button type="submit" class="btn btn-primary next-button" style="margin-bottom:15px" name="Submit1">Logout</button>
            </form>
                
            <h1 style="border-bottom:1px solid black; margin-bottom:55px;"></h1>
        </form>
    </div>

    <?php
        session_start();
        $con = mysqli_connect("localhost:3306","root","","travels");
        $emp_id=$_SESSION['emp_id'];
        if(!empty($emp_id))
        {
            if(isset($_POST['Submit1'])) 
            {
                include('admin-login.php');
                if (mysqli_connect_errno())
                {
                     echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
               
               $a_code=$_POST['a_code'];
               $flight_code=$_POST['flight_code'];
               $from_source=$_POST['from_source'];
               $to_dest=$_POST['to_dest'];
               $departure_time=$_POST['departure_time'];
               $arrival_time=$_POST['arrival_time'];
               $seats_available=$_POST['seats_available'];
               $date_of_flight=$_POST['date_of_flight'];

               $sql1="insert into flight_info(a_code,flight_code,from_source,to_dest,departure_time,arrival_time,seats_available,date_of_flight) values ('$a_code','$flight_code','$from_source','$to_dest','$departure_time','$arrival_time','$seats_available','$date_of_flight')";

               if($emp_id==true)
               {
                    if(mysqli_query($con,$sql1))
                    {
                        header('Location: admin-flight_confirmation.html');
                    }
               }
               else
               {
                    header('Location:admin-login.php');
               }

            }
        }
        else
        {
            header('Location:admin-login.php');
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