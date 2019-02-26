function showtext(){
	if(document.getElementById("textarea").value == ''&&!document.getElementById("textarea").value.match(/\S/)){
		document.getElementById("hideP").innerHTML="You thought cannot be empty, 3PO! You know better!";
	}
}

