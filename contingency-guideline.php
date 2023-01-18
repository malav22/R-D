<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css-new/index.css" />
    <link rel="stylesheet" type="text/css" href="css-new/contigency-guideline.css" />

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
        <h1>Contigency Guidelines</h1>
        <p>The Board of Governors of the Institute in its 12<sup>th</sup> meeting held on 20<sup>th</sup> December 2019 has approved the Cumulative Contingency effective from April 1, 2020. The disbursement of the Contingency for PhD/M.Tech./IPDFs will be as per following table:</p>
        <table id="customers">
            <tr>
                <th>Serial No.</th>
                <th style="text-align: center;font-size:24px">Item</th>
                <th>Maximum Permissible Limit for PhD/M.Tech. Students within allocated amount (in Rs.)</th>
                <th>Maximum Permissible Limit for IPDFs within allocated amount (in Rs.)</th>

            </tr>
            <tr>
                <td>
                    1
                </td>
                <td style="text-align: justify;">
                    Chemical/consumable for fabrication and testing related to research work with prior approval of Guide.
                </td>
                <td>
                    No limit
                </td>
                <td>
                    No limit
                </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td style="text-align: justify;">
                    Stationary items, photocopy, printout, and Postal charges etc. (Payable as fixed charges not to be claimed) (Would be directly transferred to the Bank Account of the Scholar once in year) </td>
                <td>
                    1500/Year
                </td>
                <td>
                    2500/Year
                </td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td style="text-align: justify;">
                    Publication Charges (only for non-paid journals)/purchase of preprints, Subscription Charges and Books </td>
                <td>
                    No limit
                </td>
                <td>
                    No limit
                </td>
            </tr>
            <tr>
                <td>
                    4
                </td>
                <td style="text-align: justify;">
                    Testing and Analysis charges. </td>
                <td>
                    No limit
                </td>
                <td>
                    No limit
                </td>
            </tr>
            <tr>
                <td>
                    5
                </td>
                <td style="text-align: justify;">
                    Travel expenses related to field work including hiring of vehicles/labours, Sandwich PhD, oral paper presentation in conferences, training with prior approval of Guide is required. </td>
                <td>
                    No limit
                </td>
                <td>
                    No limit
                </td>
            </tr>
            <tr>
                <td>
                    6
                </td>
                <td style="text-align: justify;">
                    Registration fees for attending Conferences/Workshop (such as GIAN course), training, membership of national and international societies and associations, Online courses related to research work. </td>
                <td>
                    No limit
                </td>
                <td>
                    No limit
                </td>
            </tr>
            <tr>
                <td>
                    7
                </td>
                <td style="text-align: justify;">
                    Thesis Printing and Binding Charges after the no dues (Would be directly to the Bank Account of the Scholar) </td>
                <td>
                    2000/- (M.Tech.) , 5000/- (PhD) </td>
                <td>
                    Not Applicable
                </td>
            </tr>
            <tr>
                <td>
                    8
                </td>
                <td style="text-align: justify;">
                    Thesis Evaluation Fees </td>
                <td>
                    As per Institute Rules </td>
                <td>
                    Not Applicable
                </td>
            </tr>

        </table>
        <ul style="text-align:left;padding-left:7.5%;padding-right:5%;margin-top:20px;">
            <li>
                The contingency grant of the M.Tech./PhD Scholars/ IPDFs would be Cumulative in nature for the complete tenure.
            </li>
            <li>
                Complete Tenure for M.Tech. students is the date of last examination and for PhD Scholars, it is the five years or date of Pre-Submission, whichever is earlier.
            </li>
            <li>
                There is no restriction on number of Conferences to be attended but the expenditure has to be within the accumulated contingency.

            </li>
            <li>
                TA/DA will be payable as per GOI/Institute guidelines.

            </li>
            <li>
                Expenditure limited to the maximum amount available in the students’ credit.

            </li>
            <li>
                It is applicable for existing PhD Students as well

            </li>

        </ul>
        <p>
            Veracity of the claim to be certified by the M.Tech./PhD Supervisors and Mentors of IPDFs. Supervisors/Mentors have to certify that the claim has been made for the research related work.
        </p>
        <p>
            Allocated contingency amount per annum is as follows:
        </p>
        <p>PhD : Total Contingency Rs. 30,000/- p.a.</p>
        <p>
            IPDF : Total Contingency Rs. 75,000/- p.a.
        </p>
        <p>
            M.Tech. : Total Contingency Rs. 5,000/- p.a.
        </p>
    </div>


    <?php
    require("footer.php");
    ?>

</body>

</html>