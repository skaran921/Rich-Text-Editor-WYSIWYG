
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta name="description" content="Simple Notepad In Html,Css,JS,PHP">
    <meta name="keywords" content="skaran921,karan soni,Notepad in html">
    <meta name="author" content="skaran921,Karan Soni">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="alertify/css/alertify.css">
    <link rel="icon" href="logo/logo.png" type="img/png"> 
    <title>Notepad</title>	
	<script src="js/main.js"></script>
  </head>
  <body onload="iFrameOn()">
      <nav class="navbar navbar-expand-md bg-light navbar-light	fixed-top">
	      <a href="index.php" title="" class="navbar-brand">Notepad</a><!------brand-------->
		  
		  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"><!-----------button---->
            <span class="navbar-toggler-icon"></span>
		  </button>		  
		  
		 <div id="menu" class="collapse navbar-collapse">
		    <ul class="navbar-nav">			
			   <li class="nav-item dropdown">
			       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
				     <div class="dropdown-menu bg-light">
                        <a href="index.php" class="dropdown-item"><i class="fa fa-new" onclick=""></i>New</a> 
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#openDialog"><i class="fa fa-new"></i>Open</a> 
                        <a href="#" class="dropdown-item"  name="save" onclick="saveData()"><i class="fa fa-save"></i>Save</a> 
                        <a href="#" class="dropdown-item" onclick="printFile()"><i class="fa fa-print"></i>Print</a> 
					 </div>					 
			   </li>		  
			</ul>
			
			 <ul class="navbar-nav">			
			   <li class="nav-item dropdown">
			       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Edit</a>
				     <div class="dropdown-menu bg-light">
                        <a href="#" class="dropdown-item" accesskey="z" onclick="insertSelectAll()">Select All</a> 
                        <a href="#" class="dropdown-item" onclick="insertUndo()">Undo</a> 
                        <a href="#" class="dropdown-item" onclick="insertCut()">Cut</a> 
                        <a href="#" class="dropdown-item" onclick="insertCopy()"></i>Copy</a> 
                        <a href="#" class="dropdown-item" onclick="insertPaste()"></i>Paste</a> 
					 </div>					 
			   </li>		  
			</ul>
			
			
			 <ul class="navbar-nav">			
			   <li class="nav-item dropdown">
			       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Insert</a>
				     <div class="dropdown-menu bg-light">
                        <a href="#" class="dropdown-item" onclick="setBgColor()">Background Color</a> 
                        <a href="#" class="dropdown-item" onclick="addButton()">Button</a> 
                        
					 </div>					 
			   </li>		  
			</ul>
			
			 <ul class="navbar-nav">			
			   <li class="nav-item dropdown">
			       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Format</a>
				     <div class="dropdown-menu bg-light">
                        <a href="#" class="dropdown-item" onclick="insertCenter()">Center</a>                        
                        <a href="#" class="dropdown-item" onclick="insertLeft()">Left</a>                        
                        <a href="#" class="dropdown-item" onclick="insertRight()">Right</a>                        
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#fontModal">Font</a>                        
                        
					 </div>					 
			   </li>		  
			</ul>
			
			<ul class="navbar-nav">			
			   <li class="nav-item ">
			       <a href="#" class="nav-link" onclick="about()">About</a>				    			 
			   </li>		  
			</ul>
			
         </div>
	</nav>
	<!---------------------------------------------------->
	
	<div class="modal" id="openDialog">
	   <div class="modal-dialog modal-lg">
	      <div class="modal-content">
		       <div class="modal-header">
			       <h6 class="modal-title"><b>Open</b></h6>
				     <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
			   </div>
			     <div class="modal-body">
				     <div class="table-responsive">
					     <table class="table table-striped text-center">
						     <tr class="thead-light">
							     <th>Sr. No.</th>
							     <th>Title</th>
							     <th>Created On</th>
							     <th>Updated On</th>
								 <th></th>
								  <?php file_datail();?>
							 </tr>
						 </table>
					 </div>
				 </div>
				 <div class="modal-footer">
				 </div>
		  </div>
	   </div>
	</div>
	
	<!---------------------------------------------------->	   
	   <div class="modal" id="fontModal">
	       <div class="modal-dialog">
		       <div class="modal-content">
			             
						 <div class="modal-header">
						     <h6 class="modal-title">
							     <b>Font</b>
							 </h6>
							 <button type="button" data-dismiss="modal" class="text-danger close">&times;</button>
						 </div>
						 
						 <div class="modal-body">
						     
							 <form action="index.php" method="post">					   
                        <div class="form-group form-inline">					    
					     	<label class="form-check-label"><b>Select Font-Style:&nbsp;</b></label>
							  <select name="font_style" id="font_style" class="form-control" required autofocus>
							      <option></option>
								 <optgroup label="A">                          								 
							      <option style="font-family:Agency FB">Agency FB</option>
							      <option style="font-family:Algerian">Algerian</option>
							      <option style="font-family:Arial">Arial</option>
							      <option style="font-family:Arial Black">Arial Black</option>
							      <option style="font-family:Arial Narrow">Arial Narrow</option>
							      <option style="font-family:Arial Rounded MT Bold">Arial Rounded MT Bold</option>
								</optgroup> 
								<optgroup label="B">
							      <option style="font-family:Bahnschrift">Bahnschrift</option>
							      <option style="font-family:Bahnschrift SemiBold SemiConden">Bahnschrift SemiBold SemiConden</option>
							      <option style="font-family:Baskerville Old Face">Baskerville Old Face</option>
							      <option style="font-family:Bauhaus 93">Bauhaus 93</option>
							      <option style="font-family:Berlin Sans FB">Berlin Sans FB</option>
							      <option style="font-family:Berlin Sans FB Demi">Berlin Sans FB Demi</option>
							      <option style="font-family:Bernard MT Condensed">Bernard MT Condensed</option>
							      <option style="font-family:Blackadder ITC">Blackadder ITC</option>
							      <option style="font-family:Bodoni MT Poster Compressed">Bodoni MT Poster Compressed</option>
							      <option style="font-family:Book Antiqua">Book Antiqua</option>
							      <option style="font-family:Bookman Old Style">Bookman Old Style</option>
							      <option style="font-family:Bradley Hand ITC">Bradley Hand ITC</option>
							      <option style="font-family:Brush Script MT">Brush Script MT</option>
								</optgroup>
                                <optgroup label="C">								
							      <option style="font-family:Calibri">Calibri</option>
							      <option style="font-family:Castellar">Castellar</option>
							      <option style="font-family:Century Gothic">Century Gothic</option>
							      <option style="font-family:Colonna MT">Colonna MT</option>
							      <option style="font-family:Comic Sans MS">Comic Sans MS</option>
							      <option style="font-family:Copperplate Gothic Bold">Copperplate Gothic Bold</option>
							      <option style="font-family:Copperplate Gothic LIGHT">Copperplate Gothic LIGHT</option>
							      <option style="font-family:Curlz MT">Curlz MT</option>
								</optgroup>
								 <optgroup label="E">
							      <option style="font-family:Edwardian Script ITC">Edwardian Script ITC</option>
							      <option style="font-family:Engravers MT">Engravers MT</option>
							      <option style="font-family:Eras Demi ITC">Eras Demi ITC</option>
								</optgroup>
                                 <optgroup label="F">								
							      <option style="font-family:Forte">Forte</option>
							      <option style="font-family:Franklin Gothic Demi">Franklin Gothic Demi</option>
							      <option style="font-family:Franklin Gothic Heavy">Franklin Gothic Heavy</option>
							      <option style="font-family:Freestyle Script">Freestyle Script</option>
							      <option style="font-family:French Script MT">French Script MT</option>
								</optgroup>
                                <optgroup label="G">								
							      <option style="font-family:Gabriola">Gabriola</option>
							      <option style="font-family:Garamond">Garamond</option>
							      <option style="font-family:Gigi">Gigi</option>
							      <option style="font-family:Gill Sans MT">Gill Sans MT</option>
							      <option style="font-family:Gill Sans MT Condensed">Gill Sans MT Condensed</option>
							      <option style="font-family:Gill Sans MT Ext Condensed Bold">Gill Sans MT Ext Condensed Bold</option>
							      <option style="font-family:Goudy Old Style">Goudy Old Style</option>
								</optgroup>
								<optgroup label="H">
							      <option style="font-family:Haettenschweiler">Haettenschweiler</option>
							      <option style="font-family:Harlow Solid Italic">Harlow Solid Italic</option>
							      <option style="font-family:Harrington">Harrington</option>
							      <option style="font-family:High Tower Text">High Tower Text</option>
							      <option style="font-family:HoloLens MDL2 Assets">HoloLens MDL2 Assets</option>
								</optgroup>
								<optgroup label="I">  
							      <option style="font-family:Impact">Impact</option>
							      <option style="font-family:Informal Roman">Informal Roman</option>
							      <option style="font-family:Ink Free">Ink Free</option>							      
								</optgroup>
								<optgroup label="J">  
							      <option style="font-family:Jokerman">Jokerman</option>
							      <option style="font-family:Juice ITC">Juice ITC</option>							      
								 </optgroup>
								<optgroup label="K">
							      <option style="font-family:Kristen ITC">Kristen ITC</option>
							      <option style="font-family:Kunstler Script">Kunstler Script</option>								
								</optgroup>
								<optgroup label="L">								  
							      <option style="font-family:Lucida Calligraphy">Lucida Calligraphy</option>
							      <option style="font-family:Lucida Console">Lucida Console</option>
							      <option style="font-family:Lucida Handwriting">Lucida Handwriting</option>
							      <option style="font-family:Lucida Sans Typewriter">Lucida Sans Typewriter</option>							     
								</optgroup>
								<optgroup label="M">
							      <option style="font-family:Magneto">Magneto</option>
							      <option style="font-family:Maiandra GD">Maiandra GD</option>
							      <option style="font-family:Matura MT Script Capitals">Matura MT Script Capitals</option>
							      <option style="font-family:Mistral">Mistral</option>
							      <option style="font-family:Monotype Corsiva">Monotype Corsiva</option>
								</optgroup>
								<optgroup label="N">
							      <option style="font-family:Niagara Engraved">Niagara Engraved</option>
							      <option style="font-family:Niagara Solid">Niagara Solid</option>							      
								</optgroup>
								<optgroup label="O"> 
							      <option style="font-family:Old English Text MT">Old English Text MT</option>							      
								 </optgroup>
								<optgroup label="P">
							      <option style="font-family:Palace Script MT">Palace Script MT</option>
							      <option style="font-family:Palatino Linotype">Palatino Linotype</option>
							      <option style="font-family:Papyrus">Papyrus</option>
							      <option style="font-family:Parchment">Parchment</option>
							      <option style="font-family:Perpetua">Perpetua</option>
							      <option style="font-family:Pristina">Pristinasss</option>
								</optgroup>
								<optgroup label="R">
							      <option style="font-family:Rage Italic">Rage Italic</option>
							      <option style="font-family:Ravie">Ravie</option>
							      <option style="font-family:Rockwell">Rockwell</option>
							      <option style="font-family:Rockwell Extra Bold">Rockwell Extra Bold</option>
							      <option style="font-family:Roman">Roman</option>
								</optgroup>
								<optgroup label="S">		    
							      <option style="font-family:Script">Script</option>
							      <option style="font-family:Script MT Bold">Script MT Bold</option>
							      <option style="font-family:Segoe Print">Segoe Print</option>
							      <option style="font-family:Segoe Script">Segoe Script</option>
							      <option style="font-family:Showcard Gothic">Showcard Gothic</option>
								</optgroup>
								<optgroup label="T">	  
							      <option style="font-family:Tahoma">Tahoma</option>							      
							      <option style="font-family:Tempus Sans ITC">Tempus Sans ITC</option>
							      <option style="font-family:Times New Roman">Times New Roman</option>
								</optgroup>
								<optgroup label="V">  
							      <option style="font-family:Verdana">Verdana</option>
							      <option style="font-family:Vladimir Script">Vladimir Script</option>
							      <option style="font-family:Vivaldi">Vivaldi</option>
							    </optgroup>  
							  </select>&nbsp;&nbsp;&nbsp;
							    <button type="button" name="save" data-dismiss="modal" class="btn card" accesskey="S" style="background-color:#452;color:white;" onclick="insertFontStyle()">
								      <i class="fa fa-save"> OK</i>
							    </button>
						</div>	
						   
					  </form>
							
						 </div>
						  
						  <div class="modal-footer">
						  </div>
			   </div>
		   </div>
	   </div>
	<br>
	<br>
	<br>
	<div class="container-fluid">
	       <div class=" alert font-weight-bold alert-success" style="width:30%" id="file_name" style="display:none"></div>
	     <ul class="nav justify-content-center bg-dark" style="padding:7px">
		    <li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="textBold()">B</a>			   
			</li>&nbsp;
			<li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="textItalic()"><i>i</i></a>			   
			</li>
			&nbsp;
			<li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="textUnderline()"><u>U</u></a>			   
			</li>&nbsp;
			<li class="nav-item">
			   <input type="color" name="color" id="color" onchange="textColor()" class="card" style="margin-top:7px;">	   
			</li>&nbsp;
			<li class="nav-item">
			   <select name="textSize" id="textSize" onchange="textSize()" class="form-control card">
			       <option value="">Font Size</option>
			     <option>1</option>  <option>2</option>  <option>3</option>  <option>4</option>   <option>6</option>   <option>7</option>
			     <option>8</option>  <option>9</option>  <option>10</option> <option>12</option> <option>14</option> <option>16</option>
			     <option>18</option> <option>20</option> <option>24</option> <option>26</option> <option>28</option> <option>30</option>
			     <option>34</option> <option>38</option> <option>42</option> <option>46</option> <option>50</option> <option>52</option>
               </select>			   
			</li>&nbsp;
			 <li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="insertHR()">HR</a>			   
			</li>&nbsp;
			 <li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="insertOL()">OL</a>			   
			</li>&nbsp;
			 <li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="insertUL()">UL</a>			   
			</li>&nbsp;
		    
			 <li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-primary" onclick="insertLink()">Link</a>			   
			</li>&nbsp;
			
			 <li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-dark" onclick="UnLink()">UnLink</a>			   
			</li>&nbsp;
			
			<li class="nav-item">
			    <a href="#" class="btn card font-weight-bold text-success" onclick="insertUndo()">Undo</a>			   
			</li>&nbsp;
			
		 </ul>
	  <div class="card">		
		<div class="card-body">
		    <form action="index.php" name="mainForm" method="post">
			   <div class="form-group">
			         <input type="hidden" name="name" id="name"required>
			         <textarea name="hidden_text" id="hidden_text" class="form-control" rows="20" style="display:none"></textarea>
					 <iframe name="textBox" id="textBox" class="card form-control" height="300"></iframe>
			   </div>
			</form>
		</div>
	  </div>	
	</div>
	
	
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="alertify/js/alertify.js"></script>
	<!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </body>
