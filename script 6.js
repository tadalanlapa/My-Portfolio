const projects=document.getElementByClassName('project');
for (let i=0;i < projects.length;i++){
const project =projects[i];
const progress=project.querySelector('.progress');
const completionPercentage=30;
progress.style.width=completionPercentage +'%';
}