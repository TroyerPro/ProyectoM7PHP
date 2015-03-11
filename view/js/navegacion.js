function avisar(fitxer){
	if(fitxer=='crearDirector.php'||fitxer=='crearObra.php'||fitxer=='crearActor.php'||fitxer=='modificarActor.php'||fitxer=='modificarObras.php'||fitxer=='modificarDirector.php'){
		return confirm ("Sortir sense desar les modificacions?");
	}
}