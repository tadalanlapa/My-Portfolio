
<!DOCTYPE HTML>
<html>
<head>
<style>
.skill{
margin-bottom:20px;
}
.skill-name{
font-weight:bold;
}
.skill-bar{
background-color:purple;
height:20px;
position:relative;
}
.skill-progress{
height:70%;
background-color:pink;
transition:width 1s;
}
.skill-level{
position:absolute;
top:0;
right:5px;
color:white;
font-size:12px;
line-height:20px;
}
.tooltip{
position:relative;
display:inline-block;
cursor:pointer;
}
.tooltip-text{
visibility:hidden;
background-color:pink;
color:purple;
text-align:center;
padding:5px;
border-radius:5px;
position:absolute;
z-index:1;
bottom:100%;
left:50%;
transform:translateX(-50%);
opacity:0;
transition:opacity 0.3s, visibility 0s linear 0.3s;
}
.tooltip:hover .tooltip-text{
visibility:visible;
opacity:1;
transition-delay:0s;
}
</style>
<title>skills page</title>
</head>
<body>
<h1>PROGRAMMING</h1>
<div class="skill">
<span class="skill-name">Programming in C & Java</span>
<div class="skill-bar">
<div class="skill-progress" style="width:60%;"></div>
<span class="skill-level">60%</span>
</div>
<div class="tooltip">
<span class="tooltip-text">use Quincy for C programming & Visual Studio Code for Java programming.</span>
<span>more info</span>
</div>
</div>
<h2>PHOTOGRAPHY</h2>
<div class="skill">
<span class="skill-name">Photoshopping</span>
<div class="skill-bar">
<div class="skill-progress" style="width:70%;"></div>
<span class="skill-level">70%</span>
</div>
<div class="tooltip">
<span class="tooltip-text">use Adobe photoshop to photoshop pictures</span>
<span>more info</span>
</div>
</div>
<script src="script.js">
</script>
<script>
var skills=document.querySelectorAll('.skill');
skills.forEach(function(skill){
skill.addEventListener('mouseover',function(){
var skillName=this.querySelector('.skill-name').textContent;
this.setAttribute('title','proficiency in'+skillName);
});
});
var progressBars=document.querySelectorAll('.skill-progress');
progressBars.forEach(function(progressBar){
var width=progressBar.style.width;
progressBar.style.width='0';
setTimeout(function(){
progressBar.style.width=width;
},500);
});
</script>
</body>
</html>
