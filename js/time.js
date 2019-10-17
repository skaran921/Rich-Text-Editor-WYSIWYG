function time()
{
    var x=new Date();
    var y="<span class='fa fa-clock-o font-weight-bold'></span>";
    document.getElementById("time").innerHTML="<span class='font-weight-bold'>"+y+" "+x.toLocaleTimeString()+"</span>";
    setTimeout(time,1);
}

