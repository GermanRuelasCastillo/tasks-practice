let name = '';
let task_id = '';
let task = '';
let token = $('meta[name="csrf-token"]').attr('content');
$(document).on('click','.filter',function(){
    let type = $( this ).attr( "data-type" );
    $.ajax({
        url:'desafio1/'+type,
        type:'GET',
        data:{_token:$('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            if(response["result"] != ''){
                if(type == 'cantidad'){
                    $('.alternTitle').html('Listado de facturas que tengan productos con cantidad mayor a 100.');
                    $('#Folio').html('Folio');
                    $('#cantidad').html('Productos Incluidos');
                    $('#precio').html('Cantidad Productos');
                }else{
                    $('.alternTitle').html('Listado de productos cuyo valor final sea superior a $1.000.000 CLP.');
                    $('#Folio').html('Producto');
                    $('#cantidad').html('Cantidad');
                    $('#precio').html('Precio');
                }

                $('#bodyInvoices').html(response["result"]);
            }else{
                alert('No hay resultados para esta consulta');
            }
        },
        error:function(x,xs,xt){
            alert(JSON.stringify(x));
        }
    });
});
$(document).on('click','.log-details',function(){
    task_id = $( this ).attr( "data-id" );
    name = $( this ).attr( "data-name" );
    task = $( this ).attr( "data-task" );
    loglist()

});

$(document).on('click','.newLog',function(e){
    let guardar = '<button type="button" class="btn btn-success mr-2 saveLog">Guardar</button>';
    $('#listado_logs').append('<tr><td>'+name+'</td><td><input type="text" name="description" id="description" required class="form-control"  placeholder="Ingresa una descripción" /></td><td>'+guardar+'</td></tr>');
});

$(document).on('click','.saveLog',function(e){
    let description = $('#description').val();

    if(description == ''){
        alert('Ingresa una descripción');
        return;
    }else{
        $.ajax({
            url:'/desafio5/logs',
            type:'POST',
            data:{'_token':token,'description':description,'task_id':task_id},
            success: function (response) {

                    loglist()

            },
            error:function(x,xs,xt){
                alert(JSON.stringify(x));
            }
         });
    }
});

function loglist(){
    $.ajax({
        url:'logs/'+task_id,
        type:'GET',
        data:{_token:$('meta[name="csrf-token"]').attr('content')},
        success: function (response) {
            $('.nameTitle').html(name);
            $('#taskDescription').html(task);
            $('#listado_logs').html(response["result"]);

        },
        error:function(x,xs,xt){
            alert(JSON.stringify(x));
        }
    });
}
