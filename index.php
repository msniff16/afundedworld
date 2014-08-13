<html>
<head>
  <title>A Funded World</title>
</head>
<meta charset="UTF-8" />
<meta name="description" content="A global crowd-funding platform for college education that allows anyone to donate to an individual seeking to pursue college education in the developing world. Backed by non-profits on the ground.">
<meta name="keywords" content="world, funding, education, crowd-funding, non-profit, college">
<meta name="author" content="A Funded World">
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<body>

<!--Navbar-->
<div class="navbar">
  <div>
    <a class="scroll" href="#mission">MISSION</a>
    <a class="scroll" href="#team">TEAM</a>
      <img src="assets/graphics/logo2.png" />
    <a href="#">PLAN</a>
    <a href="#">CONTACT</a>
  </div>
</div>

<!--Banner-->
<div class="banner">
</div>

<!--Panels-->
<div id="mission" class="panel">
  <div>
    <h2>ABOUT US</h2>
    <p>We are a global crowd-funding platform for higher education that allows people to donate to individuals seeking higher education in developing worlds. At A FundED World, we believe that education is the is one of the most valuable assets a person has, and no one should be denied because of a lack of funds.
    </p>
  </div>
</div>

<div id="team" class="panel bg2">
  <div>
    <h2>THE TEAM</h2>
    <p>Our team of three is just getting off the ground, but has the combined experience to fight for education around the world starting today.
    </p>
    <p2>
    <div>
      <img src="assets/images/tanner_taddeo.jpg" />
      <h2>Tanner Taddeo</h2>
    </div>
    <div>
      <img src="assets/images/matthew_sniff.jpeg" />
      <h2>Matthew Sniff</h2>
    </div>
    <div>
      <img src="assets/images/alex_isaacson.png" />
      <h2>Alex Isaacson</h2>
    </div>
    </p2>
  </div>
</div>

<!--Banner-->
<div class="panel">
  <div>
    <h2>OUR PLAN</h2>
    <p>Our plan is to first establish successful operations in Nigeria and The Gambia and then begin to expand into countries all over the world.
    </p>
  </div>
</div>

<!--Banner-->
<div class="panel bg">
  <div>
    <h2>CONTACT US</h2>
      <p>Contact us at afundedworld@gmail.com with any questions you may have!
  </div>
</div>


<script type="text/javascript">

 $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 2000,'swing');
     });

</script>

</body>
</html>