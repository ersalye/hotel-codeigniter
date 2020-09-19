/// <reference path="Notifications.js" />
$(function () {
    var _url = window.location.pathname;
    $('#txtInvestamonutMinOutsource,#txtInvestamonutMaxOutsource,#txtIncomeamonutMinOutsource,#txtIncomeamonutMaxOutsource').numeric();
    $('#btnOutsourceSave').unbind('click').click(function () {
        var sltIndustryO = $('#ddlIndustryOutsource').val();
        var descriptionOutsource = $('#txtProjectDescriptionOutsource').val().trim();
        var sltPriceInvestOutsource = $('#sltPriceInvestOutsource').val();
        var sltPriceIncomeOutsource = $('#sltPriceIncomeOutsource').val();
        var invsetMinAmountOutsource = parseFloat($('#txtInvestamonutMinOutsource').val());
        var invsetMaxAmountOutsource = parseFloat($('#txtInvestamonutMaxOutsource').val());
        var incomeMinAmountOutsource = parseFloat($('#txtIncomeamonutMinOutsource').val());
        var incomeMaxAmountOutsource = parseFloat($('#txtIncomeamonutMaxOutsource').val());
        if (sltIndustryO == "0") {
            alertMessage("Please select Industry type.", 'Error', 0);
            return false;
        }
        else if (descriptionOutsource == '') {
            alertMessage("Please enter description.", 'Error', 0);
            return false;
        }
        if (sltPriceInvestOutsource == 0) {
            alertMessage("Please select Price type.", 'Error', 0);
            return false;
        }
        else if (isNaN(invsetMinAmountOutsource)) {
            alertMessage("Please enter min amount.", 'Error', 0);
            return false;
        }
        else if (invsetMinAmountOutsource === 0) {
            alertMessage("Min amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (isNaN(invsetMaxAmountOutsource)) {
            alertMessage("Please enter max amount.", 'Error', 0);
            return false;
        }
        else if (invsetMaxAmountOutsource === 0) {
            alertMessage("Max amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (invsetMaxAmountOutsource <= invsetMinAmountOutsource) {
            alertMessage("Max amount must be greater than min amount.", 'Error', 0);
            return false;
        }
        else if (sltPriceIncomeOutsource == 0) {
            alertMessage("Please select Income type.", 'Error', 0);
            return false;
        }
        else if (isNaN(incomeMinAmountOutsource)) {
            alertMessage("Please enter min duration.", 'Error', 0);
            return false;
        }
        else if (incomeMinAmountOutsource === 0) {
            alertMessage(" Min duration must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (isNaN(incomeMaxAmountOutsource)) {
            alertMessage("Please enter max duration.", 'Error', 0);
            return false;
        }
        else if (incomeMaxAmountOutsource === 0) {
            alertMessage("Max duration must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (incomeMaxAmountOutsource <= incomeMinAmountOutsource) {
            alertMessage("Max duration must be greater than min duration.", 'Error', 0);
            return false;
        }
        var outSourceType = $('input[name=BusinessType]:checked').val();
        data = {
            'Proposal_Type': outSourceType,
            'Industry_Id': sltIndustryO,
            'Description': descriptionOutsource,
            'CurrencyID': sltPriceInvestOutsource,
            'InvsetMinAmount': invsetMinAmountOutsource,
            'InvsetMaxAmount': invsetMaxAmountOutsource,
            'DurationType': sltPriceIncomeOutsource,
            'Duration_Min': incomeMinAmountOutsource,
            'Duration_Max': incomeMaxAmountOutsource
        }
        if ((_url == '/') && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        $.ajax({
            type: "POST",
            url: rootUrl + "Post/CreateBusinessproposal",
            async: true,
            traditional: true,
            data: data,
            dataType: "json",
            beforeSend: function () {
                loader.show();
            },
            complete: function () {
                loader.hide();
            },
            success: function (response) {
                $('#sltPostAllSkills').val("0");
                if (response.ResponseStatus.toString() == "1") {
                    var notificationData = { 'NOTIFICATION_TYPE': notificationTypeEnum.QuickLinks, 'SUBTYPE': postTypeEnum.OutSource, 'REF_ID': response.BusinessproposalList[0].ID };
                    Notification.Save(notificationData);
                    var _url = window.location.pathname;
                    debugger;
                    if (_url == '/') {
                        $('#btnAlertMessageClose').addClass('RedirectToDashboard');
                        $('.RedirectToDashboard').click(function () { window.location.href = '../Home/Dashboard'; });
                    }
                    alertMessage(response.ResponseMessage, 'success', 1);
                    $('#myModalPost').hide();
                }
                else {
                    alertMessage(response.ResponseMessage, 'Error', 0);
                }
            }
        });
    });
});