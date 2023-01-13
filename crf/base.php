<?php

header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header("Access-Control-Allow-Origin: *");

?>
<!DOCTYPE html>

<!--  __________  __________  __________    __________   ________  ___      ___
     |___    ___||___    ___||___    ___|  |___    ___| /  ______||   \    /   |
         |  |        |  |        |  |          |  |    |  (_____  | |\ \  / /| |
         |  |        |  |        |  |          |  |     \_____  \ | | \ \/ / | |
      ___|  |___  ___|  |___     |  |       ___|  |___  ______)  || |  \__/  | |
     |__________||__________|    |__|      |__________||________/ |_|        |_|
-->
<html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../css/each-laboratory1.css"/>
        <link rel="stylesheet" type="text/css" href="../css-new/index.css"/>
       
        <title>Research and Development | IIT(ISM) Dhanbad</title>
        <link rel="icon" type="image/png" href="../images/logo.png">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
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
          </style>

    </head>
    <body>
      


<!----------------------------------------Main Content------------------------------->
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

<nav>
        <div class="logo"><a href="/"><img src='./images/logo2.png' style="width:200px;height:50px;"></a></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="/">R&D Home</a></li>
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






<br>
<div class="analysis-charges" style="text-align: center;<?php if($is_instrument)echo('display: none;');?>"  >
    <h2 style="color:#a52a2a;">Analysis Charges - <?php echo($data["short"])?></h2>
<br>
<?php 
$analysisUrl = "https://docs.google.com/spreadsheets/d/1ogXe8mF8fVWTBvVzZx-7J-0IPhSW_1F1W8T3Wsz_I9Q/gviz/tq?tqx=out:html&tq&gid=".$data["analysisgid"];
?>
<iframe style="min-height: 300px;" src=<?php echo($analysisUrl)?>></iframe>  

<div class="back-button" style= "margin: 3em;">
    <a href="./index.php">Back To CRF Home</a>
  </div>


</div>






<?php
require('../footer.php');
?>

        
          <script src="../js/crf.js"></script>
</body>
</html>
