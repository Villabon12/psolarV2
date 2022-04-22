const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});


var m_agenda = document.getElementById('m_agenda'),
    m_est = document.getElementById('m_est'),
	m_noti = document.getElementById('m_noti'),
	m_prod = document.getElementById('m_prod'),
	m_client = document.getElementById('m_client');
    m_usua = document.getElementById('m_usua');
    m_config = document.getElementById('m_config');
    btn_salir = document.getElementById('btn_salir');
    agenda = document.getElementById('agenda');
    estadisticas = document.getElementById('estadisticas');
    notificaciones = document.getElementById('notificaciones');
    productos = document.getElementById('productos');
    usuarios = document.getElementById('usuarios');
    clientes = document.getElementById('clientes');
    config = document.getElementById('config');




m_agenda.addEventListener('click',function(){
    agenda.classList.add('active');
    estadisticas.classList.remove('active');
    notificaciones.classList.remove('active');
    productos.classList.remove('active');
    usuarios.classList.remove('active');
    clientes.classList.remove('active');    
    config.classList.remove('active');
})

m_est.addEventListener('click',function(){
    agenda.classList.remove('active');
    estadisticas.classList.add('active');
    notificaciones.classList.remove('active');
    productos.classList.remove('active');
    usuarios.classList.remove('active');
    clientes.classList.remove('active');
    config.classList.remove('active');
})

m_noti.addEventListener('click',function(){
    agenda.classList.remove('active');
    estadisticas.classList.remove('active');
    notificaciones.classList.add('active');
    productos.classList.remove('active');
    usuarios.classList.remove('active');
    clientes.classList.remove('active');
    config.classList.remove('active');
})

m_prod.addEventListener('click',function(){
    agenda.classList.remove('active');
    estadisticas.classList.remove('active');
    notificaciones.classList.remove('active');
    productos.classList.add('active');
    usuarios.classList.remove('active');
    clientes.classList.remove('active');
    config.classList.remove('active');
})
m_client.addEventListener('click',function(){
    agenda.classList.remove('active');
    estadisticas.classList.remove('active');
    notificaciones.classList.remove('active');
    productos.classList.remove('active');
    usuarios.classList.remove('active');
    clientes.classList.add('active');
    config.classList.remove('active');
})
m_usua.addEventListener('click',function(){
    agenda.classList.remove('active');
    estadisticas.classList.remove('active');
    notificaciones.classList.remove('active');
    productos.classList.remove('active');
    usuarios.classList.add('active');
    clientes.classList.remove('active');
    config.classList.remove('active');
})
m_config.addEventListener('click',function(){
    agenda.classList.remove('active');
    estadisticas.classList.remove('active');
    notificaciones.classList.remove('active');
    productos.classList.remove('active');
    usuarios.classList.remove('active');
    clientes.classList.remove('active');
    config.classList.add('active');
})