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
      font-size: 15px;
      /* margin-left: 20px; */
      ;
    }
    ol{
      list-style-position: outside;
      padding-left: 20px;
      font-size: 15px;

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
    .main-container p{
      font-size: 15px;
    }
  </style>

</head>

<body>


  <?php
  require("header.php");
  ?>

  <div class="main-container">
    <h1>Faculty Research Scheme</h1>
    <p>
      Scholarly research is one of the primary areas of engagement for higher education faculty. It is critical for new faculty members to set a clear and focused research agenda. Therefore, seed-grant (in terms of FRs) is provided to all newly joined faculty to start their individual research.<p>
    </p>
    <p>
      The newly joined faculty should apply for such grant within the first one year of service in the Institute and they should not have R&D Projects from External Funding Agencies. In return, the Institute has certain expectations from the new faculty members. These are: </p>
    <ul>
      <li>
        At least one grant proposal submitted within the first 6-8 months after joining, and independent research funding secured within about a year or so.
      </li>
      <li>
        Confirmed research productivity in terms of laboratory development and publications as well as guiding of PhD and Masters’ students.
      </li>
    </ul>
    <p>
      The Project proposal should contain the following:
    <p>
    <ul>
      <li>
        Cover page mentioning title of the project, name of PI, Department and Date of joining at IIT(ISM), Dhanbad
      </li>
      <li>
        Project summary

      </li>
      <li>
        Problem definition

      </li>
      <li>
        Objectives of the project

      </li>
      <li>
        Methodology
      </li>
      <li>
        Expected Outcome and Deliverables of the Project

      </li>
      <li>
        State of Knowledge
        <ol>
          <li>
            International Status
          </li>
          <li>
            National Status
          </li>
          <li>
            Importance of the Proposed Project
          </li>
        </ol>

      </li>
      <li>
        Work plan and Time schedule

      </li>
      <li>
        Financial outlay with justification

      </li>
      <li>
        References
      </li>

    </ul>
    <br>
    <p>The proposal should be submitted to Coordinator - SRIC : <a href="mailto:coordinator_sric@iitism.ac.in">coordinator_sric@iitism.ac.in</a></p>
    <br>
    <div style="text-align:left;">
      <h2>Terms and Conditions for R&D Projects Approved Under Faculty Research Scheme (FRS) of IIT(ISM) Dhanbad:</h2>
      <p>
        The PIs of sanctioned FRS Projects are requested to pursue the following terms and conditions while implementing the same:
      </p>
      <ol>
        <li>
          All the PIs should clearly indicate the Project Number allotted to them in all their claims/indents for future reference.

        </li>
        <li>
          The concerned PIs should indent only for the items which are specified in the project proposals submitted by them. There should not be any deviation in any respect. Any deviation would need prior approval of Dean(R&D) and Director.

        </li>
        <li>
          The PIs of FRS projects should avail the same financial powers as approved by competent authority of IIT(ISM) Dhanbad to PIs of external projects of different sponsoring agencies.

        </li>
        <li>
          The indents costing more than the sanctioning power of the PIs should be raised duly observing IIT(ISM) Dhanbad Purchase Manual procedures and to be submitted to the Dean(R&D) for approval/endorsement alongwith a copy of the budget provision. However, if indented items which are within the sanctioning power of concerned PIs, the same may be dealt at the departmental level. Such indents need not to be sent to Dean(R&D) for his approval.

        </li>
        <li>
          The PIs should submit Half-yearly progress reports (April – Sept, October – March) alongwith the Expenditure Statement through their respective HODs, to the Dean(R&D). A presentation of progress every year be made by PI to the Department and report to be sent to the Dean(R&D).

        </li>
        <li>
          The equipment/instruments which will be procured under these projects should be made accessible to other users, within and outside the Department. Necessary mechanism for extending the facilities at IIT(ISM) Dhanbad will be intimated, which is under preparation.

        </li>
        <li>
          Duration of the project is 3 years.

        </li>
        <li>
          The concerned PIs are solely accountable for timely and smooth implementation of the project.

        </li>
        <li>
          Acknowledgement to IIT(ISM) Dhanbad is essential in case of publication/patent.

        </li>
        <li>
          There is no provision for manpower / secretarial support.

        </li>
        <li>
          On completion of the project following are to be submitted to the office of the Dean(R&D):
          <ul>
            <li>
              Project completion report
            </li>
            <li>
              Utilization certificate and statement of expenditure
            </li>
          </ul>
        </li>
      </ol>

    </div>
    <br>
    <!-- <div style="width: 100%;padding:20px;">
      <a href="./files/frs_form.pdf" download title="Click to Download">
        <h2 style="text-align: center;">Faculty Research Scheme Form</h2>
      </a>
      <iframe src="./files/frs_form.pdf" width="80%" height="500px;"> </iframe>
    </div> -->

  </div>

  </div>



  <?php
  require("footer.php");
  ?>

</body>

</html>