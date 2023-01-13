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

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #A52A2A;
      color: white;
    }
  </style>

</head>

<body>


  <?php
  require("header.php");
  ?>

  <div class="main-container">
    <h1>Project Information</h1>
    <a href="project_archives.php">View Project Archives</a>
    <h3>Important Links</h3>
    <table id="customers" style="width: 70%;margin:20px 15%;">
      <tr>
        <th>ID</th>
        <th>Department</th>
        <th>Post</th>
        <th>For Detail</th>
        <th>PI(Contact Person)</th>
        <th>Last Date</th>
      </tr>
      <tr>
        <td>
        12
        </td>
        <td>
        Physics
        </td>
        <td>
        Project JRF
        </td>
        <td>
          <a href="https://www.iitism.ac.in/assets//uploads/pdfprj/1045/Advertisement_for_Project_Fellow_MRSINGH_APPLIED_PHYSICS_pdf.pdf">Click</a>
        </td>
        <td>
        Dr Rakesh Singh Moirangthem
        </td>
        <td>
        19-Mar-2021
        </td>
      </tr>
      <tr>
        <td>
        16
        </td>
        <td>
        Applied Geophysics
        </td>
        <td>
        Research Associates
        </td>
        <td>
          <a href="https://www.iitism.ac.in/assets//uploads/pdfprj/504/Project_Advt__Rima_pdf.pdf">Click</a>
        </td>
        <td>
        Prof Rima Chatterjee
        </td>
        <td>
        07-Mar-2022
        </td>
      </tr>
      <tr>
        <td>
        50
        </td>
        <td>
        Electrical Engineering
        </td>
        <td>
        Project JRF
        </td>
        <td>
          <a href="https://www.iitism.ac.in/assets//uploads/pdfprj/869/Project%20JRF_20-06-2019-12:06:43.pdf">Click</a>
        </td>
        <td>
        Sanjoy Mandal
        </td>
        <td>
        05-Jun-2022
        </td>
      </tr>
      <tr>
        <td>
        51
        </td>
        <td>
        Mining Engineering
        </td>
        <td>
        Project JRF
        </td>
        <td>
          <a href="https://www.iitism.ac.in/assets//uploads/pdfprj/868/Project%20JRF_25-06-2019-09:06:30.pdf">Click</a>
        </td>
        <td>
        Dr. D. P. Mishra
        </td>
        <td>
        17-Mar-2021
        </td>
      </tr>
      <tr>
        <td>
        129
        </td>
        <td>
        Chemistry
        </td>
        <td>
        Research Associate
        </td>
        <td>
          <a href="https://www.iitism.ac.in/assets//uploads/pdfprj/904/Research%20Associate_04-06-2020-11:06:32.pdf">Click</a>
        </td>
        <td>
        Dr. Somnath Yadav
        </td>
        <td>
        20-May-2021
        </td>
      </tr>
      <tr>
        <td>
        136
        </td>
        <td>
        Applied Geology
        </td>
        <td>
        Project JRF
        </td>
        <td>
          <a href="https://www.iitism.ac.in/assets//uploads/pdfprj/848/Project%20JRF_10-08-2020-02:08:07.pdf">Click</a>
        </td>
        <td>
        Prof. Mrinal Kanti Mukherjee
        </td>
        <td>
        01-Sep-2020
        </td>
      </tr>
    </table>
        <br>
  </div>



  <?php
  require("footer.php");
  ?>

</body>

</html>