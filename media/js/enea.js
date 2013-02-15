var min_validas=3;
var cad="";
// Declare an array (using the array constructor)
var tarj = new Array(90);
var tarj = new Array(90);

$(function() {

    for (var i=0;i<tarj.length;i++){
        tarj[i]=i+1;
    }

$("#revisar_bot").click(function() { 
    cad="";   
    for (var i=0;i<tarj.length;i++){
        cad=cad+i+".- "+tarj[i]+" / ";
    }
    alert(cad);
});

        $("#revisar_bot").hide();
        elem=0;
        $( ".arrastrable" ).draggable({
            stack: "div",
            grid: [15,15],
            containment: '#area_j'
        });


           $( "#area_inic" ).droppable({
            drop: function( event, ui ) {
                    var draggableId = ui.draggable.attr("id");
                    if ($("#"+draggableId).hasClass("dropped")){
                        elem--;
                        $("#"+draggableId).removeClass("dropped");
                    }
                $( "#contenedor_palab" )
                    .find( "p" )
                    .html( "Hay "+elem+" cosas." );
                if(elem<min_validas)
                    $("#revisar_bot").hide();
            }
        });        
           $( "#contenedor_palab" ).droppable({
            drop: function( event, ui ) {
                    var draggableId = ui.draggable.attr("id");
                    if ($("#"+draggableId).hasClass("dropped")){
                    }
                    else{
                    $("#"+draggableId).addClass("dropped");
                    //alert(draggableId);
                        elem++;
                    }
                $( this )
                    .find( "p" )
                    .html( "Hay "+elem+" cosas." );
                if(elem>min_validas-1)
                    $("#revisar_bot").show();
            }
        });

});