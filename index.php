<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Tech Site - Administrator Page</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
     <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>

            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printChart");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData3();
})  
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
              Tech Site
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#data"> Database  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mod"> My Module</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="php/logout.php">
                <span class="nav-link" href="php/logout.php">
                  Logout
                </span>
              </a>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!
                    </h1>
                    <p>
                      Optimising your website needs
                    </p>
                    <div class="btn-box">
                      <a href="#data" class="btn-1">
                        Database
                      </a>
                      <a href="#mod" class="btn-2">
                        My Module
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/tech1-slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!
                    </h1>
                    <p>
                      Hosting your content on our platform 
                    </p>
                    <div class="btn-box">
                      <a href="#data" class="btn-1">
                        Database
                      </a>
                      <a href="#mod" class="btn-2">
                        My Module
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/robot-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!
                    </h1>
                    <p>
                      Building imaginary into web reality 
                    </p>
                    <div class="btn-box">
                      <a href="#data" class="btn-1">
                        Database
                      </a>
                      <a href="#mod" class="btn-2">
                        My Module
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/tech2-slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- database section -->

  <section id="data" class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Database
              </h2>
              <br>
              <h3><br>
                <br>List of Users</h3>
            </div>
            <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this user?')?window.location.href='php/functions.php?action=deleteU&id=<?php echo($row["User_ID"]); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
            <div class="btn-box">
              <a onclick="printData();" class="btn-1">
                Print Report
              </a>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h3><br>
                <br>List of Products</h3>
            </div>
            <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Product ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Description</th>
 <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Picture</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `Product_ID`, `Name`, `Description`, `Quantity`, `Price`, `Image` FROM `product`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Description"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Price"]); ?> kshs.</td>
<td><img src="images/<?php echo($row["Image"]); ?>" style="width: 150px;" alt></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this product?')?window.location.href='php/functions.php?action=deleteP&id=<?php echo($row["Product_ID"]); ?>':true;" title='Delete Product'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
            <div class="btn-box">
              <a onclick="printData1();" class="btn-1">
                Print Report
              </a>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h3><br>
                <br>List of Orders</h3>
            </div>
            <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Order ID</th>
<th style="text-align: left;
  padding: 8px;">User Details</th>
  <th style="text-align: left;
  padding: 8px;">Product</th>
 <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>  
   <th style="text-align: left; padding: 8px;"></th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `orders`.`Order_ID`, `orders`.`User_ID`, `orders`.`Product_ID`, `orders`.`Total_Price`, `orders`.`Quantity`, `orders`.`Created_At`, `orders`.`Status`, `users`.`Fullname`, `users`.`Phone_Number`, `users`.`Email_Address` FROM `orders` JOIN `users` ON `orders`.`User_ID` = `users`.`User_ID`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Order_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?> reach out on <?php echo($row["Phone_Number"]); ?> & <?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Total_Price"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
<?php
if ($row['Status'] != 'Completed') {
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to complete this order?')?window.location.href='php/functions.php?action=completeO&id=<?php echo($row["Order_ID"]); ?>&id1=<?php echo($row["Quantity"]); ?>&id2=<?php echo($row["Product_ID"]); ?>':true;" title='Complete Order'>Complete</button></td>
<?php
}else{
?>
<td></td>
<?php
}
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this order?')?window.location.href='php/functions.php?action=deleteO&id=<?php echo($row["Order_ID"]); ?>':true;" title='Delete Order'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
            <div class="btn-box">
              <a onclick="printData2();" class="btn-1">
                Print Report
              </a>
              <br>
            </div>
          </div>
        </div>
                <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h3><br>
                <br>Chart of Popular Products</h3>
            </div>
            <div id="printChart">
                          <div class="card mt-4">
            <div class="card-body">
              <div class="chart-container pie-chart">
                <canvas id="pie_chart"></canvas>
              </div>
            </div>
          </div>
            </div>
            <div class="btn-box">
              <a onclick="printData3();" class="btn-1">
                Print Report
              </a>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end database section -->

