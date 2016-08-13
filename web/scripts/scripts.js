$('#riskTol').on('change', function(){
   var riskTolId = $(this).val();
    var accountTypeId = $('#accountType').val();
    console.log(riskTolId + accountTypeId);

    $.ajax({
        url: "/populate_models",
        dataType: "json",
        method: "POST",
        data: {
            "accountTypeId":accountTypeId,
            "riskTolId":riskTolId
        }
    },
        function(data){
        console.log(data);
    })
});