with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombreUsuario.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			nombreUsuario.focus();
		}
		if(ok &&nombreCompleto.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			nombreCompleto.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su email");
			email.focus();
		}
		if(ok && pw.value==""){
			ok=false;
			alert("Debe escribir su Contraseña");
			pw.focus();
		}
		if(ok && confirm_pw.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_pw.focus();
		}

		if(ok && pw.value!= confirm_pw.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_pw.focus();
		}

		if(ok && categoria.value==""){
			ok=false;
			alert("Debe escribir su Categoria");
			categoria.focus();
		}

		if(ok){ submit(); }
	}
}
