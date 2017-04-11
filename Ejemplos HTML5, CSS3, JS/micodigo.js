
/*function mostraralerta(){
	alert('hizo clic!');
}
function hacerclic(){
	document.getElementsByTagName('p')[0].onclick=mostraralerta;
}
window.onload=hacerclic;
*/

function mostraralerta(){
	alert('hizo clic!');
} 

/*
Una forma
function hacerclic(){
	document.querySelector("#principal p:first-child").onclick=mostraralerta;
} */

/*Otra - con All->

function hacerclic(){
	var lista=document.querySelectorAll("#principal p");
	for(var f=0; f<lista.length; f++){
		lista[f].onclick=mostraralerta;
	}
}*/

/*
Otra forma -> combinando byId y queryAll


function hacerclic(){
	var lista=document.getElementById('principal').querySelectorAll("p");
	lista[0].onclick=mostraralerta;
} 

window.onload=hacerclic;*/

/*
Usando addEventListener
*/

function mostraralerta(){
	alert('hizo clic!');
}
function hacerclic(){
	var elemento=document.getElementsByTagName('p')[0];
	elemento.addEventListener('click', mostraralerta, false);
}

window.addEventListener('load', hacerclic, false);