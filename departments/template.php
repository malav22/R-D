<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css-new/index.css" />
  <link rel="stylesheet" type="text/css" href="../css-new/grant.css" />


  <title>IIT(ISM) Dhanbad | Research and Development</title>
  <link rel="icon" type="image/x-icon" href="../images/logo.png">
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


<nav>
        <div class="logo"><a href="/"><img src='../images/logo2.png' style="width:200px;height:50px;"></a></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="/">Home</a></li>
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

    <div class="navbar2">
    <div class="dropdown" style="width: 10%;">
            <button class="dropbtn" onclick="location.href='../dean_office.php'">Dean R&D</button></a>
        </div>
        <div class="dropdown" style="width: 10%;">
            <button class="dropbtn">Departments
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_apgeo">Applied Geology</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_agp">Applied Geophysics</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_chem">Chemical Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_apchm">Chemistry and Chemical Biology</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_civ">Civil Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_cse">Computer Science and Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_ee">Electrical Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_ece">Electronics Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_ese">Environmental Science and Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_fme">Fuels, Minerals and Metallurgical Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_hss">Humanities and Social Sciences</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_ms">Management Studies and Industrial Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_apmat">Mathematics and Computing</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_mech">Mechanical Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_mining">Mining Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_pe">Petroleum Engineering</a>
                <a href="https://www.iitism.ac.in/index.php/Departments/dept_physics">Physics</a>
            </div>
        </div>
        <div class="dropdown" style="width: 10%;">
            <button class="dropbtn">Faculty Profile
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://www.iitism.ac.in/iitismnew/current_faculty">Regular Faculty</a>
                <a href="https://people.iitism.ac.in/~faculty/index.php/Pages/emeritus_fac">Emeritus Faculty</a>
                <a href="https://people.iitism.ac.in/~faculty/index.php/Pages/visiting_fac">Visiting Faculty</a>
                <a href="https://people.iitism.ac.in/~faculty/index.php/Pages/adjunct_fac">Adjunct Faculty</a>
                <a href="https://people.iitism.ac.in/~faculty/index.php/Pages/chairprofessor">Chair Professor</a>
                <a href="./files/faculty_expertise.pdf">Faculty Expertise</a>


            </div>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn" onclick="location.href='../crf/index.php'">Central Research Facility</button>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn">Research Infrastructure
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../crf/index.php">CRF(Central Research Facility)</a>
                <a href="../files/Fabrication_Brochure.pdf">Fabrication and 3D-Printing Facility</a>
                <a href="../files/HPC_Brochure.pdf">(HPC) High Perfomance Computing Facility</a>
                <a href="../files/Seismological_Obs.pdf">Seismological Observatory</a>
            </div>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn">Innovation Infrastructure
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="https://people.iitism.ac.in/~acic/">ACIC IIT(ISM) Foundation (Atal Community Innovation Centre)</a>
                <a href="../files/NVCTI_Brochure.pdf">NVCTI(Naresh Vashisht Centre for Tinkering and Innovation)</a>
                <a href="https://texmin.in/">TEXMiN(Technology Innovation Hub)</a>
                <a href="../files/CIL_Brochure.pdf">CIL Innovation and Incubation Centre</a>
            </div>
        </div>
        <div class="dropdown" style="width:10%">
            <button class="dropbtn">Centres
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Centre for Hydrogen and CCUS Technology</a>
                <a href="#">Centre for Water Resource Management</a>
                <a href="#">Centre of Excellence in Renewable Energy</a>
                <a href="#">Centre for Earth, Energy and Environmental Research</a>
                <a href="#">Environmental Information System(ENVIS) Centre</a>
                <a href="#">Centre for Seabed Mining</a>
            </div>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn" style="font-size:10px;">Departmental Research Facility
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="template.php?Dept=AGL">Applied Geology</a>
                <a href="template.php?Dept=AGP">Applied Geophysics</a>
                <a href="template.php?Dept=CHEM_ENG">Chemical Engineering</a>
                <a href="template.php?Dept=CHEM">Chemistry and Chemical Biology</a>
                <a href="template.php?Dept=CIVIL">Civil Engineering</a>
                <!-- <a href="departments/template.php?Dept=">Computer Science and Engineering</a> -->
                <a href="template.php?Dept=ELECTRICAL">Electrical Engineering</a>
                <a href="template.php?Dept=ELECTRONICS">Electronics Engineering</a>
                <a href="template.php?Dept=ENV_SC">Environmental Science and Engineering</a>
                <a href="template.php?Dept=FMME">Fuels, Minerals and Metallurgical Engineering</a>
                <a href="template.php?Dept=HSS">Humanities and Social Sciences</a>
                <!-- <a href="departments/template.php?Dept=">Management Studies and Industrial Engineering</a> -->
                <!-- <a href="departments/template.php?Dept=">Mathematics and Computing</a> -->
                <a href="template.php?Dept=MECH">Mechanical Engineering</a>
                <a href="template.php?Dept=MINING">Mining Engineering</a>
                <a href="template.php?Dept=PETROLEUM">Petroleum Engineering</a>
                <a href="template.php?Dept=PHY">Physics</a>
            </div>
        </div>
        

    </div>

  <div class="main-container">
    <h1>Departmental Achivements</h1>
    <br>
    <h3>Details of Experimental/Research Facilities at the Institute</h3>
    <?php

if(isset($_GET["Dept"])){

$dept = $_GET["Dept"];

$urlDept = "./". $dept . ".php" ;

require_once($urlDept);

}



?>
  </div>



  <?php
  require("../footer.php");
  ?>

</body>

</html>