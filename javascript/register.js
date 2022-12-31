/*Function for validating password in register form */
function validate(event)
{
   let pass1= document.getElementById("password").value;
   let pass2= document.getElementById("password2").value;
  
   if(pass1!=pass2)
   {
       window.alert("confirmation password don't match");
       event.preventDefault();
      
    }

}


















