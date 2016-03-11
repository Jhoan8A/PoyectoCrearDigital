with(document.modificarmateria){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombreMateria.value==""){
			ok=false;
			alert("Debe escribir un nombre de materia");
			nombreMateria.focus();
		}
		if(ok &&profesor.value==""){
			ok=false;
			alert("Debe escribir nombre de profesor");
			profesor.focus();
		}
		if(ok && descripcion.value==""){
			ok=false;
			alert("Debe escribir su descripcion");
			descripcion.focus();
		}
		if(ok && cupos.value==""){
			ok=false;
			alert("Debe escribir los cupos de la materia");
			cupos.focus();
		}
		

		if(ok){ submit(); }
	}
}