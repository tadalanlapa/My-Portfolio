window.addEventListener('DOMContentLoaded',function(){
var form=document.getElementById('contact -form');
form.addEventListener('submit',function(event){
event.preventDefault();
var nameInput=document.getElementById('name');
var emailInput=document.getElementById('email');
var name=nameInput.value.trim();
var name=emailInput.value.trim();
if(name==''){
alert('please enter your name.');
nameInput.focus();
return;
}
if(email==''){
alert('please enter your email.');
emailInput.focus();
return;
}
alert('Form submitted succesfully,thankn you!');
form.reset();
});
});