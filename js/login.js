function acceder(){
    var user = $("#user").val();
    var pass = $("#pass").val();
    $.ajax({
	method: 'POST',
	data: {usuario:user,clave:pass},
	url:"http://54.148.184.231/easyfood/Easy_Food/services.php?funcion=login&user=" + user + "&pass=" + pass,
	success: function (data) {
	    if(data == "0" ){
		//listar();
	    alert("Usuario o Contraseña Invalido");
		    else{
			location.href = "../index.php";
		    }
	    $.mobile.hidePageLoadingMsg();
	    },
	error: function (error){
	    $.mobile.hidePageLoadingMsg();
	    alert("No esta registrado");
	    }
	});
}
