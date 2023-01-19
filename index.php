<!DOCTYPE html>
<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" type="text/css" href="./css-new/index.css" />
    <link rel="stylesheet" type="text/css" href="./css-new/carousel.css" />

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
            padding: 0 5px;
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
    </style>

</head>
<!-- for loader add myfunction() for onload on body and ad id=myDiv to class main-content -->

<body>
    <!-- <div id="loader"></div> -->

    <?php
    require("header.php");
    ?>

    <div class="main-content animate-bottom">
        <div class="row">
            <div class="column left">
                <h4>General Information</h4>
                <ul class="a">
                    <li><a href="./files/R&D_Brochure.pdf">R&D Brochure</a></li>
                    <li><a href="sponsored-projects.php">Sponsored R&D Projects</a></li>
                    <li><a href="consultancy.php">Consultancy / EDP / Testing</a></li>
                    <li><a href="files/International Projects.pdf">International Projects</a></li>
                    <li><a href="files/International Mobility.pdf">International Mobility</a></li>
                    <li><a href="files/Major Technologies Developed.pdf">Major Technologies and Products Developed</a></li>
                    <li><a href="files/Patent_Details_2018_onwards.pdf">Patents</a></li>

                </ul>
                <br>
                <br>
                <h4>Project Guidelines</h4>
                <ul class="a">
                    <li><a href="/project-guideline.php#pg1">Introduction</a></li>
                    <li><a href="/project-guideline.php#pg2">Applying for a Project</a></li>
                    <li><a href="/project-guideline.php#pg3">Getting Project Number</a></li>
                    <li><a href="/project-guideline.php#pg4">Mandate Forms</a></li>
                    <li><a href="/project-guideline.php#pg5">PFMS Certificate</a></li>
                    <li><a href="/project-guideline.php#pg6">GST/TAN/PAN</a></li>
                    <li><a href="/project-guideline.php#pg7">Unique ID No.</a></li>
                    <li><a href="/project-guideline.php#pg8">Tax Invoice</a></li>
                    <li><a href="/project-guideline.php#pg9">Tax Exemption</a></li>
                    <li><a href="/project-guideline.php#pg10">Payments</a></li>
                    <li><a href="/project-guideline.php#pg11">Recruitment in Projects</a></li>
                    <!-- <li><a href="/project-guideline.php#pg12">Facilities to Project Employees</a></li> -->
                    <li><a href="/project-guideline.php#pg13">Travel for Project Work</a></li>
                    <li><a href="/project-guideline.php#pg14">Analysis/Testing</a></li>
                    <li><a href="/project-guideline.php#pg15">Request for SE/UC</a></li>
                    <li><a href="/project-guideline.php#pg16">Purchase Manual</a></li>
                    <li><a href="/project-guideline.php#pg17">Advance for carrying out Project</a></li>
                    <li><a href="/project-guideline.php#pg18">PDF Guidelines</a></li>
                    <li><a href="/project-guideline.php#pg19">Financial Power of PI/CI/PC</a></li>
                    <li><a href="/project-guideline.php#pg20">When PI leaves Institute</a></li>
                    <li><a href="/project-guideline.php#pg21">Transfer of Project</a></li>
                    <li><a href="files/No Dues Certificate.pdf">No Dues Certificate for Project Staff / IPDF / NPDF</a></li>


                </ul>
                <br>
                <br>
                <h4>Office of the Dean(R&D) Schemes</h4>
                <ul class="a">
                    <li><a href="faculty-research-scheme.php">Faculty Research Scheme</a></li>
                    <li><a href="faculty-mobility.php">Faculty Mobility Program</a></li>
                    <!-- <li><a href="files/International_Mobility.pdf">International Mobility</a></li> -->
                    <li><a href="industrial-connect-program.php">Industry Connect Program</a></li>
                    <li><a href="./files/EDP Form.doc">Executive Development Program Form</a></li>
                    <li><a href="facilities-for-inspire-faculty.php">Facilities for INSPIRE Faculty</a></li>
                </ul>

            </div>
            <div class="column middle">
                <div class="middle-box1" style="text-align: center;">
                    <h4 style="color:#A52A2A;">Administration</h4>
                    <div class="home-admin-button">
                        <button class="button-10" onclick="func1()">Dean(R&D)</button>
                        <button class="button-10" onclick="func21()">Asso. Dean - SRIC</button>

                        <button class="button-10" onclick="func2()">Asso. Dean - IC</button>
                        <button class="button-10" onclick="func3()">Coordinator</button>
                        <button class="button-10" onclick="func4()">Assistant Registrar</button>
                    </div>

                    <div id="myDIV" style="margin:5px;">
                        Hello..
                    </div>
                </div>
                <br>
                <div class="middle-box2">
                    <div class="blink_me"><a href="/">Call for Proposal</a></div>
                </div>
                <br>
                <br>
                <div class="middle-box3" style="text-align:center;">
                    <!-- <h2 style="margin-bottom:10px;">Research and Development at a Glance</h2> -->
                    <div id="slidy-container">
                        <figure id="slidy">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_01.jpg" alt="PPT 1" data-caption="1">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_02.jpg" alt="PPT 2" data-caption="2">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_03.jpg" alt="PPT 3" data-caption="3">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_04.jpg" alt="PPT 4" data-caption="4">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_05.jpg" alt="PPT 5" data-caption="5">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_06.jpg" alt="PPT 6" data-caption="6">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_07.jpg" alt="PPT 7" data-caption="7">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_08.jpg" alt="PPT 8" data-caption="8">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_09.jpg" alt="PPT 9" data-caption="9">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_10.jpg" alt="PPT 10" data-caption="10">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_11.jpg" alt="PPT 11" data-caption="11">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_12.jpg" alt="PPT 12" data-caption="12">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_13.jpg" alt="PPT 13" data-caption="13">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_14.jpg" alt="PPT 14" data-caption="14">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_15.jpg" alt="PPT 15" data-caption="15">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_16.jpg" alt="PPT 16" data-caption="16">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_17.jpg" alt="PPT 17" data-caption="17">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_18.jpg" alt="PPT 18" data-caption="18">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_19.jpg" alt="PPT 19" data-caption="19">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_20.jpg" alt="PPT 20" data-caption="20">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_21.jpg" alt="PPT 21" data-caption="21">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_22.jpg" alt="PPT 22" data-caption="22">
                            <img src="images/Home PPT/R&D_Presentation_07 Jan 2023_23.jpg" alt="PPT 23" data-caption="23">

                        </figure>
                    </div>
                </div>
            </div>
            <div class="column right">
                
                <h4>Rules and Regulations</h4>
                <ul class="a">
                    <li><a href="files/Consultancy_Rules.pdf">Consultancy Rules</a></li>
                    <li><a href="seminarguideline.php">Seminar Rules</a></li>
                    <li><a href="safety-guidelines.php">Safety Guidelines</a></li>
                    <li><a href="#" onclick="alert('The section will be updated soon')">Project Staff TA/DA Rules</a></li>
                    <li><a href="files/leave-rules.pdf">Project Staff Leave Rules</a></li>
                    <li><a href="files/Notification Medical facilities for Project Staff.pdf">Project Staff Medical Guidelines</a></li>
                    <li><a href="files/Fee Structure for Project Staff & Employee.pdf">Other Rules</a></li>

                </ul>
                <br>
                <br>
                <h4>MoU/Agreements</h4>
                <ul class="a">
                    <li><a href="mous.php">MoUs</a></li>
                    <!-- <li><a href="/">Others</a></li> -->
                </ul>
                <br>
                <br>
                <h4>Student's Corner</h4>
                <ul class="a">
                    <li><a href="contingency-guideline.php">Contigency Guidelines</a></li>
                    <li><a href="btechGrant.php">International Travel Grant for UG/PG Students</a></li>
                    <li><a href="phdGrant.php">International Travel Grant for PhD Students</a></li>
                    <li><a href="Sandwich-phd.php">Sandwich PhD Program</a></li>
                    <li><a href="SRIP.php">Summer Research Internship Programme</a></li>

                </ul>
                
                <br>
                <br>
                <h4>Recruitment</h4>
                <ul class="a">
                    <li><a href="post-doctoral-fellowship.php">Institute Post Doctoral Fellowship</a></li>
                    <li><a href="project-opening.php">Project Opening</a></li>
                    <!-- <li><a href="/">Other openings</a></li> -->
                </ul>

                <br>
                <br>
                <h4>Notifications</h4>
                <ul class="a">
                    <li><a href="files/All Notifications_RnD.pdf">Archive</a></li>
                    <!-- <li><a href="#" onclick="alert('The section will be updated soon')">Archived</a></li> -->
                </ul>
                <br>
                <br>
                <h4>Useful Links</h4>
                <ul class="a">
                    <li><a href="files/funding_agencies.pdf">Funding Agencies</a></li>
                    <li><a href="files/FundingOppurtunity.pdf">Funding Opportunity</a></li>
                    <li><a href="independent-researcher-grant.php">Independent Researcher Grants</a></li>
                </ul>
                
            </div>
        </div>
    </div>

    <br>
    <footer id="homepage-footer">
        <div class="footer-content">
            <p>Contact Us</p>
            <p>Office of the Dean ( Research & Development )</p>
            <p>Email : drnd@iitism.ac.in</p>
            <p>Phone : 0326-2235203 / 2235217 / 2235253</p>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; IIT(ISM) Dhanbad</p>
            <p>Conceptualized by Prof. Sagar Pal, Prof. Ravi Kumar Gangwar, and Prof. Ejaz Ahmad. Designed and Developed by <a target="_blank" style="text-decoration:none;color:#2296e3" href="https://www.linkedin.com/in/malav-thakkar-011517200/">Malav Thakkar</a></p>
        </div>

    </footer>
    <?php
    $somevar = "Some Dynamic Data";
    ?>
    <script>
        var c0 = `
        <div style="text-align: center;font-size:12px;class="admin-box"">
            <br>
            <br>
            
            <h4>Welcome to Office of the Dean Research and Development IIT(ISM) Dhanbad</h4>
            <br>
            <br>
            <h3>Dean's Message</h3>
            <br>
            <p style="text-align:justify;font-size:13px;margin-top:5px;padding:0 20px;">
            Greetings from the office of Dean (Research and Development), IIT(ISM) Dhanbad. The
office of Dean R&D primarily deals with strategic planning, creating research
infrastructure, and fostering new and interdisciplinary research initiatives and
collaborations. We strive to build strong collaborations with the Industry/Academia/PSUs
to fulfil their fundamental and applied research needs. Indeed, the institute has strong
industry collaborations, establishing several Centres of Excellence (CoE) at IIT(ISM)
Dhanbad.            </p>
<p style="text-align:justify;font-size:13px;margin-top:5px;padding:0 20px;">
At present, IIT(ISM) Dhanbad has 17 departments and several centres, which are equipped
with all necessary infrastructure and world-class faculties to undertake all kinds of
fundamental and applied research problems. I am pleased to share that IIT(ISM) Dhanbad
th has been placed 26 in the QS Global University Rankings in Engineering - Mineral &
Mining. I am confident that, with the help of our colleagues/students, we will make this
Institute a Global Leader in the field of industrial and applied research. 
</p>
<p style="text-align:justify;font-size:13px;margin-top:5px;padding:0 20px;">
Therefore, I invite you to join our journey by utilizing our expertise, intellectual property, and
research infrastructure to develop technologies pertinent to your organization. 
</p>
            <br>
        </div>
        `;
        var c1 = `
        <div style="text-align: center;font-size:12px;class="admin-box"">
            <table style='text-align:left;'>
                <tr>
                    <td style="width:35%;padding-left:10px;">
                        <img src='images/sagarpal.jpg' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:5px;'>
                    </td>
                    <td style="width:65%;">
                        <p style="font-size:15px;color:#A52A2A">Prof. Sagar Pal</p>
                        <p style="line-height:16px;">Dean (Research & Development)</p>
                        <p style="line-height:16px;">Professor, Dept. of Chemistry & Chemical Biology</p>
                        <br>
                        <p style="line-height:16px;">Indian Institute of Technology (ISM) Dhanbad</p>
                        <p style="line-height:16px;">Tel : +91-326-2235203</p>
                        <p style="line-height:16px;">E-mail : drnd@iitism.ac.in</p>
                        <p style="line-height:16px;">Web : https://people.itism.ac.in/ ~ sagarpal/</p>
                    </td>
                </tr>
                <tr>
                <td>
                </td>
                <td style="width:60%;">
                        <br>
                        <p style="font-size:15px;color:#A52A2A">प्रो० सागर पाल</p>
                        <p style="line-height:16px;">अधिष्ठाता (अनुसंधान एवं विकास)</p>
                        <p style="line-height:16px;">प्राध्यापक, रसायन एवं रसायनिक जीव विज्ञान विभाग</p>
                        <br>
                        <p style="line-height:16px;">भारतीय प्रौद्योगिकी संस्थान (भारतीय खनि विद्यापीठ) धनबाद</p>
                        
                        <p style="line-height:16px;">दूरभाष : +91-326-2235203</p>
                        <p style="line-height:16px;">ईमेल : drnd@iitism.ac.in</p>
                        <p style="line-height:16px;">वेब : https://people.itism.ac.in/ ~ sagarpal/</p>
                    </td>
                </tr>
            </table>
            <br>
           
            <br>
        </div>
        `;
        var c2 = `
        <div style="text-align: center;font-size:12px;class="admin-box"">
            <table style='text-align:left;'>
                <tr>
                    <td style="width:35%;padding-left:10px;">
                        <img src='images/sagarpal.jpg' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:5px;'>
                    </td>
                    <td style="width:65%;">
                        <p style="font-size:15px;color:#A52A2A">Prof. Sagar Pal</p>
                        <p style="line-height:16px;">Associate Dean - RI (R&D)</p>
                        <p style="line-height:16px;">Professor, Dept. of Chemistry & Chemical Biology</p>
                        <br>
                        <p style="line-height:16px;">Indian Institute of Technology (ISM) Dhanbad</p>
                        <p style="line-height:16px;">Tel : +91-326-2235203</p>
                        <p style="line-height:16px;">E-mail : drnd@iitism.ac.in</p>
                        <p style="line-height:16px;">Web : https://people.itism.ac.in/ ~ sagarpal/</p>
                    </td>
                </tr>
                <tr>
                <td>
                </td>
                <td style="width:60%;">
                        <br>
                        <p style="font-size:15px;color:#A52A2A">प्रो० सागर पाल</p>
                        <p style="line-height:16px;">सह-अधिष्ठाता - आर. आई. (अनु.एवं वि.)</p>
                        <p style="line-height:16px;">प्राध्यापक, रसायन एवं रसायनिक जीव विज्ञान विभाग</p>
                        <br>
                        <p style="line-height:16px;">भारतीय प्रौद्योगिकी संस्थान (भारतीय खनि विद्यापीठ) धनबाद</p>
                        
                        <p style="line-height:16px;">दूरभाष : +91-326-2235203</p>
                        <p style="line-height:16px;">ईमेल : drnd@iitism.ac.in</p>
                        <p style="line-height:16px;">वेब : https://people.itism.ac.in/ ~ sagarpal/</p>
                    </td>
                </tr>
            </table>
            <br>
           
            <br>
        </div>
        `;
        var c21 = `
        <div style="text-align: center;font-size:12px;class="admin-box"">
            <table style='text-align:left;'>
                <tr>
                    <td style="width:35%;padding-left:10px;">
                        <img src='images/ravi.jpg' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:5px;'>
                    </td>
                    <td style="width:65%;">
                        <p style="font-size:15px;color:#A52A2A">Prof. Ravi Kumar Gangwar</p>
                        <p style="line-height:16px;">Associate Dean - SRIC (R&D)</p>
                        <p style="line-height:16px;">Associate Professor, Deptt. of Electronics Engineering</p>
                        <br>
                        <p style="line-height:16px;">Indian Institute of Technology (ISM) Dhanbad</p>
                        <p style="line-height:16px;">Tel: +91-326-2235203 / 5217</p>
                        <p style="line-height:16px;">E-mail : adsr@iitism.ac.in</p>
                        <p style="line-height:16px;">Web : https://iitism.irins.org/profile/97523/</p>
                    </td>
                </tr>
                <tr>
                <td>
                </td>
                <td style="width:60%;">
                        <br>
                        <p style="font-size:15px;color:#A52A2A">प्रो० रवि कुमार गंगवार</p>
                        <p style="line-height:16px;">सह-अधिष्ठाता - एस. आर. आई.सी. (अनु.एवं वि.)</p>
                        <p style="line-height:16px;">सह प्राध्यापक, इलेक्ट्रॉनिक्स अभियांत्रिकी विभाग</p>
                        <br>
                        <p style="line-height:16px;">भारतीय प्रौद्योगिकी संस्थान (भारतीय खनि विद्यापीठ) धनबाद</p>
                        
                        <p style="line-height:16px;">दूरभाष : +91-326-2235203 / 5217</p>
                        <p style="line-height:16px;">ईमेल : adsr@iitism.ac.in</p>
                        <p style="line-height:16px;">वेब : https://iitism.irins.org/profile/97523 /</p>
                    </td>
                </tr>
            </table>
            <br>
           
            <br>
        </div>
        `;
        var c3 = `
        <div style="text-align: center;font-size:12px;class="admin-box"">
            <table style='text-align:left;'>
                <tr>
                    <td style="width:35%;padding-left:10px;">
                        <img src='images/ejaz.jpg' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:5px;'>
                    </td>
                    <td style="width:65%;">
                        <p style="font-size:15px;color:#A52A2A">Prof. Ejaz Ahmad</p>
                        <p style="line-height:16px;">Coordinator - SRIC (R&D)</p>
                        <p style="line-height:16px;">Assistant Professor, Deptt. of Chemical Engineering</p>
                        <br>
                        <p style="line-height:16px;">Indian Institute of Technology (ISM) Dhanbad</p>
                        <p style="line-height:16px;">Tel : +91-326-2235203 / 5053 / 5522</p>
                        <p style="line-height:16px;">E-mail : coordinator_sric@iitism.ac.in</p>
                        <p style="line-height:16px;">Web : https://iitism.irins.org/profile/145028/</p>
                    </td>
                </tr>
                <tr>
                <td>
                </td>
                <td style="width:60%;">
                        <br>
                        <p style="font-size:15px;color:#A52A2A">प्रो० ईजाज़ अहमद</p>
                        <p style="line-height:16px;">समन्वयक - एस. आर. आई.सी. (अनु.एवं वि.)</p>
                        <p style="line-height:16px;">सहायक प्राध्यापक, रासायनिक अभियांत्रिकी विभाग</p>
                        <br>
                        <p style="line-height:16px;">भारतीय प्रौद्योगिकी संस्थान (भारतीय खनि विद्यापीठ) धनबाद</p>
                        
                        <p style="line-height:16px;">दूरभाष : +91-326-2235203 / 5053 / 5522</p>
                        <p style="line-height:16px;">ईमेल : coordinator_sric@iitism.ac.in</p>
                        <p style="line-height:16px;">वेब : https://iitism.irins.org/profile/145028</p>
                    </td>
                </tr>
            </table>
            <br>
          
            <br>
        </div>
        `;
        var c4 = `
        <div style="text-align: center;font-size:12px;class="admin-box"">
            <table style='text-align:left;'>
                <tr>
                    <td style="width:35%;padding-left:10px;">
                        <img src='images/kamesh.jpg' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:5px;'>
                    </td>
                    <td style="width:65%;">
                        <p style="font-size:15px;color:#A52A2A">Kamesh Kanchan Katariar</p>
                        <p style="line-height:16px;">Officer-in-charge (Research & Development)</p>
                        <p style="line-height:16px;">Assistant Registrar (Project Accounts)</p>
                        <br>
                        <p style="line-height:16px;">Indian Institute of Technology (ISM) Dhanbad</p>
                        <p style="line-height:16px;">Tel : : +91-326-2235624</p>
                        <p style="line-height:16px;">E-mail : arproject@iitism.ac.in</p>
                        <p style="line-height:16px;">Web : www.iitism.ac.in</p>
                    </td>
                </tr>
                <tr>
                <td>
                </td>
                <td style="width:60%;">
                        <br>
                        <p style="font-size:15px;color:#A52A2A">कामेश कंचन कटरियार</p>
                        <p style="line-height:16px;">प्रभारी अधिकारी (अनुसंधान एवं विकास)</p>
                        <p style="line-height:16px;">सहायक कुलसचिव (परियोजना लेखा)</p>
                        <br>
                        <p style="line-height:16px;">भारतीय प्रौद्योगिकी संस्थान (भारतीय खनि विद्यापीठ) धनबाद</p>
                        
                        <p style="line-height:16px;">दूरभाष : +91-326-2235624</p>
                        <p style="line-height:16px;">ईमेल : arproject@iitism.ac.in</p>
                        <p style="line-height:16px;">वेब : www.iitism.ac.in</p>
                    </td>
                </tr>
            </table>
            <br>
            
            <br>
        </div>
        `;
        var x = document.getElementById("myDIV");
        x.innerHTML = c0;

        function func1() {
            var x = document.getElementById("myDIV");
            x.innerHTML = c1;
        }

        function func21() {
            var x = document.getElementById("myDIV");
            x.innerHTML = c21;
        }
        function func2() {
            var x = document.getElementById("myDIV");
            x.innerHTML = c2;
        }

        function func3() {
            var x = document.getElementById("myDIV");
            x.innerHTML = c3;
        }

        function func4() {
            var x = document.getElementById("myDIV");
            x.innerHTML = c4;
        }
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 3000);
        }
        function myToast() {
            document.alert("Coming Soon....");
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
            document.getElementById("homepage-footer").style.display = "block";
        }
    </script>
    <script type="text/javascript" src="js/carousel.js"></script>
</body>

</html>