$(document).ready(function() {
	 $("#survey_form").validationEngine();
    // By default, every combobox is hidden
    $('div.combobox').hide();

    $("input[name$='question2']").click(function() {
        var radio_value = $(this).val();

        if(radio_value == 'monthly') {
        	//$('radio2').removeClass('validate[required]');
        	
            $('div.monthly_price').show("slow");
            $('#monthly_price').addClass('validate[required]');
            $('div.percentage').hide();
            $('#percentage').removeClass('validate[required]');
        }

        if(radio_value == 'percentage') {
        	//$('radio2').removeClass('validate[required]');
        
            $('div.percentage').show("slow");
            $('#percentage_validation').addClass('validate[required]');
            $('div.monthly_price').hide();
            $('#monthly_price').removeClass('validate[required]');
        }

        if(radio_value == 'monthly_and_percentage') {
        	//$('radio2').removeClass('validate[required]');
        	
            $('div.combobox').show();
            $('#monthly_price').addClass('validate[required]');
            $('#percentage').addClass('validate[required]');
        }
    });
    
   
});
