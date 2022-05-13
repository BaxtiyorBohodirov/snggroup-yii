$("#indexForm").on('submit',function(e){
    e.preventDefault();
    var form = $('#transport-form');

    var data = $(this).serialize();
    $.ajax({
        type: 'GET',
        url: '/site/send-message',
        data: data,
        success: function(res){
            console.log(res);
            swal({
                title: res.title,
                text: res.content,
                icon: "success",
                button: res.button,
              });
        }
    });
    
});