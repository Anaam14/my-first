<!DOCTYPE html>
  <html>
    <head>
         <link rel="stylesheet" type="text/css" href="headerAndFooter.css">
         <link rel="stylesheet" type="text/css" href="newcss2.css">
        <title>Patient Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    </head>
    <body>
    <header class="hero-image"></header>
       
       <div id="MenuBar">
           
           
        <ul>
            <li><a href="http://localhost:8383/My%20Health%20from%20A%20to%20Z/index.html" id="home">Home</a></li>
            <li><a href="http://localhost:8383/My%20Health%20from%20A%20to%20Z/admin.html">Admin</a></li>
            <li><a href="http://localhost:8383/My%20Health%20from%20A%20to%20Z/DoctorPage.html">Doctor</a></li>
            <li><a href="#">Patient</a></li>
            <li><a href="http://localhost:8383/My%20Health%20from%20A%20to%20Z/AboutUS.html">About US</a></li>
            <li><a href="http://localhost:8383/My%20Health%20from%20A%20to%20Z/Contact%20US.html">Contact US</a></li>
        </ul>
        <button class="Regester" >Login</button> 
        <button class="Regester" >Register</button>
        <form>
            <input id="searchText" type="text" placeholder="Search...">
            <button id="searchButton">Search</button>
        </form>
        
       </div>
        <div id="parent"> 
        
        <img id="imdm" src="manager.png" alt="logo" height="350" width="350">
       
        
        
        <button id="butviewDoctor" class="button" onClick="window.location.href='http://localhost:8383/My Health from A to Z/adminsearchd.html';"></button>
        <label id="pviewDoctor">view Doctor </label>
        <button id="butviewPatient" class="button" onClick="window.location.href='http://localhost:8383/My Health from A to Z/PatientName.html';"></button>
        <label id="viewPatien"> view Patient </label>
        <button id="butprofile" class="button" onClick="window.location.href='http://localhost:8383/My Health from A to Z/profileadmin.html';"></button>
        <label id="viewprofile"> my profile </label>
        </div>
    <div id="Footer">
            <div id="first">
                <h3>CONTACT US</h3> 
                <h4>Call:+966-13-589-8110</h4>
                <h4>Email: MyHealth@healthy.com</h4>
            </div>   
            <div id="second">
                <h3>FOLLOW US</h3>
                <div id="pic"> 
                <img src="img/facebook.png" alt="facebook" style="width:65px; height:65px;">
                <img src="img/google.png" alt="google" style="width:65px; height:65px;">
                <img src="img/instagram.png" alt="instagram" style="width:65px; height:65px;">
                </div>
                <div id="pic2">
                <img src="img/linkedin.png" alt="linkedin" style="width:65px; height:65px;">
                <img src="img/twitter.png" alt="twitter" style="width:65px;  height:65px;">
                <img src="img/youtube.png" alt="youtube" style="width:65px; height:65px;">    
                </div>
            </div>
        <div id="Fourth">
            <h3><Strong>About US</strong></h3>
           <p><b>My Health website is a site for all who are thirsty to knowledge and who are sick seekig medical treatment </b></p>
        </div>
    </div>    
       
 </body>
    
</html>
    

