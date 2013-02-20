$(function() {
    var enea = "", aux=1,b2;
    var nombres = ""
    var id_enea = ""

    $("#b1").show();
    $("#paloma").hide();


    //Funcion para borrar carta de la seleccion
    function par(){
        $(".del").click(function(){
            var dato = $(this).parent().attr("value");
            var dato2 = $(this).parent().attr("data-id")
            var dato3 = $(this).parent().attr("data-nombre")
            
            enea = enea.replace(dato+",","");
            id_enea = id_enea.replace(dato2+",","")
            nombres = nombres.replace(dato3+",","")
            
            $(this).parent().remove();
            if (enea.split(",").length-1 < 15) {
                $("#paloma").hide();
            }
        });
    }

    function mdel(){
        $("#drop .cartita").on({
            mouseenter:
            function(){
                $(this).find(".del").show();
            },
            mouseleave:
            function(){
                $(this).find(".del").hide();
            }
        });
    }

    function iniciarB(n){
        var baraja1 = $("#baraja-el"+n).baraja();
        baraja1.fanSettings = {
            speed : 500,
            easing : 'ease-out',
            range : 20,
            direction : 'left', 
            origin : {
                x : 25, 
                y : 100
            },
            translation : 300,
            center : true,
            scatter : false
        };
        return baraja1;
    }

    function iniciarD(n){
        $("#baraja-el"+n+" li").draggable({
            revert:true
        });
    }
    
    var b1 = iniciarB(1);
    b1.fan({
        speed:500,
        easing: 'ease-out',
        range: 20,
        direction: 'left',
        origin : {
            x : 25, 
            y : 100
        },
        translation : 300,
        center : true,
        scatter : false
    });

    iniciarD(1);

    $("#siguiente").click(function(){
        $("#b"+aux).remove();
        aux++;
        $("#b"+aux).show();
        b2 = iniciarB(aux);
        b2.fan({
            speed:500,
            easing: 'ease-out',
            range: 20,
            direction: 'left',
            origin : {
                x : 25, 
                y : 100
            },
            translation : 300,
            center : true,
            scatter : false
        });
        iniciarD(aux);
    });
    
    
    //
    $("#drop").droppable({
        drop:function(evt,el){
            if (el.draggable.hasClass("sele")) {
                
                enea = enea+el.draggable.attr("value")+",";
                nombres = nombres+el.draggable.attr("data-id")+","
                id_enea = id_enea+el.draggable.attr("data-nombre")+","
                
                var div = document.createElement("div");
                $(div).attr("value",el.draggable.attr("value"));
                $(div).attr("data-id",el.draggable.attr("data-id"));
                $(div).attr("data-nombre",el.draggable.attr("data-nombre"));
                
                $(div).append(el.draggable.html());
                $(div).addClass("cartita");
                var a = document.createElement("a");
                $(a).addClass("secondary button del");
                $(a).append("Elimniar");
                $(div).append(a);
                $("#drop").append(div);
                $(div).draggable();
                el.draggable.css("visibility","hidden");
                $(".del").hide();
                mdel();
                par();
                if (enea.split(",").length-1 >= 15) {
                    $("#paloma").show();
                }
                
            }
        }
    });

    $("#paloma").click(function(){
        $("#eneresult").val(enea)
        $("#enenombres").val(nombres)
        $("#eneid").val(id_enea)
        
        $("#eneagramaform").submit();
        
        
    });


});