</html>

<script>
document.getElementById("file_name").style.display="none";
   function setBgColor()
   {
	   var msg1="<b>Select A Color:</b> <input type='color' id='bgColorValue' onchange=setBgColor1() class='form-control card'>";
	   alertify.alert(msg1);
   }
   
   	    function setBgColor1()
		{
			var bgColorValue=document.getElementById('bgColorValue').value;			
			textBox.document.execCommand('BackColor',false,bgColorValue);
		}
		
	function about()
	{
		var msg1="<div class='text-success card font-weight-bold'><center><i class='fa fa-info-circle' style='font-size:50px;'></i> Designed & Developed By skaran921<br>V1.0<br>24 June 2018</center>";
		alertify.alert(msg1);
		alertify.log(msg1);
	}		
	
	function insertFontStyle()
   {
	var fontStyle=document.getElementById("font_style").value;
	textBox.document.execCommand('FontName',false,fontStyle);
   }
		
</script>

<?php 
if(isset($_POST["hidden_text"]))
{
	$name=$_POST["name"];
	$data=addslashes($_POST["hidden_text"]);
	include 'db.php';
	$sql="INSERT INTO file(name,data)VALUES('$name','$data')";
	$sql1="SELECT * FROM file WHERE name='$name'";
	$result1=$conn->query($sql1);
  if($row1=$result1->fetch_assoc())
  {
	  ?>
	      <script>		     
		      var msg="<div class='text-danger card font-weight-bold'><center><i class='fa fa-times-circle' style='font-size:50px;'></i></center> File Already Save By This Name!!!</div>";
		     alertify.alert(msg);
		     alertify.log(msg);	
     	 window.frames['textBox'].document.body.innerHTML="<?php echo $data;?>";			 
		  </script>
	  <?php	  	  
  }
  else
  {
	$result=$conn->query($sql);
	if($result==TRUE)
	{
		?>
		  <script>
		      msg1="<div class='text-success font-weight-bold card'><center><i class='fa fa-check-circle' style='font-size:50px;'></i></center>File Saved!!!</div>";
		     alertify.alert(msg1);
		     alertify.log(msg1);
		  </script>
		<?php
	}
	else
	{
		?>
		   <script>
		      msg1="<div class='text-danger font-weight-bold card'><center><i class='fa fa-check-circle' style='font-size:50px;'></i></center>error!!!File Not Saved!!!</div>";
		     alertify.alert(msg1);
		     alertify.log(msg1);
		  </script>
		<?php
	}
  }
}
?>

