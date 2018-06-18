$(document).ready(function ()
{

    var datesent = $('#datesent').val();
    
    $.get("/testLeap/isLeapDate", datesent,
        function (data) {

        }).done(function (data) {
            data = $.parseJSON(data);
           

            var leap     = data['isLeapYear'];
            var aIdiomas = data['sDayName'];
            var message  = data['error'];

            if(leap){leap = "SI";}else{leap = "NO";}
            
        $("#content").html('¿Es bisiesto?:' + leap + '<br>');
            $("#content").append('Es el día de la semana: (cast/cat):' + aIdiomas[0]);

            $('.alert-warning').html('');
            $('.alert-info').html('');
            $('.alert-success').html('');
            $('.alert-warning').hide();
            $('.alert-info').hide();
            $('.alert-success').hide();
            
            //if there is an error
            if (message != "") {
                $('.alert-warning').html(message);
                $(".alert-warning").show();
            }
    }).fail(function () {
        //show message alert box fail xhr call
        $('.alert-danger').html('Error . Contact administrator');
        $(".alert-danger").show();
    });

}
);
