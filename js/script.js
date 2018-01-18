function entrar(){
	document.body.children[1].children[1].children[0].remove();
	var padre = document.body.children[1].children[1];

	var form = document.createElement('form');
	form.setAttribute('id', 'formLogin');
	form.setAttribute('method', 'post');
	form.setAttribute('action', '');

	var labelUsuario = document.createElement('label');
	var inputUsuario = document.createElement('input');
	inputUsuario.setAttribute('name', 'nombre');
	inputUsuario.setAttribute('type', 'text');
	inputUsuario.setAttribute('value', '');

	var labelPassword = document.createElement('label');
	var inputPassword = document.createElement('input');
	inputPassword.setAttribute('name', 'password');
	inputPassword.setAttribute('type', 'password');
	inputPassword.setAttribute('value', '');

	var contenidoLabelUsuario = document.createTextNode('Usuario: ');
	var contenidoLabelPassword = document.createTextNode('Password: ');
	
	labelUsuario.appendChild(contenidoLabelUsuario);
	labelPassword.appendChild(contenidoLabelPassword);

	var inputBoton = document.createElement('input');
	inputBoton.setAttribute('type', 'submit');
	inputBoton.setAttribute('value', 'Entrar');
	
	form.appendChild(labelUsuario);
	form.appendChild(inputUsuario);
	form.appendChild(labelPassword);
	form.appendChild(inputPassword);
	form.appendChild(inputBoton);
	padre.appendChild(form);
}

/*
function logear(){
	var logeadoP = document.createElement('p');
	var textoP = document.createTextNode('Bienvenido, Anonimo');
}
*/

function registrarse(){
	location.href="registro.php";
}

