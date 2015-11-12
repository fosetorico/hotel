$(function(){
    $('.book_room').bind('click', function(){
        $('#summaryDiv').html('');
        $('#reservation-form')[0].reset();
        var id = $(this).val();
        $.get('/get-category/'+id, function(data){
            if(data){
                //$('#pricing').addClass('show');
                $('#pricing').removeClass('hide');
                $('#summaryForm').removeClass('hide');
                $('#room_price').text(data.price);
                $('#room_name').text(data.name);
                $('#cat_image1').attr('src', data.image);
                $('#cat_image2').attr('href', data.image);
                $('#room_count').text(data.roomNos.length);
                var option = '<option value="">Select room</option>';
                $.each(data.roomNos, function(index, value){
                    option += '<option value="'+value.id+'">'+value.room_no+'</option>';
                });
                $('#roomNo_id').html(option);
                //console.info('Room No', data.roomNos);
                $('html, body').animate({
                    scrollTop: $('#pricing').offset().top
                }, 2000);
            }
            //alert(data.id);
        });

    });

    $('.reserveRoomBtn').bind('click', function(){

        $('#summaryDiv').html('');
        $('#reservation-form')[0].reset();
        var id = $(this).val();
        $.get('/get-category/'+id, function(data){
            if(data){
                //$('#pricing').addClass('show');
                $('#pricing').removeClass('hide');
                $('#summaryForm').removeClass('hide');

                $('#room_price').text(data.price);
                $('#room_name').text(data.name);
                $('#cat_image1').attr('src', data.image);
                $('#cat_image2').attr('href', data.image);
                $('#room_count').text(data.roomNos.length);
                var option = '<option value="">Select room</option>';
                $.each(data.roomNos, function(index, value){
                    option += '<option value="'+value.id+'">'+value.room_no+'</option>';
                });
                $('#roomNo_id').html(option);
                //console.info('Room No', data.roomNos);
                $('html, body').animate({
                    scrollTop: $('#pricing').offset().top
                }, 2000);
            }
            //alert(data.id);
        });

    });

    $('#submitForm').bind('click', function(e){
        $('#summaryForm').addClass('hide');
        e.preventDefault();
        $.post('/reserve-room/', $('#reservation-form').serialize(), function(data){
            if(data){
                var output ='<div class="col-sm-6" style="" id="summaryDiv">\
                                <section style="margin-top: 10%;width: 200%;margin-left: 5%">\
                                    <center><label><h4><b><i>Your Reservation Details...</i></b></h4></label></center>\
                                    <div class="row" style="background-color: white; border-radius:20px 20px">\
                                        <div class="col-sm-6" style="margin-top: 3.5%" id="" >';
                                output += '<div class=""><label class="" for=""><b>Surname:</b></label>\
                                                <label class="" for=""><b>'+data.sname+'</b></label>\
                                              </div><br>';
                                output += '<div class=""><label class="" for=""><b>Firstname:</b></label>\
                                                <label class="" for=""><b>'+data.fname+'</b></label>\
                                            </div><br>';
                                output += '<div class=""><label class="" for=""><b>Phone Number:</b></label>\
                                                <label class="" for=""><b>'+data.mobile+'</b></label>\
                                            </div><br>\
                                        </div>\
                                        <div class="col-sm-6" style="margin-top: 3.5%" id="">';
                                output += '<div class=""><label class="" for=""><b>Email Address:</b></label>\
                                                <label class="" for=""><b>'+data.email+'</b></label>\
                                           </div><br>';
                                output += '<div class=""><label class="" for="">Check In:</b></label>\
                                                <label class="" for=""><b>'+data.check_in+'</b></label>\
                                           </div><br>';
                                output += '<div class=""><label class="" for=""><b>Check Out:</b></label>\
                                                <label class="" for=""><b>'+data.check_out+'</b></label>\
                                           </div><br>\
                                        </div>';
                                output += '<div class=""><center><label class="" for=""><b>Room Number:</b></label>\
                                                <label class="" for=""><b>'+data.roomNo+'</b></label></center>\
                                            </div><br>\
                                        <div class="form-group">\
                                            <center><button id="close" style="width: 80%" type="submit" class="btn btn-primary "><b>Close</b></button></center>\
                                        </div>\
                                     </div>\
                                </section>\
                             </div-->';
                $('#summaryDiv').html(output);
                console.info('Reservation', data);
                //$('#pricing').addClass('show');
            }
            //alert(data.id);
        });
        return false;
    });
});

//Scrolling To a div
function scroll2Div(div){
    $('html, body').animate({
        scrollTop: div.offset().top
    }, 2000);
}