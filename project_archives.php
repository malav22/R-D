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
          <h1>Project Information</h1>
          <a href="project-opening.php">View Current Project Opening</a>
          <h3>Important Links</h3>
          <table id="customers">
               <tr>
                    <th>Sl. No.</th>
                    <th>Department</th>
                    <th>Post</th>
                    <th>For Detail</th>
                    <th>PI(Contact Person)</th>
                    <th>Last Date</th>

               </tr>


               <tr>
                    <td>1</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/jrf-ac-skp-05-03-2019_pdf.pdf'>click</a></td>
                    <td>Prof. S. K. Padhi</td>
                    <td>05-Mar-2019</td>
               </tr>
               <tr>
                    <td>2</td>
                    <td>Mathematics & Computing </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/Format_of_Advertisement_for_Project_Fellow(2)_pdf.pdf'>click</a></td>
                    <td>Prof. Akhilesh Prasad</td>
                    <td>15-Mar-2019</td>
               </tr>
               <tr>
                    <td>3</td>
                    <td>Mathematics & Computing </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/JRF_AM_NJ-07-03-2019_pdf.pdf'>click</a></td>
                    <td>Prof. N. K. Jana</td>
                    <td>07-Mar-2019</td>
               </tr>
               <tr>
                    <td>4</td>
                    <td>Mining Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/RA-ME-VMSRM-5-04-2019_pdf.pdf'>click</a></td>
                    <td>Prof. V. M. S. R. Murthy</td>
                    <td>05-Apr-2019</td>
               </tr>
               <tr>
                    <td>5</td>
                    <td>Mining Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/SRF-ME-VMSRM-5-04-2019_pdf.pdf'>click</a></td>
                    <td>Prof. V. M. S. R. Murthy</td>
                    <td>05-Apr-2019</td>
               </tr>
               <tr>
                    <td>6</td>
                    <td>Mining Engineering </td>
                    <td>Project Fellow </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/PF-ME-VMSRM-5-04-2019_pdf.pdf'>click</a></td>
                    <td>Prof. V. M. S. R. Murthy</td>
                    <td>05-Apr-2019</td>
               </tr>
               <tr>
                    <td>13</td>
                    <td>Computer Science and Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/915/ADV_pdf.pdf'>click</a></td>
                    <td>Prof. Tarachand Amgoth</td>
                    <td>10-Apr-2019</td>
               </tr>
               <tr>
                    <td>14</td>
                    <td>Petroleum Engineering </td>
                    <td>Project Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/802/AJAY-Format_of_Advertisement_for_Project_Fellow_pdf.pdf'>click</a></td>
                    <td>Dr Ajay Mandal</td>
                    <td>02-Apr-2019</td>
               </tr>
               <tr>
                    <td>15</td>
                    <td>Applied Geophysics </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1149/Advertisement-of-Project-Fellow_pdf.pdf'>click</a></td>
                    <td>Dr G Srinivasa Rao</td>
                    <td>29-Mar-2019</td>
               </tr>
               <tr>
                    <td>17</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1152/Advertisement_for_Project_JRF_pdf.pdf'>click</a></td>
                    <td>Dr Kironmala Chanda</td>
                    <td>30-Apr-2019</td>
               </tr>
               <tr>
                    <td>18</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/895/Advertisement-of-Project-Fellow_pdf.pdf'>click</a></td>
                    <td>Dr Sagar Pal</td>
                    <td>08-Apr-2019</td>
               </tr>
               <tr>
                    <td>19</td>
                    <td>Petroleum Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/799/Advertisement_for_Research_Fellow_IOGPT_pdf.pdf'>click</a></td>
                    <td>Dr Vikas Mahto</td>
                    <td>10-Apr-2019</td>
               </tr>
               <tr>
                    <td>20</td>
                    <td>Physics </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/Format-for-Advertisement-of-Project-Fellow_doc.doc'>click</a></td>
                    <td>Prof Jairam Manam</td>
                    <td>15-Apr-2019</td>
               </tr>
               <tr>
                    <td>21</td>
                    <td>Mining Engineering </td>
                    <td>Research Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/384/New_Walk-in_Interview_Advertisement_for_the_position_of_Supporting_Staff_CPRI_Project_pdf.pdf'>click</a></td>
                    <td>Dr V M S R Murthy</td>
                    <td>15-Apr-2019</td>
               </tr>
               <tr>
                    <td>22</td>
                    <td>Mathematics & Computing </td>
                    <td>Teaching Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/884/AdvertisementforProjectFellow-TA-GEC-Website_pdf.pdf'>click</a></td>
                    <td>Dr Badam Singh Kushvah</td>
                    <td>14-Apr-2019</td>
               </tr>
               <tr>
                    <td>23</td>
                    <td>Physics </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/878/JRF-PM-AP_pdf.pdf'>click</a></td>
                    <td>Dr Pankaj Mishra</td>
                    <td>18-Apr-2019</td>
               </tr>
               <tr>
                    <td>24</td>
                    <td>Mathematics & Computing </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/852/JRF_Applied_Mathematics_pdf.pdf'>click</a></td>
                    <td>Dr Akhilesh Prasad</td>
                    <td>22-Apr-2019</td>
               </tr>
               <tr>
                    <td>25</td>
                    <td>Mining Engineering </td>
                    <td>Research Associates </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Revised_Advertisement_VRMS-second_time_(310519)_pdf.pdf'>click</a></td>
                    <td>Dr V M S R Murthy</td>
                    <td>31-May-2019</td>
               </tr>
               <tr>
                    <td>26</td>
                    <td>Mining Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Revised_Advertisement_VRMS-second_time_(310519)_pdf.pdf'>click</a></td>
                    <td>Dr V M S R Murthy</td>
                    <td>31-May-2019</td>
               </tr>
               <tr>
                    <td>27</td>
                    <td>Mining Engineering </td>
                    <td>Project Fellow </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Revised_Advertisement_VRMS-second_time_(310519)_pdf.pdf'>click</a></td>
                    <td>Dr V M S R Murthy</td>
                    <td>31-May-2019</td>
               </tr>
               <tr>
                    <td>28</td>
                    <td>Physics </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/867/iit_Format-for-Advertisement-of-Project-Fellow_doc.doc'>click</a></td>
                    <td>Dr Vineet Kumar Rai</td>
                    <td>24-Apr-2019</td>
               </tr>
               <tr>
                    <td>29</td>
                    <td>Computer Science and Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/915/adv-new_pdf.pdf'>click</a></td>
                    <td>Dr Tarachand Amgoth</td>
                    <td>30-Apr-2019</td>
               </tr>
               <tr>
                    <td>30</td>
                    <td>Mechanical Engineering </td>
                    <td>Project Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/791/Format-for-Advertisement-of-Project-Fellow_doc.doc'>click</a></td>
                    <td>Dr Somnath Chattopadhyaya</td>
                    <td>04-May-2019</td>
               </tr>
               <tr>
                    <td>31</td>
                    <td>Mining Engineering </td>
                    <td>Project Fellow </td>

                    <td> <a href='/assets//uploads/pdfprj/1064/02_Advertisement_for_Project_Fellow_dec_18_pdf.pdf'>click</a></td>
                    <td>Dr. Rabindra Kumar Sinha</td>
                    <td>12-May-2019</td>
               </tr>
               <tr>
                    <td>32</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/895/Format-for-Advertisement-of-Project-Fellow_pdf.pdf'>click</a></td>
                    <td>Dr Sagar Pal</td>
                    <td>10-May-2019</td>
               </tr>
               <tr>
                    <td>34</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/2019_Advertisement_for_Project_JRF_pdf.pdf'>click</a></td>
                    <td>Prof. Piyali Sengupta</td>
                    <td>29-May-2019</td>
               </tr>
               <tr>
                    <td>35</td>
                    <td>Physics </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/Re-advertisement_for_Project_Fellow_pdf.pdf'>click</a></td>
                    <td>Prof. Moirangthem Rakesh Singh</td>
                    <td>31-May-2019</td>
               </tr>
               <tr>
                    <td>36</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/2_pdf.pdf'>click</a></td>
                    <td>Prof. D. P. Mishra</td>
                    <td>22-May-2019</td>
               </tr>
               <tr>
                    <td>37</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/Format-for-Advertisement-of-Project-Fellow_pdf.pdf'>click</a></td>
                    <td>Dr. Somnath Yadav</td>
                    <td>27-May-2019</td>
               </tr>
               <tr>
                    <td>38</td>
                    <td>Applied Geology </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/admin/Advertisement-of-Project-Fellow-THSyed-AGL_pdf.pdf'>click</a></td>
                    <td>Prof. Tajdarul Hassan Syed</td>
                    <td>07-Jun-2019</td>
               </tr>
               <tr>
                    <td>41</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1152/Project JRF_21-05-2019-11:05:13.pdf'>click</a></td>
                    <td>Kironmala Chanda</td>
                    <td>20-Jun-2019</td>
               </tr>
               <tr>
                    <td>42</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1039/Project JRF_21-05-2019-01:05:47.pdf'>click</a></td>
                    <td>SRINIVAS PASUPULETI</td>
                    <td>17-Jun-2019</td>
               </tr>
               <tr>
                    <td>43</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/868/Project JRF_22-05-2019-04:05:50.pdf'>click</a></td>
                    <td>Prof. D. P. Mishra </td>
                    <td>29-May-2019</td>
               </tr>
               <tr>
                    <td>44</td>
                    <td>Electrical Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/982/Research Associate_23-05-2019-05:05:41.pdf'>click</a></td>
                    <td>Dr. Kartick Chandra Jana</td>
                    <td>10-Jun-2019</td>
               </tr>
               <tr>
                    <td>45</td>
                    <td>Civil Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/769/Project SRF_24-05-2019-12:05:21.pdf'>click</a></td>
                    <td>Sarat Kumar Panda</td>
                    <td>07-Jun-2019</td>
               </tr>
               <tr>
                    <td>46</td>
                    <td>Electrical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1060/Project JRF_13-06-2019-02:06:04.pdf'>click</a></td>
                    <td>Dr. ARIJIT BARAL</td>
                    <td>24-Jun-2019</td>
               </tr>
               <tr>
                    <td>47</td>
                    <td>Applied Geophysics </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1009/Project JRF_14-06-2019-05:06:39.pdf'>click</a></td>
                    <td>Dr. Saumen Maiti</td>
                    <td>25-Jun-2019</td>
               </tr>
               <tr>
                    <td>48</td>
                    <td>Applied Geophysics </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1009/Project JRF_14-06-2019-05:06:36.pdf'>click</a></td>
                    <td>Dr. Saumen Maiti</td>
                    <td>25-Jun-2019</td>
               </tr>
               <tr>
                    <td>49</td>
                    <td>Management Studies </td>
                    <td>Project Fellow </td>

                    <td> <a href='/assets//uploads/pdfprj/814/Project Fellow_17-06-2019-10:06:57.pdf'>click</a></td>
                    <td>SANDEEP MONDAL</td>
                    <td>05-Jul-2019</td>
               </tr>
               <tr>
                    <td>52</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1152/Project JRF_29-06-2019-01:06:38.pdf'>click</a></td>
                    <td>Kironmala Chanda</td>
                    <td>31-Jul-2019</td>
               </tr>
               <tr>
                    <td>54</td>
                    <td>Computer Science and Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/915/Project JRF_04-07-2019-03:07:26.pdf'>click</a></td>
                    <td>Prof. Tarachand Amgoth</td>
                    <td>15-Jul-2019</td>
               </tr>
               <tr>
                    <td>55</td>
                    <td>Chemistry </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1041/Project SRF_04-07-2019-04:07:19.pdf'>click</a></td>
                    <td>Prof. Sumanta Kumar Padhi</td>
                    <td>18-Aug-2020</td>
               </tr>
               <tr>
                    <td>56</td>
                    <td>Civil Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1052/Project SRF_08-07-2019-06:07:55.pdf'>click</a></td>
                    <td>Sekhar Chandra Dutta</td>
                    <td>15-Jul-2019</td>
               </tr>
               <tr>
                    <td>57</td>
                    <td>Computer Science and Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/958/Project JRF_09-07-2019-10:07:05.pdf'>click</a></td>
                    <td>Prof. Dharavath Ramesh</td>
                    <td>25-Jul-2019</td>
               </tr>
               <tr>
                    <td>59</td>
                    <td>Mechanical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1038/Project JRF_14-07-2019-08:07:27.pdf'>click</a></td>
                    <td>Ashis Mallick</td>
                    <td>01-Aug-2019</td>
               </tr>
               <tr>
                    <td>60</td>
                    <td>Mechanical Engineering </td>
                    <td>Research Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/1038/Research Assistant_14-07-2019-08:07:30.pdf'>click</a></td>
                    <td>Ashis Mallick</td>
                    <td>19-Jul-2019</td>
               </tr>
               <tr>
                    <td>61</td>
                    <td>Applied Geology </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/874/Project JRF_16-07-2019-04:07:32.pdf'>click</a></td>
                    <td>Prof. Tajdarul Hassan Syed</td>
                    <td>13-Aug-2019</td>
               </tr>
               <tr>
                    <td>62</td>
                    <td>Chemistry </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/862/Research Associate_19-07-2019-06:07:21.pdf'>click</a></td>
                    <td>Prof. Swapan Dey</td>
                    <td>30-Jul-2019</td>
               </tr>
               <tr>
                    <td>63</td>
                    <td>Mining Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Research Associate_21-07-2019-12:07:18.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>09-Aug-2019</td>
               </tr>
               <tr>
                    <td>64</td>
                    <td>Mining Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Project SRF_21-07-2019-12:07:02.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>09-Aug-2019</td>
               </tr>
               <tr>
                    <td>67</td>
                    <td>Centre of Excellence in Renewable Energy </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/876/Research Associate_23-07-2019-03:07:37.pdf'>click</a></td>
                    <td>Mukul Kumar Das</td>
                    <td>01-Aug-2019</td>
               </tr>
               <tr>
                    <td>68</td>
                    <td>Mathematics & Computing </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/778/Research Associate_25-07-2019-05:07:47.pdf'>click</a></td>
                    <td>Ranjit Kumar Upadhyay</td>
                    <td>30-Jul-2019</td>
               </tr>
               <tr>
                    <td>69</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/868/Project JRF_26-07-2019-06:07:24.pdf'>click</a></td>
                    <td>Dr. D. P. Mishra</td>
                    <td>04-Aug-2019</td>
               </tr>
               <tr>
                    <td>70</td>
                    <td>Mathematics & Computing </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/778/Research Associate_28-07-2019-01:07:37.pdf'>click</a></td>
                    <td>Ranjit Kumar Upadhyay</td>
                    <td>30-Jul-2019</td>
               </tr>
               <tr>
                    <td>71</td>
                    <td>Mining Engineering </td>
                    <td>Research Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/810/Research Assistant_30-07-2019-04:07:53.pdf'>click</a></td>
                    <td>Prof. Dheeraj Kumar</td>
                    <td>19-Jul-2019</td>
               </tr>
               <tr>
                    <td>72</td>
                    <td>Mechanical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/913/Project JRF_01-08-2019-12:08:09.pdf'>click</a></td>
                    <td>Prof. P. K. Mahato</td>
                    <td>21-Aug-2019</td>
               </tr>
               <tr>
                    <td>73</td>
                    <td>Fuel, Minerals and Metallurgical Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1051/Project SRF_01-08-2019-01:08:44.pdf'>click</a></td>
                    <td>Prof. Sumantra Bhattacharya & Prof. Barun Kumar Nandi</td>
                    <td>09-Aug-2019</td>
               </tr>
               <tr>
                    <td>74</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1167/Project JRF_01-08-2019-10:08:15.pdf'>click</a></td>
                    <td>Piyali Sengupta</td>
                    <td>06-Sep-2019</td>
               </tr>
               <tr>
                    <td>75</td>
                    <td>Computer Science and Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1177/Project JRF_14-08-2019-04:08:34.pdf'>click</a></td>
                    <td>Prof. Ansuman Bhattacharya</td>
                    <td>29-Aug-2019</td>
               </tr>
               <tr>
                    <td>77</td>
                    <td>Chemical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1174/Project JRF_16-08-2019-10:08:15.pdf'>click</a></td>
                    <td>Prof. Aditya Kumar</td>
                    <td>11-Sep-2019</td>
               </tr>
               <tr>
                    <td>78</td>
                    <td>Mining Engineering </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/868/Project Assistant_19-08-2019-07:08:36.pdf'>click</a></td>
                    <td>Dr. D. P. Mishra</td>
                    <td>29-Aug-2019</td>
               </tr>
               <tr>
                    <td>79</td>
                    <td>Mathematics & Computing </td>
                    <td>Project Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/740/Project Associate_23-08-2019-03:08:20.pdf'>click</a></td>
                    <td>Prof. Shishir Gupta</td>
                    <td>16-Sep-2019</td>
               </tr>
               <tr>
                    <td>80</td>
                    <td>Electronics Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/899/Project JRF_01-09-2019-01:09:00.pdf'>click</a></td>
                    <td>Sanjeev Kumar Raghuvanshi</td>
                    <td>20-Sep-2019</td>
               </tr>
               <tr>
                    <td>81</td>
                    <td>Electronics Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/899/Project JRF_01-09-2019-01:09:24.pdf'>click</a></td>
                    <td>Sanjeev Kumar Raghuvanshi</td>
                    <td>20-Sep-2019</td>
               </tr>
               <tr>
                    <td>82</td>
                    <td>Mining Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Latest Advertisement VRMS (18.10.2019)-revised.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>10-Oct-2019</td>
               </tr>
               <tr>
                    <td>83</td>
                    <td>Mining Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Latest Advertisement VRMS (18.10.2019)-revised.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>10-Oct-2019</td>
               </tr>
               <tr>
                    <td>84</td>
                    <td>Electronics Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/899/Project JRF_09-09-2019-03:09:32.pdf'>click</a></td>
                    <td>Sanjeev Kumar Raghuvanshi</td>
                    <td>20-Sep-2019</td>
               </tr>
               <tr>
                    <td>85</td>
                    <td>Applied Geophysics </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/1188/Project Assistant_12-09-2019-11:09:01.pdf'>click</a></td>
                    <td>Swarandeep Sahoo</td>
                    <td>19-Sep-2019</td>
               </tr>
               <tr>
                    <td>86</td>
                    <td>Mining Engineering </td>
                    <td>Project Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/1005/Project Associate_14-09-2019-10:09:18.pdf'>click</a></td>
                    <td>Dr. Vasanta Govind Kumar Villuri</td>
                    <td>28-Sep-2019</td>
               </tr>
               <tr>
                    <td>87</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/868/Project JRF_16-09-2019-04:09:41.pdf'>click</a></td>
                    <td>Dr. D. P. Mishra</td>
                    <td>26-Sep-2019</td>
               </tr>
               <tr>
                    <td>88</td>
                    <td>Computer Science and Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1177/Project JRF_18-09-2019-06:09:01.pdf'>click</a></td>
                    <td>Prof. Ansuman Bhattacharya</td>
                    <td>01-Oct-2019</td>
               </tr>
               <tr>
                    <td>89</td>
                    <td>Chemical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1174/Project JRF_20-09-2019-03:09:46.pdf'>click</a></td>
                    <td>Prof. Aditya Kumar</td>
                    <td>22-Oct-2019</td>
               </tr>
               <tr>
                    <td>90</td>
                    <td>Management Studies </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/814/Project Assistant_27-09-2019-12:09:36.pdf'>click</a></td>
                    <td>SANDEEP MONDAL</td>
                    <td>15-Oct-2019</td>
               </tr>
               <tr>
                    <td>91</td>
                    <td>Mining Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Research Associate_11-10-2019-10:10:59.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>16-Nov-2019</td>
               </tr>
               <tr>
                    <td>92</td>
                    <td>Mining Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Project SRF_11-10-2019-10:10:41.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>16-Nov-2019</td>
               </tr>
               <tr>
                    <td>93</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/996/Project JRF_15-10-2019-02:10:53.pdf'>click</a></td>
                    <td>Prof. V. M. S. R.Murthy / Prof .L.A. Kumaraswamidhas </td>
                    <td>22-Nov-2019</td>
               </tr>
               <tr>
                    <td>94</td>
                    <td>Mining Machinery Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/996/Project JRF_15-10-2019-02:10:34.pdf'>click</a></td>
                    <td>Prof. V. M. S. R.Murthy / Prof .L.A. Kumaraswamidhas </td>
                    <td>22-Nov-2019</td>
               </tr>
               <tr>
                    <td>95</td>
                    <td>Mining Engineering </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/996/Project Assistant_15-10-2019-02:10:20.pdf'>click</a></td>
                    <td>Prof. V. M. S. R.Murthy / Prof .L.A. Kumaraswamidhas </td>
                    <td>22-Nov-2019</td>
               </tr>
               <tr>
                    <td>96</td>
                    <td>Electrical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/869/Project JRF_21-10-2019-04:10:10.pdf'>click</a></td>
                    <td>Sanjoy Mandal</td>
                    <td>31-Oct-2019</td>
               </tr>
               <tr>
                    <td>97</td>
                    <td>Fuel, Minerals and Metallurgical Engineering </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/684/Project Assistant_01-11-2019-05:11:24.pdf'>click</a></td>
                    <td>NIKKAM SURESH</td>
                    <td>10-Nov-2019</td>
               </tr>
               <tr>
                    <td>98</td>
                    <td>Environmental Science & Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/812/Research Associate_04-11-2019-03:11:32.pdf'>click</a></td>
                    <td>Prof. S.K. Gupta</td>
                    <td>20-Nov-2019</td>
               </tr>
               <tr>
                    <td>99</td>
                    <td>Mining Engineering </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Research Associate_21-11-2019-12:11:22.pdf'>click</a></td>
                    <td>Chiranjeev Kumar</td>
                    <td>09-Jan-2020</td>
               </tr>
               <tr>
                    <td>100</td>
                    <td>Mining Engineering </td>
                    <td>Project SRF </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Project SRF_21-11-2019-12:11:37.pdf'>click</a></td>
                    <td>Chiranjeev Kumar</td>
                    <td>09-Jan-2020</td>
               </tr>
               <tr>
                    <td>101</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1054/Project JRF_27-11-2019-06:11:50.pdf'>click</a></td>
                    <td>Dr. SOWMIYA CHAWLA</td>
                    <td>02-Dec-2019</td>
               </tr>
               <tr>
                    <td>102</td>
                    <td>Mining Engineering </td>
                    <td>Project Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/1005/Project Associate_28-11-2019-07:11:47.pdf'>click</a></td>
                    <td>Vasanta Govind Kumar Villuri</td>
                    <td>03-Dec-2019</td>
               </tr>
               <tr>
                    <td>103</td>
                    <td>Environmental Science & Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1158/Project JRF_03-12-2019-06:12:52.pdf'>click</a></td>
                    <td>Dr Saravanan P</td>
                    <td>20-Dec-2019</td>
               </tr>
               <tr>
                    <td>105</td>
                    <td>Electronics Engineering </td>
                    <td>Project Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/1040/Project Associate_03-12-2019-07:12:48.pdf'>click</a></td>
                    <td>Prof. Raghvendra Kumar Chaudhary</td>
                    <td>31-Dec-2019</td>
               </tr>
               <tr>
                    <td>108</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/904/Project JRF_04-12-2019-04:12:11.pdf'>click</a></td>
                    <td>Prof. Somnath Yadav</td>
                    <td>16-Dec-2019</td>
               </tr>
               <tr>
                    <td>109</td>
                    <td>Chemical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1174/Project JRF_12-12-2019-12:12:00.pdf'>click</a></td>
                    <td>Prof. Aditya Kumar</td>
                    <td>05-Jan-2020</td>
               </tr>
               <tr>
                    <td>110</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/895/Project JRF_30-12-2019-04:12:01.pdf'>click</a></td>
                    <td>Dr. Sagar Pal</td>
                    <td>08-Jan-2020</td>
               </tr>
               <tr>
                    <td>111</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets/na'>click</a></td>
                    <td>G C Nayak</td>
                    <td>06-Jan-2020</td>
               </tr>
               <tr>
                    <td>112</td>
                    <td>Electronics Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1166/Project JRF_10-01-2020-12:01:56.pdf'>click</a></td>
                    <td>Prof. Himanshu Bhusan Mishra</td>
                    <td>31-Jan-2020</td>
               </tr>
               <tr>
                    <td>113</td>
                    <td>Mechanical Engineering </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/1038/Project Assistant_21-01-2020-01:01:41.pdf'>click</a></td>
                    <td>Ashis Mallick</td>
                    <td>25-Jan-2020</td>
               </tr>
               <tr>
                    <td>114</td>
                    <td>Electronics Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/899/Project JRF_24-01-2020-07:01:08.pdf'>click</a></td>
                    <td>Sanjeev Kumar Raghuvanshi</td>
                    <td>15-Feb-2020</td>
               </tr>
               <tr>
                    <td>115</td>
                    <td>Applied Geophysics </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/787/Project JRF_31-01-2020-06:01:35.pdf'>click</a></td>
                    <td>Shalivahan</td>
                    <td>07-Feb-2020</td>
               </tr>
               <tr>
                    <td>116</td>
                    <td>Applied Geology </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/1033/Project Assistant_06-02-2020-03:02:26.pdf'>click</a></td>
                    <td>R. ANAND</td>
                    <td>15-Feb-2020</td>
               </tr>
               <tr>
                    <td>117</td>
                    <td>Humanities and Social Sciences </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/837/Project Assistant_07-02-2020-10:02:54.pdf'>click</a></td>
                    <td>Rajni Singh</td>
                    <td>21-Feb-2020</td>
               </tr>
               <tr>
                    <td>118</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/384/Project JRF_13-02-2020-08:02:34.pdf'>click</a></td>
                    <td>V.M.S.R.MURTHY</td>
                    <td>29-Feb-2020</td>
               </tr>
               <tr>
                    <td>119</td>
                    <td>Civil Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/1084/Project JRF_14-02-2020-12:02:59.pdf'>click</a></td>
                    <td>Sukanta Chakraborty</td>
                    <td>19-Feb-2020</td>
               </tr>
               <tr>
                    <td>120</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/972/Project JRF_25-02-2020-07:02:25.pdf'>click</a></td>
                    <td>G C Nayak</td>
                    <td>02-Mar-2020</td>
               </tr>
               <tr>
                    <td>121</td>
                    <td>Humanities and Social Sciences </td>
                    <td>Project Assistant </td>

                    <td> <a href='/assets//uploads/pdfprj/1003/Project Assistant_08-03-2020-03:03:24.pdf'>click</a></td>
                    <td>NIRBAN MANNA</td>
                    <td>25-Mar-2020</td>
               </tr>
               <tr>
                    <td>123</td>
                    <td>Humanities and Social Sciences </td>
                    <td>Field Investigator </td>

                    <td> <a href='/assets//uploads/pdfprj/1003/Field Investigator_11-03-2020-03:03:31.pdf'>click</a></td>
                    <td>NIRBAN MANNA</td>
                    <td>25-Mar-2020</td>
               </tr>
               <tr>
                    <td>124</td>
                    <td>Electrical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/923/Project JRF_18-03-2020-11:03:05.pdf'>click</a></td>
                    <td>Prof. Sukanta Das</td>
                    <td>07-Apr-2020</td>
               </tr>
               <tr>
                    <td>125</td>
                    <td>Electrical Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/923/Project JRF_08-04-2020-12:04:09.pdf'>click</a></td>
                    <td>Prof. Sukanta Das</td>
                    <td>30-Apr-2020</td>
               </tr>
               <tr>
                    <td>127</td>
                    <td>Chemistry </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/895/Research Associate_02-06-2020-04:06:38.pdf'>click</a></td>
                    <td>Sagar Pal</td>
                    <td>10-Jun-2020</td>
               </tr>
               <tr>
                    <td>128</td>
                    <td>Chemistry </td>
                    <td>Research Associate </td>

                    <td> <a href='/assets//uploads/pdfprj/904/Research Associate_04-06-2020-11:06:54.pdf'>click</a></td>
                    <td>Dr. Somnath Yadav</td>
                    <td>20-May-2020</td>
               </tr>
               <tr>
                    <td>130</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/904/Project JRF_05-06-2020-01:06:01.pdf'>click</a></td>
                    <td>Dr. Somnath Yadav</td>
                    <td>30-Jun-2020</td>
               </tr>
               <tr>
                    <td>131</td>
                    <td>Administration </td>
                    <td>Innovation Manager </td>

                    <td> <a href='/assets//uploads/pdfprj/878/Innovation Manager_05-06-2020-02:06:54.pdf'>click</a></td>
                    <td>Prof. Pankaj Mishra</td>
                    <td>20-Jun-2020</td>
               </tr>
               <tr>
                    <td>132</td>
                    <td>Mining Engineering </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/839/Project JRF_12-06-2020-09:06:25.pdf'>click</a></td>
                    <td>Prof. P. S. Paul, Associate Professor and PI of the Project, Department of Mining Engineering, IIT (ISM), Dhanbad</td>
                    <td>08-Jul-2020</td>
               </tr>
               <tr>
                    <td>133</td>
                    <td>Applied Geology </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/164/Project JRF_01-07-2020-08:07:55.pdf'>click</a></td>
                    <td>Prof. A S Venkatesh, Department of Applied Geology, Indina Institute of Technology (Indian School of Mines) Dhanbad, 826004, Jharkhand, Email: asvenkatesh@iitism.ac.in</td>
                    <td>30-Jul-2020</td>
               </tr>
               <tr>
                    <td>134</td>
                    <td>Electronics Engineering </td>
                    <td>Internship </td>

                    <td> <a href='/assets//uploads/pdfprj/963/Internship_02-07-2020-01:07:02.pdf'>click</a></td>
                    <td>Prof. Devendra Chack</td>
                    <td>10-Jul-2020</td>
               </tr>
               <tr>
                    <td>135</td>
                    <td>Chemistry </td>
                    <td>Project JRF </td>

                    <td> <a href='/assets//uploads/pdfprj/856/Project JRF_14-07-2020-09:07:17.pdf'>click</a></td>
                    <td>Prof. Biswajit Chowdhury</td>
                    <td>08-Aug-2020</td>
               </tr>





          </table>

          <br>
     </div>



     <?php
     require("footer.php");
     ?>

</body>

</html>