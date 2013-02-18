function mail(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    //patron = /\w/;
    patron =/[A-Za-z.-_0-9@]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function letras(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    //patron = /\w/;
    patron =/[A-Za-z\s]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function numeros(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    //patron = /\w/;
    patron =/[0123456789]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function lad(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    //patron = /\w/;
    patron =/[0123456789+]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}

function direccion(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    //patron = /\w/;
    patron =/[A-Za-z-#_0-9\s]/;
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
}
function calc(object) {
    var edinp = document.getElementById("EDAD");
    hoy=new Date();
    fecha=document.getElementById('FN');
    fech=fecha.value;
    var dactual=hoy.getDate();
    var mactual=hoy.getMonth()+1;
    var aactual=hoy.getFullYear(); 
    var arreglo=fech.split('-');
    var anio=arreglo[0];
    var mes=arreglo[1];
    var dia=arreglo[2];
    if(isNaN(anio))
        return false
    if(isNaN(mes))
        return false
    if(isNaN(dia))
        return false
    edad=aactual-anio-1;
    var m;
    var ed;
    m=mactual-mes;
    if(m<0)
        //alert("e"+edad)
        ed=edad;
    if(m>0){
        ed=edad+1;
    } 
    if(m==0){
        d=dactual-dia;
        if(d>=0){
            ed=edad+1;
        }  
        if(d<0){
            ed=edad;
        } 
    } 
    if (ed<20 || ed>50){
        edinp.class="error";
        ed="";
    }
    edinp.value = ed;
     
}

$(document).ready(function(){
    $("#registro").validate({
        rules: {
            pass1:{
                minlength: 6
            },
            pass2: {
                minlength: 6,
                equalTo: "#pass1" 
            }
        },
        messages: {
            pass1:{
                minlength: "Su password debe ser de 6 caracteres minimo"
            },
            pass2:{
                minlength: "Su password debe ser de 6 caracteres minimo",
                equalTo: "Los passwords no son iguales"
            }
        }
    });
});
