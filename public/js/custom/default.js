$(function(){

    $('#flash_message').delay(10000).slideUp(850);
    $('.alert').delay(10).slideUp(8);

    $('.date-picker').datepicker({
        autoclose: true,
        dateFormat: 'yy-mm-dd',
        minDate: "0",
        changeMonth: true,
        changeYear: true,
        yearRange: "-10:+10"
    });

    $('.date-picker2').datepicker({
        autoclose: true,
        dateFormat: 'yy-mm-dd',
        minDate: "2",
        changeMonth: true,
        changeYear: true,
        yearRange: "-10:+10"
    });

    $('.book_room').bind('click', function(){
        $('#summaryDiv').html('');
        $('#reservation-form')[0].reset();
        var id = $(this).val();
        $.get('/get-category/'+id, function(data){
            $('.loader').removeClass('hidden').show();

            if(data){
                //$('#pricing').addClass('show');
                $('#pricing').removeClass('hide');
                $('#summaryForm').removeClass('hide');
                $('#room_price').text(data.price);
                $('#start').text(data.start_price);
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
                }, 2000, function () {
                  $('.loader').hide();
                });
            }
            //alert(data.id);
        });
    });

    $('.update_stat').bind('click', function(){
        //$('#summaryDiv').html('');
        //$('#reservation-form')[0].reset();
        var id = $(this).val();
        $('#reserve_id').val(id);
        $.get('/get-reserve/'+id, function(data){
            $('.loader').removeClass('hidden').show();
            if(data){
                $('#update_res').removeClass('hide');
                //$('#summaryForm').removeClass('hide');
                $('#update_in').val(data.In);
                $('#update_out').val(data.Out);
                $('html, body').animate({
                    scrollTop: $('#update_res').offset().top
                }, 2000, function () {
                    $('.loader').hide();
                });
            }
            //alert(data.id);
        });

    });


    $('#checkIn_btn').bind('click', function(){
        var reserve_id = $('#reserve_id').val();
        var checkDate = $('#update_in').val();

        $.get('/staff/check-in/'+reserve_id+'/'+checkDate, function(data){
            if(data){
                $('#update_res').removeClass('hide');
                //$('#summaryForm').removeClass('hide');
                $('#reserve_table').addClass('hide');
                $('#update_res').html('<div class="alert alert-success">Room '+data.room+ ' has been Checked In</div>');
                $('html, body').animate({
                    scrollTop: $('#update_res').offset().top
                }, 2000);
            }
            //alert(data.id);
        });

    });

    $('#checkOut_btn').bind('click', function(){
        var reserve_id = $('#reserve_id').val();
        var checkDate = $('#update_out').val();

        $.get('/staff/check-out/'+reserve_id+'/'+checkDate, function(data){
            if(data){
                $('#update_res').removeClass('hide');
                //$('#summaryForm').removeClass('hide');
                $('#reserve_table').addClass('hide');
                $('#update_res').html('<div class="alert alert-success">Room '+data.room+ ' has been Checked Out</div>');
                $('html, body').animate({
                    scrollTop: $('#update_res').offset().top
                }, 2000);
            }
            //alert(data.id);
        });

    });

    $('.reserveRoomBtn').bind('click', function()
    {
        //image show
        $('#summaryDiv').html('');
        $('#reservation-form')[0].reset();
        var id = $(this).val();
        $.get('/get-category/'+id, function(data)
        {
            $('.loader').removeClass('hidden').show();
            if(data)
            {
                //image hide
                //$('#pricing').addClass('show');
                $('#pricing').removeClass('hide');
                $('#summaryForm').removeClass('hide');

                $('#room_price').text(data.price);
                $('#start').text(data.start_price);
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
                }, 2000, function () {
                    $('.loader').hide();
                });

            }
            //alert(data.id);
        });
        $('.loader').hide();
    });

    $('#submitForm').bind('click', function(e){
        /*e.preventDefault();*/
        $('.loader').removeClass('hidden').show();
        $.post('/reserve-room', $('#reservation-form').serialize(), function(data){
            if(data){
                if(!data.success){
                    var output = data.message + '<ul>';
                    $('#msg_div').addClass('alert-danger').removeClass('hidden').show();
                    $.each(data.errors, function (index, value) {
                        output += '<li>'+value+'</li>';
                    });
                    output += '</ul>';
                    $('#msg_div').html(output).removeClass('hidden').show();
                    $('.loader').hide();
                    $('.alert').delay(5500).slideUp(5500);

                }
                else {
                    $('#summaryForm').addClass('hide');
                    var output = '<div class="col-sm-12" style="" id="summaryDiv">\
                                    <section style="margin-top: 10%;width: 100%;margin-left: 0%">\
                                        <div class="row" style="background-color: white; border-radius:20px 20px">\
                                            <center><label><h4><b><i>Your Reservation Details...</i></b></h4></label></center>\
                                            <div class="alert alert-success">'+data.message+'</div>\
                                            <div class="col-md-10 col-md-offset-1">\
                                                <table class="table table-bordered table-striped table-hover table-responsive" style="border-radius: 10px 10px;width: 100%">\
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
                                                               <td><label class="" for="">' + data.In + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Check Out:</b></label></td>\
                                                               <td><label class="" for="">' + data.Out + '</label></td>\
                                                        </tr>\
                                                        <tr>';
                    output += '<td><label class="" for=""><b>Room Number:</b></label></td>\
                                                               <td><label class="" for="">' + data.roomNo + '</label></td>\
                                                        </tr>\
                                                        <tr>\
                                                            <td colspan="2"><b>Please Note That Reserved Room Shall Expire 24 Hours Before Reservation Date, If Transaction Is Not Made.</b></td>\
                                                        </tr>\
                                                    </tbody>\
                                                </table><br/>\
                                            </div>\
                                        </div>\
                                    </section><br/>\
                                 </div>';
                    $('#summaryDiv').html(output);
                    $('.loader').hide();

                }
                console.info('Reservation', data);
                //$('#pricing').addClass('show');
            }
            //alert(data.id);
        });
        /*return false;*/
        e.preventDefault();

    });

    $('#mobile_search_btn').bind('click', function(e){
        //e.preventDefault();
        $('.loader').removeClass('hidden').show();
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
        $.post('/check', $('#mobile_form').serialize(), function(data){
            if(data){
                if(!data.success)
                {
                    output += '<tr>\
                                    <tr><th colspan="8">No Match Found</th></tr>\
                                </tr>';
                   // $('.loader').hide();
                }
                else
                {
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
                $('html, body').animate({
                    scrollTop: $('#search_table').offset().top
                }, 2000, function () {
                    $('.loader').hide();
                });
               // $('.loader').hide();
                //$('#pricing').addClass('show'); this.e.target();
            }
            //alert(data.id);
        });
        //return false;
        e.preventDefault();
    });


    $('#email_search_btn').bind('click', function(e){
        //e.preventDefault();
        $('.loader').removeClass('hidden').show();
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
        $.post('/check', $('#email_form').serialize(), function(data){
            if(data){
                if(!data.success)
                {
                    output += '<tr>\
                                    <tr><th colspan="8">No Match Found</th></tr>\
                                </tr>';
                   // $('.loader').hide();
                }
                else
                {
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
                        $('.loader').hide();
                    });
                }
                output +=           '</tbody>\
                                    </table>\
                                </div>\
                            </div>';
                $('#search_table').html(output);
                $('html, body').animate({
                    scrollTop: $('#search_table').offset().top
                }, 2000, function () {
                    $('.loader').hide();
                });
                //$('.loader').hide();
                //$('#pricing').addClass('show');
            }
            //alert(data.id);
        });
        //return false;
        e.preventDefault();
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