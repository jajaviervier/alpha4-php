class Cascos{

    constructor(){
        this.fechaDesde="";
        this.fechaHasta="";
        
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
              $('#tablaCascos').hide(50);
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
                url: "views/modulos/cascos/selectCascos.php",
            })
             .done(function( data, textStatus, jqXHR ) {
                this.contentTablaFunc="";
                this.Acumulador=0;
                
                data.forEach(datos => {
                    this.Acumulador++;
    console.log(datos)
                    this.contentTablaFunc+="<tr>";
                    this.contentTablaFunc+="<td>"+this.Acumulador+"</td>";
                    this.contentTablaFunc+="<td>"+datos.fechaLog+"</td>";
                    this.contentTablaFunc+="<td>"+datos.hora+"</td>";
                    this.contentTablaFunc+="<td>El usuario <span  class='text-primary' onclick='modal.cargarUsuario("+datos.usuario+")'>"+datos.usuariosNombre;
                    this.contentTablaFunc+="</span> creo el funcionario  <span  class='text-primary' data-toggle='modal' data-target='modalFunc' onclick='modal.cargarFuncionario("+datos.idObjeto+")'>"+datos.rut+" </span></td>";
                    this.contentTablaFunc+="</tr>";
    
                    console.log( this.contentTablaFunc);
                });
             
                     console.log( "Cascos cargados!");
    console.log(this.contentTablaFunc);
    console.log( "Cascos cargados!");
                     if(this.contentTablaFunc==""){
    swal({
      type: 'error',
      title: 'Oops...',
      text: 'No existen registros en el rango de fecha seleccionado',
      footer: '<a href>ok</a>'
    })
    $('#tablaCascos').hide(50);
    $('#cuerpoCascos').html( this.contentTablaFunc);
                     }else{
                        $('#tablaCascos').show(50);
                        $('#cuerpoCascos').html( this.contentTablaFunc);
                        var table = $('#tablaCascos').DataTable({
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
                               , 'excel', 'pdf'
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