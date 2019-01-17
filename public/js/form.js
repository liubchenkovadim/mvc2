$(document).ready(function () {
    $('form').submit(function (event) {
        var json;


            event.preventDefault();
        $.ajax({
            types:"POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {


                    json = jQuery.parseJSON(result);
                if (json.url) {
                    windows.location.href = json.url;
                } else {
                    alert(json.status + ' - ' + json.message);
                }

            }
        })
    })
})