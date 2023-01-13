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

  <div class="main-container" style="width:70%;line-height:1.5rem;">
    <br>
    <h1>List of MoUs/Agreements</h1>
    <br>
    <br>
    <br>
    <ul>
      <li><a href="files/MoUs/Agreement_ L&T.pdf">Agreement with L&T</a></li>
      <li><a href="files/MoUs/MOA_DBT.pdf">MoA with Department of Biotechnology(GoI)</a></li>
      <li><a href="files/MoUs/MoA_Frontier GeoServices (FGS).pdf">MoA with Frontier GeoServices</a></li>
      <li><a href="files/MoUs/MOA_IIT Kanpur.pdf">MoA with IIT Kanpur</a></li>
      <li><a href="files/MoUs/MoA_NHPC Limited.pdf">MoA with NHPC Limited</a></li>

      <li><a href="files/MoUs/MOA_OXIVE LLP.pdf">MoA with OXIVE LLP</a></li>
      <li><a href="files/MoUs/MOA_SAIL Ranchi.pdf">MoA with SAIL Ranchi</a></li>
      <li><a href="files/MoUs/MoA_SJVN.pdf">MoA with SJVN</a></li>
      <li><a href="files/MoUs/MoO_ENHEROES Group.pdf">MoU with ENHEROES Group</a></li>
      <li><a href="files/MoUs/MOU-AIIMS DEOGHAR.pdf">MoU with AIIMS Deoghar</a></li>

      <li><a href="files/MoUs/MOU-CAPGEMINI Technology services.pdf">MoU with Capgemini Technology Services</a></li>
      <li><a href="files/MoUs/MoU-RZ Urban Enviro partners .pdf">MoU with RZ Urban Enviro Partners</a></li>
      <li><a href="files/MoUs/MoU-SAIL Bokaro.pdf">MoU with SAIL Bokaro</a></li>
      <li><a href="files/MoUs/MoU_ Telesto Energy Pvt Ltd Singapore.pdf">MoU with Telesto Energy Pvt Ltd Singapore</a></li>
      <li><a href="files/MoUs/MoU_ VV Giri National Labour Institute Noida.pdf">MoU with VV Giri National Labour Institute Noida</a></li>

      <li><a href="files/MoUs/MoU_AAROGYA AI.pdf">MoU with Aarogya AI</a></li>
      <li><a href="files/MoUs/MOU_ANP GeoEnergy Pvt Ltd.pdf">MoU with ANP GeoEnergy Pvt. Ltd.</a></li>
      <li><a href="files/MoUs/MoU_Atomic Minerals Directorate AMD.pdf">MoU with Atomic Minerals Directorate AMD</a></li>
      <li><a href="files/MoUs/MOU_CAPGEMINI Sikha Singh.pdf">MoU with Capgemini Technology Services</a></li>
      <li><a href="files/MoUs/MoU_Cenral university Jharkhand.pdf">MoU with Central University of Jharkhand</a></li>

      <li><a href="files/MoUs/MoU_Coal India Limited.pdf">MoU with Coal India Limited</a></li>
      <li><a href="files/MoUs/MoU_CSIR Jamsedpur.pdf">MoU with CSIR Jamshedpur</a></li>
      <li><a href="files/MoUs/MOU_CSIR-CEERI.pdf">MoU with CSIR-CEERI</a></li>
      <li><a href="files/MoUs/MoU_CSIR_NIO GOA.pdf">MoU with CSIR NIO Goa</a></li>
      <li><a href="files/MoUs/MOU_EOGEPL.pdf">MoU with MOU_EOGEPL</a></li>
      
      <li><a href="files/MoUs/MoU_Geological Survey of India Training Institute Hyderabad.pdf">MoU with Geological Survey of India Training Institute Hyderabad</a></li>
      <li><a href="files/MoUs/MoU_GERMI Gujrat.pdf">MoU with GERMI Gujarat</a></li>
      <li><a href="files/MoUs/MOU_Hindustan Copper Limited.pdf">MoU with Hindustan Copper Limited</a></li>
      <li><a href="files/MoUs/MoU_IBM.pdf">MoU with IBM</a></li>
      <li><a href="files/MoUs/MoU_ICAR-INDIAN INSTITUTE OF NATURAL RESINS  & GUMS.pdf">MoU with ICAR-Indian Institute of Natural Resins & Gums</a></li>

      <li><a href="files/MoUs/MOU_ICFRE DEHRADUN.pdf">MoU with ICFRE Dehradun</a></li>
      <li><a href="files/MoUs/MoU_IIEST Shibpur.pdf">MoU with IIEST Shibpur</a></li>
      <li><a href="files/MoUs/MoU_IIITDM Kurnool.pdf">MoU with IIITDM Kurnool</a></li>
      <li><a href="files/MoUs/MoU_Jindal Stainless Limited Odisha.pdf">MoU with Jindal Stainless Limited Odisha</a></li>
      <li><a href="files/MoUs/MoU_Karam Chand thapar Coal Sales Ltd.pdf">MoU with Karam Chand Thapar Coal Sales Ltd.</a></li>

      <li><a href="files/MoUs/MoU_Larsen & Toubro LTD.pdf">MoU with Larsen & Toubro Ltd.</a></li>
      <li><a href="files/MoUs/MoU_MCL.pdf">MoU with MCL</a></li>
      <li><a href="files/MoUs/MoU_MPL.pdf">MoU with MPL</a></li>
      <li><a href="files/MoUs/MoU_MSME Jamshedpur.pdf">MoU with MSME Jamshedpur</a></li>
      <li><a href="files/MoUs/MoU_NCPOR Goa.pdf">MoU with NCPOR Goa</a></li>

      <li><a href="files/MoUs/MoU_NHAI_rotated.pdf">MoU with NHAI</a></li>
      <li><a href="files/MoUs/MOU_NSE ACADEMY.pdf">MoU with NSE Academy</a></li>
      <li><a href="files/MoUs/MOU_NTPC limited.pdf">MoU with NTPC Limited</a></li>
      <li><a href="files/MoUs/MOU_OGES Solution Pvt. Ltd.pdf">MoU with OGES Solution</a></li>
      <li><a href="files/MoUs/MoU_OILPLUS DMCC.pdf">MoU with OILPLUS DMCC</a></li>

      <li><a href="files/MoUs/MOU_PMT Infrascience Pvt. Ltd.pdf">MoU with PMT Infrascience Pvt. Ltd.</a></li>
      <li><a href="files/MoUs/MOU_R R ANIMAL HEALTH CARE LIMITED.pdf">MoU with R R Animal Health Care Limited</a></li>
      <li><a href="files/MoUs/MoU_Reverie Language technologies Limited.pdf">MoU with Reverie Language Technologies Limited</a></li>
      <li><a href="files/MoUs/MOU_SCHLUMBERGER SOLUTION PV LTD.pdf">MoU with Schlumberger Solution Pvt. Ltd.</a></li>
      <li><a href="files/MoUs/MoU_SOMIKA group.pdf">MoU with NHPC SOMIKA Group</a></li>

      <li><a href="files/MoUs/MOU_TATA STEEL.pdf">MoU with NHPC TATA Steel</a></li>
      <li><a href="files/MoUs/MoU_Tokyo chemical industry.pdf">MoU with Tokyo Chemical Industry</a></li>
      <li><a href="files/MoUs/MoU_TWINSSET PVT LTD.pdf">MoU with Twinsset Pvt. Ltd.</a></li>
      <li><a href="files/MoUs/MoU_vedanta Limited.pdf">MoU with Vedanta Limited</a></li>
      <li><a href="files/MoUs/MOU_Volvo CE India.pdf">MoU with Volvo CE India</a></li>

      <li><a href="files/MoUs/MuO_Andritz Hydro Pvt Ltd.pdf">MoU with Andritz Hydro Pvt. Ltd.</a></li>
      <li><a href="files/MoUs/NDA_BEML limited Banagalore.pdf">MoU with BEML Limited Bangalore</a></li>



      
    </ul>
    <br>
    <br>

  </div>



  <?php
  require("footer.php");
  ?>

</body>

</html>