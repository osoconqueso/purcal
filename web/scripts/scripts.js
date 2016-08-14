$('#riskTol').on('change', function () {
    var riskTolId = $(this).val();
    var accountTypeId = $('#accountType').val();
    console.log(riskTolId + accountTypeId);

    $.ajax({
            url: "/populate_models",
            dataType: "json",
            method: "POST",
            data: {
                "accountTypeId": accountTypeId,
                "riskTolId": riskTolId
            }
        }
    ).done(function (data) {

        var select = $('#model');
        select.find('option').remove().end();
        select.append('<option value="">Please select model</option>');
        for (var i in data) {
            var element = data[i];
            console.log(element);

            select.append('<option value="' + element.id + '">' + element.name + '</option>');
        }

    })
});

$('#allocationForm').on('submit', function () {
    var riskTolId = $('#riskTol').val();
    var accountTypeId = $('#accountType').val();
    var model = $(this).val();
    var dollarAmount = $(this).val();
    console.log(model + dollarAmount);

    $.ajax({
            url: "/calculate",
            dataType: "json",
            method: "POST",
            data: {
                "accountTypeId": accountTypeId,
                "riskTolId": riskTolId,
                "modelId": modelId,
                "dollarAmount": dollarAmount
            }
        }
    ).done(function (data) {

        

    })
});
