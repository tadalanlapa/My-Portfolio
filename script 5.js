const projects=document.getElementsByClassName('project');
const modal=document.createElement('div');
modal.className='modal';
document.body.appendChild(modal);
for(let i=0;i< projects.length; i++){
const project=projects[i];
const projectDetails=project.querySelector('.project-details');
project.addEventListener('click',function(){
modal.innerHTML='';
const modalContent.classNam='modal-content';
modalContent.className='modal-content';
modalContent.innerHTML=projectDetails.innerHTML;
modal.appendChild(modalContent);
modal.style.display='block';
});
}
modal.addEventListener('click',function(event){
if(event.target===modal){
modal.style.display='none';
}
});