$(document).ready(function () {
    var _url = window.location.pathname;
    viewham.setLabelText();
    $('#txtEnterpreneurMinReturn,#txtEnterpreneurMaxReturn').numeric();
    $('#ddlExperience,#ddlExpertise,#sltBusinesstype,#sltReturnCurrency').val('');
    $('#txtEnterpreneurMinReturn,#txtEnterpreneurMaxReturn').val('');
    BindENTSkils("VH", "INDSTY", false, "");
    //BindENTSkils("VH", "LOC", false, "");
    $('#ddlEntrepreneur').select2({
        placeholder: "select Industries"
    });
    $('#ddlEntrepreneur').change(function () {
        var valu = $(this).val();
        BindENTSkils("VH", "SUBINDSTY", true, valu);
        $('#ddlExpertise').select2({
            placeholder: "Select Expertise",
            "val": ""
        });
    });
    $('#sltEntrepreneurLocations1').select2({
        placeholder: "select Location"
    });
    $('#ddlExpertise').select2({
        placeholder: "select Expertise"
    });
    $('#ddlExperience').select2({
        placeholder: "Select Experience"
    });
    $('#sltEntrepreneurcurrency').select2({
    });
    $('#sltBusinesstype ').select2({
        placeholder: "Select Business Type"
    });
    $('#sltEntrepreneurcurrency').val("IN").trigger("change");
    $('#btnEntrepreneurSave').click(function () {
        
        var sltEntrepreneurtype = $('#ddlEntrepreneur').val();
        var sltExperiencetype = $('#ddlExperience').val();
        var sltExpertise = $('#ddlExpertise').val();
        var sltBusinesstype = $('#sltBusinesstype').val();
        var sltReturnCurrency = $('#sltEntrepreneurcurrency').val();
        var txtEnterpreneurMinReturn = parseFloat($('#txtEnterpreneurMinReturn').val());
        var txtEnterpreneurMaxReturn = parseFloat($('#txtEnterpreneurMaxReturn').val());
        var locations = $('#sltEntrepreneurLocations1').val().toString();
        if (sltEntrepreneurtype=="0") {
            alertMessage("Industry is required.", 'error', 0);
            return false;
        }
        else if (sltExpertise.length == 0)
        {
            alertMessage("Expertise type is required.", 'error', 0);
            return false;
        }
        else if (sltExperiencetype == null) {
            alertMessage("Experience  is required.", 'error', 0);
            return false;
        }
        else if (isNaN(txtEnterpreneurMinReturn)) {
            alertMessage("Please enter min amount.", 'Error', 0);
            return false;
        }
        else if (txtEnterpreneurMinReturn === 0) {
            alertMessage(" Min amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (isNaN(txtEnterpreneurMaxReturn)) {
            alertMessage("Please enter max amount.", 'Error', 0);
            return false;
        }
        else if (txtEnterpreneurMaxReturn === 0) {
            alertMessage("Max Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (txtEnterpreneurMaxReturn <= txtEnterpreneurMinReturn) {
            alertMessage("Max amount must be greater than min amount.", 'Error', 0);
            return false;
        }
        else if (locations.length == 0) {
            alertMessage("Location  is required.", 'error', 0);
            return false;
        }
        else if (sltBusinesstype.length == 0) {
            alertMessage("Business type  is required.", 'error', 0);
            return false;
        }
        data = { 'SkillID': sltEntrepreneurtype, 'OverallExp': sltExperiencetype.toString(), 'Expertise': sltExpertise.toString(), 'CurrencyID': sltReturnCurrency.toString(), 'Min_Amount': txtEnterpreneurMinReturn.toString(), 'Max_Amount': txtEnterpreneurMaxReturn.toString(), 'BusinessType': sltBusinesstype.toString(), 'PreferredLocation': locations.toString() }
        if ((_url == '/' || _url.toLowerCase().match('vlogin')) && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        $.ajax({
            type: "POST",
            url: rootUrl + "Opportunity/ActionEntrepreneur",
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
                if (response.ResponseStatus == "1") {
                    alertMessageforms(response.ResponseMessage, 'success', 1);
                    BindCoins();
                    $('#myModal').modal("hide");
                    $('#btnRedirect').unbind('click').click(function () {
                        window.location.href = rootUrl + "Opportunity/ExpandEntrepreneur";
                    });
                }
                else {
                    alertMessage(response.ResponseMessage, 'error', 0);
                } 
            }
        });
    });
});
function BindENTSkils(MODID, REFGRP, p_child, p_prefid) { 
    $.ajax({
        type: "POST",
        async: false,
        url: rootUrl + "Opportunity/GetAllSkills",
        data: { 'MODID': MODID, 'REFGRP': REFGRP, 'PCHILD': p_child, 'PREFID': p_prefid },
        success: function (items) { 
            if (REFGRP == "INDSTY") {
                $('#ddlEntrepreneur').empty();
                var optionslist = $('<option>', { value: "0", text: "*** Select Industry ***" });
                $('#ddlEntrepreneur').append(optionslist);
                $.each(items.lobcls_VH_MASTER_DATA, function (i, item) {
                    optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                    $('#ddlEntrepreneur').append(optionslist);
                });
            }
            else if (REFGRP == "SUBINDSTY") {
                $('#ddlExpertise').empty();
                var optionslist = '';//$('<option>', { value: "0", text: "*** Select Industry ***" });
                $('#ddlExpertise').append(optionslist);
                $.each(items.lobcls_VH_MASTER_DATA, function (i, item) {
                    optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                    $('#ddlExpertise').append(optionslist);
                });
            }
            //else {
            //    $('#sltEntrepreneurLocations').empty();
            //    var optionslist = '';//$('<option>', { value: "0", text: "*** Select Locations ***" });
            //    $('#sltEntrepreneurLocations').append(optionslist);
            //    $.each(items.lobcls_VH_MASTER_DATA, function (i, item) {
            //        optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
            //        $('#sltEntrepreneurLocations').append(optionslist);
            //    });
            //}
        }
    });
}
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