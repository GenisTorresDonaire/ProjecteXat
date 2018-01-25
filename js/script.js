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
	location.href="../registro.php";
}


/*----------------------------------------------------------------------------------*/
var me = {};
me.avatar = "https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48";

var you = {};
you.avatar = "https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg";

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}            

//-- No use time. It is a javaScript effect.
function insertChat(who, text, time = 0){
    var control = "";
    var date = formatAMPM(new Date());
    
    if (who == "me"){
        
        control = '<li style="width:100%">' +
                        '<div class="msj macro">' +
                        '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ me.avatar +'" /></div>' +
                            '<div class="text text-l">' +
                                '<p>'+ text +'</p>' +
                                '<p><small>'+date+'</small></p>' +
                            '</div>' +
                        '</div>' +
                    '</li>';                    
    }else{
        control = '<li style="width:100%;">' +
                        '<div class="msj-rta macro">' +
                            '<div class="text text-r">' +
                                '<p>'+text+'</p>' +
                                '<p><small>'+date+'</small></p>' +
                            '</div>' +
                        '<div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="'+you.avatar+'" /></div>' +                                
                  '</li>';
    }
    setTimeout(
        function(){                        
            $("#aqui").append(control);

        }, time);
    
}

function resetChat(){
    $("ul").empty();
}

$(".mytext").on("keyup", function(e){
    if (e.which == 13){
        var text = $(this).val();
        if (text !== ""){
            insertChat("me", text);              
            $(this).val('');
        }
    }
});

//-- Clear Chat
resetChat();

//-- Print Messages
insertChat("me", "Hola has visto nuestro nuevo chat?", 0);  
insertChat("you", "Buenas!! si es una pasada", 1500);
insertChat("me", "Poco a poco iremos mejorando hasta superar a whatsapp", 3500);
insertChat("you", "jajajja seguro que lo lograis",7000);
insertChat("me", "Por supuesto, con tiempo podremos hacer de todo!", 9500);
insertChat("you", "LOL xxxxxxD jjajjajaja salu2 bro nice chat", 12000);