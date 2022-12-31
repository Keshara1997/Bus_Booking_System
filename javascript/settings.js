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

/*function for dropdown menu */
function dropdown()
{
    let container=document.getElementById('drop');
    if(container.classList.contains('drop_start'))
    {
        container.classList.remove('drop_start');
        container.classList.add('drop_finish');

    }
     else if(container.classList.contains('drop_finish'))
    {
        container.classList.remove('drop_finish');
        container.classList.add('drop_start');

    }
    else{
        container.classList.remove('drop');
        container.classList.add('drop_start');

    }
}