<?php 
  function file_datail()
  {
	  include 'db.php';
	  $sr=1;
	  $sql="SELECT * FROM file";
	  $result=$conn->query($sql);
	  while($row=$result->fetch_assoc())
	  {
		  ?>
		     <tr>
			    <td class="bg-light"><?php echo $sr; ?></td>
			    <td class="card font-weight-bold"><?php echo $row['name'];?></td>
			    <td style='background-color:yellow'><?php echo date("d-m-y h:i:s A",strtotime($row['c_id']));?></td>
			    <td style='background-color:yellow;font-weight:bold;'><?php echo date("d-m-y h:i:s A",strtotime($row['u_id']));?></td>
				<td>
				  <form action="index.php" method="post">
				     <input type="hidden" name="file_id" id="file_id" value="<?php echo $row['id'];?>" required>
					 <button type="submit" name="open" class="btn btn-primary">Open</button>
				  </form>
				</td>
			 </tr>
		  <?php 
		  $sr++;
	  }
  }
?>


<?php
if(isset($_POST["open"]) && isset($_POST["file_id"]));
{
  if(!empty($_POST['file_id']))
  {
   	$file_id=$_POST["file_id"];
	include 'db.php';
	$sql="SELECT * FROM file WHERE id='$file_id'";
	$result=$conn->query($sql);
	if($row=$result->fetch_assoc())
	{
		?>
		 <script>
		    document.getElementById("file_name").innerHTML="<?php echo "File Name: ".$row['name']; ?>";
		    document.getElementById("file_name").style.display="block";
			window.frames['textBox'].document.body.innerHTML="<?php echo addslashes($row['data']); ?>";
		 </script>
		<?php 
	}
  }
}	
?>

<script>
 
</script>