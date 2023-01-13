<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css-new/index.css" />
    <link rel="stylesheet" type="text/css" href="./css-new/carousel.css" />
    <link rel="stylesheet" type="text/css" href="./css-new/dean_office.css" />


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
    <nav>
        <div class="logo"><img src='images/logo2.png' style="width:200px;height:50px;"></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="/">Home</a></li>
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
            <button class="dropbtn" onclick="location.href='dean_office.php'">Dean R&D</button></a>
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

            </div>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn" onclick="location.href='crf/index.php'">Central Research Facility</button>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn">Research Infrastructure
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="crf/index.php">CRF(Central Research Facility)</a>
                <a href="#">Fabrication and 3D-Printing Facility</a>
                <a href="#">(HPC) High Perfomance Computing Facility</a>
                <a href="#">Seismological Observatory</a>
            </div>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn">Innovation Infrastructure
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="https://people.iitism.ac.in/~acic/">ACIC IIT(ISM) Foundation (Atal Community Innovation Centre)</a>
                <a href="files/NVCTI_Brochure.pdf">NVCTI(Naresh Vashisht Centre for Tinkering and Innovation)</a>
                <a href="https://texmin.in/">TEXMiN(Technology Innovation Hub)</a>
                <a href="files/CIL_Brochure.pdf">CIL Innovation and Incubation Centre</a>
            </div>
        </div>
        <div class="dropdown" style="width:10%">
            <button class="dropbtn">Centres
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="files/CHCCUST Centre.pdf">Centre for Hydrogen and CCUS Technology</a>
                <a href="files/CWRM centre.pdf">Centre for Water Resource Management</a>
                <a href="files/CERE.pdf">Centre of Excellence in Renewable Energy</a>
                <a href="files/CEEER Centre.pdf">Centre for Earth, Energy and Environmental Research</a>
                <a href="files/ENVIS Centre.pdf">Environmental Information System(ENVIS) Centre</a>
                <a href="files/Seabed Mining.pdf">Centre for Seabed Mining</a>
            </div>
        </div>
        <div class="dropdown" style="width: 15%;">
            <button class="dropbtn" style="font-size:10px;">Departmental Research Facility
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="departments/template.php?Dept=AGL">Applied Geology</a>
                <a href="departments/template.php?Dept=AGP">Applied Geophysics</a>
                <a href="departments/template.php?Dept=CHEM_ENG">Chemical Engineering</a>
                <a href="departments/template.php?Dept=CHEM">Chemistry and Chemical Biology</a>
                <a href="departments/template.php?Dept=CIVIL">Civil Engineering</a>
                <!-- <a href="departments/template.php?Dept=">Computer Science and Engineering</a> -->
                <a href="departments/template.php?Dept=ELECTRICAL">Electrical Engineering</a>
                <a href="departments/template.php?Dept=ELECTRONICS">Electronics Engineering</a>
                <a href="departments/template.php?Dept=ENV_SC">Environmental Science and Engineering</a>
                <a href="departments/template.php?Dept=FMME">Fuels, Minerals and Metallurgical Engineering</a>
                <a href="departments/template.php?Dept=HSS">Humanities and Social Sciences</a>
                <!-- <a href="departments/template.php?Dept=">Management Studies and Industrial Engineering</a> -->
                <!-- <a href="departments/template.php?Dept=">Mathematics and Computing</a> -->
                <a href="departments/template.php?Dept=MECH">Mechanical Engineering</a>
                <a href="departments/template.php?Dept=MINING">Mining Engineering</a>
                <a href="departments/template.php?Dept=PETROLEUM">Petroleum Engineering</a>
                <a href="departments/template.php?Dept=PHY">Physics</a>
            </div>
        </div>


    </div>


    <div class="row-res">
        <div class="column-res" style="text-align: center;">
            <img src="images/chart.png" class="image-res">
        </div>
        <div class="column-res container-ver">
            <div class="vertical-center">
                <h2>Office of Dean (Research and Development)</h2>
                <p style="text-align: justify;">The Office of the Dean (Research and Development) drives Strategic planning and provide guidance
                across academic and research programs, fostering new and interdisciplinary research initiatives
                and collaborations. Represents institute for external R&D funding agencies.
                </p>
            </div>
        </div>
    </div>
    <div class="row-res" style="width:100%;">
    <div class="list-res">
                <h2>Our major role is to:</h2>
                <ul>
                    <li><p>
                    Interlink Research and Industries with government policies such as: Make in India, Clean India, Aatma Nirbhar Bharat, Smart City initiatives and so on.
                    </p></li>
                    <li><p>
                    Real time progress monitoring of Sponsored Projects & consultancies.
                    </p></li>
                    <li><p>
                    Establishment of Industry Sponsored CoEs.
                    </p></li>
                    <li><p>
                    Development of State-of-the-Art Research Infrastructure.
                    </p></li>
                    <li><p>
                    Develop key research areas to establish the R&D strategy.
                    </p></li>
                    <li><p>
                    Build strong Industry connections to establish Industry-Academia collaborations.
                    </p></li>
                </ul>
                <p>
                </p>
            </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>Contact Us</p>
            <p>Office of Dean ( Research & Development )</p>
            <p>Email : drnd@iitism.ac.in</p>
            <p>Phone : 0326-2235203 / 2235217 / 2235253</p>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; IIT(ISM) Dhanbad</p>
            <p>Conceptualized by Prof. Sagar Pal, Prof. Ravi Kumar Gangwar, and Prof. Ejaz Ahmad. Designed and Developed by <a target="_blank" style="text-decoration:none;color:#df534c;" href="https://www.linkedin.com/in/malav-thakkar-011517200/">Malav Thakkar</a></p>
        </div>

    </footer>
</body>

</html>