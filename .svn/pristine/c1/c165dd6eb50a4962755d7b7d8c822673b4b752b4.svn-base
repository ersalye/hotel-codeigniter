/// <reference path="CommonUtil.js" />

$(document).ready(function () {
    var _url = window.location.pathname;
    var REFGRPLIST = 'INDSTY';
    viewham.setLabelText(); 
    $('#ddlIndustries').select2({placeholder: "Industries",allowClear: false});
    $('#sltInvestorcurrency').select2();
    $('#sltInvestorLocations1').select2({ placeholder: "Select Locations" });
    $('#sltInvesttype').select2({placeholder: "Association Role"});  
   
    $('#txtExpectedMinAmount,#txtExpectedMaxAmount').rnumeric();
    $('#txtInvestMinAmount, #txtInvestMaxAmount').numeric();
    $('#ddlIndustries,#sltInvesttype,#sltReturncurrency').val('');
    $('#sltInvestorcurrency').val("IN").trigger("change");
    $('#txtInvestMinAmount,#txtInvestMaxAmount,#txtExpectedMinAmount,#txtExpectedMaxAmount').val('');
    // MasterSkillsList.Bind(REFGRPLIST);
    var options = {
        placeholder: "Type your Industry",
        pageSize: 50,
        searchIn: 'INDSTY',
        url: rootUrl + "Opportunity/opGetDynamicMasterData",
        minimumSearchTextLength: 2
    };
    $('#ddlIndustries').autofillSelect(options);
    $('#btnInvesterSave').click(function () {
        var slttype = $('#ddlIndustries').val();
        var sltInvesttype = $('#sltInvesttype').val();
        var sltInvestcurrency = $('#sltInvestorcurrency').val();
        var txtInvestMinAmount =parseFloat($('#txtInvestMinAmount').val());
        var txtInvestMaxAmount = parseFloat($('#txtInvestMaxAmount').val()); 
        var txtExpectedMinAmount = parseFloat($('#txtExpectedMinAmount').val());
        var txtExpectedMaxAmount =parseFloat($('#txtExpectedMaxAmount').val());
        var InvestorLocations = $('#sltInvestorLocations1').val().toString();
        if (slttype == 0 || slttype==null) {
            alertMessage("Please select industry type .", 'Error', 0)
            return false;
        }
       else if (isNaN(txtInvestMinAmount)) {
            alertMessage("Please enter minimum investment.", 'Error', 0)
            return false;
        }
        else if (txtInvestMinAmount === 0) {
            alertMessage("Min amount must be greater than zero.", 'Error', 0)
            return false;
        }
        else if (isNaN(txtInvestMaxAmount)) {
            alertMessage("Please enter maximum investment.", 'Error', 0)
            return false;
        }
        else if (txtInvestMaxAmount === 0) {
            alertMessage(" Max amount must be greater than zero.", 'Error', 0)
            return false;
        }
        else if (txtInvestMaxAmount <= txtInvestMinAmount) {
            alertMessage("Max amount must be greater than min amount.", 'Error', 0);
            return false;
        }
        else if (isNaN(txtExpectedMinAmount)) {
            alertMessage("Please enter minimum share.", 'Error', 0)
            return false;
        }
        else if (txtExpectedMinAmount === 0) {
            alertMessage("Min Share must be greater than zero. .", 'Error', 0)
            return false;
        }
        else if (isNaN(txtExpectedMaxAmount)) {
            alertMessage("Please enter maximum share.", 'Error', 0)
            return false;
        }
        else if (txtExpectedMaxAmount === 0) {
            alertMessage("Max share must be greater than zero.", 'Error', 0)
            return false;
        }
        else if (txtExpectedMaxAmount <= txtExpectedMinAmount) {
            alertMessage("Max share must be greater than min share.", 'Error', 0);
            return false;
        }
        else if (InvestorLocations=='' || InvestorLocations == -1) {
            alertMessage("Please select location.", 'Error', 0)
            return false;
        }
        else if (sltInvesttype == 0) {
            alertMessage("Please select association type.", 'Error', 0)
            return false;
        }
        data = {
            'SkillID': slttype.toString(),
            'InvesmentType': sltInvesttype.toString(),
            'PreferredLocation': InvestorLocations.toString(),
            'CurrencyID': sltInvestcurrency,
            'Min_Investment': txtInvestMinAmount,
            'Max_Investment': txtInvestMaxAmount, 
            'Min_Returns': txtExpectedMinAmount,
            'Max_Returns': txtExpectedMaxAmount 
        }
        if ((_url == '/' || _url.toLowerCase().match('vlogin')) && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        $.ajax({
            type: "POST",
            url: rootUrl + "Opportunity/ActionInvestorFormDetails",
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
                if (response.ResponseStatus == messageTypes.success) {
                    alertMessageforms("Details Saved Successfully.", 'Success', messageTypes.success);
                    BindCoins();
                    $('#myModal').modal("hide");
                    //window.location.href = rootUrl + "Home/Home";
                    $('#btnRedirect').unbind('click').click(function () {
                        window.location.href = rootUrl + "Opportunity/ExpandInvestor";
                    });
                }
                else {
                    alertMessage(response.ResponseMessage, 'error', 0);
                } 
            }
        });
    });
});

var MasterSkillsList = (function () {
    return {
        Bind: function (REFGRPLIST) {
            $.ajax({
                async: false,
                type: "POST",
                dataType: "json",
                url: rootUrl + "Opportunity/opGetDynamicMasterData",
                data: { 'REFGRP': REFGRPLIST },
                success: function (items) {
                    console.log(items);
                    var SkillsList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                        return (item.REFGRP == 'INDSTY');
                    });
                    //var LocationsList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                    //    return (item.REFGRP == 'LOC');
                    //});
                    for (var i = 0; i < SkillsList.length; i++) {
                        $('#ddlIndustries').empty();
                        var optionslist = $('<option>', { value: "0", text: "*** Select Skill ***" });
                        $('#ddlIndustries').append(optionslist);
                        $.each(SkillsList, function (i, item) {
                            optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                            $('#ddlIndustries').append(optionslist);
                        });
                    }
                    //for (var i = 0; i < LocationsList.length; i++) {
                    //    $('#sltInvestorLocations').empty();
                    //    var optionslist = $('<option>', { value: "-1", text: "*** Select Locations ***" });
                    //    $('#sltInvestorLocations').append(optionslist);
                    //    $.each(LocationsList, function (i, item) {
                    //        optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                    //        $('#sltInvestorLocations').append(optionslist);
                    //    });
                    //}
                }
            });
        }
    }
})();
function BindCoins() {
    $.ajax({
        type: "GET",
        url: rootUrl + "Home/GetUserCoins",
        async: false,
        traditional: true,
        data: {},
        dataType: "json",
        beforeSend: function () {
            loader.show();
        },
        complete: function () {
            loader.hide();
        },
        success: function (response) {
            $('#vh_totalcoins').text(response.CoinsList[0].VIEWHAM_TOTALCOINS);
            $('#spnTotalCoins_').text(response.CoinsList[0].VIEWHAM_TOTALCOINS);
        }
    });
}
