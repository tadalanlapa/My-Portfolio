var fields={};
document.addEventListener("DOMContentLoaded",function(){
fields.nameInput=document.getElementById('nameInput');
fields.emailInput=document.getElementById('emailInput');
fields.passwordInput=document.getElementById('passWordInput');
})
function is NotEmpty(value){
if (value==null||typeof value==='undefined')return false;
return (value.length >0);
}
function isEmail(email){
let regex=/^[a-zA-Z0-9.!#$%&'*+/=?^-'{|}~-]+@[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
return regex.test(String(email).toLowerCase());
}
function isPasswordValid(password){
if(password.length>5){
return true;
}
return false
}
function fieldValidation(field,validationFunction){
if(field==null)return false;
let isFieldValid=validationFunction(field.value)
if(!isFieldValid){
field.className='placeholderRed';
}else{
field.className='';
}
return isFieldValid;
}
function isValid(){
var valid=true;
valid &=fieldValidation(fields.nameInput,isNotEmpty);
valid &=fieldValidation(fields.emailInput,isEmail);
valid &=fieldValidation(fields.passwordInput,isPasswordValid);
valid &=fieldValidation(fields.passwordCheck,isPasswordValid);
valid&=arePasswordsEqual();
return valid;
}
function arePasswordsEqual(){
if(fields.password.value==fields.passwordCheck.value){
field.password.className='placeholderRed';
field.passwordCheck.className='placeholderRed';
return true;
}
return false
}
class User{
constructor(nameInput,email){
this.nameInput=nameInput;
this.email=email;
}
}
function sendContact(){
if(isValid()){
let user=new user(nameInput.value,email.value);
alert('${user.nameInput}thanks for registering with TALPHAN tech company.')
}else{
alert("there was an error re-input your data")
}
}
