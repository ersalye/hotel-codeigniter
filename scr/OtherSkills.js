var subSkillsList = '';
$(function () {
    var Mobilenumber = $('#txtCandidateNumber').val();
    var scripturl = "/Scripts/utils.js"; //For local
    var extension = $("#txtCandidateNumber").intlTelInput("getSelectedCountryData").dialCode;
    Mobilenumber = Mobilenumber.replace(/\s/g, '') 
    var telInputUserMobileNo = $("#txtCandidateNumber");
    telInputUserMobileNo.intlTelInput({
        geoIpLookup: function (callback) {
            $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        preferredCountries: ['in', 'us', 'jp'],
        separateDialCode: true,
        utilsScript: scripturl
    });
    
    var REFGRPLIST = 'SKIL,LANG,SUBSKIL';
    viewham.loadLocations('txtOSearchLocations', 'ddlLocations');
    $('#txtMinShareO,#txtMaxShareO').rnumeric();
    $('#txtCandidateNumber,#txtMinPriceO,#txtMaxPriceO,#txtShortTimeWorkAmountO').numeric();
    var _url = window.location.pathname;
    var $sltOtherSkill = $("#ddlOtherSkill");
    //var $sltSubSkils = $("#ddlSubSkils");
    var $sltLocations = $('#ddlLocations');
    var daysarray = [];  
    $sltOtherSkill.select2({placeholder: "Select Skills"});
    //$sltSubSkils.select2({placeholder: "Select Sub Skills","val": ""});
    $sltLocations.select2({ placeholder: "Select Locations" });
    var $ddlLanguage = $('#ddlLanguage');
    var skilOptions = {
        placeholder: "Type your Skill",
        pageSize: 50,
        searchIn: 'SKIL',
        url: rootUrl + "Opportunity/opGetDynamicMasterData",
        minimumSearchTextLength: 2
    };
    $sltOtherSkill.autofillSelect(skilOptions);
    var langOptions = {
        placeholder: "Type your Language",
        pageSize: 50,
        searchIn: 'LANG',
        url: rootUrl + "Opportunity/opGetDynamicMasterData",
        minimumSearchTextLength: 2
    };
    $ddlLanguage.autofillSelect(langOptions);
    //$('#ddlLanguage').select2({ placeholder: "Select Language" });
    //$sltOtherSkill.change(function () {
    //    var value = $(this).val(); 
    //    var SubSkillsList = jQuery.grep(subSkillsList, function (item, index) {
    //        return (item.PREFID == value);
    //    });
    //    for (var i = 0; i < SubSkillsList.length; i++) {
    //        $('#ddlSubSkils').select2({ placeholder: "Select Sub Skills", "val": "" });
    //        $('#ddlSubSkils').empty();
    //        var optionslist = $('<option>', { value: "0", text: "*** Select Sub Skills ***" });
    //        $('#ddlSubSkils').append(optionslist);
    //        $.each(SubSkillsList, function (i, item) {
    //            optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
    //            $('#ddlSubSkils').append(optionslist);
    //        });
    //    }
    //});
    $("#sltDays").select2();
    $('#sltShortTimeWorkO').val("IN").trigger("change");
    $("#sltExperienceO").select2({
        placeholder: "Select Experience",
    });
    $("#txtFromTimeSlotO,#txtToTimeSlotO").timepicker(); 
    $('#rbtnFile').prop('checked', true);
   // O_MasterSkills.Bind(REFGRPLIST);
    $('#divFileFormateO').unbind('click').click(function () {
        $('#txtGroupO').hide();
        $('#fileGroupO').show();
        $('#OtherSkillsFileupload,#txtfileformate,#txtOtherProjectsDescription').val('');
    });
    $('#divTextFormateO').unbind('click').click(function () {
        $('#txtGroupO').show();
        $('#fileGroupO').hide();
        $('#OtherSkillsFileupload,#txtfileformate,#txtOtherProjectsDescription').val('');
    });
    $('#rdbNagotiobleO').unbind('click').click(function () {
        $('.NagotioblePriceO').hide();
    });
    $('#rdbNonNagotiobleO').unbind('click').click(function () {
        $('.NagotioblePriceO').show();
    });
    $('#rdbnMediate').unbind('click').click(function () {
        $('.rdbHelp').hide();
        $('#rdbnMediate').prop('checked', 'checked');
        $('#rdbnHelp').prop('checked', false);
    });
    $('#rdbnHelp').unbind('click').click(function () {
        $('.rdbHelp').show();
        $('#rdbnHelp').prop('checked', 'checked');
        $('#rdbnMediate').prop('checked', false);
    });
    //$('#btnAddSlotsO').unbind('click').click(function () {
    //    if (daysarray.length > 0) {
    //        var fromtime = $("#txtFromTimeSlotO").val();
    //        var totime = $("#txtToTimeSlotO").val();
    //        var tdslist = '';
    //        if (fromtime == "") {
    //            alertMessage('From time is required.');
    //            return false;
    //        }
    //        else if (totime == "") {
    //            alertMessage('To time is required.');
    //            return false;
    //        }
    //        for (var i = 0; i < daysarray.length; i++) {
    //            var _day = daysarray[i];
    //            tdslist += "<tr>";
    //            tdslist += "<td>" + _day + "</td>";
    //            tdslist += "<td>" + fromtime + "</td>";
    //            tdslist += "<td>" + totime + "</td>";
    //            tdslist += "<td><button title='Delete Time Slot' class='btn btn-danger slotdelete' id='btnDeleteSlot_" + _day + "'><i class='fa fa-trash'></i></button></td>";
    //            tdslist += "</tr>";
    //        }
    //        daysarray = [];
    //        $("#txtFromTimeSlotO,#txtToTimeSlotO").val('');
    //        $('#tblTimeSlotsO').show().append(tdslist);
    //        $('.slotdelete').unbind('click').click(function () {
    //            var _day = $(this).attr('id').split('_')[1];
    //            $(this).closest('tr').remove();
    //            $('#Obtnweekday' + _day).removeClass('btn-danger').addClass('btn-success');
    //        });
    //    }
    //    else {
    //        alertMessage('Day is required.');
    //    }
    //});
    //$('.daysO').unbind('click').click(function () {
    //    debugger;
    //    if ($(this).hasClass('btn-danger')) {
    //        alertMessage("Slot alreday exists on this day.");
    //        return false;
    //    }
    //    else {
    //        daysarray.push($(this).val());
    //        $(this).removeClass('btn-success').addClass('btn-danger');
    //    }
    //});
    $('#btnOtherSave').unbind('click').click(function () {
        debugger;
        var OTHID = $('#hdnOtherId').val();
        var fileUpload = $("#OtherSkillsFileupload").get(0);
        var files = fileUpload.files;
        var sltOtherSkill = $sltOtherSkill.val();
        var sltSubSkils = ''; //$sltSubSkils.val();
        var sltLocations = $sltLocations.val().toString();
        var experience = $('#sltExperienceO').val();
        var language = $('#ddlLanguage').val();
        var txtShortTimeWorkAmount = parseFloat($('#txtShortTimeWorkAmountO').val());
        var txtMinPrice = parseFloat($('#txtMinPriceO').val());
        var txtMaxPrice = parseFloat($('#txtMaxPriceO').val());
        var txtMinShare =parseFloat($('#txtMinShareO').val());
        var txtMaxShare =parseFloat($('#txtMaxShareO').val());
        var txtCandidateName = $('#txtCandidateName').val();
        var txtCandidateMobileNo = $('#txtCandidateNumber').val().trim();
        var OthermobileNo = "";
   
        var negType = $("input[name='NagotioblePriceHBO']:checked").val();
        var _ProfileFor = $("input[name='ProfileFor']:checked").val();
        var Projectsdescription = '';
        var fileData = new FormData();
           Projectsdescription = $('#txtOtherCrrObjective').val().trim();
           if (sltOtherSkill == 0 || sltOtherSkill==null) {
            alertMessage("Please select other skill.",'Error',0)
            return false;
        }
        //else if (sltSubSkils.length == 0) {
        //    alertMessage("Please select sub skill.",'Error',0)
        //    return false;
               //}
           else if (experience == 0) {
               alertMessage("Please select experience", 'Error', 0)
               return false;
           }
        else if (sltLocations.length == 0) {
            alertMessage("Please select location.", 'Error', 0)
            return false;
        }
        else if (language.length == 0 || language == null) {
            alertMessage("Please select language.", 'Error', 0);
            return false;
        }
        else if (language.length > 2) {
            alertMessage("Only two languages are allowed.", 'Error', 0);
            return false;
        }
        else if (Projectsdescription == '') {
            alertMessage("Please enter career objective.", 'Error', 0);
            return false;
        }
        else if (sltShortTimeWorkO == 0) {
            alertMessage("Please select price type.", 'Error', 0);
            return false;
        }
        
        else if (isNaN(txtShortTimeWorkAmount)) {
            alertMessage("Please enter amount.", 'Error', 0);
            return false;
        }
        else if (txtShortTimeWorkAmount === 0) {
            alertMessage("Amount must be greater than zero.", 'Error', 0);
            return false;
        }
        else if (negType == "X") {
             if (isNaN(txtMinPrice)) {
                alertMessage("Please enter min amount.", 'Error', 0);
                return false;
            }
            else if (txtMinPrice === 0) {
                alertMessage("Min amount must be greater than zero.", 'Error', 0);
                return false;
            }
            else if (isNaN(txtMaxPrice)) {
                alertMessage("Please enter max amount.", 'Error', 0);
                return false;
            }
            else if (txtMaxPrice === 0) {
                alertMessage("Max amount must be greater than zero.", 'Error', 0);
                return false;
            }
            else if (txtMaxPrice <= txtMinPrice) {
                alertMessage("Max amount must be greater than min amount.", 'Error', 0);
                return false;
            }
            else if (isNaN(txtMinShare)) {
                alertMessage("Please enter min share.", 'Error', 0);
                return false;
            }
            else if (txtMinShare === 0) {
                alertMessage("Min share must be greater than zero.", 'Error', 0);
                return false;
            }
            else if (isNaN(txtMaxShare)) {
                alertMessage("Please enter max share.", 'Error', 0);
                return false;
            }
            else if (txtMaxShare === 0) {
                alertMessage("Max share must be greater than zero.", 'Error', 0);
                return false;
            }
            else if (txtMaxShare <= txtMinShare) {
                alertMessage("Max share must be greater than min share.", 'Error', 0);
                return false;
            }
        }
        if (_ProfileFor == "H")
        { 
             if (txtCandidateName == "") {
                alertMessage("Please enter contact name.", 'Error', 0);
                return false;
             }
             else if (txtCandidateMobileNo == "")
             {
                 alertMessage("Please enter contact number.", 'Error', 0);
                 return false;
             }        
            var extension = $("#txtCandidateNumber").intlTelInput("getSelectedCountryData").dialCode;
            if (extension == undefined) {
                alertMessage("Mobile extension is required.", 'Error', 0)
                $('#txtCandidateNumber').focus();
                return false;
            }
            else if (!$('#txtCandidateNumber').intlTelInput("isValidNumber")) {
                alertMessage("Mobile no is not valid.", 'Error', 0)
                $('#txtCandidateNumber').focus();
                return false;
            }
            else
                OthermobileNo = '+' + extension + ' ' + txtCandidateMobileNo;
            
       }
        
        var buttonType = $(this).val(); 
        var _languages = $('#ddlLanguage').val();
        var jsonArr = [];
        var OtherDetails = {};  
        var _exep = $('#sltExperienceO').val();
        //var table = document.getElementById('tblTimeSlotsO');
        //for (var i = 1, row; row = table.rows[i]; i++) {
        //    var col = row.cells;
        //    var jsonObj = {
        //        DayName: col[0].innerHTML,
        //        FromTime: col[1].innerHTML,
        //        ToTime: col[2].innerHTML,
        //    }
        //    jsonArr.push(jsonObj);
        //}
        OtherDetails.PROSKILID = sltOtherSkill;
        OtherDetails.SUBSKILIDList = "";//sltSubSkils.join();
        OtherDetails.LocationList = sltLocations;
        OtherDetails.Experience = _exep;
       // OtherDetails.Description = $('#txtOtherCrrObjective').val();
        OtherDetails.TimingsList = jsonArr;
        OtherDetails.Language =_languages!=""? _languages.toString() :"";
        OtherDetails.STWMType = $('#sltShortTimeWorkO').val();
        OtherDetails.STWMoney = txtShortTimeWorkAmount;
        OtherDetails.STWPerDayHours = $('#sltShortTimeWorkTimesO').val();
        OtherDetails.NegMinAmounPrice = $('#txtMinPriceO').val();
        OtherDetails.NegMaxAmounPrice = $('#txtMaxPriceO').val();
        OtherDetails.NegMinSharePrice = $('#txtMinShareO').val();
        OtherDetails.NegMaxSharePrice = $('#txtMaxShareO').val();
        OtherDetails.careerobjective = $('#txtOtherCrrObjective').val();
        OtherDetails.RbnType = 'M';
        OtherDetails.LongTimeWorkType = negType;
        OtherDetails.WorkFor = _ProfileFor;
        OtherDetails.ContactName = $('#txtCandidateName').val();
        OtherDetails.ContactNumber = OthermobileNo;
        OtherDetails.ID = OTHID;
        if ((_url == '/') && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        if (buttonType == "Save") {
            $.ajax({
                url: rootUrl + 'Opportunity/CreateOtherSkills',
                type: "POST",
                async: false,
                traditional: true,
                data: JSON.stringify({ 'OtherDetails': OtherDetails }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                beforeSend: function () {
                    loader.show();
                },
                complete: function () {
                    loader.hide();
                },
                success: function (result) {
                    console.log(result); 
                    if (result.ResponseStatus == 1) {                   
                        if (files.length > 0) { 
                            for (var i = 0; i < files.length; i++) {
                                fileData.append(files[i].name, files[i]);
                            }
                            fileData.append("ViewhamProId", result.lobcls_VH_OTHER_SKILLS[0].ID);
                            fileData.append("FROM_TABLE", "VH_OTHER_SKILLS");
                            $.ajax({
                                url: rootUrl + 'Opportunity/Updateportafolio',
                                data: fileData,
                                type: 'POST',
                                processData: false,
                                contentType: false,
                                success: function (Otherresult) {
                                    if (Otherresult.ResponseStatus == 1) {
                                        alertMessageforms(result.ResponseMessage, 'success', 1);
                                        $('#myOtherSkillModal').modal("hide");
                                        $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Home/Dashboard";
                                        });
                                        $('#btnRedirect').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Opportunity/ExpandOther?ID=" + result.lobcls_VH_OTHER_SKILLS[0].ID;
                                        });
                                    }
                                    else {
                                        alertMessage(Otherresult.ResponseMessage, 'error', 0);
                                    } 
                                }
                            });
                        }
                        else {
                            alertMessageforms(result.ResponseMessage, 'success', 1);
                            $('#myOtherSkillModal').modal("hide");
                            $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                                window.location.href = rootUrl + "Home/Dashboard";
                            });
                            $('#btnRedirect').unbind('click').click(function () {
                                window.location.href = rootUrl + "Opportunity/ExpandOther?ID=" + result.lobcls_VH_OTHER_SKILLS[0].ID;
                            });
                        }
                    } else {
                        alertMessage(result.ResponseMessage, 'error', 0);
                    }
                },
                error: function (err) {
                    alertMessage(err, 'error', 0); 
                }

            });
        }
        else {
            $.ajax({
                type: "POST",
                url: rootUrl + "Opportunity/opUpdateOtherSkill",
                async: true,
                traditional: true,
                data: JSON.stringify({ 'lobcls_Otherskill': OtherDetails }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                beforeSend: function () {
                    $(".ajax-spinner").show();
                },
                complete: function () {
                    $(".ajax-spinner").hide();
                },
                success: function (response) {
                    console.log(response);
                    if (response.ResponseStatus == 1) {
                        if (files.length > 0) {
                            if (window.FormData !== undefined) {
                                for (var i = 0; i < files.length; i++) {
                                    fileData.append(files[i].name, files[i]);
                                }
                                fileData.append("ViewhamProId", response.lobcls_VH_OTHER_SKILLS[0].ID);
                                fileData.append("FROM_TABLE", "VH_OTHER_SKILLS");
                                $.ajax({
                                    url: rootUrl + 'Opportunity/Updateportafolio',
                                    data: fileData,
                                    type: 'POST',
                                    processData: false,
                                    contentType: false,
                                    success: function (result) {
                                        alertMessageforms("Skill Updated Successfully.", 'success', 1);
                                        $('#myOtherSkillModal').modal("hide");
                                        $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Home/Dashboard";
                                        });
                                        $('#btnRedirect').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Opportunity/ExpandOther?ID=" + response.lobcls_VH_OTHER_SKILLS[0].ID;
                                        });
                                    }
                                });
                            }
                            else {
                                alertMessage('FormData is not supported.', 'Error', 0);
                                $('#myHobbysModal').modal("hide");
                            }
                        }
                        else {
                            alertMessageforms(response.ResponseMessage, 'success', 1);
                            $('#myOtherSkillModal').modal("hide");
                            $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                                window.location.href = rootUrl + "Home/Dashboard";
                            });
                            $('#btnRedirect').unbind('click').click(function () {

                                window.location.href = rootUrl + "Opportunity/ExpandOther?ID="+response.lobcls_VH_OTHER_SKILLS[0].ID;
                            });
                        }
                    }
                    else {
                        alertMessage(response.ResponseMessage, 'error', 0);
                    }
                }
            });
        }
    });
    $('#BtnAddNewOtherSkill').click(function () { 
        $('#myOtherSkillsModal').modal('show');
    });
    $('.noctrlxcv').bind("cut copy paste", function (e) {
        e.preventDefault();
    });
});
var OtherPersonSkills = (function () {
    return {
        EDITSKILL: function (ID) { 
            $.ajax({
                type: "POST",
                url: rootUrl + "Opportunity/opGetOtherSkill",
                async: false,
                traditional: true,
                data: { "ID": ID },
                dataType: "json",
                beforeSend: function () {
                    loader.show();
                },
                complete: function () {
                    loader.hide();
                },
                success: function (response) { 
                    $('.daysO').removeClass('btn-danger').addClass('btn-success');
                    if (response.lobcls_VH_OTHER_SKILLS.length != 0) { 
                        $('#btnOtherSave').val('Update').text('Update');
                        var otherskillsdata = response.lobcls_VH_OTHER_SKILLS[0];
                        $("#ddlOtherSkill").append("<option value=" + otherskillsdata.PROSKILID + ">" + $('.spnOthSkillName_'+ID).text() + "</option>");
                        $("#ddlOtherSkill").val(otherskillsdata.PROSKILID).trigger("change");
                        var subskilslIst = otherskillsdata.SUBSKILIDList;
                        var locationslIst = otherskillsdata.LocationList;
                        var exep = otherskillsdata.Experience;
                        var _languages = otherskillsdata.Language;
                       // $('#ddlSubSkils').val(subskilslIst.split(',')).trigger("change");
                        $("#ddlLocations").empty();
                        var investorLocations = locationslIst.split(",");
                        if (investorLocations!="" && investorLocations.length > 0) {
                            for (i = 0; i < investorLocations.length; i++) {
                                $("#ddlLocations").selectTwo(investorLocations[i]);
                            }
                        }                       
                        $('#ddlLanguage').val(_languages.split(',')).trigger("change");
                        $('#sltExperienceO').val(exep).trigger("change"); 
                        //var daysarray = [];
                        //if (response.WORK_TIMINGSList != null && response.WORK_TIMINGSList.length>0) {
                        //    var tdslist = '';
                        //    for (var i = 0; i < response.WORK_TIMINGSList.length; i++) {
                        //        var _day = response.WORK_TIMINGSList[i].WEEKDAY;
                        //        daysarray.push(_day);
                        //        tdslist += "<tr>";
                        //        tdslist += "<td>" + _day + "</td>";
                        //        tdslist += "<td>" + response.WORK_TIMINGSList[i].TIMEFROM + "</td>";
                        //        tdslist += "<td>" + response.WORK_TIMINGSList[i].TIMETO + "</td>";
                        //        tdslist += "<td><button title='Delete Time Slot' class='btn btn-danger slotdelete' id='btnDeleteSlot_" + _day + "'><i class='fa fa-trash'></i></button></td>";
                        //        tdslist += "</tr>";
                        //        $('#Obtnweekday' + _day).removeClass('btn-success').addClass('btn-danger');
                        //    }
                        //    $('#tblTimeSlotsO').show().append(tdslist);
                        //}
                        $('#sltShortTimeWorkO').val(otherskillsdata.STWMType.trim()).trigger("change");
                        $('#txtShortTimeWorkAmountO').val(otherskillsdata.STWMoney);
                        $('#sltShortTimeWorkTimesO').val(otherskillsdata.STWPerDayHours);
                        $('#txtMinPriceO').val(otherskillsdata.NegMinAmounPrice);
                        $('#txtMaxPriceO').val(otherskillsdata.NegMaxAmounPrice);
                        $('#txtMinShareO').val(otherskillsdata.NegMinSharePrice);
                        $('#txtMaxShareO').val(otherskillsdata.NegMaxSharePrice);
                        $('#txtOtherCrrObjective').val(otherskillsdata.Careerobjective);
                        if (otherskillsdata.LongTimeWorkType == 'N')
                            $("#rdbNagotiobleO").attr('checked', 'checked');
                        else if (otherskillsdata.LongTimeWorkType == 'X') {
                            $("#rdbNonNagotiobleO").attr('checked', 'checked');
                            $('.NagotioblePriceO').show();
                        }
                        if (otherskillsdata.WorkFor == 'M')
                            $("#rdbnMediate").attr('checked', 'checked');
                        else if (otherskillsdata.WorkFor == 'H') {
                            $("#rdbnHelp").attr('checked', 'checked');
                            $('.rdbHelp').show();
                        }
                        $('#txtCandidateName').val(otherskillsdata.ContactName);
                        if (otherskillsdata.ContactNumber != '') {
                            var mobi = otherskillsdata.ContactNumber.split(' ')[1];
                            var Mobileno = mobi.replace(/\s/g, '');
                            $('#txtCandidateNumber').val(Mobileno);
                        }
                    
                        
                        $('.slotdelete').unbind('click').click(function () {
                            var _day = $(this).attr('id').split('_')[1];
                            $(this).closest('tr').remove();
                            $('#Obtnweekday' + _day).removeClass('btn-danger').addClass('btn-success');
                        });
                    }
                    else {
                        $('#btnOtherSave').val('Save').text('Save');
                    }
                }
            });
        },
    }
})();
var O_MasterSkills = (function () {
    return {
        Bind: function (REFGRPLIST) {
            $.ajax({
                async: false,
                type: "POST",
                dataType: "json",
                url: rootUrl + "Opportunity/opGetDynamicMasterData",
                data: { 'REFGRP': REFGRPLIST },
                success: function (items) {
                    var SkillsList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                        return (item.REFGRP == 'SKIL');
                    });
                    var LanguageList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                        return (item.REFGRP == 'LANG');
                    }); 
                    subSkillsList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                        return (item.REFGRP == 'SUBSKIL');
                    });
                    for (var i = 0; i < LanguageList.length; i++) {
                        $('#ddlLanguage').empty();
                        var optionslist = $('<option>', { value: "0", text: "*** Select Language ***" });
                        $('#ddlLanguage').append(optionslist);
                        $.each(LanguageList, function (i, item) {
                            optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                            $('#ddlLanguage').append(optionslist);
                        });
                    }
                    for (var i = 0; i < SkillsList.length; i++) {
                        $('#ddlOtherSkill').empty();
                        var optionslist = $('<option>', { value: "0", text: "*** Select Skill ***" });
                        $('#ddlOtherSkill').append(optionslist);
                        $.each(SkillsList, function (i, item) {
                            optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                            $('#ddlOtherSkill').append(optionslist);
                        });
                    }
                }
            });
        }
    }
})();
function minmax(value, min, max) {
    if (parseInt(value) < min || isNaN(parseInt(value)))
        return 1;
    else if (parseInt(value) > max)
        return 100;
    else return value;
}
function ValidateAlpha(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 && charCode != 46)

        return false;
    return true;
}
