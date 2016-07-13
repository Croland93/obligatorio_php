

(function($) {
	$.fn.validationEngineLanguage = function() {};
	$.validationEngineLanguage = {
		newLang: function() {
			$.validationEngineLanguage.allRules = 	{"required":{    			// Add your regex rules here, you can take telephone as an example
						"regex":"none",
						"alertText":"* Este campo es requerido",
						"alertTextCheckboxMultiple":"* Por favor eliga una opción",
						"alertTextCheckboxe":"* Este checkbox es requerido"},
					"length":{
						"regex":"none",
						"alertText":"* Entre ",
						"alertText2":" y ",
						"alertText3": " caracteres permitidos"},
					"maxCheckbox":{
						"regex":"none",
						"alertText":"* Checkeo permitido excedido"},	
					"minCheckbox":{
						"regex":"none",
						"alertText":"* Por favor seleccione ",
						"alertText2":" opciones"},	
					"confirm":{
						"regex":"none",
						"alertText":"* Su campo no concuerda"},		
					"telephone":{
						"regex":"/^[0-9\-\(\)\ ]+$/",
						"alertText":"* Número de teléfono inválido"},	
					"email":{
						"regex":"/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/",
						"alertText":"* Email inválido"},	
					"date":{
                         "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                         "alertText":"* Invalid date, must be in YYYY-MM-DD format"},
					"onlyNumber":{
						"regex":"/^[0-9\ ]+$/",
						"alertText":"* Solo números"},	
					"noSpecialCaracters":{
						"regex":"/^[0-9a-zA-Z]+$/",
						"alertText":"* No se permiten caracteres especiales"},	
					"ajaxUser":{
						"file":"validateUser.php",
						"extraData":"name=eric",
						"alertTextOk":"* Este usuario esta disponible",	
						"alertTextLoad":"* Cargando, por favor espere",
						"alertText":"* Este usuario ya esta en uso"},	
					"ajaxName":{
						"file":"validateUser.php",
						"alertText":"* Este nombre ya esta en uso",
						"alertTextOk":"* Este nombre esta disponible",	
						"alertTextLoad":"* Cargando, por favor espere"},		
					"onlyLetter":{
						"regex":"/^[a-zA-Z\ \']+$/",
						"alertText":"* Solo letras"},
					"validate2fields":{
    					"nname":"validate2fields",
    					"alertText":"* Tienes que tener un nombre y apellido"}	
					}	
					
		}
	}
})(jQuery);

$(document).ready(function() {	
	$.validationEngineLanguage.newLang()
});