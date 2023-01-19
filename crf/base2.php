<?php

header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header("Access-Control-Allow-Origin: *");

?>

<!DOCTYPE html>
<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" type="text/css" href="../css-new/index.css" />
    <link rel="stylesheet" type="text/css" href="../css-new/carousel.css" />

    <title>IIT(ISM) Dhanbad | Research and Development</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        ul {
            list-style-type: circle;
            list-style-position: outside;
            padding-left: 20px;
            /* margin-left: 20px; */
            ;
        }

        .navbar2 {
            width: 100%;
            background-color: #707070;
            overflow: auto;
            border-bottom: 2px solid #000;
            padding: 0 auto;
        }


        .navbar2 a {
            float: left;
            padding: 10px 5px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            width: 12.5%;
            /* Four links of equal widths */
            text-align: center;
            border-right: 0.5px solid white;
            border-left: 0.5px solid white;
        }

        .navbar2 a:hover {
            background-color: #555;
        }

        .navbar2 a.active2 {
            background-color: #04AA6D;
        }

        @media screen and (max-width: 500px) {
            .navbar2 a {
                float: none;
                display: block;
                width: 100%;
                text-align: left;
            }
        }

        .home-admin-button {
            /* display: flex; */
            text-align: center;
            /* border-bottom: 1px solid #000; */
            padding: 10px;
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        }

        .home-admin-button button {
            /* width: 20%; */
            padding: 0 2px;
            /* margin: 2px; */
        }

        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }


        .dropdown {
            float: left;
            overflow: hidden;
            width: 12.5%;
            border-right: 0.5px solid white;
            border-left: 0.5px solid white;
            height: 100%;
        }

        /* Style the dropdown button to fit inside the topnav */
        .dropdown .dropbtn {
            font-size: 12px;
            border: none;
            outline: none;
            color: white;
            padding: 10px 5px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            width: 100%;
        }

        /* Style the dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Style the links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            width: 100%;
        }

        /* Add a dark background on topnav links and the dropdown button on hover */
        .topnav a:hover,
        .dropdown:hover .dropbtn {
            background-color: #555;
            color: white;
        }

        /* Add a grey background to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Show the dropdown menu when the user moves the mouse over the dropdown button */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content2 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content2 a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            width: 100%;
        }

        .dropdown-content2 a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown2:hover .dropdown-content2 {
            display: block;
        }

        .dropdown2:hover .dropbtn2 {
            color: #111;
            background: #fff;
            ;
        }

        @media screen and (max-width: 1065px) {
            .dropdown {
                height: 40px;
            }
        }

        @media screen and (max-width: 650px) {
            .dropdown {
                height: 50px;
            }
        }

        .left,
        .right {
            width: 15%;
            padding: 20px;
            /* text-align: left; */
        }


        .middle {
            width: 60%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            /* min-width: 300px; */
        }

        .left {
            margin-left: 5%;
        }

        .right {
            margin-right: 5%;
        }
    </style>

</head>
<!-- for loader add myfunction() for onload on body and ad id=myDiv to class main-content -->


<body>
    <!-- <div id="loader"></div> -->

    <nav>
        <div class="logo"><a href="/"><img src='./images/logo2.png' style="width:200px;height:50px;"></a></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="index.php">CRF Home</a></li>
            <li><a href="https://mis.iitism.ac.in/">MIS(Intra)</a></li>
            <li>
                <div class="dropdown2">
                    <a class="dropbtn2" href="#">More <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content2">
                        <a href="https://people.iitism.ac.in/~faculty/">Faculty</a>
                        <a href="https://ir.iitism.ac.in/">International Relations</a>
                        <a href="https://library.iitism.ac.in/">Library</a>
                    </div>
                </div>
            </li>
            </div>
            </li>
            <li><a href="https://www.iitism.ac.in/iitismnew/">IIT(ISM)</a></li>
        </ul>
    </nav>



    <div class="main-content animate-bottom">
        <div class="row">
            <div class="column left">
            </div>

            <div class="column middle">


            <?php
$is_instrument;
$instrument;
$data; 
if(isset($_GET["instrument"])){
  $is_instrument=true;
$instrument = $_GET["instrument"];
}
else if(isset($_GET["analysis"])){
  $is_instrument = false;
  $instrument = $_GET["analysis"];
}
//echo($instrument);

$sheetid = "1ogXe8mF8fVWTBvVzZx-7J-0IPhSW_1F1W8T3Wsz_I9Q";
$sheetname = "Instruments-Data";
require '../appscript.php';
$api_url = $appscript_url.'sheetid='.$sheetid.'&sheetname='.$sheetname;
//echo($api_url);
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data,true);
$entries = $response_data["data"];
$data ;
foreach($entries as $entry){
  //echo($entry["gsx\$short"]["\$t"]);
  if($entry["short"]===$instrument){
    $data = $entry;
    break;
  }
}

?>



<div class="overall-container"  <?php if(!$is_instrument)echo('style="display: none;"'); ?> >
  <div class="main-content">

      <div class="photo-div" style="padding:20px;">
          
          <img crossorigin="anonymous" src=<?php echo($data["image"])?> width="70%"/>
         

      </div >
      <h2 style="color:#a52a2a;margin:0 5%;"> <?php echo($data["instruments"]) ?>
      </h2>
      <br>
      <div class="content-div">
      <div class="main-details" style="text-align:left;margin:0 10%;line-height:1.4rem;font-size:18px;">
          <ul>
              <li><b>Make:</b> <?php echo($data["make"]) ?></li>
              <li><b>Model:</b> <?php echo($data["model"]) ?></li>
              <li><b>Faculty-in-Charge:</b> <?php echo($data["faculty-in-charge"]) ?></li>
              <li><b>Email:</b> <?php echo($data["email"]) ?></li>
              <li><b>Phone:</b> <?php echo($data["phone"]) ?></li>
          </ul>
      </div>
      <br>

      <div class="details">
          <p style="text-align:justify;margin:0 10%;">
          <?php 
            $text = $data["description"];
            $textlines = explode("\n" , $text);
            foreach($textlines as $line){
              echo("$line <br>");
            }
            ?>
          </p>

      </div>
      
            <br>
      <div  style="text-align:left;margin:0 10%;">

          <h4 style="color:#a52a2a;">The key features of <?php echo($data["short"])?> includes:</h4>
            <br>
            <ul style="line-height:1rem;">
            <?php 
            $text = $data["features"];
            $textlines = explode("\n" , $text);
            foreach($textlines as $line){
                echo("$line<br>");
            }
            ?>
            </ul>
            
      </div>

<br>
<div class="links" style="text-align:left;margin: 0 10%;">
<p>
<b>Instrument Status : </b><?php echo($data["status"]) ?>
</p>
<br>
<p>
<b>Analysis Charge : </b> <a href=<?php echo("./base.php?analysis=".$data["short"])?> > Click Here</a>
</p>

<br>


</div>
</div>

  </div>
</div>
            </div>

            <div class="column right">
            </div>
        </div>
    </div>

    <br>

    <?php include 'footer.php'; ?>
    <script>
        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
            document.getElementById("homepage-footer").style.display = "block";
        }
    </script>
    <script type="text/javascript" src="../js/carousel.js"></script>
</body>

</html>