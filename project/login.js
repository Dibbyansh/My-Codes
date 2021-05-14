function myfunction(){
if((document.myform.user.value=="")&&(document.myform.pass.value=="" ))	{
    alert("Enter your Detail");
    document.myform.pass.user.focus();
return false;}
    if(document.myform.user.value=="" )	{
    alert("Enter your Username");
    document.myform.user.focus();
return false;
    }
    if(document.myform.pass.value=="")	{
    alert("Enter your Password");
    document.myform.pass.focus();
return false;
    }
else{
alert("Logged in ");  
return true;
}
}