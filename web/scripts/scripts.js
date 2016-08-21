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

$('#allocationForm').on('submit', function (e) {
    e.preventDefault();
    var data = $(this).serialize();

    $.ajax({
            url: "/calculate",
            dataType: "json",
            method: "POST",
            data: data
        }
    ).done(function (data) {

        var tableString = '<table class="table-responsive table-bordered table-hover">' +
                          '<thead></thead>' +
                          '<tr></tr>' +
                          '<th>Asset Class</th>' +
                          '<th>Percentage Value</th>' +
                          '<th>Dollar Amount</th>'  ;

        for(var i in data){
            var row = data[i];

            var value = row.value;
            var calculatedValue = row.calculatedValue;
            var assetClass = row.assetClass;

            tableString += '<tr>' +
                '<td>'+assetClass+'</td>' +
                '<td>'+value+'%</td>' +
                '<td>$'+calculatedValue+'</td>' +
                '</tr>';
        }

        $("#div-calculations-table").html(tableString);
        
    })
});
