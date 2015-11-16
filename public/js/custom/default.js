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
        //image show
        $('#summaryDiv').html('');
        $('#reservation-form')[0].reset();
        var id = $(this).val();
        $.get('/get-category/'+id, function(data){
            if(data){
                //image hide
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
        e.preventDefault();
        $.post('/reserve-room/', $('#reservation-form').serialize(), function(data){
            if(data){
                if(!data.success){
                    var output = data.message + '<ul>';
                    $('#msg_div').addClass('alert-danger');
                    $.each(data.errors, function (index, value) {
                        output += '<li>'+value+'</li>';
                    });
                    output += '</ul>';
                    $('#msg_div').html(output);
                }
                else {
                    $('#summaryForm').addClass('hide');
                    var output = '<div class="col-sm-6" style="" id="summaryDiv">\
                                    <section style="margin-top: 10%;width: 200%;margin-left: 5%">\
                                        <div class="row" style="background-color: white; border-radius:20px 20px">\
                                            <center><label><h4><b><i>Your Reservation Details...</i></b></h4></label></center>\
                                            <div class="alert alert-success">'+data.message+'</div>\
                                            <div class="col-md-10 col-md-offset-1">\
                                                <table class="table table-bordered table-striped table-hover table-responsive" style="border-radius: 10px 10px">\
                                                    <tbody>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Surname:</b></label></td>\
                                                               <td><label class="" for="">' + data.sname + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Firstname:</b></label></td>\
                                                               <td><label class="" for="">' + data.fname + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Phone Number:</b></label></td>\
                                                               <td><label class="" for="">' + data.mobile + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Email Address:</b></label></td>\
                                                               <td><label class="" for="">' + data.email + '</label></td>\
                                                        </tr>\
                                                        </tr>';
                    output += '<td><label class="" for="">Check In:</b></label></td>\
                                                               <td><label class="" for="">' + data.check_in + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Check Out:</b></label></td>\
                                                               <td><label class="" for="">' + data.check_out + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Room Number:</b></label></td>\
                                                               <td><label class="" for="">' + data.roomNo + '</label></td>\
                                                        </tr>\
                                                    </tbody>\
                                                </table><br/>\
                                            </div>\
                                        </div>\
                                    </section><br/>\
                                 </div>';
                    $('#summaryDiv').html(output);
                }
                console.info('Reservation', data);
                //$('#pricing').addClass('show');
            }
            //alert(data.id);
        });
        return false;
    });

    $('#mobile_search_btn').bind('click', function(e){
        e.preventDefault();
        var output = '<div class="row">\
                            <div class="col-md-10 col-md-offset-1">\
                                <table class="table table-bordered table-striped table-hover table-responsive">\
                                    <thead>\
                                        <tr>\
                                            <th>#</th>\
                                            <th>Surname</th>\
                                            <th>First Name</th>\
                                            <th>Mobile Number</th>\
                                            <th>Email</th>\
                                            <th>Room</th>\
                                            <th>Check In</th>\
                                            <th>Check Out</th>\
                                        </tr>\
                                    </thead>\
                                    <tbody>';
        $.post('/check/', $('#mobile_form').serialize(), function(data){
            if(data){
                if(!data.success){
                    output += '<tr>\
                                    <tr><th colspan="8">No Match Found</th></tr>\
                                </tr>';
                }
                else {
                    $.each(data.reserve, function(index, value){
                        output += '<tr>\
                                        <td>'+(index + 1)+'</td>\
                                        <td>'+value.sname+'</td>\
                                        <td>'+value.fname+'</td>\
                                        <td>'+value.mobile+'</td>\
                                        <td>'+value.email+'</td>\
                                        <td>'+value.room+'</td>\
                                        <td>'+value.in+'</td>\
                                        <td>'+value.out+'</td>\
                                    </tr>';
                    });
                }
                output +=           '</tbody>\
                                    </table>\
                                </div>\
                            </div>';
                $('#search_table').html(output);
                //$('#pricing').addClass('show');
            }
            //alert(data.id);
        });
        return false;
    });


    $('#email_search_btn').bind('click', function(e){
        e.preventDefault();
        var output = '<div class="row">\
                            <div class="col-md-10 col-md-offset-1">\
                                <table class="table table-bordered table-striped table-hover table-responsive">\
                                    <thead>\
                                        <tr>\
                                            <th>#</th>\
                                            <th>Surname</th>\
                                            <th>First Name</th>\
                                            <th>Mobile Number</th>\
                                            <th>Email</th>\
                                            <th>Room</th>\
                                            <th>Check In</th>\
                                            <th>Check Out</th>\
                                        </tr>\
                                    </thead>\
                                    <tbody>';
        $.post('/check/', $('#email_form').serialize(), function(data){
            if(data){
                if(!data.success){
                    output += '<tr>\
                                    <tr><th colspan="8">No Match Found</th></tr>\
                                </tr>';
                }
                else {
                    $.each(data.reserve, function(index, value){
                        output += '<tr>\
                                        <td>'+(index + 1)+'</td>\
                                        <td>'+value.sname+'</td>\
                                        <td>'+value.fname+'</td>\
                                        <td>'+value.mobile+'</td>\
                                        <td>'+value.email+'</td>\
                                        <td>'+value.room+'</td>\
                                        <td>'+value.in+'</td>\
                                        <td>'+value.out+'</td>\
                                    </tr>';
                    });
                }
                output +=           '</tbody>\
                                    </table>\
                                </div>\
                            </div>';
                $('#search_table').html(output);
                //$('#pricing').addClass('show');
            }
            //alert(data.id);
        });
        return false;
    });


});

/*----------------------------------------  Gallery Image Preview  ----------------------------------------------*/
    function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e){
                $('#img_prev').attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
/*----------------------------------------  End Gallery Image Preview  ----------------------------------------------*/

/*----------------------------------------  Room Image Preview  ----------------------------------------------*/
    function readURL2(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e){
                $('#img_prev2').attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
/*----------------------------------------  End Room Image Preview  ----------------------------------------------*/

/*----------------------------------------  Scrolling To a div   ----------------------------------------------*/
    function scroll2Div(div){
        $('html, body').animate({
            scrollTop: div.offset().top
        }, 2000);
    }
/*----------------------------------------  End Scrolling To a div   ----------------------------------------------*/