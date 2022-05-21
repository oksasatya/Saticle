$('#form-tag').submit(function(e) {

    e.preventDefault();
    let url = $(this).attr('action');
    $.post(url, {
        url: url,
        '_token': $('input[name=_token]').val(),
        'name': $('#name').val(),
    }, function(response) {
        if (response.status == 'success') {
            $('#name').val('');
            // create a meesage and append to the div
            let message =
                '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                response.message +
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            $('#message').html(message);
            // auto close the message with a timer
            setTimeout(function() {
                $('.btn-close').click();
            }, 2000);
            // action with cstf token and methon dele and id and add cstrf token
            let action =  `<td><form action="${response.delete_url}" id="form-delete-tag-${response.tag.id}}" method="POST"  button-delete-tag-${response.
                // get cstf token
                tag.id}}>
                            <input type="hidden" name="_token" value="${$('input[name=_token]').val()}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-gradient-danger btn-sm font-weight-bold delete-tag"><i class="mdi mdi-delete"></i> Delete</button> </form> </td>`;
            let name = '<td><p class="text-primary">' + response.tag.name + '</p></td>';
            let row = '<tr>' + name + action + '</tr>';
            $('#tag-table tbody').prepend(row);
        }


        if (response.status == 'error') {
            //    create error message di under form
            let message = '<div class="invalid-feedback position-absolute mt-5">' +
                response.message + '</div>';
            $('#name').addClass('is-invalid');
            $('#name').after(message);
            // remove message after 0.5 second
            setTimeout(function() {
                $('#name').removeClass('is-invalid');
                $('#name').next().remove();
            }, 2000);
        }

    });
});

$(document).on('submit', 'form[id^=form-delete-tag-]', function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    var method = form.attr('method');
    var data = form.serialize();
    $.ajax({
        url: url,
        type: method,
        data: data,
        success: function(data) {
            if (data.status == 'success') {
                $('#message').html(data.message);
                $('#message').addClass('alert alert-warning alert-dismissible fade show');
                $('#message').fadeIn();
                $('#message').fadeOut(3000);
                // remove the row
                form.closest('tr').remove();
                $('#tbody-tag').append(data.html);
            } else {
                $('#message').html(data.message);
                $('#message').addClass('alert alert-danger alert-dismissible fade show');
                $('#message').fadeIn();
                $('#message').fadeOut(2000);
            }
        }
    });
});
// let action = `<td><form action="${response.tag.url}" method="POST" id="form-delete-tag-${response.tag.id}">@csrf @method(`DELETE') <button type="submit" class="btn btn-gradient-danger btn-sm btn-icon-text"> <i class="mdi mdi-delete btn-icon-prepend"></i> Delete </button></form></td>';

// let action =  `<td><form action="${response.delete_url}" method="DELETE" id="form-delete-tag-${response.tag.id}}"
// button-delete-tag-${response.tag.id}}"> @csrf @method('Delete') <button type="submit" class="btn btn-danger btn-sm">Delete</button> </form> </td>`;
