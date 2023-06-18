const searchInput=document.getElementById('search-input');
const projects=document.getElementsByClassName('project');
searchInput.addEventListener('input',searchProjects);
 function searchProjects(){
const searchTerm=searchInput.value.toLowerCase();
for(let i=0;i< projects.length; i++){
const project=projects[i];
const projectName=project.textContent.toLowerCase();
if (projectName.includes(searchTerm)){
project.style.display='block';
}else{
project.style.display='none';
}
}
}