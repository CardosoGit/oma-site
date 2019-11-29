window.addEventListener("load", start);

function start(){
	var innerSlideWidth = document.getElementsByClassName('item-slide')[0].clientWidth;
	document.getElementsByClassName('item-slide')[0].setAttribute("style", "width:"+innerSlideWidth+"px;");
	document.getElementsByClassName('item-slide')[1].setAttribute("style", "width:"+innerSlideWidth+"px;");
	document.getElementsByClassName('slide-content')[0].setAttribute("style", "display:flex;width:"+(innerSlideWidth*2)+"px;");
	document.querySelector('#logbox.login').style.opacity = "1";
	

	// Eventos
	var btnNext = document.getElementsByClassName('proximo')[0];

	btnNext.addEventListener("click", nextSlide);
	var btnEntrar = document.getElementsByClassName('entrar')[0];
	btnEntrar.addEventListener("click", entrar);

	var btnVoltar = document.getElementsByClassName('voltar')[0];
	btnVoltar.addEventListener("click", voltar);
}

function voltar(){
	document.getElementsByClassName('slide-content')[0].style.marginLeft = "0px";
	var elemPassError = document.getElementById('pass-error');
	elemPassError.style.display =  "none";
	var elemLoginError = document.getElementById('login-error');
	elemLoginError.style.display =  "none";
}

function nextSlide(){
	var btnNext = document.getElementsByClassName('proximo')[0];
	btnNext.style.opacity = "0.5";
	btnNext.disabled = true;
	var emailElem = document.querySelector("#logbox input[type=email]");
	var email = emailElem.value;
	sendMail(email);
	getEmail(email, function (statusOk){		
		if(statusOk){
			var innerSlideWidth = document.getElementsByClassName('item-slide')[0].clientWidth;
			document.getElementsByClassName('slide-content')[0].style.marginLeft = "-"+innerSlideWidth+"px";
		}else{
			var elemError = document.getElementById('login-error');
			elemError.getElementsByClassName('message-error')[0].innerHTML =  "Email não cadastrado";
			elemError.style.display =  "block";
		}
		btnNext.style.opacity = "1";
		btnNext.disabled = false;
	});
	
}

function entrar(){
	var btnEntrar = document.getElementsByClassName('entrar')[0];
	btnEntrar.style.opacity = "0.5";
	btnEntrar.disabled = true;

	var emailElem = document.querySelector("#logbox input[type=email]");
	var email = emailElem.value;
	var passElem = document.querySelector("#logbox input[type=password]");
	var pass = passElem.value;
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var response = JSON.parse(this.responseText);
			if(response.login){
				window.location.assign(response.page_to_go);
			}else{
				var elemError = document.getElementById('pass-error');
				elemError.innerHTML =  "Senha Inválida. Tente novamente!";
				elemError.style.display =  "block";
				btnEntrar.style.opacity = "1";
				btnEntrar.disabled = false;
			}
			
		}
	};
	xhttp.open("POST", getBaseURL()+"login/entrar");
	xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhttp.send("email="+email + "&password="+pass);


}

function getEmail(email, cb){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			console.log(this.responseText);
			if(this.responseText == 1){
				return cb(true);
			}else{
				return cb(false);
			}
		}
	};
	xhttp.open("POST", getBaseURL()+"login/get_mail");
	xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhttp.send("email="+email);
}

function sendMail(email){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			return;
		}
	};
	xhttp.open("POST", getBaseURL()+"login/save_email", true);
	xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhttp.send("email=" + email);
}


//AUXILIARES
function getBaseURL () {
	if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
		return location.protocol + "//" + location.hostname + 
      				(location.port && ":" + location.port) + "/suporte2/";
	}else{
		return location.protocol + "//" + location.hostname + 
      				(location.port && ":" + location.port) + "/";
	}
   
}