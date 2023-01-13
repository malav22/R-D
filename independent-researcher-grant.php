<!DOCTYPE html>

<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="./css-new/index.css" />
  <link rel="stylesheet" type="text/css" href="./css-new/carousel.css" />
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
    .about{
      width: 90%;
      margin-left: 5%;
      margin-right: 5%;
    }


    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    margin-left:5%;
    margin-right: 5%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #A52A2A;
    color: white;
  }
  li{
    margin-bottom:4px;
    text-align: justify;
  }
  #customers2 {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    margin-left:5%;
    margin-right: 5%;
  }
  
  #customers2 td, #customers2 th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers2 tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers2 tr:hover {background-color: #ddd;}
  
  #customers2 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #A52A2A;
    color: white;
  }
  </style>


</head>

<body id="top" style="background-color: #b232310d;">
  <?php
  require("header.php");
  ?>
  <div class="main-container">
    <h1>Independent Researchers Grant</h1>
    <div>
      <a href="./files/independent researcher grants.xlsx">Click here to download the file</a>
    </div>
    <div class="about" style="font-size: 16px;text-align:justify; box-shadow: 1px 1px 3px 3px #888888;padding:20px; height: 500px;overflow: scroll;">
    
      <table id="customers">
        <tbody style="font-size:15px;">
          <tr style="color:#A52A2A;font-size:24px;">
            <th t="s" id="sjs-A1" v="Category">Category</th>
            <th t="s" id="sjs-B1" v="Agency">Agency</th>
            <th t="s" id="sjs-C1" v="Scheme">Scheme</th>
            <th t="s" id="sjs-D1" v="Comments">Comments</th>
            <th t="s" id="sjs-E1" v="Budget">Budget</th>
            <th t="s" id="sjs-F1" v="Eligibility">Eligibility</th>
            <th t="s" id="sjs-G1" v="Deadline">Deadline</th>
            <th t="s" id="sjs-H1" v="Duration">Duration</th>
            <th t="s" id="sjs-I1" v="Weblink">Weblink</th>
            <th t="z" id="sjs-J1"></th>
            <th t="z" id="sjs-K1"></th>
          </tr>
          <tr>
            <td t="s" id="sjs-A2" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B2" v="International Brain research Organization (IBRO)">International Brain research Organization (IBRO)</td>
            <td t="s" id="sjs-C2" v="Return home Fellowship">Return home Fellowship</td>
            <td t="z" id="sjs-D2"></td>
            <td t="s" id="sjs-E2" v="20,000 Euros">20,000 Euros</td>
            <td t="s" id="sjs-F2" v="Scientists who are developing a successful basic/clinical research career in a developed country and wish to return to their country of origin or to a less developed country " xml:space="preserve">Scientists who are developing a successful basic/clinical research career in a developed country and wish to return to their country of origin or to a less developed country </td>
            <td t="s" id="sjs-G2" v="1 Sep each year">1 Sep each year</td>
            <td t="z" id="sjs-H2"></td>
            <td t="s" id="sjs-I2" v="http://ibro.info/professional-development/funding-programmes/return-home-fellowships/">http://ibro.info/professional-development/funding-programmes/return-home-fellowships/</td>
            <td t="z" id="sjs-J2"></td>
            <td t="z" id="sjs-K2"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A3" v="Research">Research</td>
            <td t="s" id="sjs-B3" v="DBT/EU countries">DBT/EU countries</td>
            <td t="s" id="sjs-C3" v="INDIGO POLICY Support for the advancement of policy cooperation between India and Europe">INDIGO POLICY Support for the advancement of policy cooperation between India and Europe</td>
            <td t="s" id="sjs-D3" v="A minimum of two different European members, as well as one or more eligible partners from India. " xml:space="preserve">A minimum of two different European members, as well as one or more eligible partners from India. </td>
            <td t="s" id="sjs-E3" v="Covers exchange of researchers, workshops, research costs and personnel costs">Covers exchange of researchers, workshops, research costs and personnel costs</td>
            <td t="s" id="sjs-F3" v="Scientists from universities, research institutions and small and medium enterprises / companies from India as defined by BIRAP, DBT. " xml:space="preserve">Scientists from universities, research institutions and small and medium enterprises / companies from India as defined by BIRAP, DBT. </td>
            <td t="n" id="sjs-G3" v="41911">29-Sep-14</td>
            <td t="s" id="sjs-H3" v="3 years">3 years</td>
            <td t="s" id="sjs-I3" v="http://dbtindia.nic.in/docs/Indo-EU_Collaboration2011.doc">http://dbtindia.nic.in/docs/Indo-EU_Collaboration2011.doc</td>
            <td t="z" id="sjs-J3"></td>
            <td t="z" id="sjs-K3"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A4" v="Fellowship-students/PDRA">Fellowship-students/PDRA</td>
            <td t="s" id="sjs-B4" v="Human Frontiers in Sciences Program (HFSP)">Human Frontiers in Sciences Program (HFSP)</td>
            <td t="s" id="sjs-C4" v="Long term Fellowships (For Non Indian nationals)">Long term Fellowships (For Non Indian nationals)</td>
            <td t="s" id="sjs-D4" v="Requires relocation to country other than home country">Requires relocation to country other than home country</td>
            <td t="s" id="sjs-E4" v="Generous funding covering, living, travel, research and relocation allowances">Generous funding covering, living, travel, research and relocation allowances</td>
            <td t="s" id="sjs-F4" v="PhD (0-3 years postdoc experience)in life sciences, needs to embark on a new project in a different field of the life sciences">PhD (0-3 years postdoc experience)in life sciences, needs to embark on a new project in a different field of the life sciences</td>
            <td t="n" id="sjs-G4" v="41879">28-Aug-14</td>
            <td t="s" id="sjs-H4" v="3 years (can be split into 2 years + 1 year after (2 years break) to be used for relocation to home country">3 years (can be split into 2 years + 1 year after (2 years break) to be used for relocation to home country</td>
            <td t="s" id="sjs-I4" v="http://www.hfsp.org/funding/postdoctoral-fellowships">http://www.hfsp.org/funding/postdoctoral-fellowships</td>
            <td t="z" id="sjs-J4"></td>
            <td t="z" id="sjs-K4"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A5" v="Fellowship-students/PDRA">Fellowship-students/PDRA</td>
            <td t="s" id="sjs-B5" v="Human Frontiers in Sciences Program (HFSP)">Human Frontiers in Sciences Program (HFSP)</td>
            <td t="s" id="sjs-C5" v="Cross-disciplinary Fellowships (For Non Indian nationals)">Cross-disciplinary Fellowships (For Non Indian nationals)</td>
            <td t="s" id="sjs-D5" v="Requires relocation to country other than home country">Requires relocation to country other than home country</td>
            <td t="s" id="sjs-E5" v="Generous funding covering, living, travel, research and relocation allowances">Generous funding covering, living, travel, research and relocation allowances</td>
            <td t="s" id="sjs-F5" v="PhD in discipline outside of life sciences (0-3 years postdoc experience) for training in field of biology">PhD in discipline outside of life sciences (0-3 years postdoc experience) for training in field of biology</td>
            <td t="n" id="sjs-G5" v="41879">28-Aug-14</td>
            <td t="s" id="sjs-H5" v="3 years (can be split into 2 years + 1 year after (2 years break) to be used for relocation to home country">3 years (can be split into 2 years + 1 year after (2 years break) to be used for relocation to home country</td>
            <td t="s" id="sjs-I5" v="http://www.hfsp.org/funding/postdoctoral-fellowships">http://www.hfsp.org/funding/postdoctoral-fellowships</td>
            <td t="z" id="sjs-J5"></td>
            <td t="z" id="sjs-K5"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A6" v="Fellowship-students/PDRA">Fellowship-students/PDRA</td>
            <td t="s" id="sjs-B6" v="Indo-US Science and Technology Forum">Indo-US Science and Technology Forum</td>
            <td t="s" id="sjs-C6" v="Research internships in science and engineering for American students in India (RISE)">Research internships in science and engineering for American students in India (RISE)</td>
            <td t="s" id="sjs-D6" v="Disciplines of science, technology, engineering and medicine">Disciplines of science, technology, engineering and medicine</td>
            <td t="s" id="sjs-E6" v="Rs 25000 per month stipend, airfare, visa fees " xml:space="preserve">Rs 25000 per month stipend, airfare, visa fees </td>
            <td t="s" id="sjs-F6" v="US or Indian nationals enrolled for PhD or Masters course at an academic institute in US">US or Indian nationals enrolled for PhD or Masters course at an academic institute in US</td>
            <td t="n" id="sjs-G6" v="41912">30-Sep-14</td>
            <td t="s" id="sjs-H6" v="3-5 months">3-5 months</td>
            <td t="s" id="sjs-I6" v="http://www.indousstf.org/RiseProgram/Home.html">http://www.indousstf.org/RiseProgram/Home.html</td>
            <td t="z" id="sjs-J6"></td>
            <td t="z" id="sjs-K6"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A7" v="Research">Research</td>
            <td t="s" id="sjs-B7" v="Marie Skłodowska-Curie Actions">Marie Skłodowska-Curie Actions</td>
            <td t="s" id="sjs-C7" v="Marie Skłodowska-Curie Individual Fellowships (IF)- Global Fellowships">Marie Skłodowska-Curie Individual Fellowships (IF)- Global Fellowships</td>
            <td t="s" id="sjs-D7" v="Enabling European
researchers to be trained
and acquire new knowledge
in a high-level
research organisation
in a Third Country.">Enabling European
              <br>researchers to be trained
              <br>and acquire new knowledge
              <br>in a high-level
              <br>research organisation
              <br>in a Third Country.
            </td>
            <td t="s" id="sjs-E7" v=" salary, mobility and research costs " xml:space="preserve"> salary, mobility and research costs </td>
            <td t="s" id="sjs-F7" v="PhD 
from EU or Associated
Countries. " xml:space="preserve">PhD
              <br>from EU or Associated
              <br>Countries.
            </td>
            <td t="n" id="sjs-G7" v="41893">11-Sep-14</td>
            <td t="s" id="sjs-H7" v="2-3 years inclusive of the obligatory  return to host organisation in the final year">2-3 years inclusive of the obligatory return to host organisation in the final year</td>
            <td t="s" id="sjs-I7" v="http://ec.europa.eu/research/participants/portal/desktop/en/opportunities/h2020/topics/4052-msca-if-2014-gf.html">http://ec.europa.eu/research/participants/portal/desktop/en/opportunities/h2020/topics/4052-msca-if-2014-gf.html</td>
            <td t="z" id="sjs-J7"></td>
            <td t="z" id="sjs-K7"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A8" v="Fellowship-PDRA">Fellowship-PDRA</td>
            <td t="s" id="sjs-B8" v="The academy of science for developing world (TWAS)">The academy of science for developing world (TWAS)</td>
            <td t="s" id="sjs-C8" v="TWAS-DBT Biotechnology Fellowships for Postdoctoral Research in India">TWAS-DBT Biotechnology Fellowships for Postdoctoral Research in India</td>
            <td t="s" id="sjs-D8" v="needs to move to DBT institutes  offering biotech courses (CDFD, NBRC, NIPGR, NII, NCCS, IBSD, ILS)">needs to move to DBT institutes offering biotech courses (CDFD, NBRC, NIPGR, NII, NCCS, IBSD, ILS)</td>
            <td t="s" id="sjs-E8" v="Stipend + HRA">Stipend + HRA</td>
            <td t="s" id="sjs-F8" v="PhD Biosc/Biotech, citizens of developing countries outside india holding regular research position in home country, Age limit 40 yrs, " xml:space="preserve">PhD Biosc/Biotech, citizens of developing countries outside india holding regular research position in home country, Age limit 40 yrs, </td>
            <td t="s" id="sjs-G8" v="31 Aug each year">31 Aug each year</td>
            <td t="s" id="sjs-H8" v="12-18 months">12-18 months</td>
            <td t="s" id="sjs-I8" v="http://www.twas.org/opportunity/twas-dbt-postdoctoral-fellowship-programme">http://www.twas.org/opportunity/twas-dbt-postdoctoral-fellowship-programme</td>
            <td t="z" id="sjs-J8"></td>
            <td t="z" id="sjs-K8"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A9" v="Travel (research)">Travel (research)</td>
            <td t="s" id="sjs-B9" v="DAAD (Germany)">DAAD (Germany)</td>
            <td t="s" id="sjs-C9" v="Research scholarships for young researchers and recent postdoctoral scholars " xml:space="preserve">Research scholarships for young researchers and recent postdoctoral scholars </td>
            <td t="s" id="sjs-D9" v="To undertake short- term research project at one of the German Universities or Research Institutions " xml:space="preserve">To undertake short- term research project at one of the German Universities or Research Institutions </td>
            <td t="s" id="sjs-E9" v="Stipend of Euro 1000 for PhD scholars and Euro 750.00 for Master degree holders, return airfare, Compulsory health insurance covered by DAAD">Stipend of Euro 1000 for PhD scholars and Euro 750.00 for Master degree holders, return airfare, Compulsory health insurance covered by DAAD</td>
            <td t="s" id="sjs-F9" v="0-6 years since the award of last degree (M.A., M.Sc., M.Phil., etc.) or 0-4 years post PhD currently residing in India with a confirmed acceptance letter from a German Professor">0-6 years since the award of last degree (M.A., M.Sc., M.Phil., etc.) or 0-4 years post PhD currently residing in India with a confirmed acceptance letter from a German Professor</td>
            <td t="n" id="sjs-G9" v="41913">1-Oct-14</td>
            <td t="s" id="sjs-H9" v="1year">1year</td>
            <td t="s" id="sjs-I9" v="http://newdelhi.daad.de/mainFrame/home/postdoc.pdf">http://newdelhi.daad.de/mainFrame/home/postdoc.pdf</td>
            <td t="z" id="sjs-J9"></td>
            <td t="z" id="sjs-K9"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A10" v="Research">Research</td>
            <td t="s" id="sjs-B10" v="Alexander Humboldt Foundation">Alexander Humboldt Foundation</td>
            <td t="s" id="sjs-C10" v="Sofja Kovalevskaja Award (Germany)">Sofja Kovalevskaja Award (Germany)</td>
            <td t="s" id="sjs-D10" v="Research to be selected by self and carried out in chosen host lab in Germany">Research to be selected by self and carried out in chosen host lab in Germany</td>
            <td t="s" id="sjs-E10" v="1.65 million EUR. Gross salary 5,600 EUR per month, equipment, material, personnel, travel expenses">1.65 million EUR. Gross salary 5,600 EUR per month, equipment, material, personnel, travel expenses</td>
            <td t="s" id="sjs-F10" v="PhD with less than 6 years postdoc experience">PhD with less than 6 years postdoc experience</td>
            <td t="n" id="sjs-G10" v="41883">1-Sep-14</td>
            <td t="s" id="sjs-H10" v="5 years">5 years</td>
            <td t="s" id="sjs-I10" v="http://www.humboldt-foundation.de/web/kovalevskaja-award.html">http://www.humboldt-foundation.de/web/kovalevskaja-award.html</td>
            <td t="z" id="sjs-J10"></td>
            <td t="z" id="sjs-K10"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A11" v="Meetings/symposia/workshops">Meetings/symposia/workshops</td>
            <td t="s" id="sjs-B11" v="Indo-French Centre for the Promotion of Advance Research (CEFIPRA)">Indo-French Centre for the Promotion of Advance Research (CEFIPRA)</td>
            <td t="s" id="sjs-C11" v="Grant for organizing Seminars and Workshops">Grant for organizing Seminars and Workshops</td>
            <td t="s" id="sjs-D11" v="seminars/workshops in topics of current relevance and interest to both India and France">seminars/workshops in topics of current relevance and interest to both India and France</td>
            <td t="z" id="sjs-E11"></td>
            <td t="s" id="sjs-F11" v="Needs French collaborator">Needs French collaborator</td>
            <td t="s" id="sjs-G11" v="1-Apr and 1-Oct every year">1-Apr and 1-Oct every year</td>
            <td t="z" id="sjs-H11"></td>
            <td t="s" id="sjs-I11" v="http://www.cefipra.org/section.aspx?catid=831&amp;langid=1">http://www.cefipra.org/section.aspx?catid=831&amp;langid=1</td>
            <td t="z" id="sjs-J11"></td>
            <td t="z" id="sjs-K11"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A12" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B12" v="Company of Biologists">Company of Biologists</td>
            <td t="s" id="sjs-C12" v="Scientific Meetings grants">Scientific Meetings grants</td>
            <td t="s" id="sjs-D12" v="Meetings need to be in areas covered by the 4 journals of  the Company of Biologists">Meetings need to be in areas covered by the 4 journals of the Company of Biologists</td>
            <td t="s" id="sjs-E12" v="maximum upto £ 6000 for support of young scientists, funding for plenary or keynote speakers attending meetings">maximum upto £ 6000 for support of young scientists, funding for plenary or keynote speakers attending meetings</td>
            <td t="z" id="sjs-F12"></td>
            <td t="s" id="sjs-G12" v="10 Jan, 19 Mar, 4 June, 10 Sep">10 Jan, 19 Mar, 4 June, 10 Sep</td>
            <td t="z" id="sjs-H12"></td>
            <td t="s" id="sjs-I12" v="http://www.biologists.com/scientific_grants.html">http://www.biologists.com/scientific_grants.html</td>
            <td t="z" id="sjs-J12"></td>
            <td t="z" id="sjs-K12"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A13" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B13" v="Company of Biologists">Company of Biologists</td>
            <td t="s" id="sjs-C13" v="Small Meetings grants">Small Meetings grants</td>
            <td t="s" id="sjs-D13" v="For organising small local meetings in the areas covered by the 4 journals of the Company of Biologists">For organising small local meetings in the areas covered by the 4 journals of the Company of Biologists</td>
            <td t="s" id="sjs-E13" v="Max funding of upto £ 300  " xml:space="preserve">Max funding of upto £ 300 </td>
            <td t="z" id="sjs-F13"></td>
            <td t="s" id="sjs-G13" v="15 Jan, 5 Apr, 25 Jun, 10 Sep">15 Jan, 5 Apr, 25 Jun, 10 Sep</td>
            <td t="z" id="sjs-H13"></td>
            <td t="s" id="sjs-I13" v="http://www.biologists.com/small_grants.html">http://www.biologists.com/small_grants.html</td>
            <td t="z" id="sjs-J13"></td>
            <td t="z" id="sjs-K13"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A14" v="Research">Research</td>
            <td t="s" id="sjs-B14" v="DST/ Max Planck Society">DST/ Max Planck Society</td>
            <td t="s" id="sjs-C14" v="Max Planck Partner Groups at Indian Partner Institutions">Max Planck Partner Groups at Indian Partner Institutions</td>
            <td t="s" id="sjs-D14" v="Research to be conducted at Indian partner institution (IPI)">Research to be conducted at Indian partner institution (IPI)</td>
            <td t="s" id="sjs-E14" v="20,000 EURO p.a. by MPI, equivalent funding from IGSTC ( Indo-German Science and Technology Center) on behalf of DST via the director of IPI">20,000 EURO p.a. by MPI, equivalent funding from IGSTC ( Indo-German Science and Technology Center) on behalf of DST via the director of IPI</td>
            <td t="s" id="sjs-F14" v="Postdoc (age limit 38 years), with minimum 12 month experience in a Max Planck Institute (MPI)">Postdoc (age limit 38 years), with minimum 12 month experience in a Max Planck Institute (MPI)</td>
            <td t="n" id="sjs-G14" v="41897">15-Sep-14</td>
            <td t="s" id="sjs-H14" v="3-5 years">3-5 years</td>
            <td t="s" id="sjs-I14" v="http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf">http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf</td>
            <td t="z" id="sjs-J14"></td>
            <td t="z" id="sjs-K14"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A15" v="Research">Research</td>
            <td t="s" id="sjs-B15" v="DST/JSPS (Japan)">DST/JSPS (Japan)</td>
            <td t="s" id="sjs-C15" v="Indo-Japan Cooperative Science program (IJCSP)">Indo-Japan Cooperative Science program (IJCSP)</td>
            <td t="s" id="sjs-D15" v="scientific areas supported include Fundamental Sciences: Physical and Chemical Systems, 
 Materials and System Engineering: Man-made Systems,  Natural Systems: Life Sciences and Bioengineering, 
 Astronomy, Space, Earth System and Sciences,  Mathematics and Computational Science
">scientific areas supported include Fundamental Sciences: Physical and Chemical Systems,
              <br> Materials and System Engineering: Man-made Systems, Natural Systems: Life Sciences and Bioengineering,
              <br> Astronomy, Space, Earth System and Sciences, Mathematics and Computational Science
              <br>
            </td>
            <td t="s" id="sjs-E15" v="International return airfare, airport transfers, accommodation, per diem. For joint workshops/ seminars to be organized in India, local travel cost of selected Indian participants and organizing expenses may also be considered for support as per DST norms. Some support for consumables and contingencies may be considered as per DST’s norms.">International return airfare, airport transfers, accommodation, per diem. For joint workshops/ seminars to be organized in India, local travel cost of selected Indian participants and organizing expenses may also be considered for support as per DST norms. Some support for consumables and contingencies may be considered as per DST’s norms.</td>
            <td t="s" id="sjs-F15" v="Indian and Japanese PIs working in regular capacity">Indian and Japanese PIs working in regular capacity</td>
            <td t="n" id="sjs-G15" v="41892">10-Sep-14</td>
            <td t="s" id="sjs-H15" v="2 years " xml:space="preserve">2 years </td>
            <td t="s" id="sjs-I15" v="http://www.dst.gov.in/whats_new/whats_new13/Call%20for%20Proposal%202013-14,%20DST-JSPS%20COP%20-13.pdf">http://www.dst.gov.in/whats_new/whats_new13/Call%20for%20Proposal%202013-14,%20DST-JSPS%20COP%20-13.pdf</td>
            <td t="z" id="sjs-J15"></td>
            <td t="z" id="sjs-K15"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A16" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B16" v="CEFIPRA">CEFIPRA</td>
            <td t="s" id="sjs-C16" v="Indo-French Collaborative research projects">Indo-French Collaborative research projects</td>
            <td t="s" id="sjs-D16" v="Needs French collaborator">Needs French collaborator</td>
            <td t="s" id="sjs-E16" v="travel, DA for visitng scientist, marginal costs of project including equipment, personnel (only postdocs or PhD students) " xml:space="preserve">travel, DA for visitng scientist, marginal costs of project including equipment, personnel (only postdocs or PhD students) </td>
            <td t="s" id="sjs-F16" v="PhD, permanent appointment in a research institute">PhD, permanent appointment in a research institute</td>
            <td t="s" id="sjs-G16" v="1 April and 1 Oct each year">1 April and 1 Oct each year</td>
            <td t="s" id="sjs-H16" v="3 years">3 years</td>
            <td t="s" id="sjs-I16" v="http://www.cefipra.org/section.aspx?catid=819&amp;langid=1">http://www.cefipra.org/section.aspx?catid=819&amp;langid=1</td>
            <td t="z" id="sjs-J16"></td>
            <td t="z" id="sjs-K16"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A17" v="India Partnering Award">India Partnering Award</td>
            <td t="s" id="sjs-B17" v="Promotes scientifc exchange especially of early career scientists between India  and UK  " xml:space="preserve">Promotes scientifc exchange especially of early career scientists between India and UK </td>
            <td t="s" id="sjs-C17" v="£ 30000 for Travel, subsistence and other activities  such as workshops and exchanges  "><span style="font-size:10pt;">£</span><span style="font-size:10pt;"> 30000 for Travel, subsistence and other activities such as workshops and exchanges </span></td>
            <td t="s" id="sjs-D17" v="UK partner needs to be BBSRC funded " xml:space="preserve">UK partner needs to be BBSRC funded </td>
            <td t="n" id="sjs-E17" v="41956">13-Nov-14</td>
            <td t="s" id="sjs-F17" v="4 years">4 years</td>
            <td t="s" id="sjs-G17" v="http://www.bbsrc.ac.uk/funding/internationalfunding/india.aspx">http://www.bbsrc.ac.uk/funding/internationalfunding/india.aspx</td>
            <td t="z" id="sjs-H17"></td>
            <td t="z" id="sjs-I17"></td>
            <td t="z" id="sjs-J17"></td>
            <td t="z" id="sjs-K17"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A18" v="DST-DAAD Project based personnel exchange programme">DST-DAAD Project based personnel exchange programme</td>
            <td t="z" id="sjs-B18"></td>
            <td t="s" id="sjs-C18" v="collaborative travel for upto 4 visits on either side">collaborative travel for upto 4 visits on either side</td>
            <td t="s" id="sjs-D18" v="Needs German collaborator">Needs German collaborator</td>
            <td t="n" id="sjs-E18" v="41623">15-Dec-13</td>
            <td t="s" id="sjs-F18" v="2 years">2 years</td>
            <td t="s" id="sjs-G18" v="http://www.daaddelhi.org/imperia/md/content/newdelhi/ind_sandwich.pdf">http://www.daaddelhi.org/imperia/md/content/newdelhi/ind_sandwich.pdf</td>
            <td t="z" id="sjs-H18"></td>
            <td t="z" id="sjs-I18"></td>
            <td t="z" id="sjs-J18"></td>
            <td t="z" id="sjs-K18"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A19" v="DST-UKIERI Thematic Partnerships">DST-UKIERI Thematic Partnerships</td>
            <td t="s" id="sjs-B19" v="Needs UK collaborator, for themes of Sustainable energy supply, Food production and security, Water supply and security, Health and Disease, Innovation including social impact and intellectual property, Research and Science Policy">Needs UK collaborator, for themes of Sustainable energy supply, Food production and security, Water supply and security, Health and Disease, Innovation including social impact and intellectual property, Research and Science Policy</td>
            <td t="s" id="sjs-C19" v="£60,000-75,000 covers travel, visa fees, local accomodation,limited research consumables">£60,000-75,000 covers travel, visa fees, local accomodation,limited research consumables</td>
            <td t="s" id="sjs-D19" v="PhD, regular appointment in research institute in india or UK  " xml:space="preserve">PhD, regular appointment in research institute in india or UK </td>
            <td t="n" id="sjs-E19" v="41897">15-Sep-14</td>
            <td t="s" id="sjs-F19" v="2 years (4 visits of 15-89 days/each side/year)">2 years (4 visits of 15-89 days/each side/year)</td>
            <td t="s" id="sjs-G19" v="http://www.dst.gov.in/whats_new/whats_new13/DSTUKIERIGuidelines2013.pdf">http://www.dst.gov.in/whats_new/whats_new13/DSTUKIERIGuidelines2013.pdf</td>
            <td t="z" id="sjs-H19"></td>
            <td t="z" id="sjs-I19"></td>
            <td t="z" id="sjs-J19"></td>
            <td t="z" id="sjs-K19"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A20" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B20" v="Matsumae International Foundation (Japan)">Matsumae International Foundation (Japan)</td>
            <td t="s" id="sjs-C20" v="MIF Research Fellowship">MIF Research Fellowship</td>
            <td t="s" id="sjs-D20" v="Needs to work in Japanese institute">Needs to work in Japanese institute</td>
            <td t="s" id="sjs-E20" v="Stipend, Travel, insurance, relocation and living expenses">Stipend, Travel, insurance, relocation and living expenses</td>
            <td t="s" id="sjs-F20" v="PhD, permanent appointment in a research institute">PhD, permanent appointment in a research institute</td>
            <td t="n" id="sjs-G20" v="41882">31-Aug-14</td>
            <td t="s" id="sjs-H20" v="3-6 months">3-6 months</td>
            <td t="s" id="sjs-I20" v="http://www.mars.dti.ne.jp/~mif/">http://www.mars.dti.ne.jp/~mif/</td>
            <td t="z" id="sjs-J20"></td>
            <td t="z" id="sjs-K20"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A21" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B21" v="UGC/UKIERI">UGC/UKIERI</td>
            <td t="s" id="sjs-C21" v="UGC-UKIERI Thematic Partnerships">UGC-UKIERI Thematic Partnerships</td>
            <td t="s" id="sjs-D21" v="Needs UK collaborator,all subjects including  Humanities, Social Sciences, Science and Technology projects supported">Needs UK collaborator,all subjects including Humanities, Social Sciences, Science and Technology projects supported</td>
            <td t="s" id="sjs-E21" v="£60,000 covers travel, visa fees, local accomodation,limited research consumables">£60,000 covers travel, visa fees, local accomodation,limited research consumables</td>
            <td t="s" id="sjs-F21" v="PhD, regular appointment in research institute in india or UK  " xml:space="preserve">PhD, regular appointment in research institute in india or UK </td>
            <td t="n" id="sjs-G21" v="41897">15-Sep-14</td>
            <td t="s" id="sjs-H21" v="2 years (4 visits of 15-89 days/each side/year)">2 years (4 visits of 15-89 days/each side/year)</td>
            <td t="s" id="sjs-I21" v="http://www.ukieri.org/images/xls/UGCUKIERIGUIDELINES2013.doc">http://www.ukieri.org/images/xls/UGCUKIERIGUIDELINES2013.doc</td>
            <td t="z" id="sjs-J21"></td>
            <td t="z" id="sjs-K21"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A22" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B22" v="UGC/UKIERI">UGC/UKIERI</td>
            <td t="s" id="sjs-C22" v="UGC-UKIERI Thematic Partnerships">UGC-UKIERI Thematic Partnerships</td>
            <td t="s" id="sjs-D22" v="Needs UK collaborator,all subjects including  Humanities, Social Sciences, Science and Technology projects supported">Needs UK collaborator,all subjects including Humanities, Social Sciences, Science and Technology projects supported</td>
            <td t="s" id="sjs-E22" v="£60,000 covers travel, visa fees, local accomodation,limited research consumables">£60,000 covers travel, visa fees, local accomodation,limited research consumables</td>
            <td t="s" id="sjs-F22" v="PhD, regular appointment in research institute in india or UK  " xml:space="preserve">PhD, regular appointment in research institute in india or UK </td>
            <td t="n" id="sjs-G22" v="41897">15-Sep-14</td>
            <td t="s" id="sjs-H22" v="2 years (4 visits of 15-89 days/each side/year)">2 years (4 visits of 15-89 days/each side/year)</td>
            <td t="s" id="sjs-I22" v="http://www.ukieri.org/images/xls/UGCUKIERIGUIDELINES2013.doc">http://www.ukieri.org/images/xls/UGCUKIERIGUIDELINES2013.doc</td>
            <td t="z" id="sjs-J22"></td>
            <td t="z" id="sjs-K22"></td>
          </tr>
          <tr>
            <td t="z" id="sjs-A23"></td>
            <td t="s" id="sjs-B23" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-C23" v="BBSRC (UK)">BBSRC (UK)</td>
            <td t="s" id="sjs-D23" v="India Partnering Award">India Partnering Award</td>
            <td t="s" id="sjs-E23" v="Promotes scientifc exchange especially of early career scientists between India  and UK  " xml:space="preserve">Promotes scientifc exchange especially of early career scientists between India and UK </td>
            <td t="s" id="sjs-F23" v="£ 30000 for Travel, subsistence and other activities  such as workshops and exchanges  "><span style="font-size:10pt;">£</span><span style="font-size:10pt;"> 30000 for Travel, subsistence and other activities such as workshops and exchanges </span></td>
            <td t="s" id="sjs-G23" v="UK partner needs to be BBSRC funded " xml:space="preserve">UK partner needs to be BBSRC funded </td>
            <td t="n" id="sjs-H23" v="41956">13-Nov-14</td>
            <td t="s" id="sjs-I23" v="4 years">4 years</td>
            <td t="s" id="sjs-J23" v="http://www.bbsrc.ac.uk/funding/internationalfunding/india.aspx">http://www.bbsrc.ac.uk/funding/internationalfunding/india.aspx</td>
            <td t="z" id="sjs-K23"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A24" v="Research">Research</td>
            <td t="s" id="sjs-B24" v="Alexander Humboldt Foundation">Alexander Humboldt Foundation</td>
            <td t="s" id="sjs-C24" v="Sofja Kovalevskaja Award (Germany)">Sofja Kovalevskaja Award (Germany)</td>
            <td t="s" id="sjs-D24" v="Research to be selected by self and carried out in chosen host lab in Germany">Research to be selected by self and carried out in chosen host lab in Germany</td>
            <td t="s" id="sjs-E24" v="1.65 million EUR. Gross salary 5,600 EUR per month, equipment, material, personnel, travel expenses">1.65 million EUR. Gross salary 5,600 EUR per month, equipment, material, personnel, travel expenses</td>
            <td t="s" id="sjs-F24" v="PhD with less than 6 years postdoc experience">PhD with less than 6 years postdoc experience</td>
            <td t="n" id="sjs-G24" v="41883">1-Sep-14</td>
            <td t="s" id="sjs-H24" v="5 years">5 years</td>
            <td t="s" id="sjs-I24" v="http://www.humboldt-foundation.de/web/kovalevskaja-award.html">http://www.humboldt-foundation.de/web/kovalevskaja-award.html</td>
            <td t="z" id="sjs-J24"></td>
            <td t="z" id="sjs-K24"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A25" v="Fellowship-PDRA">Fellowship-PDRA</td>
            <td t="s" id="sjs-B25" v="DST/ Max-Planck Society">DST/ Max-Planck Society</td>
            <td t="s" id="sjs-C25" v="Max Planck Visiting Fellowships for Indian Scientists " xml:space="preserve">Max Planck Visiting Fellowships for Indian Scientists </td>
            <td t="z" id="sjs-D25"></td>
            <td t="s" id="sjs-E25" v="3000 Euro pa, travel and substinence for visits to Max-Planck Institute for upto 2 months/yr, 1 month visit/yr obligatory">3000 Euro pa, travel and substinence for visits to Max-Planck Institute for upto 2 months/yr, 1 month visit/yr obligatory</td>
            <td t="s" id="sjs-F25" v="PhDs, age limit 35 years, affiliated to an Indian institute">PhDs, age limit 35 years, affiliated to an Indian institute</td>
            <td t="n" id="sjs-G25" v="41897">15-Sep-14</td>
            <td t="s" id="sjs-H25" v="upto 4 years">upto 4 years</td>
            <td t="s" id="sjs-I25" v="http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf">http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf</td>
            <td t="z" id="sjs-J25"></td>
            <td t="z" id="sjs-K25"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A26" v="Research">Research</td>
            <td t="s" id="sjs-B26" v="DST/ Max Planck Society">DST/ Max Planck Society</td>
            <td t="s" id="sjs-C26" v="Max Planck Partner Groups at Indian Partner Institutions">Max Planck Partner Groups at Indian Partner Institutions</td>
            <td t="s" id="sjs-D26" v="Research to be conducted at Indian partner institution (IPI)">Research to be conducted at Indian partner institution (IPI)</td>
            <td t="s" id="sjs-E26" v="20,000 EURO p.a. by MPI, equivalent funding from IGSTC ( Indo-German Science and Technology Center) on behalf of DST via the director of IPI">20,000 EURO p.a. by MPI, equivalent funding from IGSTC ( Indo-German Science and Technology Center) on behalf of DST via the director of IPI</td>
            <td t="s" id="sjs-F26" v="Postdoc (age limit 38 years), with minimum 12 month experience in a Max Planck Institute (MPI)">Postdoc (age limit 38 years), with minimum 12 month experience in a Max Planck Institute (MPI)</td>
            <td t="n" id="sjs-G26" v="41897">15-Sep-14</td>
            <td t="s" id="sjs-H26" v="3-5 years">3-5 years</td>
            <td t="s" id="sjs-I26" v="http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf">http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf</td>
            <td t="z" id="sjs-J26"></td>
            <td t="z" id="sjs-K26"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A27" v="Fellowship-PDRA">Fellowship-PDRA</td>
            <td t="s" id="sjs-B27" v="Life Sciences Research Foundation">Life Sciences Research Foundation</td>
            <td t="s" id="sjs-C27" v="Postdoctoral fellowship program (USA)">Postdoctoral fellowship program (USA)</td>
            <td t="s" id="sjs-D27" v="Indian nationals to work in a non-profit institution in USA">Indian nationals to work in a non-profit institution in USA</td>
            <td t="z" id="sjs-E27"></td>
            <td t="s" id="sjs-F27" v="Fresh PhDs and postdocs">Fresh PhDs and postdocs</td>
            <td t="s" id="sjs-G27" v="1-Oct each year">1-Oct each year</td>
            <td t="s" id="sjs-H27" v="3 years">3 years</td>
            <td t="s" id="sjs-I27" v="http://www.lsrf.org/apply/application-instructions">http://www.lsrf.org/apply/application-instructions</td>
            <td t="z" id="sjs-J27"></td>
            <td t="z" id="sjs-K27"></td>
          </tr>
        </tbody>
      </table>
            </div>
            <br>
            <br>
      <div class="about" style="font-size: 16px;text-align:justify; box-shadow: 1px 1px 3px 3px #888888;padding:20px; height: 500px;overflow: scroll;">
      <table id="customers2">
        <tbody>
          <tr>
            <th t="s" id="sjs-A1" v="Category">Category</th>
            <th t="s" id="sjs-B1" v="Agency">Agency</th>
            <th t="s" id="sjs-C1" v="Scheme">Scheme</th>
            <th t="s" id="sjs-D1" v="Comments">Comments</th>
            <th t="s" id="sjs-E1" v="Budget">Budget</th>
            <th t="s" id="sjs-F1" v="Eligibility">Eligibility</th>
            <th t="s" id="sjs-G1" v="Deadline">Deadline</th>
            <th t="s" id="sjs-H1" v="Duration">Duration</th>
            <th t="s" id="sjs-I1" v="Weblink">Weblink</th>
          </tr>
          <tr>
            <td colspan="2" t="s" id="sjs-A2" v="Personal Support (Tenable in India)">Personal Support (Tenable in India)</td>
            <td t="z" id="sjs-C2"></td>
            <td t="z" id="sjs-D2"></td>
            <td t="z" id="sjs-E2"></td>
            <td t="z" id="sjs-F2"></td>
            <td t="z" id="sjs-G2"></td>
            <td t="z" id="sjs-H2"></td>
            <td t="z" id="sjs-I2"></td>
            <td t="z" id="sjs-J2"></td>
            <td t="z" id="sjs-K2"></td>
            <td t="z" id="sjs-L2"></td>
            <td t="z" id="sjs-M2"></td>
            <td t="z" id="sjs-N2"></td>
            <td t="z" id="sjs-O2"></td>
            <td t="z" id="sjs-P2"></td>
            <td t="z" id="sjs-Q2"></td>
            <td t="z" id="sjs-R2"></td>
            <td t="z" id="sjs-S2"></td>
            <td t="z" id="sjs-T2"></td>
            <td t="z" id="sjs-U2"></td>
            <td t="z" id="sjs-V2"></td>
            <td t="z" id="sjs-W2"></td>
            <td t="z" id="sjs-X2"></td>
            <td t="z" id="sjs-Y2"></td>
            <td t="z" id="sjs-Z2"></td>
            <td t="z" id="sjs-AA2"></td>
            <td t="z" id="sjs-AB2"></td>
            <td t="z" id="sjs-AC2"></td>
            <td t="z" id="sjs-AD2"></td>
            <td t="z" id="sjs-AE2"></td>
            <td t="z" id="sjs-AF2"></td>
            <td t="z" id="sjs-AG2"></td>
            <td t="z" id="sjs-AH2"></td>
            <td t="z" id="sjs-AI2"></td>
            <td t="z" id="sjs-AJ2"></td>
            <td t="z" id="sjs-AK2"></td>
            <td t="z" id="sjs-AL2"></td>
            <td t="z" id="sjs-AM2"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A3" v="Award- Group Leader">Award- Group Leader</td>
            <td t="s" id="sjs-B3" v="British Petroleum (BP)/Bird life International/ Conservation International/Fauna and Flora international/ Wildlife conservation society">British Petroleum (BP)/Bird life International/ Conservation International/Fauna and Flora international/ Wildlife conservation society</td>
            <td t="s" id="sjs-C3" v="Conservation Leadership Programme (CLP)-Kate Stokes Memorial Award">Conservation Leadership Programme (CLP)-Kate Stokes Memorial Award</td>
            <td t="s" id="sjs-D3" v="Awarded on an annual basis to an exceptional Follow-up or Leadership team supported by the CLP. " xml:space="preserve">Awarded on an annual basis to an exceptional Follow-up or Leadership team supported by the CLP. </td>
            <td t="s" id="sjs-E3" v="US $ 40,000">US $ 40,000</td>
            <td t="s" id="sjs-F3" v="All continuation award winners of BP conservation schemes are considered, there is no need to apply.">All continuation award winners of BP conservation schemes are considered, there is no need to apply.</td>
            <td t="s" id="sjs-G3" v="Expected in November">Expected in November</td>
            <td t="s" id="sjs-H3" v="Upto 3 years">Upto 3 years</td>
            <td t="s" id="sjs-I3" v="http://www.conservationleadershipprogramme.org/KateStokesAward.asp">http://www.conservationleadershipprogramme.org/KateStokesAward.asp</td>
            <td t="z" id="sjs-J3"></td>
            <td t="z" id="sjs-K3"></td>
            <td t="z" id="sjs-L3"></td>
            <td t="z" id="sjs-M3"></td>
            <td t="z" id="sjs-N3"></td>
            <td t="z" id="sjs-O3"></td>
            <td t="z" id="sjs-P3"></td>
            <td t="z" id="sjs-Q3"></td>
            <td t="z" id="sjs-R3"></td>
            <td t="z" id="sjs-S3"></td>
            <td t="z" id="sjs-T3"></td>
            <td t="z" id="sjs-U3"></td>
            <td t="z" id="sjs-V3"></td>
            <td t="z" id="sjs-W3"></td>
            <td t="z" id="sjs-X3"></td>
            <td t="z" id="sjs-Y3"></td>
            <td t="z" id="sjs-Z3"></td>
            <td t="z" id="sjs-AA3"></td>
            <td t="z" id="sjs-AB3"></td>
            <td t="z" id="sjs-AC3"></td>
            <td t="z" id="sjs-AD3"></td>
            <td t="z" id="sjs-AE3"></td>
            <td t="z" id="sjs-AF3"></td>
            <td t="z" id="sjs-AG3"></td>
            <td t="z" id="sjs-AH3"></td>
            <td t="z" id="sjs-AI3"></td>
            <td t="z" id="sjs-AJ3"></td>
            <td t="z" id="sjs-AK3"></td>
            <td t="z" id="sjs-AL3"></td>
            <td t="z" id="sjs-AM3"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A4" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B4" v="DBT">DBT</td>
            <td t="s" id="sjs-C4" v="Tata Innovation Fellowship">Tata Innovation Fellowship</td>
            <td t="s" id="sjs-D4" v="Rewards interdisciplinary work with major emphasis on
innovation  and translational research with a potential towards commercialization">Rewards interdisciplinary work with major emphasis on
              <br>innovation and translational research with a potential towards commercialization
            </td>
            <td t="s" id="sjs-E4" v="salary incentive of 25000 pm, 6 lakh contingency " xml:space="preserve">salary incentive of 25000 pm, 6 lakh contingency </td>
            <td t="s" id="sjs-F4" v="Age less than 55 years. employment at a research institute.Applicant to have spent at least 5 yrs in India. " xml:space="preserve">Age less than 55 years. employment at a research institute.Applicant to have spent at least 5 yrs in India. </td>
            <td t="s" id="sjs-G4" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H4" v="3 years with possibility of 2 years extension">3 years with possibility of 2 years extension</td>
            <td t="s" id="sjs-I4" v="http://www.dbtindia.nic.in/wp-content/uploads/Advt.-2015-16.pdf">http://www.dbtindia.nic.in/wp-content/uploads/Advt.-2015-16.pdf</td>
            <td t="z" id="sjs-J4"></td>
            <td t="z" id="sjs-K4"></td>
            <td t="z" id="sjs-L4"></td>
            <td t="z" id="sjs-M4"></td>
            <td t="z" id="sjs-N4"></td>
            <td t="z" id="sjs-O4"></td>
            <td t="z" id="sjs-P4"></td>
            <td t="z" id="sjs-Q4"></td>
            <td t="z" id="sjs-R4"></td>
            <td t="z" id="sjs-S4"></td>
            <td t="z" id="sjs-T4"></td>
            <td t="z" id="sjs-U4"></td>
            <td t="z" id="sjs-V4"></td>
            <td t="z" id="sjs-W4"></td>
            <td t="z" id="sjs-X4"></td>
            <td t="z" id="sjs-Y4"></td>
            <td t="z" id="sjs-Z4"></td>
            <td t="z" id="sjs-AA4"></td>
            <td t="z" id="sjs-AB4"></td>
            <td t="z" id="sjs-AC4"></td>
            <td t="z" id="sjs-AD4"></td>
            <td t="z" id="sjs-AE4"></td>
            <td t="z" id="sjs-AF4"></td>
            <td t="z" id="sjs-AG4"></td>
            <td t="z" id="sjs-AH4"></td>
            <td t="z" id="sjs-AI4"></td>
            <td t="z" id="sjs-AJ4"></td>
            <td t="z" id="sjs-AK4"></td>
            <td t="z" id="sjs-AL4"></td>
            <td t="z" id="sjs-AM4"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A5" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B5" v="DBT">DBT</td>
            <td t="s" id="sjs-C5" v="Ramalingaswamy Re-entry Fellowship">Ramalingaswamy Re-entry Fellowship</td>
            <td t="s" id="sjs-D5" v="Instituted to encourage return of scientists to India. Needs nomination from host institute.">Instituted to encourage return of scientists to India. Needs nomination from host institute.</td>
            <td t="s" id="sjs-E5" v="Rs 85,000 for salary + Rs 7500 HRA + Rs 10 lakh per annum (1yr), 7.50 lakh (2nd yr), 5lakh (3years) for conferences and other expenses">Rs 85,000 for salary + Rs 7500 HRA + Rs 10 lakh per annum (1yr), 7.50 lakh (2nd yr), 5lakh (3years) for conferences and other expenses</td>
            <td t="s" id="sjs-F5" v="Age less than 55 years. At least 3 years of post-doctoral research  experience with last two  years from an overseas 
laboratory.">Age less than 55 years. At least 3 years of post-doctoral research experience with last two years from an overseas
              <br>laboratory.
            </td>
            <td t="s" id="sjs-G5" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H5" v="5 years">5 years</td>
            <td t="s" id="sjs-I5" v="http://www.dbtindia.nic.in/wp-content/uploads/Ramalingaswami_fellowship_advt.pdf">http://www.dbtindia.nic.in/wp-content/uploads/Ramalingaswami_fellowship_advt.pdf</td>
            <td t="z" id="sjs-J5"></td>
            <td t="z" id="sjs-K5"></td>
            <td t="z" id="sjs-L5"></td>
            <td t="z" id="sjs-M5"></td>
            <td t="z" id="sjs-N5"></td>
            <td t="z" id="sjs-O5"></td>
            <td t="z" id="sjs-P5"></td>
            <td t="z" id="sjs-Q5"></td>
            <td t="z" id="sjs-R5"></td>
            <td t="z" id="sjs-S5"></td>
            <td t="z" id="sjs-T5"></td>
            <td t="z" id="sjs-U5"></td>
            <td t="z" id="sjs-V5"></td>
            <td t="z" id="sjs-W5"></td>
            <td t="z" id="sjs-X5"></td>
            <td t="z" id="sjs-Y5"></td>
            <td t="z" id="sjs-Z5"></td>
            <td t="z" id="sjs-AA5"></td>
            <td t="z" id="sjs-AB5"></td>
            <td t="z" id="sjs-AC5"></td>
            <td t="z" id="sjs-AD5"></td>
            <td t="z" id="sjs-AE5"></td>
            <td t="z" id="sjs-AF5"></td>
            <td t="z" id="sjs-AG5"></td>
            <td t="z" id="sjs-AH5"></td>
            <td t="z" id="sjs-AI5"></td>
            <td t="z" id="sjs-AJ5"></td>
            <td t="z" id="sjs-AK5"></td>
            <td t="z" id="sjs-AL5"></td>
            <td t="z" id="sjs-AM5"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A6" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B6" v="DST-SERB">DST-SERB</td>
            <td t="s" id="sjs-C6" v="Ramanujan Fellowship">Ramanujan Fellowship</td>
            <td t="s" id="sjs-D6" v="Instituted to encourage return of scientists to India. Needs nomination from host institute.">Instituted to encourage return of scientists to India. Needs nomination from host institute.</td>
            <td t="s" id="sjs-E6" v="Rs 85,000 for salary + Rs 7 lakh per annum for conferences and other expenses">Rs 85,000 for salary + Rs 7 lakh per annum for conferences and other expenses</td>
            <td t="s" id="sjs-F6" v="PhD/MD with exellent proven tract-record. Age less than 55 years. " xml:space="preserve">PhD/MD with exellent proven tract-record. Age less than 55 years. </td>
            <td t="s" id="sjs-G6" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H6" v="5 years">5 years</td>
            <td t="s" id="sjs-I6" v="http://serb.gov.in/formats.php#ramanujan">http://serb.gov.in/formats.php#ramanujan</td>
            <td t="z" id="sjs-J6"></td>
            <td t="z" id="sjs-K6"></td>
            <td t="z" id="sjs-L6"></td>
            <td t="z" id="sjs-M6"></td>
            <td t="z" id="sjs-N6"></td>
            <td t="z" id="sjs-O6"></td>
            <td t="z" id="sjs-P6"></td>
            <td t="z" id="sjs-Q6"></td>
            <td t="z" id="sjs-R6"></td>
            <td t="z" id="sjs-S6"></td>
            <td t="z" id="sjs-T6"></td>
            <td t="z" id="sjs-U6"></td>
            <td t="z" id="sjs-V6"></td>
            <td t="z" id="sjs-W6"></td>
            <td t="z" id="sjs-X6"></td>
            <td t="z" id="sjs-Y6"></td>
            <td t="z" id="sjs-Z6"></td>
            <td t="z" id="sjs-AA6"></td>
            <td t="z" id="sjs-AB6"></td>
            <td t="z" id="sjs-AC6"></td>
            <td t="z" id="sjs-AD6"></td>
            <td t="z" id="sjs-AE6"></td>
            <td t="z" id="sjs-AF6"></td>
            <td t="z" id="sjs-AG6"></td>
            <td t="z" id="sjs-AH6"></td>
            <td t="z" id="sjs-AI6"></td>
            <td t="z" id="sjs-AJ6"></td>
            <td t="z" id="sjs-AK6"></td>
            <td t="z" id="sjs-AL6"></td>
            <td t="z" id="sjs-AM6"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A7" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B7" v="DST-SERB">DST-SERB</td>
            <td t="s" id="sjs-C7" v="J C Bose national Fellowships " xml:space="preserve">J C Bose national Fellowships </td>
            <td t="z" id="sjs-D7"></td>
            <td t="s" id="sjs-E7" v="Rs. 25,000 per month in addition to salary drawn  from parent institution+ 10 lakh per annum for conferences and other expenses. " xml:space="preserve">Rs. 25,000 per month in addition to salary drawn from parent institution+ 10 lakh per annum for conferences and other expenses. </td>
            <td t="s" id="sjs-F7" v="PhD, less than 68 years. Needs to be nominated by the institute">PhD, less than 68 years. Needs to be nominated by the institute</td>
            <td t="s" id="sjs-G7" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H7" v="5 years">5 years</td>
            <td t="s" id="sjs-I7" v="http://serb.gov.in/formats.php#jc">http://serb.gov.in/formats.php#jc</td>
            <td t="z" id="sjs-J7"></td>
            <td t="z" id="sjs-K7"></td>
            <td t="z" id="sjs-L7"></td>
            <td t="z" id="sjs-M7"></td>
            <td t="z" id="sjs-N7"></td>
            <td t="z" id="sjs-O7"></td>
            <td t="z" id="sjs-P7"></td>
            <td t="z" id="sjs-Q7"></td>
            <td t="z" id="sjs-R7"></td>
            <td t="z" id="sjs-S7"></td>
            <td t="z" id="sjs-T7"></td>
            <td t="z" id="sjs-U7"></td>
            <td t="z" id="sjs-V7"></td>
            <td t="z" id="sjs-W7"></td>
            <td t="z" id="sjs-X7"></td>
            <td t="z" id="sjs-Y7"></td>
            <td t="z" id="sjs-Z7"></td>
            <td t="z" id="sjs-AA7"></td>
            <td t="z" id="sjs-AB7"></td>
            <td t="z" id="sjs-AC7"></td>
            <td t="z" id="sjs-AD7"></td>
            <td t="z" id="sjs-AE7"></td>
            <td t="z" id="sjs-AF7"></td>
            <td t="z" id="sjs-AG7"></td>
            <td t="z" id="sjs-AH7"></td>
            <td t="z" id="sjs-AI7"></td>
            <td t="z" id="sjs-AJ7"></td>
            <td t="z" id="sjs-AK7"></td>
            <td t="z" id="sjs-AL7"></td>
            <td t="z" id="sjs-AM7"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A8" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B8" v="DST">DST</td>
            <td t="s" id="sjs-C8" v="Swarnajayanti Fellowships">Swarnajayanti Fellowships</td>
            <td t="z" id="sjs-D8"></td>
            <td t="s" id="sjs-E8" v="Rs. 25,000 per month in addition to salary drawn  from parent institution+ grants for equipment,consumable, contingencies,travel">Rs. 25,000 per month in addition to salary drawn from parent institution+ grants for equipment,consumable, contingencies,travel</td>
            <td t="s" id="sjs-F8" v="PhD, Age 30-40 years">PhD, Age 30-40 years</td>
            <td t="s" id="sjs-G8" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H8" v="5 years">5 years</td>
            <td t="s" id="sjs-I8" v="http://www.dst.gov.in/scientific-programmes/scientific-engineering-research/human-resource-development-and-nurturing-young-talent-swarnajayanti-fellowships-scheme">http://www.dst.gov.in/scientific-programmes/scientific-engineering-research/human-resource-development-and-nurturing-young-talent-swarnajayanti-fellowships-scheme</td>
            <td t="z" id="sjs-J8"></td>
            <td t="z" id="sjs-K8"></td>
            <td t="z" id="sjs-L8"></td>
            <td t="z" id="sjs-M8"></td>
            <td t="z" id="sjs-N8"></td>
            <td t="z" id="sjs-O8"></td>
            <td t="z" id="sjs-P8"></td>
            <td t="z" id="sjs-Q8"></td>
            <td t="z" id="sjs-R8"></td>
            <td t="z" id="sjs-S8"></td>
            <td t="z" id="sjs-T8"></td>
            <td t="z" id="sjs-U8"></td>
            <td t="z" id="sjs-V8"></td>
            <td t="z" id="sjs-W8"></td>
            <td t="z" id="sjs-X8"></td>
            <td t="z" id="sjs-Y8"></td>
            <td t="z" id="sjs-Z8"></td>
            <td t="z" id="sjs-AA8"></td>
            <td t="z" id="sjs-AB8"></td>
            <td t="z" id="sjs-AC8"></td>
            <td t="z" id="sjs-AD8"></td>
            <td t="z" id="sjs-AE8"></td>
            <td t="z" id="sjs-AF8"></td>
            <td t="z" id="sjs-AG8"></td>
            <td t="z" id="sjs-AH8"></td>
            <td t="z" id="sjs-AI8"></td>
            <td t="z" id="sjs-AJ8"></td>
            <td t="z" id="sjs-AK8"></td>
            <td t="z" id="sjs-AL8"></td>
            <td t="z" id="sjs-AM8"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A9" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B9" v="International Brain research Organization (IBRO)">International Brain research Organization (IBRO)</td>
            <td t="s" id="sjs-C9" v="Return home Fellowship">Return home Fellowship</td>
            <td t="z" id="sjs-D9"></td>
            <td t="s" id="sjs-E9" v="20,000 Euros">20,000 Euros</td>
            <td t="s" id="sjs-F9" v="Scientists who are developing a successful basic/clinical research career in a developed country and wish to return to their country of origin or to a less developed country " xml:space="preserve">Scientists who are developing a successful basic/clinical research career in a developed country and wish to return to their country of origin or to a less developed country </td>
            <td t="s" id="sjs-G9" v="1 Sep each year">1 Sep each year</td>
            <td t="z" id="sjs-H9"></td>
            <td t="s" id="sjs-I9" v="http://ibro.info/professional-development/funding-programmes/return-home-fellowships/">http://ibro.info/professional-development/funding-programmes/return-home-fellowships/</td>
            <td t="z" id="sjs-J9"></td>
            <td t="z" id="sjs-K9"></td>
            <td t="z" id="sjs-L9"></td>
            <td t="z" id="sjs-M9"></td>
            <td t="z" id="sjs-N9"></td>
            <td t="z" id="sjs-O9"></td>
            <td t="z" id="sjs-P9"></td>
            <td t="z" id="sjs-Q9"></td>
            <td t="z" id="sjs-R9"></td>
            <td t="z" id="sjs-S9"></td>
            <td t="z" id="sjs-T9"></td>
            <td t="z" id="sjs-U9"></td>
            <td t="z" id="sjs-V9"></td>
            <td t="z" id="sjs-W9"></td>
            <td t="z" id="sjs-X9"></td>
            <td t="z" id="sjs-Y9"></td>
            <td t="z" id="sjs-Z9"></td>
            <td t="z" id="sjs-AA9"></td>
            <td t="z" id="sjs-AB9"></td>
            <td t="z" id="sjs-AC9"></td>
            <td t="z" id="sjs-AD9"></td>
            <td t="z" id="sjs-AE9"></td>
            <td t="z" id="sjs-AF9"></td>
            <td t="z" id="sjs-AG9"></td>
            <td t="z" id="sjs-AH9"></td>
            <td t="z" id="sjs-AI9"></td>
            <td t="z" id="sjs-AJ9"></td>
            <td t="z" id="sjs-AK9"></td>
            <td t="z" id="sjs-AL9"></td>
            <td t="z" id="sjs-AM9"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A10" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B10" v="Lady Tata Memorial Trust">Lady Tata Memorial Trust</td>
            <td t="s" id="sjs-C10" v="Young Researcher Award">Young Researcher Award</td>
            <td t="s" id="sjs-D10" v="Annual Award">Annual Award</td>
            <td t="s" id="sjs-E10" v="25000 per month salary incentive, 5 lakh per annum for research, international and national travel.">25000 per month salary incentive, 5 lakh per annum for research, international and national travel.</td>
            <td t="s" id="sjs-F10" v="PhD with regular position in research inst/univ. Age less than 40 years">PhD with regular position in research inst/univ. Age less than 40 years</td>
            <td t="s" id="sjs-G10" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H10" v="3+2 years based on review of progress">3+2 years based on review of progress</td>
            <td t="s" id="sjs-I10" v="http://www.ladytatatrust.org/StaticPageIndia/Awards/8">http://www.ladytatatrust.org/StaticPageIndia/Awards/8</td>
            <td t="z" id="sjs-J10"></td>
            <td t="z" id="sjs-K10"></td>
            <td t="z" id="sjs-L10"></td>
            <td t="z" id="sjs-M10"></td>
            <td t="z" id="sjs-N10"></td>
            <td t="z" id="sjs-O10"></td>
            <td t="z" id="sjs-P10"></td>
            <td t="z" id="sjs-Q10"></td>
            <td t="z" id="sjs-R10"></td>
            <td t="z" id="sjs-S10"></td>
            <td t="z" id="sjs-T10"></td>
            <td t="z" id="sjs-U10"></td>
            <td t="z" id="sjs-V10"></td>
            <td t="z" id="sjs-W10"></td>
            <td t="z" id="sjs-X10"></td>
            <td t="z" id="sjs-Y10"></td>
            <td t="z" id="sjs-Z10"></td>
            <td t="z" id="sjs-AA10"></td>
            <td t="z" id="sjs-AB10"></td>
            <td t="z" id="sjs-AC10"></td>
            <td t="z" id="sjs-AD10"></td>
            <td t="z" id="sjs-AE10"></td>
            <td t="z" id="sjs-AF10"></td>
            <td t="z" id="sjs-AG10"></td>
            <td t="z" id="sjs-AH10"></td>
            <td t="z" id="sjs-AI10"></td>
            <td t="z" id="sjs-AJ10"></td>
            <td t="z" id="sjs-AK10"></td>
            <td t="z" id="sjs-AL10"></td>
            <td t="z" id="sjs-AM10"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A11" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B11" v="Wellcome Trust-DBT India Alliance">Wellcome Trust-DBT India Alliance</td>
            <td t="s" id="sjs-C11" v="Margdarshi Fellowship">Margdarshi Fellowship</td>
            <td t="s" id="sjs-D11" v="for host institutions that are keen to improve their scientific breadth and for scientific leaders who already lead their own research group, and now wish to utilize their experience in developing new research platforms">for host institutions that are keen to improve their scientific breadth and for scientific leaders who already lead their own research group, and now wish to utilize their experience in developing new research platforms</td>
            <td t="s" id="sjs-E11" v="Salary, research costs, personnel costs, travel, over heads">Salary, research costs, personnel costs, travel, over heads</td>
            <td t="s" id="sjs-F11" v="Strong scientific leadership with more than 10 years experience running an independent lab">Strong scientific leadership with more than 10 years experience running an independent lab</td>
            <td t="s" id="sjs-G11" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H11" v="5 years">5 years</td>
            <td t="s" id="sjs-I11" v="http://www.wellcomedbt.org/fellowshiptype/margdarshi-fellowships">http://www.wellcomedbt.org/fellowshiptype/margdarshi-fellowships</td>
            <td t="z" id="sjs-J11"></td>
            <td t="z" id="sjs-K11"></td>
            <td t="z" id="sjs-L11"></td>
            <td t="z" id="sjs-M11"></td>
            <td t="z" id="sjs-N11"></td>
            <td t="z" id="sjs-O11"></td>
            <td t="z" id="sjs-P11"></td>
            <td t="z" id="sjs-Q11"></td>
            <td t="z" id="sjs-R11"></td>
            <td t="z" id="sjs-S11"></td>
            <td t="z" id="sjs-T11"></td>
            <td t="z" id="sjs-U11"></td>
            <td t="z" id="sjs-V11"></td>
            <td t="z" id="sjs-W11"></td>
            <td t="z" id="sjs-X11"></td>
            <td t="z" id="sjs-Y11"></td>
            <td t="z" id="sjs-Z11"></td>
            <td t="z" id="sjs-AA11"></td>
            <td t="z" id="sjs-AB11"></td>
            <td t="z" id="sjs-AC11"></td>
            <td t="z" id="sjs-AD11"></td>
            <td t="z" id="sjs-AE11"></td>
            <td t="z" id="sjs-AF11"></td>
            <td t="z" id="sjs-AG11"></td>
            <td t="z" id="sjs-AH11"></td>
            <td t="z" id="sjs-AI11"></td>
            <td t="z" id="sjs-AJ11"></td>
            <td t="z" id="sjs-AK11"></td>
            <td t="z" id="sjs-AL11"></td>
            <td t="z" id="sjs-AM11"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A12" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B12" v="Wellcome Trust-DBT India Alliance">Wellcome Trust-DBT India Alliance</td>
            <td t="s" id="sjs-C12" v="Intermediate Research Fellowship">Intermediate Research Fellowship</td>
            <td t="z" id="sjs-D12"></td>
            <td t="s" id="sjs-E12" v="Salary, research expenses, personnel, 1 year collab travel">Salary, research expenses, personnel, 1 year collab travel</td>
            <td t="s" id="sjs-F12" v="4-7  years PD experience">4-7 years PD experience</td>
            <td t="s" id="sjs-G12" v="16th Aug, 2016 " xml:space="preserve">16th Aug, 2016 </td>
            <td t="s" id="sjs-H12" v="5 years">5 years</td>
            <td t="s" id="sjs-I12" v="http://www.wellcomedbt.org/fellowships/intermediate-fellowships">http://www.wellcomedbt.org/fellowships/intermediate-fellowships</td>
            <td t="z" id="sjs-J12"></td>
            <td t="z" id="sjs-K12"></td>
            <td t="z" id="sjs-L12"></td>
            <td t="z" id="sjs-M12"></td>
            <td t="z" id="sjs-N12"></td>
            <td t="z" id="sjs-O12"></td>
            <td t="z" id="sjs-P12"></td>
            <td t="z" id="sjs-Q12"></td>
            <td t="z" id="sjs-R12"></td>
            <td t="z" id="sjs-S12"></td>
            <td t="z" id="sjs-T12"></td>
            <td t="z" id="sjs-U12"></td>
            <td t="z" id="sjs-V12"></td>
            <td t="z" id="sjs-W12"></td>
            <td t="z" id="sjs-X12"></td>
            <td t="z" id="sjs-Y12"></td>
            <td t="z" id="sjs-Z12"></td>
            <td t="z" id="sjs-AA12"></td>
            <td t="z" id="sjs-AB12"></td>
            <td t="z" id="sjs-AC12"></td>
            <td t="z" id="sjs-AD12"></td>
            <td t="z" id="sjs-AE12"></td>
            <td t="z" id="sjs-AF12"></td>
            <td t="z" id="sjs-AG12"></td>
            <td t="z" id="sjs-AH12"></td>
            <td t="z" id="sjs-AI12"></td>
            <td t="z" id="sjs-AJ12"></td>
            <td t="z" id="sjs-AK12"></td>
            <td t="z" id="sjs-AL12"></td>
            <td t="z" id="sjs-AM12"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A13" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B13" v="Wellcome Trust-DBT India Alliance">Wellcome Trust-DBT India Alliance</td>
            <td t="s" id="sjs-C13" v="Senior Research Fellowship">Senior Research Fellowship</td>
            <td t="z" id="sjs-D13"></td>
            <td t="s" id="sjs-E13" v="Salary, research costs, personnel, collab travel">Salary, research costs, personnel, collab travel</td>
            <td t="s" id="sjs-F13" v="7-15 years PD experience">7-15 years PD experience</td>
            <td t="s" id="sjs-G13" v="16th Aug, 2016 " xml:space="preserve">16th Aug, 2016 </td>
            <td t="s" id="sjs-H13" v="5 years">5 years</td>
            <td t="s" id="sjs-I13" v="http://www.wellcomedbt.org/fellowships/senior-fellowships">http://www.wellcomedbt.org/fellowships/senior-fellowships</td>
            <td t="z" id="sjs-J13"></td>
            <td t="z" id="sjs-K13"></td>
            <td t="z" id="sjs-L13"></td>
            <td t="z" id="sjs-M13"></td>
            <td t="z" id="sjs-N13"></td>
            <td t="z" id="sjs-O13"></td>
            <td t="z" id="sjs-P13"></td>
            <td t="z" id="sjs-Q13"></td>
            <td t="z" id="sjs-R13"></td>
            <td t="z" id="sjs-S13"></td>
            <td t="z" id="sjs-T13"></td>
            <td t="z" id="sjs-U13"></td>
            <td t="z" id="sjs-V13"></td>
            <td t="z" id="sjs-W13"></td>
            <td t="z" id="sjs-X13"></td>
            <td t="z" id="sjs-Y13"></td>
            <td t="z" id="sjs-Z13"></td>
            <td t="z" id="sjs-AA13"></td>
            <td t="z" id="sjs-AB13"></td>
            <td t="z" id="sjs-AC13"></td>
            <td t="z" id="sjs-AD13"></td>
            <td t="z" id="sjs-AE13"></td>
            <td t="z" id="sjs-AF13"></td>
            <td t="z" id="sjs-AG13"></td>
            <td t="z" id="sjs-AH13"></td>
            <td t="z" id="sjs-AI13"></td>
            <td t="z" id="sjs-AJ13"></td>
            <td t="z" id="sjs-AK13"></td>
            <td t="z" id="sjs-AL13"></td>
            <td t="z" id="sjs-AM13"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A14" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B14" v="Wellcome Trust-DBT India Alliance">Wellcome Trust-DBT India Alliance</td>
            <td t="s" id="sjs-C14" v="Intermediate Fellowships for Clinicians and Public Health Researchers in&nbsp;India">Intermediate Fellowships for Clinicians and Public Health Researchers in&nbsp;India</td>
            <td t="s" id="sjs-D14" v="supports clinician scientists and public health researchers to establish an independent research program in an academic institution in India. Clinicians and Public Health Research Fellows may use this opportunity to do a PhD on the India Alliance Fellowship project. " xml:space="preserve">supports clinician scientists and public health researchers to establish an independent research program in an academic institution in India. Clinicians and Public Health Research Fellows may use this opportunity to do a PhD on the India Alliance Fellowship project. </td>
            <td t="s" id="sjs-E14" v="Salary, research expenses, personnel, 1 year collab travel">Salary, research expenses, personnel, 1 year collab travel</td>
            <td t="s" id="sjs-F14" v="four to seven years of post-MD/post-MS/post-MPH/post-PhD or equivalent research experience">four to seven years of post-MD/post-MS/post-MPH/post-PhD or equivalent research experience</td>
            <td t="s" id="sjs-G14" v="To be announced in Jan 2017">To be announced in Jan 2017</td>
            <td t="s" id="sjs-H14" v="5 years">5 years</td>
            <td t="s" id="sjs-I14" v="http://www.wellcomedbt.org/fellowships/cph-intermediate-fellowships">http://www.wellcomedbt.org/fellowships/cph-intermediate-fellowships</td>
            <td t="z" id="sjs-J14"></td>
            <td t="z" id="sjs-K14"></td>
            <td t="z" id="sjs-L14"></td>
            <td t="z" id="sjs-M14"></td>
            <td t="z" id="sjs-N14"></td>
            <td t="z" id="sjs-O14"></td>
            <td t="z" id="sjs-P14"></td>
            <td t="z" id="sjs-Q14"></td>
            <td t="z" id="sjs-R14"></td>
            <td t="z" id="sjs-S14"></td>
            <td t="z" id="sjs-T14"></td>
            <td t="z" id="sjs-U14"></td>
            <td t="z" id="sjs-V14"></td>
            <td t="z" id="sjs-W14"></td>
            <td t="z" id="sjs-X14"></td>
            <td t="z" id="sjs-Y14"></td>
            <td t="z" id="sjs-Z14"></td>
            <td t="z" id="sjs-AA14"></td>
            <td t="z" id="sjs-AB14"></td>
            <td t="z" id="sjs-AC14"></td>
            <td t="z" id="sjs-AD14"></td>
            <td t="z" id="sjs-AE14"></td>
            <td t="z" id="sjs-AF14"></td>
            <td t="z" id="sjs-AG14"></td>
            <td t="z" id="sjs-AH14"></td>
            <td t="z" id="sjs-AI14"></td>
            <td t="z" id="sjs-AJ14"></td>
            <td t="z" id="sjs-AK14"></td>
            <td t="z" id="sjs-AL14"></td>
            <td t="z" id="sjs-AM14"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A15" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B15" v="Wellcome Trust-DBT India Alliance">Wellcome Trust-DBT India Alliance</td>
            <td t="s" id="sjs-C15" v="Senior Fellowships for Clinicians and Public Health Researchers in&nbsp;India">Senior Fellowships for Clinicians and Public Health Researchers in&nbsp;India</td>
            <td t="s" id="sjs-D15" v="supports outstanding clinician scientists/public health researchers, who have demonstrated their ability to lead an independent research project/ group and want to expand it to perform challenging research at a host institution in India">supports outstanding clinician scientists/public health researchers, who have demonstrated their ability to lead an independent research project/ group and want to expand it to perform challenging research at a host institution in India</td>
            <td t="s" id="sjs-E15" v="Salary, research costs, personnel, collab travel">Salary, research costs, personnel, collab travel</td>
            <td t="s" id="sjs-F15" v="seven to fifteen years of post-MD/post-MS/post-MPH/post-PhD or equivalent clinical research experience.">seven to fifteen years of post-MD/post-MS/post-MPH/post-PhD or equivalent clinical research experience.</td>
            <td t="s" id="sjs-G15" v="To be announced in Jan 2017">To be announced in Jan 2017</td>
            <td t="s" id="sjs-H15" v="5 years">5 years</td>
            <td t="s" id="sjs-I15" v="http://www.wellcomedbt.org/fellowships/cph-senior-fellowships">http://www.wellcomedbt.org/fellowships/cph-senior-fellowships</td>
            <td t="z" id="sjs-J15"></td>
            <td t="z" id="sjs-K15"></td>
            <td t="z" id="sjs-L15"></td>
            <td t="z" id="sjs-M15"></td>
            <td t="z" id="sjs-N15"></td>
            <td t="z" id="sjs-O15"></td>
            <td t="z" id="sjs-P15"></td>
            <td t="z" id="sjs-Q15"></td>
            <td t="z" id="sjs-R15"></td>
            <td t="z" id="sjs-S15"></td>
            <td t="z" id="sjs-T15"></td>
            <td t="z" id="sjs-U15"></td>
            <td t="z" id="sjs-V15"></td>
            <td t="z" id="sjs-W15"></td>
            <td t="z" id="sjs-X15"></td>
            <td t="z" id="sjs-Y15"></td>
            <td t="z" id="sjs-Z15"></td>
            <td t="z" id="sjs-AA15"></td>
            <td t="z" id="sjs-AB15"></td>
            <td t="z" id="sjs-AC15"></td>
            <td t="z" id="sjs-AD15"></td>
            <td t="z" id="sjs-AE15"></td>
            <td t="z" id="sjs-AF15"></td>
            <td t="z" id="sjs-AG15"></td>
            <td t="z" id="sjs-AH15"></td>
            <td t="z" id="sjs-AI15"></td>
            <td t="z" id="sjs-AJ15"></td>
            <td t="z" id="sjs-AK15"></td>
            <td t="z" id="sjs-AL15"></td>
            <td t="z" id="sjs-AM15"></td>
          </tr>
          <tr>
            <td colspan="2" t="s" id="sjs-A16" v="Personal Support (tenable abroad)">Personal Support (tenable abroad)</td>
            <td t="z" id="sjs-C16"></td>
            <td t="z" id="sjs-D16"></td>
            <td t="z" id="sjs-E16"></td>
            <td t="z" id="sjs-F16"></td>
            <td t="z" id="sjs-G16"></td>
            <td t="z" id="sjs-H16"></td>
            <td t="z" id="sjs-I16"></td>
            <td t="z" id="sjs-J16"></td>
            <td t="z" id="sjs-K16"></td>
            <td t="z" id="sjs-L16"></td>
            <td t="z" id="sjs-M16"></td>
            <td t="z" id="sjs-N16"></td>
            <td t="z" id="sjs-O16"></td>
            <td t="z" id="sjs-P16"></td>
            <td t="z" id="sjs-Q16"></td>
            <td t="z" id="sjs-R16"></td>
            <td t="z" id="sjs-S16"></td>
            <td t="z" id="sjs-T16"></td>
            <td t="z" id="sjs-U16"></td>
            <td t="z" id="sjs-V16"></td>
            <td t="z" id="sjs-W16"></td>
            <td t="z" id="sjs-X16"></td>
            <td t="z" id="sjs-Y16"></td>
            <td t="z" id="sjs-Z16"></td>
            <td t="z" id="sjs-AA16"></td>
            <td t="z" id="sjs-AB16"></td>
            <td t="z" id="sjs-AC16"></td>
            <td t="z" id="sjs-AD16"></td>
            <td t="z" id="sjs-AE16"></td>
            <td t="z" id="sjs-AF16"></td>
            <td t="z" id="sjs-AG16"></td>
            <td t="z" id="sjs-AH16"></td>
            <td t="z" id="sjs-AI16"></td>
            <td t="z" id="sjs-AJ16"></td>
            <td t="z" id="sjs-AK16"></td>
            <td t="z" id="sjs-AL16"></td>
            <td t="z" id="sjs-AM16"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A17" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B17" v="Alexander Humboldt Foundation">Alexander Humboldt Foundation</td>
            <td t="s" id="sjs-C17" v="Fellowship for experienced researchers (Germany)">Fellowship for experienced researchers (Germany)</td>
            <td t="s" id="sjs-D17" v="Research to be selected by self and carried out in chosen host lab in Germany">Research to be selected by self and carried out in chosen host lab in Germany</td>
            <td t="s" id="sjs-E17" v="2,450 EUR per month includes mobility allowance  and medical and liability insurance">2,450 EUR per month includes mobility allowance and medical and liability insurance</td>
            <td t="s" id="sjs-F17" v="Independent PI (Assistant Professor/ Junior Research GL) with < 12 years experience">Independent PI (Assistant Professor/ Junior Research GL) with &lt; 12 years experience</td>
            <td t="s" id="sjs-G17" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H17" v="6-18 months, can be divided into 3 blocks of minimum 3 months each in 3 years.">6-18 months, can be divided into 3 blocks of minimum 3 months each in 3 years.</td>
            <td t="s" id="sjs-I17" v="https://www.humboldt-foundation.de/web/humboldt-award.html">https://www.humboldt-foundation.de/web/humboldt-award.html</td>
            <td t="z" id="sjs-J17"></td>
            <td t="z" id="sjs-K17"></td>
            <td t="z" id="sjs-L17"></td>
            <td t="z" id="sjs-M17"></td>
            <td t="z" id="sjs-N17"></td>
            <td t="z" id="sjs-O17"></td>
            <td t="z" id="sjs-P17"></td>
            <td t="z" id="sjs-Q17"></td>
            <td t="z" id="sjs-R17"></td>
            <td t="z" id="sjs-S17"></td>
            <td t="z" id="sjs-T17"></td>
            <td t="z" id="sjs-U17"></td>
            <td t="z" id="sjs-V17"></td>
            <td t="z" id="sjs-W17"></td>
            <td t="z" id="sjs-X17"></td>
            <td t="z" id="sjs-Y17"></td>
            <td t="z" id="sjs-Z17"></td>
            <td t="z" id="sjs-AA17"></td>
            <td t="z" id="sjs-AB17"></td>
            <td t="z" id="sjs-AC17"></td>
            <td t="z" id="sjs-AD17"></td>
            <td t="z" id="sjs-AE17"></td>
            <td t="z" id="sjs-AF17"></td>
            <td t="z" id="sjs-AG17"></td>
            <td t="z" id="sjs-AH17"></td>
            <td t="z" id="sjs-AI17"></td>
            <td t="z" id="sjs-AJ17"></td>
            <td t="z" id="sjs-AK17"></td>
            <td t="z" id="sjs-AL17"></td>
            <td t="z" id="sjs-AM17"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A18" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B18" v="Alexander Humboldt Foundation">Alexander Humboldt Foundation</td>
            <td t="s" id="sjs-C18" v="International Climate protection Fellowships (Germany)">International Climate protection Fellowships (Germany)</td>
            <td t="s" id="sjs-D18" v="Junior group leaders and postdocs also eligible, work in German lab of own choosing " xml:space="preserve">Junior group leaders and postdocs also eligible, work in German lab of own choosing </td>
            <td t="s" id="sjs-E18" v="2150-2750 EUR, mobility alowance and subsidy towards medical and liability insurance">2150-2750 EUR, mobility alowance and subsidy towards medical and liability insurance</td>
            <td t="s" id="sjs-F18" v="Min Master's level education, first degree less than 12 years ago, practical experience in climate protection/ nature conservation,with leadership potential">Min Master's level education, first degree less than 12 years ago, practical experience in climate protection/ nature conservation,with leadership potential</td>
            <td t="s" id="sjs-G18" v="To be announced (March)">To be announced (March)</td>
            <td t="s" id="sjs-H18" v="1 year " xml:space="preserve">1 year </td>
            <td t="s" id="sjs-I18" v="http://www.humboldt-foundation.de/web/icf.html">http://www.humboldt-foundation.de/web/icf.html</td>
            <td t="z" id="sjs-J18"></td>
            <td t="z" id="sjs-K18"></td>
            <td t="z" id="sjs-L18"></td>
            <td t="z" id="sjs-M18"></td>
            <td t="z" id="sjs-N18"></td>
            <td t="z" id="sjs-O18"></td>
            <td t="z" id="sjs-P18"></td>
            <td t="z" id="sjs-Q18"></td>
            <td t="z" id="sjs-R18"></td>
            <td t="z" id="sjs-S18"></td>
            <td t="z" id="sjs-T18"></td>
            <td t="z" id="sjs-U18"></td>
            <td t="z" id="sjs-V18"></td>
            <td t="z" id="sjs-W18"></td>
            <td t="z" id="sjs-X18"></td>
            <td t="z" id="sjs-Y18"></td>
            <td t="z" id="sjs-Z18"></td>
            <td t="z" id="sjs-AA18"></td>
            <td t="z" id="sjs-AB18"></td>
            <td t="z" id="sjs-AC18"></td>
            <td t="z" id="sjs-AD18"></td>
            <td t="z" id="sjs-AE18"></td>
            <td t="z" id="sjs-AF18"></td>
            <td t="z" id="sjs-AG18"></td>
            <td t="z" id="sjs-AH18"></td>
            <td t="z" id="sjs-AI18"></td>
            <td t="z" id="sjs-AJ18"></td>
            <td t="z" id="sjs-AK18"></td>
            <td t="z" id="sjs-AL18"></td>
            <td t="z" id="sjs-AM18"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A19" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B19" v="American Cancer Society">American Cancer Society</td>
            <td t="s" id="sjs-C19" v="International Fellowships for Beginning Investigators (ACSBI, USA)">International Fellowships for Beginning Investigators (ACSBI, USA)</td>
            <td t="s" id="sjs-D19" v="Applied, clinical or translational cancer research prefered. US based, return to home country mandatory">Applied, clinical or translational cancer research prefered. US based, return to home country mandatory</td>
            <td t="s" id="sjs-E19" v="$50,000 for travel and stipend support.">$50,000 for travel and stipend support.</td>
            <td t="s" id="sjs-F19" v="Beginner Independent investigator or clinician">Beginner Independent investigator or clinician</td>
            <td t="s" id="sjs-G19" v="1-Nov each year">1-Nov each year</td>
            <td t="s" id="sjs-H19" v="6-12 months">6-12 months</td>
            <td t="s" id="sjs-I19" v="http://www.uicc.org/fellowships/beginning-investigators">http://www.uicc.org/fellowships/beginning-investigators</td>
            <td t="z" id="sjs-J19"></td>
            <td t="z" id="sjs-K19"></td>
            <td t="z" id="sjs-L19"></td>
            <td t="z" id="sjs-M19"></td>
            <td t="z" id="sjs-N19"></td>
            <td t="z" id="sjs-O19"></td>
            <td t="z" id="sjs-P19"></td>
            <td t="z" id="sjs-Q19"></td>
            <td t="z" id="sjs-R19"></td>
            <td t="z" id="sjs-S19"></td>
            <td t="z" id="sjs-T19"></td>
            <td t="z" id="sjs-U19"></td>
            <td t="z" id="sjs-V19"></td>
            <td t="z" id="sjs-W19"></td>
            <td t="z" id="sjs-X19"></td>
            <td t="z" id="sjs-Y19"></td>
            <td t="z" id="sjs-Z19"></td>
            <td t="z" id="sjs-AA19"></td>
            <td t="z" id="sjs-AB19"></td>
            <td t="z" id="sjs-AC19"></td>
            <td t="z" id="sjs-AD19"></td>
            <td t="z" id="sjs-AE19"></td>
            <td t="z" id="sjs-AF19"></td>
            <td t="z" id="sjs-AG19"></td>
            <td t="z" id="sjs-AH19"></td>
            <td t="z" id="sjs-AI19"></td>
            <td t="z" id="sjs-AJ19"></td>
            <td t="z" id="sjs-AK19"></td>
            <td t="z" id="sjs-AL19"></td>
            <td t="z" id="sjs-AM19"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A20" v="Research/teaching training">Research/teaching training</td>
            <td t="s" id="sjs-B20" v="Commonwealth Secretariat, U.K., administered by UGC">Commonwealth Secretariat, U.K., administered by UGC</td>
            <td t="s" id="sjs-C20" v="Commonwealth Academic Staff Fellowship (UK)">Commonwealth Academic Staff Fellowship (UK)</td>
            <td t="s" id="sjs-D20" v="For enhancing teaching or research experience in a university in UK.Fellowship starts on Oct each year">For enhancing teaching or research experience in a university in UK.Fellowship starts on Oct each year</td>
            <td t="z" id="sjs-E20"></td>
            <td t="s" id="sjs-F20" v="5-10 years research and upto 2 years teaching experience. Age less than 40 years. " xml:space="preserve">5-10 years research and upto 2 years teaching experience. Age less than 40 years. </td>
            <td t="s" id="sjs-G20" v="To be announced in August " xml:space="preserve">To be announced in August </td>
            <td t="s" id="sjs-H20" v="3 months">3 months</td>
            <td t="s" id="sjs-I20" v="http://cscuk.dfid.gov.uk/apply/academic-fellowships/">http://cscuk.dfid.gov.uk/apply/academic-fellowships/</td>
            <td t="z" id="sjs-J20"></td>
            <td t="z" id="sjs-K20"></td>
            <td t="z" id="sjs-L20"></td>
            <td t="z" id="sjs-M20"></td>
            <td t="z" id="sjs-N20"></td>
            <td t="z" id="sjs-O20"></td>
            <td t="z" id="sjs-P20"></td>
            <td t="z" id="sjs-Q20"></td>
            <td t="z" id="sjs-R20"></td>
            <td t="z" id="sjs-S20"></td>
            <td t="z" id="sjs-T20"></td>
            <td t="z" id="sjs-U20"></td>
            <td t="z" id="sjs-V20"></td>
            <td t="z" id="sjs-W20"></td>
            <td t="z" id="sjs-X20"></td>
            <td t="z" id="sjs-Y20"></td>
            <td t="z" id="sjs-Z20"></td>
            <td t="z" id="sjs-AA20"></td>
            <td t="z" id="sjs-AB20"></td>
            <td t="z" id="sjs-AC20"></td>
            <td t="z" id="sjs-AD20"></td>
            <td t="z" id="sjs-AE20"></td>
            <td t="z" id="sjs-AF20"></td>
            <td t="z" id="sjs-AG20"></td>
            <td t="z" id="sjs-AH20"></td>
            <td t="z" id="sjs-AI20"></td>
            <td t="z" id="sjs-AJ20"></td>
            <td t="z" id="sjs-AK20"></td>
            <td t="z" id="sjs-AL20"></td>
            <td t="z" id="sjs-AM20"></td>
          </tr>
          <tr>
            <td t="z" id="sjs-A21"></td>
            <td t="s" id="sjs-B21" v="DBT/ NIH">DBT/ NIH</td>
            <td t="s" id="sjs-C21" v="Khorana- Nirenberg Scholar Program (India/NIH)">Khorana- Nirenberg Scholar Program (India/NIH)</td>
            <td t="z" id="sjs-D21"></td>
            <td t="z" id="sjs-E21"></td>
            <td t="s" id="sjs-F21" v="Fresh PhD/postdoc (> 5 years experience)">Fresh PhD/postdoc (&gt; 5 years experience)</td>
            <td t="s" id="sjs-G21" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H21" v="2-3 years postdoc (NIH, USA)+ 2-3 years in independent DBT sponsored lab (India)">2-3 years postdoc (NIH, USA)+ 2-3 years in independent DBT sponsored lab (India)</td>
            <td t="s" id="sjs-I21" v="iusstf.org/story/53-50-Khorana-Program.html">iusstf.org/story/53-50-Khorana-Program.html</td>
            <td t="z" id="sjs-J21"></td>
            <td t="z" id="sjs-K21"></td>
            <td t="z" id="sjs-L21"></td>
            <td t="z" id="sjs-M21"></td>
            <td t="z" id="sjs-N21"></td>
            <td t="z" id="sjs-O21"></td>
            <td t="z" id="sjs-P21"></td>
            <td t="z" id="sjs-Q21"></td>
            <td t="z" id="sjs-R21"></td>
            <td t="z" id="sjs-S21"></td>
            <td t="z" id="sjs-T21"></td>
            <td t="z" id="sjs-U21"></td>
            <td t="z" id="sjs-V21"></td>
            <td t="z" id="sjs-W21"></td>
            <td t="z" id="sjs-X21"></td>
            <td t="z" id="sjs-Y21"></td>
            <td t="z" id="sjs-Z21"></td>
            <td t="z" id="sjs-AA21"></td>
            <td t="z" id="sjs-AB21"></td>
            <td t="z" id="sjs-AC21"></td>
            <td t="z" id="sjs-AD21"></td>
            <td t="z" id="sjs-AE21"></td>
            <td t="z" id="sjs-AF21"></td>
            <td t="z" id="sjs-AG21"></td>
            <td t="z" id="sjs-AH21"></td>
            <td t="z" id="sjs-AI21"></td>
            <td t="z" id="sjs-AJ21"></td>
            <td t="z" id="sjs-AK21"></td>
            <td t="z" id="sjs-AL21"></td>
            <td t="z" id="sjs-AM21"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A22" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B22" v="Indo-US Science and Technology Forum " xml:space="preserve">Indo-US Science and Technology Forum </td>
            <td t="s" id="sjs-C22" v="Indo-US Science and Technology Forum fellowships (USA)">Indo-US Science and Technology Forum fellowships (USA)</td>
            <td t="s" id="sjs-D22" v="Needs to work in US lab selected by self">Needs to work in US lab selected by self</td>
            <td t="s" id="sjs-E22" v="US$ 3000 pm, round air ticket, personal contingency allowance of Rs 50,000 for visa and insurance, and $600-$1200 for travel within US">US$ 3000 pm, round air ticket, personal contingency allowance of Rs 50,000 for visa and insurance, and $600-$1200 for travel within US</td>
            <td t="s" id="sjs-F22" v="PhD, age less than 40 years, with permanent position">PhD, age less than 40 years, with permanent position</td>
            <td t="s" id="sjs-G22" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H22" v="12 months">12 months</td>
            <td t="s" id="sjs-I22" v="http://www.indousstf.org/fellowship.htm">http://www.indousstf.org/fellowship.htm</td>
            <td t="z" id="sjs-J22"></td>
            <td t="z" id="sjs-K22"></td>
            <td t="z" id="sjs-L22"></td>
            <td t="z" id="sjs-M22"></td>
            <td t="z" id="sjs-N22"></td>
            <td t="z" id="sjs-O22"></td>
            <td t="z" id="sjs-P22"></td>
            <td t="z" id="sjs-Q22"></td>
            <td t="z" id="sjs-R22"></td>
            <td t="z" id="sjs-S22"></td>
            <td t="z" id="sjs-T22"></td>
            <td t="z" id="sjs-U22"></td>
            <td t="z" id="sjs-V22"></td>
            <td t="z" id="sjs-W22"></td>
            <td t="z" id="sjs-X22"></td>
            <td t="z" id="sjs-Y22"></td>
            <td t="z" id="sjs-Z22"></td>
            <td t="z" id="sjs-AA22"></td>
            <td t="z" id="sjs-AB22"></td>
            <td t="z" id="sjs-AC22"></td>
            <td t="z" id="sjs-AD22"></td>
            <td t="z" id="sjs-AE22"></td>
            <td t="z" id="sjs-AF22"></td>
            <td t="z" id="sjs-AG22"></td>
            <td t="z" id="sjs-AH22"></td>
            <td t="z" id="sjs-AI22"></td>
            <td t="z" id="sjs-AJ22"></td>
            <td t="z" id="sjs-AK22"></td>
            <td t="z" id="sjs-AL22"></td>
            <td t="z" id="sjs-AM22"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A23" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B23" v="Indo-US Science and Technology Forum " xml:space="preserve">Indo-US Science and Technology Forum </td>
            <td t="s" id="sjs-C23" v="ASM-IUSSTF Indo-US Professorship in Microbiology " xml:space="preserve">ASM-IUSSTF Indo-US Professorship in Microbiology </td>
            <td t="s" id="sjs-D23" v="For teaching short term courses or for short term collaborative project with US collaborator">For teaching short term courses or for short term collaborative project with US collaborator</td>
            <td t="s" id="sjs-E23" v="$5000-7000 with matching contribution from host institute">$5000-7000 with matching contribution from host institute</td>
            <td t="s" id="sjs-F23" v="Microbiologists with significant experience in research or teaching in the field, who have obtained a Phd within past 10 years">Microbiologists with significant experience in research or teaching in the field, who have obtained a Phd within past 10 years</td>
            <td t="s" id="sjs-G23" v="15 Dec each year">15 Dec each year</td>
            <td t="s" id="sjs-H23" v="short term (Minimum 6 weeks)">short term (Minimum 6 weeks)</td>
            <td t="s" id="sjs-I23" v="http://www.iusstf.org/story/50-55-ASM-IUSSTF-INDO-US-PROFESSORSHIP-IN-MICROBIOLOGY.html">http://www.iusstf.org/story/50-55-ASM-IUSSTF-INDO-US-PROFESSORSHIP-IN-MICROBIOLOGY.html</td>
            <td t="z" id="sjs-J23"></td>
            <td t="z" id="sjs-K23"></td>
            <td t="z" id="sjs-L23"></td>
            <td t="z" id="sjs-M23"></td>
            <td t="z" id="sjs-N23"></td>
            <td t="z" id="sjs-O23"></td>
            <td t="z" id="sjs-P23"></td>
            <td t="z" id="sjs-Q23"></td>
            <td t="z" id="sjs-R23"></td>
            <td t="z" id="sjs-S23"></td>
            <td t="z" id="sjs-T23"></td>
            <td t="z" id="sjs-U23"></td>
            <td t="z" id="sjs-V23"></td>
            <td t="z" id="sjs-W23"></td>
            <td t="z" id="sjs-X23"></td>
            <td t="z" id="sjs-Y23"></td>
            <td t="z" id="sjs-Z23"></td>
            <td t="z" id="sjs-AA23"></td>
            <td t="z" id="sjs-AB23"></td>
            <td t="z" id="sjs-AC23"></td>
            <td t="z" id="sjs-AD23"></td>
            <td t="z" id="sjs-AE23"></td>
            <td t="z" id="sjs-AF23"></td>
            <td t="z" id="sjs-AG23"></td>
            <td t="z" id="sjs-AH23"></td>
            <td t="z" id="sjs-AI23"></td>
            <td t="z" id="sjs-AJ23"></td>
            <td t="z" id="sjs-AK23"></td>
            <td t="z" id="sjs-AL23"></td>
            <td t="z" id="sjs-AM23"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A24" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B24" v="Union for international cancer control (UICC)">Union for international cancer control (UICC)</td>
            <td t="s" id="sjs-C24" v="Yamagiwa-Yoshida Memorial international study grants (any country overseas)">Yamagiwa-Yoshida Memorial international study grants (any country overseas)</td>
            <td t="s" id="sjs-D24" v="Basic, applied or translational cancer research. Promotes international collab.">Basic, applied or translational cancer research. Promotes international collab.</td>
            <td t="n" id="sjs-E24" v="10000" xml:space="preserve">$10,000 </td>
            <td t="s" id="sjs-F24" v="PhD/MD with  min 2 years postdoc experience">PhD/MD with min 2 years postdoc experience</td>
            <td t="s" id="sjs-G24" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H24" v="3 months">3 months</td>
            <td t="s" id="sjs-I24" v="http://www.uicc.org/programmes/geti/our-activities/study-grants">http://www.uicc.org/programmes/geti/our-activities/study-grants</td>
            <td t="z" id="sjs-J24"></td>
            <td t="z" id="sjs-K24"></td>
            <td t="z" id="sjs-L24"></td>
            <td t="z" id="sjs-M24"></td>
            <td t="z" id="sjs-N24"></td>
            <td t="z" id="sjs-O24"></td>
            <td t="z" id="sjs-P24"></td>
            <td t="z" id="sjs-Q24"></td>
            <td t="z" id="sjs-R24"></td>
            <td t="z" id="sjs-S24"></td>
            <td t="z" id="sjs-T24"></td>
            <td t="z" id="sjs-U24"></td>
            <td t="z" id="sjs-V24"></td>
            <td t="z" id="sjs-W24"></td>
            <td t="z" id="sjs-X24"></td>
            <td t="z" id="sjs-Y24"></td>
            <td t="z" id="sjs-Z24"></td>
            <td t="z" id="sjs-AA24"></td>
            <td t="z" id="sjs-AB24"></td>
            <td t="z" id="sjs-AC24"></td>
            <td t="z" id="sjs-AD24"></td>
            <td t="z" id="sjs-AE24"></td>
            <td t="z" id="sjs-AF24"></td>
            <td t="z" id="sjs-AG24"></td>
            <td t="z" id="sjs-AH24"></td>
            <td t="z" id="sjs-AI24"></td>
            <td t="z" id="sjs-AJ24"></td>
            <td t="z" id="sjs-AK24"></td>
            <td t="z" id="sjs-AL24"></td>
            <td t="z" id="sjs-AM24"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A25" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B25" v="US-India Educational Foundation">US-India Educational Foundation</td>
            <td t="s" id="sjs-C25" v="Fulbright-Nehru Academic and Professional Excellence Fellowships">Fulbright-Nehru Academic and Professional Excellence Fellowships</td>
            <td t="s" id="sjs-D25" v="to provide Indian faculty, researchers, and professionals the opportunities to teach, conduct research, or carry out a combination of teaching and research at a U.S. institution">to provide Indian faculty, researchers, and professionals the opportunities to teach, conduct research, or carry out a combination of teaching and research at a U.S. institution</td>
            <td t="s" id="sjs-E25" v="Stipend, insurance, travel and professional allowance for applicant only. For stays between 8-9 months dependent (one) allowance and travel may be covered">Stipend, insurance, travel and professional allowance for applicant only. For stays between 8-9 months dependent (one) allowance and travel may be covered</td>
            <td t="s" id="sjs-F25" v="Indian faculty/researchers with at least 5 years teaching experience">Indian faculty/researchers with at least 5 years teaching experience</td>
            <td t="s" id="sjs-G25" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H25" v="4-9 months">4-9 months</td>
            <td t="s" id="sjs-I25" v="http://www.usief.org.in/Fellowships/Fulbright-Nehru-Academic-Professional-Excellence-Fellowships.aspx">http://www.usief.org.in/Fellowships/Fulbright-Nehru-Academic-Professional-Excellence-Fellowships.aspx</td>
            <td t="z" id="sjs-J25"></td>
            <td t="z" id="sjs-K25"></td>
            <td t="z" id="sjs-L25"></td>
            <td t="z" id="sjs-M25"></td>
            <td t="z" id="sjs-N25"></td>
            <td t="z" id="sjs-O25"></td>
            <td t="z" id="sjs-P25"></td>
            <td t="z" id="sjs-Q25"></td>
            <td t="z" id="sjs-R25"></td>
            <td t="z" id="sjs-S25"></td>
            <td t="z" id="sjs-T25"></td>
            <td t="z" id="sjs-U25"></td>
            <td t="z" id="sjs-V25"></td>
            <td t="z" id="sjs-W25"></td>
            <td t="z" id="sjs-X25"></td>
            <td t="z" id="sjs-Y25"></td>
            <td t="z" id="sjs-Z25"></td>
            <td t="z" id="sjs-AA25"></td>
            <td t="z" id="sjs-AB25"></td>
            <td t="z" id="sjs-AC25"></td>
            <td t="z" id="sjs-AD25"></td>
            <td t="z" id="sjs-AE25"></td>
            <td t="z" id="sjs-AF25"></td>
            <td t="z" id="sjs-AG25"></td>
            <td t="z" id="sjs-AH25"></td>
            <td t="z" id="sjs-AI25"></td>
            <td t="z" id="sjs-AJ25"></td>
            <td t="z" id="sjs-AK25"></td>
            <td t="z" id="sjs-AL25"></td>
            <td t="z" id="sjs-AM25"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A26" v="Research Grants">Research Grants</td>
            <td t="z" id="sjs-B26"></td>
            <td t="z" id="sjs-C26"></td>
            <td t="z" id="sjs-D26"></td>
            <td t="z" id="sjs-E26"></td>
            <td t="z" id="sjs-F26"></td>
            <td t="z" id="sjs-G26"></td>
            <td t="z" id="sjs-H26"></td>
            <td t="z" id="sjs-I26"></td>
            <td t="z" id="sjs-J26"></td>
            <td t="z" id="sjs-K26"></td>
            <td t="z" id="sjs-L26"></td>
            <td t="z" id="sjs-M26"></td>
            <td t="z" id="sjs-N26"></td>
            <td t="z" id="sjs-O26"></td>
            <td t="z" id="sjs-P26"></td>
            <td t="z" id="sjs-Q26"></td>
            <td t="z" id="sjs-R26"></td>
            <td t="z" id="sjs-S26"></td>
            <td t="z" id="sjs-T26"></td>
            <td t="z" id="sjs-U26"></td>
            <td t="z" id="sjs-V26"></td>
            <td t="z" id="sjs-W26"></td>
            <td t="z" id="sjs-X26"></td>
            <td t="z" id="sjs-Y26"></td>
            <td t="z" id="sjs-Z26"></td>
            <td t="z" id="sjs-AA26"></td>
            <td t="z" id="sjs-AB26"></td>
            <td t="z" id="sjs-AC26"></td>
            <td t="z" id="sjs-AD26"></td>
            <td t="z" id="sjs-AE26"></td>
            <td t="z" id="sjs-AF26"></td>
            <td t="z" id="sjs-AG26"></td>
            <td t="z" id="sjs-AH26"></td>
            <td t="z" id="sjs-AI26"></td>
            <td t="z" id="sjs-AJ26"></td>
            <td t="z" id="sjs-AK26"></td>
            <td t="z" id="sjs-AL26"></td>
            <td t="z" id="sjs-AM26"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A27" v="Research">Research</td>
            <td t="s" id="sjs-B27" v="British Petroleum (BP)/Bird life International/ Conservation International/Fauna and Flora international/ Wildlife conservation society">British Petroleum (BP)/Bird life International/ Conservation International/Fauna and Flora international/ Wildlife conservation society</td>
            <td t="s" id="sjs-C27" v="Conservation Leadership Programme (CLP)-Conservation Follow-up Awards">Conservation Leadership Programme (CLP)-Conservation Follow-up Awards</td>
            <td t="s" id="sjs-D27" v="For Projects build on a previous CLP project by addressing a practical conservation issue raised by the original Future Conservationist Award project.">For Projects build on a previous CLP project by addressing a practical conservation issue raised by the original Future Conservationist Award project.</td>
            <td t="s" id="sjs-E27" v="US $20000 (CLP funding must cover at least 50% of the total project budget)">US $20000 (CLP funding must cover at least 50% of the total project budget)</td>
            <td t="s" id="sjs-F27" v="Minimum team of three  with at least 50% involved in previous CLP project and additional new team members with no more than 5 years of paid experience  in the conservation sector">Minimum team of three with at least 50% involved in previous CLP project and additional new team members with no more than 5 years of paid experience in the conservation sector</td>
            <td t="s" id="sjs-G27" v="To be Announced in August " xml:space="preserve">To be Announced in August </td>
            <td t="s" id="sjs-H27" v="upto 2 years">upto 2 years</td>
            <td t="s" id="sjs-I27" v="http://www.conservationleadershipprogramme.org/FollowupAward.asp">http://www.conservationleadershipprogramme.org/FollowupAward.asp</td>
            <td t="z" id="sjs-J27"></td>
            <td t="z" id="sjs-K27"></td>
            <td t="z" id="sjs-L27"></td>
            <td t="z" id="sjs-M27"></td>
            <td t="z" id="sjs-N27"></td>
            <td t="z" id="sjs-O27"></td>
            <td t="z" id="sjs-P27"></td>
            <td t="z" id="sjs-Q27"></td>
            <td t="z" id="sjs-R27"></td>
            <td t="z" id="sjs-S27"></td>
            <td t="z" id="sjs-T27"></td>
            <td t="z" id="sjs-U27"></td>
            <td t="z" id="sjs-V27"></td>
            <td t="z" id="sjs-W27"></td>
            <td t="z" id="sjs-X27"></td>
            <td t="z" id="sjs-Y27"></td>
            <td t="z" id="sjs-Z27"></td>
            <td t="z" id="sjs-AA27"></td>
            <td t="z" id="sjs-AB27"></td>
            <td t="z" id="sjs-AC27"></td>
            <td t="z" id="sjs-AD27"></td>
            <td t="z" id="sjs-AE27"></td>
            <td t="z" id="sjs-AF27"></td>
            <td t="z" id="sjs-AG27"></td>
            <td t="z" id="sjs-AH27"></td>
            <td t="z" id="sjs-AI27"></td>
            <td t="z" id="sjs-AJ27"></td>
            <td t="z" id="sjs-AK27"></td>
            <td t="z" id="sjs-AL27"></td>
            <td t="z" id="sjs-AM27"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A28" v="Research">Research</td>
            <td t="s" id="sjs-B28" v="British Petroleum (BP)/Bird life International/ Conservation International/Fauna and Flora international/ Wildlife conservation society">British Petroleum (BP)/Bird life International/ Conservation International/Fauna and Flora international/ Wildlife conservation society</td>
            <td t="s" id="sjs-C28" v="Conservation Leadership Programme (CLP)-Conservation Leadership Awards">Conservation Leadership Programme (CLP)-Conservation Leadership Awards</td>
            <td t="s" id="sjs-D28" v="For Projects build on a previous CLP project by addressing a practical conservation issue raised by the original Follow-up Award project.">For Projects build on a previous CLP project by addressing a practical conservation issue raised by the original Follow-up Award project.</td>
            <td t="s" id="sjs-E28" v="US $50000 (CLP funding must cover at least 50% of the total project budget)">US $50000 (CLP funding must cover at least 50% of the total project budget)</td>
            <td t="s" id="sjs-F28" v="Minimum team of three  with at least 50% involved in previous CLP project and additional new team members with no more than 5 years of paid experience  in the conservation sector">Minimum team of three with at least 50% involved in previous CLP project and additional new team members with no more than 5 years of paid experience in the conservation sector</td>
            <td t="s" id="sjs-G28" v="To be Announced(Dec)">To be Announced(Dec)</td>
            <td t="s" id="sjs-H28" v="upto 3 years">upto 3 years</td>
            <td t="s" id="sjs-I28" v="http://www.conservationleadershipprogramme.org/LeadershipAward.asp">http://www.conservationleadershipprogramme.org/LeadershipAward.asp</td>
            <td t="z" id="sjs-J28"></td>
            <td t="z" id="sjs-K28"></td>
            <td t="z" id="sjs-L28"></td>
            <td t="z" id="sjs-M28"></td>
            <td t="z" id="sjs-N28"></td>
            <td t="z" id="sjs-O28"></td>
            <td t="z" id="sjs-P28"></td>
            <td t="z" id="sjs-Q28"></td>
            <td t="z" id="sjs-R28"></td>
            <td t="z" id="sjs-S28"></td>
            <td t="z" id="sjs-T28"></td>
            <td t="z" id="sjs-U28"></td>
            <td t="z" id="sjs-V28"></td>
            <td t="z" id="sjs-W28"></td>
            <td t="z" id="sjs-X28"></td>
            <td t="z" id="sjs-Y28"></td>
            <td t="z" id="sjs-Z28"></td>
            <td t="z" id="sjs-AA28"></td>
            <td t="z" id="sjs-AB28"></td>
            <td t="z" id="sjs-AC28"></td>
            <td t="z" id="sjs-AD28"></td>
            <td t="z" id="sjs-AE28"></td>
            <td t="z" id="sjs-AF28"></td>
            <td t="z" id="sjs-AG28"></td>
            <td t="z" id="sjs-AH28"></td>
            <td t="z" id="sjs-AI28"></td>
            <td t="z" id="sjs-AJ28"></td>
            <td t="z" id="sjs-AK28"></td>
            <td t="z" id="sjs-AL28"></td>
            <td t="z" id="sjs-AM28"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A29" v="Research">Research</td>
            <td t="s" id="sjs-B29" v="CSIR">CSIR</td>
            <td t="s" id="sjs-C29" v="CSIR research Grant">CSIR research Grant</td>
            <td t="z" id="sjs-D29"></td>
            <td t="s" id="sjs-E29" v="1-2 JRF/SRF/RA, contingency and small equipment">1-2 JRF/SRF/RA, contingency and small equipment</td>
            <td t="s" id="sjs-F29" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="s" id="sjs-G29" v="Rolling Programme">Rolling Programme</td>
            <td t="s" id="sjs-H29" v="3 years">3 years</td>
            <td t="s" id="sjs-I29" v="http://csirhrdg.res.in/csir_research_grants.htm">http://csirhrdg.res.in/csir_research_grants.htm</td>
            <td t="z" id="sjs-J29"></td>
            <td t="z" id="sjs-K29"></td>
            <td t="z" id="sjs-L29"></td>
            <td t="z" id="sjs-M29"></td>
            <td t="z" id="sjs-N29"></td>
            <td t="z" id="sjs-O29"></td>
            <td t="z" id="sjs-P29"></td>
            <td t="z" id="sjs-Q29"></td>
            <td t="z" id="sjs-R29"></td>
            <td t="z" id="sjs-S29"></td>
            <td t="z" id="sjs-T29"></td>
            <td t="z" id="sjs-U29"></td>
            <td t="z" id="sjs-V29"></td>
            <td t="z" id="sjs-W29"></td>
            <td t="z" id="sjs-X29"></td>
            <td t="z" id="sjs-Y29"></td>
            <td t="z" id="sjs-Z29"></td>
            <td t="z" id="sjs-AA29"></td>
            <td t="z" id="sjs-AB29"></td>
            <td t="z" id="sjs-AC29"></td>
            <td t="z" id="sjs-AD29"></td>
            <td t="z" id="sjs-AE29"></td>
            <td t="z" id="sjs-AF29"></td>
            <td t="z" id="sjs-AG29"></td>
            <td t="z" id="sjs-AH29"></td>
            <td t="z" id="sjs-AI29"></td>
            <td t="z" id="sjs-AJ29"></td>
            <td t="z" id="sjs-AK29"></td>
            <td t="z" id="sjs-AL29"></td>
            <td t="z" id="sjs-AM29"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A30" v="Research">Research</td>
            <td t="s" id="sjs-B30" v="DBT">DBT</td>
            <td t="s" id="sjs-C30" v="Project grant">Project grant</td>
            <td t="s" id="sjs-D30" v="Submission through online web portal of DBT">Submission through online web portal of DBT</td>
            <td t="s" id="sjs-E30" v="upto 1 crore. Equipment, personnel, Supplies &amp; consumables, contigencies and travel " xml:space="preserve">upto 1 crore. Equipment, personnel, Supplies &amp; consumables, contigencies and travel </td>
            <td t="s" id="sjs-F30" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="s" id="sjs-G30" v="Rolling Programme">Rolling Programme</td>
            <td t="s" id="sjs-H30" v="3-5 years">3-5 years</td>
            <td t="s" id="sjs-I30" v="http://dbtindia.nic.in/uniquepage.asp?id_pk=438">http://dbtindia.nic.in/uniquepage.asp?id_pk=438</td>
            <td t="z" id="sjs-J30"></td>
            <td t="z" id="sjs-K30"></td>
            <td t="z" id="sjs-L30"></td>
            <td t="z" id="sjs-M30"></td>
            <td t="z" id="sjs-N30"></td>
            <td t="z" id="sjs-O30"></td>
            <td t="z" id="sjs-P30"></td>
            <td t="z" id="sjs-Q30"></td>
            <td t="z" id="sjs-R30"></td>
            <td t="z" id="sjs-S30"></td>
            <td t="z" id="sjs-T30"></td>
            <td t="z" id="sjs-U30"></td>
            <td t="z" id="sjs-V30"></td>
            <td t="z" id="sjs-W30"></td>
            <td t="z" id="sjs-X30"></td>
            <td t="z" id="sjs-Y30"></td>
            <td t="z" id="sjs-Z30"></td>
            <td t="z" id="sjs-AA30"></td>
            <td t="z" id="sjs-AB30"></td>
            <td t="z" id="sjs-AC30"></td>
            <td t="z" id="sjs-AD30"></td>
            <td t="z" id="sjs-AE30"></td>
            <td t="z" id="sjs-AF30"></td>
            <td t="z" id="sjs-AG30"></td>
            <td t="z" id="sjs-AH30"></td>
            <td t="z" id="sjs-AI30"></td>
            <td t="z" id="sjs-AJ30"></td>
            <td t="z" id="sjs-AK30"></td>
            <td t="z" id="sjs-AL30"></td>
            <td t="z" id="sjs-AM30"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A31" v="Research">Research</td>
            <td t="s" id="sjs-B31" v="DBT">DBT</td>
            <td t="s" id="sjs-C31" v="ACCELERATED CROP IMPROVEMENT PROGRAMME">ACCELERATED CROP IMPROVEMENT PROGRAMME</td>
            <td t="s" id="sjs-D31" v="Concept note on  application of molecular markers for crop improvement">Concept note on application of molecular markers for crop improvement</td>
            <td t="z" id="sjs-E31"></td>
            <td t="s" id="sjs-F31" v="Scientists having expertise in areas of molecular breeding in plants as evident from the publications in high-impact factor journals or product development may apply. " xml:space="preserve">Scientists having expertise in areas of molecular breeding in plants as evident from the publications in high-impact factor journals or product development may apply. </td>
            <td t="s" id="sjs-G31" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H31" v="3-5 years">3-5 years</td>
            <td t="s" id="sjs-I31" v="http://dbtindia.nic.in/docs/CALLFORPREPROPOSALAUNDER.doc">http://dbtindia.nic.in/docs/CALLFORPREPROPOSALAUNDER.doc</td>
            <td t="z" id="sjs-J31"></td>
            <td t="z" id="sjs-K31"></td>
            <td t="z" id="sjs-L31"></td>
            <td t="z" id="sjs-M31"></td>
            <td t="z" id="sjs-N31"></td>
            <td t="z" id="sjs-O31"></td>
            <td t="z" id="sjs-P31"></td>
            <td t="z" id="sjs-Q31"></td>
            <td t="z" id="sjs-R31"></td>
            <td t="z" id="sjs-S31"></td>
            <td t="z" id="sjs-T31"></td>
            <td t="z" id="sjs-U31"></td>
            <td t="z" id="sjs-V31"></td>
            <td t="z" id="sjs-W31"></td>
            <td t="z" id="sjs-X31"></td>
            <td t="z" id="sjs-Y31"></td>
            <td t="z" id="sjs-Z31"></td>
            <td t="z" id="sjs-AA31"></td>
            <td t="z" id="sjs-AB31"></td>
            <td t="z" id="sjs-AC31"></td>
            <td t="z" id="sjs-AD31"></td>
            <td t="z" id="sjs-AE31"></td>
            <td t="z" id="sjs-AF31"></td>
            <td t="z" id="sjs-AG31"></td>
            <td t="z" id="sjs-AH31"></td>
            <td t="z" id="sjs-AI31"></td>
            <td t="z" id="sjs-AJ31"></td>
            <td t="z" id="sjs-AK31"></td>
            <td t="z" id="sjs-AL31"></td>
            <td t="z" id="sjs-AM31"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A32" v="Research">Research</td>
            <td t="s" id="sjs-B32" v="DBT">DBT</td>
            <td t="s" id="sjs-C32" v="RESEARCH PROPOSALS IN HUMAN DEVELOPMENTAL &amp; DISEASE BIOLOGY " xml:space="preserve">RESEARCH PROPOSALS IN HUMAN DEVELOPMENTAL &amp; DISEASE BIOLOGY </td>
            <td t="s" id="sjs-D32" v="The proposals may encompass any aspect of developmental or disease biology related to pregnancy, foetal/neonatal stages, early years of life in humans or related aspects including in vitro and in vivo functional studies using suitable cell lines and model organisms respectively. Multicentric consortium mode projects involving both research scientists and clinicians encouraged">The proposals may encompass any aspect of developmental or disease biology related to pregnancy, foetal/neonatal stages, early years of life in humans or related aspects including in vitro and in vivo functional studies using suitable cell lines and model organisms respectively. Multicentric consortium mode projects involving both research scientists and clinicians encouraged</td>
            <td t="z" id="sjs-E32"></td>
            <td t="s" id="sjs-F32" v="clinicians/scientists actively engaged in the field of Human Developmental and Disease Biology">clinicians/scientists actively engaged in the field of Human Developmental and Disease Biology</td>
            <td t="s" id="sjs-G32" v="To be Announced">To be Announced</td>
            <td t="z" id="sjs-H32"></td>
            <td t="s" id="sjs-I32" v="http://dbtindia.nic.in/docs/hddb.doc">http://dbtindia.nic.in/docs/hddb.doc</td>
            <td t="z" id="sjs-J32"></td>
            <td t="z" id="sjs-K32"></td>
            <td t="z" id="sjs-L32"></td>
            <td t="z" id="sjs-M32"></td>
            <td t="z" id="sjs-N32"></td>
            <td t="z" id="sjs-O32"></td>
            <td t="z" id="sjs-P32"></td>
            <td t="z" id="sjs-Q32"></td>
            <td t="z" id="sjs-R32"></td>
            <td t="z" id="sjs-S32"></td>
            <td t="z" id="sjs-T32"></td>
            <td t="z" id="sjs-U32"></td>
            <td t="z" id="sjs-V32"></td>
            <td t="z" id="sjs-W32"></td>
            <td t="z" id="sjs-X32"></td>
            <td t="z" id="sjs-Y32"></td>
            <td t="z" id="sjs-Z32"></td>
            <td t="z" id="sjs-AA32"></td>
            <td t="z" id="sjs-AB32"></td>
            <td t="z" id="sjs-AC32"></td>
            <td t="z" id="sjs-AD32"></td>
            <td t="z" id="sjs-AE32"></td>
            <td t="z" id="sjs-AF32"></td>
            <td t="z" id="sjs-AG32"></td>
            <td t="z" id="sjs-AH32"></td>
            <td t="z" id="sjs-AI32"></td>
            <td t="z" id="sjs-AJ32"></td>
            <td t="z" id="sjs-AK32"></td>
            <td t="z" id="sjs-AL32"></td>
            <td t="z" id="sjs-AM32"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A33" v="Research">Research</td>
            <td t="s" id="sjs-B33" v="DBT">DBT</td>
            <td t="s" id="sjs-C33" v="RESEARCH PROPOSALS IN CANCER BIOLOGY- Pilot Project Grant for Young Investigators">RESEARCH PROPOSALS IN CANCER BIOLOGY- Pilot Project Grant for Young Investigators</td>
            <td t="s" id="sjs-D33" v="To investigate new hypothesis for establishing proof-of-concept in cancer research">To investigate new hypothesis for establishing proof-of-concept in cancer research</td>
            <td t="s" id="sjs-E33" v="upto 25 lakhs " xml:space="preserve">upto 25 lakhs </td>
            <td t="s" id="sjs-F33" v="all especially encouraging new/young investigators with/without publication in cancer">all especially encouraging new/young investigators with/without publication in cancer</td>
            <td t="s" id="sjs-G33" v="To be Announced">To be Announced</td>
            <td t="z" id="sjs-H33"></td>
            <td t="s" id="sjs-I33" v="http://dbtindia.nic.in/docs/CancerAdfinal.doc">http://dbtindia.nic.in/docs/CancerAdfinal.doc</td>
            <td t="z" id="sjs-J33"></td>
            <td t="z" id="sjs-K33"></td>
            <td t="z" id="sjs-L33"></td>
            <td t="z" id="sjs-M33"></td>
            <td t="z" id="sjs-N33"></td>
            <td t="z" id="sjs-O33"></td>
            <td t="z" id="sjs-P33"></td>
            <td t="z" id="sjs-Q33"></td>
            <td t="z" id="sjs-R33"></td>
            <td t="z" id="sjs-S33"></td>
            <td t="z" id="sjs-T33"></td>
            <td t="z" id="sjs-U33"></td>
            <td t="z" id="sjs-V33"></td>
            <td t="z" id="sjs-W33"></td>
            <td t="z" id="sjs-X33"></td>
            <td t="z" id="sjs-Y33"></td>
            <td t="z" id="sjs-Z33"></td>
            <td t="z" id="sjs-AA33"></td>
            <td t="z" id="sjs-AB33"></td>
            <td t="z" id="sjs-AC33"></td>
            <td t="z" id="sjs-AD33"></td>
            <td t="z" id="sjs-AE33"></td>
            <td t="z" id="sjs-AF33"></td>
            <td t="z" id="sjs-AG33"></td>
            <td t="z" id="sjs-AH33"></td>
            <td t="z" id="sjs-AI33"></td>
            <td t="z" id="sjs-AJ33"></td>
            <td t="z" id="sjs-AK33"></td>
            <td t="z" id="sjs-AL33"></td>
            <td t="z" id="sjs-AM33"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A34" v="Research">Research</td>
            <td t="s" id="sjs-B34" v="DBT">DBT</td>
            <td t="s" id="sjs-C34" v="RESEARCH PROPOSALS IN CANCER BIOLOGY- Virtual National Cancer Institute (VNCI)">RESEARCH PROPOSALS IN CANCER BIOLOGY- Virtual National Cancer Institute (VNCI)</td>
            <td t="s" id="sjs-D34" v="To connect competence in Basic biology/clinical research/technology development around " thematic="" research"="" as="" defined="" in="" the="" call="" text"="">To connect competence in Basic biology/clinical research/technology development around "Thematic Research" as defined in the call text</td>
            <td t="z" id="sjs-E34"></td>
            <td t="s" id="sjs-F34" v="5-7 investigators with complimentary domain expertise are expected to be connected for each thematic unit. Participation of Industry encouraged">5-7 investigators with complimentary domain expertise are expected to be connected for each thematic unit. Participation of Industry encouraged</td>
            <td t="s" id="sjs-G34" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H34" v="60 months">60 months</td>
            <td t="s" id="sjs-I34" v="http://dbtindia.nic.in/docs/CancerAdfinal.doc">http://dbtindia.nic.in/docs/CancerAdfinal.doc</td>
            <td t="z" id="sjs-J34"></td>
            <td t="z" id="sjs-K34"></td>
            <td t="z" id="sjs-L34"></td>
            <td t="z" id="sjs-M34"></td>
            <td t="z" id="sjs-N34"></td>
            <td t="z" id="sjs-O34"></td>
            <td t="z" id="sjs-P34"></td>
            <td t="z" id="sjs-Q34"></td>
            <td t="z" id="sjs-R34"></td>
            <td t="z" id="sjs-S34"></td>
            <td t="z" id="sjs-T34"></td>
            <td t="z" id="sjs-U34"></td>
            <td t="z" id="sjs-V34"></td>
            <td t="z" id="sjs-W34"></td>
            <td t="z" id="sjs-X34"></td>
            <td t="z" id="sjs-Y34"></td>
            <td t="z" id="sjs-Z34"></td>
            <td t="z" id="sjs-AA34"></td>
            <td t="z" id="sjs-AB34"></td>
            <td t="z" id="sjs-AC34"></td>
            <td t="z" id="sjs-AD34"></td>
            <td t="z" id="sjs-AE34"></td>
            <td t="z" id="sjs-AF34"></td>
            <td t="z" id="sjs-AG34"></td>
            <td t="z" id="sjs-AH34"></td>
            <td t="z" id="sjs-AI34"></td>
            <td t="z" id="sjs-AJ34"></td>
            <td t="z" id="sjs-AK34"></td>
            <td t="z" id="sjs-AL34"></td>
            <td t="z" id="sjs-AM34"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A35" v="Research">Research</td>
            <td t="s" id="sjs-B35" v="DBT">DBT</td>
            <td t="s" id="sjs-C35" v="RESEARCH PROPOSALS IN CANCER BIOLOGY- Units of Excellence (UOE) (DBT)">RESEARCH PROPOSALS IN CANCER BIOLOGY- Units of Excellence (UOE) (DBT)</td>
            <td t="s" id="sjs-D35" v="For strengthening research resources around leaders in cancer biology with national relevance but global competitiveness. Applications could be in the form of Individual Grants or small Team-driven Grant">For strengthening research resources around leaders in cancer biology with national relevance but global competitiveness. Applications could be in the form of Individual Grants or small Team-driven Grant</td>
            <td t="s" id="sjs-E35" v="Research costs as well as career development opportunities including Young investigator’s awards (10-15 in number, both for Ph.D &amp; Post Ph.D) under each UOE, national &amp; overseas fellowships, training in different labs, workshops/conferences etc. " xml:space="preserve">Research costs as well as career development opportunities including Young investigator’s awards (10-15 in number, both for Ph.D &amp; Post Ph.D) under each UOE, national &amp; overseas fellowships, training in different labs, workshops/conferences etc. </td>
            <td t="s" id="sjs-F35" v="leaders in cancer biology with strong track record">leaders in cancer biology with strong track record</td>
            <td t="s" id="sjs-G35" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H35" v="60 months with possibility of extension for one more term">60 months with possibility of extension for one more term</td>
            <td t="s" id="sjs-I35" v="http://dbtindia.nic.in/docs/CancerAdfinal.doc">http://dbtindia.nic.in/docs/CancerAdfinal.doc</td>
            <td t="z" id="sjs-J35"></td>
            <td t="z" id="sjs-K35"></td>
            <td t="z" id="sjs-L35"></td>
            <td t="z" id="sjs-M35"></td>
            <td t="z" id="sjs-N35"></td>
            <td t="z" id="sjs-O35"></td>
            <td t="z" id="sjs-P35"></td>
            <td t="z" id="sjs-Q35"></td>
            <td t="z" id="sjs-R35"></td>
            <td t="z" id="sjs-S35"></td>
            <td t="z" id="sjs-T35"></td>
            <td t="z" id="sjs-U35"></td>
            <td t="z" id="sjs-V35"></td>
            <td t="z" id="sjs-W35"></td>
            <td t="z" id="sjs-X35"></td>
            <td t="z" id="sjs-Y35"></td>
            <td t="z" id="sjs-Z35"></td>
            <td t="z" id="sjs-AA35"></td>
            <td t="z" id="sjs-AB35"></td>
            <td t="z" id="sjs-AC35"></td>
            <td t="z" id="sjs-AD35"></td>
            <td t="z" id="sjs-AE35"></td>
            <td t="z" id="sjs-AF35"></td>
            <td t="z" id="sjs-AG35"></td>
            <td t="z" id="sjs-AH35"></td>
            <td t="z" id="sjs-AI35"></td>
            <td t="z" id="sjs-AJ35"></td>
            <td t="z" id="sjs-AK35"></td>
            <td t="z" id="sjs-AL35"></td>
            <td t="z" id="sjs-AM35"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A36" v="Research">Research</td>
            <td t="s" id="sjs-B36" v="DBT">DBT</td>
            <td t="s" id="sjs-C36" v="Nanobiotechnology">Nanobiotechnology</td>
            <td t="s" id="sjs-D36" v="Concept notes">Concept notes</td>
            <td t="z" id="sjs-E36"></td>
            <td t="z" id="sjs-F36"></td>
            <td t="s" id="sjs-G36" v="To Be Announced">To Be Announced</td>
            <td t="z" id="sjs-H36"></td>
            <td t="s" id="sjs-I36" v="http://dbtindia.nic.in/performa/Nano%20Adv.doc">http://dbtindia.nic.in/performa/Nano%20Adv.doc</td>
            <td t="z" id="sjs-J36"></td>
            <td t="z" id="sjs-K36"></td>
            <td t="z" id="sjs-L36"></td>
            <td t="z" id="sjs-M36"></td>
            <td t="z" id="sjs-N36"></td>
            <td t="z" id="sjs-O36"></td>
            <td t="z" id="sjs-P36"></td>
            <td t="z" id="sjs-Q36"></td>
            <td t="z" id="sjs-R36"></td>
            <td t="z" id="sjs-S36"></td>
            <td t="z" id="sjs-T36"></td>
            <td t="z" id="sjs-U36"></td>
            <td t="z" id="sjs-V36"></td>
            <td t="z" id="sjs-W36"></td>
            <td t="z" id="sjs-X36"></td>
            <td t="z" id="sjs-Y36"></td>
            <td t="z" id="sjs-Z36"></td>
            <td t="z" id="sjs-AA36"></td>
            <td t="z" id="sjs-AB36"></td>
            <td t="z" id="sjs-AC36"></td>
            <td t="z" id="sjs-AD36"></td>
            <td t="z" id="sjs-AE36"></td>
            <td t="z" id="sjs-AF36"></td>
            <td t="z" id="sjs-AG36"></td>
            <td t="z" id="sjs-AH36"></td>
            <td t="z" id="sjs-AI36"></td>
            <td t="z" id="sjs-AJ36"></td>
            <td t="z" id="sjs-AK36"></td>
            <td t="z" id="sjs-AL36"></td>
            <td t="z" id="sjs-AM36"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A37" v="Research">Research</td>
            <td t="s" id="sjs-B37" v="DBT">DBT</td>
            <td t="s" id="sjs-C37" v="Development of Next Generation Imaging Technologies for Biomedical Applications">Development of Next Generation Imaging Technologies for Biomedical Applications</td>
            <td t="s" id="sjs-D37" v="Project grant">Project grant</td>
            <td t="z" id="sjs-E37"></td>
            <td t="s" id="sjs-F37" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="s" id="sjs-G37" v="To Be Announced">To Be Announced</td>
            <td t="z" id="sjs-H37"></td>
            <td t="s" id="sjs-I37" v="http://dbtindia.nic.in/docs/Imagecall(Final).doc">http://dbtindia.nic.in/docs/Imagecall(Final).doc</td>
            <td t="z" id="sjs-J37"></td>
            <td t="z" id="sjs-K37"></td>
            <td t="z" id="sjs-L37"></td>
            <td t="z" id="sjs-M37"></td>
            <td t="z" id="sjs-N37"></td>
            <td t="z" id="sjs-O37"></td>
            <td t="z" id="sjs-P37"></td>
            <td t="z" id="sjs-Q37"></td>
            <td t="z" id="sjs-R37"></td>
            <td t="z" id="sjs-S37"></td>
            <td t="z" id="sjs-T37"></td>
            <td t="z" id="sjs-U37"></td>
            <td t="z" id="sjs-V37"></td>
            <td t="z" id="sjs-W37"></td>
            <td t="z" id="sjs-X37"></td>
            <td t="z" id="sjs-Y37"></td>
            <td t="z" id="sjs-Z37"></td>
            <td t="z" id="sjs-AA37"></td>
            <td t="z" id="sjs-AB37"></td>
            <td t="z" id="sjs-AC37"></td>
            <td t="z" id="sjs-AD37"></td>
            <td t="z" id="sjs-AE37"></td>
            <td t="z" id="sjs-AF37"></td>
            <td t="z" id="sjs-AG37"></td>
            <td t="z" id="sjs-AH37"></td>
            <td t="z" id="sjs-AI37"></td>
            <td t="z" id="sjs-AJ37"></td>
            <td t="z" id="sjs-AK37"></td>
            <td t="z" id="sjs-AL37"></td>
            <td t="z" id="sjs-AM37"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A38" v="Women in Science (Research)">Women in Science (Research)</td>
            <td t="s" id="sjs-B38" v="DBT">DBT</td>
            <td t="s" id="sjs-C38" v="BioCAre Research Grant opportunity (RGO)">BioCAre Research Grant opportunity (RGO)</td>
            <td t="s" id="sjs-D38" v="For women scientists. LoI required for those for whom this is the first grant. Any woman scientist can be considered for a maximum of 3 applications run consecutively with total duration of the support not extending beyond fifteen years.">For women scientists. LoI required for those for whom this is the first grant. Any woman scientist can be considered for a maximum of 3 applications run consecutively with total duration of the support not extending beyond fifteen years.</td>
            <td t="s" id="sjs-E38" v="Rs 50000-60000 stipend or Rs 10000 pm as incentive in addition to salary for employed women. Project grant of 40-60 lakhs for personnel, equipment, travel etc">Rs 50000-60000 stipend or Rs 10000 pm as incentive in addition to salary for employed women. Project grant of 40-60 lakhs for personnel, equipment, travel etc</td>
            <td t="s" id="sjs-F38" v="PhD (age limit 55 years) Women Scientists who are employed or unemployed or are desirous of coming back after a break. " xml:space="preserve">PhD (age limit 55 years) Women Scientists who are employed or unemployed or are desirous of coming back after a break. </td>
            <td t="s" id="sjs-G38" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H38" v="3+2 years">3+2 years</td>
            <td t="s" id="sjs-I38" v="http://www.dbtindia.nic.in/archives/8195">http://www.dbtindia.nic.in/archives/8195</td>
            <td t="z" id="sjs-J38"></td>
            <td t="z" id="sjs-K38"></td>
            <td t="z" id="sjs-L38"></td>
            <td t="z" id="sjs-M38"></td>
            <td t="z" id="sjs-N38"></td>
            <td t="z" id="sjs-O38"></td>
            <td t="z" id="sjs-P38"></td>
            <td t="z" id="sjs-Q38"></td>
            <td t="z" id="sjs-R38"></td>
            <td t="z" id="sjs-S38"></td>
            <td t="z" id="sjs-T38"></td>
            <td t="z" id="sjs-U38"></td>
            <td t="z" id="sjs-V38"></td>
            <td t="z" id="sjs-W38"></td>
            <td t="z" id="sjs-X38"></td>
            <td t="z" id="sjs-Y38"></td>
            <td t="z" id="sjs-Z38"></td>
            <td t="z" id="sjs-AA38"></td>
            <td t="z" id="sjs-AB38"></td>
            <td t="z" id="sjs-AC38"></td>
            <td t="z" id="sjs-AD38"></td>
            <td t="z" id="sjs-AE38"></td>
            <td t="z" id="sjs-AF38"></td>
            <td t="z" id="sjs-AG38"></td>
            <td t="z" id="sjs-AH38"></td>
            <td t="z" id="sjs-AI38"></td>
            <td t="z" id="sjs-AJ38"></td>
            <td t="z" id="sjs-AK38"></td>
            <td t="z" id="sjs-AL38"></td>
            <td t="z" id="sjs-AM38"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A39" v="Research/Entrepreunership">Research/Entrepreunership</td>
            <td t="s" id="sjs-B39" v="DBT">DBT</td>
            <td t="s" id="sjs-C39" v="Small Business Innovation Research Initiative (SBIRI)- 22 batch">Small Business Innovation Research Initiative (SBIRI)- 22 batch</td>
            <td t="s" id="sjs-D39" v="Public-Private Partnership Programme of DBT supports research initiatives of Indian Biotech Industry. Operated through BIRAC " xml:space="preserve">Public-Private Partnership Programme of DBT supports research initiatives of Indian Biotech Industry. Operated through BIRAC </td>
            <td t="s" id="sjs-E39" v="Phase I funding for establishing proof-of-concept of innovations. The support is extended as grants-in-aid (up to 80% of total project cost) and interest free loans.

Phase II funding in the form of soft loan for process/ product development, scale-up of technology, validation &amp; field trials etc. " xml:space="preserve">Phase I funding for establishing proof-of-concept of innovations. The support is extended as grants-in-aid (up to 80% of total project cost) and interest free loans.
              <br>
              <br>Phase II funding in the form of soft loan for process/ product development, scale-up of technology, validation &amp; field trials etc.
            </td>
            <td t="s" id="sjs-F39" v="DSIR recognised private entities can submit application solely or jointly with  other private or public partner (Universities or National Institutes).">DSIR recognised private entities can submit application solely or jointly with other private or public partner (Universities or National Institutes).</td>
            <td t="s" id="sjs-G39" v="To be Announced">To be Announced</td>
            <td t="z" id="sjs-H39"></td>
            <td t="s" id="sjs-I39" v="http://sbiri.nic.in/HTML/about_sbiri.html">http://sbiri.nic.in/HTML/about_sbiri.html</td>
            <td t="z" id="sjs-J39"></td>
            <td t="z" id="sjs-K39"></td>
            <td t="z" id="sjs-L39"></td>
            <td t="z" id="sjs-M39"></td>
            <td t="z" id="sjs-N39"></td>
            <td t="z" id="sjs-O39"></td>
            <td t="z" id="sjs-P39"></td>
            <td t="z" id="sjs-Q39"></td>
            <td t="z" id="sjs-R39"></td>
            <td t="z" id="sjs-S39"></td>
            <td t="z" id="sjs-T39"></td>
            <td t="z" id="sjs-U39"></td>
            <td t="z" id="sjs-V39"></td>
            <td t="z" id="sjs-W39"></td>
            <td t="z" id="sjs-X39"></td>
            <td t="z" id="sjs-Y39"></td>
            <td t="z" id="sjs-Z39"></td>
            <td t="z" id="sjs-AA39"></td>
            <td t="z" id="sjs-AB39"></td>
            <td t="z" id="sjs-AC39"></td>
            <td t="z" id="sjs-AD39"></td>
            <td t="z" id="sjs-AE39"></td>
            <td t="z" id="sjs-AF39"></td>
            <td t="z" id="sjs-AG39"></td>
            <td t="z" id="sjs-AH39"></td>
            <td t="z" id="sjs-AI39"></td>
            <td t="z" id="sjs-AJ39"></td>
            <td t="z" id="sjs-AK39"></td>
            <td t="z" id="sjs-AL39"></td>
            <td t="z" id="sjs-AM39"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A40" v="Research">Research</td>
            <td t="s" id="sjs-B40" v="DST">DST</td>
            <td t="s" id="sjs-C40" v="Cognitive Science Research Inititative">Cognitive Science Research Inititative</td>
            <td t="s" id="sjs-D40" v="Cutting edge research in cognitive science " xml:space="preserve">Cutting edge research in cognitive science </td>
            <td t="z" id="sjs-E40"></td>
            <td t="s" id="sjs-F40" v="Scientists/academicians  should have a research  background  in  Cognitive  Science  and 
hold a regular  position " xml:space="preserve">Scientists/academicians should have a research background in Cognitive Science and
              <br>hold a regular position
            </td>
            <td t="s" id="sjs-G40" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H40" v="3 years">3 years</td>
            <td t="s" id="sjs-I40" v="http://www.dst.gov.in/whats_new/whats_new13/CSI-AD-2013.pdf">http://www.dst.gov.in/whats_new/whats_new13/CSI-AD-2013.pdf</td>
            <td t="z" id="sjs-J40"></td>
            <td t="z" id="sjs-K40"></td>
            <td t="z" id="sjs-L40"></td>
            <td t="z" id="sjs-M40"></td>
            <td t="z" id="sjs-N40"></td>
            <td t="z" id="sjs-O40"></td>
            <td t="z" id="sjs-P40"></td>
            <td t="z" id="sjs-Q40"></td>
            <td t="z" id="sjs-R40"></td>
            <td t="z" id="sjs-S40"></td>
            <td t="z" id="sjs-T40"></td>
            <td t="z" id="sjs-U40"></td>
            <td t="z" id="sjs-V40"></td>
            <td t="z" id="sjs-W40"></td>
            <td t="z" id="sjs-X40"></td>
            <td t="z" id="sjs-Y40"></td>
            <td t="z" id="sjs-Z40"></td>
            <td t="z" id="sjs-AA40"></td>
            <td t="z" id="sjs-AB40"></td>
            <td t="z" id="sjs-AC40"></td>
            <td t="z" id="sjs-AD40"></td>
            <td t="z" id="sjs-AE40"></td>
            <td t="z" id="sjs-AF40"></td>
            <td t="z" id="sjs-AG40"></td>
            <td t="z" id="sjs-AH40"></td>
            <td t="z" id="sjs-AI40"></td>
            <td t="z" id="sjs-AJ40"></td>
            <td t="z" id="sjs-AK40"></td>
            <td t="z" id="sjs-AL40"></td>
            <td t="z" id="sjs-AM40"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A41" v="Research">Research</td>
            <td t="s" id="sjs-B41" v="DST (SERB)">DST (SERB)</td>
            <td t="s" id="sjs-C41" v="Industry Relevant R&amp;D">Industry Relevant R&amp;D</td>
            <td t="s" id="sjs-D41" v="to utilize the expertise available in  academic institutions  and  national laboratories to solve industry specific problems for the larger benefit of society">to utilize the expertise available in academic institutions and national laboratories to solve industry specific problems for the larger benefit of society</td>
            <td t="s" id="sjs-E41" v="The funding shall be shared between SERB and Industry where industry share should not be less than 50 % of the total budget.  The SERB share shall not exceed Rs. 50 lakh for a project">The funding shall be shared between SERB and Industry where industry share should not be less than 50 % of the total budget. The SERB share shall not exceed Rs. 50 lakh for a project</td>
            <td t="s" id="sjs-F41" v="The academic partner must hold a regular academic/research position in an academic institution. All industries (including MSME &amp; industrial R&amp;D Centres) are eligible.">The academic partner must hold a regular academic/research position in an academic institution. All industries (including MSME &amp; industrial R&amp;D Centres) are eligible.</td>
            <td t="s" id="sjs-G41" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H41" v="3 years">3 years</td>
            <td t="s" id="sjs-I41" v="http://www.serb.gov.in/irrd.php">http://www.serb.gov.in/irrd.php</td>
            <td t="z" id="sjs-J41"></td>
            <td t="z" id="sjs-K41"></td>
            <td t="z" id="sjs-L41"></td>
            <td t="z" id="sjs-M41"></td>
            <td t="z" id="sjs-N41"></td>
            <td t="z" id="sjs-O41"></td>
            <td t="z" id="sjs-P41"></td>
            <td t="z" id="sjs-Q41"></td>
            <td t="z" id="sjs-R41"></td>
            <td t="z" id="sjs-S41"></td>
            <td t="z" id="sjs-T41"></td>
            <td t="z" id="sjs-U41"></td>
            <td t="z" id="sjs-V41"></td>
            <td t="z" id="sjs-W41"></td>
            <td t="z" id="sjs-X41"></td>
            <td t="z" id="sjs-Y41"></td>
            <td t="z" id="sjs-Z41"></td>
            <td t="z" id="sjs-AA41"></td>
            <td t="z" id="sjs-AB41"></td>
            <td t="z" id="sjs-AC41"></td>
            <td t="z" id="sjs-AD41"></td>
            <td t="z" id="sjs-AE41"></td>
            <td t="z" id="sjs-AF41"></td>
            <td t="z" id="sjs-AG41"></td>
            <td t="z" id="sjs-AH41"></td>
            <td t="z" id="sjs-AI41"></td>
            <td t="z" id="sjs-AJ41"></td>
            <td t="z" id="sjs-AK41"></td>
            <td t="z" id="sjs-AL41"></td>
            <td t="z" id="sjs-AM41"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A42" v="Research">Research</td>
            <td t="s" id="sjs-B42" v="DST (SERB)">DST (SERB)</td>
            <td t="s" id="sjs-C42" v="Early Career Research Award (SERB)">Early Career Research Award (SERB)</td>
            <td t="s" id="sjs-D42" v="To provide quick research support to the young researchers who are in their early career " xml:space="preserve">To provide quick research support to the young researchers who are in their early career </td>
            <td t="s" id="sjs-E42" v="up to Rs. 50 Lakhs (excluding overheads)">up to Rs. 50 Lakhs (excluding overheads)</td>
            <td t="s" id="sjs-F42" v="Applicant must hold a PhD andregularacademic/research position in a recognized academic institution and must be within the first two years of their regular service">Applicant must hold a PhD andregularacademic/research position in a recognized academic institution and must be within the first two years of their regular service</td>
            <td t="s" id="sjs-G42" v="30th, Sep, 2016">30th, Sep, 2016</td>
            <td t="s" id="sjs-H42" v="3 years">3 years</td>
            <td t="s" id="sjs-I42" v="http://serbonline.in/SERB/ecr">http://serbonline.in/SERB/ecr</td>
            <td t="z" id="sjs-J42"></td>
            <td t="z" id="sjs-K42"></td>
            <td t="z" id="sjs-L42"></td>
            <td t="z" id="sjs-M42"></td>
            <td t="z" id="sjs-N42"></td>
            <td t="z" id="sjs-O42"></td>
            <td t="z" id="sjs-P42"></td>
            <td t="z" id="sjs-Q42"></td>
            <td t="z" id="sjs-R42"></td>
            <td t="z" id="sjs-S42"></td>
            <td t="z" id="sjs-T42"></td>
            <td t="z" id="sjs-U42"></td>
            <td t="z" id="sjs-V42"></td>
            <td t="z" id="sjs-W42"></td>
            <td t="z" id="sjs-X42"></td>
            <td t="z" id="sjs-Y42"></td>
            <td t="z" id="sjs-Z42"></td>
            <td t="z" id="sjs-AA42"></td>
            <td t="z" id="sjs-AB42"></td>
            <td t="z" id="sjs-AC42"></td>
            <td t="z" id="sjs-AD42"></td>
            <td t="z" id="sjs-AE42"></td>
            <td t="z" id="sjs-AF42"></td>
            <td t="z" id="sjs-AG42"></td>
            <td t="z" id="sjs-AH42"></td>
            <td t="z" id="sjs-AI42"></td>
            <td t="z" id="sjs-AJ42"></td>
            <td t="z" id="sjs-AK42"></td>
            <td t="z" id="sjs-AL42"></td>
            <td t="z" id="sjs-AM42"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A43" v="Research">Research</td>
            <td t="s" id="sjs-B43" v="DST (SERB)">DST (SERB)</td>
            <td t="s" id="sjs-C43" v="High risk high reward research">High risk high reward research</td>
            <td t="s" id="sjs-D43" v="to support proposals that are conceptually new and risky, and if successful, expected to have a paradigm shifting influence on science and technology">to support proposals that are conceptually new and risky, and if successful, expected to have a paradigm shifting influence on science and technology</td>
            <td t="z" id="sjs-E43"></td>
            <td t="s" id="sjs-F43" v="The applicant(s) must hold a regular academic/research position in a recognized institution">The applicant(s) must hold a regular academic/research position in a recognized institution</td>
            <td t="s" id="sjs-G43" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H43" v="3 years (extendable to 5 years)">3 years (extendable to 5 years)</td>
            <td t="s" id="sjs-I43" v="http://www.serb.gov.in/hrhrr.php">http://www.serb.gov.in/hrhrr.php</td>
            <td t="z" id="sjs-J43"></td>
            <td t="z" id="sjs-K43"></td>
            <td t="z" id="sjs-L43"></td>
            <td t="z" id="sjs-M43"></td>
            <td t="z" id="sjs-N43"></td>
            <td t="z" id="sjs-O43"></td>
            <td t="z" id="sjs-P43"></td>
            <td t="z" id="sjs-Q43"></td>
            <td t="z" id="sjs-R43"></td>
            <td t="z" id="sjs-S43"></td>
            <td t="z" id="sjs-T43"></td>
            <td t="z" id="sjs-U43"></td>
            <td t="z" id="sjs-V43"></td>
            <td t="z" id="sjs-W43"></td>
            <td t="z" id="sjs-X43"></td>
            <td t="z" id="sjs-Y43"></td>
            <td t="z" id="sjs-Z43"></td>
            <td t="z" id="sjs-AA43"></td>
            <td t="z" id="sjs-AB43"></td>
            <td t="z" id="sjs-AC43"></td>
            <td t="z" id="sjs-AD43"></td>
            <td t="z" id="sjs-AE43"></td>
            <td t="z" id="sjs-AF43"></td>
            <td t="z" id="sjs-AG43"></td>
            <td t="z" id="sjs-AH43"></td>
            <td t="z" id="sjs-AI43"></td>
            <td t="z" id="sjs-AJ43"></td>
            <td t="z" id="sjs-AK43"></td>
            <td t="z" id="sjs-AL43"></td>
            <td t="z" id="sjs-AM43"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A44" v="Research">Research</td>
            <td t="s" id="sjs-B44" v="DST (SERB)">DST (SERB)</td>
            <td t="s" id="sjs-C44" v="Extra Mural Research Funding (Individual Centric)">Extra Mural Research Funding (Individual Centric)</td>
            <td t="z" id="sjs-D44"></td>
            <td t="s" id="sjs-E44" v="Equipment, personnel, Supplies &amp; consumables, contigencies and travel " xml:space="preserve">Equipment, personnel, Supplies &amp; consumables, contigencies and travel </td>
            <td t="s" id="sjs-F44" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="s" id="sjs-G44" v="31st, Dec, 2016">31st, Dec, 2016</td>
            <td t="s" id="sjs-H44" v="3 years">3 years</td>
            <td t="s" id="sjs-I44" v="http://serb.gov.in/emr.php">http://serb.gov.in/emr.php</td>
            <td t="z" id="sjs-J44"></td>
            <td t="z" id="sjs-K44"></td>
            <td t="z" id="sjs-L44"></td>
            <td t="z" id="sjs-M44"></td>
            <td t="z" id="sjs-N44"></td>
            <td t="z" id="sjs-O44"></td>
            <td t="z" id="sjs-P44"></td>
            <td t="z" id="sjs-Q44"></td>
            <td t="z" id="sjs-R44"></td>
            <td t="z" id="sjs-S44"></td>
            <td t="z" id="sjs-T44"></td>
            <td t="z" id="sjs-U44"></td>
            <td t="z" id="sjs-V44"></td>
            <td t="z" id="sjs-W44"></td>
            <td t="z" id="sjs-X44"></td>
            <td t="z" id="sjs-Y44"></td>
            <td t="z" id="sjs-Z44"></td>
            <td t="z" id="sjs-AA44"></td>
            <td t="z" id="sjs-AB44"></td>
            <td t="z" id="sjs-AC44"></td>
            <td t="z" id="sjs-AD44"></td>
            <td t="z" id="sjs-AE44"></td>
            <td t="z" id="sjs-AF44"></td>
            <td t="z" id="sjs-AG44"></td>
            <td t="z" id="sjs-AH44"></td>
            <td t="z" id="sjs-AI44"></td>
            <td t="z" id="sjs-AJ44"></td>
            <td t="z" id="sjs-AK44"></td>
            <td t="z" id="sjs-AL44"></td>
            <td t="z" id="sjs-AM44"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A45" v="Research">Research</td>
            <td t="s" id="sjs-B45" v="DBT">DBT</td>
            <td t="s" id="sjs-C45" v="Pre-proposals on Plant Microbe Interactions (DBT)">Pre-proposals on Plant Microbe Interactions (DBT)</td>
            <td t="s" id="sjs-D45" v="To support early ideas on plant microbe interactions with an impact on agricultural production.">To support early ideas on plant microbe interactions with an impact on agricultural production.</td>
            <td t="z" id="sjs-E45"></td>
            <td t="s" id="sjs-F45" v="Scientists working in Indian research institutes/universities">Scientists working in Indian research institutes/universities</td>
            <td t="s" id="sjs-G45" v="To be announced">To be announced</td>
            <td t="z" id="sjs-H45"></td>
            <td t="s" id="sjs-I45" v="http://www.dbtindia.nic.in/wp-content/uploads/Plantmicrobeproposals28042016.pdf">http://www.dbtindia.nic.in/wp-content/uploads/Plantmicrobeproposals28042016.pdf</td>
            <td t="z" id="sjs-J45"></td>
            <td t="z" id="sjs-K45"></td>
            <td t="z" id="sjs-L45"></td>
            <td t="z" id="sjs-M45"></td>
            <td t="z" id="sjs-N45"></td>
            <td t="z" id="sjs-O45"></td>
            <td t="z" id="sjs-P45"></td>
            <td t="z" id="sjs-Q45"></td>
            <td t="z" id="sjs-R45"></td>
            <td t="z" id="sjs-S45"></td>
            <td t="z" id="sjs-T45"></td>
            <td t="z" id="sjs-U45"></td>
            <td t="z" id="sjs-V45"></td>
            <td t="z" id="sjs-W45"></td>
            <td t="z" id="sjs-X45"></td>
            <td t="z" id="sjs-Y45"></td>
            <td t="z" id="sjs-Z45"></td>
            <td t="z" id="sjs-AA45"></td>
            <td t="z" id="sjs-AB45"></td>
            <td t="z" id="sjs-AC45"></td>
            <td t="z" id="sjs-AD45"></td>
            <td t="z" id="sjs-AE45"></td>
            <td t="z" id="sjs-AF45"></td>
            <td t="z" id="sjs-AG45"></td>
            <td t="z" id="sjs-AH45"></td>
            <td t="z" id="sjs-AI45"></td>
            <td t="z" id="sjs-AJ45"></td>
            <td t="z" id="sjs-AK45"></td>
            <td t="z" id="sjs-AL45"></td>
            <td t="z" id="sjs-AM45"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A46" v="Research">Research</td>
            <td t="s" id="sjs-B46" v="DST (SERB)">DST (SERB)</td>
            <td t="s" id="sjs-C46" v="Special Initiatives in Organic Chemistry">Special Initiatives in Organic Chemistry</td>
            <td t="z" id="sjs-D46"></td>
            <td t="s" id="sjs-E46" v="Equipment, personnel, Supplies &amp; consumables, contigencies and travel " xml:space="preserve">Equipment, personnel, Supplies &amp; consumables, contigencies and travel </td>
            <td t="s" id="sjs-F46" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="z" id="sjs-G46"></td>
            <td t="z" id="sjs-H46"></td>
            <td t="s" id="sjs-I46" v="http://serb.gov.in/pdfs/OC-ADvt.pdf">http://serb.gov.in/pdfs/OC-ADvt.pdf</td>
            <td t="z" id="sjs-J46"></td>
            <td t="z" id="sjs-K46"></td>
            <td t="z" id="sjs-L46"></td>
            <td t="z" id="sjs-M46"></td>
            <td t="z" id="sjs-N46"></td>
            <td t="z" id="sjs-O46"></td>
            <td t="z" id="sjs-P46"></td>
            <td t="z" id="sjs-Q46"></td>
            <td t="z" id="sjs-R46"></td>
            <td t="z" id="sjs-S46"></td>
            <td t="z" id="sjs-T46"></td>
            <td t="z" id="sjs-U46"></td>
            <td t="z" id="sjs-V46"></td>
            <td t="z" id="sjs-W46"></td>
            <td t="z" id="sjs-X46"></td>
            <td t="z" id="sjs-Y46"></td>
            <td t="z" id="sjs-Z46"></td>
            <td t="z" id="sjs-AA46"></td>
            <td t="z" id="sjs-AB46"></td>
            <td t="z" id="sjs-AC46"></td>
            <td t="z" id="sjs-AD46"></td>
            <td t="z" id="sjs-AE46"></td>
            <td t="z" id="sjs-AF46"></td>
            <td t="z" id="sjs-AG46"></td>
            <td t="z" id="sjs-AH46"></td>
            <td t="z" id="sjs-AI46"></td>
            <td t="z" id="sjs-AJ46"></td>
            <td t="z" id="sjs-AK46"></td>
            <td t="z" id="sjs-AL46"></td>
            <td t="z" id="sjs-AM46"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A47" v="Research">Research</td>
            <td t="s" id="sjs-B47" v=" DST " xml:space="preserve"> DST </td>
            <td t="s" id="sjs-C47" v="Nano Mission">Nano Mission</td>
            <td t="s" id="sjs-D47" v="For research in the field of Nano science and technology, online application">For research in the field of Nano science and technology, online application</td>
            <td t="z" id="sjs-E47"></td>
            <td t="z" id="sjs-F47"></td>
            <td t="s" id="sjs-G47" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H47" v="3 years">3 years</td>
            <td t="s" id="sjs-I47" v="http://www.nanomission.gov.in/">http://www.nanomission.gov.in/</td>
            <td t="z" id="sjs-J47"></td>
            <td t="z" id="sjs-K47"></td>
            <td t="z" id="sjs-L47"></td>
            <td t="z" id="sjs-M47"></td>
            <td t="z" id="sjs-N47"></td>
            <td t="z" id="sjs-O47"></td>
            <td t="z" id="sjs-P47"></td>
            <td t="z" id="sjs-Q47"></td>
            <td t="z" id="sjs-R47"></td>
            <td t="z" id="sjs-S47"></td>
            <td t="z" id="sjs-T47"></td>
            <td t="z" id="sjs-U47"></td>
            <td t="z" id="sjs-V47"></td>
            <td t="z" id="sjs-W47"></td>
            <td t="z" id="sjs-X47"></td>
            <td t="z" id="sjs-Y47"></td>
            <td t="z" id="sjs-Z47"></td>
            <td t="z" id="sjs-AA47"></td>
            <td t="z" id="sjs-AB47"></td>
            <td t="z" id="sjs-AC47"></td>
            <td t="z" id="sjs-AD47"></td>
            <td t="z" id="sjs-AE47"></td>
            <td t="z" id="sjs-AF47"></td>
            <td t="z" id="sjs-AG47"></td>
            <td t="z" id="sjs-AH47"></td>
            <td t="z" id="sjs-AI47"></td>
            <td t="z" id="sjs-AJ47"></td>
            <td t="z" id="sjs-AK47"></td>
            <td t="z" id="sjs-AL47"></td>
            <td t="z" id="sjs-AM47"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A48" v="Women in Science (Research)">Women in Science (Research)</td>
            <td t="s" id="sjs-B48" v="DST">DST</td>
            <td t="s" id="sjs-C48" v="Woman Scientist scheme (WOS-A)">Woman Scientist scheme (WOS-A)</td>
            <td t="s" id="sjs-D48" v="WOS-A-R&amp;D">WOS-A-R&amp;D</td>
            <td t="s" id="sjs-E48" v="WOS-A: Rs 55,000pm salary + Rs 30 lakh research grant.">WOS-A: Rs 55,000pm salary + Rs 30 lakh research grant.</td>
            <td t="s" id="sjs-F48" v="for unemployed women scientists">for unemployed women scientists</td>
            <td t="s" id="sjs-G48" v="Rolling programme">Rolling programme</td>
            <td t="s" id="sjs-H48" v="3 years">3 years</td>
            <td t="s" id="sjs-I48" v="http://www.dst.gov.in/scientific-programme/women-scientists.htm">http://www.dst.gov.in/scientific-programme/women-scientists.htm</td>
            <td t="z" id="sjs-J48"></td>
            <td t="z" id="sjs-K48"></td>
            <td t="z" id="sjs-L48"></td>
            <td t="z" id="sjs-M48"></td>
            <td t="z" id="sjs-N48"></td>
            <td t="z" id="sjs-O48"></td>
            <td t="z" id="sjs-P48"></td>
            <td t="z" id="sjs-Q48"></td>
            <td t="z" id="sjs-R48"></td>
            <td t="z" id="sjs-S48"></td>
            <td t="z" id="sjs-T48"></td>
            <td t="z" id="sjs-U48"></td>
            <td t="z" id="sjs-V48"></td>
            <td t="z" id="sjs-W48"></td>
            <td t="z" id="sjs-X48"></td>
            <td t="z" id="sjs-Y48"></td>
            <td t="z" id="sjs-Z48"></td>
            <td t="z" id="sjs-AA48"></td>
            <td t="z" id="sjs-AB48"></td>
            <td t="z" id="sjs-AC48"></td>
            <td t="z" id="sjs-AD48"></td>
            <td t="z" id="sjs-AE48"></td>
            <td t="z" id="sjs-AF48"></td>
            <td t="z" id="sjs-AG48"></td>
            <td t="z" id="sjs-AH48"></td>
            <td t="z" id="sjs-AI48"></td>
            <td t="z" id="sjs-AJ48"></td>
            <td t="z" id="sjs-AK48"></td>
            <td t="z" id="sjs-AL48"></td>
            <td t="z" id="sjs-AM48"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A49" v="Women in Science (Research)">Women in Science (Research)</td>
            <td t="s" id="sjs-B49" v="DST">DST</td>
            <td t="s" id="sjs-C49" v="Woman Scientist scheme (WOS-B)">Woman Scientist scheme (WOS-B)</td>
            <td t="s" id="sjs-D49" v="WOS-B-application of research and solution for societal issues. Two modes:- Internsip mode:For women scientists/technologists having no previous experience of writing implementing projects, Project mode: The women scientists/technologists who have a PhD Degree or master’s in science with adequate research experience and are either continuing to work as post Doc’s or have just attained their degrees">WOS-B-application of research and solution for societal issues. Two modes:-<span style="font-size:10pt;"><b> Internsip mode</b></span><span style="font-size:10pt;">:For women scientists/technologists having no previous experience of writing implementing projects, </span><span style="font-size:10pt;"><b>Project mode:</b></span><span style="font-size:10pt;"> The women scientists/technologists who have a PhD Degree or master’s in science with adequate research experience and are either continuing to work as post Doc’s or have just attained their degrees</span></td>
            <td t="s" id="sjs-E49" v="Internship mode: 18000/month for M.Sc and 25,000 for PhD,Project mode: 18,000-35,000/month " xml:space="preserve">Internship mode: 18000/month for M.Sc and 25,000 for PhD,Project mode: 18,000-35,000/month </td>
            <td t="s" id="sjs-F49" v="For unemployed women scientists whose age limit is below 57 years">For unemployed women scientists whose age limit is below 57 years</td>
            <td t="s" id="sjs-G49" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H49" v="3+2 years">3+2 years</td>
            <td t="s" id="sjs-I49" v="http://www.dst.gov.in/scientific-programmes/scientific-engineering-research/women-scientists-programs">http://www.dst.gov.in/scientific-programmes/scientific-engineering-research/women-scientists-programs</td>
            <td t="z" id="sjs-J49"></td>
            <td t="z" id="sjs-K49"></td>
            <td t="z" id="sjs-L49"></td>
            <td t="z" id="sjs-M49"></td>
            <td t="z" id="sjs-N49"></td>
            <td t="z" id="sjs-O49"></td>
            <td t="z" id="sjs-P49"></td>
            <td t="z" id="sjs-Q49"></td>
            <td t="z" id="sjs-R49"></td>
            <td t="z" id="sjs-S49"></td>
            <td t="z" id="sjs-T49"></td>
            <td t="z" id="sjs-U49"></td>
            <td t="z" id="sjs-V49"></td>
            <td t="z" id="sjs-W49"></td>
            <td t="z" id="sjs-X49"></td>
            <td t="z" id="sjs-Y49"></td>
            <td t="z" id="sjs-Z49"></td>
            <td t="z" id="sjs-AA49"></td>
            <td t="z" id="sjs-AB49"></td>
            <td t="z" id="sjs-AC49"></td>
            <td t="z" id="sjs-AD49"></td>
            <td t="z" id="sjs-AE49"></td>
            <td t="z" id="sjs-AF49"></td>
            <td t="z" id="sjs-AG49"></td>
            <td t="z" id="sjs-AH49"></td>
            <td t="z" id="sjs-AI49"></td>
            <td t="z" id="sjs-AJ49"></td>
            <td t="z" id="sjs-AK49"></td>
            <td t="z" id="sjs-AL49"></td>
            <td t="z" id="sjs-AM49"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A50" v="Research">Research</td>
            <td t="s" id="sjs-B50" v="EARTHWATCH Institute US/International">EARTHWATCH Institute US/International</td>
            <td t="s" id="sjs-C50" v="Research Grants">Research Grants</td>
            <td t="z" id="sjs-D50"></td>
            <td t="s" id="sjs-E50" v="average $850 per volunteer with  average project grant range between $17,000 and $51,000 for one full field season. Funds cover food, accommodation, and in-country travel,  PI travel to and from the field, basic field equipment,  support of staff and associates from the host country " xml:space="preserve">average $850 per volunteer with average project grant range between $17,000 and $51,000 for one full field season. Funds cover food, accommodation, and in-country travel, PI travel to and from the field, basic field equipment, support of staff and associates from the host country </td>
            <td t="s" id="sjs-F50" v="Advanced scholars and professionals of any nationality, covering any geographic region. EARTHWATCH supports doctoral and post-doctoral researchers, or researchers with equivalent scholarship or commensurate life experience">Advanced scholars and professionals of any nationality, covering any geographic region. EARTHWATCH supports doctoral and post-doctoral researchers, or researchers with equivalent scholarship or commensurate life experience</td>
            <td t="s" id="sjs-G50" v="18 Months prior to reseach initiation (12th June, 2016)">18 Months prior to reseach initiation (12th June, 2016)</td>
            <td t="s" id="sjs-H50" v="Grants renewed annually, long-term research projects are encouraged. Principal investigators to indicate their projected research term.">Grants renewed annually, long-term research projects are encouraged. Principal investigators to indicate their projected research term.</td>
            <td t="s" id="sjs-I50" v="http://www.earthwatch.org/aboutus/research/scientistopps/reqresprop/">http://www.earthwatch.org/aboutus/research/scientistopps/reqresprop/</td>
            <td t="z" id="sjs-J50"></td>
            <td t="z" id="sjs-K50"></td>
            <td t="z" id="sjs-L50"></td>
            <td t="z" id="sjs-M50"></td>
            <td t="z" id="sjs-N50"></td>
            <td t="z" id="sjs-O50"></td>
            <td t="z" id="sjs-P50"></td>
            <td t="z" id="sjs-Q50"></td>
            <td t="z" id="sjs-R50"></td>
            <td t="z" id="sjs-S50"></td>
            <td t="z" id="sjs-T50"></td>
            <td t="z" id="sjs-U50"></td>
            <td t="z" id="sjs-V50"></td>
            <td t="z" id="sjs-W50"></td>
            <td t="z" id="sjs-X50"></td>
            <td t="z" id="sjs-Y50"></td>
            <td t="z" id="sjs-Z50"></td>
            <td t="z" id="sjs-AA50"></td>
            <td t="z" id="sjs-AB50"></td>
            <td t="z" id="sjs-AC50"></td>
            <td t="z" id="sjs-AD50"></td>
            <td t="z" id="sjs-AE50"></td>
            <td t="z" id="sjs-AF50"></td>
            <td t="z" id="sjs-AG50"></td>
            <td t="z" id="sjs-AH50"></td>
            <td t="z" id="sjs-AI50"></td>
            <td t="z" id="sjs-AJ50"></td>
            <td t="z" id="sjs-AK50"></td>
            <td t="z" id="sjs-AL50"></td>
            <td t="z" id="sjs-AM50"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A51" v="Research">Research</td>
            <td t="s" id="sjs-B51" v="Gates">Gates</td>
            <td t="s" id="sjs-C51" v="Grand Challenges Explorations">Grand Challenges Explorations</td>
            <td t="s" id="sjs-D51" v="Pump-priming funding for initial ideas, for topics listed in the current call.">Pump-priming funding for initial ideas, for topics listed in the current call.</td>
            <td t="s" id="sjs-E51" v="$100,000 initially with follow-on for successful projects to the tune of $1,000,000">$100,000 initially with follow-on for successful projects to the tune of $1,000,000</td>
            <td t="s" id="sjs-F51" v="No restrictions">No restrictions</td>
            <td t="s" id="sjs-G51" v="To be announced (May)">To be announced (May)</td>
            <td t="s" id="sjs-H51" v="1-6 years* (with extension)">1-6 years* (with extension)</td>
            <td t="s" id="sjs-I51" v="http://www.grandchallenges.org/Explorations/Pages/Introduction.aspx">http://www.grandchallenges.org/Explorations/Pages/Introduction.aspx</td>
            <td t="z" id="sjs-J51"></td>
            <td t="z" id="sjs-K51"></td>
            <td t="z" id="sjs-L51"></td>
            <td t="z" id="sjs-M51"></td>
            <td t="z" id="sjs-N51"></td>
            <td t="z" id="sjs-O51"></td>
            <td t="z" id="sjs-P51"></td>
            <td t="z" id="sjs-Q51"></td>
            <td t="z" id="sjs-R51"></td>
            <td t="z" id="sjs-S51"></td>
            <td t="z" id="sjs-T51"></td>
            <td t="z" id="sjs-U51"></td>
            <td t="z" id="sjs-V51"></td>
            <td t="z" id="sjs-W51"></td>
            <td t="z" id="sjs-X51"></td>
            <td t="z" id="sjs-Y51"></td>
            <td t="z" id="sjs-Z51"></td>
            <td t="z" id="sjs-AA51"></td>
            <td t="z" id="sjs-AB51"></td>
            <td t="z" id="sjs-AC51"></td>
            <td t="z" id="sjs-AD51"></td>
            <td t="z" id="sjs-AE51"></td>
            <td t="z" id="sjs-AF51"></td>
            <td t="z" id="sjs-AG51"></td>
            <td t="z" id="sjs-AH51"></td>
            <td t="z" id="sjs-AI51"></td>
            <td t="z" id="sjs-AJ51"></td>
            <td t="z" id="sjs-AK51"></td>
            <td t="z" id="sjs-AL51"></td>
            <td t="z" id="sjs-AM51"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A52" v="Research">Research</td>
            <td t="s" id="sjs-B52" v="HHMI-GATES-the Wellcome Trust- Calouste Gulbenkian Foundation">HHMI-GATES-the Wellcome Trust- Calouste Gulbenkian Foundation</td>
            <td t="s" id="sjs-C52" v="International Research Scholars program- 2016 competition " xml:space="preserve">International Research Scholars program- 2016 competition </td>
            <td t="s" id="sjs-D52" v="Scheme for supporting highly  qualified  scientists working in selected countries outside US/UK who are in the critical beginning stages of their independent careers. " xml:space="preserve">Scheme for supporting highly qualified scientists working in selected countries outside US/UK who are in the critical beginning stages of their independent careers. </td>
            <td t="s" id="sjs-E52" v="upto $650,000 ($250,000 in year 1 and $100,000 for the following 4 years) " xml:space="preserve">upto $650,000 ($250,000 in year 1 and $100,000 for the following 4 years) </td>
            <td t="s" id="sjs-F52" v="Eligible candidates must have trained in the US/UK at the doctoral, medical or postdoctoral level for at least one year. Applicants must hold a full time position as an independent scientist at a research oriented university, non-profit research institution in any country (India eligible) except the G-7 countries and select excluded countries">Eligible candidates must have trained in the US/UK at the doctoral, medical or postdoctoral level for at least one year. Applicants must hold a full time position as an independent scientist at a research oriented university, non-profit research institution in any country (India eligible) except the G-7 countries and select excluded countries</td>
            <td t="s" id="sjs-G52" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H52" v="5 years">5 years</td>
            <td t="s" id="sjs-I52" v="https://www.hhmi.org/programs/biomedical-research/international-programs">https://www.hhmi.org/programs/biomedical-research/international-programs</td>
            <td t="z" id="sjs-J52"></td>
            <td t="z" id="sjs-K52"></td>
            <td t="z" id="sjs-L52"></td>
            <td t="z" id="sjs-M52"></td>
            <td t="z" id="sjs-N52"></td>
            <td t="z" id="sjs-O52"></td>
            <td t="z" id="sjs-P52"></td>
            <td t="z" id="sjs-Q52"></td>
            <td t="z" id="sjs-R52"></td>
            <td t="z" id="sjs-S52"></td>
            <td t="z" id="sjs-T52"></td>
            <td t="z" id="sjs-U52"></td>
            <td t="z" id="sjs-V52"></td>
            <td t="z" id="sjs-W52"></td>
            <td t="z" id="sjs-X52"></td>
            <td t="z" id="sjs-Y52"></td>
            <td t="z" id="sjs-Z52"></td>
            <td t="z" id="sjs-AA52"></td>
            <td t="z" id="sjs-AB52"></td>
            <td t="z" id="sjs-AC52"></td>
            <td t="z" id="sjs-AD52"></td>
            <td t="z" id="sjs-AE52"></td>
            <td t="z" id="sjs-AF52"></td>
            <td t="z" id="sjs-AG52"></td>
            <td t="z" id="sjs-AH52"></td>
            <td t="z" id="sjs-AI52"></td>
            <td t="z" id="sjs-AJ52"></td>
            <td t="z" id="sjs-AK52"></td>
            <td t="z" id="sjs-AL52"></td>
            <td t="z" id="sjs-AM52"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A53" v="Research">Research</td>
            <td t="s" id="sjs-B53" v="ICMR">ICMR</td>
            <td t="s" id="sjs-C53" v="AD-HOC RESEARCH SCHEMES&nbsp;" xml:space="preserve">AD-HOC RESEARCH SCHEMES&nbsp;</td>
            <td t="s" id="sjs-D53" v="Research in health and biomedical sciences">Research in health and biomedical sciences</td>
            <td t="s" id="sjs-E53" v="Research staff, Equipment, Contingencies, Travel, Overheads " xml:space="preserve">Research staff, Equipment, Contingencies, Travel, Overheads </td>
            <td t="s" id="sjs-F53" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="s" id="sjs-G53" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H53" v="2-3 years " xml:space="preserve">2-3 years </td>
            <td t="s" id="sjs-I53" v="http://www.icmr.nic.in/ad-hoc.htm">http://www.icmr.nic.in/ad-hoc.htm</td>
            <td t="z" id="sjs-J53"></td>
            <td t="z" id="sjs-K53"></td>
            <td t="z" id="sjs-L53"></td>
            <td t="z" id="sjs-M53"></td>
            <td t="z" id="sjs-N53"></td>
            <td t="z" id="sjs-O53"></td>
            <td t="z" id="sjs-P53"></td>
            <td t="z" id="sjs-Q53"></td>
            <td t="z" id="sjs-R53"></td>
            <td t="z" id="sjs-S53"></td>
            <td t="z" id="sjs-T53"></td>
            <td t="z" id="sjs-U53"></td>
            <td t="z" id="sjs-V53"></td>
            <td t="z" id="sjs-W53"></td>
            <td t="z" id="sjs-X53"></td>
            <td t="z" id="sjs-Y53"></td>
            <td t="z" id="sjs-Z53"></td>
            <td t="z" id="sjs-AA53"></td>
            <td t="z" id="sjs-AB53"></td>
            <td t="z" id="sjs-AC53"></td>
            <td t="z" id="sjs-AD53"></td>
            <td t="z" id="sjs-AE53"></td>
            <td t="z" id="sjs-AF53"></td>
            <td t="z" id="sjs-AG53"></td>
            <td t="z" id="sjs-AH53"></td>
            <td t="z" id="sjs-AI53"></td>
            <td t="z" id="sjs-AJ53"></td>
            <td t="z" id="sjs-AK53"></td>
            <td t="z" id="sjs-AL53"></td>
            <td t="z" id="sjs-AM53"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A54" v="Research">Research</td>
            <td t="s" id="sjs-B54" v="James McDonnell Foundation (USA)">James McDonnell Foundation (USA)</td>
            <td t="s" id="sjs-C54" v="2016 Scholar Awards in Complex Systems Science">2016 Scholar Awards in Complex Systems Science</td>
            <td t="s" id="sjs-D54" v="Supports research directed toward the development of theoretical and mathematical tools that can be applied to the study of complex, adaptive, nonlinear systems.">Supports research directed toward the development of theoretical and mathematical tools that can be applied to the study of complex, adaptive, nonlinear systems.</td>
            <td t="s" id="sjs-E54" v="Flexible funding of $450,000">Flexible funding of $450,000</td>
            <td t="s" id="sjs-F54" v="5-15 years post PhD with a  regular position in a non-profit research institution. No nationality restrictions">5-15 years post PhD with a regular position in a non-profit research institution. No nationality restrictions</td>
            <td t="s" id="sjs-G54" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H54" v="3-6 years">3-6 years</td>
            <td t="s" id="sjs-I54" v="http://www.jsmf.org/apply/scholar-cs/index.htm">http://www.jsmf.org/apply/scholar-cs/index.htm</td>
            <td t="z" id="sjs-J54"></td>
            <td t="z" id="sjs-K54"></td>
            <td t="z" id="sjs-L54"></td>
            <td t="z" id="sjs-M54"></td>
            <td t="z" id="sjs-N54"></td>
            <td t="z" id="sjs-O54"></td>
            <td t="z" id="sjs-P54"></td>
            <td t="z" id="sjs-Q54"></td>
            <td t="z" id="sjs-R54"></td>
            <td t="z" id="sjs-S54"></td>
            <td t="z" id="sjs-T54"></td>
            <td t="z" id="sjs-U54"></td>
            <td t="z" id="sjs-V54"></td>
            <td t="z" id="sjs-W54"></td>
            <td t="z" id="sjs-X54"></td>
            <td t="z" id="sjs-Y54"></td>
            <td t="z" id="sjs-Z54"></td>
            <td t="z" id="sjs-AA54"></td>
            <td t="z" id="sjs-AB54"></td>
            <td t="z" id="sjs-AC54"></td>
            <td t="z" id="sjs-AD54"></td>
            <td t="z" id="sjs-AE54"></td>
            <td t="z" id="sjs-AF54"></td>
            <td t="z" id="sjs-AG54"></td>
            <td t="z" id="sjs-AH54"></td>
            <td t="z" id="sjs-AI54"></td>
            <td t="z" id="sjs-AJ54"></td>
            <td t="z" id="sjs-AK54"></td>
            <td t="z" id="sjs-AL54"></td>
            <td t="z" id="sjs-AM54"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A55" v="Research">Research</td>
            <td t="s" id="sjs-B55" v="Simons Foundation Autism Research Initiative (SFARI)">Simons Foundation Autism Research Initiative (SFARI)</td>
            <td t="s" id="sjs-C55" v="SFARI Explorer Awards">SFARI Explorer Awards</td>
            <td t="s" id="sjs-D55" v="neuroscience research which complements  studies on autism spectrum disorders " xml:space="preserve">neuroscience research which complements studies on autism spectrum disorders </td>
            <td t="s" id="sjs-E55" v="maximum direct costs of $70,000">maximum direct costs of $70,000</td>
            <td t="s" id="sjs-F55" v="PhD, MD or equivalent with faculty position in research or educational institute. No citizenship or country requirements">PhD, MD or equivalent with faculty position in research or educational institute. No citizenship or country requirements</td>
            <td t="s" id="sjs-G55" v="Rolling Programe">Rolling Programe</td>
            <td t="s" id="sjs-H55" v="1 year " xml:space="preserve">1 year </td>
            <td t="s" id="sjs-I55" v="http://sfari.org/funding/grants/explorer-awards-rfa">http://sfari.org/funding/grants/explorer-awards-rfa</td>
            <td t="z" id="sjs-J55"></td>
            <td t="z" id="sjs-K55"></td>
            <td t="z" id="sjs-L55"></td>
            <td t="z" id="sjs-M55"></td>
            <td t="z" id="sjs-N55"></td>
            <td t="z" id="sjs-O55"></td>
            <td t="z" id="sjs-P55"></td>
            <td t="z" id="sjs-Q55"></td>
            <td t="z" id="sjs-R55"></td>
            <td t="z" id="sjs-S55"></td>
            <td t="z" id="sjs-T55"></td>
            <td t="z" id="sjs-U55"></td>
            <td t="z" id="sjs-V55"></td>
            <td t="z" id="sjs-W55"></td>
            <td t="z" id="sjs-X55"></td>
            <td t="z" id="sjs-Y55"></td>
            <td t="z" id="sjs-Z55"></td>
            <td t="z" id="sjs-AA55"></td>
            <td t="z" id="sjs-AB55"></td>
            <td t="z" id="sjs-AC55"></td>
            <td t="z" id="sjs-AD55"></td>
            <td t="z" id="sjs-AE55"></td>
            <td t="z" id="sjs-AF55"></td>
            <td t="z" id="sjs-AG55"></td>
            <td t="z" id="sjs-AH55"></td>
            <td t="z" id="sjs-AI55"></td>
            <td t="z" id="sjs-AJ55"></td>
            <td t="z" id="sjs-AK55"></td>
            <td t="z" id="sjs-AL55"></td>
            <td t="z" id="sjs-AM55"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A56" v="Research">Research</td>
            <td t="s" id="sjs-B56" v="Simons Foundation Autism Research Initiative (SFARI)">Simons Foundation Autism Research Initiative (SFARI)</td>
            <td t="s" id="sjs-C56" v="Circuit Dynamics Request for Applications">Circuit Dynamics Request for Applications</td>
            <td t="s" id="sjs-D56" v="to advance understanding of the circuit basis for behavioral and cognitive alterations relevant to autism spectrum disorders (ASD).  SFARI prioritizes animal models with strong construct validity based on human genetic studies of autism">to advance understanding of the circuit basis for behavioral and cognitive alterations relevant to autism spectrum disorders (ASD). SFARI prioritizes animal models with strong construct validity based on human genetic studies of autism</td>
            <td t="s" id="sjs-E56" v="Total commitment by SFARI for this RFA is $1 million">Total commitment by SFARI for this RFA is $1 million</td>
            <td t="s" id="sjs-F56" v="PhD, MD or equivalent with faculty position in research or educational institute. No citizenship or country requirements">PhD, MD or equivalent with faculty position in research or educational institute. No citizenship or country requirements</td>
            <td t="s" id="sjs-G56" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H56" v="2 years">2 years</td>
            <td t="s" id="sjs-I56" v="http://sfari.org/funding/grants/circuit-dynamics-rfa">http://sfari.org/funding/grants/circuit-dynamics-rfa</td>
            <td t="z" id="sjs-J56"></td>
            <td t="z" id="sjs-K56"></td>
            <td t="z" id="sjs-L56"></td>
            <td t="z" id="sjs-M56"></td>
            <td t="z" id="sjs-N56"></td>
            <td t="z" id="sjs-O56"></td>
            <td t="z" id="sjs-P56"></td>
            <td t="z" id="sjs-Q56"></td>
            <td t="z" id="sjs-R56"></td>
            <td t="z" id="sjs-S56"></td>
            <td t="z" id="sjs-T56"></td>
            <td t="z" id="sjs-U56"></td>
            <td t="z" id="sjs-V56"></td>
            <td t="z" id="sjs-W56"></td>
            <td t="z" id="sjs-X56"></td>
            <td t="z" id="sjs-Y56"></td>
            <td t="z" id="sjs-Z56"></td>
            <td t="z" id="sjs-AA56"></td>
            <td t="z" id="sjs-AB56"></td>
            <td t="z" id="sjs-AC56"></td>
            <td t="z" id="sjs-AD56"></td>
            <td t="z" id="sjs-AE56"></td>
            <td t="z" id="sjs-AF56"></td>
            <td t="z" id="sjs-AG56"></td>
            <td t="z" id="sjs-AH56"></td>
            <td t="z" id="sjs-AI56"></td>
            <td t="z" id="sjs-AJ56"></td>
            <td t="z" id="sjs-AK56"></td>
            <td t="z" id="sjs-AL56"></td>
            <td t="z" id="sjs-AM56"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A57" v="Research">Research</td>
            <td t="s" id="sjs-B57" v="Simons Foundation Autism Research Initiative (SFARI)">Simons Foundation Autism Research Initiative (SFARI)</td>
            <td t="s" id="sjs-C57" v="2017 Pilot and Research Awards - Request for Applications (RFA)">2017 Pilot and Research Awards - Request for Applications (RFA)</td>
            <td t="s" id="sjs-D57" v="to improve the understanding, diagnosis and treatment of autism spectrum disorders (ASD) by funding innovative research of the highest quality and relevance.">to improve the understanding, diagnosis and treatment of autism spectrum disorders (ASD) by funding innovative research of the highest quality and relevance.</td>
            <td t="s" id="sjs-E57" v="SFARI Pilot Award- $150,000/ year, SFARI Research Award-$350,000/year">SFARI Pilot Award- $150,000/ year, SFARI Research Award-$350,000/year</td>
            <td t="s" id="sjs-F57" v="Ph.D., M.D. or equivalent degree and have a faculty position or the equivalent at a university, medical school or other research facility.  no citizenship or country requirements.">Ph.D., M.D. or equivalent degree and have a faculty position or the equivalent at a university, medical school or other research facility. no citizenship or country requirements.</td>
            <td t="s" id="sjs-G57" v="LOI- 9th, dec, 2016, Full application- 22nd March, 2017">LOI- 9th, dec, 2016, Full application- 22nd March, 2017</td>
            <td t="s" id="sjs-H57" v="SFARI Pilot Award- 2 years, SFARI Research Award- 3 years">SFARI Pilot Award- 2 years, SFARI Research Award- 3 years</td>
            <td t="s" id="sjs-I57" v="https://sfari.org/funding/grants/2017-pilot-and-research-awards-request-for-applications?utm_source=SFARI+RFA+Notifications%2FAnnouncements&amp;utm_campaign=0f96697e1e-SFARI__September_Announcement_09_25_2016&amp;utm_medium=email&amp;utm_term=0_8e52f37818-0f96697e1e-">https://sfari.org/funding/grants/2017-pilot-and-research-awards-request-for-applications?utm_source=SFARI+RFA+Notifications%2FAnnouncements&amp;utm_campaign=0f96697e1e-SFARI__September_Announcement_09_25_2016&amp;utm_medium=email&amp;utm_term=0_8e52f37818-0f96697e1e-</td>
            <td t="z" id="sjs-J57"></td>
            <td t="z" id="sjs-K57"></td>
            <td t="z" id="sjs-L57"></td>
            <td t="z" id="sjs-M57"></td>
            <td t="z" id="sjs-N57"></td>
            <td t="z" id="sjs-O57"></td>
            <td t="z" id="sjs-P57"></td>
            <td t="z" id="sjs-Q57"></td>
            <td t="z" id="sjs-R57"></td>
            <td t="z" id="sjs-S57"></td>
            <td t="z" id="sjs-T57"></td>
            <td t="z" id="sjs-U57"></td>
            <td t="z" id="sjs-V57"></td>
            <td t="z" id="sjs-W57"></td>
            <td t="z" id="sjs-X57"></td>
            <td t="z" id="sjs-Y57"></td>
            <td t="z" id="sjs-Z57"></td>
            <td t="z" id="sjs-AA57"></td>
            <td t="z" id="sjs-AB57"></td>
            <td t="z" id="sjs-AC57"></td>
            <td t="z" id="sjs-AD57"></td>
            <td t="z" id="sjs-AE57"></td>
            <td t="z" id="sjs-AF57"></td>
            <td t="z" id="sjs-AG57"></td>
            <td t="z" id="sjs-AH57"></td>
            <td t="z" id="sjs-AI57"></td>
            <td t="z" id="sjs-AJ57"></td>
            <td t="z" id="sjs-AK57"></td>
            <td t="z" id="sjs-AL57"></td>
            <td t="z" id="sjs-AM57"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A58" v="Research">Research</td>
            <td t="s" id="sjs-B58" v="Simons Foundation Autism Research Initiative (SFARI)">Simons Foundation Autism Research Initiative (SFARI)</td>
            <td t="s" id="sjs-C58" v="Analysis of Simons VIP Biospecimens Request for Applications">Analysis of Simons VIP Biospecimens Request for Applications</td>
            <td t="s" id="sjs-D58" v="This RFA seeks proposals that take advantage of the unique combination of biospecimens and rich phenotypic information collected by the The Simons Variation in Individuals Project (VIP).">This RFA seeks proposals that take advantage of the unique combination of biospecimens and rich phenotypic information collected by the The Simons Variation in Individuals Project (VIP).</td>
            <td t="z" id="sjs-E58"></td>
            <td t="s" id="sjs-F58" v="PhD, MD or equivalent with faculty position in research or educational institute. No citizenship or country requirements">PhD, MD or equivalent with faculty position in research or educational institute. No citizenship or country requirements</td>
            <td t="s" id="sjs-G58" v="To Be Announced">To Be Announced</td>
            <td t="z" id="sjs-H58"></td>
            <td t="s" id="sjs-I58" v="http://sfari.org/funding/grants/analysis-of-simons-vip-biospecimens-rfa">http://sfari.org/funding/grants/analysis-of-simons-vip-biospecimens-rfa</td>
            <td t="z" id="sjs-J58"></td>
            <td t="z" id="sjs-K58"></td>
            <td t="z" id="sjs-L58"></td>
            <td t="z" id="sjs-M58"></td>
            <td t="z" id="sjs-N58"></td>
            <td t="z" id="sjs-O58"></td>
            <td t="z" id="sjs-P58"></td>
            <td t="z" id="sjs-Q58"></td>
            <td t="z" id="sjs-R58"></td>
            <td t="z" id="sjs-S58"></td>
            <td t="z" id="sjs-T58"></td>
            <td t="z" id="sjs-U58"></td>
            <td t="z" id="sjs-V58"></td>
            <td t="z" id="sjs-W58"></td>
            <td t="z" id="sjs-X58"></td>
            <td t="z" id="sjs-Y58"></td>
            <td t="z" id="sjs-Z58"></td>
            <td t="z" id="sjs-AA58"></td>
            <td t="z" id="sjs-AB58"></td>
            <td t="z" id="sjs-AC58"></td>
            <td t="z" id="sjs-AD58"></td>
            <td t="z" id="sjs-AE58"></td>
            <td t="z" id="sjs-AF58"></td>
            <td t="z" id="sjs-AG58"></td>
            <td t="z" id="sjs-AH58"></td>
            <td t="z" id="sjs-AI58"></td>
            <td t="z" id="sjs-AJ58"></td>
            <td t="z" id="sjs-AK58"></td>
            <td t="z" id="sjs-AL58"></td>
            <td t="z" id="sjs-AM58"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A59" v="Research">Research</td>
            <td t="s" id="sjs-B59" v="USAID/NSF">USAID/NSF</td>
            <td t="s" id="sjs-C59" v="Partnership for enhanced engagement in Research (PEER)">Partnership for enhanced engagement in Research (PEER)</td>
            <td t="s" id="sjs-D59" v="Research on topics of importance to USAID and NSF including but not limited to food security, climate change, global health issues and other developmental issues">Research on topics of importance to USAID and NSF including but not limited to food security, climate change, global health issues and other developmental issues</td>
            <td t="s" id="sjs-E59" v="Direct costs of $30000-$60000 per year, in exceptional cases awards can be made upto $110,000 per year">Direct costs of $30000-$60000 per year, in exceptional cases awards can be made upto $110,000 per year</td>
            <td t="s" id="sjs-F59" v="PIs in developing countries collaborating with a PI in US having a NSF grant active for the duration of the  award">PIs in developing countries collaborating with a PI in US having a NSF grant active for the duration of the award</td>
            <td t="s" id="sjs-G59" v="To be announced (Jan)">To be announced (Jan)</td>
            <td t="s" id="sjs-H59" v="1-3 years">1-3 years</td>
            <td t="s" id="sjs-I59" v="http://sites.nationalacademies.org/pga/peer/index.htm">http://sites.nationalacademies.org/pga/peer/index.htm</td>
            <td t="z" id="sjs-J59"></td>
            <td t="z" id="sjs-K59"></td>
            <td t="z" id="sjs-L59"></td>
            <td t="z" id="sjs-M59"></td>
            <td t="z" id="sjs-N59"></td>
            <td t="z" id="sjs-O59"></td>
            <td t="z" id="sjs-P59"></td>
            <td t="z" id="sjs-Q59"></td>
            <td t="z" id="sjs-R59"></td>
            <td t="z" id="sjs-S59"></td>
            <td t="z" id="sjs-T59"></td>
            <td t="z" id="sjs-U59"></td>
            <td t="z" id="sjs-V59"></td>
            <td t="z" id="sjs-W59"></td>
            <td t="z" id="sjs-X59"></td>
            <td t="z" id="sjs-Y59"></td>
            <td t="z" id="sjs-Z59"></td>
            <td t="z" id="sjs-AA59"></td>
            <td t="z" id="sjs-AB59"></td>
            <td t="z" id="sjs-AC59"></td>
            <td t="z" id="sjs-AD59"></td>
            <td t="z" id="sjs-AE59"></td>
            <td t="z" id="sjs-AF59"></td>
            <td t="z" id="sjs-AG59"></td>
            <td t="z" id="sjs-AH59"></td>
            <td t="z" id="sjs-AI59"></td>
            <td t="z" id="sjs-AJ59"></td>
            <td t="z" id="sjs-AK59"></td>
            <td t="z" id="sjs-AL59"></td>
            <td t="z" id="sjs-AM59"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A60" v="Research">Research</td>
            <td t="s" id="sjs-B60" v="Wellcome Trust (UK)">Wellcome Trust (UK)</td>
            <td t="s" id="sjs-C60" v="Collaborative Awards in Science">Collaborative Awards in Science</td>
            <td t="s" id="sjs-D60" v="To fund teams of researchers, consisting of independent research groups, to work together on the important scientific problems (that can only be solved through collaborative efforts).">To fund teams of researchers, consisting of independent research groups, to work together on the important scientific problems (that can only be solved through collaborative efforts).</td>
            <td t="s" id="sjs-E60" v="Up to £4 million">Up to £4 million</td>
            <td t="s" id="sjs-F60" v="Applicants should hold an academic or research post (or equivalent) at eligible organisations in the UK, Republic of Ireland, or low- or middle-income countries (India eligible). The number of collaborators should be more than two and no more than seven. Each applicant must have proven experience in collaborative research. " xml:space="preserve">Applicants should hold an academic or research post (or equivalent) at eligible organisations in the UK, Republic of Ireland, or low- or middle-income countries (India eligible). The number of collaborators should be more than two and no more than seven. Each applicant must have proven experience in collaborative research. </td>
            <td t="s" id="sjs-G60" v="Preliminary application deadline: 17-Nov-2016">Preliminary application deadline: 17-Nov-2016</td>
            <td t="s" id="sjs-H60" v="upto 5 years">upto 5 years</td>
            <td t="s" id="sjs-I60" v="https://wellcome.ac.uk/funding/collaborative-awards-science">https://wellcome.ac.uk/funding/collaborative-awards-science</td>
            <td t="z" id="sjs-J60"></td>
            <td t="z" id="sjs-K60"></td>
            <td t="z" id="sjs-L60"></td>
            <td t="z" id="sjs-M60"></td>
            <td t="z" id="sjs-N60"></td>
            <td t="z" id="sjs-O60"></td>
            <td t="z" id="sjs-P60"></td>
            <td t="z" id="sjs-Q60"></td>
            <td t="z" id="sjs-R60"></td>
            <td t="z" id="sjs-S60"></td>
            <td t="z" id="sjs-T60"></td>
            <td t="z" id="sjs-U60"></td>
            <td t="z" id="sjs-V60"></td>
            <td t="z" id="sjs-W60"></td>
            <td t="z" id="sjs-X60"></td>
            <td t="z" id="sjs-Y60"></td>
            <td t="z" id="sjs-Z60"></td>
            <td t="z" id="sjs-AA60"></td>
            <td t="z" id="sjs-AB60"></td>
            <td t="z" id="sjs-AC60"></td>
            <td t="z" id="sjs-AD60"></td>
            <td t="z" id="sjs-AE60"></td>
            <td t="z" id="sjs-AF60"></td>
            <td t="z" id="sjs-AG60"></td>
            <td t="z" id="sjs-AH60"></td>
            <td t="z" id="sjs-AI60"></td>
            <td t="z" id="sjs-AJ60"></td>
            <td t="z" id="sjs-AK60"></td>
            <td t="z" id="sjs-AL60"></td>
            <td t="z" id="sjs-AM60"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A61" v="Research">Research</td>
            <td t="s" id="sjs-B61" v="Wellcome Trust (UK)">Wellcome Trust (UK)</td>
            <td t="s" id="sjs-C61" v="Investigator Awards in Science">Investigator Awards in Science</td>
            <td t="s" id="sjs-D61" v="To support researchers at all career stages working on important questions of relevance in broad priority areas such as genetics &amp; molecular science, cellular and development science, neurosciences, infection and immunobiology, physiology, population, environment and public health.">To support researchers at all career stages working on important questions of relevance in broad priority areas such as genetics &amp; molecular science, cellular and development science, neurosciences, infection and immunobiology, physiology, population, environment and public health.</td>
            <td t="s" id="sjs-E61" v="Research expenses from under £500,000 to around £3 million">Research expenses from under £500,000 to around £3 million</td>
            <td t="s" id="sjs-F61" v="Permanent, open-ended or long-term rolling contract, salaried by host organisation in the UK, Republic of Ireland or a low- or middle-income country (India eligible).">Permanent, open-ended or long-term rolling contract, salaried by host organisation in the UK, Republic of Ireland or a low- or middle-income country (India eligible).</td>
            <td t="n" id="sjs-G61" v="42695">21-Nov-16</td>
            <td t="s" id="sjs-H61" v="Upto 7 years">Upto 7 years</td>
            <td t="s" id="sjs-I61" v="https://wellcome.ac.uk/funding/investigator-awards-science">https://wellcome.ac.uk/funding/investigator-awards-science</td>
            <td t="z" id="sjs-J61"></td>
            <td t="z" id="sjs-K61"></td>
            <td t="z" id="sjs-L61"></td>
            <td t="z" id="sjs-M61"></td>
            <td t="z" id="sjs-N61"></td>
            <td t="z" id="sjs-O61"></td>
            <td t="z" id="sjs-P61"></td>
            <td t="z" id="sjs-Q61"></td>
            <td t="z" id="sjs-R61"></td>
            <td t="z" id="sjs-S61"></td>
            <td t="z" id="sjs-T61"></td>
            <td t="z" id="sjs-U61"></td>
            <td t="z" id="sjs-V61"></td>
            <td t="z" id="sjs-W61"></td>
            <td t="z" id="sjs-X61"></td>
            <td t="z" id="sjs-Y61"></td>
            <td t="z" id="sjs-Z61"></td>
            <td t="z" id="sjs-AA61"></td>
            <td t="z" id="sjs-AB61"></td>
            <td t="z" id="sjs-AC61"></td>
            <td t="z" id="sjs-AD61"></td>
            <td t="z" id="sjs-AE61"></td>
            <td t="z" id="sjs-AF61"></td>
            <td t="z" id="sjs-AG61"></td>
            <td t="z" id="sjs-AH61"></td>
            <td t="z" id="sjs-AI61"></td>
            <td t="z" id="sjs-AJ61"></td>
            <td t="z" id="sjs-AK61"></td>
            <td t="z" id="sjs-AL61"></td>
            <td t="z" id="sjs-AM61"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A62" v="Research">Research</td>
            <td t="s" id="sjs-B62" v="WWF-India">WWF-India</td>
            <td t="s" id="sjs-C62" v="Small Grants Program">Small Grants Program</td>
            <td t="s" id="sjs-D62" v="for carrying out conservation research or undertaking a conservation project">for carrying out conservation research or undertaking a conservation project</td>
            <td t="s" id="sjs-E62" v="Rs 400,000 " xml:space="preserve">Rs 400,000 </td>
            <td t="s" id="sjs-F62" v="individuals based in India">individuals based in India</td>
            <td t="s" id="sjs-G62" v="Grants are provided once a year. Applications to be submitted by 31-Dec">Grants are provided once a year. Applications to be submitted by 31-Dec</td>
            <td t="s" id="sjs-H62" v="6-12 months">6-12 months</td>
            <td t="s" id="sjs-I62" v="http://www.wwfindia.org/about_wwf/small_grants_program/">http://www.wwfindia.org/about_wwf/small_grants_program/</td>
            <td t="z" id="sjs-J62"></td>
            <td t="z" id="sjs-K62"></td>
            <td t="z" id="sjs-L62"></td>
            <td t="z" id="sjs-M62"></td>
            <td t="z" id="sjs-N62"></td>
            <td t="z" id="sjs-O62"></td>
            <td t="z" id="sjs-P62"></td>
            <td t="z" id="sjs-Q62"></td>
            <td t="z" id="sjs-R62"></td>
            <td t="z" id="sjs-S62"></td>
            <td t="z" id="sjs-T62"></td>
            <td t="z" id="sjs-U62"></td>
            <td t="z" id="sjs-V62"></td>
            <td t="z" id="sjs-W62"></td>
            <td t="z" id="sjs-X62"></td>
            <td t="z" id="sjs-Y62"></td>
            <td t="z" id="sjs-Z62"></td>
            <td t="z" id="sjs-AA62"></td>
            <td t="z" id="sjs-AB62"></td>
            <td t="z" id="sjs-AC62"></td>
            <td t="z" id="sjs-AD62"></td>
            <td t="z" id="sjs-AE62"></td>
            <td t="z" id="sjs-AF62"></td>
            <td t="z" id="sjs-AG62"></td>
            <td t="z" id="sjs-AH62"></td>
            <td t="z" id="sjs-AI62"></td>
            <td t="z" id="sjs-AJ62"></td>
            <td t="z" id="sjs-AK62"></td>
            <td t="z" id="sjs-AL62"></td>
            <td t="z" id="sjs-AM62"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A63" v="Infrastructure Grants">Infrastructure Grants</td>
            <td t="z" id="sjs-B63"></td>
            <td t="z" id="sjs-C63"></td>
            <td t="z" id="sjs-D63"></td>
            <td t="z" id="sjs-E63"></td>
            <td t="z" id="sjs-F63"></td>
            <td t="z" id="sjs-G63"></td>
            <td t="z" id="sjs-H63"></td>
            <td t="z" id="sjs-I63"></td>
            <td t="z" id="sjs-J63"></td>
            <td t="z" id="sjs-K63"></td>
            <td t="z" id="sjs-L63"></td>
            <td t="z" id="sjs-M63"></td>
            <td t="z" id="sjs-N63"></td>
            <td t="z" id="sjs-O63"></td>
            <td t="z" id="sjs-P63"></td>
            <td t="z" id="sjs-Q63"></td>
            <td t="z" id="sjs-R63"></td>
            <td t="z" id="sjs-S63"></td>
            <td t="z" id="sjs-T63"></td>
            <td t="z" id="sjs-U63"></td>
            <td t="z" id="sjs-V63"></td>
            <td t="z" id="sjs-W63"></td>
            <td t="z" id="sjs-X63"></td>
            <td t="z" id="sjs-Y63"></td>
            <td t="z" id="sjs-Z63"></td>
            <td t="z" id="sjs-AA63"></td>
            <td t="z" id="sjs-AB63"></td>
            <td t="z" id="sjs-AC63"></td>
            <td t="z" id="sjs-AD63"></td>
            <td t="z" id="sjs-AE63"></td>
            <td t="z" id="sjs-AF63"></td>
            <td t="z" id="sjs-AG63"></td>
            <td t="z" id="sjs-AH63"></td>
            <td t="z" id="sjs-AI63"></td>
            <td t="z" id="sjs-AJ63"></td>
            <td t="z" id="sjs-AK63"></td>
            <td t="z" id="sjs-AL63"></td>
            <td t="z" id="sjs-AM63"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A64" v="Equipment">Equipment</td>
            <td t="s" id="sjs-B64" v="DBT">DBT</td>
            <td t="s" id="sjs-C64" v="Project for creation of Infrastructural facility">Project for creation of Infrastructural facility</td>
            <td t="z" id="sjs-D64"></td>
            <td t="z" id="sjs-E64"></td>
            <td t="z" id="sjs-F64"></td>
            <td t="z" id="sjs-G64"></td>
            <td t="s" id="sjs-H64" v="5 years">5 years</td>
            <td t="s" id="sjs-I64" v="http://dbtindia.nic.in/writereaddata/12125038272_proforma_infrastructure.pdf">http://dbtindia.nic.in/writereaddata/12125038272_proforma_infrastructure.pdf</td>
            <td t="z" id="sjs-J64"></td>
            <td t="z" id="sjs-K64"></td>
            <td t="z" id="sjs-L64"></td>
            <td t="z" id="sjs-M64"></td>
            <td t="z" id="sjs-N64"></td>
            <td t="z" id="sjs-O64"></td>
            <td t="z" id="sjs-P64"></td>
            <td t="z" id="sjs-Q64"></td>
            <td t="z" id="sjs-R64"></td>
            <td t="z" id="sjs-S64"></td>
            <td t="z" id="sjs-T64"></td>
            <td t="z" id="sjs-U64"></td>
            <td t="z" id="sjs-V64"></td>
            <td t="z" id="sjs-W64"></td>
            <td t="z" id="sjs-X64"></td>
            <td t="z" id="sjs-Y64"></td>
            <td t="z" id="sjs-Z64"></td>
            <td t="z" id="sjs-AA64"></td>
            <td t="z" id="sjs-AB64"></td>
            <td t="z" id="sjs-AC64"></td>
            <td t="z" id="sjs-AD64"></td>
            <td t="z" id="sjs-AE64"></td>
            <td t="z" id="sjs-AF64"></td>
            <td t="z" id="sjs-AG64"></td>
            <td t="z" id="sjs-AH64"></td>
            <td t="z" id="sjs-AI64"></td>
            <td t="z" id="sjs-AJ64"></td>
            <td t="z" id="sjs-AK64"></td>
            <td t="z" id="sjs-AL64"></td>
            <td t="z" id="sjs-AM64"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A65" v="Equipment">Equipment</td>
            <td t="s" id="sjs-B65" v="DBT">DBT</td>
            <td t="s" id="sjs-C65" v="Creation of Center of excellence and Innovation in Biotechnology (CEIB)">Creation of Center of excellence and Innovation in Biotechnology (CEIB)</td>
            <td t="s" id="sjs-D65" v="The following three types of grants will be provided under this programme: 1) Centres of Excellence (COE) in Biotechnology to establish Centres of Excellence, 2)Outstanding Scientist Research 
Programme in Biotechnology to provide  long term support to outstanding scientists, 3) Institutional Programme Support to provide funding to augment and strengthen institutional research capacity">The following three types of grants will be provided under this programme: 1) Centres of Excellence (COE) in Biotechnology to establish Centres of Excellence, 2)Outstanding Scientist Research
              <br>Programme in Biotechnology to provide long term support to outstanding scientists, 3) Institutional Programme Support to provide funding to augment and strengthen institutional research capacity
            </td>
            <td t="z" id="sjs-E65"></td>
            <td t="s" id="sjs-F65" v="Category 1: Team  Leader should be acknowledged scientist 
in  his  own research 
area.Mandatory  to create a minimum of 2 
or3 new faculty  positions in the relevant  areas, Category 2: The  PI should  be of high  scientific caliber   as   evident   from publications, patents  and   capabilities of technology transfer, Category 3:proven  track  record  with  high  quality 
research   of   an   institution(s)/department(s), either   in   basic   or 
fundamental to translational or applied research.
.">Category 1: Team Leader should be acknowledged scientist
              <br>in his own research
              <br>area.Mandatory to create a minimum of 2
              <br>or3 new faculty positions in the relevant areas, Category 2: The PI should be of high scientific caliber as evident from publications, patents and capabilities of technology transfer, Category 3:proven track record with high quality
              <br>research of an institution(s)/department(s), either in basic or
              <br>fundamental to translational or applied research.
              <br>.
            </td>
            <td t="s" id="sjs-G65" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H65" v="5 years, (extendable by maximum 5 years) " xml:space="preserve">5 years, (extendable by maximum 5 years) </td>
            <td t="s" id="sjs-I65" v="http://dbtindia.nic.in/wp-content/uploads/CEIB.pdf">http://dbtindia.nic.in/wp-content/uploads/CEIB.pdf</td>
            <td t="z" id="sjs-J65"></td>
            <td t="z" id="sjs-K65"></td>
            <td t="z" id="sjs-L65"></td>
            <td t="z" id="sjs-M65"></td>
            <td t="z" id="sjs-N65"></td>
            <td t="z" id="sjs-O65"></td>
            <td t="z" id="sjs-P65"></td>
            <td t="z" id="sjs-Q65"></td>
            <td t="z" id="sjs-R65"></td>
            <td t="z" id="sjs-S65"></td>
            <td t="z" id="sjs-T65"></td>
            <td t="z" id="sjs-U65"></td>
            <td t="z" id="sjs-V65"></td>
            <td t="z" id="sjs-W65"></td>
            <td t="z" id="sjs-X65"></td>
            <td t="z" id="sjs-Y65"></td>
            <td t="z" id="sjs-Z65"></td>
            <td t="z" id="sjs-AA65"></td>
            <td t="z" id="sjs-AB65"></td>
            <td t="z" id="sjs-AC65"></td>
            <td t="z" id="sjs-AD65"></td>
            <td t="z" id="sjs-AE65"></td>
            <td t="z" id="sjs-AF65"></td>
            <td t="z" id="sjs-AG65"></td>
            <td t="z" id="sjs-AH65"></td>
            <td t="z" id="sjs-AI65"></td>
            <td t="z" id="sjs-AJ65"></td>
            <td t="z" id="sjs-AK65"></td>
            <td t="z" id="sjs-AL65"></td>
            <td t="z" id="sjs-AM65"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A66" v="Equipment">Equipment</td>
            <td t="s" id="sjs-B66" v="DST">DST</td>
            <td t="s" id="sjs-C66" v="Fund for improvement of S&amp;T infrastructure (FIST)">Fund for improvement of S&amp;T infrastructure (FIST)</td>
            <td t="s" id="sjs-D66" v="All Science (including Medical &amp; Agriculture) and Engineering Departments/ Centres having strong postgraduate teaching and research programs which have existed for at least 3 years or more in universities and other higher educational institutions are eligible.">All Science (including Medical &amp; Agriculture) and Engineering Departments/ Centres having strong postgraduate teaching and research programs which have existed for at least 3 years or more in universities and other higher educational institutions are eligible.</td>
            <td t="s" id="sjs-E66" v="Level 0(Govt./ aided Colleges):up to Rs. 150 lakh, Level-I (PG S &amp; T Department from State &amp; Central Universities &amp; academic Institutions):up to Rs 300 lakh, Level-II (well established S &amp; T Department from State/ Central Universities and academic Institutions): upto Rs.1000 lakh " xml:space="preserve">Level 0(Govt./ aided Colleges):up to Rs. 150 lakh, Level-I (PG S &amp; T Department from State &amp; Central Universities &amp; academic Institutions):up to Rs 300 lakh, Level-II (well established S &amp; T Department from State/ Central Universities and academic Institutions): upto Rs.1000 lakh </td>
            <td t="s" id="sjs-F66" v="Level 0: PG Colleges, Level I&amp;II:University &amp; Institutes">Level 0: PG Colleges, Level I&amp;II:University &amp; Institutes</td>
            <td t="s" id="sjs-G66" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H66" v="5 years " xml:space="preserve">5 years </td>
            <td t="s" id="sjs-I66" v="http://fist-dst.org/html-flies/advertisement-guidelines.html">http://fist-dst.org/html-flies/advertisement-guidelines.html</td>
            <td t="z" id="sjs-J66"></td>
            <td t="z" id="sjs-K66"></td>
            <td t="z" id="sjs-L66"></td>
            <td t="z" id="sjs-M66"></td>
            <td t="z" id="sjs-N66"></td>
            <td t="z" id="sjs-O66"></td>
            <td t="z" id="sjs-P66"></td>
            <td t="z" id="sjs-Q66"></td>
            <td t="z" id="sjs-R66"></td>
            <td t="z" id="sjs-S66"></td>
            <td t="z" id="sjs-T66"></td>
            <td t="z" id="sjs-U66"></td>
            <td t="z" id="sjs-V66"></td>
            <td t="z" id="sjs-W66"></td>
            <td t="z" id="sjs-X66"></td>
            <td t="z" id="sjs-Y66"></td>
            <td t="z" id="sjs-Z66"></td>
            <td t="z" id="sjs-AA66"></td>
            <td t="z" id="sjs-AB66"></td>
            <td t="z" id="sjs-AC66"></td>
            <td t="z" id="sjs-AD66"></td>
            <td t="z" id="sjs-AE66"></td>
            <td t="z" id="sjs-AF66"></td>
            <td t="z" id="sjs-AG66"></td>
            <td t="z" id="sjs-AH66"></td>
            <td t="z" id="sjs-AI66"></td>
            <td t="z" id="sjs-AJ66"></td>
            <td t="z" id="sjs-AK66"></td>
            <td t="z" id="sjs-AL66"></td>
            <td t="z" id="sjs-AM66"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A67" v="Equipment">Equipment</td>
            <td t="s" id="sjs-B67" v="Wellcome Trust (UK)">Wellcome Trust (UK)</td>
            <td t="s" id="sjs-C67" v="Multi-user equipment grant">Multi-user equipment grant</td>
            <td t="s" id="sjs-D67" v="Contribution from the host institution or other source, proportionate to the total amount requested is expected.">Contribution from the host institution or other source, proportionate to the total amount requested is expected.</td>
            <td t="z" id="sjs-E67"></td>
            <td t="s" id="sjs-F67" v="applicants in the UK who have a track record in obtaining grant funding. Researchers in low- or middle-income countries  eligible to apply if they have a track record of Trust funding or can demonstrate a strong track record of independent research accomplishment.">applicants in the UK who have a track record in obtaining grant funding. Researchers in low- or middle-income countries eligible to apply if they have a track record of Trust funding or can demonstrate a strong track record of independent research accomplishment.</td>
            <td t="s" id="sjs-G67" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H67" v="upto 5 years">upto 5 years</td>
            <td t="s" id="sjs-I67" v="http://www.wellcome.ac.uk/Funding/Biomedical-science/Funding-schemes/Strategic-awards-and-initiatives/WTDV031728.htm">http://www.wellcome.ac.uk/Funding/Biomedical-science/Funding-schemes/Strategic-awards-and-initiatives/WTDV031728.htm</td>
            <td t="z" id="sjs-J67"></td>
            <td t="z" id="sjs-K67"></td>
            <td t="z" id="sjs-L67"></td>
            <td t="z" id="sjs-M67"></td>
            <td t="z" id="sjs-N67"></td>
            <td t="z" id="sjs-O67"></td>
            <td t="z" id="sjs-P67"></td>
            <td t="z" id="sjs-Q67"></td>
            <td t="z" id="sjs-R67"></td>
            <td t="z" id="sjs-S67"></td>
            <td t="z" id="sjs-T67"></td>
            <td t="z" id="sjs-U67"></td>
            <td t="z" id="sjs-V67"></td>
            <td t="z" id="sjs-W67"></td>
            <td t="z" id="sjs-X67"></td>
            <td t="z" id="sjs-Y67"></td>
            <td t="z" id="sjs-Z67"></td>
            <td t="z" id="sjs-AA67"></td>
            <td t="z" id="sjs-AB67"></td>
            <td t="z" id="sjs-AC67"></td>
            <td t="z" id="sjs-AD67"></td>
            <td t="z" id="sjs-AE67"></td>
            <td t="z" id="sjs-AF67"></td>
            <td t="z" id="sjs-AG67"></td>
            <td t="z" id="sjs-AH67"></td>
            <td t="z" id="sjs-AI67"></td>
            <td t="z" id="sjs-AJ67"></td>
            <td t="z" id="sjs-AK67"></td>
            <td t="z" id="sjs-AL67"></td>
            <td t="z" id="sjs-AM67"></td>
          </tr>
          <tr>
            <td colspan="2" t="s" id="sjs-A68" v="International Collaborations">International Collaborations</td>
            <td t="z" id="sjs-C68"></td>
            <td t="z" id="sjs-D68"></td>
            <td t="z" id="sjs-E68"></td>
            <td t="z" id="sjs-F68"></td>
            <td t="z" id="sjs-G68"></td>
            <td t="z" id="sjs-H68"></td>
            <td t="z" id="sjs-I68"></td>
            <td t="z" id="sjs-J68"></td>
            <td t="z" id="sjs-K68"></td>
            <td t="z" id="sjs-L68"></td>
            <td t="z" id="sjs-M68"></td>
            <td t="z" id="sjs-N68"></td>
            <td t="z" id="sjs-O68"></td>
            <td t="z" id="sjs-P68"></td>
            <td t="z" id="sjs-Q68"></td>
            <td t="z" id="sjs-R68"></td>
            <td t="z" id="sjs-S68"></td>
            <td t="z" id="sjs-T68"></td>
            <td t="z" id="sjs-U68"></td>
            <td t="z" id="sjs-V68"></td>
            <td t="z" id="sjs-W68"></td>
            <td t="z" id="sjs-X68"></td>
            <td t="z" id="sjs-Y68"></td>
            <td t="z" id="sjs-Z68"></td>
            <td t="z" id="sjs-AA68"></td>
            <td t="z" id="sjs-AB68"></td>
            <td t="z" id="sjs-AC68"></td>
            <td t="z" id="sjs-AD68"></td>
            <td t="z" id="sjs-AE68"></td>
            <td t="z" id="sjs-AF68"></td>
            <td t="z" id="sjs-AG68"></td>
            <td t="z" id="sjs-AH68"></td>
            <td t="z" id="sjs-AI68"></td>
            <td t="z" id="sjs-AJ68"></td>
            <td t="z" id="sjs-AK68"></td>
            <td t="z" id="sjs-AL68"></td>
            <td t="z" id="sjs-AM68"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A69" v="Research">Research</td>
            <td t="s" id="sjs-B69" v="BBSRC/DBT">BBSRC/DBT</td>
            <td t="s" id="sjs-C69" v="Joint DBT-BBSRC Call for Collaborative Proposals to support Crop Genomics">Joint DBT-BBSRC Call for Collaborative Proposals to support Crop Genomics</td>
            <td t="s" id="sjs-D69" v="Needs UK collaborator. Priority areas are enabling technologies or trait oriented research for crops of interest to both India and UK and include wheat, brassicas (vegetable and oilseed) and Solanaceae (principally tomato, potato and aubergine/eggplant).  " xml:space="preserve">Needs UK collaborator. Priority areas are enabling technologies or trait oriented research for crops of interest to both India and UK and include wheat, brassicas (vegetable and oilseed) and Solanaceae (principally tomato, potato and aubergine/eggplant). </td>
            <td t="s" id="sjs-E69" v="Direct research costs, overheads as per DBT norms">Direct research costs, overheads as per DBT norms</td>
            <td t="s" id="sjs-F69" v="All researchers eligible for DBT funding">All researchers eligible for DBT funding</td>
            <td t="s" id="sjs-G69" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H69" v="upto 3 years">upto 3 years</td>
            <td t="s" id="sjs-I69" v="http://dbtindia.nic.in/docs/CropGenomicsCallFINAL.doc">http://dbtindia.nic.in/docs/CropGenomicsCallFINAL.doc</td>
            <td t="z" id="sjs-J69"></td>
            <td t="z" id="sjs-K69"></td>
            <td t="z" id="sjs-L69"></td>
            <td t="z" id="sjs-M69"></td>
            <td t="z" id="sjs-N69"></td>
            <td t="z" id="sjs-O69"></td>
            <td t="z" id="sjs-P69"></td>
            <td t="z" id="sjs-Q69"></td>
            <td t="z" id="sjs-R69"></td>
            <td t="z" id="sjs-S69"></td>
            <td t="z" id="sjs-T69"></td>
            <td t="z" id="sjs-U69"></td>
            <td t="z" id="sjs-V69"></td>
            <td t="z" id="sjs-W69"></td>
            <td t="z" id="sjs-X69"></td>
            <td t="z" id="sjs-Y69"></td>
            <td t="z" id="sjs-Z69"></td>
            <td t="z" id="sjs-AA69"></td>
            <td t="z" id="sjs-AB69"></td>
            <td t="z" id="sjs-AC69"></td>
            <td t="z" id="sjs-AD69"></td>
            <td t="z" id="sjs-AE69"></td>
            <td t="z" id="sjs-AF69"></td>
            <td t="z" id="sjs-AG69"></td>
            <td t="z" id="sjs-AH69"></td>
            <td t="z" id="sjs-AI69"></td>
            <td t="z" id="sjs-AJ69"></td>
            <td t="z" id="sjs-AK69"></td>
            <td t="z" id="sjs-AL69"></td>
            <td t="z" id="sjs-AM69"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A70" v="Research">Research</td>
            <td t="s" id="sjs-B70" v="DBT/DIISTR (Australia)">DBT/DIISTR (Australia)</td>
            <td t="s" id="sjs-C70" v="Indo-Australian Fund for S&amp;T Cooperation in Biotechnology- Collaborative Reseearch Projects " xml:space="preserve">Indo-Australian Fund for S&amp;T Cooperation in Biotechnology- Collaborative Reseearch Projects </td>
            <td t="s" id="sjs-D70" v="Themes supported include-Vaccines, Immunomodulators and Immunotherapeutics, Biotechnological Interventions for improved agricultural productivity " xml:space="preserve">Themes supported include-Vaccines, Immunomodulators and Immunotherapeutics, Biotechnological Interventions for improved agricultural productivity </td>
            <td t="s" id="sjs-E70" v="1.3-1.7 crores">1.3-1.7 crores</td>
            <td t="s" id="sjs-F70" v="Need Australian collaborator">Need Australian collaborator</td>
            <td t="s" id="sjs-G70" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H70" v="3 years">3 years</td>
            <td t="s" id="sjs-I70" v="http://dbtindia.nic.in/docs/Indo-Australia7thRoundGuidelinesfinal.doc">http://dbtindia.nic.in/docs/Indo-Australia7thRoundGuidelinesfinal.doc</td>
            <td t="z" id="sjs-J70"></td>
            <td t="z" id="sjs-K70"></td>
            <td t="z" id="sjs-L70"></td>
            <td t="z" id="sjs-M70"></td>
            <td t="z" id="sjs-N70"></td>
            <td t="z" id="sjs-O70"></td>
            <td t="z" id="sjs-P70"></td>
            <td t="z" id="sjs-Q70"></td>
            <td t="z" id="sjs-R70"></td>
            <td t="z" id="sjs-S70"></td>
            <td t="z" id="sjs-T70"></td>
            <td t="z" id="sjs-U70"></td>
            <td t="z" id="sjs-V70"></td>
            <td t="z" id="sjs-W70"></td>
            <td t="z" id="sjs-X70"></td>
            <td t="z" id="sjs-Y70"></td>
            <td t="z" id="sjs-Z70"></td>
            <td t="z" id="sjs-AA70"></td>
            <td t="z" id="sjs-AB70"></td>
            <td t="z" id="sjs-AC70"></td>
            <td t="z" id="sjs-AD70"></td>
            <td t="z" id="sjs-AE70"></td>
            <td t="z" id="sjs-AF70"></td>
            <td t="z" id="sjs-AG70"></td>
            <td t="z" id="sjs-AH70"></td>
            <td t="z" id="sjs-AI70"></td>
            <td t="z" id="sjs-AJ70"></td>
            <td t="z" id="sjs-AK70"></td>
            <td t="z" id="sjs-AL70"></td>
            <td t="z" id="sjs-AM70"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A71" v="Research">Research</td>
            <td t="s" id="sjs-B71" v="DBT/CDTI, Spain">DBT/CDTI, Spain</td>
            <td t="s" id="sjs-C71" v="INDO-SPANISH JOINT CALL FOR TECHNOLOGICAL CO-OPERATION IN BIOTECHNOLOGY " xml:space="preserve">INDO-SPANISH JOINT CALL FOR TECHNOLOGICAL CO-OPERATION IN BIOTECHNOLOGY </td>
            <td t="s" id="sjs-D71" v="Industry-driven and market-oriented R&amp;D projects in all
areas of biotechnology.">Industry-driven and market-oriented R&amp;D projects in all
              <br>areas of biotechnology.
            </td>
            <td t="z" id="sjs-E71"></td>
            <td t="s" id="sjs-F71" v="Need Spanish industry collaborator">Need Spanish industry collaborator</td>
            <td t="s" id="sjs-G71" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H71" v="1-3 years">1-3 years</td>
            <td t="s" id="sjs-I71" v="http://dbtindia.nic.in/docs/Callforproposalsi2013.doc">http://dbtindia.nic.in/docs/Callforproposalsi2013.doc</td>
            <td t="z" id="sjs-J71"></td>
            <td t="z" id="sjs-K71"></td>
            <td t="z" id="sjs-L71"></td>
            <td t="z" id="sjs-M71"></td>
            <td t="z" id="sjs-N71"></td>
            <td t="z" id="sjs-O71"></td>
            <td t="z" id="sjs-P71"></td>
            <td t="z" id="sjs-Q71"></td>
            <td t="z" id="sjs-R71"></td>
            <td t="z" id="sjs-S71"></td>
            <td t="z" id="sjs-T71"></td>
            <td t="z" id="sjs-U71"></td>
            <td t="z" id="sjs-V71"></td>
            <td t="z" id="sjs-W71"></td>
            <td t="z" id="sjs-X71"></td>
            <td t="z" id="sjs-Y71"></td>
            <td t="z" id="sjs-Z71"></td>
            <td t="z" id="sjs-AA71"></td>
            <td t="z" id="sjs-AB71"></td>
            <td t="z" id="sjs-AC71"></td>
            <td t="z" id="sjs-AD71"></td>
            <td t="z" id="sjs-AE71"></td>
            <td t="z" id="sjs-AF71"></td>
            <td t="z" id="sjs-AG71"></td>
            <td t="z" id="sjs-AH71"></td>
            <td t="z" id="sjs-AI71"></td>
            <td t="z" id="sjs-AJ71"></td>
            <td t="z" id="sjs-AK71"></td>
            <td t="z" id="sjs-AL71"></td>
            <td t="z" id="sjs-AM71"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A72" v="Research">Research</td>
            <td t="s" id="sjs-B72" v="DBT/Danish council for strategic research">DBT/Danish council for strategic research</td>
            <td t="s" id="sjs-C72" v="Strategic Joint research collaboration within health science biotechnology " xml:space="preserve">Strategic Joint research collaboration within health science biotechnology </td>
            <td t="s" id="sjs-D72" v="Covers diverse areas including Stem cells, Lifestyle diseases, cancer etc.">Covers diverse areas including Stem cells, Lifestyle diseases, cancer etc.</td>
            <td t="s" id="sjs-E72" v="€ 3.5 million for up to two projects. Covers direct project costs. " xml:space="preserve">€ 3.5 million for up to two projects. Covers direct project costs. </td>
            <td t="s" id="sjs-F72" v="Needs Danish Collaborator">Needs Danish Collaborator</td>
            <td t="s" id="sjs-G72" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H72" v="3-5 years">3-5 years</td>
            <td t="s" id="sjs-I72" v="http://dbtindia.nic.in/docs/DBT-Denmark_Call.pdf">http://dbtindia.nic.in/docs/DBT-Denmark_Call.pdf</td>
            <td t="z" id="sjs-J72"></td>
            <td t="z" id="sjs-K72"></td>
            <td t="z" id="sjs-L72"></td>
            <td t="z" id="sjs-M72"></td>
            <td t="z" id="sjs-N72"></td>
            <td t="z" id="sjs-O72"></td>
            <td t="z" id="sjs-P72"></td>
            <td t="z" id="sjs-Q72"></td>
            <td t="z" id="sjs-R72"></td>
            <td t="z" id="sjs-S72"></td>
            <td t="z" id="sjs-T72"></td>
            <td t="z" id="sjs-U72"></td>
            <td t="z" id="sjs-V72"></td>
            <td t="z" id="sjs-W72"></td>
            <td t="z" id="sjs-X72"></td>
            <td t="z" id="sjs-Y72"></td>
            <td t="z" id="sjs-Z72"></td>
            <td t="z" id="sjs-AA72"></td>
            <td t="z" id="sjs-AB72"></td>
            <td t="z" id="sjs-AC72"></td>
            <td t="z" id="sjs-AD72"></td>
            <td t="z" id="sjs-AE72"></td>
            <td t="z" id="sjs-AF72"></td>
            <td t="z" id="sjs-AG72"></td>
            <td t="z" id="sjs-AH72"></td>
            <td t="z" id="sjs-AI72"></td>
            <td t="z" id="sjs-AJ72"></td>
            <td t="z" id="sjs-AK72"></td>
            <td t="z" id="sjs-AL72"></td>
            <td t="z" id="sjs-AM72"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A73" v="Research Training">Research Training</td>
            <td t="s" id="sjs-B73" v="DBT/DFG">DBT/DFG</td>
            <td t="s" id="sjs-C73" v="Indo-German International Research Training Groups " xml:space="preserve">Indo-German International Research Training Groups </td>
            <td t="s" id="sjs-D73" v="for training of doctoral students in both countries, in areas of mutual interest, covering all areas Biotechnology, with specific emphasis on interdisciplinarity within the main topic of the research area">for training of doctoral students in both countries, in areas of mutual interest, covering all areas Biotechnology, with specific emphasis on interdisciplinarity within the main topic of the research area</td>
            <td t="s" id="sjs-E73" v="personnel, project specific costs, equipment, consumables, travel and living costs.">personnel, project specific costs, equipment, consumables, travel and living costs.</td>
            <td t="s" id="sjs-F73" v="researchers permanently employed at academic institutions / universities, recognized by the DBT">researchers permanently employed at academic institutions / universities, recognized by the DBT</td>
            <td t="s" id="sjs-G73" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H73" v="4.5 years with possible extension for one more term">4.5 years with possible extension for one more term</td>
            <td t="s" id="sjs-I73" v="http://dbtindia.nic.in/news_management/PressreleaseDetails.asp?PressId=250&amp;button=Edit">http://dbtindia.nic.in/news_management/PressreleaseDetails.asp?PressId=250&amp;button=Edit</td>
            <td t="z" id="sjs-J73"></td>
            <td t="z" id="sjs-K73"></td>
            <td t="z" id="sjs-L73"></td>
            <td t="z" id="sjs-M73"></td>
            <td t="z" id="sjs-N73"></td>
            <td t="z" id="sjs-O73"></td>
            <td t="z" id="sjs-P73"></td>
            <td t="z" id="sjs-Q73"></td>
            <td t="z" id="sjs-R73"></td>
            <td t="z" id="sjs-S73"></td>
            <td t="z" id="sjs-T73"></td>
            <td t="z" id="sjs-U73"></td>
            <td t="z" id="sjs-V73"></td>
            <td t="z" id="sjs-W73"></td>
            <td t="z" id="sjs-X73"></td>
            <td t="z" id="sjs-Y73"></td>
            <td t="z" id="sjs-Z73"></td>
            <td t="z" id="sjs-AA73"></td>
            <td t="z" id="sjs-AB73"></td>
            <td t="z" id="sjs-AC73"></td>
            <td t="z" id="sjs-AD73"></td>
            <td t="z" id="sjs-AE73"></td>
            <td t="z" id="sjs-AF73"></td>
            <td t="z" id="sjs-AG73"></td>
            <td t="z" id="sjs-AH73"></td>
            <td t="z" id="sjs-AI73"></td>
            <td t="z" id="sjs-AJ73"></td>
            <td t="z" id="sjs-AK73"></td>
            <td t="z" id="sjs-AL73"></td>
            <td t="z" id="sjs-AM73"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A74" v="Research">Research</td>
            <td t="s" id="sjs-B74" v="DBT/ ISTPCanada">DBT/ ISTPCanada</td>
            <td t="s" id="sjs-C74" v="Ontario (Canada) - India S&amp; T Cooperation, 
ISTP Canada DBT Joint Call for Proposal in all area of Biotechnology including Life Sciences and Medical Devices  " xml:space="preserve">Ontario (Canada) - India S&amp; T Cooperation,
              <br>ISTP Canada DBT Joint Call for Proposal in all area of Biotechnology including Life Sciences and Medical Devices
            </td>
            <td t="s" id="sjs-D74" v="Projects need to be innovative and have future commercialization prospects">Projects need to be innovative and have future commercialization prospects</td>
            <td t="s" id="sjs-E74" v="Separate budget for Ontario (Canada) and Indian participants, need to demonstrate 25% of non-governmental support in addition to some participant contribution">Separate budget for Ontario (Canada) and Indian participants, need to demonstrate 25% of non-governmental support in addition to some participant contribution</td>
            <td t="s" id="sjs-F74" v="Eligible leads from Ontario (Canada) and India include: researchers and managers of India/Ontario-based companies, academic institutions, research hospitals, other institutes or associations that operate and are headquartered in India/ Ontario (Canada).">Eligible leads from Ontario (Canada) and India include: researchers and managers of India/Ontario-based companies, academic institutions, research hospitals, other institutes or associations that operate and are headquartered in India/ Ontario (Canada).</td>
            <td t="s" id="sjs-G74" v="Submission of Expression of Interest (EOI) by 19th Nov. full application(if inivted) submission deadline: 19th Dec, 2013">Submission of Expression of Interest (EOI) by 19th Nov. full application(if inivted) submission deadline: 19th Dec, 2013</td>
            <td t="z" id="sjs-H74"></td>
            <td t="s" id="sjs-I74" v="http://dbtindia.nic.in/docs/Call_For_Proposal_Ontaria.pdf">http://dbtindia.nic.in/docs/Call_For_Proposal_Ontaria.pdf</td>
            <td t="z" id="sjs-J74"></td>
            <td t="z" id="sjs-K74"></td>
            <td t="z" id="sjs-L74"></td>
            <td t="z" id="sjs-M74"></td>
            <td t="z" id="sjs-N74"></td>
            <td t="z" id="sjs-O74"></td>
            <td t="z" id="sjs-P74"></td>
            <td t="z" id="sjs-Q74"></td>
            <td t="z" id="sjs-R74"></td>
            <td t="z" id="sjs-S74"></td>
            <td t="z" id="sjs-T74"></td>
            <td t="z" id="sjs-U74"></td>
            <td t="z" id="sjs-V74"></td>
            <td t="z" id="sjs-W74"></td>
            <td t="z" id="sjs-X74"></td>
            <td t="z" id="sjs-Y74"></td>
            <td t="z" id="sjs-Z74"></td>
            <td t="z" id="sjs-AA74"></td>
            <td t="z" id="sjs-AB74"></td>
            <td t="z" id="sjs-AC74"></td>
            <td t="z" id="sjs-AD74"></td>
            <td t="z" id="sjs-AE74"></td>
            <td t="z" id="sjs-AF74"></td>
            <td t="z" id="sjs-AG74"></td>
            <td t="z" id="sjs-AH74"></td>
            <td t="z" id="sjs-AI74"></td>
            <td t="z" id="sjs-AJ74"></td>
            <td t="z" id="sjs-AK74"></td>
            <td t="z" id="sjs-AL74"></td>
            <td t="z" id="sjs-AM74"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A75" v="Research">Research</td>
            <td t="s" id="sjs-B75" v="DBT/ISTP Canada">DBT/ISTP Canada</td>
            <td t="s" id="sjs-C75" v="CANADA - INDIA SCIENTIFIC AND TECHNOLOGICAL COOPERATION, ISTPCanada-DBT Joint Call for Proposals for Collaborative R&amp;D Projects " xml:space="preserve">CANADA - INDIA SCIENTIFIC AND TECHNOLOGICAL COOPERATION, ISTPCanada-DBT Joint Call for Proposals for Collaborative R&amp;D Projects </td>
            <td t="s" id="sjs-D75" v="To foster and support development of collaborative R&amp;D projects bringing together Industry and academia from both countries for joint development of inovative products or processes. Priority areas include Biotechnology, health research, Pharmaceuticals,medical devices, nanotechnology">To foster and support development of collaborative R&amp;D projects bringing together Industry and academia from both countries for joint development of inovative products or processes. Priority areas include Biotechnology, health research, Pharmaceuticals,medical devices, nanotechnology</td>
            <td t="s" id="sjs-E75" v="up to a maximum of CDN $400,000&nbsp;or&nbsp;up to 50 percent of the eligible R&amp;D project value">up to a maximum of CDN $400,000&nbsp;or&nbsp;up to 50 percent of the eligible R&amp;D project value</td>
            <td t="s" id="sjs-F75" v="Canadian lead to be a for-profit company, Indian side lead may be Companies; academic institutions; research hospitals; or other R&amp;D institutes but participation from for-profit company from India mandatory">Canadian lead to be a for-profit company, Indian side lead may be Companies; academic institutions; research hospitals; or other R&amp;D institutes but participation from for-profit company from India mandatory</td>
            <td t="s" id="sjs-G75" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H75" v="12-24 months">12-24 months</td>
            <td t="s" id="sjs-I75" v="http://dbtindia.nic.in/performa/ISTPCanadaDBTcallforproposalMay2012.doc">http://dbtindia.nic.in/performa/ISTPCanadaDBTcallforproposalMay2012.doc</td>
            <td t="z" id="sjs-J75"></td>
            <td t="z" id="sjs-K75"></td>
            <td t="z" id="sjs-L75"></td>
            <td t="z" id="sjs-M75"></td>
            <td t="z" id="sjs-N75"></td>
            <td t="z" id="sjs-O75"></td>
            <td t="z" id="sjs-P75"></td>
            <td t="z" id="sjs-Q75"></td>
            <td t="z" id="sjs-R75"></td>
            <td t="z" id="sjs-S75"></td>
            <td t="z" id="sjs-T75"></td>
            <td t="z" id="sjs-U75"></td>
            <td t="z" id="sjs-V75"></td>
            <td t="z" id="sjs-W75"></td>
            <td t="z" id="sjs-X75"></td>
            <td t="z" id="sjs-Y75"></td>
            <td t="z" id="sjs-Z75"></td>
            <td t="z" id="sjs-AA75"></td>
            <td t="z" id="sjs-AB75"></td>
            <td t="z" id="sjs-AC75"></td>
            <td t="z" id="sjs-AD75"></td>
            <td t="z" id="sjs-AE75"></td>
            <td t="z" id="sjs-AF75"></td>
            <td t="z" id="sjs-AG75"></td>
            <td t="z" id="sjs-AH75"></td>
            <td t="z" id="sjs-AI75"></td>
            <td t="z" id="sjs-AJ75"></td>
            <td t="z" id="sjs-AK75"></td>
            <td t="z" id="sjs-AL75"></td>
            <td t="z" id="sjs-AM75"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A76" v="Research">Research</td>
            <td t="s" id="sjs-B76" v="DBT/VINNOVA/ SRC (Sweden)">DBT/VINNOVA/ SRC (Sweden)</td>
            <td t="s" id="sjs-C76" v="Strategic Indo-Swedish Cooperative Innovation Programme- Joint call in the field of Health " xml:space="preserve">Strategic Indo-Swedish Cooperative Innovation Programme- Joint call in the field of Health </td>
            <td t="s" id="sjs-D76" v="Project s should be related to health areas, and should provide economical, societal and environmentally sustainable solutions.">Project s should be related to health areas, and should provide economical, societal and environmentally sustainable solutions.</td>
            <td t="s" id="sjs-E76" v="Manpower, equipment, consumables, travel expenses etc">Manpower, equipment, consumables, travel expenses etc</td>
            <td t="s" id="sjs-F76" v="Indian and Swedish partners from public, private and nonprofit organizations that perform R&amp;D and innovation activities.">Indian and Swedish partners from public, private and nonprofit organizations that perform R&amp;D and innovation activities.</td>
            <td t="s" id="sjs-G76" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H76" v="18-36 months">18-36 months</td>
            <td t="s" id="sjs-I76" v="http://dbtindia.nic.in/docs/Strategic2ndCALL2013.doc">http://dbtindia.nic.in/docs/Strategic2ndCALL2013.doc</td>
            <td t="z" id="sjs-J76"></td>
            <td t="z" id="sjs-K76"></td>
            <td t="z" id="sjs-L76"></td>
            <td t="z" id="sjs-M76"></td>
            <td t="z" id="sjs-N76"></td>
            <td t="z" id="sjs-O76"></td>
            <td t="z" id="sjs-P76"></td>
            <td t="z" id="sjs-Q76"></td>
            <td t="z" id="sjs-R76"></td>
            <td t="z" id="sjs-S76"></td>
            <td t="z" id="sjs-T76"></td>
            <td t="z" id="sjs-U76"></td>
            <td t="z" id="sjs-V76"></td>
            <td t="z" id="sjs-W76"></td>
            <td t="z" id="sjs-X76"></td>
            <td t="z" id="sjs-Y76"></td>
            <td t="z" id="sjs-Z76"></td>
            <td t="z" id="sjs-AA76"></td>
            <td t="z" id="sjs-AB76"></td>
            <td t="z" id="sjs-AC76"></td>
            <td t="z" id="sjs-AD76"></td>
            <td t="z" id="sjs-AE76"></td>
            <td t="z" id="sjs-AF76"></td>
            <td t="z" id="sjs-AG76"></td>
            <td t="z" id="sjs-AH76"></td>
            <td t="z" id="sjs-AI76"></td>
            <td t="z" id="sjs-AJ76"></td>
            <td t="z" id="sjs-AK76"></td>
            <td t="z" id="sjs-AL76"></td>
            <td t="z" id="sjs-AM76"></td>
          </tr>
          <tr>
            <td t="z" id="sjs-A77"></td>
            <td t="z" id="sjs-B77"></td>
            <td t="z" id="sjs-C77"></td>
            <td t="z" id="sjs-D77"></td>
            <td t="z" id="sjs-E77"></td>
            <td t="z" id="sjs-F77"></td>
            <td t="z" id="sjs-G77"></td>
            <td t="z" id="sjs-H77"></td>
            <td t="z" id="sjs-I77"></td>
            <td t="z" id="sjs-J77"></td>
            <td t="z" id="sjs-K77"></td>
            <td t="z" id="sjs-L77"></td>
            <td t="z" id="sjs-M77"></td>
            <td t="z" id="sjs-N77"></td>
            <td t="z" id="sjs-O77"></td>
            <td t="z" id="sjs-P77"></td>
            <td t="z" id="sjs-Q77"></td>
            <td t="z" id="sjs-R77"></td>
            <td t="z" id="sjs-S77"></td>
            <td t="z" id="sjs-T77"></td>
            <td t="z" id="sjs-U77"></td>
            <td t="z" id="sjs-V77"></td>
            <td t="z" id="sjs-W77"></td>
            <td t="z" id="sjs-X77"></td>
            <td t="z" id="sjs-Y77"></td>
            <td t="z" id="sjs-Z77"></td>
            <td t="z" id="sjs-AA77"></td>
            <td t="z" id="sjs-AB77"></td>
            <td t="z" id="sjs-AC77"></td>
            <td t="z" id="sjs-AD77"></td>
            <td t="z" id="sjs-AE77"></td>
            <td t="z" id="sjs-AF77"></td>
            <td t="z" id="sjs-AG77"></td>
            <td t="z" id="sjs-AH77"></td>
            <td t="z" id="sjs-AI77"></td>
            <td t="z" id="sjs-AJ77"></td>
            <td t="z" id="sjs-AK77"></td>
            <td t="z" id="sjs-AL77"></td>
            <td t="z" id="sjs-AM77"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A78" v="Research">Research</td>
            <td t="s" id="sjs-B78" v="DBT/RMES (Russia)">DBT/RMES (Russia)</td>
            <td t="s" id="sjs-C78" v="Indo-Russia Joint Call for Proposal (2014-2016)">Indo-Russia Joint Call for Proposal (2014-2016)</td>
            <td t="s" id="sjs-D78" v="Priority areas include Bio-energy, Nano-biotechnology,
Bio-instrumentation,
Affordable Diagnostics/ Devices for Human Health and Agriculture">Priority areas include Bio-energy, Nano-biotechnology,
              <br>Bio-instrumentation,
              <br>Affordable Diagnostics/ Devices for Human Health and Agriculture
            </td>
            <td t="s" id="sjs-E78" v="Maximum funding not more than INR 2,70,00,000 per project">Maximum funding not more than INR 2,70,00,000 per project</td>
            <td t="s" id="sjs-F78" v="PhD, regular employment in host institute, age not more than 55 years, one investigator from India and one from Russia">PhD, regular employment in host institute, age not more than 55 years, one investigator from India and one from Russia</td>
            <td t="s" id="sjs-G78" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H78" v="3 years">3 years</td>
            <td t="s" id="sjs-I78" v="http://dbtindia.nic.in/docs/Indo-Russia_JCP2014-16.pdf">http://dbtindia.nic.in/docs/Indo-Russia_JCP2014-16.pdf</td>
            <td t="z" id="sjs-J78"></td>
            <td t="z" id="sjs-K78"></td>
            <td t="z" id="sjs-L78"></td>
            <td t="z" id="sjs-M78"></td>
            <td t="z" id="sjs-N78"></td>
            <td t="z" id="sjs-O78"></td>
            <td t="z" id="sjs-P78"></td>
            <td t="z" id="sjs-Q78"></td>
            <td t="z" id="sjs-R78"></td>
            <td t="z" id="sjs-S78"></td>
            <td t="z" id="sjs-T78"></td>
            <td t="z" id="sjs-U78"></td>
            <td t="z" id="sjs-V78"></td>
            <td t="z" id="sjs-W78"></td>
            <td t="z" id="sjs-X78"></td>
            <td t="z" id="sjs-Y78"></td>
            <td t="z" id="sjs-Z78"></td>
            <td t="z" id="sjs-AA78"></td>
            <td t="z" id="sjs-AB78"></td>
            <td t="z" id="sjs-AC78"></td>
            <td t="z" id="sjs-AD78"></td>
            <td t="z" id="sjs-AE78"></td>
            <td t="z" id="sjs-AF78"></td>
            <td t="z" id="sjs-AG78"></td>
            <td t="z" id="sjs-AH78"></td>
            <td t="z" id="sjs-AI78"></td>
            <td t="z" id="sjs-AJ78"></td>
            <td t="z" id="sjs-AK78"></td>
            <td t="z" id="sjs-AL78"></td>
            <td t="z" id="sjs-AM78"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A79" v="Research">Research</td>
            <td t="s" id="sjs-B79" v="DBT/ Swiss Embassy in India">DBT/ Swiss Embassy in India</td>
            <td t="s" id="sjs-C79" v="Indo-Swiss Collaboration in Biotechnology (ISCB)">Indo-Swiss Collaboration in Biotechnology (ISCB)</td>
            <td t="s" id="sjs-D79" v="Technical thrust areas are to improve input efficiency, stress resistance and targeted delivery using biotechnologies or life sciences approaches by (i) genetic enhancement of crops and (ii) novel inputs for improved crop production. Target crops are small millets. Preference to projects organised in networks lead by the individual network partners " xml:space="preserve">Technical thrust areas are to improve input efficiency, stress resistance and targeted delivery using biotechnologies or life sciences approaches by (i) genetic enhancement of crops and (ii) novel inputs for improved crop production. Target crops are small millets. Preference to projects organised in networks lead by the individual network partners </td>
            <td t="s" id="sjs-E79" v="Personnel, recurring expenses, equipment and cost towards scientific exchanges, meetings/workshops for the entire project " xml:space="preserve">Personnel, recurring expenses, equipment and cost towards scientific exchanges, meetings/workshops for the entire project </td>
            <td t="s" id="sjs-F79" v="Phd with experience in relevant areas, regular employment in a research institute, below 55 years of age. " xml:space="preserve">Phd with experience in relevant areas, regular employment in a research institute, below 55 years of age. </td>
            <td t="s" id="sjs-G79" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H79" v="3 years">3 years</td>
            <td t="s" id="sjs-I79" v="http://dbtindia.nic.in/docs/FlagXrevisedAdvertisement28JAN2013.doc">http://dbtindia.nic.in/docs/FlagXrevisedAdvertisement28JAN2013.doc</td>
            <td t="z" id="sjs-J79"></td>
            <td t="z" id="sjs-K79"></td>
            <td t="z" id="sjs-L79"></td>
            <td t="z" id="sjs-M79"></td>
            <td t="z" id="sjs-N79"></td>
            <td t="z" id="sjs-O79"></td>
            <td t="z" id="sjs-P79"></td>
            <td t="z" id="sjs-Q79"></td>
            <td t="z" id="sjs-R79"></td>
            <td t="z" id="sjs-S79"></td>
            <td t="z" id="sjs-T79"></td>
            <td t="z" id="sjs-U79"></td>
            <td t="z" id="sjs-V79"></td>
            <td t="z" id="sjs-W79"></td>
            <td t="z" id="sjs-X79"></td>
            <td t="z" id="sjs-Y79"></td>
            <td t="z" id="sjs-Z79"></td>
            <td t="z" id="sjs-AA79"></td>
            <td t="z" id="sjs-AB79"></td>
            <td t="z" id="sjs-AC79"></td>
            <td t="z" id="sjs-AD79"></td>
            <td t="z" id="sjs-AE79"></td>
            <td t="z" id="sjs-AF79"></td>
            <td t="z" id="sjs-AG79"></td>
            <td t="z" id="sjs-AH79"></td>
            <td t="z" id="sjs-AI79"></td>
            <td t="z" id="sjs-AJ79"></td>
            <td t="z" id="sjs-AK79"></td>
            <td t="z" id="sjs-AL79"></td>
            <td t="z" id="sjs-AM79"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A80" v="Research">Research</td>
            <td t="s" id="sjs-B80" v="DBT/TEKES,Finland">DBT/TEKES,Finland</td>
            <td t="s" id="sjs-C80" v="Indo-Finland Joint Call for Proposals in Health and Well Being">Indo-Finland Joint Call for Proposals in Health and Well Being</td>
            <td t="z" id="sjs-D80"></td>
            <td t="z" id="sjs-E80"></td>
            <td t="s" id="sjs-F80" v=" Projects from industry or research organisations. Industry-academia  collaboration recommended.Needs Collaborator in Finland" xml:space="preserve"> Projects from industry or research organisations. Industry-academia collaboration recommended.Needs Collaborator in Finland</td>
            <td t="z" id="sjs-G80"></td>
            <td t="z" id="sjs-H80"></td>
            <td t="s" id="sjs-I80" v="http://dbtindia.nic.in/docs/DBtTekesCall.doc">http://dbtindia.nic.in/docs/DBtTekesCall.doc</td>
            <td t="z" id="sjs-J80"></td>
            <td t="z" id="sjs-K80"></td>
            <td t="z" id="sjs-L80"></td>
            <td t="z" id="sjs-M80"></td>
            <td t="z" id="sjs-N80"></td>
            <td t="z" id="sjs-O80"></td>
            <td t="z" id="sjs-P80"></td>
            <td t="z" id="sjs-Q80"></td>
            <td t="z" id="sjs-R80"></td>
            <td t="z" id="sjs-S80"></td>
            <td t="z" id="sjs-T80"></td>
            <td t="z" id="sjs-U80"></td>
            <td t="z" id="sjs-V80"></td>
            <td t="z" id="sjs-W80"></td>
            <td t="z" id="sjs-X80"></td>
            <td t="z" id="sjs-Y80"></td>
            <td t="z" id="sjs-Z80"></td>
            <td t="z" id="sjs-AA80"></td>
            <td t="z" id="sjs-AB80"></td>
            <td t="z" id="sjs-AC80"></td>
            <td t="z" id="sjs-AD80"></td>
            <td t="z" id="sjs-AE80"></td>
            <td t="z" id="sjs-AF80"></td>
            <td t="z" id="sjs-AG80"></td>
            <td t="z" id="sjs-AH80"></td>
            <td t="z" id="sjs-AI80"></td>
            <td t="z" id="sjs-AJ80"></td>
            <td t="z" id="sjs-AK80"></td>
            <td t="z" id="sjs-AL80"></td>
            <td t="z" id="sjs-AM80"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A81" v="Research">Research</td>
            <td t="s" id="sjs-B81" v="DBT/MOST, Vietnam">DBT/MOST, Vietnam</td>
            <td t="s" id="sjs-C81" v="INDO- VIETNAM JOINT CALL FOR COLLABORATIVE PROPOSALS " xml:space="preserve">INDO- VIETNAM JOINT CALL FOR COLLABORATIVE PROPOSALS </td>
            <td t="s" id="sjs-D81" v="TO SUPPORT MEDICAL, ENVIRONMENTAL AND AGRICULTURAL BIOTECHNOLOGY (INCLUDING ANIMAL AND AQUACULTURE) RESEARCH">TO SUPPORT MEDICAL, ENVIRONMENTAL AND AGRICULTURAL BIOTECHNOLOGY (INCLUDING ANIMAL AND AQUACULTURE) RESEARCH</td>
            <td t="z" id="sjs-E81"></td>
            <td t="s" id="sjs-F81" v="Indian and Vietnamese researchers regularly employed in Indian or Vietnamese public funded institutions that perform R&amp;D activities">Indian and Vietnamese researchers regularly employed in Indian or Vietnamese public funded institutions that perform R&amp;D activities</td>
            <td t="s" id="sjs-G81" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H81" v="24 to 36 months">24 to 36 months</td>
            <td t="s" id="sjs-I81" v="http://dbtindia.nic.in/docs/Advt_vietnam.doc">http://dbtindia.nic.in/docs/Advt_vietnam.doc</td>
            <td t="z" id="sjs-J81"></td>
            <td t="z" id="sjs-K81"></td>
            <td t="z" id="sjs-L81"></td>
            <td t="z" id="sjs-M81"></td>
            <td t="z" id="sjs-N81"></td>
            <td t="z" id="sjs-O81"></td>
            <td t="z" id="sjs-P81"></td>
            <td t="z" id="sjs-Q81"></td>
            <td t="z" id="sjs-R81"></td>
            <td t="z" id="sjs-S81"></td>
            <td t="z" id="sjs-T81"></td>
            <td t="z" id="sjs-U81"></td>
            <td t="z" id="sjs-V81"></td>
            <td t="z" id="sjs-W81"></td>
            <td t="z" id="sjs-X81"></td>
            <td t="z" id="sjs-Y81"></td>
            <td t="z" id="sjs-Z81"></td>
            <td t="z" id="sjs-AA81"></td>
            <td t="z" id="sjs-AB81"></td>
            <td t="z" id="sjs-AC81"></td>
            <td t="z" id="sjs-AD81"></td>
            <td t="z" id="sjs-AE81"></td>
            <td t="z" id="sjs-AF81"></td>
            <td t="z" id="sjs-AG81"></td>
            <td t="z" id="sjs-AH81"></td>
            <td t="z" id="sjs-AI81"></td>
            <td t="z" id="sjs-AJ81"></td>
            <td t="z" id="sjs-AK81"></td>
            <td t="z" id="sjs-AL81"></td>
            <td t="z" id="sjs-AM81"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A82" v="Research">Research</td>
            <td t="s" id="sjs-B82" v="DST/ANR">DST/ANR</td>
            <td t="s" id="sjs-C82" v="DST-ANR collaborative research proposals">DST-ANR collaborative research proposals</td>
            <td t="s" id="sjs-D82" v="Pre-proposal stage. Target topics- Neuroscience and Engineering sciences">Pre-proposal stage. Target topics- Neuroscience and Engineering sciences</td>
            <td t="s" id="sjs-E82" v="Sending side pays for travel, accomodation, per-diem">Sending side pays for travel, accomodation, per-diem</td>
            <td t="s" id="sjs-F82" v="Indian and French researchers in regular employment">Indian and French researchers in regular employment</td>
            <td t="s" id="sjs-G82" v="to be announced">to be announced</td>
            <td t="s" id="sjs-H82" v="3 years">3 years</td>
            <td t="s" id="sjs-I82" v="http://cefipra.org/pdf/DST-ANR-Joint-Call-for-Pre-proposals.pdf">http://cefipra.org/pdf/DST-ANR-Joint-Call-for-Pre-proposals.pdf</td>
            <td t="z" id="sjs-J82"></td>
            <td t="z" id="sjs-K82"></td>
            <td t="z" id="sjs-L82"></td>
            <td t="z" id="sjs-M82"></td>
            <td t="z" id="sjs-N82"></td>
            <td t="z" id="sjs-O82"></td>
            <td t="z" id="sjs-P82"></td>
            <td t="z" id="sjs-Q82"></td>
            <td t="z" id="sjs-R82"></td>
            <td t="z" id="sjs-S82"></td>
            <td t="z" id="sjs-T82"></td>
            <td t="z" id="sjs-U82"></td>
            <td t="z" id="sjs-V82"></td>
            <td t="z" id="sjs-W82"></td>
            <td t="z" id="sjs-X82"></td>
            <td t="z" id="sjs-Y82"></td>
            <td t="z" id="sjs-Z82"></td>
            <td t="z" id="sjs-AA82"></td>
            <td t="z" id="sjs-AB82"></td>
            <td t="z" id="sjs-AC82"></td>
            <td t="z" id="sjs-AD82"></td>
            <td t="z" id="sjs-AE82"></td>
            <td t="z" id="sjs-AF82"></td>
            <td t="z" id="sjs-AG82"></td>
            <td t="z" id="sjs-AH82"></td>
            <td t="z" id="sjs-AI82"></td>
            <td t="z" id="sjs-AJ82"></td>
            <td t="z" id="sjs-AK82"></td>
            <td t="z" id="sjs-AL82"></td>
            <td t="z" id="sjs-AM82"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A83" v="Research">Research</td>
            <td t="s" id="sjs-B83" v="DST/A*STAR">DST/A*STAR</td>
            <td t="s" id="sjs-C83" v="India -Singapore Joint Science and Technology Research Cooperation">India -Singapore Joint Science and Technology Research Cooperation</td>
            <td t="s" id="sjs-D83" v="Supports joint research projects in the area “Advanced Materials &amp; Energy”">Supports joint research projects in the area “Advanced Materials &amp; Energy”</td>
            <td t="s" id="sjs-E83" v="Consumables, Exchange visits. Sending side funds international travel, medical insurance, accomodation and living expenses. Max funding upto Rs. 45,00,000 on Indian side and SGD 300,000 " xml:space="preserve">Consumables, Exchange visits. Sending side funds international travel, medical insurance, accomodation and living expenses. Max funding upto Rs. 45,00,000 on Indian side and SGD 300,000 </td>
            <td t="s" id="sjs-F83" v="Indian and Singaporean researchers in regular employment">Indian and Singaporean researchers in regular employment</td>
            <td t="s" id="sjs-G83" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="s" id="sjs-H83" v="3 years">3 years</td>
            <td t="s" id="sjs-I83" v="http://www.dst.gov.in/whats_new/whats_new13/COP_DST-ASTAR.pdf">http://www.dst.gov.in/whats_new/whats_new13/COP_DST-ASTAR.pdf</td>
            <td t="z" id="sjs-J83"></td>
            <td t="z" id="sjs-K83"></td>
            <td t="z" id="sjs-L83"></td>
            <td t="z" id="sjs-M83"></td>
            <td t="z" id="sjs-N83"></td>
            <td t="z" id="sjs-O83"></td>
            <td t="z" id="sjs-P83"></td>
            <td t="z" id="sjs-Q83"></td>
            <td t="z" id="sjs-R83"></td>
            <td t="z" id="sjs-S83"></td>
            <td t="z" id="sjs-T83"></td>
            <td t="z" id="sjs-U83"></td>
            <td t="z" id="sjs-V83"></td>
            <td t="z" id="sjs-W83"></td>
            <td t="z" id="sjs-X83"></td>
            <td t="z" id="sjs-Y83"></td>
            <td t="z" id="sjs-Z83"></td>
            <td t="z" id="sjs-AA83"></td>
            <td t="z" id="sjs-AB83"></td>
            <td t="z" id="sjs-AC83"></td>
            <td t="z" id="sjs-AD83"></td>
            <td t="z" id="sjs-AE83"></td>
            <td t="z" id="sjs-AF83"></td>
            <td t="z" id="sjs-AG83"></td>
            <td t="z" id="sjs-AH83"></td>
            <td t="z" id="sjs-AI83"></td>
            <td t="z" id="sjs-AJ83"></td>
            <td t="z" id="sjs-AK83"></td>
            <td t="z" id="sjs-AL83"></td>
            <td t="z" id="sjs-AM83"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A84" v="Research">Research</td>
            <td t="s" id="sjs-B84" v="DST/ DIISTR (australia)">DST/ DIISTR (australia)</td>
            <td t="s" id="sjs-C84" v="AUSTRALIA-INDIA STRATEGIC RESEARCH FUND (AISRF)- Collaborative Research Projects">AUSTRALIA-INDIA STRATEGIC RESEARCH FUND (AISRF)- Collaborative Research Projects</td>
            <td t="s" id="sjs-D84" v="Needs australian collab. Restrictive areas of research, includes Marine Sciences, Earth Sciences">Needs australian collab. Restrictive areas of research, includes Marine Sciences, Earth Sciences</td>
            <td t="s" id="sjs-E84" v="Travel, accomodation, JRF/RA, consumables, minor equipment, work-shop specific funding for bilateral workshops">Travel, accomodation, JRF/RA, consumables, minor equipment, work-shop specific funding for bilateral workshops</td>
            <td t="s" id="sjs-F84" v="Independent position in research institute/Univ">Independent position in research institute/Univ</td>
            <td t="s" id="sjs-G84" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H84" v="3 years">3 years</td>
            <td t="s" id="sjs-I84" v="http://www.dst.gov.in/whats_new/whats_new13/cop_indo-australia.pdf">http://www.dst.gov.in/whats_new/whats_new13/cop_indo-australia.pdf</td>
            <td t="z" id="sjs-J84"></td>
            <td t="z" id="sjs-K84"></td>
            <td t="z" id="sjs-L84"></td>
            <td t="z" id="sjs-M84"></td>
            <td t="z" id="sjs-N84"></td>
            <td t="z" id="sjs-O84"></td>
            <td t="z" id="sjs-P84"></td>
            <td t="z" id="sjs-Q84"></td>
            <td t="z" id="sjs-R84"></td>
            <td t="z" id="sjs-S84"></td>
            <td t="z" id="sjs-T84"></td>
            <td t="z" id="sjs-U84"></td>
            <td t="z" id="sjs-V84"></td>
            <td t="z" id="sjs-W84"></td>
            <td t="z" id="sjs-X84"></td>
            <td t="z" id="sjs-Y84"></td>
            <td t="z" id="sjs-Z84"></td>
            <td t="z" id="sjs-AA84"></td>
            <td t="z" id="sjs-AB84"></td>
            <td t="z" id="sjs-AC84"></td>
            <td t="z" id="sjs-AD84"></td>
            <td t="z" id="sjs-AE84"></td>
            <td t="z" id="sjs-AF84"></td>
            <td t="z" id="sjs-AG84"></td>
            <td t="z" id="sjs-AH84"></td>
            <td t="z" id="sjs-AI84"></td>
            <td t="z" id="sjs-AJ84"></td>
            <td t="z" id="sjs-AK84"></td>
            <td t="z" id="sjs-AL84"></td>
            <td t="z" id="sjs-AM84"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A85" v="Research">Research</td>
            <td t="s" id="sjs-B85" v="DST/DIISTR (Australia)">DST/DIISTR (Australia)</td>
            <td t="s" id="sjs-C85" v="Grand Challenge Component (Round 2)">Grand Challenge Component (Round 2)</td>
            <td t="s" id="sjs-D85" v="priority areas for this round are " health"="" and="" "energy""="">priority areas for this round are " Health" and "Energy" </td>
            <td t="s" id="sjs-E85" v="Equivalent of 3 million AUD for the Indian component. Priority areas " food="" and="" water="" security"="" "environment""="">Equivalent of 3 million AUD for the Indian component. Priority areas " food and water security" and "environment" </td>
            <td t="s" id="sjs-F85" v="Requires australian collaborator and an end user">Requires australian collaborator and an end user</td>
            <td t="s" id="sjs-G85" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H85" v="3-4 years " xml:space="preserve">3-4 years </td>
            <td t="s" id="sjs-I85" v="http://www.innovation.gov.au/Science/InternationalCollaboration/aisrf/Documents/AISRFGrandChallengeFundGuidelines.pdf">http://www.innovation.gov.au/Science/InternationalCollaboration/aisrf/Documents/AISRFGrandChallengeFundGuidelines.pdf</td>
            <td t="z" id="sjs-J85"></td>
            <td t="z" id="sjs-K85"></td>
            <td t="z" id="sjs-L85"></td>
            <td t="z" id="sjs-M85"></td>
            <td t="z" id="sjs-N85"></td>
            <td t="z" id="sjs-O85"></td>
            <td t="z" id="sjs-P85"></td>
            <td t="z" id="sjs-Q85"></td>
            <td t="z" id="sjs-R85"></td>
            <td t="z" id="sjs-S85"></td>
            <td t="z" id="sjs-T85"></td>
            <td t="z" id="sjs-U85"></td>
            <td t="z" id="sjs-V85"></td>
            <td t="z" id="sjs-W85"></td>
            <td t="z" id="sjs-X85"></td>
            <td t="z" id="sjs-Y85"></td>
            <td t="z" id="sjs-Z85"></td>
            <td t="z" id="sjs-AA85"></td>
            <td t="z" id="sjs-AB85"></td>
            <td t="z" id="sjs-AC85"></td>
            <td t="z" id="sjs-AD85"></td>
            <td t="z" id="sjs-AE85"></td>
            <td t="z" id="sjs-AF85"></td>
            <td t="z" id="sjs-AG85"></td>
            <td t="z" id="sjs-AH85"></td>
            <td t="z" id="sjs-AI85"></td>
            <td t="z" id="sjs-AJ85"></td>
            <td t="z" id="sjs-AK85"></td>
            <td t="z" id="sjs-AL85"></td>
            <td t="z" id="sjs-AM85"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A86" v="Research">Research</td>
            <td t="s" id="sjs-B86" v="DST/DFG (Germany)">DST/DFG (Germany)</td>
            <td t="s" id="sjs-C86" v="Indo-German Programme">Indo-German Programme</td>
            <td t="s" id="sjs-D86" v="Priority areas in Chemistry">Priority areas in Chemistry</td>
            <td t="s" id="sjs-E86" v="Project specific direct costs viz. consumables, personnel and exchange visits">Project specific direct costs viz. consumables, personnel and exchange visits</td>
            <td t="s" id="sjs-F86" v="Requires German Collaborator">Requires German Collaborator</td>
            <td t="s" id="sjs-G86" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H86" v="upto 3 years">upto 3 years</td>
            <td t="s" id="sjs-I86" v="http://www.dst.gov.in/whats_new/whats_new12/COP_DST_DFG_2012.pdf">http://www.dst.gov.in/whats_new/whats_new12/COP_DST_DFG_2012.pdf</td>
            <td t="z" id="sjs-J86"></td>
            <td t="z" id="sjs-K86"></td>
            <td t="z" id="sjs-L86"></td>
            <td t="z" id="sjs-M86"></td>
            <td t="z" id="sjs-N86"></td>
            <td t="z" id="sjs-O86"></td>
            <td t="z" id="sjs-P86"></td>
            <td t="z" id="sjs-Q86"></td>
            <td t="z" id="sjs-R86"></td>
            <td t="z" id="sjs-S86"></td>
            <td t="z" id="sjs-T86"></td>
            <td t="z" id="sjs-U86"></td>
            <td t="z" id="sjs-V86"></td>
            <td t="z" id="sjs-W86"></td>
            <td t="z" id="sjs-X86"></td>
            <td t="z" id="sjs-Y86"></td>
            <td t="z" id="sjs-Z86"></td>
            <td t="z" id="sjs-AA86"></td>
            <td t="z" id="sjs-AB86"></td>
            <td t="z" id="sjs-AC86"></td>
            <td t="z" id="sjs-AD86"></td>
            <td t="z" id="sjs-AE86"></td>
            <td t="z" id="sjs-AF86"></td>
            <td t="z" id="sjs-AG86"></td>
            <td t="z" id="sjs-AH86"></td>
            <td t="z" id="sjs-AI86"></td>
            <td t="z" id="sjs-AJ86"></td>
            <td t="z" id="sjs-AK86"></td>
            <td t="z" id="sjs-AL86"></td>
            <td t="z" id="sjs-AM86"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A87" v="Research">Research</td>
            <td t="s" id="sjs-B87" v="DST/ Max Planck Society">DST/ Max Planck Society</td>
            <td t="s" id="sjs-C87" v="Max Planck Partner Groups at Indian Partner Institutions">Max Planck Partner Groups at Indian Partner Institutions</td>
            <td t="s" id="sjs-D87" v="Research to be conducted at Indian partner institution (IPI)">Research to be conducted at Indian partner institution (IPI)</td>
            <td t="s" id="sjs-E87" v="20,000 EURO p.a. by MPI, equivalent funding from IGSTC ( Indo-German Science and Technology Center) on behalf of DST via the director of IPI">20,000 EURO p.a. by MPI, equivalent funding from IGSTC ( Indo-German Science and Technology Center) on behalf of DST via the director of IPI</td>
            <td t="s" id="sjs-F87" v="Fellowship for junior scientist/Post doc to promote cooperative research between the former research lab at MPI and institutions in India to allow continuation of the research interest.Postdoc (age limit 38 years), with minimum 12 month experience in a Max Planck Institute (MPI)">Fellowship for junior scientist/Post doc to promote cooperative research between the former research lab at MPI and institutions in India to allow continuation of the research interest.Postdoc (age limit 38 years), with minimum 12 month experience in a Max Planck Institute (MPI)</td>
            <td t="s" id="sjs-G87" v="To be announced (Sep)">To be announced (Sep)</td>
            <td t="s" id="sjs-H87" v="3-5 years">3-5 years</td>
            <td t="s" id="sjs-I87" v="http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf">http://www.dst.gov.in/whats_new/whats_new12/COP_DST-MPG.pdf</td>
            <td t="z" id="sjs-J87"></td>
            <td t="z" id="sjs-K87"></td>
            <td t="z" id="sjs-L87"></td>
            <td t="z" id="sjs-M87"></td>
            <td t="z" id="sjs-N87"></td>
            <td t="z" id="sjs-O87"></td>
            <td t="z" id="sjs-P87"></td>
            <td t="z" id="sjs-Q87"></td>
            <td t="z" id="sjs-R87"></td>
            <td t="z" id="sjs-S87"></td>
            <td t="z" id="sjs-T87"></td>
            <td t="z" id="sjs-U87"></td>
            <td t="z" id="sjs-V87"></td>
            <td t="z" id="sjs-W87"></td>
            <td t="z" id="sjs-X87"></td>
            <td t="z" id="sjs-Y87"></td>
            <td t="z" id="sjs-Z87"></td>
            <td t="z" id="sjs-AA87"></td>
            <td t="z" id="sjs-AB87"></td>
            <td t="z" id="sjs-AC87"></td>
            <td t="z" id="sjs-AD87"></td>
            <td t="z" id="sjs-AE87"></td>
            <td t="z" id="sjs-AF87"></td>
            <td t="z" id="sjs-AG87"></td>
            <td t="z" id="sjs-AH87"></td>
            <td t="z" id="sjs-AI87"></td>
            <td t="z" id="sjs-AJ87"></td>
            <td t="z" id="sjs-AK87"></td>
            <td t="z" id="sjs-AL87"></td>
            <td t="z" id="sjs-AM87"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A88" v="Research">Research</td>
            <td t="s" id="sjs-B88" v="DST/NRF (South Africa)">DST/NRF (South Africa)</td>
            <td t="s" id="sjs-C88" v="INDIA - SOUTH AFRICA
JOINT SCIENCE AND TECHNOLOGY RESEARCH COOPERATION- 2013">INDIA - SOUTH AFRICA
              <br>JOINT SCIENCE AND TECHNOLOGY RESEARCH COOPERATION- 2013
            </td>
            <td t="s" id="sjs-D88" v="Priority areas include Green chemistry and biotechnology and Health Sciences">Priority areas include Green chemistry and biotechnology and Health Sciences</td>
            <td t="s" id="sjs-E88" v="manpower, consumables and minor accessories, research expenses, project related visits of Indian and South African researchers to the counterpart country. " xml:space="preserve">manpower, consumables and minor accessories, research expenses, project related visits of Indian and South African researchers to the counterpart country. </td>
            <td t="s" id="sjs-F88" v="Scientists with regular employment in India and South Africa">Scientists with regular employment in India and South Africa</td>
            <td t="s" id="sjs-G88" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H88" v="3 years">3 years</td>
            <td t="s" id="sjs-I88" v="http://www.dst.gov.in/whats_new/whats_new13/cop-india-sa.pdf">http://www.dst.gov.in/whats_new/whats_new13/cop-india-sa.pdf</td>
            <td t="z" id="sjs-J88"></td>
            <td t="z" id="sjs-K88"></td>
            <td t="z" id="sjs-L88"></td>
            <td t="z" id="sjs-M88"></td>
            <td t="z" id="sjs-N88"></td>
            <td t="z" id="sjs-O88"></td>
            <td t="z" id="sjs-P88"></td>
            <td t="z" id="sjs-Q88"></td>
            <td t="z" id="sjs-R88"></td>
            <td t="z" id="sjs-S88"></td>
            <td t="z" id="sjs-T88"></td>
            <td t="z" id="sjs-U88"></td>
            <td t="z" id="sjs-V88"></td>
            <td t="z" id="sjs-W88"></td>
            <td t="z" id="sjs-X88"></td>
            <td t="z" id="sjs-Y88"></td>
            <td t="z" id="sjs-Z88"></td>
            <td t="z" id="sjs-AA88"></td>
            <td t="z" id="sjs-AB88"></td>
            <td t="z" id="sjs-AC88"></td>
            <td t="z" id="sjs-AD88"></td>
            <td t="z" id="sjs-AE88"></td>
            <td t="z" id="sjs-AF88"></td>
            <td t="z" id="sjs-AG88"></td>
            <td t="z" id="sjs-AH88"></td>
            <td t="z" id="sjs-AI88"></td>
            <td t="z" id="sjs-AJ88"></td>
            <td t="z" id="sjs-AK88"></td>
            <td t="z" id="sjs-AL88"></td>
            <td t="z" id="sjs-AM88"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A89" v="Research">Research</td>
            <td t="s" id="sjs-B89" v="DST/JSPS (Japan)">DST/JSPS (Japan)</td>
            <td t="s" id="sjs-C89" v="Indo-Japan Cooperative Science program (IJCSP)">Indo-Japan Cooperative Science program (IJCSP)</td>
            <td t="s" id="sjs-D89" v="scientific areas supported include Fundamental Sciences: Physical and Chemical Systems, 
 Materials and System Engineering: Man-made Systems,  Natural Systems: Life Sciences and Bioengineering, 
 Astronomy, Space, Earth System and Sciences,  Mathematics and Computational Science
">scientific areas supported include Fundamental Sciences: Physical and Chemical Systems,
              <br> Materials and System Engineering: Man-made Systems, Natural Systems: Life Sciences and Bioengineering,
              <br> Astronomy, Space, Earth System and Sciences, Mathematics and Computational Science
              <br>
            </td>
            <td t="s" id="sjs-E89" v="International return airfare, airport transfers, accommodation, per diem. For joint workshops/ seminars to be organized in India, local travel cost of selected Indian participants and organizing expenses may also be considered for support as per DST norms. Some support for consumables and contingencies may be considered as per DST’s norms.">International return airfare, airport transfers, accommodation, per diem. For joint workshops/ seminars to be organized in India, local travel cost of selected Indian participants and organizing expenses may also be considered for support as per DST norms. Some support for consumables and contingencies may be considered as per DST’s norms.</td>
            <td t="s" id="sjs-F89" v="Indian and Japanese PIs working in regular capacity">Indian and Japanese PIs working in regular capacity</td>
            <td t="s" id="sjs-G89" v="To be announced (Sep)">To be announced (Sep)</td>
            <td t="s" id="sjs-H89" v="2 years " xml:space="preserve">2 years </td>
            <td t="s" id="sjs-I89" v="http://dst.gov.in/whats_new/whats_new15/COP_IJCSP2015.pdf">http://dst.gov.in/whats_new/whats_new15/COP_IJCSP2015.pdf</td>
            <td t="z" id="sjs-J89"></td>
            <td t="z" id="sjs-K89"></td>
            <td t="z" id="sjs-L89"></td>
            <td t="z" id="sjs-M89"></td>
            <td t="z" id="sjs-N89"></td>
            <td t="z" id="sjs-O89"></td>
            <td t="z" id="sjs-P89"></td>
            <td t="z" id="sjs-Q89"></td>
            <td t="z" id="sjs-R89"></td>
            <td t="z" id="sjs-S89"></td>
            <td t="z" id="sjs-T89"></td>
            <td t="z" id="sjs-U89"></td>
            <td t="z" id="sjs-V89"></td>
            <td t="z" id="sjs-W89"></td>
            <td t="z" id="sjs-X89"></td>
            <td t="z" id="sjs-Y89"></td>
            <td t="z" id="sjs-Z89"></td>
            <td t="z" id="sjs-AA89"></td>
            <td t="z" id="sjs-AB89"></td>
            <td t="z" id="sjs-AC89"></td>
            <td t="z" id="sjs-AD89"></td>
            <td t="z" id="sjs-AE89"></td>
            <td t="z" id="sjs-AF89"></td>
            <td t="z" id="sjs-AG89"></td>
            <td t="z" id="sjs-AH89"></td>
            <td t="z" id="sjs-AI89"></td>
            <td t="z" id="sjs-AJ89"></td>
            <td t="z" id="sjs-AK89"></td>
            <td t="z" id="sjs-AL89"></td>
            <td t="z" id="sjs-AM89"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A90" v="Research">Research</td>
            <td t="s" id="sjs-B90" v="DST/JST (Japan)">DST/JST (Japan)</td>
            <td t="s" id="sjs-C90" v="Strategic Japanese-Indian Cooperative Program
Biomedical Research Call " xml:space="preserve">Strategic Japanese-Indian Cooperative Program
              <br>Biomedical Research Call
            </td>
            <td t="s" id="sjs-D90" v="Scienitific area supported- Biomedical Research (medical diagnostics for infectious diseases; System biomedicine and their computational platforms)">Scienitific area supported- Biomedical Research (medical diagnostics for infectious diseases; System biomedicine and their computational platforms)</td>
            <td t="s" id="sjs-E90" v="DST- international exchange in bilateral mode. JST- international exchange, research expennses, overhead and other costs. Additional funds for supporting young Indian researcher beyond 6 months in Japan.">DST- international exchange in bilateral mode. JST- international exchange, research expennses, overhead and other costs. Additional funds for supporting young Indian researcher beyond 6 months in Japan.</td>
            <td t="s" id="sjs-F90" v="Indian and Japanese PIs working in regular capacity">Indian and Japanese PIs working in regular capacity</td>
            <td t="s" id="sjs-G90" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H90" v="3 years">3 years</td>
            <td t="s" id="sjs-I90" v="http://www.dst.gov.in/whats_new/whats_new13/Call%20for%20Proposal%202013-14,%20DST-JST.pdf">http://www.dst.gov.in/whats_new/whats_new13/Call%20for%20Proposal%202013-14,%20DST-JST.pdf</td>
            <td t="z" id="sjs-J90"></td>
            <td t="z" id="sjs-K90"></td>
            <td t="z" id="sjs-L90"></td>
            <td t="z" id="sjs-M90"></td>
            <td t="z" id="sjs-N90"></td>
            <td t="z" id="sjs-O90"></td>
            <td t="z" id="sjs-P90"></td>
            <td t="z" id="sjs-Q90"></td>
            <td t="z" id="sjs-R90"></td>
            <td t="z" id="sjs-S90"></td>
            <td t="z" id="sjs-T90"></td>
            <td t="z" id="sjs-U90"></td>
            <td t="z" id="sjs-V90"></td>
            <td t="z" id="sjs-W90"></td>
            <td t="z" id="sjs-X90"></td>
            <td t="z" id="sjs-Y90"></td>
            <td t="z" id="sjs-Z90"></td>
            <td t="z" id="sjs-AA90"></td>
            <td t="z" id="sjs-AB90"></td>
            <td t="z" id="sjs-AC90"></td>
            <td t="z" id="sjs-AD90"></td>
            <td t="z" id="sjs-AE90"></td>
            <td t="z" id="sjs-AF90"></td>
            <td t="z" id="sjs-AG90"></td>
            <td t="z" id="sjs-AH90"></td>
            <td t="z" id="sjs-AI90"></td>
            <td t="z" id="sjs-AJ90"></td>
            <td t="z" id="sjs-AK90"></td>
            <td t="z" id="sjs-AL90"></td>
            <td t="z" id="sjs-AM90"></td>
          </tr>
          <tr>
            <td t="z" id="sjs-A91"></td>
            <td t="s" id="sjs-B91" v="DST-RFBR">DST-RFBR</td>
            <td t="s" id="sjs-C91" v="Indo-Russian Joint Research Call for Proposals">Indo-Russian Joint Research Call for Proposals</td>
            <td t="s" id="sjs-D91" v="Indian and Russian scientists / researchers to submit proposals for Joint projects on Fundamentals of Nuclear Sciences, High performance computing and big data  etc">Indian and Russian scientists / researchers to submit proposals for Joint projects on Fundamentals of Nuclear Sciences, High performance computing and big data etc</td>
            <td t="s" id="sjs-E91" v="US $ 30,000">US $ 30,000</td>
            <td t="s" id="sjs-F91" v="The team leaders must hold a full-time position at a university or research institute in their respective countries.">The team leaders must hold a full-time position at a university or research institute in their respective countries.</td>
            <td t="s" id="sjs-G91" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H91" v="2 years">2 years</td>
            <td t="s" id="sjs-I91" v="http://dst.gov.in/sites/default/files/rfbr-interdisciplinary-call-05-feb-2016_0.pdf">http://dst.gov.in/sites/default/files/rfbr-interdisciplinary-call-05-feb-2016_0.pdf</td>
            <td t="z" id="sjs-J91"></td>
            <td t="z" id="sjs-K91"></td>
            <td t="z" id="sjs-L91"></td>
            <td t="z" id="sjs-M91"></td>
            <td t="z" id="sjs-N91"></td>
            <td t="z" id="sjs-O91"></td>
            <td t="z" id="sjs-P91"></td>
            <td t="z" id="sjs-Q91"></td>
            <td t="z" id="sjs-R91"></td>
            <td t="z" id="sjs-S91"></td>
            <td t="z" id="sjs-T91"></td>
            <td t="z" id="sjs-U91"></td>
            <td t="z" id="sjs-V91"></td>
            <td t="z" id="sjs-W91"></td>
            <td t="z" id="sjs-X91"></td>
            <td t="z" id="sjs-Y91"></td>
            <td t="z" id="sjs-Z91"></td>
            <td t="z" id="sjs-AA91"></td>
            <td t="z" id="sjs-AB91"></td>
            <td t="z" id="sjs-AC91"></td>
            <td t="z" id="sjs-AD91"></td>
            <td t="z" id="sjs-AE91"></td>
            <td t="z" id="sjs-AF91"></td>
            <td t="z" id="sjs-AG91"></td>
            <td t="z" id="sjs-AH91"></td>
            <td t="z" id="sjs-AI91"></td>
            <td t="z" id="sjs-AJ91"></td>
            <td t="z" id="sjs-AK91"></td>
            <td t="z" id="sjs-AL91"></td>
            <td t="z" id="sjs-AM91"></td>
          </tr>
          <tr>
            <td t="z" id="sjs-A92"></td>
            <td t="s" id="sjs-B92" v="DST">DST</td>
            <td t="s" id="sjs-C92" v="Indo-Belarus Joint Research Programme">Indo-Belarus Joint Research Programme</td>
            <td t="s" id="sjs-D92" v="Joint R&amp;D project prop
osals from scientists &amp; technologists from India 
and Belarus">Joint R&amp;D project prop
              <br>osals from scientists &amp; technologists from India
              <br>and Belarus
            </td>
            <td t="s" id="sjs-E92" v="Research expenses and support for exchange visits">Research expenses and support for exchange visits</td>
            <td t="s" id="sjs-F92" v="The applicant should be a Leader of a team of scientists in each country and should hold a full-time position at a University or Research Institution">The applicant should be a Leader of a team of scientists in each country and should hold a full-time position at a University or Research Institution</td>
            <td t="n" id="sjs-G92" v="42521">31-May-16</td>
            <td t="s" id="sjs-H92" v="2 years">2 years</td>
            <td t="z" id="sjs-I92"></td>
            <td t="z" id="sjs-J92"></td>
            <td t="z" id="sjs-K92"></td>
            <td t="z" id="sjs-L92"></td>
            <td t="z" id="sjs-M92"></td>
            <td t="z" id="sjs-N92"></td>
            <td t="z" id="sjs-O92"></td>
            <td t="z" id="sjs-P92"></td>
            <td t="z" id="sjs-Q92"></td>
            <td t="z" id="sjs-R92"></td>
            <td t="z" id="sjs-S92"></td>
            <td t="z" id="sjs-T92"></td>
            <td t="z" id="sjs-U92"></td>
            <td t="z" id="sjs-V92"></td>
            <td t="z" id="sjs-W92"></td>
            <td t="z" id="sjs-X92"></td>
            <td t="z" id="sjs-Y92"></td>
            <td t="z" id="sjs-Z92"></td>
            <td t="z" id="sjs-AA92"></td>
            <td t="z" id="sjs-AB92"></td>
            <td t="z" id="sjs-AC92"></td>
            <td t="z" id="sjs-AD92"></td>
            <td t="z" id="sjs-AE92"></td>
            <td t="z" id="sjs-AF92"></td>
            <td t="z" id="sjs-AG92"></td>
            <td t="z" id="sjs-AH92"></td>
            <td t="z" id="sjs-AI92"></td>
            <td t="z" id="sjs-AJ92"></td>
            <td t="z" id="sjs-AK92"></td>
            <td t="z" id="sjs-AL92"></td>
            <td t="z" id="sjs-AM92"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A93" v="Research">Research</td>
            <td t="s" id="sjs-B93" v="DST/RMES (Russia)">DST/RMES (Russia)</td>
            <td t="s" id="sjs-C93" v="Indo-Russia Joint Call for Proposals">Indo-Russia Joint Call for Proposals</td>
            <td t="z" id="sjs-D93"></td>
            <td t="s" id="sjs-E93" v="up to Rs. 6,000,000 from DST and up to Rbls 3,000, 000 from RMES to cover support for consumables and other research expenses, bilateral exchange and institutional overheads">up to Rs. 6,000,000 from DST and up to Rbls 3,000, 000 from RMES to cover support for consumables and other research expenses, bilateral exchange and institutional overheads</td>
            <td t="s" id="sjs-F93" v="PhD, regular employment in host institute, one investigator from India and one from Russia">PhD, regular employment in host institute, one investigator from India and one from Russia</td>
            <td t="s" id="sjs-G93" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H93" v="3 years">3 years</td>
            <td t="s" id="sjs-I93" v="http://www.dst.gov.in/whats_new/whats_new14/cop_rmes2014.pdf">http://www.dst.gov.in/whats_new/whats_new14/cop_rmes2014.pdf</td>
            <td t="z" id="sjs-J93"></td>
            <td t="z" id="sjs-K93"></td>
            <td t="z" id="sjs-L93"></td>
            <td t="z" id="sjs-M93"></td>
            <td t="z" id="sjs-N93"></td>
            <td t="z" id="sjs-O93"></td>
            <td t="z" id="sjs-P93"></td>
            <td t="z" id="sjs-Q93"></td>
            <td t="z" id="sjs-R93"></td>
            <td t="z" id="sjs-S93"></td>
            <td t="z" id="sjs-T93"></td>
            <td t="z" id="sjs-U93"></td>
            <td t="z" id="sjs-V93"></td>
            <td t="z" id="sjs-W93"></td>
            <td t="z" id="sjs-X93"></td>
            <td t="z" id="sjs-Y93"></td>
            <td t="z" id="sjs-Z93"></td>
            <td t="z" id="sjs-AA93"></td>
            <td t="z" id="sjs-AB93"></td>
            <td t="z" id="sjs-AC93"></td>
            <td t="z" id="sjs-AD93"></td>
            <td t="z" id="sjs-AE93"></td>
            <td t="z" id="sjs-AF93"></td>
            <td t="z" id="sjs-AG93"></td>
            <td t="z" id="sjs-AH93"></td>
            <td t="z" id="sjs-AI93"></td>
            <td t="z" id="sjs-AJ93"></td>
            <td t="z" id="sjs-AK93"></td>
            <td t="z" id="sjs-AL93"></td>
            <td t="z" id="sjs-AM93"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A94" v="Research">Research</td>
            <td t="s" id="sjs-B94" v="Human Frontier in Science Program (HFSP)">Human Frontier in Science Program (HFSP)</td>
            <td t="s" id="sjs-C94" v="Young Investigator's grants">Young Investigator's grants</td>
            <td t="s" id="sjs-D94" v="India eligible">India eligible</td>
            <td t="s" id="sjs-E94" v="$450,000 per year per team">$450,000 per year per team</td>
            <td t="s" id="sjs-F94" v="Junior Independent PI, within 5 years of obtaining an independent position">Junior Independent PI, within 5 years of obtaining an independent position</td>
            <td t="s" id="sjs-G94" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H94" v="3 years">3 years</td>
            <td t="s" id="sjs-I94" v="http://www.hfsp.org/funding/research-grants/information-and-guidelines">http://www.hfsp.org/funding/research-grants/information-and-guidelines</td>
            <td t="z" id="sjs-J94"></td>
            <td t="z" id="sjs-K94"></td>
            <td t="z" id="sjs-L94"></td>
            <td t="z" id="sjs-M94"></td>
            <td t="z" id="sjs-N94"></td>
            <td t="z" id="sjs-O94"></td>
            <td t="z" id="sjs-P94"></td>
            <td t="z" id="sjs-Q94"></td>
            <td t="z" id="sjs-R94"></td>
            <td t="z" id="sjs-S94"></td>
            <td t="z" id="sjs-T94"></td>
            <td t="z" id="sjs-U94"></td>
            <td t="z" id="sjs-V94"></td>
            <td t="z" id="sjs-W94"></td>
            <td t="z" id="sjs-X94"></td>
            <td t="z" id="sjs-Y94"></td>
            <td t="z" id="sjs-Z94"></td>
            <td t="z" id="sjs-AA94"></td>
            <td t="z" id="sjs-AB94"></td>
            <td t="z" id="sjs-AC94"></td>
            <td t="z" id="sjs-AD94"></td>
            <td t="z" id="sjs-AE94"></td>
            <td t="z" id="sjs-AF94"></td>
            <td t="z" id="sjs-AG94"></td>
            <td t="z" id="sjs-AH94"></td>
            <td t="z" id="sjs-AI94"></td>
            <td t="z" id="sjs-AJ94"></td>
            <td t="z" id="sjs-AK94"></td>
            <td t="z" id="sjs-AL94"></td>
            <td t="z" id="sjs-AM94"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A95" v="Research">Research</td>
            <td t="s" id="sjs-B95" v="Human Frontier in Science Program (HFSP)">Human Frontier in Science Program (HFSP)</td>
            <td t="s" id="sjs-C95" v="Programme grants">Programme grants</td>
            <td t="s" id="sjs-D95" v="India eligible">India eligible</td>
            <td t="s" id="sjs-E95" v="$450,000 per year per team">$450,000 per year per team</td>
            <td t="s" id="sjs-F95" v="Independent PI">Independent PI</td>
            <td t="s" id="sjs-G95" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H95" v="3 years">3 years</td>
            <td t="s" id="sjs-I95" v="http://www.hfsp.org/funding/research-grants/information-and-guidelines">http://www.hfsp.org/funding/research-grants/information-and-guidelines</td>
            <td t="z" id="sjs-J95"></td>
            <td t="z" id="sjs-K95"></td>
            <td t="z" id="sjs-L95"></td>
            <td t="z" id="sjs-M95"></td>
            <td t="z" id="sjs-N95"></td>
            <td t="z" id="sjs-O95"></td>
            <td t="z" id="sjs-P95"></td>
            <td t="z" id="sjs-Q95"></td>
            <td t="z" id="sjs-R95"></td>
            <td t="z" id="sjs-S95"></td>
            <td t="z" id="sjs-T95"></td>
            <td t="z" id="sjs-U95"></td>
            <td t="z" id="sjs-V95"></td>
            <td t="z" id="sjs-W95"></td>
            <td t="z" id="sjs-X95"></td>
            <td t="z" id="sjs-Y95"></td>
            <td t="z" id="sjs-Z95"></td>
            <td t="z" id="sjs-AA95"></td>
            <td t="z" id="sjs-AB95"></td>
            <td t="z" id="sjs-AC95"></td>
            <td t="z" id="sjs-AD95"></td>
            <td t="z" id="sjs-AE95"></td>
            <td t="z" id="sjs-AF95"></td>
            <td t="z" id="sjs-AG95"></td>
            <td t="z" id="sjs-AH95"></td>
            <td t="z" id="sjs-AI95"></td>
            <td t="z" id="sjs-AJ95"></td>
            <td t="z" id="sjs-AK95"></td>
            <td t="z" id="sjs-AL95"></td>
            <td t="z" id="sjs-AM95"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A96" v="Research">Research</td>
            <td t="s" id="sjs-B96" v="Human Frontiers in Science Program (HFSP)">Human Frontiers in Science Program (HFSP)</td>
            <td t="s" id="sjs-C96" v="Career Development Award">Career Development Award</td>
            <td t="s" id="sjs-D96" v="For former HFSP fellows">For former HFSP fellows</td>
            <td t="s" id="sjs-E96" v="Salary, research costs, posts, kit, collab travel= 1.5 crores">Salary, research costs, posts, kit, collab travel= 1.5 crores</td>
            <td t="s" id="sjs-F96" v="Need to have held one of 2 Feeder Fellowships (between 2004-2009)">Need to have held one of 2 Feeder Fellowships (between 2004-2009)</td>
            <td t="s" id="sjs-G96" v="To be announced (Nov)">To be announced (Nov)</td>
            <td t="s" id="sjs-H96" v="3 years">3 years</td>
            <td t="s" id="sjs-I96" v="http://www.hfsp.org/funding/career-development-awards">http://www.hfsp.org/funding/career-development-awards</td>
            <td t="z" id="sjs-J96"></td>
            <td t="z" id="sjs-K96"></td>
            <td t="z" id="sjs-L96"></td>
            <td t="z" id="sjs-M96"></td>
            <td t="z" id="sjs-N96"></td>
            <td t="z" id="sjs-O96"></td>
            <td t="z" id="sjs-P96"></td>
            <td t="z" id="sjs-Q96"></td>
            <td t="z" id="sjs-R96"></td>
            <td t="z" id="sjs-S96"></td>
            <td t="z" id="sjs-T96"></td>
            <td t="z" id="sjs-U96"></td>
            <td t="z" id="sjs-V96"></td>
            <td t="z" id="sjs-W96"></td>
            <td t="z" id="sjs-X96"></td>
            <td t="z" id="sjs-Y96"></td>
            <td t="z" id="sjs-Z96"></td>
            <td t="z" id="sjs-AA96"></td>
            <td t="z" id="sjs-AB96"></td>
            <td t="z" id="sjs-AC96"></td>
            <td t="z" id="sjs-AD96"></td>
            <td t="z" id="sjs-AE96"></td>
            <td t="z" id="sjs-AF96"></td>
            <td t="z" id="sjs-AG96"></td>
            <td t="z" id="sjs-AH96"></td>
            <td t="z" id="sjs-AI96"></td>
            <td t="z" id="sjs-AJ96"></td>
            <td t="z" id="sjs-AK96"></td>
            <td t="z" id="sjs-AL96"></td>
            <td t="z" id="sjs-AM96"></td>
          </tr>
          <tr>
            <td t="z" id="sjs-A97"></td>
            <td t="z" id="sjs-B97"></td>
            <td t="z" id="sjs-C97"></td>
            <td t="z" id="sjs-D97"></td>
            <td t="z" id="sjs-E97"></td>
            <td t="z" id="sjs-F97"></td>
            <td t="z" id="sjs-G97"></td>
            <td t="z" id="sjs-H97"></td>
            <td t="z" id="sjs-I97"></td>
            <td t="z" id="sjs-J97"></td>
            <td t="z" id="sjs-K97"></td>
            <td t="z" id="sjs-L97"></td>
            <td t="z" id="sjs-M97"></td>
            <td t="z" id="sjs-N97"></td>
            <td t="z" id="sjs-O97"></td>
            <td t="z" id="sjs-P97"></td>
            <td t="z" id="sjs-Q97"></td>
            <td t="z" id="sjs-R97"></td>
            <td t="z" id="sjs-S97"></td>
            <td t="z" id="sjs-T97"></td>
            <td t="z" id="sjs-U97"></td>
            <td t="z" id="sjs-V97"></td>
            <td t="z" id="sjs-W97"></td>
            <td t="z" id="sjs-X97"></td>
            <td t="z" id="sjs-Y97"></td>
            <td t="z" id="sjs-Z97"></td>
            <td t="z" id="sjs-AA97"></td>
            <td t="z" id="sjs-AB97"></td>
            <td t="z" id="sjs-AC97"></td>
            <td t="z" id="sjs-AD97"></td>
            <td t="z" id="sjs-AE97"></td>
            <td t="z" id="sjs-AF97"></td>
            <td t="z" id="sjs-AG97"></td>
            <td t="z" id="sjs-AH97"></td>
            <td t="z" id="sjs-AI97"></td>
            <td t="z" id="sjs-AJ97"></td>
            <td t="z" id="sjs-AK97"></td>
            <td t="z" id="sjs-AL97"></td>
            <td t="z" id="sjs-AM97"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A98" v="Research">Research</td>
            <td t="s" id="sjs-B98" v="India US Science and Technology Forum (IUSSTF)">India US Science and Technology Forum (IUSSTF)</td>
            <td t="s" id="sjs-C98" v="US- India Science and Technology Endowment">US- India Science and Technology Endowment</td>
            <td t="s" id="sjs-D98" v="Program Areas include: Affordable biomedical devices, diagnostic / preventive / curative
measures, or food and nutrition products to improve health. 
Information and communication technologies with societal impact in areas such as water, agriculture, financial inclusion, and education.
">Program Areas include: Affordable biomedical devices, diagnostic / preventive / curative
              <br>measures, or food and nutrition products to improve health.
              <br>Information and communication technologies with societal impact in areas such as water, agriculture, financial inclusion, and education.
              <br>
            </td>
            <td t="s" id="sjs-E98" v="Grants of up to INR 2.50 crores or approximately $400,000 (subject to prevailing exchange
rate).">Grants of up to INR 2.50 crores or approximately $400,000 (subject to prevailing exchange
              <br>rate).
            </td>
            <td t="s" id="sjs-F98" v="entities from academia, national laboratories, non-governmental R&amp;D institutions and start-up companies.">entities from academia, national laboratories, non-governmental R&amp;D institutions and start-up companies.</td>
            <td t="s" id="sjs-G98" v="To be announced">To be announced</td>
            <td t="z" id="sjs-H98"></td>
            <td t="s" id="sjs-I98" v="http://www.usistef.org/">http://www.usistef.org/</td>
            <td t="z" id="sjs-J98"></td>
            <td t="z" id="sjs-K98"></td>
            <td t="z" id="sjs-L98"></td>
            <td t="z" id="sjs-M98"></td>
            <td t="z" id="sjs-N98"></td>
            <td t="z" id="sjs-O98"></td>
            <td t="z" id="sjs-P98"></td>
            <td t="z" id="sjs-Q98"></td>
            <td t="z" id="sjs-R98"></td>
            <td t="z" id="sjs-S98"></td>
            <td t="z" id="sjs-T98"></td>
            <td t="z" id="sjs-U98"></td>
            <td t="z" id="sjs-V98"></td>
            <td t="z" id="sjs-W98"></td>
            <td t="z" id="sjs-X98"></td>
            <td t="z" id="sjs-Y98"></td>
            <td t="z" id="sjs-Z98"></td>
            <td t="z" id="sjs-AA98"></td>
            <td t="z" id="sjs-AB98"></td>
            <td t="z" id="sjs-AC98"></td>
            <td t="z" id="sjs-AD98"></td>
            <td t="z" id="sjs-AE98"></td>
            <td t="z" id="sjs-AF98"></td>
            <td t="z" id="sjs-AG98"></td>
            <td t="z" id="sjs-AH98"></td>
            <td t="z" id="sjs-AI98"></td>
            <td t="z" id="sjs-AJ98"></td>
            <td t="z" id="sjs-AK98"></td>
            <td t="z" id="sjs-AL98"></td>
            <td t="z" id="sjs-AM98"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A99" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B99" v="CEFIPRA">CEFIPRA</td>
            <td t="s" id="sjs-C99" v="Indo-French Collaborative research projects">Indo-French Collaborative research projects</td>
            <td t="s" id="sjs-D99" v="Needs French collaborator">Needs French collaborator</td>
            <td t="s" id="sjs-E99" v="travel, DA for visitng scientist, marginal costs of project including equipment, personnel (only postdocs or PhD students) " xml:space="preserve">travel, DA for visitng scientist, marginal costs of project including equipment, personnel (only postdocs or PhD students) </td>
            <td t="s" id="sjs-F99" v="PhD, permanent appointment in a research institute">PhD, permanent appointment in a research institute</td>
            <td t="s" id="sjs-G99" v="1 April and 1 Oct each year">1 April and 1 Oct each year</td>
            <td t="s" id="sjs-H99" v="3 years">3 years</td>
            <td t="s" id="sjs-I99" v="http://www.cefipra.org/section.aspx?catid=819&amp;langid=1">http://www.cefipra.org/section.aspx?catid=819&amp;langid=1</td>
            <td t="z" id="sjs-J99"></td>
            <td t="z" id="sjs-K99"></td>
            <td t="z" id="sjs-L99"></td>
            <td t="z" id="sjs-M99"></td>
            <td t="z" id="sjs-N99"></td>
            <td t="z" id="sjs-O99"></td>
            <td t="z" id="sjs-P99"></td>
            <td t="z" id="sjs-Q99"></td>
            <td t="z" id="sjs-R99"></td>
            <td t="z" id="sjs-S99"></td>
            <td t="z" id="sjs-T99"></td>
            <td t="z" id="sjs-U99"></td>
            <td t="z" id="sjs-V99"></td>
            <td t="z" id="sjs-W99"></td>
            <td t="z" id="sjs-X99"></td>
            <td t="z" id="sjs-Y99"></td>
            <td t="z" id="sjs-Z99"></td>
            <td t="z" id="sjs-AA99"></td>
            <td t="z" id="sjs-AB99"></td>
            <td t="z" id="sjs-AC99"></td>
            <td t="z" id="sjs-AD99"></td>
            <td t="z" id="sjs-AE99"></td>
            <td t="z" id="sjs-AF99"></td>
            <td t="z" id="sjs-AG99"></td>
            <td t="z" id="sjs-AH99"></td>
            <td t="z" id="sjs-AI99"></td>
            <td t="z" id="sjs-AJ99"></td>
            <td t="z" id="sjs-AK99"></td>
            <td t="z" id="sjs-AL99"></td>
            <td t="z" id="sjs-AM99"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A100" v="Research">Research</td>
            <td t="s" id="sjs-B100" v="National Geographic">National Geographic</td>
            <td t="s" id="sjs-C100" v="Conservation trust">Conservation trust</td>
            <td t="s" id="sjs-D100" v=" funds projects that contribute significantly to the preservation and sustainable use of the Earth's biological, cultural, and historical resources." xml:space="preserve"> funds projects that contribute significantly to the preservation and sustainable use of the Earth's biological, cultural, and historical resources.</td>
            <td t="s" id="sjs-E100" v="U.S. $15,000 to $20,000">U.S. $15,000 to $20,000</td>
            <td t="s" id="sjs-F100" v="No restriction on educational qualification. applicants must provide a record of prior research or conservation action as it pertains to the proposed project.">No restriction on educational qualification. applicants must provide a record of prior research or conservation action as it pertains to the proposed project.</td>
            <td t="s" id="sjs-G100" v="at least 8 months prior to anticipated field dates">at least 8 months prior to anticipated field dates</td>
            <td t="s" id="sjs-H100" v="1 year " xml:space="preserve">1 year </td>
            <td t="s" id="sjs-I100" v="http://www.nationalgeographic.com/explorers/grants-programs/conservation-trust-application/">http://www.nationalgeographic.com/explorers/grants-programs/conservation-trust-application/</td>
            <td t="z" id="sjs-J100"></td>
            <td t="z" id="sjs-K100"></td>
            <td t="z" id="sjs-L100"></td>
            <td t="z" id="sjs-M100"></td>
            <td t="z" id="sjs-N100"></td>
            <td t="z" id="sjs-O100"></td>
            <td t="z" id="sjs-P100"></td>
            <td t="z" id="sjs-Q100"></td>
            <td t="z" id="sjs-R100"></td>
            <td t="z" id="sjs-S100"></td>
            <td t="z" id="sjs-T100"></td>
            <td t="z" id="sjs-U100"></td>
            <td t="z" id="sjs-V100"></td>
            <td t="z" id="sjs-W100"></td>
            <td t="z" id="sjs-X100"></td>
            <td t="z" id="sjs-Y100"></td>
            <td t="z" id="sjs-Z100"></td>
            <td t="z" id="sjs-AA100"></td>
            <td t="z" id="sjs-AB100"></td>
            <td t="z" id="sjs-AC100"></td>
            <td t="z" id="sjs-AD100"></td>
            <td t="z" id="sjs-AE100"></td>
            <td t="z" id="sjs-AF100"></td>
            <td t="z" id="sjs-AG100"></td>
            <td t="z" id="sjs-AH100"></td>
            <td t="z" id="sjs-AI100"></td>
            <td t="z" id="sjs-AJ100"></td>
            <td t="z" id="sjs-AK100"></td>
            <td t="z" id="sjs-AL100"></td>
            <td t="z" id="sjs-AM100"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A101" v="Research">Research</td>
            <td t="s" id="sjs-B101" v="Swiss national Science foundation/ DST">Swiss national Science foundation/ DST</td>
            <td t="s" id="sjs-C101" v="Indo Swiss Joint Research Programme 
JOINT RESEARCH PROJECTS " xml:space="preserve">Indo Swiss Joint Research Programme
              <br>JOINT RESEARCH PROJECTS
            </td>
            <td t="s" id="sjs-D101" v="Needs Swiss collaborator,  fields funded  in this round, Nanotechnology and oncology">Needs Swiss collaborator, fields funded in this round, Nanotechnology and oncology</td>
            <td t="s" id="sjs-E101" v="personnel, consumables, travel and living expenses for the visiting partner. Total Swiss budget CHF 2 million">personnel, consumables, travel and living expenses for the visiting partner. Total Swiss budget CHF 2 million</td>
            <td t="s" id="sjs-F101" v="Regular position in Indian research institute">Regular position in Indian research institute</td>
            <td t="s" id="sjs-G101" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H101" v="36 months">36 months</td>
            <td t="s" id="sjs-I101" v="http://www.dst.gov.in/whats_new/whats_new13/COP_ISJRP_final.pdf">http://www.dst.gov.in/whats_new/whats_new13/COP_ISJRP_final.pdf</td>
            <td t="z" id="sjs-J101"></td>
            <td t="z" id="sjs-K101"></td>
            <td t="z" id="sjs-L101"></td>
            <td t="z" id="sjs-M101"></td>
            <td t="z" id="sjs-N101"></td>
            <td t="z" id="sjs-O101"></td>
            <td t="z" id="sjs-P101"></td>
            <td t="z" id="sjs-Q101"></td>
            <td t="z" id="sjs-R101"></td>
            <td t="z" id="sjs-S101"></td>
            <td t="z" id="sjs-T101"></td>
            <td t="z" id="sjs-U101"></td>
            <td t="z" id="sjs-V101"></td>
            <td t="z" id="sjs-W101"></td>
            <td t="z" id="sjs-X101"></td>
            <td t="z" id="sjs-Y101"></td>
            <td t="z" id="sjs-Z101"></td>
            <td t="z" id="sjs-AA101"></td>
            <td t="z" id="sjs-AB101"></td>
            <td t="z" id="sjs-AC101"></td>
            <td t="z" id="sjs-AD101"></td>
            <td t="z" id="sjs-AE101"></td>
            <td t="z" id="sjs-AF101"></td>
            <td t="z" id="sjs-AG101"></td>
            <td t="z" id="sjs-AH101"></td>
            <td t="z" id="sjs-AI101"></td>
            <td t="z" id="sjs-AJ101"></td>
            <td t="z" id="sjs-AK101"></td>
            <td t="z" id="sjs-AL101"></td>
            <td t="z" id="sjs-AM101"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A102" v="Research">Research</td>
            <td t="s" id="sjs-B102" v="CEFIPRA">CEFIPRA</td>
            <td t="s" id="sjs-C102" v="Industry Academia Research &amp; Development Programme (CEFIPRA)">Industry Academia Research &amp; Development Programme (CEFIPRA)</td>
            <td t="s" id="sjs-D102" v="To promote linkages between Industry and Academia of France and India by involving  at least one industrial partner and one research institute each from India &amp; France (2+2 Model).">To promote linkages between Industry and Academia of France and India by involving at least one industrial partner and one research institute each from India &amp; France (2+2 Model).</td>
            <td t="s" id="sjs-E102" v="Manpower, consumables  &amp; contingency, travel " xml:space="preserve">Manpower, consumables &amp; contingency, travel </td>
            <td t="s" id="sjs-F102" v="Principal collaborators and joint collaborators having permanent positions as scientists/ faculty members in universities/ deemed universities, academic institutes and national R&amp;Dlaboratories">Principal collaborators and joint collaborators having permanent positions as scientists/ faculty members in universities/ deemed universities, academic institutes and national R&amp;Dlaboratories</td>
            <td t="s" id="sjs-G102" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H102" v="3 years">3 years</td>
            <td t="s" id="sjs-I102" v="http://www.cefipra.org/section.aspx?catid=877&amp;langid=1">http://www.cefipra.org/section.aspx?catid=877&amp;langid=1</td>
            <td t="z" id="sjs-J102"></td>
            <td t="z" id="sjs-K102"></td>
            <td t="z" id="sjs-L102"></td>
            <td t="z" id="sjs-M102"></td>
            <td t="z" id="sjs-N102"></td>
            <td t="z" id="sjs-O102"></td>
            <td t="z" id="sjs-P102"></td>
            <td t="z" id="sjs-Q102"></td>
            <td t="z" id="sjs-R102"></td>
            <td t="z" id="sjs-S102"></td>
            <td t="z" id="sjs-T102"></td>
            <td t="z" id="sjs-U102"></td>
            <td t="z" id="sjs-V102"></td>
            <td t="z" id="sjs-W102"></td>
            <td t="z" id="sjs-X102"></td>
            <td t="z" id="sjs-Y102"></td>
            <td t="z" id="sjs-Z102"></td>
            <td t="z" id="sjs-AA102"></td>
            <td t="z" id="sjs-AB102"></td>
            <td t="z" id="sjs-AC102"></td>
            <td t="z" id="sjs-AD102"></td>
            <td t="z" id="sjs-AE102"></td>
            <td t="z" id="sjs-AF102"></td>
            <td t="z" id="sjs-AG102"></td>
            <td t="z" id="sjs-AH102"></td>
            <td t="z" id="sjs-AI102"></td>
            <td t="z" id="sjs-AJ102"></td>
            <td t="z" id="sjs-AK102"></td>
            <td t="z" id="sjs-AL102"></td>
            <td t="z" id="sjs-AM102"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A103" v="Research">Research</td>
            <td t="s" id="sjs-B103" v="India (DBT,DST),  
Belgium (FNRS), Estonia (ETAg),Finland (AKA),Germany (BMBF), Latvia (VIAA)
 " xml:space="preserve">India (DBT,DST),
              <br>Belgium (FNRS), Estonia (ETAg),Finland (AKA),Germany (BMBF), Latvia (VIAA)
              <br>
            </td>
            <td t="s" id="sjs-C103" v="Indo-European Science and Technology Call on Biobased energy (INNO INDIGO Partnership Programme)">Indo-European Science and Technology Call on Biobased energy (INNO INDIGO Partnership Programme)</td>
            <td t="s" id="sjs-D103" v="To support projects undertaken by a partnership of institutions (“consortium”) designed to produce new knowledge in through fundamental, experimental and/or theoretical scientific research in the area of bio-based energy">To support projects undertaken by a partnership of institutions (“consortium”) designed to produce new knowledge in through fundamental, experimental and/or theoretical scientific research in the area of bio-based energy</td>
            <td t="s" id="sjs-E103" v="For projects supported by DBT up to Rs.3 crores/project, for projects supported by DST upto Rs. 1.14 crores /project">For projects supported by DBT up to Rs.3 crores/project, for projects supported by DST upto Rs. 1.14 crores /project</td>
            <td t="s" id="sjs-F103" v="Public and/or private entities are eligible according to their respective national/regional regulations. At least 3 partners of which two partners must be from two different European countries participating in the call, and one from India. Joint R&amp;D  projects designed  to  lead  to  innovative  products,  services  or  processes  of  significant  economic  and/or  societal  value are  eligible  for  funding.">Public and/or private entities are eligible according to their respective national/regional regulations. At least 3 partners of which two partners must be from two different European countries participating in the call, and one from India. Joint R&amp;D projects designed to lead to innovative products, services or processes of significant economic and/or societal value are eligible for funding.</td>
            <td t="s" id="sjs-G103" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H103" v="2-5 years (DBT), 3 years (DST)">2-5 years (DBT), 3 years (DST)</td>
            <td t="s" id="sjs-I103" v="https://indigoprojects.eu/page/74/attach/S_T_Call_Text_IPP3_final.pdf">https://indigoprojects.eu/page/74/attach/S_T_Call_Text_IPP3_final.pdf</td>
            <td t="z" id="sjs-J103"></td>
            <td t="z" id="sjs-K103"></td>
            <td t="z" id="sjs-L103"></td>
            <td t="z" id="sjs-M103"></td>
            <td t="z" id="sjs-N103"></td>
            <td t="z" id="sjs-O103"></td>
            <td t="z" id="sjs-P103"></td>
            <td t="z" id="sjs-Q103"></td>
            <td t="z" id="sjs-R103"></td>
            <td t="z" id="sjs-S103"></td>
            <td t="z" id="sjs-T103"></td>
            <td t="z" id="sjs-U103"></td>
            <td t="z" id="sjs-V103"></td>
            <td t="z" id="sjs-W103"></td>
            <td t="z" id="sjs-X103"></td>
            <td t="z" id="sjs-Y103"></td>
            <td t="z" id="sjs-Z103"></td>
            <td t="z" id="sjs-AA103"></td>
            <td t="z" id="sjs-AB103"></td>
            <td t="z" id="sjs-AC103"></td>
            <td t="z" id="sjs-AD103"></td>
            <td t="z" id="sjs-AE103"></td>
            <td t="z" id="sjs-AF103"></td>
            <td t="z" id="sjs-AG103"></td>
            <td t="z" id="sjs-AH103"></td>
            <td t="z" id="sjs-AI103"></td>
            <td t="z" id="sjs-AJ103"></td>
            <td t="z" id="sjs-AK103"></td>
            <td t="z" id="sjs-AL103"></td>
            <td t="z" id="sjs-AM103"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A104" v="Research">Research</td>
            <td t="s" id="sjs-B104" v="CEFIPRA-BIRAC">CEFIPRA-BIRAC</td>
            <td t="s" id="sjs-C104" v="Red Biotechnology up to pre-commercialization stage " xml:space="preserve">Red Biotechnology up to pre-commercialization stage </td>
            <td t="s" id="sjs-D104" v="To support bilateral, innovative and market-driven projects in the field of molecular diagnostic for prediction of Alzheimer’s and other dementia; Biomaterials and cell engineering for health applications etc">To support bilateral, innovative and market-driven projects in the field of molecular diagnostic for prediction of Alzheimer’s and other dementia; Biomaterials and cell engineering for health applications etc</td>
            <td t="s" id="sjs-E104" v="up to 40 lakhs for Indian Side and € 50000 for French project costs">up to 40 lakhs for Indian Side and € 50000 for French project costs</td>
            <td t="s" id="sjs-F104" v="The proposals must involve at least two French partners (one academia and one industry) and two Indian partners (one academia and one industry)">The proposals must involve at least two French partners (one academia and one industry) and two Indian partners (one academia and one industry)</td>
            <td t="s" id="sjs-G104" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H104" v="2 years">2 years</td>
            <td t="s" id="sjs-I104" v="www.cefipra.org/pdf/Advt_Publication%20BIRAC-SST.pdf">www.cefipra.org/pdf/Advt_Publication%20BIRAC-SST.pdf</td>
            <td t="z" id="sjs-J104"></td>
            <td t="z" id="sjs-K104"></td>
            <td t="z" id="sjs-L104"></td>
            <td t="z" id="sjs-M104"></td>
            <td t="z" id="sjs-N104"></td>
            <td t="z" id="sjs-O104"></td>
            <td t="z" id="sjs-P104"></td>
            <td t="z" id="sjs-Q104"></td>
            <td t="z" id="sjs-R104"></td>
            <td t="z" id="sjs-S104"></td>
            <td t="z" id="sjs-T104"></td>
            <td t="z" id="sjs-U104"></td>
            <td t="z" id="sjs-V104"></td>
            <td t="z" id="sjs-W104"></td>
            <td t="z" id="sjs-X104"></td>
            <td t="z" id="sjs-Y104"></td>
            <td t="z" id="sjs-Z104"></td>
            <td t="z" id="sjs-AA104"></td>
            <td t="z" id="sjs-AB104"></td>
            <td t="z" id="sjs-AC104"></td>
            <td t="z" id="sjs-AD104"></td>
            <td t="z" id="sjs-AE104"></td>
            <td t="z" id="sjs-AF104"></td>
            <td t="z" id="sjs-AG104"></td>
            <td t="z" id="sjs-AH104"></td>
            <td t="z" id="sjs-AI104"></td>
            <td t="z" id="sjs-AJ104"></td>
            <td t="z" id="sjs-AK104"></td>
            <td t="z" id="sjs-AL104"></td>
            <td t="z" id="sjs-AM104"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A105" v="Research">Research</td>
            <td t="s" id="sjs-B105" v="India (DBT, DST), France ((Bpifrance), Germany (GMBH), Norway (RCN), Spain (CDTI)  " xml:space="preserve">India (DBT, DST), France ((Bpifrance), Germany (GMBH), Norway (RCN), Spain (CDTI) </td>
            <td t="s" id="sjs-C105" v="Indo-European Innovation Joint Call for proposals in the field of Bioeconomy (INNO INDIGO Partnership Programme)">Indo-European Innovation Joint Call for proposals in the field of Bioeconomy (INNO INDIGO Partnership Programme)</td>
            <td t="s" id="sjs-D105" v="To create  long-term  collaboration  between  innovation  stakeholders  based  in  India  and  Europe  and  to  pave  the  way for potential joint market exploitation in the field of bioeconomy">To create long-term collaboration between innovation stakeholders based in India and Europe and to pave the way for potential joint market exploitation in the field of bioeconomy</td>
            <td t="s" id="sjs-E105" v="For projects supported by DBT upto Rs. 3 crores/project; for projects supported by DST upto Rs. 1.14 crores/project">For projects supported by DBT upto Rs. 3 crores/project; for projects supported by DST upto Rs. 1.14 crores/project</td>
            <td t="s" id="sjs-F105" v="Public and/or private entities are eligible according to their respective national/regional regulations. At least three partners of which two partners must be from two different European countries participating in the call, and one from India">Public and/or private entities are eligible according to their respective national/regional regulations. At least three partners of which two partners must be from two different European countries participating in the call, and one from India</td>
            <td t="s" id="sjs-G105" v="31st Aug, 2016">31st Aug, 2016</td>
            <td t="s" id="sjs-H105" v="2-5 years (DBT), 3 years (DST)">2-5 years (DBT), 3 years (DST)</td>
            <td t="s" id="sjs-I105" v="https://indigoprojects.eu/funding/indigo-calls/innovation_call_2016">https://indigoprojects.eu/funding/indigo-calls/innovation_call_2016</td>
            <td t="z" id="sjs-J105"></td>
            <td t="z" id="sjs-K105"></td>
            <td t="z" id="sjs-L105"></td>
            <td t="z" id="sjs-M105"></td>
            <td t="z" id="sjs-N105"></td>
            <td t="z" id="sjs-O105"></td>
            <td t="z" id="sjs-P105"></td>
            <td t="z" id="sjs-Q105"></td>
            <td t="z" id="sjs-R105"></td>
            <td t="z" id="sjs-S105"></td>
            <td t="z" id="sjs-T105"></td>
            <td t="z" id="sjs-U105"></td>
            <td t="z" id="sjs-V105"></td>
            <td t="z" id="sjs-W105"></td>
            <td t="z" id="sjs-X105"></td>
            <td t="z" id="sjs-Y105"></td>
            <td t="z" id="sjs-Z105"></td>
            <td t="z" id="sjs-AA105"></td>
            <td t="z" id="sjs-AB105"></td>
            <td t="z" id="sjs-AC105"></td>
            <td t="z" id="sjs-AD105"></td>
            <td t="z" id="sjs-AE105"></td>
            <td t="z" id="sjs-AF105"></td>
            <td t="z" id="sjs-AG105"></td>
            <td t="z" id="sjs-AH105"></td>
            <td t="z" id="sjs-AI105"></td>
            <td t="z" id="sjs-AJ105"></td>
            <td t="z" id="sjs-AK105"></td>
            <td t="z" id="sjs-AL105"></td>
            <td t="z" id="sjs-AM105"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A106" v="International Exchange">International Exchange</td>
            <td t="z" id="sjs-B106"></td>
            <td t="z" id="sjs-C106"></td>
            <td t="z" id="sjs-D106"></td>
            <td t="z" id="sjs-E106"></td>
            <td t="z" id="sjs-F106"></td>
            <td t="z" id="sjs-G106"></td>
            <td t="z" id="sjs-H106"></td>
            <td t="z" id="sjs-I106"></td>
            <td t="z" id="sjs-J106"></td>
            <td t="z" id="sjs-K106"></td>
            <td t="z" id="sjs-L106"></td>
            <td t="z" id="sjs-M106"></td>
            <td t="z" id="sjs-N106"></td>
            <td t="z" id="sjs-O106"></td>
            <td t="z" id="sjs-P106"></td>
            <td t="z" id="sjs-Q106"></td>
            <td t="z" id="sjs-R106"></td>
            <td t="z" id="sjs-S106"></td>
            <td t="z" id="sjs-T106"></td>
            <td t="z" id="sjs-U106"></td>
            <td t="z" id="sjs-V106"></td>
            <td t="z" id="sjs-W106"></td>
            <td t="z" id="sjs-X106"></td>
            <td t="z" id="sjs-Y106"></td>
            <td t="z" id="sjs-Z106"></td>
            <td t="z" id="sjs-AA106"></td>
            <td t="z" id="sjs-AB106"></td>
            <td t="z" id="sjs-AC106"></td>
            <td t="z" id="sjs-AD106"></td>
            <td t="z" id="sjs-AE106"></td>
            <td t="z" id="sjs-AF106"></td>
            <td t="z" id="sjs-AG106"></td>
            <td t="z" id="sjs-AH106"></td>
            <td t="z" id="sjs-AI106"></td>
            <td t="z" id="sjs-AJ106"></td>
            <td t="z" id="sjs-AK106"></td>
            <td t="z" id="sjs-AL106"></td>
            <td t="z" id="sjs-AM106"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A107" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B107" v="IFCPAR/ 
CEFIPRA">IFCPAR/
              <br>CEFIPRA
            </td>
            <td t="s" id="sjs-C107" v="Raman-Charpak Fellowship Program">Raman-Charpak Fellowship Program</td>
            <td t="s" id="sjs-D107" v="To support highly qualified PhD students registered in an Indian or French Research Institute / University to carry out a part of their research project in France / India, to establish professional relationships, to promote new S&amp;T cooperation, and to experience another cultural context">To support highly qualified PhD students registered in an Indian or French Research Institute / University to carry out a part of their research project in France / India, to establish professional relationships, to promote new S&amp;T cooperation, and to experience another cultural context</td>
            <td t="s" id="sjs-E107" v="Euros (for Indian students)/Rs. 40,000 (for French students) per month, accommodation, return airfare, medical insurance, visa fees">Euros (for Indian students)/Rs. 40,000 (for French students) per month, accommodation, return airfare, medical insurance, visa fees</td>
            <td t="s" id="sjs-F107" v="Students registered for PhD in an Indian/French institution">Students registered for PhD in an Indian/French institution</td>
            <td t="s" id="sjs-G107" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H107" v="2-6 months">2-6 months</td>
            <td t="s" id="sjs-I107" v="http://cefipra.org/ramancharpak/Updated_guildlines_For_Raman_Charpak_Fellowship.pdf">http://cefipra.org/ramancharpak/Updated_guildlines_For_Raman_Charpak_Fellowship.pdf</td>
            <td t="z" id="sjs-J107"></td>
            <td t="z" id="sjs-K107"></td>
            <td t="z" id="sjs-L107"></td>
            <td t="z" id="sjs-M107"></td>
            <td t="z" id="sjs-N107"></td>
            <td t="z" id="sjs-O107"></td>
            <td t="z" id="sjs-P107"></td>
            <td t="z" id="sjs-Q107"></td>
            <td t="z" id="sjs-R107"></td>
            <td t="z" id="sjs-S107"></td>
            <td t="z" id="sjs-T107"></td>
            <td t="z" id="sjs-U107"></td>
            <td t="z" id="sjs-V107"></td>
            <td t="z" id="sjs-W107"></td>
            <td t="z" id="sjs-X107"></td>
            <td t="z" id="sjs-Y107"></td>
            <td t="z" id="sjs-Z107"></td>
            <td t="z" id="sjs-AA107"></td>
            <td t="z" id="sjs-AB107"></td>
            <td t="z" id="sjs-AC107"></td>
            <td t="z" id="sjs-AD107"></td>
            <td t="z" id="sjs-AE107"></td>
            <td t="z" id="sjs-AF107"></td>
            <td t="z" id="sjs-AG107"></td>
            <td t="z" id="sjs-AH107"></td>
            <td t="z" id="sjs-AI107"></td>
            <td t="z" id="sjs-AJ107"></td>
            <td t="z" id="sjs-AK107"></td>
            <td t="z" id="sjs-AL107"></td>
            <td t="z" id="sjs-AM107"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A108" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B108" v="USIEF">USIEF</td>
            <td t="s" id="sjs-C108" v="Fullbright-Nehru doctoral research fellowship">Fullbright-Nehru doctoral research fellowship</td>
            <td t="s" id="sjs-D108" v="for scholars who are registered for a Ph.D. at an Indian institution">for scholars who are registered for a Ph.D. at an Indian institution</td>
            <td t="s" id="sjs-E108" v="monthly stipend, Accident and Sickness Program for Exchanges per U.S. Government guidelines, round-trip economy class air travel, applicable allowances and modest affiliation fees, if any. No dependent allowances are provided">monthly stipend, Accident and Sickness Program for Exchanges per U.S. Government guidelines, round-trip economy class air travel, applicable allowances and modest affiliation fees, if any. No dependent allowances are provided</td>
            <td t="s" id="sjs-F108" v="Indian citizen registered for PhD at Indian institution at least for 1 year">Indian citizen registered for PhD at Indian institution at least for 1 year</td>
            <td t="s" id="sjs-G108" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H108" v="6-9 months">6-9 months</td>
            <td t="s" id="sjs-I108" v="http://www.usief.org.in/Fellowships/Fulbright-Nehru-Doctoral-Research-Fellowships.aspx">http://www.usief.org.in/Fellowships/Fulbright-Nehru-Doctoral-Research-Fellowships.aspx</td>
            <td t="z" id="sjs-J108"></td>
            <td t="z" id="sjs-K108"></td>
            <td t="z" id="sjs-L108"></td>
            <td t="z" id="sjs-M108"></td>
            <td t="z" id="sjs-N108"></td>
            <td t="z" id="sjs-O108"></td>
            <td t="z" id="sjs-P108"></td>
            <td t="z" id="sjs-Q108"></td>
            <td t="z" id="sjs-R108"></td>
            <td t="z" id="sjs-S108"></td>
            <td t="z" id="sjs-T108"></td>
            <td t="z" id="sjs-U108"></td>
            <td t="z" id="sjs-V108"></td>
            <td t="z" id="sjs-W108"></td>
            <td t="z" id="sjs-X108"></td>
            <td t="z" id="sjs-Y108"></td>
            <td t="z" id="sjs-Z108"></td>
            <td t="z" id="sjs-AA108"></td>
            <td t="z" id="sjs-AB108"></td>
            <td t="z" id="sjs-AC108"></td>
            <td t="z" id="sjs-AD108"></td>
            <td t="z" id="sjs-AE108"></td>
            <td t="z" id="sjs-AF108"></td>
            <td t="z" id="sjs-AG108"></td>
            <td t="z" id="sjs-AH108"></td>
            <td t="z" id="sjs-AI108"></td>
            <td t="z" id="sjs-AJ108"></td>
            <td t="z" id="sjs-AK108"></td>
            <td t="z" id="sjs-AL108"></td>
            <td t="z" id="sjs-AM108"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A109" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B109" v="IBRO">IBRO</td>
            <td t="s" id="sjs-C109" v="International Research fellowship">International Research fellowship</td>
            <td t="s" id="sjs-D109" v="To provide increased research opportunities for neuroscientists and support the global advancement of neuroscience research">To provide increased research opportunities for neuroscientists and support the global advancement of neuroscience research</td>
            <td t="s" id="sjs-E109" v="35,000 euros">35,000 euros</td>
            <td t="s" id="sjs-F109" v="completed PhD within the past seven years " xml:space="preserve">completed PhD within the past seven years </td>
            <td t="s" id="sjs-G109" v="Mid-June">Mid-June</td>
            <td t="s" id="sjs-H109" v="1 year " xml:space="preserve">1 year </td>
            <td t="s" id="sjs-I109" v="http://ibro.info/professional-development/funding-programmes/research-fellowships/">http://ibro.info/professional-development/funding-programmes/research-fellowships/</td>
            <td t="z" id="sjs-J109"></td>
            <td t="z" id="sjs-K109"></td>
            <td t="z" id="sjs-L109"></td>
            <td t="z" id="sjs-M109"></td>
            <td t="z" id="sjs-N109"></td>
            <td t="z" id="sjs-O109"></td>
            <td t="z" id="sjs-P109"></td>
            <td t="z" id="sjs-Q109"></td>
            <td t="z" id="sjs-R109"></td>
            <td t="z" id="sjs-S109"></td>
            <td t="z" id="sjs-T109"></td>
            <td t="z" id="sjs-U109"></td>
            <td t="z" id="sjs-V109"></td>
            <td t="z" id="sjs-W109"></td>
            <td t="z" id="sjs-X109"></td>
            <td t="z" id="sjs-Y109"></td>
            <td t="z" id="sjs-Z109"></td>
            <td t="z" id="sjs-AA109"></td>
            <td t="z" id="sjs-AB109"></td>
            <td t="z" id="sjs-AC109"></td>
            <td t="z" id="sjs-AD109"></td>
            <td t="z" id="sjs-AE109"></td>
            <td t="z" id="sjs-AF109"></td>
            <td t="z" id="sjs-AG109"></td>
            <td t="z" id="sjs-AH109"></td>
            <td t="z" id="sjs-AI109"></td>
            <td t="z" id="sjs-AJ109"></td>
            <td t="z" id="sjs-AK109"></td>
            <td t="z" id="sjs-AL109"></td>
            <td t="z" id="sjs-AM109"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A110" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B110" v="BMWFW-DST">BMWFW-DST</td>
            <td t="s" id="sjs-C110" v=" Joint  call  for proposals for exchange " xml:space="preserve"> Joint call for proposals for exchange </td>
            <td t="s" id="sjs-D110" v="To support Indo-Austrian scientific collaboration through promotion and support of researchers’ mobility in the framework of bilateral scientific cooperation projects">To support Indo-Austrian scientific collaboration through promotion and support of researchers’ mobility in the framework of bilateral scientific cooperation projects</td>
            <td t="s" id="sjs-E110" v="Travel, accommodation and material cost">Travel, accommodation and material cost</td>
            <td t="s" id="sjs-F110" v="Researchers working at universities, research institutions and companies.">Researchers working at universities, research institutions and companies.</td>
            <td t="s" id="sjs-G110" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H110" v="2 years">2 years</td>
            <td t="s" id="sjs-I110" v="http://www.dst.gov.in/sites/default/files/DST-India%20and%20WTZ-Austria%20Joint%20Call%20for%20Exchange%20visits%20during%202017-2018%20_0.pdf " xml:space="preserve">http://www.dst.gov.in/sites/default/files/DST-India%20and%20WTZ-Austria%20Joint%20Call%20for%20Exchange%20visits%20during%202017-2018%20_0.pdf </td>
            <td t="z" id="sjs-J110"></td>
            <td t="z" id="sjs-K110"></td>
            <td t="z" id="sjs-L110"></td>
            <td t="z" id="sjs-M110"></td>
            <td t="z" id="sjs-N110"></td>
            <td t="z" id="sjs-O110"></td>
            <td t="z" id="sjs-P110"></td>
            <td t="z" id="sjs-Q110"></td>
            <td t="z" id="sjs-R110"></td>
            <td t="z" id="sjs-S110"></td>
            <td t="z" id="sjs-T110"></td>
            <td t="z" id="sjs-U110"></td>
            <td t="z" id="sjs-V110"></td>
            <td t="z" id="sjs-W110"></td>
            <td t="z" id="sjs-X110"></td>
            <td t="z" id="sjs-Y110"></td>
            <td t="z" id="sjs-Z110"></td>
            <td t="z" id="sjs-AA110"></td>
            <td t="z" id="sjs-AB110"></td>
            <td t="z" id="sjs-AC110"></td>
            <td t="z" id="sjs-AD110"></td>
            <td t="z" id="sjs-AE110"></td>
            <td t="z" id="sjs-AF110"></td>
            <td t="z" id="sjs-AG110"></td>
            <td t="z" id="sjs-AH110"></td>
            <td t="z" id="sjs-AI110"></td>
            <td t="z" id="sjs-AJ110"></td>
            <td t="z" id="sjs-AK110"></td>
            <td t="z" id="sjs-AL110"></td>
            <td t="z" id="sjs-AM110"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A111" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B111" v="IUSSTF">IUSSTF</td>
            <td t="s" id="sjs-C111" v="Indo-US R &amp; D Joint Networked Center">Indo-US R &amp; D Joint Networked Center</td>
            <td t="s" id="sjs-D111" v="To enable Indian and American scientists from academia and laboratories (both public and nongovernmental) to carry out joint research">To enable Indian and American scientists from academia and laboratories (both public and nongovernmental) to carry out joint research</td>
            <td t="s" id="sjs-E111" v="Unit exchange international and domestic travel support by economy class and shortest route.  Local hospitality and per diem for visiting scientists (including PhD &amp; post doc scholars) with short stays up to 2 weeks and long stays up to 6 weeks">Unit exchange international and domestic travel support by economy class and shortest route. Local hospitality and per diem for visiting scientists (including PhD &amp; post doc scholars) with short stays up to 2 weeks and long stays up to 6 weeks</td>
            <td t="s" id="sjs-F111" v="Minimum of two Indian and two American separate institutional partners (2+2 partnership mode)">Minimum of two Indian and two American separate institutional partners (2+2 partnership mode)</td>
            <td t="s" id="sjs-G111" v="31st Aug 2016">31st Aug 2016</td>
            <td t="s" id="sjs-H111" v="2 Years">2 Years</td>
            <td t="s" id="sjs-I111" v="http://www.iusstf.org/story/53-19-Indo-US-R--amp-D-Joint-Networked-Center.html">http://www.iusstf.org/story/53-19-Indo-US-R--amp-D-Joint-Networked-Center.html</td>
            <td t="z" id="sjs-J111"></td>
            <td t="z" id="sjs-K111"></td>
            <td t="z" id="sjs-L111"></td>
            <td t="z" id="sjs-M111"></td>
            <td t="z" id="sjs-N111"></td>
            <td t="z" id="sjs-O111"></td>
            <td t="z" id="sjs-P111"></td>
            <td t="z" id="sjs-Q111"></td>
            <td t="z" id="sjs-R111"></td>
            <td t="z" id="sjs-S111"></td>
            <td t="z" id="sjs-T111"></td>
            <td t="z" id="sjs-U111"></td>
            <td t="z" id="sjs-V111"></td>
            <td t="z" id="sjs-W111"></td>
            <td t="z" id="sjs-X111"></td>
            <td t="z" id="sjs-Y111"></td>
            <td t="z" id="sjs-Z111"></td>
            <td t="z" id="sjs-AA111"></td>
            <td t="z" id="sjs-AB111"></td>
            <td t="z" id="sjs-AC111"></td>
            <td t="z" id="sjs-AD111"></td>
            <td t="z" id="sjs-AE111"></td>
            <td t="z" id="sjs-AF111"></td>
            <td t="z" id="sjs-AG111"></td>
            <td t="z" id="sjs-AH111"></td>
            <td t="z" id="sjs-AI111"></td>
            <td t="z" id="sjs-AJ111"></td>
            <td t="z" id="sjs-AK111"></td>
            <td t="z" id="sjs-AL111"></td>
            <td t="z" id="sjs-AM111"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A112" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B112" v="Matsumae International Foundation, Japan">Matsumae International Foundation, Japan</td>
            <td t="s" id="sjs-C112" v="MIF Research Fellowship " xml:space="preserve">MIF Research Fellowship </td>
            <td t="s" id="sjs-D112" v="To allow researchers to undertake short term research projects in an institute of choice in Japan">To allow researchers to undertake short term research projects in an institute of choice in Japan</td>
            <td t="s" id="sjs-E112" v="Stipend, Travel, insurance, relocation and living expenses">Stipend, Travel, insurance, relocation and living expenses</td>
            <td t="s" id="sjs-F112" v="PhD, permanent appointment in a research institute, age less than 49 years">PhD, permanent appointment in a research institute, age less than 49 years</td>
            <td t="s" id="sjs-G112" v="31st Aug,2016">31st Aug,2016</td>
            <td t="s" id="sjs-H112" v="3-6 months">3-6 months</td>
            <td t="s" id="sjs-I112" v="www.mif-japan.org/fellowship/announcement/?hl=en">www.mif-japan.org/fellowship/announcement/?hl=en</td>
            <td t="z" id="sjs-J112"></td>
            <td t="z" id="sjs-K112"></td>
            <td t="z" id="sjs-L112"></td>
            <td t="z" id="sjs-M112"></td>
            <td t="z" id="sjs-N112"></td>
            <td t="z" id="sjs-O112"></td>
            <td t="z" id="sjs-P112"></td>
            <td t="z" id="sjs-Q112"></td>
            <td t="z" id="sjs-R112"></td>
            <td t="z" id="sjs-S112"></td>
            <td t="z" id="sjs-T112"></td>
            <td t="z" id="sjs-U112"></td>
            <td t="z" id="sjs-V112"></td>
            <td t="z" id="sjs-W112"></td>
            <td t="z" id="sjs-X112"></td>
            <td t="z" id="sjs-Y112"></td>
            <td t="z" id="sjs-Z112"></td>
            <td t="z" id="sjs-AA112"></td>
            <td t="z" id="sjs-AB112"></td>
            <td t="z" id="sjs-AC112"></td>
            <td t="z" id="sjs-AD112"></td>
            <td t="z" id="sjs-AE112"></td>
            <td t="z" id="sjs-AF112"></td>
            <td t="z" id="sjs-AG112"></td>
            <td t="z" id="sjs-AH112"></td>
            <td t="z" id="sjs-AI112"></td>
            <td t="z" id="sjs-AJ112"></td>
            <td t="z" id="sjs-AK112"></td>
            <td t="z" id="sjs-AL112"></td>
            <td t="z" id="sjs-AM112"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A113" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B113" v="Cambridge-India">Cambridge-India</td>
            <td t="s" id="sjs-C113" v="Hamied Visiting+G170+C102:K11+C101:I110">Hamied Visiting+G170+C102:K11+C101:I110</td>
            <td t="s" id="sjs-D113" v="To support faculty exchange in order to strengthen existing collaborations between India and Cambridge">To support faculty exchange in order to strengthen existing collaborations between India and Cambridge</td>
            <td t="s" id="sjs-E113" v="Travel, transfers and accommodation">Travel, transfers and accommodation</td>
            <td t="s" id="sjs-F113" v="Researchers at Indian universities with an existing academic relationship with colleagues at the University of Cambridge">Researchers at Indian universities with an existing academic relationship with colleagues at the University of Cambridge</td>
            <td t="z" id="sjs-G113"></td>
            <td t="s" id="sjs-H113" v="1-2 weeks">1-2 weeks</td>
            <td t="s" id="sjs-I113" v="http://www.cambridge-india.org/funding-opportunities/hamied-visiting-fellowship">http://www.cambridge-india.org/funding-opportunities/hamied-visiting-fellowship</td>
            <td t="z" id="sjs-J113"></td>
            <td t="z" id="sjs-K113"></td>
            <td t="z" id="sjs-L113"></td>
            <td t="z" id="sjs-M113"></td>
            <td t="z" id="sjs-N113"></td>
            <td t="z" id="sjs-O113"></td>
            <td t="z" id="sjs-P113"></td>
            <td t="z" id="sjs-Q113"></td>
            <td t="z" id="sjs-R113"></td>
            <td t="z" id="sjs-S113"></td>
            <td t="z" id="sjs-T113"></td>
            <td t="z" id="sjs-U113"></td>
            <td t="z" id="sjs-V113"></td>
            <td t="z" id="sjs-W113"></td>
            <td t="z" id="sjs-X113"></td>
            <td t="z" id="sjs-Y113"></td>
            <td t="z" id="sjs-Z113"></td>
            <td t="z" id="sjs-AA113"></td>
            <td t="z" id="sjs-AB113"></td>
            <td t="z" id="sjs-AC113"></td>
            <td t="z" id="sjs-AD113"></td>
            <td t="z" id="sjs-AE113"></td>
            <td t="z" id="sjs-AF113"></td>
            <td t="z" id="sjs-AG113"></td>
            <td t="z" id="sjs-AH113"></td>
            <td t="z" id="sjs-AI113"></td>
            <td t="z" id="sjs-AJ113"></td>
            <td t="z" id="sjs-AK113"></td>
            <td t="z" id="sjs-AL113"></td>
            <td t="z" id="sjs-AM113"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A114" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B114" v="BBSRC (UK)">BBSRC (UK)</td>
            <td t="s" id="sjs-C114" v="India Partnering Award">India Partnering Award</td>
            <td t="s" id="sjs-D114" v="Promotes scientifc exchange especially of early career scientists between India  and UK  " xml:space="preserve">Promotes scientifc exchange especially of early career scientists between India and UK </td>
            <td t="s" id="sjs-E114" v="£ 30000 for Travel, subsistence and other activities  such as workshops and exchanges  "><span style="font-size:10pt;">£</span><span style="font-size:10pt;"> 30000 for Travel, subsistence and other activities such as workshops and exchanges </span></td>
            <td t="s" id="sjs-F114" v="UK partner needs to be BBSRC funded " xml:space="preserve">UK partner needs to be BBSRC funded </td>
            <td t="s" id="sjs-G114" v="To be announced  (Nov)">To be announced (Nov)</td>
            <td t="s" id="sjs-H114" v="4 years">4 years</td>
            <td t="s" id="sjs-I114" v="http://www.bbsrc.ac.uk/funding/internationalfunding/india.aspx">http://www.bbsrc.ac.uk/funding/internationalfunding/india.aspx</td>
            <td t="z" id="sjs-J114"></td>
            <td t="z" id="sjs-K114"></td>
            <td t="z" id="sjs-L114"></td>
            <td t="z" id="sjs-M114"></td>
            <td t="z" id="sjs-N114"></td>
            <td t="z" id="sjs-O114"></td>
            <td t="z" id="sjs-P114"></td>
            <td t="z" id="sjs-Q114"></td>
            <td t="z" id="sjs-R114"></td>
            <td t="z" id="sjs-S114"></td>
            <td t="z" id="sjs-T114"></td>
            <td t="z" id="sjs-U114"></td>
            <td t="z" id="sjs-V114"></td>
            <td t="z" id="sjs-W114"></td>
            <td t="z" id="sjs-X114"></td>
            <td t="z" id="sjs-Y114"></td>
            <td t="z" id="sjs-Z114"></td>
            <td t="z" id="sjs-AA114"></td>
            <td t="z" id="sjs-AB114"></td>
            <td t="z" id="sjs-AC114"></td>
            <td t="z" id="sjs-AD114"></td>
            <td t="z" id="sjs-AE114"></td>
            <td t="z" id="sjs-AF114"></td>
            <td t="z" id="sjs-AG114"></td>
            <td t="z" id="sjs-AH114"></td>
            <td t="z" id="sjs-AI114"></td>
            <td t="z" id="sjs-AJ114"></td>
            <td t="z" id="sjs-AK114"></td>
            <td t="z" id="sjs-AL114"></td>
            <td t="z" id="sjs-AM114"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A115" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B115" v="DAAD, Germany">DAAD, Germany</td>
            <td t="s" id="sjs-C115" v="Research Stays">Research Stays</td>
            <td t="s" id="sjs-D115" v="To carry out a research project at a state (public) or state recognized higher education institution or non-university research institute in Germany">To carry out a research project at a state (public) or state recognized higher education institution or non-university research institute in Germany</td>
            <td t="s" id="sjs-E115" v="The monthly award of upto 2,000 euros, international return airfare">The monthly award of upto 2,000 euros, international return airfare</td>
            <td t="s" id="sjs-F115" v="University academics and scientists from India on active duty">University academics and scientists from India on active duty</td>
            <td t="n" id="sjs-G115" v="42658">15-Oct-16</td>
            <td t="s" id="sjs-H115" v="1-3 months">1-3 months</td>
            <td t="s" id="sjs-I115" v="http://www.daaddelhi.org/imperia/md/content/newdelhi/fa.pdf">http://www.daaddelhi.org/imperia/md/content/newdelhi/fa.pdf</td>
            <td t="z" id="sjs-J115"></td>
            <td t="z" id="sjs-K115"></td>
            <td t="z" id="sjs-L115"></td>
            <td t="z" id="sjs-M115"></td>
            <td t="z" id="sjs-N115"></td>
            <td t="z" id="sjs-O115"></td>
            <td t="z" id="sjs-P115"></td>
            <td t="z" id="sjs-Q115"></td>
            <td t="z" id="sjs-R115"></td>
            <td t="z" id="sjs-S115"></td>
            <td t="z" id="sjs-T115"></td>
            <td t="z" id="sjs-U115"></td>
            <td t="z" id="sjs-V115"></td>
            <td t="z" id="sjs-W115"></td>
            <td t="z" id="sjs-X115"></td>
            <td t="z" id="sjs-Y115"></td>
            <td t="z" id="sjs-Z115"></td>
            <td t="z" id="sjs-AA115"></td>
            <td t="z" id="sjs-AB115"></td>
            <td t="z" id="sjs-AC115"></td>
            <td t="z" id="sjs-AD115"></td>
            <td t="z" id="sjs-AE115"></td>
            <td t="z" id="sjs-AF115"></td>
            <td t="z" id="sjs-AG115"></td>
            <td t="z" id="sjs-AH115"></td>
            <td t="z" id="sjs-AI115"></td>
            <td t="z" id="sjs-AJ115"></td>
            <td t="z" id="sjs-AK115"></td>
            <td t="z" id="sjs-AL115"></td>
            <td t="z" id="sjs-AM115"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A116" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B116" v="DAAD, Germany">DAAD, Germany</td>
            <td t="s" id="sjs-C116" v="Re- invitation programme for former scholarship holders " xml:space="preserve">Re- invitation programme for former scholarship holders </td>
            <td t="s" id="sjs-D116" v="To carry out a research project at a state (public) or state recognized higher education institution or non-university research institute in Germany">To carry out a research project at a state (public) or state recognized higher education institution or non-university research institute in Germany</td>
            <td t="s" id="sjs-E116" v="The monthly award of upto 2,000 euros, international return airfare">The monthly award of upto 2,000 euros, international return airfare</td>
            <td t="s" id="sjs-F116" v="Former DAAD one-year scholarship holders and former scholarship holders who had studied in East Germany (GDR) for at least one year">Former DAAD one-year scholarship holders and former scholarship holders who had studied in East Germany (GDR) for at least one year</td>
            <td t="s" id="sjs-G116" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H116" v="1-3 months">1-3 months</td>
            <td t="s" id="sjs-I116" v="http://newdelhi.daad.de/mainFrame/home/reinvitation.pdf">http://newdelhi.daad.de/mainFrame/home/reinvitation.pdf</td>
            <td t="z" id="sjs-J116"></td>
            <td t="z" id="sjs-K116"></td>
            <td t="z" id="sjs-L116"></td>
            <td t="z" id="sjs-M116"></td>
            <td t="z" id="sjs-N116"></td>
            <td t="z" id="sjs-O116"></td>
            <td t="z" id="sjs-P116"></td>
            <td t="z" id="sjs-Q116"></td>
            <td t="z" id="sjs-R116"></td>
            <td t="z" id="sjs-S116"></td>
            <td t="z" id="sjs-T116"></td>
            <td t="z" id="sjs-U116"></td>
            <td t="z" id="sjs-V116"></td>
            <td t="z" id="sjs-W116"></td>
            <td t="z" id="sjs-X116"></td>
            <td t="z" id="sjs-Y116"></td>
            <td t="z" id="sjs-Z116"></td>
            <td t="z" id="sjs-AA116"></td>
            <td t="z" id="sjs-AB116"></td>
            <td t="z" id="sjs-AC116"></td>
            <td t="z" id="sjs-AD116"></td>
            <td t="z" id="sjs-AE116"></td>
            <td t="z" id="sjs-AF116"></td>
            <td t="z" id="sjs-AG116"></td>
            <td t="z" id="sjs-AH116"></td>
            <td t="z" id="sjs-AI116"></td>
            <td t="z" id="sjs-AJ116"></td>
            <td t="z" id="sjs-AK116"></td>
            <td t="z" id="sjs-AL116"></td>
            <td t="z" id="sjs-AM116"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A117" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B117" v="DBT/BMBF">DBT/BMBF</td>
            <td t="s" id="sjs-C117" v="Indo-German Joint Call for Proposals in the area of Biotechnology – " xml:space="preserve">Indo-German Joint Call for Proposals in the area of Biotechnology – </td>
            <td t="s" id="sjs-D117" v="Support for Joint research projects, Bilateral workshops/seminar, Exchange visits of scientist. Areas of cooperation include Biodiversity, Treatment of Sewage Water, Neuroimaging, Diagnostics 
">Support for Joint research projects, Bilateral workshops/seminar, Exchange visits of scientist. Areas of cooperation include Biodiversity, Treatment of Sewage Water, Neuroimaging, Diagnostics
              <br>
            </td>
            <td t="s" id="sjs-E117" v="Travel, overseas insurance, living expenses. Reasonable support for equipment, manpower, consumables, etc. is available by DBT for Indian PI´s from public institutions">Travel, overseas insurance, living expenses. Reasonable support for equipment, manpower, consumables, etc. is available by DBT for Indian PI´s from public institutions</td>
            <td t="s" id="sjs-F117" v="Scientists/faculty members working in regular capacity in Universities, national R&amp;D Laboratories/ Institutes and private R&amp;D institutes can apply under this programme. Partners from all kind of private sectors are eligible, but financing is limited.">Scientists/faculty members working in regular capacity in Universities, national R&amp;D Laboratories/ Institutes and private R&amp;D institutes can apply under this programme. Partners from all kind of private sectors are eligible, but financing is limited.</td>
            <td t="s" id="sjs-G117" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H117" v="2 years">2 years</td>
            <td t="s" id="sjs-I117" v="http://dbtindia.nic.in/news_management/PressreleaseDetails.asp?PressId=316&amp;button=Edit">http://dbtindia.nic.in/news_management/PressreleaseDetails.asp?PressId=316&amp;button=Edit</td>
            <td t="z" id="sjs-J117"></td>
            <td t="z" id="sjs-K117"></td>
            <td t="z" id="sjs-L117"></td>
            <td t="z" id="sjs-M117"></td>
            <td t="z" id="sjs-N117"></td>
            <td t="z" id="sjs-O117"></td>
            <td t="z" id="sjs-P117"></td>
            <td t="z" id="sjs-Q117"></td>
            <td t="z" id="sjs-R117"></td>
            <td t="z" id="sjs-S117"></td>
            <td t="z" id="sjs-T117"></td>
            <td t="z" id="sjs-U117"></td>
            <td t="z" id="sjs-V117"></td>
            <td t="z" id="sjs-W117"></td>
            <td t="z" id="sjs-X117"></td>
            <td t="z" id="sjs-Y117"></td>
            <td t="z" id="sjs-Z117"></td>
            <td t="z" id="sjs-AA117"></td>
            <td t="z" id="sjs-AB117"></td>
            <td t="z" id="sjs-AC117"></td>
            <td t="z" id="sjs-AD117"></td>
            <td t="z" id="sjs-AE117"></td>
            <td t="z" id="sjs-AF117"></td>
            <td t="z" id="sjs-AG117"></td>
            <td t="z" id="sjs-AH117"></td>
            <td t="z" id="sjs-AI117"></td>
            <td t="z" id="sjs-AJ117"></td>
            <td t="z" id="sjs-AK117"></td>
            <td t="z" id="sjs-AL117"></td>
            <td t="z" id="sjs-AM117"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A118" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B118" v="DBT/ MCTI (Brazil)">DBT/ MCTI (Brazil)</td>
            <td t="s" id="sjs-C118" v="Indo-Brazil-Joint call for proposals in the field of Biotechnology">Indo-Brazil-Joint call for proposals in the field of Biotechnology</td>
            <td t="s" id="sjs-D118" v="Priority areas, Biomedicine and health, biotech products such as vaccines, kits etc, and Agriculture especially Sugarcane &amp; Citrus and including bioenergy To broaden and deepen cooperation in science &amp; technology in the field of biotechnology and encourage industrial R&amp;D and related investment in the field of agriculture biotechnology, bio-fuels, infectious diseases and biopharmaceuticals">Priority areas, Biomedicine and health, biotech products such as vaccines, kits etc, and Agriculture especially Sugarcane &amp; Citrus and including bioenergy To broaden and deepen cooperation in science &amp; technology in the field of biotechnology and encourage industrial R&amp;D and related investment in the field of agriculture biotechnology, bio-fuels, infectious diseases and biopharmaceuticals</td>
            <td t="s" id="sjs-E118" v="Staff exchange visits, PhD/postdocs may spend upto 12 months in Brazil with stipend">Staff exchange visits, PhD/postdocs may spend upto 12 months in Brazil with stipend</td>
            <td t="s" id="sjs-F118" v="Needs Brazilian collaborator, regular position in research institute">Needs Brazilian collaborator, regular position in research institute</td>
            <td t="s" id="sjs-G118" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H118" v="3 years">3 years</td>
            <td t="s" id="sjs-I118" v="http://dbtindia.nic.in/docs/IndoBrazil_JCP2013-16.pdf">http://dbtindia.nic.in/docs/IndoBrazil_JCP2013-16.pdf</td>
            <td t="z" id="sjs-J118"></td>
            <td t="z" id="sjs-K118"></td>
            <td t="z" id="sjs-L118"></td>
            <td t="z" id="sjs-M118"></td>
            <td t="z" id="sjs-N118"></td>
            <td t="z" id="sjs-O118"></td>
            <td t="z" id="sjs-P118"></td>
            <td t="z" id="sjs-Q118"></td>
            <td t="z" id="sjs-R118"></td>
            <td t="z" id="sjs-S118"></td>
            <td t="z" id="sjs-T118"></td>
            <td t="z" id="sjs-U118"></td>
            <td t="z" id="sjs-V118"></td>
            <td t="z" id="sjs-W118"></td>
            <td t="z" id="sjs-X118"></td>
            <td t="z" id="sjs-Y118"></td>
            <td t="z" id="sjs-Z118"></td>
            <td t="z" id="sjs-AA118"></td>
            <td t="z" id="sjs-AB118"></td>
            <td t="z" id="sjs-AC118"></td>
            <td t="z" id="sjs-AD118"></td>
            <td t="z" id="sjs-AE118"></td>
            <td t="z" id="sjs-AF118"></td>
            <td t="z" id="sjs-AG118"></td>
            <td t="z" id="sjs-AH118"></td>
            <td t="z" id="sjs-AI118"></td>
            <td t="z" id="sjs-AJ118"></td>
            <td t="z" id="sjs-AK118"></td>
            <td t="z" id="sjs-AL118"></td>
            <td t="z" id="sjs-AM118"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A119" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B119" v="DBT/MHESR, Tunisia">DBT/MHESR, Tunisia</td>
            <td t="s" id="sjs-C119" v="Indo-Tunisian -Joint call for proposals in the field of Biotechnology">Indo-Tunisian -Joint call for proposals in the field of Biotechnology</td>
            <td t="s" id="sjs-D119" v="Medical, Animal and Agricultural biotechnology, Bioactive molecules of plant/animal origin, Environment and Forests">Medical, Animal and Agricultural biotechnology, Bioactive molecules of plant/animal origin, Environment and Forests</td>
            <td t="s" id="sjs-E119" v="Limited project staff, Staff exchange visits, workshop costs">Limited project staff, Staff exchange visits, workshop costs</td>
            <td t="s" id="sjs-F119" v="One investigator from India and Tunisia with good publication record and a regular position in an academic institute">One investigator from India and Tunisia with good publication record and a regular position in an academic institute</td>
            <td t="s" id="sjs-G119" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H119" v="3 years">3 years</td>
            <td t="s" id="sjs-I119" v="http://dbtindia.nic.in/docs/IndoTunisiaJCP201316.pdf">http://dbtindia.nic.in/docs/IndoTunisiaJCP201316.pdf</td>
            <td t="z" id="sjs-J119"></td>
            <td t="z" id="sjs-K119"></td>
            <td t="z" id="sjs-L119"></td>
            <td t="z" id="sjs-M119"></td>
            <td t="z" id="sjs-N119"></td>
            <td t="z" id="sjs-O119"></td>
            <td t="z" id="sjs-P119"></td>
            <td t="z" id="sjs-Q119"></td>
            <td t="z" id="sjs-R119"></td>
            <td t="z" id="sjs-S119"></td>
            <td t="z" id="sjs-T119"></td>
            <td t="z" id="sjs-U119"></td>
            <td t="z" id="sjs-V119"></td>
            <td t="z" id="sjs-W119"></td>
            <td t="z" id="sjs-X119"></td>
            <td t="z" id="sjs-Y119"></td>
            <td t="z" id="sjs-Z119"></td>
            <td t="z" id="sjs-AA119"></td>
            <td t="z" id="sjs-AB119"></td>
            <td t="z" id="sjs-AC119"></td>
            <td t="z" id="sjs-AD119"></td>
            <td t="z" id="sjs-AE119"></td>
            <td t="z" id="sjs-AF119"></td>
            <td t="z" id="sjs-AG119"></td>
            <td t="z" id="sjs-AH119"></td>
            <td t="z" id="sjs-AI119"></td>
            <td t="z" id="sjs-AJ119"></td>
            <td t="z" id="sjs-AK119"></td>
            <td t="z" id="sjs-AL119"></td>
            <td t="z" id="sjs-AM119"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A120" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B120" v="DBT/State of Queensland, Australia">DBT/State of Queensland, Australia</td>
            <td t="s" id="sjs-C120" v="INDO-QUEENSLAND
EARLY CAREER 
FELLOWSHIPS 
2012">INDO-QUEENSLAND
              <br>EARLY CAREER
              <br>FELLOWSHIPS
              <br>2012
            </td>
            <td t="s" id="sjs-D120" v="Priority areas are Agriculture or medical biotechnology, although other potential areas for collaboration with  Queensland may also be considered">Priority areas are Agriculture or medical biotechnology, although other potential areas for collaboration with Queensland may also be considered</td>
            <td t="s" id="sjs-E120" v="USD 24000 per month, Rs 120000 preparatory allowance and return airfare by national carrier">USD 24000 per month, Rs 120000 preparatory allowance and return airfare by national carrier</td>
            <td t="s" id="sjs-F120" v="0-5 years post PhD with a regular position in India or Queensland, Australia">0-5 years post PhD with a regular position in India or Queensland, Australia</td>
            <td t="s" id="sjs-G120" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H120" v="3-9 months">3-9 months</td>
            <td t="s" id="sjs-I120" v="http://dbtindia.nic.in/docs/EarlyCareerfellowships2012(Indian)Guidelines.doc">http://dbtindia.nic.in/docs/EarlyCareerfellowships2012(Indian)Guidelines.doc</td>
            <td t="z" id="sjs-J120"></td>
            <td t="z" id="sjs-K120"></td>
            <td t="z" id="sjs-L120"></td>
            <td t="z" id="sjs-M120"></td>
            <td t="z" id="sjs-N120"></td>
            <td t="z" id="sjs-O120"></td>
            <td t="z" id="sjs-P120"></td>
            <td t="z" id="sjs-Q120"></td>
            <td t="z" id="sjs-R120"></td>
            <td t="z" id="sjs-S120"></td>
            <td t="z" id="sjs-T120"></td>
            <td t="z" id="sjs-U120"></td>
            <td t="z" id="sjs-V120"></td>
            <td t="z" id="sjs-W120"></td>
            <td t="z" id="sjs-X120"></td>
            <td t="z" id="sjs-Y120"></td>
            <td t="z" id="sjs-Z120"></td>
            <td t="z" id="sjs-AA120"></td>
            <td t="z" id="sjs-AB120"></td>
            <td t="z" id="sjs-AC120"></td>
            <td t="z" id="sjs-AD120"></td>
            <td t="z" id="sjs-AE120"></td>
            <td t="z" id="sjs-AF120"></td>
            <td t="z" id="sjs-AG120"></td>
            <td t="z" id="sjs-AH120"></td>
            <td t="z" id="sjs-AI120"></td>
            <td t="z" id="sjs-AJ120"></td>
            <td t="z" id="sjs-AK120"></td>
            <td t="z" id="sjs-AL120"></td>
            <td t="z" id="sjs-AM120"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A121" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B121" v="DST/ASSR (Slovenia)">DST/ASSR (Slovenia)</td>
            <td t="s" id="sjs-C121" v="India-Slovenia Joint call for proposals">India-Slovenia Joint call for proposals</td>
            <td t="s" id="sjs-D121" v="Priority areas funded include but are not limited to Health and biotechnology, including food research, New materials, including polymers;Biosensors, instrumentation and control of processes; Chemistry and biology of proteins">Priority areas funded include but are not limited to Health and biotechnology, including food research, New materials, including polymers;Biosensors, instrumentation and control of processes; Chemistry and biology of proteins</td>
            <td t="s" id="sjs-E121" v="International return airfare, acoomodation and per-diem">International return airfare, acoomodation and per-diem</td>
            <td t="s" id="sjs-F121" v="Programme is open to scientists, engineers, institutions engaged in advanced research in areas referred in the call in India and Slovenia">Programme is open to scientists, engineers, institutions engaged in advanced research in areas referred in the call in India and Slovenia</td>
            <td t="s" id="sjs-G121" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H121" v="3 years">3 years</td>
            <td t="s" id="sjs-I121" v="http://www.dst.gov.in/whats_new/whats_new14/India-Slovenia%20Joint%20Call%20-%202014.pdf">http://www.dst.gov.in/whats_new/whats_new14/India-Slovenia%20Joint%20Call%20-%202014.pdf</td>
            <td t="z" id="sjs-J121"></td>
            <td t="z" id="sjs-K121"></td>
            <td t="z" id="sjs-L121"></td>
            <td t="z" id="sjs-M121"></td>
            <td t="z" id="sjs-N121"></td>
            <td t="z" id="sjs-O121"></td>
            <td t="z" id="sjs-P121"></td>
            <td t="z" id="sjs-Q121"></td>
            <td t="z" id="sjs-R121"></td>
            <td t="z" id="sjs-S121"></td>
            <td t="z" id="sjs-T121"></td>
            <td t="z" id="sjs-U121"></td>
            <td t="z" id="sjs-V121"></td>
            <td t="z" id="sjs-W121"></td>
            <td t="z" id="sjs-X121"></td>
            <td t="z" id="sjs-Y121"></td>
            <td t="z" id="sjs-Z121"></td>
            <td t="z" id="sjs-AA121"></td>
            <td t="z" id="sjs-AB121"></td>
            <td t="z" id="sjs-AC121"></td>
            <td t="z" id="sjs-AD121"></td>
            <td t="z" id="sjs-AE121"></td>
            <td t="z" id="sjs-AF121"></td>
            <td t="z" id="sjs-AG121"></td>
            <td t="z" id="sjs-AH121"></td>
            <td t="z" id="sjs-AI121"></td>
            <td t="z" id="sjs-AJ121"></td>
            <td t="z" id="sjs-AK121"></td>
            <td t="z" id="sjs-AL121"></td>
            <td t="z" id="sjs-AM121"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A122" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B122" v="DST/Unit for Scientific and Technological Cooperation of the Italian Ministry of Foreign Affairs  " xml:space="preserve">DST/Unit for Scientific and Technological Cooperation of the Italian Ministry of Foreign Affairs </td>
            <td t="s" id="sjs-C122" v="Executive Programme of Scientific and Technological Cooperation">Executive Programme of Scientific and Technological Cooperation</td>
            <td t="s" id="sjs-D122" v="Priority areas include biotechnology and medicine, nanotechnology and environment">Priority areas include biotechnology and medicine, nanotechnology and environment</td>
            <td t="s" id="sjs-E122" v="collaborative travel for 10 days-1 month month/yr and sustenance">collaborative travel for 10 days-1 month month/yr and sustenance</td>
            <td t="s" id="sjs-F122" v="PhD with regular position in research inst/univ.">PhD with regular position in research inst/univ.</td>
            <td t="s" id="sjs-G122" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H122" v="3 years">3 years</td>
            <td t="s" id="sjs-I122" v="http://www.dst.gov.in/whats_new/whats_new11/cop-indio-italian_2012-14.pdf">http://www.dst.gov.in/whats_new/whats_new11/cop-indio-italian_2012-14.pdf</td>
            <td t="z" id="sjs-J122"></td>
            <td t="z" id="sjs-K122"></td>
            <td t="z" id="sjs-L122"></td>
            <td t="z" id="sjs-M122"></td>
            <td t="z" id="sjs-N122"></td>
            <td t="z" id="sjs-O122"></td>
            <td t="z" id="sjs-P122"></td>
            <td t="z" id="sjs-Q122"></td>
            <td t="z" id="sjs-R122"></td>
            <td t="z" id="sjs-S122"></td>
            <td t="z" id="sjs-T122"></td>
            <td t="z" id="sjs-U122"></td>
            <td t="z" id="sjs-V122"></td>
            <td t="z" id="sjs-W122"></td>
            <td t="z" id="sjs-X122"></td>
            <td t="z" id="sjs-Y122"></td>
            <td t="z" id="sjs-Z122"></td>
            <td t="z" id="sjs-AA122"></td>
            <td t="z" id="sjs-AB122"></td>
            <td t="z" id="sjs-AC122"></td>
            <td t="z" id="sjs-AD122"></td>
            <td t="z" id="sjs-AE122"></td>
            <td t="z" id="sjs-AF122"></td>
            <td t="z" id="sjs-AG122"></td>
            <td t="z" id="sjs-AH122"></td>
            <td t="z" id="sjs-AI122"></td>
            <td t="z" id="sjs-AJ122"></td>
            <td t="z" id="sjs-AK122"></td>
            <td t="z" id="sjs-AL122"></td>
            <td t="z" id="sjs-AM122"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A123" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B123" v="DST/CNPq of MCTI (Brazil) " xml:space="preserve">DST/CNPq of MCTI (Brazil) </td>
            <td t="s" id="sjs-C123" v="Indo-Brazil Joint call for proposals">Indo-Brazil Joint call for proposals</td>
            <td t="s" id="sjs-D123" v="Priority areas include Computer science, Earth system, Health and Biomedical Sciences, Mathematics " xml:space="preserve">Priority areas include Computer science, Earth system, Health and Biomedical Sciences, Mathematics </td>
            <td t="s" id="sjs-E123" v="Costs involved in scientific exchange of personnel">Costs involved in scientific exchange of personnel</td>
            <td t="s" id="sjs-F123" v="Scientists/faculty members working in regular capacity in Government recognized Universities/ Deemed Universities, Academic Institutes and National Research &amp; Development Laboratories/ Institutes">Scientists/faculty members working in regular capacity in Government recognized Universities/ Deemed Universities, Academic Institutes and National Research &amp; Development Laboratories/ Institutes</td>
            <td t="s" id="sjs-G123" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H123" v="3 years">3 years</td>
            <td t="s" id="sjs-I123" v="http://www.dst.gov.in/whats_new/whats_new13/cop_India-Brazil-2013.pdf">http://www.dst.gov.in/whats_new/whats_new13/cop_India-Brazil-2013.pdf</td>
            <td t="z" id="sjs-J123"></td>
            <td t="z" id="sjs-K123"></td>
            <td t="z" id="sjs-L123"></td>
            <td t="z" id="sjs-M123"></td>
            <td t="z" id="sjs-N123"></td>
            <td t="z" id="sjs-O123"></td>
            <td t="z" id="sjs-P123"></td>
            <td t="z" id="sjs-Q123"></td>
            <td t="z" id="sjs-R123"></td>
            <td t="z" id="sjs-S123"></td>
            <td t="z" id="sjs-T123"></td>
            <td t="z" id="sjs-U123"></td>
            <td t="z" id="sjs-V123"></td>
            <td t="z" id="sjs-W123"></td>
            <td t="z" id="sjs-X123"></td>
            <td t="z" id="sjs-Y123"></td>
            <td t="z" id="sjs-Z123"></td>
            <td t="z" id="sjs-AA123"></td>
            <td t="z" id="sjs-AB123"></td>
            <td t="z" id="sjs-AC123"></td>
            <td t="z" id="sjs-AD123"></td>
            <td t="z" id="sjs-AE123"></td>
            <td t="z" id="sjs-AF123"></td>
            <td t="z" id="sjs-AG123"></td>
            <td t="z" id="sjs-AH123"></td>
            <td t="z" id="sjs-AI123"></td>
            <td t="z" id="sjs-AJ123"></td>
            <td t="z" id="sjs-AK123"></td>
            <td t="z" id="sjs-AL123"></td>
            <td t="z" id="sjs-AM123"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A124" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B124" v="DST/CNPq (Brazil)/NRF (South Africa)">DST/CNPq (Brazil)/NRF (South Africa)</td>
            <td t="s" id="sjs-C124" v="INDIA/BRAZIL/SOUTH AFRICA
(IBSA)
Cooperation in Science and Technology">INDIA/BRAZIL/SOUTH AFRICA
              <br>(IBSA)
              <br>Cooperation in Science and Technology
            </td>
            <td t="s" id="sjs-D124" v="Priority areas include HIV and AIDS, Malaria, Tuberculosis, Biotechnology (in defined areas), Indigenous Knowledge systems, Information and communication technology">Priority areas include HIV and AIDS, Malaria, Tuberculosis, Biotechnology (in defined areas), Indigenous Knowledge systems, Information and communication technology</td>
            <td t="s" id="sjs-E124" v="Exploratory visits, research expenses and organisation of joint seminars/workshops">Exploratory visits, research expenses and organisation of joint seminars/workshops</td>
            <td t="s" id="sjs-F124" v="Scientists in regular employment. Involvement of only single PI from India, Brazil and South Africa " xml:space="preserve">Scientists in regular employment. Involvement of only single PI from India, Brazil and South Africa </td>
            <td t="s" id="sjs-G124" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="s" id="sjs-H124" v="3 years">3 years</td>
            <td t="s" id="sjs-I124" v="http://www.dst.gov.in/whats_new/whats_new13/COP_IBSA.pdf">http://www.dst.gov.in/whats_new/whats_new13/COP_IBSA.pdf</td>
            <td t="z" id="sjs-J124"></td>
            <td t="z" id="sjs-K124"></td>
            <td t="z" id="sjs-L124"></td>
            <td t="z" id="sjs-M124"></td>
            <td t="z" id="sjs-N124"></td>
            <td t="z" id="sjs-O124"></td>
            <td t="z" id="sjs-P124"></td>
            <td t="z" id="sjs-Q124"></td>
            <td t="z" id="sjs-R124"></td>
            <td t="z" id="sjs-S124"></td>
            <td t="z" id="sjs-T124"></td>
            <td t="z" id="sjs-U124"></td>
            <td t="z" id="sjs-V124"></td>
            <td t="z" id="sjs-W124"></td>
            <td t="z" id="sjs-X124"></td>
            <td t="z" id="sjs-Y124"></td>
            <td t="z" id="sjs-Z124"></td>
            <td t="z" id="sjs-AA124"></td>
            <td t="z" id="sjs-AB124"></td>
            <td t="z" id="sjs-AC124"></td>
            <td t="z" id="sjs-AD124"></td>
            <td t="z" id="sjs-AE124"></td>
            <td t="z" id="sjs-AF124"></td>
            <td t="z" id="sjs-AG124"></td>
            <td t="z" id="sjs-AH124"></td>
            <td t="z" id="sjs-AI124"></td>
            <td t="z" id="sjs-AJ124"></td>
            <td t="z" id="sjs-AK124"></td>
            <td t="z" id="sjs-AL124"></td>
            <td t="z" id="sjs-AM124"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A125" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B125" v="DST/ DAAD (Germany)">DST/ DAAD (Germany)</td>
            <td t="s" id="sjs-C125" v="DST-DAAD Project based personnel exchange programme">DST-DAAD Project based personnel exchange programme</td>
            <td t="z" id="sjs-D125"></td>
            <td t="s" id="sjs-E125" v="collaborative travel for upto 4 visits on either side">collaborative travel for upto 4 visits on either side</td>
            <td t="s" id="sjs-F125" v="Needs German collaborator">Needs German collaborator</td>
            <td t="s" id="sjs-G125" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="s" id="sjs-H125" v="2 years">2 years</td>
            <td t="s" id="sjs-I125" v="http://www.daaddelhi.org/imperia/md/content/newdelhi/ind_dst-daad_ppp_2016-17_announce.pdf">http://www.daaddelhi.org/imperia/md/content/newdelhi/ind_dst-daad_ppp_2016-17_announce.pdf</td>
            <td t="z" id="sjs-J125"></td>
            <td t="z" id="sjs-K125"></td>
            <td t="z" id="sjs-L125"></td>
            <td t="z" id="sjs-M125"></td>
            <td t="z" id="sjs-N125"></td>
            <td t="z" id="sjs-O125"></td>
            <td t="z" id="sjs-P125"></td>
            <td t="z" id="sjs-Q125"></td>
            <td t="z" id="sjs-R125"></td>
            <td t="z" id="sjs-S125"></td>
            <td t="z" id="sjs-T125"></td>
            <td t="z" id="sjs-U125"></td>
            <td t="z" id="sjs-V125"></td>
            <td t="z" id="sjs-W125"></td>
            <td t="z" id="sjs-X125"></td>
            <td t="z" id="sjs-Y125"></td>
            <td t="z" id="sjs-Z125"></td>
            <td t="z" id="sjs-AA125"></td>
            <td t="z" id="sjs-AB125"></td>
            <td t="z" id="sjs-AC125"></td>
            <td t="z" id="sjs-AD125"></td>
            <td t="z" id="sjs-AE125"></td>
            <td t="z" id="sjs-AF125"></td>
            <td t="z" id="sjs-AG125"></td>
            <td t="z" id="sjs-AH125"></td>
            <td t="z" id="sjs-AI125"></td>
            <td t="z" id="sjs-AJ125"></td>
            <td t="z" id="sjs-AK125"></td>
            <td t="z" id="sjs-AL125"></td>
            <td t="z" id="sjs-AM125"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A126" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B126" v="DST/ FWF (austria)">DST/ FWF (austria)</td>
            <td t="s" id="sjs-C126" v="DST-FWF Joint Research Projects">DST-FWF Joint Research Projects</td>
            <td t="s" id="sjs-D126" v="open to all scientific disciplines of natural sciences, agricultural and veterinary sciences, engineering, earth sciences, mathematics, theoretical computer science, informatics, medicine, life and health sciences and material sciences">open to all scientific disciplines of natural sciences, agricultural and veterinary sciences, engineering, earth sciences, mathematics, theoretical computer science, informatics, medicine, life and health sciences and material sciences</td>
            <td t="s" id="sjs-E126" v="manpower (max up to 2 JRF/SRF/RA etc); chemicals/ consumables (max up to Rs. 5.0 Lakh per year) minor equipment/ accessories (max of Rs. 5.0 lac) and mobility / travel costs">manpower (max up to 2 JRF/SRF/RA etc); chemicals/ consumables (max up to Rs. 5.0 Lakh per year) minor equipment/ accessories (max of Rs. 5.0 lac) and mobility / travel costs</td>
            <td t="s" id="sjs-F126" v="Needs Austrian collaborator">Needs Austrian collaborator</td>
            <td t="s" id="sjs-G126" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H126" v="3 years (upto 2 visits of 30-60 days/each side/ year)">3 years (upto 2 visits of 30-60 days/each side/ year)</td>
            <td t="s" id="sjs-I126" v="http://www.dst.gov.in/whats_new/whats_new12/COP_%28DST_FWF%29_2012.pdf">http://www.dst.gov.in/whats_new/whats_new12/COP_%28DST_FWF%29_2012.pdf</td>
            <td t="z" id="sjs-J126"></td>
            <td t="z" id="sjs-K126"></td>
            <td t="z" id="sjs-L126"></td>
            <td t="z" id="sjs-M126"></td>
            <td t="z" id="sjs-N126"></td>
            <td t="z" id="sjs-O126"></td>
            <td t="z" id="sjs-P126"></td>
            <td t="z" id="sjs-Q126"></td>
            <td t="z" id="sjs-R126"></td>
            <td t="z" id="sjs-S126"></td>
            <td t="z" id="sjs-T126"></td>
            <td t="z" id="sjs-U126"></td>
            <td t="z" id="sjs-V126"></td>
            <td t="z" id="sjs-W126"></td>
            <td t="z" id="sjs-X126"></td>
            <td t="z" id="sjs-Y126"></td>
            <td t="z" id="sjs-Z126"></td>
            <td t="z" id="sjs-AA126"></td>
            <td t="z" id="sjs-AB126"></td>
            <td t="z" id="sjs-AC126"></td>
            <td t="z" id="sjs-AD126"></td>
            <td t="z" id="sjs-AE126"></td>
            <td t="z" id="sjs-AF126"></td>
            <td t="z" id="sjs-AG126"></td>
            <td t="z" id="sjs-AH126"></td>
            <td t="z" id="sjs-AI126"></td>
            <td t="z" id="sjs-AJ126"></td>
            <td t="z" id="sjs-AK126"></td>
            <td t="z" id="sjs-AL126"></td>
            <td t="z" id="sjs-AM126"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A127" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B127" v="DST/ Foundation for Science and Technology (FCT), Portugal " xml:space="preserve">DST/ Foundation for Science and Technology (FCT), Portugal </td>
            <td t="s" id="sjs-C127" v="Indo-Portugese Programme of cooperation in Science and Technology " xml:space="preserve">Indo-Portugese Programme of cooperation in Science and Technology </td>
            <td t="s" id="sjs-D127" v="Collaborative travel. Priority areas include biotechnology, nanotechnology, health and agriculture sciences etc " xml:space="preserve">Collaborative travel. Priority areas include biotechnology, nanotechnology, health and agriculture sciences etc </td>
            <td t="s" id="sjs-E127" v="Travel and living expenses">Travel and living expenses</td>
            <td t="s" id="sjs-F127" v="Needs Portugese collaborator">Needs Portugese collaborator</td>
            <td t="s" id="sjs-G127" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H127" v="3 years">3 years</td>
            <td t="s" id="sjs-I127" v="http://www.dst.gov.in/whats_new/whats_new12/cop-indo_portguese.pdf">http://www.dst.gov.in/whats_new/whats_new12/cop-indo_portguese.pdf</td>
            <td t="z" id="sjs-J127"></td>
            <td t="z" id="sjs-K127"></td>
            <td t="z" id="sjs-L127"></td>
            <td t="z" id="sjs-M127"></td>
            <td t="z" id="sjs-N127"></td>
            <td t="z" id="sjs-O127"></td>
            <td t="z" id="sjs-P127"></td>
            <td t="z" id="sjs-Q127"></td>
            <td t="z" id="sjs-R127"></td>
            <td t="z" id="sjs-S127"></td>
            <td t="z" id="sjs-T127"></td>
            <td t="z" id="sjs-U127"></td>
            <td t="z" id="sjs-V127"></td>
            <td t="z" id="sjs-W127"></td>
            <td t="z" id="sjs-X127"></td>
            <td t="z" id="sjs-Y127"></td>
            <td t="z" id="sjs-Z127"></td>
            <td t="z" id="sjs-AA127"></td>
            <td t="z" id="sjs-AB127"></td>
            <td t="z" id="sjs-AC127"></td>
            <td t="z" id="sjs-AD127"></td>
            <td t="z" id="sjs-AE127"></td>
            <td t="z" id="sjs-AF127"></td>
            <td t="z" id="sjs-AG127"></td>
            <td t="z" id="sjs-AH127"></td>
            <td t="z" id="sjs-AI127"></td>
            <td t="z" id="sjs-AJ127"></td>
            <td t="z" id="sjs-AK127"></td>
            <td t="z" id="sjs-AL127"></td>
            <td t="z" id="sjs-AM127"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A128" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B128" v="DST/ Japanese Society for the Promotion of Science">DST/ Japanese Society for the Promotion of Science</td>
            <td t="s" id="sjs-C128" v="India-Japan Cooperative Science Programme (IJCSP)">India-Japan Cooperative Science Programme (IJCSP)</td>
            <td t="s" id="sjs-D128" v="collaborative travel">collaborative travel</td>
            <td t="s" id="sjs-E128" v="Travel and living expenses">Travel and living expenses</td>
            <td t="s" id="sjs-F128" v="Needs Japanese collaborator">Needs Japanese collaborator</td>
            <td t="s" id="sjs-G128" v="8th Sep, 2016">8th Sep, 2016</td>
            <td t="s" id="sjs-H128" v="2 years">2 years</td>
            <td t="s" id="sjs-I128" v="http://dst.gov.in/whats_new/whats_new15/COP_IJCSP2015.pdf">http://dst.gov.in/whats_new/whats_new15/COP_IJCSP2015.pdf</td>
            <td t="z" id="sjs-J128"></td>
            <td t="z" id="sjs-K128"></td>
            <td t="z" id="sjs-L128"></td>
            <td t="z" id="sjs-M128"></td>
            <td t="z" id="sjs-N128"></td>
            <td t="z" id="sjs-O128"></td>
            <td t="z" id="sjs-P128"></td>
            <td t="z" id="sjs-Q128"></td>
            <td t="z" id="sjs-R128"></td>
            <td t="z" id="sjs-S128"></td>
            <td t="z" id="sjs-T128"></td>
            <td t="z" id="sjs-U128"></td>
            <td t="z" id="sjs-V128"></td>
            <td t="z" id="sjs-W128"></td>
            <td t="z" id="sjs-X128"></td>
            <td t="z" id="sjs-Y128"></td>
            <td t="z" id="sjs-Z128"></td>
            <td t="z" id="sjs-AA128"></td>
            <td t="z" id="sjs-AB128"></td>
            <td t="z" id="sjs-AC128"></td>
            <td t="z" id="sjs-AD128"></td>
            <td t="z" id="sjs-AE128"></td>
            <td t="z" id="sjs-AF128"></td>
            <td t="z" id="sjs-AG128"></td>
            <td t="z" id="sjs-AH128"></td>
            <td t="z" id="sjs-AI128"></td>
            <td t="z" id="sjs-AJ128"></td>
            <td t="z" id="sjs-AK128"></td>
            <td t="z" id="sjs-AL128"></td>
            <td t="z" id="sjs-AM128"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A129" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B129" v="DST/ MINCYT, Argentina">DST/ MINCYT, Argentina</td>
            <td t="s" id="sjs-C129" v="Indo-Argentine Bilateral scientific cooperation">Indo-Argentine Bilateral scientific cooperation</td>
            <td t="s" id="sjs-D129" v="Needs Argentine collaborator, field funded include but not restricted to biotechnology (including drug discovery), Medical Sciences and Health, agriculture and food technology " xml:space="preserve">Needs Argentine collaborator, field funded include but not restricted to biotechnology (including drug discovery), Medical Sciences and Health, agriculture and food technology </td>
            <td t="s" id="sjs-E129" v="Travel and living allowances for short exchange stays">Travel and living allowances for short exchange stays</td>
            <td t="s" id="sjs-F129" v="PhD, regular appointment in a research institute">PhD, regular appointment in a research institute</td>
            <td t="s" id="sjs-G129" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="s" id="sjs-H129" v="short term 15days-3 months">short term 15days-3 months</td>
            <td t="s" id="sjs-I129" v="http://www.dst.gov.in/whats_new/whats_new14/COP_Indo-Argentina-2014.pdf">http://www.dst.gov.in/whats_new/whats_new14/COP_Indo-Argentina-2014.pdf</td>
            <td t="z" id="sjs-J129"></td>
            <td t="z" id="sjs-K129"></td>
            <td t="z" id="sjs-L129"></td>
            <td t="z" id="sjs-M129"></td>
            <td t="z" id="sjs-N129"></td>
            <td t="z" id="sjs-O129"></td>
            <td t="z" id="sjs-P129"></td>
            <td t="z" id="sjs-Q129"></td>
            <td t="z" id="sjs-R129"></td>
            <td t="z" id="sjs-S129"></td>
            <td t="z" id="sjs-T129"></td>
            <td t="z" id="sjs-U129"></td>
            <td t="z" id="sjs-V129"></td>
            <td t="z" id="sjs-W129"></td>
            <td t="z" id="sjs-X129"></td>
            <td t="z" id="sjs-Y129"></td>
            <td t="z" id="sjs-Z129"></td>
            <td t="z" id="sjs-AA129"></td>
            <td t="z" id="sjs-AB129"></td>
            <td t="z" id="sjs-AC129"></td>
            <td t="z" id="sjs-AD129"></td>
            <td t="z" id="sjs-AE129"></td>
            <td t="z" id="sjs-AF129"></td>
            <td t="z" id="sjs-AG129"></td>
            <td t="z" id="sjs-AH129"></td>
            <td t="z" id="sjs-AI129"></td>
            <td t="z" id="sjs-AJ129"></td>
            <td t="z" id="sjs-AK129"></td>
            <td t="z" id="sjs-AL129"></td>
            <td t="z" id="sjs-AM129"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A130" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B130" v="DST/ MNISW (Poland)">DST/ MNISW (Poland)</td>
            <td t="s" id="sjs-C130" v="Indo-Poland Joint Research Programme">Indo-Poland Joint Research Programme</td>
            <td t="s" id="sjs-D130" v="Any scientific area">Any scientific area</td>
            <td t="s" id="sjs-E130" v="Limited research expenses, travel, accomodation, per diem">Limited research expenses, travel, accomodation, per diem</td>
            <td t="s" id="sjs-F130" v="scientists/researchers in India and Poland">scientists/researchers in India and Poland</td>
            <td t="s" id="sjs-G130" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="s" id="sjs-H130" v="2 years + extension of 1 year based on merit">2 years + extension of 1 year based on merit</td>
            <td t="s" id="sjs-I130" v="http://www.dst.gov.in/sites/default/files/Indo-Poland-Joint%20-Research-Programme.pdf">http://www.dst.gov.in/sites/default/files/Indo-Poland-Joint%20-Research-Programme.pdf</td>
            <td t="z" id="sjs-J130"></td>
            <td t="z" id="sjs-K130"></td>
            <td t="z" id="sjs-L130"></td>
            <td t="z" id="sjs-M130"></td>
            <td t="z" id="sjs-N130"></td>
            <td t="z" id="sjs-O130"></td>
            <td t="z" id="sjs-P130"></td>
            <td t="z" id="sjs-Q130"></td>
            <td t="z" id="sjs-R130"></td>
            <td t="z" id="sjs-S130"></td>
            <td t="z" id="sjs-T130"></td>
            <td t="z" id="sjs-U130"></td>
            <td t="z" id="sjs-V130"></td>
            <td t="z" id="sjs-W130"></td>
            <td t="z" id="sjs-X130"></td>
            <td t="z" id="sjs-Y130"></td>
            <td t="z" id="sjs-Z130"></td>
            <td t="z" id="sjs-AA130"></td>
            <td t="z" id="sjs-AB130"></td>
            <td t="z" id="sjs-AC130"></td>
            <td t="z" id="sjs-AD130"></td>
            <td t="z" id="sjs-AE130"></td>
            <td t="z" id="sjs-AF130"></td>
            <td t="z" id="sjs-AG130"></td>
            <td t="z" id="sjs-AH130"></td>
            <td t="z" id="sjs-AI130"></td>
            <td t="z" id="sjs-AJ130"></td>
            <td t="z" id="sjs-AK130"></td>
            <td t="z" id="sjs-AL130"></td>
            <td t="z" id="sjs-AM130"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A131" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B131" v="DST/ NSC (Taiwan)">DST/ NSC (Taiwan)</td>
            <td t="s" id="sjs-C131" v="INDIA-TAIWAN PROGRAMME OF COOPERATION IN SCIENCE &amp; TECHNOLOGY">INDIA-TAIWAN PROGRAMME OF COOPERATION IN SCIENCE &amp; TECHNOLOGY</td>
            <td t="s" id="sjs-D131" v="Priority areas include Tropical food borne infectious diseases,
Drug discovery and pharmaceutical, Structural biology, functional genomics, Marine sciences, Biomedical devices, High performance computing
">Priority areas include Tropical food borne infectious diseases,
              <br>Drug discovery and pharmaceutical, Structural biology, functional genomics, Marine sciences, Biomedical devices, High performance computing
              <br>
            </td>
            <td t="s" id="sjs-E131" v="Exchange visits, limited research costs including manpower, minor equipment, consumables">Exchange visits, limited research costs including manpower, minor equipment, consumables</td>
            <td t="s" id="sjs-F131" v="Scientists and engineers in regular employment in India and Taiwan">Scientists and engineers in regular employment in India and Taiwan</td>
            <td t="s" id="sjs-G131" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H131" v="3 years">3 years</td>
            <td t="s" id="sjs-I131" v="http://gita.org.in/Upload/CallProposal/India%20Taiwan%20Call%20for%20Proposal%202013.doc">http://gita.org.in/Upload/CallProposal/India%20Taiwan%20Call%20for%20Proposal%202013.doc</td>
            <td t="z" id="sjs-J131"></td>
            <td t="z" id="sjs-K131"></td>
            <td t="z" id="sjs-L131"></td>
            <td t="z" id="sjs-M131"></td>
            <td t="z" id="sjs-N131"></td>
            <td t="z" id="sjs-O131"></td>
            <td t="z" id="sjs-P131"></td>
            <td t="z" id="sjs-Q131"></td>
            <td t="z" id="sjs-R131"></td>
            <td t="z" id="sjs-S131"></td>
            <td t="z" id="sjs-T131"></td>
            <td t="z" id="sjs-U131"></td>
            <td t="z" id="sjs-V131"></td>
            <td t="z" id="sjs-W131"></td>
            <td t="z" id="sjs-X131"></td>
            <td t="z" id="sjs-Y131"></td>
            <td t="z" id="sjs-Z131"></td>
            <td t="z" id="sjs-AA131"></td>
            <td t="z" id="sjs-AB131"></td>
            <td t="z" id="sjs-AC131"></td>
            <td t="z" id="sjs-AD131"></td>
            <td t="z" id="sjs-AE131"></td>
            <td t="z" id="sjs-AF131"></td>
            <td t="z" id="sjs-AG131"></td>
            <td t="z" id="sjs-AH131"></td>
            <td t="z" id="sjs-AI131"></td>
            <td t="z" id="sjs-AJ131"></td>
            <td t="z" id="sjs-AK131"></td>
            <td t="z" id="sjs-AL131"></td>
            <td t="z" id="sjs-AM131"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A132" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B132" v="DST/ National Innovation Office (NIO), Hungary">DST/ National Innovation Office (NIO), Hungary</td>
            <td t="s" id="sjs-C132" v="Indo-Hungarian Strategic Research Fund (IHSRF)">Indo-Hungarian Strategic Research Fund (IHSRF)</td>
            <td t="s" id="sjs-D132" v="Collaborative travel for joint research projects">Collaborative travel for joint research projects</td>
            <td t="s" id="sjs-E132" v="Travel and living expenses, consumables, labour costs">Travel and living expenses, consumables, labour costs</td>
            <td t="s" id="sjs-F132" v="Needs Hungarian Collaborator">Needs Hungarian Collaborator</td>
            <td t="s" id="sjs-G132" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H132" v="2 years">2 years</td>
            <td t="s" id="sjs-I132" v="http://www.dst.gov.in/whats_new/whats_new13/Ino-Hun%20ST%20CfP_NIO_13%2009%2009%20_draft%20%20%282%29.pdf">http://www.dst.gov.in/whats_new/whats_new13/Ino-Hun%20ST%20CfP_NIO_13%2009%2009%20_draft%20%20%282%29.pdf</td>
            <td t="z" id="sjs-J132"></td>
            <td t="z" id="sjs-K132"></td>
            <td t="z" id="sjs-L132"></td>
            <td t="z" id="sjs-M132"></td>
            <td t="z" id="sjs-N132"></td>
            <td t="z" id="sjs-O132"></td>
            <td t="z" id="sjs-P132"></td>
            <td t="z" id="sjs-Q132"></td>
            <td t="z" id="sjs-R132"></td>
            <td t="z" id="sjs-S132"></td>
            <td t="z" id="sjs-T132"></td>
            <td t="z" id="sjs-U132"></td>
            <td t="z" id="sjs-V132"></td>
            <td t="z" id="sjs-W132"></td>
            <td t="z" id="sjs-X132"></td>
            <td t="z" id="sjs-Y132"></td>
            <td t="z" id="sjs-Z132"></td>
            <td t="z" id="sjs-AA132"></td>
            <td t="z" id="sjs-AB132"></td>
            <td t="z" id="sjs-AC132"></td>
            <td t="z" id="sjs-AD132"></td>
            <td t="z" id="sjs-AE132"></td>
            <td t="z" id="sjs-AF132"></td>
            <td t="z" id="sjs-AG132"></td>
            <td t="z" id="sjs-AH132"></td>
            <td t="z" id="sjs-AI132"></td>
            <td t="z" id="sjs-AJ132"></td>
            <td t="z" id="sjs-AK132"></td>
            <td t="z" id="sjs-AL132"></td>
            <td t="z" id="sjs-AM132"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A133" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B133" v="DST/ Ministry of Education, Youth and Sports, Czech republic">DST/ Ministry of Education, Youth and Sports, Czech republic</td>
            <td t="s" id="sjs-C133" v="Indo-Czech Programme of cooperation in Science and Technology">Indo-Czech Programme of cooperation in Science and Technology</td>
            <td t="s" id="sjs-D133" v="Collaborative travel for joint research projects for priority areas  such as natural sciences including biotechnology,  health and medical sciences, climate change, environment etc">Collaborative travel for joint research projects for priority areas such as natural sciences including biotechnology, health and medical sciences, climate change, environment etc</td>
            <td t="s" id="sjs-E133" v="Sending side pays for travel, visa fees, accomodation, medical insurance, living expenses">Sending side pays for travel, visa fees, accomodation, medical insurance, living expenses</td>
            <td t="s" id="sjs-F133" v="Needs Czech collbaorator">Needs Czech collbaorator</td>
            <td t="s" id="sjs-G133" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H133" v="3 years">3 years</td>
            <td t="s" id="sjs-I133" v="http://www.dst.gov.in/whats_new/whats_new12/cop_indo-czech.pdf">http://www.dst.gov.in/whats_new/whats_new12/cop_indo-czech.pdf</td>
            <td t="z" id="sjs-J133"></td>
            <td t="z" id="sjs-K133"></td>
            <td t="z" id="sjs-L133"></td>
            <td t="z" id="sjs-M133"></td>
            <td t="z" id="sjs-N133"></td>
            <td t="z" id="sjs-O133"></td>
            <td t="z" id="sjs-P133"></td>
            <td t="z" id="sjs-Q133"></td>
            <td t="z" id="sjs-R133"></td>
            <td t="z" id="sjs-S133"></td>
            <td t="z" id="sjs-T133"></td>
            <td t="z" id="sjs-U133"></td>
            <td t="z" id="sjs-V133"></td>
            <td t="z" id="sjs-W133"></td>
            <td t="z" id="sjs-X133"></td>
            <td t="z" id="sjs-Y133"></td>
            <td t="z" id="sjs-Z133"></td>
            <td t="z" id="sjs-AA133"></td>
            <td t="z" id="sjs-AB133"></td>
            <td t="z" id="sjs-AC133"></td>
            <td t="z" id="sjs-AD133"></td>
            <td t="z" id="sjs-AE133"></td>
            <td t="z" id="sjs-AF133"></td>
            <td t="z" id="sjs-AG133"></td>
            <td t="z" id="sjs-AH133"></td>
            <td t="z" id="sjs-AI133"></td>
            <td t="z" id="sjs-AJ133"></td>
            <td t="z" id="sjs-AK133"></td>
            <td t="z" id="sjs-AL133"></td>
            <td t="z" id="sjs-AM133"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A134" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B134" v="DST/MHESR (Tunisia)">DST/MHESR (Tunisia)</td>
            <td t="s" id="sjs-C134" v="Indo-Tunisian call for joint proposals">Indo-Tunisian call for joint proposals</td>
            <td t="s" id="sjs-D134" v="Collaborative travel for joint research projects for priority areas such as biotechnology, material sciences, medical sciences etc as listed in the current call">Collaborative travel for joint research projects for priority areas such as biotechnology, material sciences, medical sciences etc as listed in the current call</td>
            <td t="s" id="sjs-E134" v="sending party covers the costs of international travel and the receiving party meets the boarding and lodging expenses">sending party covers the costs of international travel and the receiving party meets the boarding and lodging expenses</td>
            <td t="s" id="sjs-F134" v="Needs Tunisian collaborator">Needs Tunisian collaborator</td>
            <td t="s" id="sjs-G134" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H134" v="2 years">2 years</td>
            <td t="s" id="sjs-I134" v="http://www.dst.gov.in/whats_new/whats_new12/Tunisia_COP_2012.pdf">http://www.dst.gov.in/whats_new/whats_new12/Tunisia_COP_2012.pdf</td>
            <td t="z" id="sjs-J134"></td>
            <td t="z" id="sjs-K134"></td>
            <td t="z" id="sjs-L134"></td>
            <td t="z" id="sjs-M134"></td>
            <td t="z" id="sjs-N134"></td>
            <td t="z" id="sjs-O134"></td>
            <td t="z" id="sjs-P134"></td>
            <td t="z" id="sjs-Q134"></td>
            <td t="z" id="sjs-R134"></td>
            <td t="z" id="sjs-S134"></td>
            <td t="z" id="sjs-T134"></td>
            <td t="z" id="sjs-U134"></td>
            <td t="z" id="sjs-V134"></td>
            <td t="z" id="sjs-W134"></td>
            <td t="z" id="sjs-X134"></td>
            <td t="z" id="sjs-Y134"></td>
            <td t="z" id="sjs-Z134"></td>
            <td t="z" id="sjs-AA134"></td>
            <td t="z" id="sjs-AB134"></td>
            <td t="z" id="sjs-AC134"></td>
            <td t="z" id="sjs-AD134"></td>
            <td t="z" id="sjs-AE134"></td>
            <td t="z" id="sjs-AF134"></td>
            <td t="z" id="sjs-AG134"></td>
            <td t="z" id="sjs-AH134"></td>
            <td t="z" id="sjs-AI134"></td>
            <td t="z" id="sjs-AJ134"></td>
            <td t="z" id="sjs-AK134"></td>
            <td t="z" id="sjs-AL134"></td>
            <td t="z" id="sjs-AM134"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A135" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B135" v="DST/ Research Council of Norway">DST/ Research Council of Norway</td>
            <td t="s" id="sjs-C135" v="Indian Norwegian joint research projects">Indian Norwegian joint research projects</td>
            <td t="s" id="sjs-D135" v="Collaborative travel for joint research projects in environmental related topics " xml:space="preserve">Collaborative travel for joint research projects in environmental related topics </td>
            <td t="s" id="sjs-E135" v="0.5 -1.3 mill USD from Norwegian side with matching funding from DST primarily for exchange visits, also incremental costs for 2 research personnel, consumables etc " xml:space="preserve">0.5 -1.3 mill USD from Norwegian side with matching funding from DST primarily for exchange visits, also incremental costs for 2 research personnel, consumables etc </td>
            <td t="s" id="sjs-F135" v="Regular employment at a research institute. Needs Norwegian Collaborator">Regular employment at a research institute. Needs Norwegian Collaborator</td>
            <td t="s" id="sjs-G135" v="To Be Announced">To Be Announced</td>
            <td t="s" id="sjs-H135" v="3 years">3 years</td>
            <td t="s" id="sjs-I135" v="http://www.dst.gov.in/whats_new/whats_new12/cop_dst-rcn.pdf">http://www.dst.gov.in/whats_new/whats_new12/cop_dst-rcn.pdf</td>
            <td t="z" id="sjs-J135"></td>
            <td t="z" id="sjs-K135"></td>
            <td t="z" id="sjs-L135"></td>
            <td t="z" id="sjs-M135"></td>
            <td t="z" id="sjs-N135"></td>
            <td t="z" id="sjs-O135"></td>
            <td t="z" id="sjs-P135"></td>
            <td t="z" id="sjs-Q135"></td>
            <td t="z" id="sjs-R135"></td>
            <td t="z" id="sjs-S135"></td>
            <td t="z" id="sjs-T135"></td>
            <td t="z" id="sjs-U135"></td>
            <td t="z" id="sjs-V135"></td>
            <td t="z" id="sjs-W135"></td>
            <td t="z" id="sjs-X135"></td>
            <td t="z" id="sjs-Y135"></td>
            <td t="z" id="sjs-Z135"></td>
            <td t="z" id="sjs-AA135"></td>
            <td t="z" id="sjs-AB135"></td>
            <td t="z" id="sjs-AC135"></td>
            <td t="z" id="sjs-AD135"></td>
            <td t="z" id="sjs-AE135"></td>
            <td t="z" id="sjs-AF135"></td>
            <td t="z" id="sjs-AG135"></td>
            <td t="z" id="sjs-AH135"></td>
            <td t="z" id="sjs-AI135"></td>
            <td t="z" id="sjs-AJ135"></td>
            <td t="z" id="sjs-AK135"></td>
            <td t="z" id="sjs-AL135"></td>
            <td t="z" id="sjs-AM135"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A136" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B136" v="DST/ Spanish Ministry of Science and innovation (MICINN) " xml:space="preserve">DST/ Spanish Ministry of Science and innovation (MICINN) </td>
            <td t="s" id="sjs-C136" v="Indo-Spain Joint Programme of cooperation in Science and Technology " xml:space="preserve">Indo-Spain Joint Programme of cooperation in Science and Technology </td>
            <td t="s" id="sjs-D136" v="Collaborative travel for nanotechnology, health and medical research " xml:space="preserve">Collaborative travel for nanotechnology, health and medical research </td>
            <td t="s" id="sjs-E136" v="Travel and living expenses, consumables, small equipment">Travel and living expenses, consumables, small equipment</td>
            <td t="s" id="sjs-F136" v="Regular employment at a research institute. Needs Spanish Collaborator">Regular employment at a research institute. Needs Spanish Collaborator</td>
            <td t="s" id="sjs-G136" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H136" v="3 years">3 years</td>
            <td t="s" id="sjs-I136" v="http://www.dbtindia.nic.in/wp-content/uploads/CFP2015_18052015.pdf">http://www.dbtindia.nic.in/wp-content/uploads/CFP2015_18052015.pdf</td>
            <td t="z" id="sjs-J136"></td>
            <td t="z" id="sjs-K136"></td>
            <td t="z" id="sjs-L136"></td>
            <td t="z" id="sjs-M136"></td>
            <td t="z" id="sjs-N136"></td>
            <td t="z" id="sjs-O136"></td>
            <td t="z" id="sjs-P136"></td>
            <td t="z" id="sjs-Q136"></td>
            <td t="z" id="sjs-R136"></td>
            <td t="z" id="sjs-S136"></td>
            <td t="z" id="sjs-T136"></td>
            <td t="z" id="sjs-U136"></td>
            <td t="z" id="sjs-V136"></td>
            <td t="z" id="sjs-W136"></td>
            <td t="z" id="sjs-X136"></td>
            <td t="z" id="sjs-Y136"></td>
            <td t="z" id="sjs-Z136"></td>
            <td t="z" id="sjs-AA136"></td>
            <td t="z" id="sjs-AB136"></td>
            <td t="z" id="sjs-AC136"></td>
            <td t="z" id="sjs-AD136"></td>
            <td t="z" id="sjs-AE136"></td>
            <td t="z" id="sjs-AF136"></td>
            <td t="z" id="sjs-AG136"></td>
            <td t="z" id="sjs-AH136"></td>
            <td t="z" id="sjs-AI136"></td>
            <td t="z" id="sjs-AJ136"></td>
            <td t="z" id="sjs-AK136"></td>
            <td t="z" id="sjs-AL136"></td>
            <td t="z" id="sjs-AM136"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A137" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B137" v="DST/ Swiss Program Office">DST/ Swiss Program Office</td>
            <td t="s" id="sjs-C137" v="Indo-Swiss Joint Research Programme Personnel Exchange Programme">Indo-Swiss Joint Research Programme Personnel Exchange Programme</td>
            <td t="s" id="sjs-D137" v="Collaborative travel">Collaborative travel</td>
            <td t="s" id="sjs-E137" v="travel and living expenses">travel and living expenses</td>
            <td t="s" id="sjs-F137" v="Needs Swiss collaborator, should include at least 1 PhD or postdoctoral scientist on each side">Needs Swiss collaborator, should include at least 1 PhD or postdoctoral scientist on each side</td>
            <td t="s" id="sjs-G137" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H137" v="2 years (4 visits of 30-90 days)">2 years (4 visits of 30-90 days)</td>
            <td t="s" id="sjs-I137" v="http://www.dst.gov.in/whats_new/whats_new11/COP_ISJRP_PEP_2012.pdf">http://www.dst.gov.in/whats_new/whats_new11/COP_ISJRP_PEP_2012.pdf</td>
            <td t="z" id="sjs-J137"></td>
            <td t="z" id="sjs-K137"></td>
            <td t="z" id="sjs-L137"></td>
            <td t="z" id="sjs-M137"></td>
            <td t="z" id="sjs-N137"></td>
            <td t="z" id="sjs-O137"></td>
            <td t="z" id="sjs-P137"></td>
            <td t="z" id="sjs-Q137"></td>
            <td t="z" id="sjs-R137"></td>
            <td t="z" id="sjs-S137"></td>
            <td t="z" id="sjs-T137"></td>
            <td t="z" id="sjs-U137"></td>
            <td t="z" id="sjs-V137"></td>
            <td t="z" id="sjs-W137"></td>
            <td t="z" id="sjs-X137"></td>
            <td t="z" id="sjs-Y137"></td>
            <td t="z" id="sjs-Z137"></td>
            <td t="z" id="sjs-AA137"></td>
            <td t="z" id="sjs-AB137"></td>
            <td t="z" id="sjs-AC137"></td>
            <td t="z" id="sjs-AD137"></td>
            <td t="z" id="sjs-AE137"></td>
            <td t="z" id="sjs-AF137"></td>
            <td t="z" id="sjs-AG137"></td>
            <td t="z" id="sjs-AH137"></td>
            <td t="z" id="sjs-AI137"></td>
            <td t="z" id="sjs-AJ137"></td>
            <td t="z" id="sjs-AK137"></td>
            <td t="z" id="sjs-AL137"></td>
            <td t="z" id="sjs-AM137"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A138" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B138" v="DST-State Agency on Science, Innovations and
Information of Ukraine">DST-State Agency on Science, Innovations and
              <br>Information of Ukraine
            </td>
            <td t="s" id="sjs-C138" v="Indo-Ukraine Bilateral scientific cooperation">Indo-Ukraine Bilateral scientific cooperation</td>
            <td t="s" id="sjs-D138" v="Needs Ukaranian collaborator. Research Areas funded- biotechnology, physics, nanosci and nanotechnology">Needs Ukaranian collaborator. Research Areas funded- biotechnology, physics, nanosci and nanotechnology</td>
            <td t="s" id="sjs-E138" v="mobility costs, sending side-international airfare, host-local travel, accomodation and living expenses">mobility costs, sending side-international airfare, host-local travel, accomodation and living expenses</td>
            <td t="s" id="sjs-F138" v="PhD, permanent appointment in a research institute">PhD, permanent appointment in a research institute</td>
            <td t="s" id="sjs-G138" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H138" v="3 years">3 years</td>
            <td t="s" id="sjs-I138" v="http://www.stic-dst.org/CallUkraineIndia.pdf">http://www.stic-dst.org/CallUkraineIndia.pdf</td>
            <td t="z" id="sjs-J138"></td>
            <td t="z" id="sjs-K138"></td>
            <td t="z" id="sjs-L138"></td>
            <td t="z" id="sjs-M138"></td>
            <td t="z" id="sjs-N138"></td>
            <td t="z" id="sjs-O138"></td>
            <td t="z" id="sjs-P138"></td>
            <td t="z" id="sjs-Q138"></td>
            <td t="z" id="sjs-R138"></td>
            <td t="z" id="sjs-S138"></td>
            <td t="z" id="sjs-T138"></td>
            <td t="z" id="sjs-U138"></td>
            <td t="z" id="sjs-V138"></td>
            <td t="z" id="sjs-W138"></td>
            <td t="z" id="sjs-X138"></td>
            <td t="z" id="sjs-Y138"></td>
            <td t="z" id="sjs-Z138"></td>
            <td t="z" id="sjs-AA138"></td>
            <td t="z" id="sjs-AB138"></td>
            <td t="z" id="sjs-AC138"></td>
            <td t="z" id="sjs-AD138"></td>
            <td t="z" id="sjs-AE138"></td>
            <td t="z" id="sjs-AF138"></td>
            <td t="z" id="sjs-AG138"></td>
            <td t="z" id="sjs-AH138"></td>
            <td t="z" id="sjs-AI138"></td>
            <td t="z" id="sjs-AJ138"></td>
            <td t="z" id="sjs-AK138"></td>
            <td t="z" id="sjs-AL138"></td>
            <td t="z" id="sjs-AM138"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A139" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B139" v="DST- National Science Council of Taiwan " xml:space="preserve">DST- National Science Council of Taiwan </td>
            <td t="s" id="sjs-C139" v="India- Taiwan Programme of Co-operation in S&amp;T, Joint Research Project proposals">India- Taiwan Programme of Co-operation in S&amp;T, Joint Research Project proposals</td>
            <td t="s" id="sjs-D139" v="Priority areas include structural biology, functional genomics, biomedical devices etc " xml:space="preserve">Priority areas include structural biology, functional genomics, biomedical devices etc </td>
            <td t="s" id="sjs-E139" v="mobility costs, sending side-international airfare, host-local travel, accomodation and living expenses. Incremental research expenses for manpower, consumables etc upto max 5 lakh " xml:space="preserve">mobility costs, sending side-international airfare, host-local travel, accomodation and living expenses. Incremental research expenses for manpower, consumables etc upto max 5 lakh </td>
            <td t="s" id="sjs-F139" v="Scientists and Engineers in India and Taiwan">Scientists and Engineers in India and Taiwan</td>
            <td t="s" id="sjs-G139" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H139" v="3 years ( upto 2 visits of 30-60 days/each side/ year)">3 years ( upto 2 visits of 30-60 days/each side/ year)</td>
            <td t="s" id="sjs-I139" v="http://gita.org.in/funding_country_4.html">http://gita.org.in/funding_country_4.html</td>
            <td t="z" id="sjs-J139"></td>
            <td t="z" id="sjs-K139"></td>
            <td t="z" id="sjs-L139"></td>
            <td t="z" id="sjs-M139"></td>
            <td t="z" id="sjs-N139"></td>
            <td t="z" id="sjs-O139"></td>
            <td t="z" id="sjs-P139"></td>
            <td t="z" id="sjs-Q139"></td>
            <td t="z" id="sjs-R139"></td>
            <td t="z" id="sjs-S139"></td>
            <td t="z" id="sjs-T139"></td>
            <td t="z" id="sjs-U139"></td>
            <td t="z" id="sjs-V139"></td>
            <td t="z" id="sjs-W139"></td>
            <td t="z" id="sjs-X139"></td>
            <td t="z" id="sjs-Y139"></td>
            <td t="z" id="sjs-Z139"></td>
            <td t="z" id="sjs-AA139"></td>
            <td t="z" id="sjs-AB139"></td>
            <td t="z" id="sjs-AC139"></td>
            <td t="z" id="sjs-AD139"></td>
            <td t="z" id="sjs-AE139"></td>
            <td t="z" id="sjs-AF139"></td>
            <td t="z" id="sjs-AG139"></td>
            <td t="z" id="sjs-AH139"></td>
            <td t="z" id="sjs-AI139"></td>
            <td t="z" id="sjs-AJ139"></td>
            <td t="z" id="sjs-AK139"></td>
            <td t="z" id="sjs-AL139"></td>
            <td t="z" id="sjs-AM139"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A140" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B140" v="DST/UKIERI">DST/UKIERI</td>
            <td t="s" id="sjs-C140" v="DST-UKIERI Thematic Partnerships">DST-UKIERI Thematic Partnerships</td>
            <td t="s" id="sjs-D140" v="Needs UK collaborator, for themes of Sustainable energy supply, Food production and security, Water supply and security, Health and Disease, Innovation including social impact and intellectual property, Research and Science Policy">Needs UK collaborator, for themes of Sustainable energy supply, Food production and security, Water supply and security, Health and Disease, Innovation including social impact and intellectual property, Research and Science Policy</td>
            <td t="s" id="sjs-E140" v="£60,000-75,000 covers travel, visa fees, local accomodation,limited research consumables">£60,000-75,000 covers travel, visa fees, local accomodation,limited research consumables</td>
            <td t="s" id="sjs-F140" v="PhD, regular appointment in research institute in india or UK  " xml:space="preserve">PhD, regular appointment in research institute in india or UK </td>
            <td t="s" id="sjs-G140" v="5th October, 2016">5th October, 2016</td>
            <td t="s" id="sjs-H140" v="2 years (4 visits of 15-89 days/each side/year)">2 years (4 visits of 15-89 days/each side/year)</td>
            <td t="s" id="sjs-I140" v="http://www.dst.gov.in/whats_new/whats_new13/DSTUKIERIGuidelines2013.pdf">http://www.dst.gov.in/whats_new/whats_new13/DSTUKIERIGuidelines2013.pdf</td>
            <td t="z" id="sjs-J140"></td>
            <td t="z" id="sjs-K140"></td>
            <td t="z" id="sjs-L140"></td>
            <td t="z" id="sjs-M140"></td>
            <td t="z" id="sjs-N140"></td>
            <td t="z" id="sjs-O140"></td>
            <td t="z" id="sjs-P140"></td>
            <td t="z" id="sjs-Q140"></td>
            <td t="z" id="sjs-R140"></td>
            <td t="z" id="sjs-S140"></td>
            <td t="z" id="sjs-T140"></td>
            <td t="z" id="sjs-U140"></td>
            <td t="z" id="sjs-V140"></td>
            <td t="z" id="sjs-W140"></td>
            <td t="z" id="sjs-X140"></td>
            <td t="z" id="sjs-Y140"></td>
            <td t="z" id="sjs-Z140"></td>
            <td t="z" id="sjs-AA140"></td>
            <td t="z" id="sjs-AB140"></td>
            <td t="z" id="sjs-AC140"></td>
            <td t="z" id="sjs-AD140"></td>
            <td t="z" id="sjs-AE140"></td>
            <td t="z" id="sjs-AF140"></td>
            <td t="z" id="sjs-AG140"></td>
            <td t="z" id="sjs-AH140"></td>
            <td t="z" id="sjs-AI140"></td>
            <td t="z" id="sjs-AJ140"></td>
            <td t="z" id="sjs-AK140"></td>
            <td t="z" id="sjs-AL140"></td>
            <td t="z" id="sjs-AM140"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A141" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B141" v="DST/ Ministry of Science and Technology, Vietnam">DST/ Ministry of Science and Technology, Vietnam</td>
            <td t="s" id="sjs-C141" v="INDO-VIETNAMESE PROGRAMME OF COOPERATION
IN SCIENCE &amp; TECHNOLOGY">INDO-VIETNAMESE PROGRAMME OF COOPERATION
              <br>IN SCIENCE &amp; TECHNOLOGY
            </td>
            <td t="s" id="sjs-D141" v="Needs Vietnamese collaborator, themes supported include- Biotechnology applied in health care, pharmaceuticals and agriculture, 
Nanotechnology, Oceanography and Marine Sciences, Earth system sciences like climate change, climate research and disaster management. " xml:space="preserve">Needs Vietnamese collaborator, themes supported include- Biotechnology applied in health care, pharmaceuticals and agriculture,
              <br>Nanotechnology, Oceanography and Marine Sciences, Earth system sciences like climate change, climate research and disaster management.
            </td>
            <td t="s" id="sjs-E141" v="upto Rs. 30 lakhs for exchange visits (airfare, visa fees, medical insurance, local travel and sustenance costs), limited manpower; minor equipments (max of Rs. 5.0 lac); chemicals/ consumables/ accessories etc " xml:space="preserve">upto Rs. 30 lakhs for exchange visits (airfare, visa fees, medical insurance, local travel and sustenance costs), limited manpower; minor equipments (max of Rs. 5.0 lac); chemicals/ consumables/ accessories etc </td>
            <td t="s" id="sjs-F141" v="PhD, permanent appointment in a research institute, junior researhcers can be included in the grant">PhD, permanent appointment in a research institute, junior researhcers can be included in the grant</td>
            <td t="s" id="sjs-G141" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H141" v="2 years (2 visits per year of 10-30 day duration)">2 years (2 visits per year of 10-30 day duration)</td>
            <td t="s" id="sjs-I141" v="http://www.dst.gov.in/whats_new/whats_new13/cop_indo-vietnam.pdf">http://www.dst.gov.in/whats_new/whats_new13/cop_indo-vietnam.pdf</td>
            <td t="z" id="sjs-J141"></td>
            <td t="z" id="sjs-K141"></td>
            <td t="z" id="sjs-L141"></td>
            <td t="z" id="sjs-M141"></td>
            <td t="z" id="sjs-N141"></td>
            <td t="z" id="sjs-O141"></td>
            <td t="z" id="sjs-P141"></td>
            <td t="z" id="sjs-Q141"></td>
            <td t="z" id="sjs-R141"></td>
            <td t="z" id="sjs-S141"></td>
            <td t="z" id="sjs-T141"></td>
            <td t="z" id="sjs-U141"></td>
            <td t="z" id="sjs-V141"></td>
            <td t="z" id="sjs-W141"></td>
            <td t="z" id="sjs-X141"></td>
            <td t="z" id="sjs-Y141"></td>
            <td t="z" id="sjs-Z141"></td>
            <td t="z" id="sjs-AA141"></td>
            <td t="z" id="sjs-AB141"></td>
            <td t="z" id="sjs-AC141"></td>
            <td t="z" id="sjs-AD141"></td>
            <td t="z" id="sjs-AE141"></td>
            <td t="z" id="sjs-AF141"></td>
            <td t="z" id="sjs-AG141"></td>
            <td t="z" id="sjs-AH141"></td>
            <td t="z" id="sjs-AI141"></td>
            <td t="z" id="sjs-AJ141"></td>
            <td t="z" id="sjs-AK141"></td>
            <td t="z" id="sjs-AL141"></td>
            <td t="z" id="sjs-AM141"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A142" v="Research training">Research training</td>
            <td t="s" id="sjs-B142" v="International Brain research Organization (IBRO)">International Brain research Organization (IBRO)</td>
            <td t="s" id="sjs-C142" v="IBRO-APRC Exchange Fellowship">IBRO-APRC Exchange Fellowship</td>
            <td t="s" id="sjs-D142" v="scientific exchange in the Asia-Pacific region , for training in the field of neuroscience">scientific exchange in the Asia-Pacific region , for training in the field of neuroscience</td>
            <td t="s" id="sjs-E142" v="US $ 8500">US $ 8500</td>
            <td t="s" id="sjs-F142" v="senior PhD, postdoc or junior faculty (less than 45 yrs of age)">senior PhD, postdoc or junior faculty (less than 45 yrs of age)</td>
            <td t="s" id="sjs-G142" v="June " xml:space="preserve">June </td>
            <td t="s" id="sjs-H142" v="4-6 months">4-6 months</td>
            <td t="s" id="sjs-I142" v="http://ibro.info/professional-development/funding-programmes/regional-grants/asiapacific-grants/">http://ibro.info/professional-development/funding-programmes/regional-grants/asiapacific-grants/</td>
            <td t="z" id="sjs-J142"></td>
            <td t="z" id="sjs-K142"></td>
            <td t="z" id="sjs-L142"></td>
            <td t="z" id="sjs-M142"></td>
            <td t="z" id="sjs-N142"></td>
            <td t="z" id="sjs-O142"></td>
            <td t="z" id="sjs-P142"></td>
            <td t="z" id="sjs-Q142"></td>
            <td t="z" id="sjs-R142"></td>
            <td t="z" id="sjs-S142"></td>
            <td t="z" id="sjs-T142"></td>
            <td t="z" id="sjs-U142"></td>
            <td t="z" id="sjs-V142"></td>
            <td t="z" id="sjs-W142"></td>
            <td t="z" id="sjs-X142"></td>
            <td t="z" id="sjs-Y142"></td>
            <td t="z" id="sjs-Z142"></td>
            <td t="z" id="sjs-AA142"></td>
            <td t="z" id="sjs-AB142"></td>
            <td t="z" id="sjs-AC142"></td>
            <td t="z" id="sjs-AD142"></td>
            <td t="z" id="sjs-AE142"></td>
            <td t="z" id="sjs-AF142"></td>
            <td t="z" id="sjs-AG142"></td>
            <td t="z" id="sjs-AH142"></td>
            <td t="z" id="sjs-AI142"></td>
            <td t="z" id="sjs-AJ142"></td>
            <td t="z" id="sjs-AK142"></td>
            <td t="z" id="sjs-AL142"></td>
            <td t="z" id="sjs-AM142"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A143" v="Fellowship-Group Leader">Fellowship-Group Leader</td>
            <td t="s" id="sjs-B143" v="Matsumae International Foundation (Japan)">Matsumae International Foundation (Japan)</td>
            <td t="s" id="sjs-C143" v="MIF Research Fellowship">MIF Research Fellowship</td>
            <td t="s" id="sjs-D143" v="Needs to work in Japanese institute">Needs to work in Japanese institute</td>
            <td t="s" id="sjs-E143" v="Stipend, Travel, insurance, relocation and living expenses">Stipend, Travel, insurance, relocation and living expenses</td>
            <td t="s" id="sjs-F143" v="PhD, permanent appointment in a research institute">PhD, permanent appointment in a research institute</td>
            <td t="n" id="sjs-G143" v="42613">31-Aug-16</td>
            <td t="s" id="sjs-H143" v="3-6 months">3-6 months</td>
            <td t="s" id="sjs-I143" v="http://www.mars.dti.ne.jp/~mif/">http://www.mars.dti.ne.jp/~mif/</td>
            <td t="z" id="sjs-J143"></td>
            <td t="z" id="sjs-K143"></td>
            <td t="z" id="sjs-L143"></td>
            <td t="z" id="sjs-M143"></td>
            <td t="z" id="sjs-N143"></td>
            <td t="z" id="sjs-O143"></td>
            <td t="z" id="sjs-P143"></td>
            <td t="z" id="sjs-Q143"></td>
            <td t="z" id="sjs-R143"></td>
            <td t="z" id="sjs-S143"></td>
            <td t="z" id="sjs-T143"></td>
            <td t="z" id="sjs-U143"></td>
            <td t="z" id="sjs-V143"></td>
            <td t="z" id="sjs-W143"></td>
            <td t="z" id="sjs-X143"></td>
            <td t="z" id="sjs-Y143"></td>
            <td t="z" id="sjs-Z143"></td>
            <td t="z" id="sjs-AA143"></td>
            <td t="z" id="sjs-AB143"></td>
            <td t="z" id="sjs-AC143"></td>
            <td t="z" id="sjs-AD143"></td>
            <td t="z" id="sjs-AE143"></td>
            <td t="z" id="sjs-AF143"></td>
            <td t="z" id="sjs-AG143"></td>
            <td t="z" id="sjs-AH143"></td>
            <td t="z" id="sjs-AI143"></td>
            <td t="z" id="sjs-AJ143"></td>
            <td t="z" id="sjs-AK143"></td>
            <td t="z" id="sjs-AL143"></td>
            <td t="z" id="sjs-AM143"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A144" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B144" v="National Council for Science &amp; Technology
(CONACYT) of United Mexican States/ DST">National Council for Science &amp; Technology
              <br>(CONACYT) of United Mexican States/ DST
            </td>
            <td t="s" id="sjs-C144" v="Indo-Mexican
Scientific-Technological Cooperation Programme">Indo-Mexican
              <br>Scientific-Technological Cooperation Programme
            </td>
            <td t="s" id="sjs-D144" v="exchange visits between scientists in India and Mexico">exchange visits between scientists in India and Mexico</td>
            <td t="s" id="sjs-E144" v="travel, insurance, accomodation living expenses">travel, insurance, accomodation living expenses</td>
            <td t="s" id="sjs-F144" v="Needs collaborator in Mexico">Needs collaborator in Mexico</td>
            <td t="s" id="sjs-G144" v="To be Announced " xml:space="preserve">To be Announced </td>
            <td t="s" id="sjs-H144" v="2-3 years">2-3 years</td>
            <td t="s" id="sjs-I144" v="http://www.stic-dst.org/IndoMexicanJointCall%202011.pdf">http://www.stic-dst.org/IndoMexicanJointCall%202011.pdf</td>
            <td t="z" id="sjs-J144"></td>
            <td t="z" id="sjs-K144"></td>
            <td t="z" id="sjs-L144"></td>
            <td t="z" id="sjs-M144"></td>
            <td t="z" id="sjs-N144"></td>
            <td t="z" id="sjs-O144"></td>
            <td t="z" id="sjs-P144"></td>
            <td t="z" id="sjs-Q144"></td>
            <td t="z" id="sjs-R144"></td>
            <td t="z" id="sjs-S144"></td>
            <td t="z" id="sjs-T144"></td>
            <td t="z" id="sjs-U144"></td>
            <td t="z" id="sjs-V144"></td>
            <td t="z" id="sjs-W144"></td>
            <td t="z" id="sjs-X144"></td>
            <td t="z" id="sjs-Y144"></td>
            <td t="z" id="sjs-Z144"></td>
            <td t="z" id="sjs-AA144"></td>
            <td t="z" id="sjs-AB144"></td>
            <td t="z" id="sjs-AC144"></td>
            <td t="z" id="sjs-AD144"></td>
            <td t="z" id="sjs-AE144"></td>
            <td t="z" id="sjs-AF144"></td>
            <td t="z" id="sjs-AG144"></td>
            <td t="z" id="sjs-AH144"></td>
            <td t="z" id="sjs-AI144"></td>
            <td t="z" id="sjs-AJ144"></td>
            <td t="z" id="sjs-AK144"></td>
            <td t="z" id="sjs-AL144"></td>
            <td t="z" id="sjs-AM144"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A145" v="Research">Research</td>
            <td t="s" id="sjs-B145" v="Royal Society, UK">Royal Society, UK</td>
            <td t="s" id="sjs-C145" v="International Exchange scheme">International Exchange scheme</td>
            <td t="s" id="sjs-D145" v="Needs UK collaborator">Needs UK collaborator</td>
            <td t="s" id="sjs-E145" v="£3000-£12,000 with max. £1000-£2000 research expenses depending on duration of travel">£3000-£12,000 with max. £1000-£2000 research expenses depending on duration of travel</td>
            <td t="s" id="sjs-F145" v="Postdoc or holding independent position in research institute/university">Postdoc or holding independent position in research institute/university</td>
            <td t="s" id="sjs-G145" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="s" id="sjs-H145" v="variable from 3months, 1 year or 2 years">variable from 3months, 1 year or 2 years</td>
            <td t="s" id="sjs-I145" v="http://royalsociety.org/grants/schemes/international-exchanges/">http://royalsociety.org/grants/schemes/international-exchanges/</td>
            <td t="z" id="sjs-J145"></td>
            <td t="z" id="sjs-K145"></td>
            <td t="z" id="sjs-L145"></td>
            <td t="z" id="sjs-M145"></td>
            <td t="z" id="sjs-N145"></td>
            <td t="z" id="sjs-O145"></td>
            <td t="z" id="sjs-P145"></td>
            <td t="z" id="sjs-Q145"></td>
            <td t="z" id="sjs-R145"></td>
            <td t="z" id="sjs-S145"></td>
            <td t="z" id="sjs-T145"></td>
            <td t="z" id="sjs-U145"></td>
            <td t="z" id="sjs-V145"></td>
            <td t="z" id="sjs-W145"></td>
            <td t="z" id="sjs-X145"></td>
            <td t="z" id="sjs-Y145"></td>
            <td t="z" id="sjs-Z145"></td>
            <td t="z" id="sjs-AA145"></td>
            <td t="z" id="sjs-AB145"></td>
            <td t="z" id="sjs-AC145"></td>
            <td t="z" id="sjs-AD145"></td>
            <td t="z" id="sjs-AE145"></td>
            <td t="z" id="sjs-AF145"></td>
            <td t="z" id="sjs-AG145"></td>
            <td t="z" id="sjs-AH145"></td>
            <td t="z" id="sjs-AI145"></td>
            <td t="z" id="sjs-AJ145"></td>
            <td t="z" id="sjs-AK145"></td>
            <td t="z" id="sjs-AL145"></td>
            <td t="z" id="sjs-AM145"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A146" v="Travel/collaborative">Travel/collaborative</td>
            <td t="s" id="sjs-B146" v="UGC/UKIERI">UGC/UKIERI</td>
            <td t="s" id="sjs-C146" v="UGC-UKIERI Thematic Partnerships">UGC-UKIERI Thematic Partnerships</td>
            <td t="s" id="sjs-D146" v="Needs UK collaborator,all subjects including  Humanities, Social Sciences, Science and Technology projects supported">Needs UK collaborator,all subjects including Humanities, Social Sciences, Science and Technology projects supported</td>
            <td t="s" id="sjs-E146" v="£60,000 covers travel, visa fees, local accomodation,limited research consumables">£60,000 covers travel, visa fees, local accomodation,limited research consumables</td>
            <td t="s" id="sjs-F146" v="PhD, regular appointment in research institute in india or UK  " xml:space="preserve">PhD, regular appointment in research institute in india or UK </td>
            <td t="s" id="sjs-G146" v="To be confirmed">To be confirmed</td>
            <td t="s" id="sjs-H146" v="2 years (4 visits of 15-89 days/each side/year)">2 years (4 visits of 15-89 days/each side/year)</td>
            <td t="s" id="sjs-I146" v="http://www.ukieri.org/images/xls/UGCUKIERIGUIDELINES2013.doc">http://www.ukieri.org/images/xls/UGCUKIERIGUIDELINES2013.doc</td>
            <td t="z" id="sjs-J146"></td>
            <td t="z" id="sjs-K146"></td>
            <td t="z" id="sjs-L146"></td>
            <td t="z" id="sjs-M146"></td>
            <td t="z" id="sjs-N146"></td>
            <td t="z" id="sjs-O146"></td>
            <td t="z" id="sjs-P146"></td>
            <td t="z" id="sjs-Q146"></td>
            <td t="z" id="sjs-R146"></td>
            <td t="z" id="sjs-S146"></td>
            <td t="z" id="sjs-T146"></td>
            <td t="z" id="sjs-U146"></td>
            <td t="z" id="sjs-V146"></td>
            <td t="z" id="sjs-W146"></td>
            <td t="z" id="sjs-X146"></td>
            <td t="z" id="sjs-Y146"></td>
            <td t="z" id="sjs-Z146"></td>
            <td t="z" id="sjs-AA146"></td>
            <td t="z" id="sjs-AB146"></td>
            <td t="z" id="sjs-AC146"></td>
            <td t="z" id="sjs-AD146"></td>
            <td t="z" id="sjs-AE146"></td>
            <td t="z" id="sjs-AF146"></td>
            <td t="z" id="sjs-AG146"></td>
            <td t="z" id="sjs-AH146"></td>
            <td t="z" id="sjs-AI146"></td>
            <td t="z" id="sjs-AJ146"></td>
            <td t="z" id="sjs-AK146"></td>
            <td t="z" id="sjs-AL146"></td>
            <td t="z" id="sjs-AM146"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A147" v="Fellowship- Group Leader">Fellowship- Group Leader</td>
            <td t="s" id="sjs-B147" v="Utrecht University, Netherlands">Utrecht University, Netherlands</td>
            <td t="s" id="sjs-C147" v="Utrecht University  Visiting Teaching fellowship">Utrecht University Visiting Teaching fellowship</td>
            <td t="s" id="sjs-D147" v="For exchange visits between NCBS and Utrecht University">For exchange visits between NCBS and Utrecht University</td>
            <td t="s" id="sjs-E147" v="Maximum support of € 5000">Maximum support of € 5000</td>
            <td t="s" id="sjs-F147" v="Professors in one of Utrecht University  research focus areas">Professors in one of Utrecht University research focus areas</td>
            <td t="s" id="sjs-G147" v="To be  confirmed">To be confirmed</td>
            <td t="s" id="sjs-H147" v="2 weeks- 1 semester">2 weeks- 1 semester</td>
            <td t="s" id="sjs-I147" v="http://www.uu.nl/SiteCollectionDocuments/Visiting_Fellowship_2013-2014_Application_form.docx">http://www.uu.nl/SiteCollectionDocuments/Visiting_Fellowship_2013-2014_Application_form.docx</td>
            <td t="z" id="sjs-J147"></td>
            <td t="z" id="sjs-K147"></td>
            <td t="z" id="sjs-L147"></td>
            <td t="z" id="sjs-M147"></td>
            <td t="z" id="sjs-N147"></td>
            <td t="z" id="sjs-O147"></td>
            <td t="z" id="sjs-P147"></td>
            <td t="z" id="sjs-Q147"></td>
            <td t="z" id="sjs-R147"></td>
            <td t="z" id="sjs-S147"></td>
            <td t="z" id="sjs-T147"></td>
            <td t="z" id="sjs-U147"></td>
            <td t="z" id="sjs-V147"></td>
            <td t="z" id="sjs-W147"></td>
            <td t="z" id="sjs-X147"></td>
            <td t="z" id="sjs-Y147"></td>
            <td t="z" id="sjs-Z147"></td>
            <td t="z" id="sjs-AA147"></td>
            <td t="z" id="sjs-AB147"></td>
            <td t="z" id="sjs-AC147"></td>
            <td t="z" id="sjs-AD147"></td>
            <td t="z" id="sjs-AE147"></td>
            <td t="z" id="sjs-AF147"></td>
            <td t="z" id="sjs-AG147"></td>
            <td t="z" id="sjs-AH147"></td>
            <td t="z" id="sjs-AI147"></td>
            <td t="z" id="sjs-AJ147"></td>
            <td t="z" id="sjs-AK147"></td>
            <td t="z" id="sjs-AL147"></td>
            <td t="z" id="sjs-AM147"></td>
          </tr>
          <tr>
            <td colspan="2" t="s" id="sjs-A148" v="Organising Meetings/Symposia/Workshops">Organising Meetings/Symposia/Workshops</td>
            <td t="z" id="sjs-C148"></td>
            <td t="z" id="sjs-D148"></td>
            <td t="z" id="sjs-E148"></td>
            <td t="z" id="sjs-F148"></td>
            <td t="z" id="sjs-G148"></td>
            <td t="z" id="sjs-H148"></td>
            <td t="z" id="sjs-I148"></td>
            <td t="z" id="sjs-J148"></td>
            <td t="z" id="sjs-K148"></td>
            <td t="z" id="sjs-L148"></td>
            <td t="z" id="sjs-M148"></td>
            <td t="z" id="sjs-N148"></td>
            <td t="z" id="sjs-O148"></td>
            <td t="z" id="sjs-P148"></td>
            <td t="z" id="sjs-Q148"></td>
            <td t="z" id="sjs-R148"></td>
            <td t="z" id="sjs-S148"></td>
            <td t="z" id="sjs-T148"></td>
            <td t="z" id="sjs-U148"></td>
            <td t="z" id="sjs-V148"></td>
            <td t="z" id="sjs-W148"></td>
            <td t="z" id="sjs-X148"></td>
            <td t="z" id="sjs-Y148"></td>
            <td t="z" id="sjs-Z148"></td>
            <td t="z" id="sjs-AA148"></td>
            <td t="z" id="sjs-AB148"></td>
            <td t="z" id="sjs-AC148"></td>
            <td t="z" id="sjs-AD148"></td>
            <td t="z" id="sjs-AE148"></td>
            <td t="z" id="sjs-AF148"></td>
            <td t="z" id="sjs-AG148"></td>
            <td t="z" id="sjs-AH148"></td>
            <td t="z" id="sjs-AI148"></td>
            <td t="z" id="sjs-AJ148"></td>
            <td t="z" id="sjs-AK148"></td>
            <td t="z" id="sjs-AL148"></td>
            <td t="z" id="sjs-AM148"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A149" v="Collaborative workshops">Collaborative workshops</td>
            <td t="s" id="sjs-B149" v="DBT/DIISTR (Australia)">DBT/DIISTR (Australia)</td>
            <td t="s" id="sjs-C149" v="Indo-Australian Fund for S&amp;T Cooperation in Biotechnology- Collaborative Workshops " xml:space="preserve">Indo-Australian Fund for S&amp;T Cooperation in Biotechnology- Collaborative Workshops </td>
            <td t="s" id="sjs-D149" v="Themes supported in this round include-Biomedical Devices and Implants, Stem Cells, Transgenic Crops and Marker-assisted Breeding, Nutraceuticals and Functional Foods, Bioremediation, Bioenergy and Biofuels, Vaccines/Medical Diagnostics
 " xml:space="preserve">Themes supported in this round include-Biomedical Devices and Implants, Stem Cells, Transgenic Crops and Marker-assisted Breeding, Nutraceuticals and Functional Foods, Bioremediation, Bioenergy and Biofuels, Vaccines/Medical Diagnostics
              <br>
            </td>
            <td t="s" id="sjs-E149" v="Rs. 15,00,000-20,00,000">Rs. 15,00,000-20,00,000</td>
            <td t="s" id="sjs-F149" v="Need Australian collaborator">Need Australian collaborator</td>
            <td t="s" id="sjs-G149" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H149" v="3 years">3 years</td>
            <td t="s" id="sjs-I149" v="http://dbtindia.nic.in/docs/Indo-Australia7thRoundGuidelinesfinal.doc">http://dbtindia.nic.in/docs/Indo-Australia7thRoundGuidelinesfinal.doc</td>
            <td t="z" id="sjs-J149"></td>
            <td t="z" id="sjs-K149"></td>
            <td t="z" id="sjs-L149"></td>
            <td t="z" id="sjs-M149"></td>
            <td t="z" id="sjs-N149"></td>
            <td t="z" id="sjs-O149"></td>
            <td t="z" id="sjs-P149"></td>
            <td t="z" id="sjs-Q149"></td>
            <td t="z" id="sjs-R149"></td>
            <td t="z" id="sjs-S149"></td>
            <td t="z" id="sjs-T149"></td>
            <td t="z" id="sjs-U149"></td>
            <td t="z" id="sjs-V149"></td>
            <td t="z" id="sjs-W149"></td>
            <td t="z" id="sjs-X149"></td>
            <td t="z" id="sjs-Y149"></td>
            <td t="z" id="sjs-Z149"></td>
            <td t="z" id="sjs-AA149"></td>
            <td t="z" id="sjs-AB149"></td>
            <td t="z" id="sjs-AC149"></td>
            <td t="z" id="sjs-AD149"></td>
            <td t="z" id="sjs-AE149"></td>
            <td t="z" id="sjs-AF149"></td>
            <td t="z" id="sjs-AG149"></td>
            <td t="z" id="sjs-AH149"></td>
            <td t="z" id="sjs-AI149"></td>
            <td t="z" id="sjs-AJ149"></td>
            <td t="z" id="sjs-AK149"></td>
            <td t="z" id="sjs-AL149"></td>
            <td t="z" id="sjs-AM149"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A150" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B150" v="DBT">DBT</td>
            <td t="s" id="sjs-C150" v="Financial Assistance for organising Conference/Seminar/Symposium/Workshops">Financial Assistance for organising Conference/Seminar/Symposium/Workshops</td>
            <td t="z" id="sjs-D150"></td>
            <td t="z" id="sjs-E150"></td>
            <td t="z" id="sjs-F150"></td>
            <td t="z" id="sjs-G150"></td>
            <td t="z" id="sjs-H150"></td>
            <td t="s" id="sjs-I150" v="http://dbtctep.gov.in/">http://dbtctep.gov.in/</td>
            <td t="z" id="sjs-J150"></td>
            <td t="z" id="sjs-K150"></td>
            <td t="z" id="sjs-L150"></td>
            <td t="z" id="sjs-M150"></td>
            <td t="z" id="sjs-N150"></td>
            <td t="z" id="sjs-O150"></td>
            <td t="z" id="sjs-P150"></td>
            <td t="z" id="sjs-Q150"></td>
            <td t="z" id="sjs-R150"></td>
            <td t="z" id="sjs-S150"></td>
            <td t="z" id="sjs-T150"></td>
            <td t="z" id="sjs-U150"></td>
            <td t="z" id="sjs-V150"></td>
            <td t="z" id="sjs-W150"></td>
            <td t="z" id="sjs-X150"></td>
            <td t="z" id="sjs-Y150"></td>
            <td t="z" id="sjs-Z150"></td>
            <td t="z" id="sjs-AA150"></td>
            <td t="z" id="sjs-AB150"></td>
            <td t="z" id="sjs-AC150"></td>
            <td t="z" id="sjs-AD150"></td>
            <td t="z" id="sjs-AE150"></td>
            <td t="z" id="sjs-AF150"></td>
            <td t="z" id="sjs-AG150"></td>
            <td t="z" id="sjs-AH150"></td>
            <td t="z" id="sjs-AI150"></td>
            <td t="z" id="sjs-AJ150"></td>
            <td t="z" id="sjs-AK150"></td>
            <td t="z" id="sjs-AL150"></td>
            <td t="z" id="sjs-AM150"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A151" v="Meetings/Workshops">Meetings/Workshops</td>
            <td t="s" id="sjs-B151" v="DBT">DBT</td>
            <td t="s" id="sjs-C151" v="Neuroinformatics and Computational Neuroscience Education (INCNE)">Neuroinformatics and Computational Neuroscience Education (INCNE)</td>
            <td t="s" id="sjs-D151" v="To organise Indian workshops and short courses in the area of Neuroinformatics and Computational Neuroscience. " xml:space="preserve">To organise Indian workshops and short courses in the area of Neuroinformatics and Computational Neuroscience. </td>
            <td t="s" id="sjs-E151" v="Travel, accomodation, meals and Halls and equipment rentals">Travel, accomodation, meals and Halls and equipment rentals</td>
            <td t="z" id="sjs-F151"></td>
            <td t="s" id="sjs-G151" v="Rolling programme, applications reviewed twice a year">Rolling programme, applications reviewed twice a year</td>
            <td t="z" id="sjs-H151"></td>
            <td t="s" id="sjs-I151" v="http://innni.ncbs.res.in/node/add/workshop-support">http://innni.ncbs.res.in/node/add/workshop-support</td>
            <td t="z" id="sjs-J151"></td>
            <td t="z" id="sjs-K151"></td>
            <td t="z" id="sjs-L151"></td>
            <td t="z" id="sjs-M151"></td>
            <td t="z" id="sjs-N151"></td>
            <td t="z" id="sjs-O151"></td>
            <td t="z" id="sjs-P151"></td>
            <td t="z" id="sjs-Q151"></td>
            <td t="z" id="sjs-R151"></td>
            <td t="z" id="sjs-S151"></td>
            <td t="z" id="sjs-T151"></td>
            <td t="z" id="sjs-U151"></td>
            <td t="z" id="sjs-V151"></td>
            <td t="z" id="sjs-W151"></td>
            <td t="z" id="sjs-X151"></td>
            <td t="z" id="sjs-Y151"></td>
            <td t="z" id="sjs-Z151"></td>
            <td t="z" id="sjs-AA151"></td>
            <td t="z" id="sjs-AB151"></td>
            <td t="z" id="sjs-AC151"></td>
            <td t="z" id="sjs-AD151"></td>
            <td t="z" id="sjs-AE151"></td>
            <td t="z" id="sjs-AF151"></td>
            <td t="z" id="sjs-AG151"></td>
            <td t="z" id="sjs-AH151"></td>
            <td t="z" id="sjs-AI151"></td>
            <td t="z" id="sjs-AJ151"></td>
            <td t="z" id="sjs-AK151"></td>
            <td t="z" id="sjs-AL151"></td>
            <td t="z" id="sjs-AM151"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A152" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B152" v="DST">DST</td>
            <td t="s" id="sjs-C152" v="Financial Assistance for organising Conference/Seminar/Symposium/Workshops">Financial Assistance for organising Conference/Seminar/Symposium/Workshops</td>
            <td t="z" id="sjs-D152"></td>
            <td t="s" id="sjs-E152" v="Partial assistance for organising meetings at national or international level">Partial assistance for organising meetings at national or international level</td>
            <td t="z" id="sjs-F152"></td>
            <td t="z" id="sjs-G152"></td>
            <td t="z" id="sjs-H152"></td>
            <td t="s" id="sjs-I152" v="http://serb.gov.in/apbs.php">http://serb.gov.in/apbs.php</td>
            <td t="z" id="sjs-J152"></td>
            <td t="z" id="sjs-K152"></td>
            <td t="z" id="sjs-L152"></td>
            <td t="z" id="sjs-M152"></td>
            <td t="z" id="sjs-N152"></td>
            <td t="z" id="sjs-O152"></td>
            <td t="z" id="sjs-P152"></td>
            <td t="z" id="sjs-Q152"></td>
            <td t="z" id="sjs-R152"></td>
            <td t="z" id="sjs-S152"></td>
            <td t="z" id="sjs-T152"></td>
            <td t="z" id="sjs-U152"></td>
            <td t="z" id="sjs-V152"></td>
            <td t="z" id="sjs-W152"></td>
            <td t="z" id="sjs-X152"></td>
            <td t="z" id="sjs-Y152"></td>
            <td t="z" id="sjs-Z152"></td>
            <td t="z" id="sjs-AA152"></td>
            <td t="z" id="sjs-AB152"></td>
            <td t="z" id="sjs-AC152"></td>
            <td t="z" id="sjs-AD152"></td>
            <td t="z" id="sjs-AE152"></td>
            <td t="z" id="sjs-AF152"></td>
            <td t="z" id="sjs-AG152"></td>
            <td t="z" id="sjs-AH152"></td>
            <td t="z" id="sjs-AI152"></td>
            <td t="z" id="sjs-AJ152"></td>
            <td t="z" id="sjs-AK152"></td>
            <td t="z" id="sjs-AL152"></td>
            <td t="z" id="sjs-AM152"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A153" v="Collaborative workshops">Collaborative workshops</td>
            <td t="s" id="sjs-B153" v="DST/ DIISR (australia)">DST/ DIISR (australia)</td>
            <td t="s" id="sjs-C153" v="AUSTRALIA-INDIA STRATEGIC RESEARCH FUND (AISRF)-Collaborative Workshops">AUSTRALIA-INDIA STRATEGIC RESEARCH FUND (AISRF)-Collaborative Workshops</td>
            <td t="s" id="sjs-D153" v="Needs australian collab. Themes supported include- Agricultural Research, Astronomy and Astrophysics, Environment Sciences (including climate change research), Material science (including nanotechnology), Renewable Energy, Marine Sciences, Earth Sciences " xml:space="preserve">Needs australian collab. Themes supported include- Agricultural Research, Astronomy and Astrophysics, Environment Sciences (including climate change research), Material science (including nanotechnology), Renewable Energy, Marine Sciences, Earth Sciences </td>
            <td t="s" id="sjs-E153" v="Travel, accomodation, JRF/RA, consumables, minor equipment, work-shop specific funding for bilateral workshops">Travel, accomodation, JRF/RA, consumables, minor equipment, work-shop specific funding for bilateral workshops</td>
            <td t="s" id="sjs-F153" v="Independent position in research institute/Univ">Independent position in research institute/Univ</td>
            <td t="s" id="sjs-G153" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H153" v="3 years">3 years</td>
            <td t="s" id="sjs-I153" v="http://www.dst.gov.in/whats_new/whats_new13/cop_indo-australia.pdf">http://www.dst.gov.in/whats_new/whats_new13/cop_indo-australia.pdf</td>
            <td t="z" id="sjs-J153"></td>
            <td t="z" id="sjs-K153"></td>
            <td t="z" id="sjs-L153"></td>
            <td t="z" id="sjs-M153"></td>
            <td t="z" id="sjs-N153"></td>
            <td t="z" id="sjs-O153"></td>
            <td t="z" id="sjs-P153"></td>
            <td t="z" id="sjs-Q153"></td>
            <td t="z" id="sjs-R153"></td>
            <td t="z" id="sjs-S153"></td>
            <td t="z" id="sjs-T153"></td>
            <td t="z" id="sjs-U153"></td>
            <td t="z" id="sjs-V153"></td>
            <td t="z" id="sjs-W153"></td>
            <td t="z" id="sjs-X153"></td>
            <td t="z" id="sjs-Y153"></td>
            <td t="z" id="sjs-Z153"></td>
            <td t="z" id="sjs-AA153"></td>
            <td t="z" id="sjs-AB153"></td>
            <td t="z" id="sjs-AC153"></td>
            <td t="z" id="sjs-AD153"></td>
            <td t="z" id="sjs-AE153"></td>
            <td t="z" id="sjs-AF153"></td>
            <td t="z" id="sjs-AG153"></td>
            <td t="z" id="sjs-AH153"></td>
            <td t="z" id="sjs-AI153"></td>
            <td t="z" id="sjs-AJ153"></td>
            <td t="z" id="sjs-AK153"></td>
            <td t="z" id="sjs-AL153"></td>
            <td t="z" id="sjs-AM153"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A154" v="Seminars/workshops">Seminars/workshops</td>
            <td t="s" id="sjs-B154" v="CEFIPRA">CEFIPRA</td>
            <td t="s" id="sjs-C154" v="CEFIPRA Seminars/Workshops/Training Schools">CEFIPRA Seminars/Workshops/Training Schools</td>
            <td t="s" id="sjs-D154" v="To fund seminars/workshops in topics of current relevance and interest to both India and France in the areas of Science &amp;Technology.">To fund seminars/workshops in topics of current relevance and interest to both India and France in the areas of Science &amp;Technology.</td>
            <td t="s" id="sjs-E154" v="Funds for domestic and international travel and logistics, arrangements relevant to the event. Upto ~Rs. 20 lakhs.">Funds for domestic and international travel and logistics, arrangements relevant to the event. Upto ~Rs. 20 lakhs.</td>
            <td t="s" id="sjs-F154" v="Seminar proposal must be jointly submitted by a French and an Indian coordinator, Should be held be either in India or in France, Can have maximum 25-30 participants from the host country and 10-15 participants from the other country.">Seminar proposal must be jointly submitted by a French and an Indian coordinator, Should be held be either in India or in France, Can have maximum 25-30 participants from the host country and 10-15 participants from the other country.</td>
            <td t="s" id="sjs-G154" v="Rolling Scheme">Rolling Scheme</td>
            <td t="z" id="sjs-H154"></td>
            <td t="s" id="sjs-I154" v="http://www.cefipra.org/section.aspx?catid=881&amp;langid=1">http://www.cefipra.org/section.aspx?catid=881&amp;langid=1</td>
            <td t="z" id="sjs-J154"></td>
            <td t="z" id="sjs-K154"></td>
            <td t="z" id="sjs-L154"></td>
            <td t="z" id="sjs-M154"></td>
            <td t="z" id="sjs-N154"></td>
            <td t="z" id="sjs-O154"></td>
            <td t="z" id="sjs-P154"></td>
            <td t="z" id="sjs-Q154"></td>
            <td t="z" id="sjs-R154"></td>
            <td t="z" id="sjs-S154"></td>
            <td t="z" id="sjs-T154"></td>
            <td t="z" id="sjs-U154"></td>
            <td t="z" id="sjs-V154"></td>
            <td t="z" id="sjs-W154"></td>
            <td t="z" id="sjs-X154"></td>
            <td t="z" id="sjs-Y154"></td>
            <td t="z" id="sjs-Z154"></td>
            <td t="z" id="sjs-AA154"></td>
            <td t="z" id="sjs-AB154"></td>
            <td t="z" id="sjs-AC154"></td>
            <td t="z" id="sjs-AD154"></td>
            <td t="z" id="sjs-AE154"></td>
            <td t="z" id="sjs-AF154"></td>
            <td t="z" id="sjs-AG154"></td>
            <td t="z" id="sjs-AH154"></td>
            <td t="z" id="sjs-AI154"></td>
            <td t="z" id="sjs-AJ154"></td>
            <td t="z" id="sjs-AK154"></td>
            <td t="z" id="sjs-AL154"></td>
            <td t="z" id="sjs-AM154"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A155" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B155" v="CSIR">CSIR</td>
            <td t="s" id="sjs-C155" v="Financial Assistance for organising Conference/Seminar/Symposium/Workshops">Financial Assistance for organising Conference/Seminar/Symposium/Workshops</td>
            <td t="z" id="sjs-D155"></td>
            <td t="s" id="sjs-E155" v="For organising meetings at national level">For organising meetings at national level</td>
            <td t="z" id="sjs-F155"></td>
            <td t="s" id="sjs-G155" v="3 months before the event">3 months before the event</td>
            <td t="z" id="sjs-H155"></td>
            <td t="s" id="sjs-I155" v="http://csirhrdg.res.in/sy.htm">http://csirhrdg.res.in/sy.htm</td>
            <td t="z" id="sjs-J155"></td>
            <td t="z" id="sjs-K155"></td>
            <td t="z" id="sjs-L155"></td>
            <td t="z" id="sjs-M155"></td>
            <td t="z" id="sjs-N155"></td>
            <td t="z" id="sjs-O155"></td>
            <td t="z" id="sjs-P155"></td>
            <td t="z" id="sjs-Q155"></td>
            <td t="z" id="sjs-R155"></td>
            <td t="z" id="sjs-S155"></td>
            <td t="z" id="sjs-T155"></td>
            <td t="z" id="sjs-U155"></td>
            <td t="z" id="sjs-V155"></td>
            <td t="z" id="sjs-W155"></td>
            <td t="z" id="sjs-X155"></td>
            <td t="z" id="sjs-Y155"></td>
            <td t="z" id="sjs-Z155"></td>
            <td t="z" id="sjs-AA155"></td>
            <td t="z" id="sjs-AB155"></td>
            <td t="z" id="sjs-AC155"></td>
            <td t="z" id="sjs-AD155"></td>
            <td t="z" id="sjs-AE155"></td>
            <td t="z" id="sjs-AF155"></td>
            <td t="z" id="sjs-AG155"></td>
            <td t="z" id="sjs-AH155"></td>
            <td t="z" id="sjs-AI155"></td>
            <td t="z" id="sjs-AJ155"></td>
            <td t="z" id="sjs-AK155"></td>
            <td t="z" id="sjs-AL155"></td>
            <td t="z" id="sjs-AM155"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A156" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B156" v="Company of Biologists">Company of Biologists</td>
            <td t="s" id="sjs-C156" v="Scientific Meetings grants">Scientific Meetings grants</td>
            <td t="s" id="sjs-D156" v="Meetings need to be in areas covered by the 4 journals of  the Company of Biologists">Meetings need to be in areas covered by the 4 journals of the Company of Biologists</td>
            <td t="s" id="sjs-E156" v="maximum upto £ 6000 for support of young scientists, funding for plenary or keynote speakers attending meetings">maximum upto £ 6000 for support of young scientists, funding for plenary or keynote speakers attending meetings</td>
            <td t="s" id="sjs-F156" v="Organiser must have a PhD and must be in the organising group for the meeting. No nationality or geographic restrictions but preference given to events where organisers have sought maximal feasible diversity in speakers in terms of geography, gender and age.">Organiser must have a PhD and must be in the organising group for the meeting. No nationality or geographic restrictions but preference given to events where organisers have sought maximal feasible diversity in speakers in terms of geography, gender and age.</td>
            <td t="s" id="sjs-G156" v="14 sep, 2016">14 sep, 2016</td>
            <td t="z" id="sjs-H156"></td>
            <td t="s" id="sjs-I156" v="http://www.biologists.com/grants/">http://www.biologists.com/grants/</td>
            <td t="z" id="sjs-J156"></td>
            <td t="z" id="sjs-K156"></td>
            <td t="z" id="sjs-L156"></td>
            <td t="z" id="sjs-M156"></td>
            <td t="z" id="sjs-N156"></td>
            <td t="z" id="sjs-O156"></td>
            <td t="z" id="sjs-P156"></td>
            <td t="z" id="sjs-Q156"></td>
            <td t="z" id="sjs-R156"></td>
            <td t="z" id="sjs-S156"></td>
            <td t="z" id="sjs-T156"></td>
            <td t="z" id="sjs-U156"></td>
            <td t="z" id="sjs-V156"></td>
            <td t="z" id="sjs-W156"></td>
            <td t="z" id="sjs-X156"></td>
            <td t="z" id="sjs-Y156"></td>
            <td t="z" id="sjs-Z156"></td>
            <td t="z" id="sjs-AA156"></td>
            <td t="z" id="sjs-AB156"></td>
            <td t="z" id="sjs-AC156"></td>
            <td t="z" id="sjs-AD156"></td>
            <td t="z" id="sjs-AE156"></td>
            <td t="z" id="sjs-AF156"></td>
            <td t="z" id="sjs-AG156"></td>
            <td t="z" id="sjs-AH156"></td>
            <td t="z" id="sjs-AI156"></td>
            <td t="z" id="sjs-AJ156"></td>
            <td t="z" id="sjs-AK156"></td>
            <td t="z" id="sjs-AL156"></td>
            <td t="z" id="sjs-AM156"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A157" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B157" v="Company of Biologists">Company of Biologists</td>
            <td t="s" id="sjs-C157" v="Small Meetings grants">Small Meetings grants</td>
            <td t="s" id="sjs-D157" v="For organising small local meetings in the areas covered by the 4 journals of the Company of Biologists">For organising small local meetings in the areas covered by the 4 journals of the Company of Biologists</td>
            <td t="s" id="sjs-E157" v="Max funding of upto £ 400  " xml:space="preserve">Max funding of upto £ 400 </td>
            <td t="s" id="sjs-F157" v="Organiser must have a PhD and must be in the organising group for the meeting. " xml:space="preserve">Organiser must have a PhD and must be in the organising group for the meeting. </td>
            <td t="s" id="sjs-G157" v="To be Announced">To be Announced</td>
            <td t="z" id="sjs-H157"></td>
            <td t="s" id="sjs-I157" v="http://www.biologists.com/grants/">http://www.biologists.com/grants/</td>
            <td t="z" id="sjs-J157"></td>
            <td t="z" id="sjs-K157"></td>
            <td t="z" id="sjs-L157"></td>
            <td t="z" id="sjs-M157"></td>
            <td t="z" id="sjs-N157"></td>
            <td t="z" id="sjs-O157"></td>
            <td t="z" id="sjs-P157"></td>
            <td t="z" id="sjs-Q157"></td>
            <td t="z" id="sjs-R157"></td>
            <td t="z" id="sjs-S157"></td>
            <td t="z" id="sjs-T157"></td>
            <td t="z" id="sjs-U157"></td>
            <td t="z" id="sjs-V157"></td>
            <td t="z" id="sjs-W157"></td>
            <td t="z" id="sjs-X157"></td>
            <td t="z" id="sjs-Y157"></td>
            <td t="z" id="sjs-Z157"></td>
            <td t="z" id="sjs-AA157"></td>
            <td t="z" id="sjs-AB157"></td>
            <td t="z" id="sjs-AC157"></td>
            <td t="z" id="sjs-AD157"></td>
            <td t="z" id="sjs-AE157"></td>
            <td t="z" id="sjs-AF157"></td>
            <td t="z" id="sjs-AG157"></td>
            <td t="z" id="sjs-AH157"></td>
            <td t="z" id="sjs-AI157"></td>
            <td t="z" id="sjs-AJ157"></td>
            <td t="z" id="sjs-AK157"></td>
            <td t="z" id="sjs-AL157"></td>
            <td t="z" id="sjs-AM157"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A158" v="Meetings/symposia/workshops">Meetings/symposia/workshops</td>
            <td t="s" id="sjs-B158" v="Indo-French Centre for the Promotion of Advance Research (CEFIPRA)">Indo-French Centre for the Promotion of Advance Research (CEFIPRA)</td>
            <td t="s" id="sjs-C158" v="Grant for organizing Seminars and Workshops">Grant for organizing Seminars and Workshops</td>
            <td t="s" id="sjs-D158" v="seminars/workshops in topics of current relevance and interest to both India and France">seminars/workshops in topics of current relevance and interest to both India and France</td>
            <td t="z" id="sjs-E158"></td>
            <td t="s" id="sjs-F158" v="Needs French collaborator">Needs French collaborator</td>
            <td t="s" id="sjs-G158" v="1-Apr and 1-Oct every year">1-Apr and 1-Oct every year</td>
            <td t="z" id="sjs-H158"></td>
            <td t="s" id="sjs-I158" v="http://www.cefipra.org/section.aspx?catid=831&amp;langid=1">http://www.cefipra.org/section.aspx?catid=831&amp;langid=1</td>
            <td t="z" id="sjs-J158"></td>
            <td t="z" id="sjs-K158"></td>
            <td t="z" id="sjs-L158"></td>
            <td t="z" id="sjs-M158"></td>
            <td t="z" id="sjs-N158"></td>
            <td t="z" id="sjs-O158"></td>
            <td t="z" id="sjs-P158"></td>
            <td t="z" id="sjs-Q158"></td>
            <td t="z" id="sjs-R158"></td>
            <td t="z" id="sjs-S158"></td>
            <td t="z" id="sjs-T158"></td>
            <td t="z" id="sjs-U158"></td>
            <td t="z" id="sjs-V158"></td>
            <td t="z" id="sjs-W158"></td>
            <td t="z" id="sjs-X158"></td>
            <td t="z" id="sjs-Y158"></td>
            <td t="z" id="sjs-Z158"></td>
            <td t="z" id="sjs-AA158"></td>
            <td t="z" id="sjs-AB158"></td>
            <td t="z" id="sjs-AC158"></td>
            <td t="z" id="sjs-AD158"></td>
            <td t="z" id="sjs-AE158"></td>
            <td t="z" id="sjs-AF158"></td>
            <td t="z" id="sjs-AG158"></td>
            <td t="z" id="sjs-AH158"></td>
            <td t="z" id="sjs-AI158"></td>
            <td t="z" id="sjs-AJ158"></td>
            <td t="z" id="sjs-AK158"></td>
            <td t="z" id="sjs-AL158"></td>
            <td t="z" id="sjs-AM158"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A159" v="Multiple">Multiple</td>
            <td t="s" id="sjs-B159" v="DBT/ ISTPCanada">DBT/ ISTPCanada</td>
            <td t="s" id="sjs-C159" v="Canada - India S&amp; T Cooperation, Proposal for Partnership Development activities (PDAs)">Canada - India S&amp; T Cooperation, Proposal for Partnership Development activities (PDAs)</td>
            <td t="s" id="sjs-D159" v="For organising bilateral meetings and other joint initiatives">For organising bilateral meetings and other joint initiatives</td>
            <td t="s" id="sjs-E159" v="CDN$25000">CDN$25000</td>
            <td t="s" id="sjs-F159" v="Needs Canadian Collaborator">Needs Canadian Collaborator</td>
            <td t="s" id="sjs-G159" v="Rolling Programme. Results announced within 12-18 weeks">Rolling Programme. Results announced within 12-18 weeks</td>
            <td t="z" id="sjs-H159"></td>
            <td t="s" id="sjs-I159" v="http://www.istpcanada.ca/ProductsServices/IndiaProgram/IndiaPDA/index.html">http://www.istpcanada.ca/ProductsServices/IndiaProgram/IndiaPDA/index.html</td>
            <td t="z" id="sjs-J159"></td>
            <td t="z" id="sjs-K159"></td>
            <td t="z" id="sjs-L159"></td>
            <td t="z" id="sjs-M159"></td>
            <td t="z" id="sjs-N159"></td>
            <td t="z" id="sjs-O159"></td>
            <td t="z" id="sjs-P159"></td>
            <td t="z" id="sjs-Q159"></td>
            <td t="z" id="sjs-R159"></td>
            <td t="z" id="sjs-S159"></td>
            <td t="z" id="sjs-T159"></td>
            <td t="z" id="sjs-U159"></td>
            <td t="z" id="sjs-V159"></td>
            <td t="z" id="sjs-W159"></td>
            <td t="z" id="sjs-X159"></td>
            <td t="z" id="sjs-Y159"></td>
            <td t="z" id="sjs-Z159"></td>
            <td t="z" id="sjs-AA159"></td>
            <td t="z" id="sjs-AB159"></td>
            <td t="z" id="sjs-AC159"></td>
            <td t="z" id="sjs-AD159"></td>
            <td t="z" id="sjs-AE159"></td>
            <td t="z" id="sjs-AF159"></td>
            <td t="z" id="sjs-AG159"></td>
            <td t="z" id="sjs-AH159"></td>
            <td t="z" id="sjs-AI159"></td>
            <td t="z" id="sjs-AJ159"></td>
            <td t="z" id="sjs-AK159"></td>
            <td t="z" id="sjs-AL159"></td>
            <td t="z" id="sjs-AM159"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A160" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B160" v="DST/Royal Society, UK">DST/Royal Society, UK</td>
            <td t="s" id="sjs-C160" v="India-UK Scientific Seminars">India-UK Scientific Seminars</td>
            <td t="s" id="sjs-D160" v="For organising small bilateral meetings in India or UK (3 days, for upto 20 participants)">For organising small bilateral meetings in India or UK (3 days, for upto 20 participants)</td>
            <td t="s" id="sjs-E160" v="£ 12000, sending side funds international travel and hosting side funds local travel, accomodation, and other direct event costs">£ 12000, sending side funds international travel and hosting side funds local travel, accomodation, and other direct event costs</td>
            <td t="s" id="sjs-F160" v="PhD with regular appointment at a research institute in India or UK">PhD with regular appointment at a research institute in India or UK</td>
            <td t="s" id="sjs-G160" v="To be announced " xml:space="preserve">To be announced </td>
            <td t="z" id="sjs-H160"></td>
            <td t="s" id="sjs-I160" v="http://www.dst.gov.in/whats_new/whats_new14/COP_Scientific-Seminar.pdf">http://www.dst.gov.in/whats_new/whats_new14/COP_Scientific-Seminar.pdf</td>
            <td t="z" id="sjs-J160"></td>
            <td t="z" id="sjs-K160"></td>
            <td t="z" id="sjs-L160"></td>
            <td t="z" id="sjs-M160"></td>
            <td t="z" id="sjs-N160"></td>
            <td t="z" id="sjs-O160"></td>
            <td t="z" id="sjs-P160"></td>
            <td t="z" id="sjs-Q160"></td>
            <td t="z" id="sjs-R160"></td>
            <td t="z" id="sjs-S160"></td>
            <td t="z" id="sjs-T160"></td>
            <td t="z" id="sjs-U160"></td>
            <td t="z" id="sjs-V160"></td>
            <td t="z" id="sjs-W160"></td>
            <td t="z" id="sjs-X160"></td>
            <td t="z" id="sjs-Y160"></td>
            <td t="z" id="sjs-Z160"></td>
            <td t="z" id="sjs-AA160"></td>
            <td t="z" id="sjs-AB160"></td>
            <td t="z" id="sjs-AC160"></td>
            <td t="z" id="sjs-AD160"></td>
            <td t="z" id="sjs-AE160"></td>
            <td t="z" id="sjs-AF160"></td>
            <td t="z" id="sjs-AG160"></td>
            <td t="z" id="sjs-AH160"></td>
            <td t="z" id="sjs-AI160"></td>
            <td t="z" id="sjs-AJ160"></td>
            <td t="z" id="sjs-AK160"></td>
            <td t="z" id="sjs-AL160"></td>
            <td t="z" id="sjs-AM160"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A161" v="Meetings/Workshops">Meetings/Workshops</td>
            <td t="s" id="sjs-B161" v="EMBO">EMBO</td>
            <td t="s" id="sjs-C161" v="EMBO Courses and Workshops program">EMBO Courses and Workshops program</td>
            <td t="s" id="sjs-D161" v="Funds conferences, workshops, practical courses and symposia that promote collaborations and exchange in the latest life science advances.Funding priority is given to events held in an EMBC Member State or cooperating country">Funds conferences, workshops, practical courses and symposia that promote collaborations and exchange in the latest life science advances.Funding priority is given to events held in an EMBC Member State or cooperating country</td>
            <td t="s" id="sjs-E161" v="€30,000 funding per event, access to website &amp; poster design services and registration system provided by EMBO">€30,000 funding per event, access to website &amp; poster design services and registration system provided by EMBO</td>
            <td t="s" id="sjs-F161" v="Scientists in regular employment">Scientists in regular employment</td>
            <td t="s" id="sjs-G161" v="1 March and 1 August">1 March and 1 August</td>
            <td t="z" id="sjs-H161"></td>
            <td t="s" id="sjs-I161" v="http://newsletters.embo.org/news/events_call_to_organizers/june2013/index.html?goback=.gde_4172799_member_251868238">http://newsletters.embo.org/news/events_call_to_organizers/june2013/index.html?goback=.gde_4172799_member_251868238</td>
            <td t="z" id="sjs-J161"></td>
            <td t="z" id="sjs-K161"></td>
            <td t="z" id="sjs-L161"></td>
            <td t="z" id="sjs-M161"></td>
            <td t="z" id="sjs-N161"></td>
            <td t="z" id="sjs-O161"></td>
            <td t="z" id="sjs-P161"></td>
            <td t="z" id="sjs-Q161"></td>
            <td t="z" id="sjs-R161"></td>
            <td t="z" id="sjs-S161"></td>
            <td t="z" id="sjs-T161"></td>
            <td t="z" id="sjs-U161"></td>
            <td t="z" id="sjs-V161"></td>
            <td t="z" id="sjs-W161"></td>
            <td t="z" id="sjs-X161"></td>
            <td t="z" id="sjs-Y161"></td>
            <td t="z" id="sjs-Z161"></td>
            <td t="z" id="sjs-AA161"></td>
            <td t="z" id="sjs-AB161"></td>
            <td t="z" id="sjs-AC161"></td>
            <td t="z" id="sjs-AD161"></td>
            <td t="z" id="sjs-AE161"></td>
            <td t="z" id="sjs-AF161"></td>
            <td t="z" id="sjs-AG161"></td>
            <td t="z" id="sjs-AH161"></td>
            <td t="z" id="sjs-AI161"></td>
            <td t="z" id="sjs-AJ161"></td>
            <td t="z" id="sjs-AK161"></td>
            <td t="z" id="sjs-AL161"></td>
            <td t="z" id="sjs-AM161"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A162" v="Meetings/symposia/workshops">Meetings/symposia/workshops</td>
            <td t="s" id="sjs-B162" v="Indo-US Science and Technology Forum " xml:space="preserve">Indo-US Science and Technology Forum </td>
            <td t="s" id="sjs-C162" v="Indo-US  Bilateral Workshops/ Symposia/ Conferences">Indo-US Bilateral Workshops/ Symposia/ Conferences</td>
            <td t="z" id="sjs-D162"></td>
            <td t="s" id="sjs-E162" v="Travel, accomodation, events costs (typically not more than 50 partcipants), other associated costs">Travel, accomodation, events costs (typically not more than 50 partcipants), other associated costs</td>
            <td t="s" id="sjs-F162" v="Qualified scientist from all science disciplines working at Indian and American institutions">Qualified scientist from all science disciplines working at Indian and American institutions</td>
            <td t="s" id="sjs-G162" v="31st august, 2016">31st august, 2016</td>
            <td t="z" id="sjs-H162"></td>
            <td t="s" id="sjs-I162" v="http://www.iusstf.org/story/53-17-Bilateral-Workshop--Symposium--Conference.html">http://www.iusstf.org/story/53-17-Bilateral-Workshop--Symposium--Conference.html</td>
            <td t="z" id="sjs-J162"></td>
            <td t="z" id="sjs-K162"></td>
            <td t="z" id="sjs-L162"></td>
            <td t="z" id="sjs-M162"></td>
            <td t="z" id="sjs-N162"></td>
            <td t="z" id="sjs-O162"></td>
            <td t="z" id="sjs-P162"></td>
            <td t="z" id="sjs-Q162"></td>
            <td t="z" id="sjs-R162"></td>
            <td t="z" id="sjs-S162"></td>
            <td t="z" id="sjs-T162"></td>
            <td t="z" id="sjs-U162"></td>
            <td t="z" id="sjs-V162"></td>
            <td t="z" id="sjs-W162"></td>
            <td t="z" id="sjs-X162"></td>
            <td t="z" id="sjs-Y162"></td>
            <td t="z" id="sjs-Z162"></td>
            <td t="z" id="sjs-AA162"></td>
            <td t="z" id="sjs-AB162"></td>
            <td t="z" id="sjs-AC162"></td>
            <td t="z" id="sjs-AD162"></td>
            <td t="z" id="sjs-AE162"></td>
            <td t="z" id="sjs-AF162"></td>
            <td t="z" id="sjs-AG162"></td>
            <td t="z" id="sjs-AH162"></td>
            <td t="z" id="sjs-AI162"></td>
            <td t="z" id="sjs-AJ162"></td>
            <td t="z" id="sjs-AK162"></td>
            <td t="z" id="sjs-AL162"></td>
            <td t="z" id="sjs-AM162"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A163" v="Meetings/symposia/workshops">Meetings/symposia/workshops</td>
            <td t="s" id="sjs-B163" v="Lady Tata Memorial Trust">Lady Tata Memorial Trust</td>
            <td t="s" id="sjs-C163" v="Meetings/Symposia/Workshops in the area of medical research">Meetings/Symposia/Workshops in the area of medical research</td>
            <td t="z" id="sjs-D163"></td>
            <td t="z" id="sjs-E163"></td>
            <td t="z" id="sjs-F163"></td>
            <td t="s" id="sjs-G163" v="2 months prior to the event">2 months prior to the event</td>
            <td t="z" id="sjs-H163"></td>
            <td t="s" id="sjs-I163" v="http://www.ladytatatrust.org/StaticPageIndia/Awards/12">http://www.ladytatatrust.org/StaticPageIndia/Awards/12</td>
            <td t="z" id="sjs-J163"></td>
            <td t="z" id="sjs-K163"></td>
            <td t="z" id="sjs-L163"></td>
            <td t="z" id="sjs-M163"></td>
            <td t="z" id="sjs-N163"></td>
            <td t="z" id="sjs-O163"></td>
            <td t="z" id="sjs-P163"></td>
            <td t="z" id="sjs-Q163"></td>
            <td t="z" id="sjs-R163"></td>
            <td t="z" id="sjs-S163"></td>
            <td t="z" id="sjs-T163"></td>
            <td t="z" id="sjs-U163"></td>
            <td t="z" id="sjs-V163"></td>
            <td t="z" id="sjs-W163"></td>
            <td t="z" id="sjs-X163"></td>
            <td t="z" id="sjs-Y163"></td>
            <td t="z" id="sjs-Z163"></td>
            <td t="z" id="sjs-AA163"></td>
            <td t="z" id="sjs-AB163"></td>
            <td t="z" id="sjs-AC163"></td>
            <td t="z" id="sjs-AD163"></td>
            <td t="z" id="sjs-AE163"></td>
            <td t="z" id="sjs-AF163"></td>
            <td t="z" id="sjs-AG163"></td>
            <td t="z" id="sjs-AH163"></td>
            <td t="z" id="sjs-AI163"></td>
            <td t="z" id="sjs-AJ163"></td>
            <td t="z" id="sjs-AK163"></td>
            <td t="z" id="sjs-AL163"></td>
            <td t="z" id="sjs-AM163"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A164" v="Meetings">Meetings</td>
            <td t="s" id="sjs-B164" v="TWAS">TWAS</td>
            <td t="s" id="sjs-C164" v="International Scientific meetings">International Scientific meetings</td>
            <td t="s" id="sjs-D164" v="To support the organizers of meetings in the following fields of natural sciences: agricultural, biological, chemical, engineering, geological and medical sciences">To support the organizers of meetings in the following fields of natural sciences: agricultural, biological, chemical, engineering, geological and medical sciences</td>
            <td t="s" id="sjs-E164" v="up to USD 5,000">up to USD 5,000</td>
            <td t="s" id="sjs-F164" v="Organiser must be developing country">Organiser must be developing country</td>
            <td t="s" id="sjs-G164" v="To be announced (July)">To be announced (July)</td>
            <td t="z" id="sjs-H164"></td>
            <td t="s" id="sjs-I164" v="http://twas.org/opportunity/twas-grants-scientific-meetings-held-developing-countries">http://twas.org/opportunity/twas-grants-scientific-meetings-held-developing-countries</td>
            <td t="z" id="sjs-J164"></td>
            <td t="z" id="sjs-K164"></td>
            <td t="z" id="sjs-L164"></td>
            <td t="z" id="sjs-M164"></td>
            <td t="z" id="sjs-N164"></td>
            <td t="z" id="sjs-O164"></td>
            <td t="z" id="sjs-P164"></td>
            <td t="z" id="sjs-Q164"></td>
            <td t="z" id="sjs-R164"></td>
            <td t="z" id="sjs-S164"></td>
            <td t="z" id="sjs-T164"></td>
            <td t="z" id="sjs-U164"></td>
            <td t="z" id="sjs-V164"></td>
            <td t="z" id="sjs-W164"></td>
            <td t="z" id="sjs-X164"></td>
            <td t="z" id="sjs-Y164"></td>
            <td t="z" id="sjs-Z164"></td>
            <td t="z" id="sjs-AA164"></td>
            <td t="z" id="sjs-AB164"></td>
            <td t="z" id="sjs-AC164"></td>
            <td t="z" id="sjs-AD164"></td>
            <td t="z" id="sjs-AE164"></td>
            <td t="z" id="sjs-AF164"></td>
            <td t="z" id="sjs-AG164"></td>
            <td t="z" id="sjs-AH164"></td>
            <td t="z" id="sjs-AI164"></td>
            <td t="z" id="sjs-AJ164"></td>
            <td t="z" id="sjs-AK164"></td>
            <td t="z" id="sjs-AL164"></td>
            <td t="z" id="sjs-AM164"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A165" v="Seminar">Seminar</td>
            <td t="s" id="sjs-B165" v="DST/Royal Society, UK">DST/Royal Society, UK</td>
            <td t="s" id="sjs-C165" v="India-UK Scientifc Seminar Scheme">India-UK Scientifc Seminar Scheme</td>
            <td t="s" id="sjs-D165" v="to fund the organisation of a small 3 day scientific meeting to bring together groups of early to mid-career scientists from India and the UK for the purpose of scientific discussion, to promote collaboration and knowledge transfer by encouraging interaction within the wider research community. " xml:space="preserve">to fund the organisation of a small 3 day scientific meeting to bring together groups of early to mid-career scientists from India and the UK for the purpose of scientific discussion, to promote collaboration and knowledge transfer by encouraging interaction within the wider research community. </td>
            <td t="s" id="sjs-E165" v="International Airfare for upto 5 scienitsts, local travel and accomodation costs for all external attendees and organisational support">International Airfare for upto 5 scienitsts, local travel and accomodation costs for all external attendees and organisational support</td>
            <td t="s" id="sjs-F165" v="Organiser must have a PhD, and be in regular employment in India or UK">Organiser must have a PhD, and be in regular employment in India or UK</td>
            <td t="s" id="sjs-G165" v="To be announced">To be announced</td>
            <td t="z" id="sjs-H165"></td>
            <td t="s" id="sjs-I165" v="http://www.dst.gov.in/whats_new/whats_new14/COP_Scientific-Seminar.pdf">http://www.dst.gov.in/whats_new/whats_new14/COP_Scientific-Seminar.pdf</td>
            <td t="z" id="sjs-J165"></td>
            <td t="z" id="sjs-K165"></td>
            <td t="z" id="sjs-L165"></td>
            <td t="z" id="sjs-M165"></td>
            <td t="z" id="sjs-N165"></td>
            <td t="z" id="sjs-O165"></td>
            <td t="z" id="sjs-P165"></td>
            <td t="z" id="sjs-Q165"></td>
            <td t="z" id="sjs-R165"></td>
            <td t="z" id="sjs-S165"></td>
            <td t="z" id="sjs-T165"></td>
            <td t="z" id="sjs-U165"></td>
            <td t="z" id="sjs-V165"></td>
            <td t="z" id="sjs-W165"></td>
            <td t="z" id="sjs-X165"></td>
            <td t="z" id="sjs-Y165"></td>
            <td t="z" id="sjs-Z165"></td>
            <td t="z" id="sjs-AA165"></td>
            <td t="z" id="sjs-AB165"></td>
            <td t="z" id="sjs-AC165"></td>
            <td t="z" id="sjs-AD165"></td>
            <td t="z" id="sjs-AE165"></td>
            <td t="z" id="sjs-AF165"></td>
            <td t="z" id="sjs-AG165"></td>
            <td t="z" id="sjs-AH165"></td>
            <td t="z" id="sjs-AI165"></td>
            <td t="z" id="sjs-AJ165"></td>
            <td t="z" id="sjs-AK165"></td>
            <td t="z" id="sjs-AL165"></td>
            <td t="z" id="sjs-AM165"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A166" v="Travel " xml:space="preserve">Travel </td>
            <td t="z" id="sjs-B166"></td>
            <td t="z" id="sjs-C166"></td>
            <td t="z" id="sjs-D166"></td>
            <td t="z" id="sjs-E166"></td>
            <td t="z" id="sjs-F166"></td>
            <td t="z" id="sjs-G166"></td>
            <td t="z" id="sjs-H166"></td>
            <td t="z" id="sjs-I166"></td>
            <td t="z" id="sjs-J166"></td>
            <td t="z" id="sjs-K166"></td>
            <td t="z" id="sjs-L166"></td>
            <td t="z" id="sjs-M166"></td>
            <td t="z" id="sjs-N166"></td>
            <td t="z" id="sjs-O166"></td>
            <td t="z" id="sjs-P166"></td>
            <td t="z" id="sjs-Q166"></td>
            <td t="z" id="sjs-R166"></td>
            <td t="z" id="sjs-S166"></td>
            <td t="z" id="sjs-T166"></td>
            <td t="z" id="sjs-U166"></td>
            <td t="z" id="sjs-V166"></td>
            <td t="z" id="sjs-W166"></td>
            <td t="z" id="sjs-X166"></td>
            <td t="z" id="sjs-Y166"></td>
            <td t="z" id="sjs-Z166"></td>
            <td t="z" id="sjs-AA166"></td>
            <td t="z" id="sjs-AB166"></td>
            <td t="z" id="sjs-AC166"></td>
            <td t="z" id="sjs-AD166"></td>
            <td t="z" id="sjs-AE166"></td>
            <td t="z" id="sjs-AF166"></td>
            <td t="z" id="sjs-AG166"></td>
            <td t="z" id="sjs-AH166"></td>
            <td t="z" id="sjs-AI166"></td>
            <td t="z" id="sjs-AJ166"></td>
            <td t="z" id="sjs-AK166"></td>
            <td t="z" id="sjs-AL166"></td>
            <td t="z" id="sjs-AM166"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A167" v="Travel">Travel</td>
            <td t="s" id="sjs-B167" v="DBT">DBT</td>
            <td t="s" id="sjs-C167" v="Travel Support for attending International Conference/ Seminar/ Symposium">Travel Support for attending International Conference/ Seminar/ Symposium</td>
            <td t="s" id="sjs-D167" v="Conferences/meetings in any overseas institution">Conferences/meetings in any overseas institution</td>
            <td t="s" id="sjs-E167" v="travel">travel</td>
            <td t="s" id="sjs-F167" v="PhD, Age less than 50 years">PhD, Age less than 50 years</td>
            <td t="s" id="sjs-G167" v="At least 8 weeks prior to travel date">At least 8 weeks prior to travel date</td>
            <td t="z" id="sjs-H167"></td>
            <td t="s" id="sjs-I167" v="http://dbtctep.gov.in/">http://dbtctep.gov.in/</td>
            <td t="z" id="sjs-J167"></td>
            <td t="z" id="sjs-K167"></td>
            <td t="z" id="sjs-L167"></td>
            <td t="z" id="sjs-M167"></td>
            <td t="z" id="sjs-N167"></td>
            <td t="z" id="sjs-O167"></td>
            <td t="z" id="sjs-P167"></td>
            <td t="z" id="sjs-Q167"></td>
            <td t="z" id="sjs-R167"></td>
            <td t="z" id="sjs-S167"></td>
            <td t="z" id="sjs-T167"></td>
            <td t="z" id="sjs-U167"></td>
            <td t="z" id="sjs-V167"></td>
            <td t="z" id="sjs-W167"></td>
            <td t="z" id="sjs-X167"></td>
            <td t="z" id="sjs-Y167"></td>
            <td t="z" id="sjs-Z167"></td>
            <td t="z" id="sjs-AA167"></td>
            <td t="z" id="sjs-AB167"></td>
            <td t="z" id="sjs-AC167"></td>
            <td t="z" id="sjs-AD167"></td>
            <td t="z" id="sjs-AE167"></td>
            <td t="z" id="sjs-AF167"></td>
            <td t="z" id="sjs-AG167"></td>
            <td t="z" id="sjs-AH167"></td>
            <td t="z" id="sjs-AI167"></td>
            <td t="z" id="sjs-AJ167"></td>
            <td t="z" id="sjs-AK167"></td>
            <td t="z" id="sjs-AL167"></td>
            <td t="z" id="sjs-AM167"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A168" v="Travel">Travel</td>
            <td t="s" id="sjs-B168" v="DBT">DBT</td>
            <td t="s" id="sjs-C168" v="CREST Award">CREST Award</td>
            <td t="s" id="sjs-D168" v="Any overseas institution">Any overseas institution</td>
            <td t="s" id="sjs-E168" v="Stipend, travel and subsistence">Stipend, travel and subsistence</td>
            <td t="s" id="sjs-F168" v="Applicant must have a permanent job. Funding for stem cell and regenerative biology">Applicant must have a permanent job. Funding for stem cell and regenerative biology</td>
            <td t="s" id="sjs-G168" v="To be Announced, " xml:space="preserve">To be Announced, </td>
            <td t="s" id="sjs-H168" v="1-12 months">1-12 months</td>
            <td t="s" id="sjs-I168" v="http://dbtindia.nic.in/uniquepage.asp?id_pk=646">http://dbtindia.nic.in/uniquepage.asp?id_pk=646</td>
            <td t="z" id="sjs-J168"></td>
            <td t="z" id="sjs-K168"></td>
            <td t="z" id="sjs-L168"></td>
            <td t="z" id="sjs-M168"></td>
            <td t="z" id="sjs-N168"></td>
            <td t="z" id="sjs-O168"></td>
            <td t="z" id="sjs-P168"></td>
            <td t="z" id="sjs-Q168"></td>
            <td t="z" id="sjs-R168"></td>
            <td t="z" id="sjs-S168"></td>
            <td t="z" id="sjs-T168"></td>
            <td t="z" id="sjs-U168"></td>
            <td t="z" id="sjs-V168"></td>
            <td t="z" id="sjs-W168"></td>
            <td t="z" id="sjs-X168"></td>
            <td t="z" id="sjs-Y168"></td>
            <td t="z" id="sjs-Z168"></td>
            <td t="z" id="sjs-AA168"></td>
            <td t="z" id="sjs-AB168"></td>
            <td t="z" id="sjs-AC168"></td>
            <td t="z" id="sjs-AD168"></td>
            <td t="z" id="sjs-AE168"></td>
            <td t="z" id="sjs-AF168"></td>
            <td t="z" id="sjs-AG168"></td>
            <td t="z" id="sjs-AH168"></td>
            <td t="z" id="sjs-AI168"></td>
            <td t="z" id="sjs-AJ168"></td>
            <td t="z" id="sjs-AK168"></td>
            <td t="z" id="sjs-AL168"></td>
            <td t="z" id="sjs-AM168"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A169" v="Travel">Travel</td>
            <td t="s" id="sjs-B169" v="DST">DST</td>
            <td t="s" id="sjs-C169" v="International Travel support Scheme">International Travel support Scheme</td>
            <td t="s" id="sjs-D169" v="Conferences/meetings in any overseas institution">Conferences/meetings in any overseas institution</td>
            <td t="s" id="sjs-E169" v="travel (airfare, airport tax, visa) and registration fees">travel (airfare, airport tax, visa) and registration fees</td>
            <td t="s" id="sjs-F169" v="open to all researchers. Senior researchers (> 35 years) cannot apply to Int Council of Scientific  Unions (ICSU) sponsored events">open to all researchers. Senior researchers (&gt; 35 years) cannot apply to Int Council of Scientific Unions (ICSU) sponsored events</td>
            <td t="s" id="sjs-G169" v="Rolling programme. App. to reach two months prior to the event">Rolling programme. App. to reach two months prior to the event</td>
            <td t="z" id="sjs-H169"></td>
            <td t="s" id="sjs-I169" v="http://serb.gov.in/its.php">http://serb.gov.in/its.php</td>
            <td t="z" id="sjs-J169"></td>
            <td t="z" id="sjs-K169"></td>
            <td t="z" id="sjs-L169"></td>
            <td t="z" id="sjs-M169"></td>
            <td t="z" id="sjs-N169"></td>
            <td t="z" id="sjs-O169"></td>
            <td t="z" id="sjs-P169"></td>
            <td t="z" id="sjs-Q169"></td>
            <td t="z" id="sjs-R169"></td>
            <td t="z" id="sjs-S169"></td>
            <td t="z" id="sjs-T169"></td>
            <td t="z" id="sjs-U169"></td>
            <td t="z" id="sjs-V169"></td>
            <td t="z" id="sjs-W169"></td>
            <td t="z" id="sjs-X169"></td>
            <td t="z" id="sjs-Y169"></td>
            <td t="z" id="sjs-Z169"></td>
            <td t="z" id="sjs-AA169"></td>
            <td t="z" id="sjs-AB169"></td>
            <td t="z" id="sjs-AC169"></td>
            <td t="z" id="sjs-AD169"></td>
            <td t="z" id="sjs-AE169"></td>
            <td t="z" id="sjs-AF169"></td>
            <td t="z" id="sjs-AG169"></td>
            <td t="z" id="sjs-AH169"></td>
            <td t="z" id="sjs-AI169"></td>
            <td t="z" id="sjs-AJ169"></td>
            <td t="z" id="sjs-AK169"></td>
            <td t="z" id="sjs-AL169"></td>
            <td t="z" id="sjs-AM169"></td>
          </tr>
          <tr>
            <td t="s" id="sjs-A170" v="Travel">Travel</td>
            <td t="s" id="sjs-B170" v="International Brain research Organization (IBRO)">International Brain research Organization (IBRO)</td>
            <td t="s" id="sjs-C170" v="International Travel Grants">International Travel Grants</td>
            <td t="s" id="sjs-D170" v="For participation in international Neuroscience meetings">For participation in international Neuroscience meetings</td>
            <td t="s" id="sjs-E170" v="upto 1500 Euros">upto 1500 Euros</td>
            <td t="s" id="sjs-F170" v="Applicant to be based in a less well-funded countries (US/Canada Region excluded) " xml:space="preserve">Applicant to be based in a less well-funded countries (US/Canada Region excluded) </td>
            <td t="s" id="sjs-G170" v="1-Mar for meetings in Jul-Dec and  1-Sep for meeting in Jan-Jun following year">1-Mar for meetings in Jul-Dec and 1-Sep for meeting in Jan-Jun following year</td>
            <td t="z" id="sjs-H170"></td>
            <td t="s" id="sjs-I170" v="http://ibro.info/professional-development/funding-programmes/travel-grants/">http://ibro.info/professional-development/funding-programmes/travel-grants/</td>
            
          </tr>
          <tr>
            <td t="s" id="sjs-A171" v="Travel">Travel</td>
            <td t="s" id="sjs-B171" v="INSA-CSIR-DAE/BRNS-DOS/ISRO">INSA-CSIR-DAE/BRNS-DOS/ISRO</td>
            <td t="s" id="sjs-C171" v="CICS Travel Fellowship Programme&nbsp; " xml:space="preserve">CICS Travel Fellowship Programme&nbsp; </td>
            <td t="s" id="sjs-D171" v="Conferences/meetings in any overseas institution">Conferences/meetings in any overseas institution</td>
            <td t="s" id="sjs-E171" v="Partial assistance for travel/registration/per diem">Partial assistance for travel/registration/per diem</td>
            <td t="s" id="sjs-F171" v="PhD, Indian nationality">PhD, Indian nationality</td>
            <td t="s" id="sjs-G171" v="committee meets six times/year with specific deadline for each meeting">committee meets six times/year with specific deadline for each meeting</td>
            <td t="z" id="sjs-H171"></td>
            <td t="s" id="sjs-I171" v="http://www.cics.tn.nic.in/Travel_Fellowship_Application_Form.pdf">http://www.cics.tn.nic.in/Travel_Fellowship_Application_Form.pdf</td>
          
          </tr>
          <tr>
            <td t="s" id="sjs-A172" v="Travel">Travel</td>
            <td t="s" id="sjs-B172" v="Ratan Tata Trust and Navajbai Ratan Tata Trust">Ratan Tata Trust and Navajbai Ratan Tata Trust</td>
            <td t="s" id="sjs-C172" v="Education grant- Travel grants">Education grant- Travel grants</td>
            <td t="s" id="sjs-D172" v="For attending meetings/seminars/ workshops">For attending meetings/seminars/ workshops</td>
            <td t="z" id="sjs-E172"></td>
            <td t="s" id="sjs-F172" v="PhD with regular position in research institute, Indian nationality">PhD with regular position in research institute, Indian nationality</td>
            <td t="s" id="sjs-G172" v="at least 3-4 months prior to departure">at least 3-4 months prior to departure</td>
            <td t="z" id="sjs-H172"></td>
            <td t="s" id="sjs-I172" v="http://www.srtt.org/individual_grants/education_grants.htm#travel">http://www.srtt.org/individual_grants/education_grants.htm#travel</td>
           
          </tr>
          <tr>
            <td t="s" id="sjs-A173" v="Others">Others</td>
          
          </tr>
          <tr>
            <td t="s" id="sjs-A174" v="Women in Science (Career Re-orientation)">Women in Science (Career Re-orientation)</td>
            <td t="s" id="sjs-B174" v="DBT">DBT</td>
            <td t="s" id="sjs-C174" v="BioCAre. Career Re-orientation Fellowship (CRF)">BioCAre. Career Re-orientation Fellowship (CRF)</td>
            <td t="s" id="sjs-D174" v="For training in skills reqd for career change. LoI reqd.">For training in skills reqd for career change. LoI reqd.</td>
            <td t="s" id="sjs-E174" v="Rs.5000 incentive for employed women. overall training course fee and /or consumables/contingency grant of upto Rs. 1.00 lakhs">Rs.5000 incentive for employed women. overall training course fee and /or consumables/contingency grant of upto Rs. 1.00 lakhs</td>
            <td t="s" id="sjs-F174" v="PhD (age limit 55 years). Women currently unemployed, temporarily employed or looking for change in career path " xml:space="preserve">PhD (age limit 55 years). Women currently unemployed, temporarily employed or looking for change in career path </td>
            <td t="s" id="sjs-G174" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H174" v="12 months">12 months</td>
            <td t="s" id="sjs-I174" v="http://dbtindia.nic.in/docs/Bio%20CARe%20advertisement.doc">http://dbtindia.nic.in/docs/Bio%20CARe%20advertisement.doc</td>
           
          </tr>
          <tr>
            <td t="s" id="sjs-A175" v="Other">Other</td>
            <td t="s" id="sjs-B175" v="DST">DST</td>
            <td t="s" id="sjs-C175" v="Utilisation Of The Scientific Expertise Of Retired Scientists (USERS)">Utilisation Of The Scientific Expertise Of Retired Scientists (USERS)</td>
            <td t="s" id="sjs-D175" v="For preparation of books / monographs / state-of the art reports.">For preparation of books / monographs / state-of the art reports.</td>
            <td t="s" id="sjs-E175" v="honorarium to be fixed per rules">honorarium to be fixed per rules</td>
            <td t="s" id="sjs-F175" v="Age upto 67 years">Age upto 67 years</td>
            <td t="z" id="sjs-G175"></td>
            <td t="s" id="sjs-H175" v="2 years " xml:space="preserve">2 years </td>
            <td t="s" id="sjs-I175" v="http://serb.gov.in/users.php">http://serb.gov.in/users.php</td>
       
          </tr>
          <tr>
            <td t="s" id="sjs-A176" v="Research training">Research training</td>
            <td t="s" id="sjs-B176" v="NIH">NIH</td>
            <td t="s" id="sjs-C176" v="NCD-LIFESPAN " xml:space="preserve">NCD-LIFESPAN </td>
            <td t="s" id="sjs-D176" v="Chronic diseases">Chronic diseases</td>
            <td t="s" id="sjs-E176" v="up to $250,000 per year">up to $250,000 per year</td>
            <td t="s" id="sjs-F176" v="Needs US collaborator">Needs US collaborator</td>
            <td t="s" id="sjs-G176" v="To be Announced">To be Announced</td>
            <td t="s" id="sjs-H176" v="5 years">5 years</td>
            <td t="s" id="sjs-I176" v="http://grants.nih.gov/grants/guide/pa-files/PAR-10-257.html">http://grants.nih.gov/grants/guide/pa-files/PAR-10-257.html</td>
            
          </tr>
          <tr>
            <td t="s" id="sjs-A177" v="Public Engagement">Public Engagement</td>
            <td t="s" id="sjs-B177" v="Wellcome Trust">Wellcome Trust</td>
            <td t="s" id="sjs-C177" v="International Engagement Awards">International Engagement Awards</td>
            <td t="z" id="sjs-D177"></td>
            <td t="n" id="sjs-E177" v="30000" xml:space="preserve">£30,000 </td>
            <td t="z" id="sjs-F177"></td>
            <td t="n" id="sjs-G177" v="42601">19-Aug-16</td>
            <td t="s" id="sjs-H177" v="up to 3 years">up to 3 years</td>
            <td t="s" id="sjs-I177" v="http://www.wellcome.ac.uk/Funding/Public-engagement/Funding-schemes/International-Engagement-Awards/index.htm">http://www.wellcome.ac.uk/Funding/Public-engagement/Funding-schemes/International-Engagement-Awards/index.htm</td>
            
          </tr>
          <tr>
            <td t="s" id="sjs-A178" v="Other">Other</td>
            <td t="s" id="sjs-B178" v="DBT">DBT</td>
            <td t="s" id="sjs-C178" v="Seminar Series in Neuroinformatics">Seminar Series in Neuroinformatics</td>
            <td t="s" id="sjs-D178" v="To encourage international researchers in the field of Neuroinformatics and Computational Neuroscience Education visiting any of the node institutions, to  encourage them to travel to at least one other city and institution">To encourage international researchers in the field of Neuroinformatics and Computational Neuroscience Education visiting any of the node institutions, to encourage them to travel to at least one other city and institution</td>
            <td t="s" id="sjs-E178" v="local (within India) travel and local hospitality">local (within India) travel and local hospitality</td>
            <td t="z" id="sjs-F178"></td>
            <td t="z" id="sjs-G178"></td>
            <td t="z" id="sjs-H178"></td>
            <td t="s" id="sjs-I178" v="http://dbtindia.nic.in/docs/INCNEAdvFinal.doc">http://dbtindia.nic.in/docs/INCNEAdvFinal.doc</td>
            
          </tr>
          <tr>
            <td t="s" id="sjs-A179" v="Entrepreunership/Technology Development grants">Entrepreunership/Technology Development grants</td>
            
          </tr>
          <tr>
            <td t="s" id="sjs-A180" v="Technology Deve+A164:I164lopment">Technology Deve+A164:I164lopment</td>
            <td t="s" id="sjs-B180" v="Wellcome Trust (UK)">Wellcome Trust (UK)</td>
            <td t="s" id="sjs-C180" v="Affordable Healthcare in India">Affordable Healthcare in India</td>
            <td t="s" id="sjs-D180" v="Projects covering any aspect of technology development for healthcare will be considered, including diagnostics, medical devices and regenerative medicine. A significant proportion of the programme should be conducted in India. " xml:space="preserve">Projects covering any aspect of technology development for healthcare will be considered, including diagnostics, medical devices and regenerative medicine. A significant proportion of the programme should be conducted in India. </td>
            <td t="s" id="sjs-E180" v="All directly incurred costs towards equipment, salaries, consumables, travel etc">All directly incurred costs towards equipment, salaries, consumables, travel etc</td>
            <td t="s" id="sjs-F180" v="The PI should be based in India with regular employment in Not-for-profit institutions, governmental or non-governmental organisations and international organisations operating within India. " xml:space="preserve">The PI should be based in India with regular employment in Not-for-profit institutions, governmental or non-governmental organisations and international organisations operating within India. </td>
            <td t="s" id="sjs-G180" v="To be announced">To be announced</td>
            <td t="z" id="sjs-H180"></td>
            <td t="s" id="sjs-I180" v=" http://www.wellcome.ac.uk/Funding/Technology-transfer/Awards/Affordable-Healthcare-in-India/index.htm" xml:space="preserve"> http://www.wellcome.ac.uk/Funding/Technology-transfer/Awards/Affordable-Healthcare-in-India/index.htm</td>
            
            
          </tr>
          <tr>
            <td t="z" id="sjs-A181"></td>
            <td t="s" id="sjs-B181" v="Wellcome Trust (UK)">Wellcome Trust (UK)</td>
            <td t="s" id="sjs-C181" v="Collaborative Awards in Science">Collaborative Awards in Science</td>
            <td t="s" id="sjs-D181" v="To fund teams of researchers, consisting of independent research groups, to work together on the important scientific problems (that can only be solved through collaborative efforts).">To fund teams of researchers, consisting of independent research groups, to work together on the important scientific problems (that can only be solved through collaborative efforts).</td>
            <td t="s" id="sjs-E181" v="Up to £4 million">Up to £4 million</td>
            <td t="s" id="sjs-F181" v="Applicants should hold an academic or research post (or equivalent) at eligible organisations in the UK, Republic of Ireland, or low- or middle-income countries (India eligible). The number of collaborators should be more than two and no more than seven. Each applicant must have proven experience in collaborative research. " xml:space="preserve">Applicants should hold an academic or research post (or equivalent) at eligible organisations in the UK, Republic of Ireland, or low- or middle-income countries (India eligible). The number of collaborators should be more than two and no more than seven. Each applicant must have proven experience in collaborative research. </td>
            <td t="s" id="sjs-G181" v="Preliminary application deadline: 17-Nov-2016">Preliminary application deadline: 17-Nov-2016</td>
            <td t="s" id="sjs-H181" v="upto 5 years">upto 5 years</td>
            <td t="s" id="sjs-I181" v="https://wellcome.ac.uk/funding/collaborative-awards-science">https://wellcome.ac.uk/funding/collaborative-awards-science</td>
            
            
          </tr>
          <tr>
            <td t="s" id="sjs-A182" v="Equipment">Equipment</td>
            <td t="s" id="sjs-B182" v="Wellcome Trust (UK)">Wellcome Trust (UK)</td>
            <td t="s" id="sjs-C182" v="Biomedical resource and technology development grants">Biomedical resource and technology development grants</td>
            <td t="s" id="sjs-D182" v="Contribution from the host institution towards the purchase and/or management of major items of equipment, where these are central to the proposal is expected">Contribution from the host institution towards the purchase and/or management of major items of equipment, where these are central to the proposal is expected</td>
            <td t="s" id="sjs-E182" v="salaries for staff; materials and consumables required for establishing and maintaining the resource/technology; the purchase and maintenance of animals; the purchase and essential running and maintenance costs of equipment; collaborative travel and attendance at scientific meetings to publicise the resource/technology">salaries for staff; materials and consumables required for establishing and maintaining the resource/technology; the purchase and maintenance of animals; the purchase and essential running and maintenance costs of equipment; collaborative travel and attendance at scientific meetings to publicise the resource/technology</td>
            <td t="s" id="sjs-F182" v="applicants in the UK who have a track record in obtaining grant funding. Researchers in low- or middle-income countries  eligible to apply if they have a track record of Trust funding or can demonstrate a strong track record of independent research accomplishment.">applicants in the UK who have a track record in obtaining grant funding. Researchers in low- or middle-income countries eligible to apply if they have a track record of Trust funding or can demonstrate a strong track record of independent research accomplishment.</td>
            <td t="s" id="sjs-G182" v="To be announced">To be announced</td>
            <td t="s" id="sjs-H182" v="upto 5 years">upto 5 years</td>
            <td t="s" id="sjs-I182" v="http://www.wellcome.ac.uk/Funding/Biomedical-science/Funding-schemes/Strategic-awards-and-initiatives/WTDV031727.htm">http://www.wellcome.ac.uk/Funding/Biomedical-science/Funding-schemes/Strategic-awards-and-initiatives/WTDV031727.htm</td>
            
          </tr>
          <tr>
            <td t="s" id="sjs-A183" v="Technology Development">Technology Development</td>
            <td t="s" id="sjs-B183" v="BIRAC/CEFIPRA/ French Embassy in India">BIRAC/CEFIPRA/ French Embassy in India</td>
            <td t="s" id="sjs-C183" v="Indo-French Challenge-oriented Call for proposals " xml:space="preserve">Indo-French Challenge-oriented Call for proposals </td>
            <td t="s" id="sjs-D183" v="The topics supported include Molecular diagnostics for prediction of cardiac stroke, Rapid diagnostics for Alzheimers and /or dementia in elderly or molecular diagnostics for detection of neurological  disorders in neonates especially related to cerebral palsy and Generation of new assistive technologies for mobility of  physically challenged including elderly">The topics supported include Molecular diagnostics for prediction of cardiac stroke, Rapid diagnostics for Alzheimers and /or dementia in elderly or molecular diagnostics for detection of neurological disorders in neonates especially related to cerebral palsy and Generation of new assistive technologies for mobility of physically challenged including elderly</td>
            <td t="s" id="sjs-E183" v="Indicative cost limit upto Rs.40.00 lakhs (INR) for Indian Component of the Project cost and €50000 (approx. 42 lakhs conversion as per prevailing rate) for the French component of the Project cost. " xml:space="preserve">Indicative cost limit upto Rs.40.00 lakhs (INR) for Indian Component of the Project cost and €50000 (approx. 42 lakhs conversion as per prevailing rate) for the French component of the Project cost. </td>
            <td t="s" id="sjs-F183" v="Project shall have at least one Company and one Public Research Organization from India and France each as Joint Applicants (2+2 model) " xml:space="preserve">Project shall have at least one Company and one Public Research Organization from India and France each as Joint Applicants (2+2 model) </td>
            <td t="s" id="sjs-G183" v="To be announced (June)">To be announced (June)</td>
            <td t="s" id="sjs-H183" v="18-24 months">18-24 months</td>
            <td t="s" id="sjs-I183" v="http://cefipra.org/section.aspx?catid=887&amp;langid=1 " xml:space="preserve">http://cefipra.org/section.aspx?catid=887&amp;langid=1 </td>
            
          </tr>
        </tbody>
      </table>


      <div class="services-column">
        <div class="content-outer">
          <div class="row">
            <div class="service-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="inner-box">






              </div>
            </div>

          </div>
        </div>
      </div>
      <br>



    </div>
              <br>
    <div>
      <a href="./files/independent researcher grants.xlsx">Click here to download the file</a>
    </div>

  </div>






  <br>


  <!------------------------------------Footer------------------------------------------------------------------------->
  <?php include 'footer.php'; ?>

</body>

</html>