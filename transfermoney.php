<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style type="text/css">
      button{
        transition: 1.5s;

      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color :#43a5f0;">
<?php
    include 'data.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;font-family: 'Amatic SC',verdana;">Transfer Money</h2>
        <br>
            <div class="row" style="background-color: #43a5f0">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['curr_balance']?></td>
                        <td><a href="http://localhost/tsfBank/selecteduserdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #50bfbf; " >Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
        
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

<footer class="footer_distributed">
        <div class="footer_left">
            
            <p class="footer_company_name">The Sparx Foundation Bank &copy;Copyright 2022 </p>
            <p class="footer_company_name">
            Designed bY-Ujjwal Tyagi</p>
            <p class="footer_company_name">
            SparxFoundation#GRIP2022 MAY WEB DEVELOPMENT INTERNSHIP </p>
        </div>
        <div class="footer_center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>INDIA</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p><span>+91-454-46-566</span> </p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">reachus@tsfBank.com</a></p>
            </div>
            </div>
            <div class="footer_right">
                <p class="footer_company_about">
                 <span>About Us</span>
                 This Is an Online Money tRansfer System in a secured manner!.
    
                </p>
                <div<a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
    
                </div>
            </div>
    
        </div>
    
    </footer>
    </body>
</html>