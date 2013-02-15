
            function error(input,bol){
                if(bol)
                    $("#"+input).parent().next("td").show();
                else
                    $("#"+input).parent().next("td").hide();
            }

            function verifInputExp(input,exp){
                if($("#"+input).val() != null && $("#"+input).val() != "" && $("#"+input).val().match(exp))
                    return true;
                else
                    return false;
            }

            function verifInput(input){
                if($("#"+input).val() != null && $("#"+input).val() != "")
                    return true;
                else
                    return false;
            }

            function verifCheck(nombre){
                if($('input:radio[name='+nombre+']:checked').val()=="si")
                    return true;
                else
                    return false;
            }

            function disabled(nombre,clase){
                $('input:radio[name='+nombre+']').change(function(){
                                if($('input:radio[name='+nombre+']:checked').val()=="si"){
                                    $("."+clase).removeAttr("disabled");
                                }
                                if($('input:radio[name='+nombre+']:checked').val()=="no"){
                                    $("."+clase).attr("disabled","disabled");
                                }
                });
            }

            function dias(contenedor){
                for(var i=1;i<32;i++){
                    var option = document.createElement("option");
                    $(option).attr("value",i);
                    var texto = document.createTextNode(i);
                    $(option).append(texto);
                    $("#"+contenedor).append(option);
                }
            } 

            

            function meses(contenedor){
                var meses =["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
                $(meses).each(function(mes){
                    var option = document.createElement("option");
                    $(option).attr("value",meses[mes]);
                    var texto = document.createTextNode(meses[mes]);
                    $(option).append(texto);
                    $("#"+contenedor).append(option);
                });
            }

            

            function anios(inicio,fin,contenedor){
                for(i=inicio;i<fin;i++){
                    var option = document.createElement("option");
                    $(option).attr("value",i);
                    var texto = document.createTextNode(i);
                    $(option).append(texto);
                    $("#"+contenedor).append(option);
                }
            }

            

            function estados(contenedor){
                var estados = ["Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "Mexico", "Michoacan de Ocampo", "Morelos", "Nayarit", "Nuevo Leon", "Oaxaca", "Puebla", "Queretaro de Arteaga", "Quintana Roo", "San Luis Potosi", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz-Llave", "Yucatan", "Zacatecas"];
                $(estados).each(function(estado){
                    var option = document.createElement("option");
                    $(option).attr("value",estados[estado]);
                    var texto = document.createTextNode(estados[estado]);
                    $(option).append(texto);
                    $("#"+contenedor).append(option);
                });
            }

            function lenguajes(contenedor){
                var lenguajes = ["PHP","HTML5","C","C++","JAVA","C#","Python","Ruby","Android","iOS","Fortran","Perl"];
                $(lenguajes).each(function(lenguaje){
                    var option = document.createElement("option");
                    $(option).attr("value",lenguajes[lenguaje]);
                    var texto = document.createTextNode(lenguajes[lenguaje]);
                    $(option).append(texto);
                    $("#"+contenedor).append(option);
                });
            }

