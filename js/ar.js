




var hamburguer = document.querySelector('.hamburguer')
hamburguer.addEventListener('click', function() {
	document.querySelector('.ant-layout-header.gYEk4qQw').classList.toggle('menu-opened');
	document.querySelector('.ant-layout-content._he9Tudd').classList.toggle('menu-opened');
})


var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	btnAbrirPopup_m = document.getElementById('btn-abrir-popup-mov'),
	overlay = document.getElementById('ttran'),
	soverlay = document.getElementById('att'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');


btnAbrirPopup_m.addEventListener('click',function(){
	soverlay.classList.add('active');
	overlay.classList.add('active');
})

btnAbrirPopup.addEventListener('click', function(){
	soverlay.classList.add('active');
	overlay.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	soverlay.classList.remove('active');
});





var va = document.getElementById('i_confb'),
	mon = document.getElementById('asd'),
	mot = document.getElementById('ass'),
	boto = document.getElementById('btn-cerrarr')
	overlay = document.getElementById('ttran'),
	soverlay = document.getElementById('att'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

va.addEventListener('click', function(){

	soverlay.classList.remove('active');
	
	mon.classList.add('active');
	mot.classList.add('active');




});

va.addEventListener('click', function(e){
	e.preventDefault();
	mon.classList.remove('active');
	boto.classList.remove('active');
});









