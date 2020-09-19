/// <reference path="Notifications.js" />

$(function () {
    var _url = window.location.pathname;
    $('#txtInvestamountMinFranchise,#txtInvestamountMaxFranchise,#txtIncomeamountMinFranchise,#txtIncomeamountMaxFranchise,#txtBreakamountMinFranchise,#txtBreakamountMaxFranchise').numeric();
    $('#btnFranchiseSave').unbind('click').click(function () {
        var sltIndustryF = $('#ddlIndustryFranchise').val();
        var sltLocationFranchise = $('#ddlLocationFranchise').val();
        var descriptionFranchise = $('#txtProjectDescriptionFranchise').val();
        var modalTypeFranchise = $('#ddlFranchiseModalFranchise').val();
        var sltPriceInvestFranchise = $('#sltPriceInvestFranchise').val();
        var sltPriceIncomeFranchise = $('#sltPriceIncomeFranchise').val();
        var sltPriceBreakFranchise = $('#sltPriceBreakFranchise').val();
        var priceIntmin = parseFloat($('#txtInvestamountMinFranchise').val());
        var priceIntmax = parseFloat($('#txtInvestamountMaxFranchise').val());
        var priceIncmin = parseFloat($('#txtIncomeamountMinFranchise').val());
        var priceIncmax = parseFloat($('#txtIncomeamountMaxFranchise').val());
        var priceBrkmin = parseFloat($('#txtBreakamountMinFranchise').val());
        var priceBrkmax = parseFloat($('#txtBreakamountMaxFranchise').val());
        if (sltIndustryF == "0") {
            alertMessage("Please select Industry type.", 'Error', 0);
            return false;
        }
        else if (descriptionFranchise == '') {
            alertMessage("Please enter description.", 'Error', 0);
            return false;
        }
        else if (sltLocationFranchise == null) {
            alertMessage("Please select location.", 'Error', 0);
            return false;
        }
        else if (modalTypeFranchise == 0) {
            alertMessage("Please select Model.", 'Error', 0);
            return false;
        }
        else if (sltPriceInvestFranchise == 0) {
            alertMessage("Please select price type.", 'Error', 0);
            return false;
        }
        else if (isNaN(priceIntmin)) {
            alertMessage("Please enter amount.", 'Error', 0);
            return false;
        }
        else if (priceIntmin === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (isNaN(priceIntmax)) {
            alertMessage("Please enter max amount.", 'Error', 0);
            return false;
        }
        else if (priceIntmax === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (priceIntmax <= priceIntmin) {
            alertMessage("Max amount must be greater than min amount.", 'Error', 0);
            return false;
        }
        else if (sltPriceIncomeFranchise == 0) {
            alertMessage("Please select Income type.", 'Error', 0);
            return false;
        }
        else if (isNaN(priceIncmin)) {
            alertMessage("Please enter amount.", 'Error', 0);
            return false;
        }
        else if (priceIncmin === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (isNaN(priceIncmax)) {
            alertMessage("Please enter max amount.", 'Error', 0);
            return false;
        }
        else if (priceIncmax === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (priceIncmax <= priceIncmin) {
            alertMessage("Max amount must be greater than min amount.", 'Error', 0);
            return false;
        }
        else if (sltPriceBreakFranchise == 0) {
            alertMessage("Please select break even type.", 'Error', 0);
            return false;
        }
        else if (isNaN(priceBrkmin)) {
            alertMessage("Please enter amount.", 'Error', 0);
            return false;
        }
        else if (priceBrkmin === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (isNaN(priceBrkmax)) {
            alertMessage("Please enter max amount.", 'Error', 0);
            return false;
        }
        else if (priceBrkmax === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (priceBrkmax <= priceBrkmin) {
            alertMessage("Max amount must be greater than min amount.", 'Error', 0);
            return false;
        }
        var outSourceType = $('input[name=BusinessType]:checked').val();
        data = {
            'Proposal_Type': outSourceType,
            'Industry_Id': sltIndustryF,
            'Location': sltLocationFranchise,
            'Description': descriptionFranchise,
            'FranchiseType': modalTypeFranchise,
            'CurrencyID': sltPriceInvestFranchise,
            'InvsetMinAmount': priceIntmin,
            'InvsetMaxAmount': priceIntmax,
            'DurationType': sltPriceIncomeFranchise,
            'Duration_Min': priceIncmin,
            'Duration_Max': priceIncmax,
            'BreakEvenType': sltPriceBreakFranchise,
            'Break_Min': priceBrkmin,
            'Break_Max': priceBrkmax
        } 
        if ((_url == '/') && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        $.ajax({
            type: "POST",
            url: rootUrl + "Post/CreateBusinessProposal",
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
                    var notificationData = { 'NOTIFICATION_TYPE': notificationTypeEnum.QuickLinks, 'SUBTYPE': postTypeEnum.OfferaFranchise, 'REF_ID': response.BusinessproposalList[0].ID };
                    Notification.Save(notificationData);
                    var _url = window.location.pathname;
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