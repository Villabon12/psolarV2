addEventListener('load', inicio, false);

function inicio()
{
    var ref =document.getElementById('boton');
    ref.addEventListener('click', clickBoton, false);
}

function clickBoton(e)
{
    var id_v=document.getElementById('id_v');
    envioDatos(id_v.value);
}

var conexion1;

function envioDatos(id_v)
{
    conexion1=new XMLHttpRequest();
    conexion1.onreadystatechange=mostrarRespuesta;
    conexion1.open('POST', 'http://localhost:888/trabajo/psolarV2/index.php/Admin/historial?id_v='+id_v,true);
    conexion1.send();
}

function mostrarRespuesta()
{
    var respuesta=document.getElementById('respuesta');
    if(conexion1.readyState==4){
        var array = JSON.parse(conexion1.responseText);
        var salida = '';
        salida=salida+array.nombre;

        respuesta.innerHTML=salida;
    }
    else{
        respuesta.innerHTML="espere por favor";
    }
}

