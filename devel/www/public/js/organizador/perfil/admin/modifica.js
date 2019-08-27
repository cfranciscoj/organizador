
$(document).ready(function() {
    ruta   = $('#rutausuario').val();
    console.log(ruta);
    oTable = $('#tabla_usuarios').DataTable({
                "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                          },
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "createdRow": function( row, data, dataIndex ) {
                                $(row).addClass( 'shown' );
                            },
                "ajax":{
                          "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                          "url": ruta,
                          "type": "POST"
                      },
                "columns": [
                    {data: 'nombre', name: 'nombre'},
                    {data: 'apellido', name: 'apellido'},
                    {data: 'correo', name: 'correo'},
                    {data: 'rol', name: 'rol'},
                    {data: 'fecha', name: 'fecha'},
                    {data: null, name: 'modificar',  defaultContent: '', orderable: false, className: 'glyphicon glyphicon-wrench'},
                    {data: null, name: 'clave',  defaultContent: '', orderable: false, className: 'glyphicon glyphicon-asterisk'}
                ],
                "order": [[4, 'asc']]
            });

  });
