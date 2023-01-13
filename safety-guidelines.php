<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css-new/index.css" />
  <link rel="stylesheet" type="text/css" href="css-new/grant.css" />

  <title>IIT(ISM) Dhanbad | Research and Development</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      padding: 2px;
      margin: 2px;
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
  </style>

</head>

<body>


  <?php
  require("header.php");
  ?>

  <div class="main-container" style="width:50%;height:400px;">
    <br>
    <h1>Safety Guidelines Documents</h1>
    <br>
    <br>
    <br>
    <ul>
      <li>
        <a href="files/Safety_Manual.pdf">Safety Manual</a>
      </li>
      <li>
      <a href="files/Environmental Engineering Lab.pdf">Environmnet Engineering Lab</a>
      </li>
      <li>
      <a href="files/Rock Excavation Laboratory.pdf">Rock Excavation Laboratory</a>
      </li>
      <li>
      <a href="files/Longwall Training Gallery.pdf">Longwall Training Gallery</a>
      </li>
      <li>
      <a href="files/Rock Mechanics Lab.pdf">Rock Mechanics Lab</a>
      </li>
    </ul>
    <br>
    <br>

  </div>



  <?php
  require("footer.php");
  ?>

</body>

</html>