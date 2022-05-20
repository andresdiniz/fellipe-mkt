var whatsapp = document.getElementById("flutuante");
var formulario = document.getElementById("formulario");



function checkDevice() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
	var celular = true;
	var computador = false;
		// document.getElementById('formulario').style.visibility = 'hidden';
		document.getElementById('formulario').remove();
		document.getElementById('formulario').style.visibility = hidden;
		return true; // está utilizando celular
  }
 else {
	var celular = false;
	var computador = true;
	document.getElementById('flutuante').remove()
	
    return false; // não é celular
  }
 
}
console.log(checkDevice()); // false - estou no PC


const tel = document.getElementById('tel') // Seletor do campo de telefone

tel.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) // Dispara quando digitado no campo
tel.addEventListener('change', (e) => mascaraTelefone(e.target.value)) // Dispara quando autocompletado o campo

const mascaraTelefone = (valor) => {
    valor = valor.replace(/\D/g, "")
    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
    valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
    tel.value = valor // Insere o(s) valor(es) no campo
}

