
function Validar(miFormulario){
	if(miFormulario.nom.value=="") {
		alert("Ingrese un Nombre")
		miFormulario.nom.focus(); /*Me lleva el foco a un campo determinado*/
		return false;
		}
	if(miFormulario.fon.value=="") {
		alert("Ingrese un Telefono")
		miFormulario.fon.focus(); /*Me lleva el foco a un campo determinado*/
		return false;
		}
	if(miFormulario.calle.value=="") {
		alert("Ingrese una Dirección")
		miFormulario.calle.focus(); /*Me lleva el foco a un campo determinado*/
		return false;
		}
	return true;
	}		