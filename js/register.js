function enableButton(){
	if(document.getElementById("check").checked)
	{
		document.getElementById("sub").disabled = false;
	}
	else{
		document.getElementById("sub").disabled = true;
	}
}