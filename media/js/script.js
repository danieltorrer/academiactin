$(function(){
            //$("#datPer").hide();
            $("#domicilio").hide();            
            $("#formEduc").hide();
            $("#conocimientos").hide();
            $("#experiencia").hide();
            $("#generales").hide();
            $("#ocultoM").hide();


            dias("dia_nac");
            meses("mes_nac");
            anios(1985,2013,"anio_nac");
            estados("estado");

            meses("mesEntP");
            anios(1985,2014,"anioEntP");
            meses("mesSalP");
            anios(1985,2014,"anioSalP");

            meses("mesEntU");
            anios(1985,2014,"anioEntU");
            meses("mesSalU");
            anios(1985,2014,"anioSalU");

            meses("mesEntM");
            anios(1985,2014,"anioEntM");
            meses("mesSalM");
            anios(1985,2014,"anioSalM");

            meses("mesEntI1");
            anios(1985,2014,"anioEntI1");
            meses("mesEntI2");
            anios(1985,2014,"anioEntI2");
            meses("mesEntI3");
            anios(1985,2014,"anioEntI3");

            meses("mesSalI1");
            anios(1985,2014,"anioSalI1");
            meses("mesSalI2");
            anios(1985,2014,"anioSalI2");
            meses("mesSalI3");
            anios(1985,2014,"anioSalI3");

            lenguajes("lenguajes");
            disabled("estAct","disAct");
            disabled("apWeb","cualWebDis");
            disabled("apMov","cualMovDis");
            disabled("apDig","cualDigDis");

            $("#datPerF").submit(function(evt){
                evt.preventDefault();
                var expnombre = /[a-zA-z]/;
                var expemail = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                if(verifInputExp("nombre",/[a-zA-z]/)){
                    error("nombre",false);
                    if(verifInputExp("ap_paterno",/[a-zA-z]/)){
                        error("ap_paterno",false);
                        if(verifInputExp("ap_materno",/[a-zA-z]/)){
                            error("ap_materno",false);
                                if(verifInputExp("lug_nac",/[a-zA-z]/)){
                                    error("lug_nac",false);
                                    if($("#edad").val()<99 && verifInput("edad")){
                                        error("edad",false);
                                        if(verifInputExp("telCasa",/^\d{8}$/)){
                                            error("telCasa",false);
                                            if($("#telCel").val().length === 10 && verifInput("telCel")){
                                                error("telCel",false);
                                                if(verifInputExp("email",/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/)){
                                                    error("email",false);
                                                    $("#datPer").hide();
                                                    $("#domicilio").show();

                                                }
                                                else
                                                    error("email",true);
                                            }else
                                                error("telCel",true);
                                        }else
                                            error("telCasa",true);
                                    }else
                                        error("edad",true);
                                }else
                                    error("lug_nac",true);
                        }else
                            error("ap_materno",true);
                    }else
                        error("ap_paterno",true);
                }else
                    error("nombre",true);
                

            });

            $("#domicilioF").submit(function(evt){
                evt.preventDefault();
                if(verifInput("calle")){
                    error("calle",false);
                    if(verifInput("numero")){
                        error("numero",false);
                        if(verifInput("colonia")){
                            error("colonia",false);
                            if(verifInputExp("cp",/^\d{5}$/)){
                                error("cp",false);
                                if(verifInput("poblacion")){
                                    error("poblacion",false);
                                    if(verifInput("estado")){
                                        $("#domicilio").hide();
                                        $("#formEduc").show();
                                    }
                                }else
                                    error("poblacion",true);
                            }else
                                error("cp",true);
                        }else
                            error("colonia",true);
                    }else
                        error("numero",true);
                }else
                    error("calle",true);

            });


            $("#formEducF").submit(function(evt){
                evt.preventDefault();
                var datos;
                if(verifInput("nomPrep")){
                    error("nomPrep",false);
                    if(verifInput("tituloPrep")){
                        error("tituloPrep",false);
                        
                        //universidad
                        if(verifInput("nomUniv")){
                            if(verifInput("tituloUniv")){
                                error("tituloUniv",false);
                                //datos si hay universidad
                            }
                            else{
                                error("tituloUniv",true);
                            }
                        }
                        //fin universidad

                        //maestria
                        if(verifInput("nomMa")){
                            if(verifInput("tituloMa")){
                                error("tituloMa",false);
                                //datos si hay maestria
                            }
                            else{
                              error("tituloMa",true);
                            }
                        }
                        //fin maestria

                        //actuales
                        if($('input:radio[name=estAct]:checked').val()=="si"){
                            alert();
                            if(verifInput("nomAct")){
                                error("nomAct",false);
                                if(verifInput("gradoAct")){
                                    error("gradoAct",false);
                                    if(verifInput("horAct")){
                                        error("horAct",false);
                                        if(verifInput("carreraAct")){
                                            error("carreraAct",false);
                                            if(verifInput("otrosAct")){
                                                $("#formEduc").hide();
                                                $("#conocimientos").show();
                                            }
                                        }else{
                                            error("carreraAct",true);
                                        }
                                    }else{
                                        error("horAct",true);
                                    }
                                }else{
                                    error("gradoAct",true);
                                }
                            }else{
                                error("nomAct",true);
                            }
                        }else{
                            $("#formEduc").hide();
                            $("#conocimientos").show();
                        }
                        //fin actuales

                        //show
                        


                    }else{
                        error("tituloPrep",true);
                    }
                }else{
                    error("nomPrep",true);
                }

                    
            });

            $("#conocimientosF").submit(function(evt){
                evt.preventDefault();
                if(verifInput("lenguajes")){
                    error("lenguajes",false);
                    if(verifInput("apDes")){
                        error("apDes",false);
                        
                        // web
                        if(verifCheck("apWeb")){
                            if(verifInput("cualesWeb")){
                                error("cualesWeb",false);
                            }else
                                error("cualesWeb",true);
                        }else
                            error("cualesWeb",false);
                        //fin web

                        //movil
                        if(verifCheck("apMov")){
                            if(verifInput("cualesMov")){
                                error("cualesMov",false);
                            }else
                                error("cualesMov",true);
                        }else
                            error("cualesMov",false);
                        //fin movil

                        //dig
                        if(verifCheck("apDig")){
                            if(verifInput("cualesDig")){
                                error("cualesDig",false);
                            }else
                                error("cualesDig",true);
                        }else
                            error("cualesDig",false);
                        //fin dig

                        //ultimo proy

                        if(verifInput("ultimo")){
                            error("ultimo",false);
                            $("#conocimientos").hide();
                            $("#experiencia").show();
                        }else
                            error("ultimo",true);



                    }else
                        error("apDes",true);
                }else
                    error("lenguajes",true);
                   
            });


            $("#experienciaF").submit(function(evt){
                evt.preventDefault();
                if(verifInput("nombreI1") || verifInput("nombreI1") || verifInput("nombreI1")){

                    //Institucion 1
                    if(verifInput("nombreI1")){
                        if(verifInput("giroI1")){
                            error("giroI1",false);
                            if(verifInput("telI1")){
                                error("telI1",false);
                                if(verifInput("funcI1")){
                                    error("funcI1",false);
                                    if(verifInput("motI1")){
                                        error("motI1",false);
                                        if(verifInput("jefeI1")){
                                            error("jefeI1",false);
                                            if(verifInput("jefePI1")){
                                                error("jefePI1",false);
                                                $("#experiencia").hide();
                                                $("#generales").show();
                                            }else
                                                error("jefePI1",true);
                                        }else
                                            error("jefeI1",true);
                                    }else
                                        error("motI1",true);
                                }else
                                    error("funcI1",true);
                            }else
                                error("telI1",true);
                        }else
                            error("giroI1",true);
                    }
                    //fin institucion

                    //Institucion 1

                    //fin institucion

                    //Institucion 1

                    //fin institucion

                }else
                    if(confirm("Deseas dejar la experiencia laboral en blanco?")){
                        $("#experiencia").hide();
                        $("#generales").show();
                    }
            });

            
            $("#generalesF").submit(function(evt){
                evt.preventDefault();
                if(verifInput("como")){
                    error("como",false);
                    if(verifInput("porque")){
                        error("porque",false);
                        if(verifInput("queProy")){
                            error("queProy",false);
                            if(verifInput("cuando")){
                                error("cuando",false);
                                alert("Felicidades Terminaste");
                            }else
                                error("cuando",true);
                        }else
                            error("queProy",true);
                    }else
                        error("porque",true);
                }else
                    error("como",true);
            });






















        });