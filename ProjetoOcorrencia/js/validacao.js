// JavaScript Document

function campoNulo(){
	
var dados = document.getElementsByTagName('input'); 
var raCpf = document.getElementById('Prontuario').value;

if (Prontuario.length < 11){
	alert ('ra invalido');
	return false;
}

		for(var i=0; i<dados.length; i++){ 

		if(dados[i].value == ''){ 
			alert("Campo não preencido, por favor verificar");
			dados[i].focus();
			return false;
		}
	}
} 