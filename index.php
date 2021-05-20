<?php
//index.php

?>
<!DOCTYPE html>
  <html lang="en">
 <head>
  <title>Insight Tutoring</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css3/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css3/style.css">
<link rel="stylesheet" type="text/css" href="css3/responsive.css">

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css3/jquery.convform.css">
<script type="text/javascript" src="js3/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js3/jquery.convform.js"></script>
<script type="text/javascript" src="js3/custom.js"></script>
  <link rel="shortcut icon" href="images3/favicon.png">
 </head>
 <body>
  
  <!-- ChatBot -->
<div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">

      <select data-conv-question="Hello! How can I help you" name="category">
        <option value="WebDevelopment">Need Tutor ?</option>
        <option value="DigitalMarketing">Need Job ?</option>
<option value="Dm2">Services ?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="WebDevelopment">
          <input type="text" name="domainName" data-conv-question="Please, Register and go to Courses Available page">    
        </div>
        <div data-conv-case="DigitalMarketing" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Please, Register and Aceept Bookings"> 
        </div>

<div data-conv-case="Dm2" data-conv-fork="first-question3">
          <input type="text" name="companyName" data-conv-question="Both Online and Offline courses are available"> 
        </div>
      </div>

      <input type="text" name="name" data-conv-question="Please, Enter your name">

      <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Conform">
        <option value="Yes">Conform</option>
      </select>

  	</form>
	</div>
</div>
<!-- ChatBot end -->

<header class="header">
	<div class="container-fluid">
		<div class="row d-flex justify-content-between">
			<div class="col-md-auto">
				<a href="http://127.0.0.1:8000/" class="logo"><h2  style = "color : white">INSIGHT TUTORING</h2></a>
			</div>
			<div class="col-md-auto">
				<nav class="main_nav">
					<ul>
						<li><a href="http://127.0.0.1:8000/">Home</a></li>
						
						<li><a href="#contact">Message</a></li>
					</ul>
				</nav>
			</div>
		</div>		
	</div>
</header>
<div class="banner d-flex align-items-center" style="background-image: url('images3/edu1.jpg');" id="home">
	<ul class="socila_links">
		<li><a href="https://www.facebook.com/insight.tutorial.16"><i class="fa fa-facebook"></i></a></li>
		<li><a href="https://instagram.com/geekspyo?igshid=91xjx6unvm0d"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li><a href="https://twitter.com/InsightTutorial"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	</ul>	
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="banner_cont">
					<h1>Hello Viewers!!</h1>
					<p>Let's Explore Our Comment Section</p>
				</div>
			</div>
		</div>
	</div>
</div>			
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 


<div class="contact-section d-md-flex" id="contact">
  <div class="col-md-6 col-12 contact_section_left">
    <div class="contact_box">
      <i class="fa fa-phone"></i>
      <h3>Phone</h3>
      <p>+917905709153</p>
    </div>
    <div class="contact_box">
      <i class="fa fa-phone"></i>
      <h3>Watsaap</h3>
      <p>9559912930</p>
    </div>
    <div class="contact_box">
      <i class="fa fa-envelope"></i>
      <h3>Email</h3>
      <p>insight@gmail.com</p>
    </div>
    <div class="contact_box">
      <i class="fa fa-map-marker"></i>
      <h3>Address</h3>
      <p>Ewing Christian College, Gaughat, Allahabad Uttar Pradesh : 211003 </p>
    </div>
  </div>
    <div class="col-md-6 col-12 contact_section_right d-flex align-items-center">
    <div class="contact_box">
      <h2 class="bdr-btm">Message to Users!!</h2>
      <form>
        <div>
			<ul>
				<li>We believe that hard work is important</li>
				<li>Our mission is to fulfill the demands of everyone</li>
				<li>We deeply care about the quality of our services</li>
				<li>Insight Tutoring will become a successful start-ups in future</li>
				<li>Our organization promise you to keep your personal data safely</li>
				<li>We promise to discuss about your doubts and learn from mistakes</li>
			</ul>

        </div>
      </form>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
	portfolioList = document.querySelectorAll('.portfolio-box');
	portfolioList.forEach(function(portfolioPic) {
		portfolioPic.addEventListener('click',function(){
			bg = this.style.backgroundImage;
			document.getElementById('port_pop_pic_bg').classList.add("active")
			document.getElementById('port_pop_pic').style.backgroundImage = bg
			document.getElementById('port_pop_pic').classList.add("active")
		});	
	})
	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
			document.getElementById('port_pop_pic_bg').classList.remove("active")
			document.getElementById('port_pop_pic').classList.remove("active")
	})
</script>	
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>