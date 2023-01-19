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
    <h1>Institute Post-Doctoral Fellowship (IPDF)</h1>
    <p>
      The Institute Post-Doctoral Fellowship (IPDF) may be awarded for a maximum period of three years, with initial offer for a period of 1 year, extendable on yearly basis on satisfactory progress as certified by the Performance Assessment Committee (PAC). However, on unsatisfactory progress the fellowship may be terminated.
    </p>
    <p>
      The selected IPDFs will be attached to regular faculty members of the Institute, who will act as mentors. They will be attached to mentors primarily for facilitating their research work. She/he will work with the mentors rather than work under them. PDFs will be eligible to serve as co-guides for guiding students enrolled for projects/dissertation work along with their mentors.
    </p>
    <p>
      Apart from the research pursued by the IPDFs, her/his services will be utilized by the Department for teaching and research assistance in the departmental work including teaching, handling tutorials, laboratory classes and research projects execution.
    </p>
    <p>
      Apart from research work, IPDFs are also encouraged to seek external funding by submitting research proposals to different funding agencies.
    </p>
    <p>
      <b style="color:#A52A2A;">Advertisement : </b>The advertisement for IPDFs is rolling. The candidates are requested to apply (along with the research proposal) through the Google form given below:
      <br>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSdJYkR4QLK0QJrQJ8R96l3PjdauOFIYI0tPhMdbuXTL4iJvkQ/viewform">Google Form Link</a>
    </p>
    <p>
      <b style="color:#A52A2A;">Eligibility : </b>PhD holders (within 5 years of completion of PhD) with at least two papers (as first or corresponding author) in Journals of repute or SCI/SCIE is eligible to apply. PhD holders of IIT (ISM) will not be eligible to apply for a period of two years from the date of award of PhD.
      <br>
      The potential candidates are advised to visit the department website to look for the faculty research areas. They may approach to the faculty members working in her/his area of interest and accordingly they can prepare research proposal. They can indicate a list of preference of faculty members (maximum of 3) in the proposal.
    </p>
    <p>
      <b style="color:#A52A2A;">Age :</b> Maximum 35 years (to be relaxed as per Government of India guidelines).
    </p>
    <p>
      <b style="color:#A52A2A;">Application Processing and Interview :</b>Applications received by the Office of Dean (R&D) will initially be screened for plagiarism. Applicant’s proposal with Similarity index less than 15% will be sent to the respective departments for further processing. The applicant’s credential will initially be scrutinized by the DFSC followed by final recommendation of the DAC. The DAC recommended candidates will be called for interview. Such candidates will be reimbursed Second AC to- and fro- fare from their place of stay by the shortest route for attending interview.
      <br>
      The interview may be conducted online for candidates from abroad/under specific circumstances for candidates residing within India.
    </p>
    <p>The composition of the Standing Selection Committee may be as follows :</p>
    <ul>
      <li>
        Dean (R&D): Chairperson
      </li>
      <li>
        Associate Dean R&D-SRIC: Member
      </li>
      <li>
        Associate Dean (RI): Member
      </li>
      <li>
        Coordinator-SRIC: Member
      </li>
      <li>
        HOD of concerned Dept.: Member
      </li>
      <li>
        One faculty member from Dept.: Member
      </li>
      <li>
        One expert member from Sister Dept: Member
      </li>

    </ul>
    <p>
      Selection committee as per the above composition will propose the recommended candidate to Chairman Senate for approval.
      On approval from the Chairman Senate, offers will be sent to the selected candidates by the office of the Dean (R&D).
    </p>
    <p>
      Amount of Fellowship and other benefits to IPDFs
    </p>
    <table id="customers" style="width: 70%;margin:20px 15%;">
      <tr>
        <th>Year</th>
        <th>Consolidated Fellowship per month (inclusive of all)</th>
      </tr>
      <tr>
        <td>
          1st Year
        </td>
        <td>
          Rs. 60000
        </td>
      </tr>
      <tr>
        <td>
          2nd Year
        </td>
        <td>
          Rs. 60,000+5% increment
        </td>
      </tr>
      <tr>
        <td>
          3rd Year
        </td>
        <td>
          Rs. 63,000+ 5% increment
        </td>
      </tr>
    </table>
        <ul>
          <li>
          A contingency grant of Rs.75000/=
          </li>
          <li>
          IPDFs may be allowed to attend Conferences subject to availability of Fund in their contingency grant.
          </li>
          <li>
          Medical benefits: IPDFs and their legal dependents will be provided OPD facility and medicine available in the health Centre with nominal charges (will be deducted every month from her/his fellowship). Indoor hospitalization facilities will also be provided in the health Centre, if necessary. However, reimbursement facility will not be provided to IPDFs and their legal dependents.
          </li>
          <li>
          30 days leave with fellowship will be provided per year. The leave can be availed on a pro rata basis of the fellowship completed. Leave of IPDFs would be forwarded by the Mentor and would be approved by the Head of the department, while the outstation visit would be approved by the Dean (R&D). Leave record must be maintained by the department.
          </li>
          <li>
          Maternity/paternity leave as per GoI rules. Leave up to 6 weeks can also be granted for miscarriage including medical termination of pregnancy, if supported by a proper medical certificate. Such leave can be combined with any other leave due and will not entail any loss of financial assistantship.
          </li>
        </ul>
        <p>
        <b style="color:#A52A2A;">Progress Report & Performance Appraisal :</b> IPDFs shall submit a progress report in every six months to the Mentor. The IPDFs will present her/his progress of work on yearly basis to the Performance Appraisal Committee, detailing the research work carried out and reprints/preprints/manuscripts of the papers published/accepted for publication or communicated, patents filed, external funding obtained etc. for this purpose.
        </p>
        <p>
        The composition of the PAC is follows:
        </p>
        <ul>
          <li>
          Head of the Department: Chairperson (If HOD is mentor of an IPDF, then one of other members of the Committee will assume the role of Chairperson)
          </li>
          <li>
          The Mentor: Member
          </li>
          <li>
          Two faculty members in the area of research (One from the department and another from the sister department)
          </li>
        </ul>
        <p>
        The PAC as per the above composition will be proposed by HOD to Dean (R&D) for approval.
        <br>
        The PAC will meet on yearly basis to assess the performance of the IPDF.
        </p>
        <p>
        <b style="color:#A52A2A;">Termination - </b>If the IPDF wishes to leave the programme before the end of the tenure, she/he can do so by giving one month’s notice via proper channel (i.e. Mentor to Head to Dean R&D). The fellowship may be terminated by the Institute if the performance/ conduct of the fellow is unsatisfactory after giving one month’s notice to the IPDF.
        </p>
        <br>
  </div>



  <?php
  require("footer.php");
  ?>

</body>

</html>