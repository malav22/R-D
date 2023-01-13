<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/navbar1 (2).css" />
    <link rel="stylesheet" type="text/css" href="../css/navbar2 (1).css" />
    <link rel="stylesheet" type="text/css" href="../css-new/crfHome1.css" />
    <!-- <link rel="stylesheet" type="text/css" href="../css/internal-navbar.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css-new/index.css" />
    <link rel="stylesheet" type="text/css" href="../css-new/carousel.css" />

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
    <nav>
        <div class="logo"><img src='../images/logo2.png' style="width:200px;height:50px;"></div>
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

    <div class="navbar2">
        <div class="dropdown" style="width: 16.5%;">
            <button class="dropbtn" onclick="location.href='./index.php'">CRF Home</button></a>
        </div>
        <div class="dropdown" style="width: 16.5%;">
            <button class="dropbtn" onclick="location.href='./people.php'">People</button></a>
        </div>
        <div class="dropdown" style="width: 17%;">
            <button class="dropbtn" onclick="location.href='./laboratoriesHome.php'">Instruments</button></a>
        </div>
        <div class="dropdown" style="width: 17%;">
            <button class="dropbtn" onclick="location.href='./booking.php'">Booking</button></a>
        </div>
        <div class="dropdown" style="width: 16.5%;">
            <button class="dropbtn" onclick="location.href='./forms.php'">Forms</button></a>
        </div>
        <div class="dropdown" style="width: 16.5%;">
            <button class="dropbtn" onclick="location.href='./contactus.php'">Contact Us</button></a>
        </div>
    </div>

    <main class="main-div">
    </main>


    <div class="row-res">
        <div class="column-res" style="text-align: center;width:30%">
            <img src="../images/logo.png" class="image-res">
        </div>
        <div class="column-res container-ver" style="width:70%;">
            <div class="vertical-center">
                <h2>केंद्रीय अनुसंधान सुविधा, भारतीय प्रौद्योगिकी संसथान (भारतीय&nbsp;खनि&nbsp;विद्यापीठ)&nbsp;, धनबाद</h2>
                <p>Central&nbsp;Research Facility</p>
                <h2>Indian&nbsp;Institute&nbsp;of&nbsp;Technology (Indian&nbsp;School&nbsp;Of&nbsp;Mines) Dhanbad</h2>
            </div>
        </div>
    </div>
    <div class="row-res" style="width:100%;">
        <div class="list-res">
            <p style="text-align:justify;">
                Central Research Facility of IIT(ISM), Dhanbad has been established as a Centre of National Importance for Research and Creation. The constellation of high-quality equipment enabled with cutting edge technologies at a single location provides a scientific arena for the researchers. Sophisticated analytical instruments are vital for pursuing high-end research in areas of modern science and technology. Various advanced analytical instruments of CRF are operated and maintained by a dedicated and qualified group of Faculty members, Technical Officers and Skilled Operators. It is an integral part of IIT(ISM), Dhanbad.</p>
            </p>
        </div>
    </div>
    <div class="row-res" style="width:100%;text-align:center;">
        <h1 style="color: #b23231;margin:2px;">Central Research Facility</h1>
        <div id="slidy-container" style="width:50%;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
            <figure id="slidy">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling.JPG" alt="0" data-caption="CRF Lab Image - 1">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling_1.JPG" alt="1" data-caption="CRF Lab Image - 2">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling_2.JPG" alt="2" data-caption="CRF Lab Image - 3">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling_3.JPG" alt="3" data-caption="CRF Lab Image - 4">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling_4.JPG" alt="4" data-caption="CRF Lab Image - 5">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling_5.JPG" alt="5" data-caption="CRF Lab Image - 6">
                <img style="padding:20px;" src="../images/scrolling/For_Scrolling_6.JPG" alt="6" data-caption="CRF Lab Image - 7">

            </figure>
        </div>
        <h4>Laboratory Images</h4>
    </div>

    <div class="row-res" style="width:100%;">
        <div class="list-res">
            <h2>The primary objectives of the Central Research Facility of IIT(ISM), Dhanbad are:</h2>
            <ul>
                <li>
                    <p>
                        To establish state-of-the-art research facilities and instruments to support advanced research under one umbrella. </p>
                </li>
                <li>
                    <p>
                        To support and promote inter- and multidisciplinary research in contemporary and frontier areas. </p>
                </li>
                <li>
                    <p>
                        To enable Faculty members and research scholars of IIT(ISM), Dhanbad to access facilities of the most advanced class of instruments with minimum expenses.
                    </p>
                </li>
                <li>
                    <p>
                        To provide high-end analytical instrumental facilities to researchers, scientists and other users from academic institutes/R&D laboratories and industries to empower them to carry out different analyses for R&D work.
                    </p>
                </li>
            </ul>
            
        </div>
    </div>



    <!-- <div class="main-slide-container">

            <div class="slide-container" onmouseover="toggleHovering()" onmouseout="toggleHovering()">
              <img src="../images/scrolling/For_Scrolling.JPG" alt="" class="lab-imgs" />
              <img src="../images/scrolling/For_Scrolling_1.JPG" alt="" class="lab-imgs" />
              <img src="../images/scrolling/For_Scrolling_2.JPG" alt="" class="lab-imgs" />
              <img src="../images/scrolling/For_Scrolling_3.JPG" alt="" class="lab-imgs" />
              <img src="../images/scrolling/For_Scrolling_4.JPG" alt="" class="lab-imgs" />
              <img src="../images/scrolling/For_Scrolling_5.JPG" alt="" class="lab-imgs" />
              <img src="../images/scrolling/For_Scrolling_6.JPG" alt="" class="lab-imgs" />


            </div>
          </div> -->



    </div>

    <footer>
        <div class="footer-content">
            <p>Contact Us</p>
            <p>Central Research Facility, IIT(ISM) Dhanbad</p>
            <p>Email : crf@iitism.ac.in</p>
            <p>Phone : +91-326-2235401</p>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; IIT(ISM) Dhanbad</p>
            <p>Best Viewed in 1024X768 or above Resolution</p>
        </div>

    </footer>
    <!-------------------------------------script----------------------------------------------------------------->
    <script type="text/javascript" src="../js/carousel.js"></script>


</body>

</html>