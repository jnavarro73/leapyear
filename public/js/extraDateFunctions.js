$(document).ready(function()
{
   console.log('ready');
   console.log('FECHA:'+$('#datesent').val());
   var datesent = $('#datesent').val();
   $.post("testLeap/isLeapDate",datesent,
                        function (data) {
                           
                        }).done(function (data) {
                            data = $.parseJSON(data);
                            data = data['datos'];
                            var leap= data['isLeap'];
                            var aIdiomas= data['idiomas'];
                            var pcFigureName = data['pcFigureName'];
                     
                            $("#content").html('Es bisiesto?<span>'+leap+'</span><br>');
                            $("#content").html('<br>'+aIdiomas[0]+'-'+aIdiomas[1]);
                            
                            $('.alert-warning').html('');
                            $('.alert-info').html('');
                            $('.alert-success').html('');
                            $('.alert-warning').hide();
                            $('.alert-info').hide();
                            $('.alert-success').hide();
                            
                            switch(state){
                                case 0:
                                    $('.alert-info').html(message);
                                    $(".alert-info").show();
                                break;
                                case 1:
                                    $('.alert-success').html(message);
                                    $(".alert-success").show();
                                    break;
                                case 2:
                                    $('.alert-warning').html(message);
                                    $(".alert-warning").show();
                                    break;
                            }
                }).fail(function () {
                    //show message alert box fail xhr call
                    $('.alert-warning').html('Error . Contact administrator');
                });
    
}
);
