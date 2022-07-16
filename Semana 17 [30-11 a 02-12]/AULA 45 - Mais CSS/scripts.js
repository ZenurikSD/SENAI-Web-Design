//==== Funções de interação =========================
function cxAtiva(a) {
   a.classList.add("corA");
}
function cxInativa(a){
   a.classList.remove("corA");
}

function mouse_exibir(a) {
	a.classList.add("exibir");
}
function mouse_ocultar(a) {
	a.classList.remove("exibir");
}

function ativar(b){
   b.classList.add("ativado");
}

function desativar(b){
   b.classList.remove("ativado");
}

function ativar_txt(b){
   b.classList.add("txtA");
}
function ativar_txt(b){
   b.classList.add("txtA");
}

// 30/11 ---------
var desktop;
var tablet;
var phone;

if (window.innerWidth <= 700){ 
   phone = window.document.querySelector('.innerWidth').classList.add('phone');
}

// try and catch
var idade = document.querySelector('#idade').value;
var msg = document.querySelector('#form_msg')

try{
   if(idade < 12 && idade > 120){}
}
catch(error){
   msg.innerHTML = 'Insira uma idade válida';
}

