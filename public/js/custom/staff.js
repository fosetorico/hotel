$(function(){

    $('.date-picker').datepicker({
        autoclose: true,
        dateFormat: 'yy-mm-dd',
        minDate: "0",
        changeMonth: true,
        changeYear: true,
        yearRange: "-10:+10"
    });

    $('#roomNoCat_id').bind('change', function(){
        //loader show
        var id = $(this).val();
        //$('#reserve_id').val(id);
        $.get('/get-rooms/'+id, function(data){
            if(data){
                //loader hide
                var output = '<option value="">Select Room</option>';
                $.each(data, function(index, value){
                   output += '<option value="'+value.id+'">'+value.room_no+'</option>'
                });
                $('#roomNo_id').html(output);
            }
            //alert(data.id);
        });

    });
});


