
/*increse decrease */
function toog(numb)
{
    if(numb==1)
    {   
       let va=document.getElementById("no_of_adults").value;
       ++va;
       document.getElementById('no_of_adults').value=va;
    }
     else if(numb==0 && document.getElementById("no_of_adults").value>0)
    {   
       let va=document.getElementById("no_of_adults").value;
       --va;
       document.getElementById('no_of_adults').value=va;
    }
    
    
}

function toog1(numb)
{
    if(numb==1)
    {   
       let va=document.getElementById("no_of_children").value;
       ++va;
       document.getElementById('no_of_children').value=va;
    }
     else if(numb==0 && document.getElementById("no_of_children").value>0)
    {   
       let va=document.getElementById("no_of_children").value;
       --va;
       document.getElementById('no_of_children').value=va;
    }
    
    
}