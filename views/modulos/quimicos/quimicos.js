class Quimicos{

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
              $('#tablaQuimicos').hide(50);
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
                url: "views/modulos/quimicos/selectQuimicos.php",
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
                    this.contentTablaChac+="</span> creo el quimicos : <span  class='text-primary' ' onclick='modal.cargarQuimico("+datos.idObjeto+")'>"+datos.serie+" </span></td>";
                    this.contentTablaChac+="</tr>";
    
                    console.log( this.contentTablaChac);
                });
        console.log( "Quimicos cargados!");
    console.log( "Funcionarios cargados!");
                     if(this.contentTablaChac==""){
    swal({
      type: 'error',
      title: 'Oops...',
      text: 'No existen registros en el rango de fecha seleccionado',
      footer: '<a href>ok</a>'
    })
    $('#tablaQuimicos').hide(50);
    $('#cuerpoQuimicos').html( this.contentTablaChac);
                     }else{
                        $('#tablaQuimicos').show(50);
                        $('#cuerpoQuimicos').html( this.contentTablaChac);
                        var table = $('#tablaQuimicos').DataTable({
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