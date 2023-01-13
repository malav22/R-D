<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css-new/index.css" />
    <link rel="stylesheet" type="text/css" href="css-new/project-guideline.css" />

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

    <div class="main-container">
        <h1>Project Guidelines</h1>
        <div class="card" id="pg1">
            <h2>Introduction</h2>
            <p> The Office of the Dean (Research and Development) drives strategic planning and provide guidance across academic and research programs, fostering new and interdisciplinary research initiatives and collaborations.
            </p>
        </div>

        <div class="card" id="pg2">
            <h2>How to Apply For a Project?</h2>
            <p>The faculty members can apply for the project to various funding agency by submitting the form
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScfaEG4EL_emvNZaTsi0TIEvRT5DF67TT7gMlD0Q3xDWv_VIg/viewform?vc=0&c=0&w=1&flr=0">(Format for Forwarding R&D Proposal)</a>.
                Each funding agency has its format for endorsement, while sending the proposal please send the relevant endorsement form as well.<br>
                Please send a copy of the entire proposal including endorsement letter certificate from investigators for the office record.
            </p>
        </div>

        <div class="card" id="pg3">
            <h2>How to get the Project Number?</h2>
            <p>
                Once a project is sanctioned by the concerned funding agency please send a request letter to Dean (R&D) for the Project Number along with the sanction letter of the funding agency.
                This number is a unique number and is mandatory for running the project.
                Office of Dean (R&D) enters the Project details in the MIS.
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeeTtGBgIqWcVlajxsQSEX3E4y1tRCI4Ruem9kHMMt1TvegtA/viewform?vc=0&c=0&w=1"> How to Get the Project Number</a>
            </p>
        </div>

        <div class="card" id="pg4">
            <h2>Mandate Forms</h2>
            <p><a href="./files/DST SERB Mandate Form New (1).pdf">Mandate Form for DST SERB Projects Only</a></p>
            <p><a href="./files/IITISM-Project-Ac-Mandate-form.pdf">Mandate Form for Project Account other than DST SERB (which does not require GST)</a></p>
            <p><a href="./files/IITISM-Special-Fund-Mandate-form.pdf">Mandate Form for Special Projects (which requires GST)</a></p>
        </div>

        <div class="card" id="pg5">
            <h2>PFMS Certificate</h2>
            <p><a href="./files/PFMS_CERTIFICATE.pdf">PFMS Certificate</a></p>
        </div>

        <div class="card" id="pg6">
            <h2>GST/TAN/PAN</h2>
            <p><b>GST </b>: 20AAAAI0686D1ZA </p>
            <p><b>TAN </b> : RCHI00063A </p>
            <p><b>PAN </b>: AAAAI0686D </p>
        </div>

        <div class="card" id="pg7">
            <h2>Unique ID No. (NGO DARPAN)</h2>
            <p>JH/2017/0151957</p>
        </div>

        <div class="card" id="pg8">
            <h2>Proforma/Tax Invoice</h2>
            <p>Some projects require Proforma/Tax Invoice, Proforma Invoice can be raised by the PI but Tax Invoice is issued by the Office of Dean (R&D) on the request of PI. PIs are not supposed to raise TAX invoice.</p>
        </div>

        <div class="card" id="pg9">
            <h2>Tax Exemption</h2>
            <p>Some PIs may require Tax Exemption under section 197 which allows Nil or Lower Tax Rate Deduction of TDS (or TDS Exemption). PIs desiring such exemption may send the request to Assistant Registrar (Project) with following information:</p>
            <ul>
                <li>Amount Expected</li>
                <li>PAN of the Funding Agency</li>
                <li>TAN of the Funding Agency</li>
                <li>Address of the Funding Agency</li>
                <li>Type of Work (viz., Equipment under R&D) </li>

            </ul>
            <br>
            <p>The project section compiles the data for all the PIs. Project Section applies at institute level. This certificate is valid for a financial year only. It is desired that PIS sent such request early March such that Project section applies early April.</p>
        </div>

        <div class="card" id="pg10">
            <h2>Payments</h2>
            <p>It is preferred that the all payments related to project are made online.For payment within institute can be assist on this.</p>
            <p><a href="https://eps.eshiksa.net/DirectFeesv3/IIT_Dhanbad/index">IIT ISM Online Payment </a> </p>
        </div>

        <div class="card" id="pg11">
            <h2>Recruitment in the Project?</h2>
            <p>The Principal Investigator takes the approval of the following from Dean (R&D)</p>

            <ul>
                <li><a href="./files/Approval of Advertisement and Selection Committee-Form 301.docx">Advertisement and Selection Committee</a></li>
                <li><a href="./files/Format-for-Advertisement-of-Project-Fellow.doc">Description of the Advertised Post</a></li>
            </ul>
            <br>
            <p>Once it is approved by the Dean (R&D), the same has to be hoisted on the Institute Website by the PI using following steps:</p>
            <p><a href="./files/Steps-for-Uploading-web-related-data.pdf">Steps to upload project opening On MIS</a></p>
            <br>
            <p>Walk in interviews may be conducted but interview over skype or video conferencing is not permitted.</p>
            <p>After the interview
                <a href="./files/Report of Selection Committee.docx">Report of the Selection Committee</a> is to be sent to Dean (R&D) for approval.
            </p>


            <br>
            <p>The Office of Dean (R&D) issues the offer letter after the DRAFT offer letter is approved by the PI. The offer letter is sent to the Project Employee through Email with a copy to PI, SMO, HOD. The Project employee sends the acceptance of the offer through email within seven days of the offer.</p>
            <p>Once the candidate joins, the following is to be submitted by the candidate to the Office of Dean (R&D)</p>
            <ul>
                <li>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSd5DpGoY253xpu02U_6b0g6uzsHoebtoXOQiEPipxxkc3a2EQ/viewform?vc=0&c=0&w=1&usp=mail_form_link">Joining Report for Project Employees other than Inspire and PDF</a>
                </li>
                <li>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScmrJMpcKkWqrY_2pSqxAVW5DIfzI15uyKlm98tQqKv5kw_Ow/viewform?vc=0&c=0&w=1">Joining Report for Inspire and PDF</a>
                </li>
                <li>
                    <a href="./files/Format of Joining Letter under Project.docx">Joining Letter under Project</a>
                </li>

            </ul>
            <br>
            <p>After the receipt of the above two, Notification related to joining is issued by the Office of Dean (R&D).</p>
            <p>In case the selected candidate does not join then the offer will be sent to Wait Listed Candidate. Normally the panel is valid for six months.</p>
        </div>

        <!-- <div class="card" id="pg12">
            <h2>Facilities to Project Employees</h2>
            <ul>
                <li>
                    <b>For Library Facilities : </b>Library Security Deposit (Refundable): Rs. 2500.00
                </li>
                <li>
                    <b>For Medical facilities at IIT(ISM) Health Centre :</b> Project Employees and their legal dependents will be provided free OPD facility and medicine available in the Health Centre.
                    Indoor Hospitalization facilities will also be provided in the health Centre, if necessary. However, they will not be entitled for reimbursement and referral facility.
                </li>
                <li>
                    <b>For Hostel Facilities :</b> In addition, for their stay in the Institute’s Hostel, the charges as applicable to regular students will be applicable.
                </li>
                <li>
                    <b>For Other Amenities :</b> Other amenities of the institute like swimming pool, gymnasium etc. will be charged as per the existing rates and rules.
                </li>


            </ul>
        </div> -->
        <div class="card" id="pg13">
            <h2>Travel within India/Abroad for Carrying Out Project Work</h2>
            <p>Dean (R&D) endorses the application for travel support. The possible source of travel support is:</p>
            <ul>

                <li>The PI or a regular staff of the institute can go for Project Leave up to a maximum of 15 days during a year without hampering the classes. Before proceeding for leave he needs to get the approval from the Director by filling the form</li>
                <li> <a href="./files/Tour-cum-leaveapplication.docx">Tour-cum-Leave Application form</a> </li>
                <li>The Project Employees can proceed for field trips etc. by filling the </li>
                <li><a href="./files/Tour-cum-leave application form_Project_Employee.docx">Tour Approval Form</a></li>
                <li>And getting it approved from the Dean (R&D)</li>
                <li>It is advisable to plan such trips well in advance and without disturbing much of classes.</li>
                <li>On return the claim for travelling and dearness allowance should be made through</li>
                <li><a href="./files/TA Claim Form.docx">TA Claim Form</a> </li>
                <li>With the TA Claim form please attach a detailed tour diary which states the detailed of work carried out.</li>



            </ul>
        </div>
        <div class="card" id="pg14">
            <h2>Analysis</h2>
            <p>Permission to be sought from Dean (R&D) for carrying out testing and analysis outside India.</p>
        </div>
        <div class="card" id="pg15">
            <h2>Utilization Certificate (UC)/ Statement of Expenditure (SE)</h2>
            <p>PI sends a request to Project Section for preparing of UC/SE by the end of March. It is expected that the UC/SE will be prepared by the Project Section by Mid of April.</p>
        </div>
        <div class="card" id="pg16">
            <h2>Purchase Manual</h2>
            <p>Institute Purchase Manual to be followed for the purchase. Purchase manual and other related information can be found at :
                <a href="https://www.iitism.ac.in/index.php/Tendernew"> Purchase Manual</a>
            </p>
        </div>
        <div class="card" id="pg17">
            <h2>Advance for Carrying Out Project</h2>
            <p>Staff advance for carrying Project can be drawn by the PI as per institute norm by filling the

                <a href="./files/STAFF ADVANCE FORM_Project Acts.docx">Staff Advance Form</a>.
            </p>
            <p>Project Employees are not entitled for Advance. PIs can take advance on the behalf of Project Employees.</p>
            <p>Advance once taken needs to be settled within 30 days of return, else interest would be charged as per GoI norm on the advance drawn.</p>
            <p>At a time PI can have one advance only.</p>
        </div>
        <div class="card" id="pg18">
            <h2>PDF Guidelines</h2>
            <p><a href="./files/Notification of PDF.pdf">Guidelines</a> </p>
        </div>
        <div class="card" id="pg19">
            <h2>By Delegation of Financial Power of PI (Project Investigator) / CI (Consultant In-charge)/Programme Cordinator (PC)</h2>
            <ul>

                <li>
                    <p> Non - consumable (Non-recurring Items / Capital / asset items) : 4.00 Lakh</p>
                </li>
                <li>
                    <p> Consumables (Recurring Items) : 1.00 Lakh</p>
                </li>
            </ul>
        </div>
        <div class="card" id="pg20">
            <h2>When a PI Leaves the Institute</h2>
            <p> In such cases the guidelines of the funding agency would be followed. In case the funding agency permits to transfer the project where the PI has joined after leaving IIT (ISM) he needs to do following:</p>

            <ul>
                <li>A letter from Funding Agency to Transfer the Project along with the assets purchased from the said project and transferring of unspent fund.</li>
                <li>Acceptance from the new institute .</li>
                <li>No Dues from the Concerned Head of The Department at IIT (ISM) regarding the same.</li>
                <li>Deletion of the items from the Departmental and Central Asset Register.</li>
                <li>Subsequently a letter will be issued by Dean (R&D) in this regard .</li>

            </ul>
        </div>
        <div class="card" id="pg21">
            <h2>Transfer of Project</h2>
            <p>
                Collaborative R&D Projects can be submitted where the faculty of IIT(ISM) can be PI or Co-PI. The Proposals should clearly spell out the fund requirement of the participating institute(s) along with Overhead charges.
            </p>

            <p> If a faculty member from another institute/organization joins IIT (ISM) and he intends to transfer the sanctioned/ongoing project from his previous organization/institute, following would be required:</p>

            <ul>
                <li>A letter from Funding Agency to Transfer the Project along with the assets purchased from the said project and transferring of unspent fund.</li>
                <li>Subsequently a letter will be issued by Dean (R&D) in this regard.</li>

            </ul>

            <br>
            <p><b>Collaborative R&D Projects can be submitted where the faculty of IIT(ISM) can be PI or Co-PI. The Proposals should clearly spell out the fund requirement of the participating institute(s) along with Overhead charges.</b>
            <p>

        </div>
    </div>


    <?php
    require("footer.php");
    ?>

</body>

</html>