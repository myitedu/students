//address1
//address11
//zipcode1
//city1
//state1


$(function () {

    $('#input_is_same').on('change', function() {
        if ($(this).is(':checked')) {
            copy_data_from_physical_to_mailing(true);
        } else {
            copy_data_from_physical_to_mailing(false);
        }
    });

    $('#zipcode1').on('input', function() {
        $(this).val($(this).val().replace(/\D/g, ''));
    });
    $('#zipcode2').on('input', function() {
        $(this).val($(this).val().replace(/\D/g, ''));
    });


    function copy_data_from_physical_to_mailing(copy=true) {
        let address1 = $("#address1").val();
        let address11 = $("#address11").val();
        let zipcode1 = $("#zipcode1").val();
        let city1 = $("#city1").val();
        let state1 = $("#state1").val();

        if (copy){
            $("#address2").val(address1);
            $("#address22").val(address11);
            $("#zipcode2").val(zipcode1);
            $("#city2").val(city1);
            $("#state2").val(state1);
        }else{
            $("#address2").val('');
            $("#address22").val('');
            $("#zipcode2").val('');
            $("#city2").val('');
            $("#state2").val('');
        }

    }

});