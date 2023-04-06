

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
 
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}



.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.header{
  height: 100%;
  background-color: #555;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<div>//</div>

<?php include 'menu.php'; ?>
<body>

<div class="about-section">
<header>
          <div class="mr-right">
            <nav class="site-navigation position-relative text-right" role="navigation" style="margin-top:-30px; margin-left:-50px; margin-right:-50px;">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
				  <li></li>
                  <li><a href="index.php" class="nav-link text-left">Home</a><br></li>
            
                  <li><a href="about.php" class="nav-link text-left">About</a></li>
			  </li>
			  </ul>
            </nav>
          </div>        
</header>
</div>
<div class="header">
  <br><br>
  <h1><center>About Us SHC Work Scholarship's </center></h1>
 <center> <p>Why Academics Provides Works.</p>
  <p>The Poverty Students Part timely work and study,and they can earn the money.</p></center>
  <br>
  <br>
</div>

          
         
              <div class="feature-1-content">
                <h2>Trusted and easy works</h2>
                <p>The works are very easy and the students they can manage their studies also.</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
           
          
              <div class="feature-1-content">
                <h2>Tools for Students</h2>
                <p>There are three types of works College garden,College Library and also the nearly schools</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            
    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About Our College</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead"> In the field of Higher Education we are committed to <br>
            * Academic excellence<br>
            * Healthy standards in extracurricular practices<br>
            * Social rrelevant research<br>
            * Courses leading to employment and entrepreneurship,and<br>
            * Continuous progress of the institution.<br>
          Socially, we work towards <br>
           * Serving preferentially the underprivileged and rural youth<br>
           * Educating them to social consciousness of rights and responsibilities,<br>
           * Rooting out social evils, building communities,<br>
           * Promoting total literacy, education and development of the neighbourhood.
          Spiritually, we aim at<br>
           * Integrating ethical, cultural and political values<br>
           * Developing a sense of the Divine present in nature and in the human person.<br>
          This is done by means of group activities and personal guidance, in a family atmosphere.<br>
In this way, we are READY FOR EVERY GOOD WORK (ad omne opus bonum instructi) in collaboration with the government and people of good will, to create a society more worthy of human beings.<br> </p>
          </div>
        </div>
      </div>
    </div>
     
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>College Principle</h3>
            <p>Primacy of God</p> <p> Honesty</p> <p> Respect for all</p><p>Being Responsible</p><p>Pursuit of Excellence</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <div class="col-md-6 mt-3 ml-5">
            <h3>Key of Success</h3>
            <p>Smart work </p><p> Creative Thinking</p>  <p> Being Responsible</p>
          </div>
        </div>
      </div>
    </div>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

