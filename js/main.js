function iFrameOn()
{
	textBox.document.designMode="on";
}

function textBold()
{
	textBox.document.execCommand('bold',false,null);
}

function textItalic()
{
	textBox.document.execCommand('italic',false,null);
}

function textUnderline()
{
	textBox.document.execCommand('underline',false,null);
}
function textSize()
{
	var textSize=document.getElementById('textSize').value;
	textBox.document.execCommand('FontSize',false,textSize);
}

function textColor()
{
	var color=document.getElementById('color').value;
	textBox.document.execCommand('ForeColor',false,color);
}

function insertHR()
{
	textBox.document.execCommand('inserthorizontalrule',false,null);
}

function insertOL()
{
	textBox.document.execCommand("InsertOrderedList",false,null);
}

function insertUL()
{
	textBox.document.execCommand("InsertUnorderedList",false,null);
}	

function insertLink()
{
	var linkValue=prompt('Enter Link Here...','http://');
	textBox.document.execCommand('CreateLink',false,linkValue);
}

function UnLink()
{
	textBox.document.execCommand('UnLink',false,null);
}

function insertUndo()
{
	textBox.document.execCommand('undo',false,null);
}	

function insertSelectAll()
{
	textBox.document.execCommand('SelectAll',false,null);
}

function insertCut()
{
	textBox.document.execCommand('Cut',false,null);
}

function insertCopy()
{
	textBox.document.execCommand('Copy',false,null);
}

function insertPaste()
{
	textBox.document.execCommand("Paste",false,null);
}

function insertCenter()
{
	textBox.document.execCommand('JustifyCenter',false,null);
}

function insertLeft()
{
	textBox.document.execCommand('JustifyLeft',false,null);
}
function insertRight()
{
	textBox.document.execCommand('JustifyRight',false,null);
}

function printFile()
{
	textBox.document.execCommand("print",false,null);
}

function saveData()
{
	 var name=prompt("Title Of Document?");
	if(name=="")
	{
		alert("Please Enter Title/Name OF Document");
	}
	else	
	{
	 document.getElementById("name").value=name; 
	 var textarea1=document.getElementById("hidden_text");
	 textarea1.value=window.frames['textBox'].document.body.innerHTML;
	 document.forms[0].submit();
	}
}
