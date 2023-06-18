<!DOCTYPE HTML>
<html>
<head>
<title>PROJECTS PAGE</title>
<style>
.project{
display:none;
}
.active{
font-weight:bold;
}
.modal{
display:none;
position:fixed;
z-index:999;
top:0;
left:0;
width:80%;
height:80%;
background-color:pink;
justify-content:center;
align-items:center;
}
.modal-content{
background-color:purple;
padding:20px;
border-radius:5px;
}
.progress-bar{
background-color:blue;
height:10px;
position:relative;
margin-bottom:10px;
}
.progress-bar-fill{
background-color:white;
height:70%;
transition:width 1s;
}
</style>
</head>
<body>
<div>
<h1 style="color:blue;">projects page</h1>
<button onclick="projects page('all')">all</button>
<button onclick="projects page('programming')">programming</button>
<button onclick="projects page('photography')">photography</button>
</div>
<div>
<h1 style="color:blue;">projects tools</h1>
<button onclick="projects page('all')">all</button>
<button onclick="projects page('quincy & visual studio code')">quincy & visual studio code</button>
<button onclick="projects page('adobe photoshop')">adobe photoshop</button>
</div>
<div>
<h2>search projects</h2>
<input type="text" id="searchInput" onkeyup="searchProjects()" placeholder="search projects..">
</div>
<div id="project-container">
<div class="project" data-page="programming" data-tools="quincy & visual studio code">
<h3>project 1</h3>
<p>page:programming</p>
<p>tool:quincy & visual studio code</p>
<button onclick="openModal('programming project 1','quincy & visual studio code',80)">Details</button>
</div>
<div class="project" data-page="photography" data-tools="adobe photoshop">
<h3>project 1</h3>
<p>page:photography</p>
<p>tool:adobe photoshop</p>
<button onclick="openModal('photography project 1','adobe photoshop',97)">Details</button>
</div>
</div>
<div id="modal
</body>
</html>