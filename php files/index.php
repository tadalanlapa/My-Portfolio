
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta content="text/html; charset=iso-8859-2"http-equiv="Content-Type">
<style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="lib/script.js"></script>
.myProject{display:none;}
*{box-sizing:border-box;}
body{
font-family:verdana,
sans-serif;
}
*{
box-sizing:border-box;
}
img{
vertical-align:middle;
}
.container{
position:relative;
}
.mySlides{
display:none;
}
.cursor{
cursor:pointer;
}
.prev,
.next{
cursor:pointer;
position:absolute;
top:50%;
width:auto;
padding:16px;
margin-top:-50px;
color:white;
font-weight:bold;
font-size:20px;
border-radius:0 3px 3px 0;
user-select:none;
}
.next{
right:0;
border-radius:3px 0 0 3px;
}
.prev:hover,
.next:hover{
background-color:black;
}
.numbertext{
color:black;
font-size:12px;
padding:8px 12px;
position:absolute;
top:0;
}
.caption-container{
text-align:center;
background-color:none;
padding:2px 16px;
color:white;
}
.row:after{
content:"";
display:table;
clear:both;
}
.column{
float:left;
width:16.66%;
}
.demo{
opacity:0.6;
}
.active,
.demo:hover{
opacity:1;
}
.sm_icon{
width:2px;
height:5px;
}
ul{
 list-style-type:none;
 margin:0;
 padding:0;
 overflow:hidden;
 background-color:pink;
}
li{
float:left;
}
li a{
display:block;
color:purple;
text-align:center;
padding:14px 16px;
text-decoration:none;
}
li a:hover{
background-color:white;
}
.active{
background-color:white;
}
</style>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initialscale=1.0"/>
<title>TADALA'S HOMEPAGE</title>
</head>
<body>
<div class="container">DEMO TEXT</div>
<script src="script 2.js"></script>
<h1 Style="color:blue;">TADALA NLAPA</h1>
<nav>
<ul>
<li><a  href="index.php">HOME</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><a href="skill.php">ABOUT</a></li>
</ul>
</nav>
<br>
<h2 Style="color:red;">BRIEF BIO</h2>
<p><b>hello!my name is Tadala Nlapa and im a currently a level 2 student<br> studying bachelors of science in Information  and Communication Technology
at Mzuzu University</p>
<h3 Style="color:red;">SUMMARY OF MY SKILLS & EXPERIENCE</h3>
<p>I have computer related skills and some of the skills are:<br> ~programming and im familiar with two programming languages namely C and JAVA,<br>I can photoshop pictures and take pictures.<br>The experience i have is running codes in class & on my free time and taking pictures during my class projects</p>
<br>
<h4 Style="color:red;">A PICTURE OF MYSELF</h4>
<br>
<img src="P-IMG-20221207-WA0032.jpg">
<h4 style="color:red;">LIST OF MY SKILLS & TOOLS </h4>
<p>LIST OF MY SKILLS:<br>Programming<br>photography<br>photoshop<br>TOOLS:<br>Quincy for C programming<br>Visual Studio Code for Java Programming<br>Adobe Photoshop for photoshopping pictures</p> 
<h5 Style="text-align:center;""color:red;"><b>FEATURED PROJECTS</b></h5>
<div class="container">
<div class="mySlides">
<div class="numbertext">1/3</div>
<img src="IMG-20221110-WA0015.jpg" style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">2/3</div>
<img src="IMG-20221130-WA0042.jpg" style="width:100%">
</div>
<div class="mySlides">
<div class="numbertext">3/3</div>
<img src="IMG-20221208-WA0043.jpg" style="width:100%">
</div>
<a class="prev" onclick="plusSlides(-1)">-</a>
<a class="next" onclick="plusSlides(1)">-</a>
<div class="caption-container">
<p id="caption"></p>
</div>
<div class="row">
<div class="column">
<img class="demo cursor" src="IMG-20221110-WA0015.jpg" style="width:100%" onclick="currentSlide(1)" alt="photoshopping">
</div>
<div class="column">
<img class="demo cursor" src="IMG-20221130-WA0042.jpg" style="width:100%" onclick="currentSlide(1)" alt="photography">
</div>
<div class="column">
<img class="demo cursor" src="IMG-20221208-WA0043.jpg" style="width:100%" onclick="currentSlide(1)" alt="project">
</div>
</div>
</div>
<footer>
<p Style="color:red;">CONTACT ME ON:</p>
<p><a hef="mail to:tadalanlapa@gmail.com">tadalanlapa@gmail.com</a></p>
<a href="phone:0990133332">0990133332</a>
<div class="social-media">
<a href="https://www.instagram.com/talphan_nlapa"target="_blank">Instagram
<img "sm_icon" src="1161953_instagram_icon.png"></a>
<a href="https://www.facebook.com/talphan_nlapa"target="_blank">Facebook
<img "sm_icon" src="104498_facebook_icon.png"></a>
<a href="https://www.tiktok.com/talphan_nlapa"target="_blank">Tiktok
<img "sm_icon" src="7693325_tiktok_social media_logo_apps_icon.png"></a>
</div>
</a>
</footer>
<br>
<p Style="color:red;">CONTACT FORM</p><br>
<form id="contact form">
<input type="text" id="name Input" placeholder="Your Name">
<input type="email" id="email Input" placeholder="Your Email">
<input type="password" id="password Input" placeholder="Your password">
<button type="submit">submit here </button>
</form>
</body>
</html>



