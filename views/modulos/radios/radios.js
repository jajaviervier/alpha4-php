class Radios{

    constructor(){
        this.fechaDesde="";
        this.fechaHasta="";
        this.table;
    }
    
    
    filtrarTabla(desde,hasta){
        if( (new Date(desde).getTime() >= new Date(hasta).getTime()))
        {
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'La fecha de termino debe ser mayor a la de inicio',
                footer: '<a href>ok</a>',
                animation: true
              })
              $('#tablaRadios').hide(50);
        }else{
            $.ajax({
                // En data puedes utilizar un objeto JSON, un array o un query string
                data: {
                    "desde" : desde, 
                    "hasta" : hasta
        
                    
                },
        
                //Cambiar a type: POST si necesario
                type: "POST",
                // Formato de datos que se espera en la respuesta
                dataType: "json",
                // URL a la que se enviará la solicitud Ajax
                url: "views/modulos/radios/selectRadios.php",
            })
             .done(function( data, textStatus, jqXHR ) {
                this.contentTablaChac="";
                this.Acumulador=0;
                
                data.forEach(datos => {
                    this.Acumulador++;
                    this.contentTablaChac+="<tr>";
                    this.contentTablaChac+="<td>"+this.Acumulador+"</td>";
                    this.contentTablaChac+="<td>"+datos.fechaLog+"</td>";
                    this.contentTablaChac+="<td>"+datos.hora+"</td>";
                    this.contentTablaChac+="<td>El usuario :<span  class='text-primary' onclick='modal.cargarUsuario("+datos.usuario+")'>"+datos.usuariosNombre;
                    this.contentTablaChac+="</span> creo el Radio : <span  class='text-primary' ' onclick='modal.cargarRadio("+datos.idObjeto+")'>"+datos.serie+" </span></td>";
                    this.contentTablaChac+="</tr>";
    
                    console.log( this.contentTablaChac);
                });
        console.log( "Radios cargados!");
    console.log( "Funcionarios cargados!");
                     if(this.contentTablaChac==""){
    swal({
      type: 'error',
      title: 'Oops...',
      text: 'No existen registros en el rango de fecha seleccionado',
      footer: '<a href>ok</a>'
    })
    $('#tablaRadios').hide(50);
    $('#cuerpoRadios').html( this.contentTablaChac);
                     }else{
                        $('#tablaRadios').show(50);
                        $('#cuerpoRadios').html( this.contentTablaChac);
                        var table = $('#tablaRadios').DataTable({
                            language: {
                                "decimal": "",
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Entradas",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscar:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            dom: 'Bfrtip',
                            buttons: [
                             'excel', 'pdf'
                            ]
                        })
                     }
                    
                 
             })
             .fail(function( jqXHR, textStatus, errorThrown ) {
    
            
                console.log(jqXHR)
                console.log(textStatus)
            
                     console.log( "La solicitud a fallado: " +  textStatus);
              
            });
        }
    
    
    
    
    }   
    }