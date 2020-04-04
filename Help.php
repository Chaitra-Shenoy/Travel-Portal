<!DOCTYPE html>
<html lang="en">
<title>Help</title>
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
                       <a href="NextBooking.html">Booking</a>
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

    <!--HELP FORM AND OTHER DETAILS-->
    <div class="container">
        <div class="row form-help">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Contact Form</div>
                    <div class="card-body">
                        <form action="Help.php" method="POST">
                            <div class="form-group">
                              <label for="email">Email address:</label>
                              <input type="text" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                              <label for="name">First Name:</label>
                              <input type="text" class="form-control" name="fname" id="fname">
                            </div>

                            <div class="form-group">
                                <label for="name">Last Name:</label>
                                <input type="text" class="form-control" name="lname" id="lname">
                            </div>

                            <div class="form-group">
                                <label for="info">Contact No.:</label>
                                <input type="text" class="form-control" name="pno" id="pno">
                            </div>

                            <form action="Help.php" method="POST">
                            <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                        </form>
                          </form>
                    </div>
                    <div class="card-footer"><strong>E-Mail will be sent to address your grieviances</strong></div>
                  </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Social-Media Accounts</div>
                   <div class="card-body">
                       <div class="row emoji">
                            <i class="fab fa-facebook-square fa-5x icon"></i>
                            <br>
                            <p class="acc-body"><br>&nbsp;&nbsp;Facebook Page : <strong>Booking Made Easy</strong></p>
                       </div>

                       <div class="row emoji">
                            <i class="fab fa-instagram fa-5x icon"></i>
                            <br>
                            <p class="acc-body"><br>&nbsp;&nbsp;Instagram Page : <strong>@bme_2018</strong> </p>
                       </div>

                       <div class="row emoji">
                            <i class="fab fa-twitter fa-5x icon"></i>
                            <br>
                            <p class="acc-body"><br>&nbsp;&nbsp;Twitter ID: <strong>@bme</strong></p>
                       </div>

                   </div>
            </div>
        </div>
    </div>
    </div>
S
    <?php
    if (isset($_POST['submit1'])) 
    {
        $con = mysqli_connect("localhost:3306","root","","travels");
            // Check connection
            if (mysqli_connect_errno())
            {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $email1=$_POST['email'];
            $fname1=$_POST['fname'];
            $lname1=$_POST['lname'];
            $pnum=$_POST['pno'];
            echo "h";
            $sql1="insert into help(email,fname,lname,contact) values ('$email1','$fname1','$lname1','$pnum')";
            mysqli_query($con,$sql1);
    }
    ?>
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