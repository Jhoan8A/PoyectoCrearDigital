with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombreUsuario.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			nombreUsuario.focus();
		}
		if(ok && pw.value==""){
			ok=false;
			alert("Debe escribir su Contraseña");
			pw.focus();
		}
		if(ok){ submit(); }
	}
}
