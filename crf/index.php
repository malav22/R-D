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
            width: 20%;
            padding: 20px;
            /* text-align: left; */
        }


        .middle {
            width: 50%;
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



    <div class="main-content animate-bottom">
        <div class="row">
            <div class="column left">
                <h4>Instruments</h4>
                <ul class="a">
                    
                    <?php 
            $sheetid = "1ogXe8mF8fVWTBvVzZx-7J-0IPhSW_1F1W8T3Wsz_I9Q";
            $sheetname = "Instruments-List";
            require '../appscript.php';
            $api_url = $appscript_url.'sheetid='.$sheetid.'&sheetname='.$sheetname;
            //echo($api_url);
            $json_data = file_get_contents($api_url);
            $response_data = json_decode($json_data,true);
            $data = $response_data["data"];

              foreach($data as $entry){
                echo(
                  '<li><a href="./base2.php?instrument='.$entry["short"].'" class="titles">'.$entry["instrument"].'</a></li>'
                );
              }
              
            ?>
                </ul>

            </div>
            <div class="column middle">


                <div class="middle-box3" style="text-align:center;">
                    <h1 style="margin-bottom:10px;color:#a52a2a;">Central Research Facility</h1>
                    <br>
                    <p style="text-align:justify;padding:5px;">
                        Central Research Facility of IIT(ISM), Dhanbad has been established as a Centre of National Importance for Research and Creation. The constellation of high-quality equipment enabled with cutting edge technologies at a single location provides a scientific arena for the researchers. Sophisticated analytical instruments are vital for pursuing high-end research in areas of modern science and technology. Various advanced analytical instruments of CRF are operated and maintained by a dedicated and qualified group of Faculty members, Technical Officers and Skilled Operators. It is an integral part of IIT(ISM), Dhanbad.
                    </p>
                    <br>
                    <div id="slidy-container">
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
                    <br>
                    <br>
                    <b>
                    <p style="text-align:left;color:#a52a2a;font-size:20px;">The primary objectives of the Central Research Facility of IIT(ISM), Dhanbad are:</p>
                    </b>
                    <br>
                    <ul style="text-align:left;line-height: 1.3rem;">
                        <li>
                        To establish state-of-the-art research facilities and instruments to support advanced research under one umbrella.
                        </li>
                        <li>
                        To support and promote inter- and multidisciplinary research in contemporary and frontier areas.


                        </li>
                        <li>
                        To enable Faculty members and research scholars of IIT(ISM), Dhanbad to access facilities of the most advanced class of instruments with minimum expenses.
                        </li>
                        <li>
                        To provide high-end analytical instrumental facilities to researchers, scientists and other users from academic institutes/R&D laboratories and industries to empower them to carry out different analyses for R&D work.
                        </li>
                    </ul>
                    <br>
                    <br>
                    <b>
                    <p style="text-align:left;color:#a52a2a;font-size:20px;">Booking</p>
                    </b>
                    <br>
                    <ul style="text-align:left;line-height: 1.3rem;">
                        <li>
                        <b>Internal Users</b> need to book their slot through Intranet (MIS).                        </li>
                        <li>
                        <b>External Users</b> will have to send a request to the concerned Faculty-in-Charge (FIC) through e-mail. The concerned FICs will intimate the external user about the status of their booking.
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="column right">
            <h4>People</h4>
                <ul class="a">
                    <li><a href="people.php">Administration</a></li>
                </ul>
                <br>
                <br>

                <h4>Instrument Requisition Forms</h4>
                <ul class="a">
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requistion_Form_HRTEM.pdf">Requisition Form HRTEM</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_EPMA.pdf">Requisition Form EPMA</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_FESEM.pdf">Requisition Form FESEM</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_MALS.pdf">Requisition Form MALS</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_Rheometer.pdf">Requisition Form AR</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_SC-XRD.pdf">Requisition Form SC-XRD</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_SPM.pdf">Requisition Form SPM</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_Gas%20Sorption%20Analyser.pdf">Requisition Form GSA</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_UV-VIS-NIR.pdf">Requisition Form UVVISNIR</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_HRMS.pdf">Requisition Form HRMS</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_HRXRD.pdf">Requisition Form HRXRD</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_XRF.pdf">Requisition Form WDXRF</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_XPS.pdf">Requisition Form XPS</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_APC.pdf">Requisition Form APC</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_Raman%20Spectrometer.pdf">Requisition Form MRS</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_ICP-OES.pdf">Requisition Form ICP-OES</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_Micro%20Hardness.pdf">Requisition Form DMVHTM</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_Tribometer.pdf">Requisition Form UT</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_CHNS.pdf">Requisition Form CHNSO</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_UTM.pdf">Requisition Form UTM</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_DSC.pdf">Requisition Form DSC</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_TYPHOON.pdf">Requisition Form TYPHOON</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_ZETAMETER.pdf">Requisition Form ZETAMETER</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_CELLCULTURE.pdf">Requisition Form CELLCULTURE</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_GDSTAS.pdf">Requisition Form GDSTAS</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_PSA.pdf">Requisition Form PSA</a></li>
                    <li><a href="https://www.iitism.ac.in/deans/research/files/forms/Requisition_Form_EBL.pdf">Requisition Form EBL</a></li>

                </ul>
                <br>
                <br>

            </div>
        </div>
    </div>

    <br>
    <?php include 'footer.php';?>

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