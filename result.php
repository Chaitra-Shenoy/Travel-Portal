<!DOCTYPE html>
<html lang="en">
<title>Booking</title>
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
<style type="text/css">
    body {
    margin: 0;
}

.help1 {
    background-color: black;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: auto;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 50vh;
}

.main-nav
{
        border:2px solid black;
}
</style>
    <!--NAVBAR-->
    <section class="main-nav">
        <nav>
            <div class="row">
               <img class="logo-img1" src="images/Logo_White.png" > 

               <ul class="nav1">
                <li>
                    <a href="index.html">Home</a>
                </li>
                   <li>
                       <a href="NextBooking.html">Bookings</a>
                   </li>

                   <li>
                        <a href="About.html">About</a>
                    </li>

                    <li>
                        <a href="Help.php">Help</a>
                    </li>

                    <li>
                        <a href="Check.html">Booking Info</a>
                    </li>
               </ul>
            </div>
        </nav>
    </section>
    <style type="text/css">
        table
        {
            width:100%;
            border:1px solid black;
            color:black;
            font-family: monospace;
            font-size:25px;
            text-align: center;
        }
        th
        {
            text-align: center;
            border:1px solid black;
        }
        td
        {
            text-align: center;
            border:1px solid black;
            padding:15px 15px;
        }
        .text-help
        {
            text-align: center;
            margin-bottom:15px;
        }

        .button
        {
            margin-top:30px;
            margin-left:425px;
        }
    </style>
    <!--DISPLAY THE LIST OF FLIGHTS AVAILABLE IF THE BUTTON IS CLICKED BOOK THE TICKETS AND LEAD TO THE PAGE BOOKING-CONFIRM-->
    <!--IF NO SEATS AVAILABLE LEAD TO BOOKING UNAVAILABLE-->
    <div class="container pb-5">
    <div class="container mt-5 mb-3">
  <div class="container">
        <h2 class="text-help">Boookings Done</h2>
<table id="table">
  <tr id="th">
    <th>Flight Code</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
  </tr>
    
<?php
            $con = mysqli_connect("localhost:3306","root","","travels");
            // Check connection
            if (mysqli_connect_errno())
            {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $pnum=$_POST['pnum'];

            $sql1="SELECT flight_code,from_source,to_dest,date_of_flight from booking_info INNER JOIN
                flight_info on flight_info.flight_code=booking_info.f_code and booking_info.fname='$fname'and
                booking_info.lname='$lname'and booking_info.pnumber='$pnum'";

            $result=mysqli_query($con,$sql1);

            if(mysqli_num_rows($result) > 0)
            {
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo "<td width=20%>" . $row['flight_code'] . "</td>";
                echo "<td width=20%>" . $row['from_source'] . "</td>";
                echo "<td width=15%>" . $row['to_dest'] . "</td>";
                echo "<td width=10%>" . $row['date_of_flight'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
?>
<a href="index.html" type="submit" class="btn btn-primary button">Back To Home</a>
</table>
</div>
</div>
  </div>
</div>

<!--FOOTER-->
<div class="wrapper">
    <footer class="help1">
        <div class="row help1">
            <div class="container">
                <div class="col span-1-of-2">
                    <div class="container">
                        <i class="fas fa-phone fa-3x phone-img"></i>
                        <p>Contact Details: +00 0000 0000 | +22 1212 2323</p>
                    </div>
                </div>
    
                <div class="col span-1-of-2 help">
                    <div class="container">
                        <p class="email"> <strong>Email-address</strong> :bme@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
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