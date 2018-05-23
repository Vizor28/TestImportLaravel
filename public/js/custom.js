var action_object = {};

$(document).ready(function(){

    $('#import').click(function(){

        var url = $(this).data('url');

        $.ajax({
            type: "POST",
            url: url,
            cache: false,
            success: function(data, textStatus, jqXHR){
                $('#model_block').html(data);
            }
        });

    });

    $('#model_block').on('click', '.head_collapse', function(){

        var target = $(this).data('target');

        if($(target).hasClass('show')){

            $(this).find('.action').text('+');

        }else{

            $(this).find('.action').text('-');

        }


    });


    $('#model_block').on('click', '.delete', function(){

        action_object = this;
        var url = $(action_object).data('url');

        $.ajax({
            type: "POST",
            url: url,
            cache: false,
            success: function(data, textStatus, jqXHR){
                var parent = $(action_object).parent();

                if($(parent).hasClass('head_collapse')){

                    $(parent).parent().remove();

                }else{

                    $(parent).remove();

                }

            }
        });


    });




    $('#update_popup').on('show.bs.modal', function (e) {
        $(e.currentTarget).find('input[name="name"]').val($(e.relatedTarget).parent().find('.name').text());
        action_object = e.relatedTarget;

    });


    $('#update_button').click(function(){

        var url = $(action_object).data('url');
        var data = $(this.form).serialize();

        $(this.form).find('.is-invalid').removeClass('is-invalid');
        $(this.form).find('.message').empty();

        $.ajax({
            type: "POST",
            url: url,
            cache: false,
            data: data,
            context:$(this.form),
            success: function(data, textStatus, jqXHR){
                $(action_object).parent().find('.name').text(data.name);
                $(this).find('input').val('');
                $('#update_popup').modal('hide');
            },
            error: function(jqXHR, textStatus, errorThrown){
                for(var key in jqXHR.responseJSON.errors) {

                    $(this).find('.message').append('<p class="alert alert-danger" role="alert">'+jqXHR.responseJSON.errors[key]+'</p>');
                    var name = '[name="'+ key + '"]';

                    if($(this).find(name).length){

                        $(this).find(name).addClass('is-invalid');

                    }else if($(this).find('.valid_'+key).length){

                        $(this).find('.valid_'+key).addClass('is-invalid');

                    }

                }
            }
        });

    });

});
