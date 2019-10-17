  function getHour()
  {
         var x=new Date();
         var h=x.getHours();        	 
        if(h==8)
		{
			document.getElementById("hour").innerHTML="<div class='text-success font-weight-bold'>Breakfast Time</div>";	
		}
		else if(h==13)
		{
			document.getElementById("hour").innerHTML="<div class='text-success font-weight-bold'>Lunch Time</div>";	
		}
		else if(h==20)
		{
			document.getElementById("hour").innerHTML="<div class='text-success font-weight-bold'>Dinner Time</div>";	
		}
		else
		{
			document.getElementById("hour").innerHTML="<div class='text-danger font-weight-bold'> Mess OFF</div>";	
		}
      setInterval(getHour,1000);	  
  }