<!-- my module section -->

  <section id="mod" class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <span>
              My Module
            </span>
          </div>
        </div>

        <div class="info_main">
          <div class="row">

            <div class="col-md-6">
              <div class="info_form ">
                <h5>
                  Add A Product
                </h5>
                <form action="php/functions.php" enctype="multipart/form-data" method="POST">
                  <input type="text" name="pname" required placeholder="Name">
                  <br>
                  <br>
                  <input type="number" name="amo" min="0" required placeholder="Price">
                  <br>
                  <br>
                  <input type="number" name="quan" min="0" required placeholder="Quantity" style="color: black;">                  
                  <br>
                  <br>
                  <textarea type="text" rows="3" name="desc" required placeholder="Description"></textarea>  
                  <br>
                  <br>
                  <label>Picture of the Product:</label>
                  <input type="file" name="image" required>
                  <br>
                  <br>
                  <button name="addP" type="submit">
                    Add A Product
                  </button>
                </form>
              </div>
            </div>
                        <div class="col-md-6">
              <div class="info_form ">
                <h5>
                  Update A Product
                </h5>
                <form action="php/functions.php" enctype="multipart/form-data" method="POST">
                <select required name="pid">
                <option selected disabled value="0">Select A Product</option>
                <?php
                $sql = "SELECT * FROM `product`";
                $all_categories = mysqli_query($conn,$sql);
                while ($category = mysqli_fetch_array(
                $all_categories,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $category["Product_ID"];?>"><?php echo $category["Name"];?></option>
                <?php
                endwhile;
                ?>
                  </select>
                  <br>
                  <br>
                  <input type="number" name="quan" min="0" required placeholder="Added Quantity">
                  <button name="upp" type="submit">
                    Update A Product
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end my module section -->


  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/logo.png" alt="" />
            <span>
              Tech Site
            </span>
          </div>
          <div class="social_box">
            <a href="#">
              <img src="images/fb.png" alt="">
            </a>
            <a href="#">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="#">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="#">
              <img src="images/instagram.png" alt="">
            </a>
            <a href="#">
              <img src="images/youtube.png" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="info_link-box">
                <h5>
                  Useful Link
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="#data">About </a>
                  </li>
                  <li class="">
                    <a class="" href="#mod">Work </a>
                  </li>
                  <li class="">
                    <a class="" href="php/logout.php">Logout </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 ">
              <h5>
                Offices
              </h5>
              <p>
                Currently there are no physical offices. We may connect over intercommunication platforms such as zoom or microsoft teams
              </p>
            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
              <h5>
                Information
              </h5>
              <p>
                Tech Site empowers all those who wish to expand their reach into the internet. Threading the web of your site.
              </p>
            </div>

           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">

                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Tech Site@gmail.com
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +01 1234567890
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
        <a href="#">Tech Site</a>
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


         <script type="text/javascript">
      $(document).ready(function(){

        makechart();

      function makechart()
  {
    $.ajax({
      url:"php/chart.php",
      method:"POST",
      data:{action:'fetch'},
      dataType:"JSON",
      success:function(data)
      {
        var language = [];
        var total = [];
        var color = [];

        for(var count = 0; count < data.length; count++)
        {
          language.push(data[count].language);
          total.push(data[count].total);
          color.push(data[count].color);
        }

        var chart_data = {
          labels:language,
          datasets:[
            {
              label:'Vote',
              backgroundColor:color,
              color:'#fff',
              data:total
            }
          ]
        };

        var options = {
          responsive:true,
          scales:{
            yAxes:[{
              ticks:{
                min:0
              }
            }]
          }
        };

     var group_chart1 = $('#pie_chart');

        var graph1 = new Chart(group_chart1, {
          type:"pie",
          data:chart_data
        });
      }
    })
  }

});

    </script> 

</body>
</body>

</html>