
const categoryFilter=document.getElementById('category-filter');
const technologyFilter=document.getElementById('technology-filter');
const projects=document.getElementByClassName('project');
categoryFilter.addEventListener('change',filterPojects);
technologyFilter.addEventListener('change',filterPojects);
function filterProjects(){
const selectedCategory=categoryFilter.value;
const selectedTechnology=technologyFilter.value;
for(let i=0;i < projects.length; i++){
 const project=projects[i];
const category=project.getAttribute('data-category');
const technology=project.getAttribute('data-technology');
if(
(selectedCategory ===''||selectedCategory===category)&&(selectedTechnology ===''||selectedTechnology===technology)
){
project.style.display='block';
}else{
project.style.display='none';
}
}




