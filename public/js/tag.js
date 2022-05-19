$(document).ready(function(){
  $('#form-tag').submit(function(e){
    e.preventDefault();
    let url = $(this).attr('action');
    $.post(url,{
        url : url,
        '_token' : $('input[name=_token]').val(),
        'name' : $('#name').val(),
    }
    ,function(response){
        if(response.status == 'success'){
            $('#name').val('');
            // create a meesage and append to the div
            let message = '<div class="alert alert-success alert-dismissible fade show" role="alert">'+response.message+'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            $('#message').html(message);
            // reload tabel data
            // $('#table-tag').DataTable().ajax.reload();
        }
        if(response.status == 'error'){
            //    create error message di under form
            let message = '<div class="invalid-feedback position-absolute mt-5">'+response.message+'</div>';
            $('#name').addClass('is-invalid');
            $('#name').after(message);
            // remove message after 0.5 second
            setTimeout(function(){
                $('#name').removeClass('is-invalid');
                $('#name').next().remove();
            }
            ,2000);
        }
    });
    });
});
