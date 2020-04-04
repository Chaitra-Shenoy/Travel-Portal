
<!DOCTYPE html>
<html lang="en">
<title>Confirmation</title>
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
    .help1
    {
        background-color: black;
        color:white;
        position: relative;
        bottom: 0;
        width: 100%;          /* Footer height */
}
</style>
<style type="text/css">
    .edit
    {
        text-align:center;
        border-bottom:1px solid black;
        margin-top:20px;
        margin-bottom:20px;
    }

    .edit1
    {
        margin-left:425px;
    }

    .button
    {
        margin-left:430px;
    }
</style>
<!--Navbar-->
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

    <!--CONFIRMATION MESSAGE-->
    <?php
    if (isset($_POST['Submit1'])) 
    {
            $con = mysqli_connect("localhost:3306","root","","travels");
    // Check connection
            if (mysqli_connect_errno())
            {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $fname1=$_POST['fname'];
            $lname1=$_POST['lname'];
            $pnum1=$_POST['pnum'];
            $email1=$_POST['email'];
            $fcode=$_POST['fcode'];
            $sql0="select pnumber from customer_info where pnumber='$pnum1'";
            $r1=mysqli_query($con,$sql0);
            if(mysqli_num_rows($r1)==0)
            {
                $sql="insert into customer_info(fname,lname,pnumber,email) values ('$fname1','$lname1','$pnum1','$email1')";
                mysqli_query($con,$sql);
            }
            $sql1="insert into booking_info(fname,lname,pnumber,email,f_code) values ('$fname1','$lname1','$pnum1','$email1','$fcode')";
            $sql2="update flight_info set seats_available=seats_available-1 where flight_code='$fcode'";
            $sql3="select arrival_time,departure_time,from_source,to_dest,date_of_flight from flight_info where flight_code='$fcode'";
            mysqli_query($con,$sql1);
            mysqli_query($con,$sql2);
            $result=mysqli_query($con,$sql3);
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    $to=$row['to_dest'];
                    $from=$row['from_source'];
                    $date=$row['date_of_flight'];
                    $arr=$row['arrival_time'];
                    $dept=$row['departure_time'];
                }
            }
    }
    ?>

    <div class="container shade">
            <h1 class="edit">Flight Confirmation Details</h1>
            <div class="container">
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>First Name:</strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $fname1?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Last Name:</strong></label>
            <label for="lname" >&nbsp; &nbsp;<?php echo $lname1?></label>
            <br>
            <label for="num" class="edit1" style="border-bottom: 2px solid black;"><strong>Flight Number:</strong></label>
            <label for="number" >&nbsp; &nbsp;<?php echo $fcode?></label>
            <br>
            <label for="from" class="edit1" style="border-bottom: 2px solid black;"><strong>From: </strong></label>
            <label for="to" >&nbsp; &nbsp;<?php echo $from?></label>
            <br>
            <label for="to" class="edit1" style="border-bottom: 2px solid black;"><strong>To: </strong></label>
            <label for="to" >&nbsp; &nbsp;<?php echo $to?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Departure Time: </strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $dept?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Arrival Time: </strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $arr?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Date: </strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $date?></label>
            <br>
            <br>
            <a href="index.html" class="btn btn-primary button">Back To Home</a>
        </div>
    </div>
    
    <!--FOOTER-->
    <footer class="help1">
        <div class="row">
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