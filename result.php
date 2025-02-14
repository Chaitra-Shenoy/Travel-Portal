<!DOCTYPE html>
<html lang="en">
<title>Flight Details</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
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
  <div class="container" style="margin-top:30px;">
        <h2 class="text-help" style="margin-bottom:20px;">Boookings Done</h2>
<table id="table">
  <tr id="th">
    <th>Airline</th>
    <th>Flight Code</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Price(In Rupees)</th>
  </tr>
    
<?php
            session_start();
            $con = mysqli_connect("localhost:3306","root","","travels");
            // Check connection
            if (mysqli_connect_errno())
            {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $pnum=$_POST['pnum'];

            $sql1="SELECT a_name,flight_code,from_source,to_dest,date_of_flight,price from booking_info INNER JOIN
                flight_info on flight_info.flight_code=booking_info.f_code INNER JOIN airline_info on airline_info.a_code=flight_info.a_code and booking_info.fname='$fname'and
                booking_info.lname='$lname'and booking_info.pnumber='$pnum'";

            $result=mysqli_query($con,$sql1);

            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                 {
                    echo "<tr>";
                    echo "<td width=20%>" . $row['a_name'] . "</td>";
                    echo "<td width=20%>" . $row['flight_code'] . "</td>";
                    echo "<td width=20%>" . $row['from_source'] . "</td>";
                    echo "<td width=15%>" . $row['to_dest'] . "</td>";
                    echo "<td width=10%>" . $row['date_of_flight'] . "</td>";
                    echo "<td width=10%>" . $row['price'] . "</td>";

                    echo "</tr>";
                }
                echo "</table>";
            } 
            else
            {
                $_SESSION['fname']=$fname;
                $_SESSION['lname']=$lname;
                header('Location:NoPreviousBookings.php');
            }
?>
<a href="index.html" type="submit" class="btn btn-primary button" style="margin-top:50px;">Back To Home</a>

<p style="margin-top: 80px; border:1px solid black">
<h5>Disclaimer : </h5>
->The table depicts all the prior bookings made by the Passesnger using the webiste Booking Made Easy. It does not provide
any details made for the airlines using any other third party.
<br>
-> In case of any problem, or errors, Go to the Help page and register the problem faced to resolve the issue as quickly as possible
</p>
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
</body>
</html>