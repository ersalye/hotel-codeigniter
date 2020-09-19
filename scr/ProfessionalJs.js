var subSkillsList = '';
$(function () { 
    var _url = window.location.pathname;
    $('#txtShortTimeWorkAmount,#txtMinPrice,#txtMaxPrice').numeric();
    $('#txtMinShare,#txtMaxShare').rnumeric();
    var REFGRPLIST = 'SKIL,SUBSKIL'; 
    var daysarray = [];
    var $selectlocations = $('#sltLocations');
    var $selectProfessional = $("#sltProfessional");
    //var $selectsltSubSkils = $("#sltSubSkils");
   
    var options = {
        placeholder: "Type your Skill",
        pageSize: 50,
        searchIn: 'SKIL',
        url: rootUrl+"Opportunity/opGetDynamicMasterData",
        minimumSearchTextLength:2
    };
    $selectProfessional.autofillSelect(options);
    //var pageSize = 50;
    //$selectProfessional.select2({
    //    placeholder: "Type your Skill",
    //    minimumInputLength: 2,            
    //    allowClear: true,
    //    ajax: {
    //        //How long the user has to pause their typing before sending the next request
    //        quietMillis: 150,
    //        //The url of the json service
    //        url: "Opportunity/opGetDynamicMasterData",
    //        dataType: 'json',
    //        //Our search term and what page we are on
    //        data: function (params) {
    //            return {
    //                SearchIn: 'SKIL',
    //                SearchWith:  params.term,
    //                PageNum: params.page||1,
    //                PageSize: pageSize
    //            };
    //        },
    //        processResults: function (data, params) {
    //            // parse the results into the format expected by Select2
    //            // since we are using custom formatting functions we do not need to
    //            // alter the remote JSON data, except to indicate that infinite
    //            // scrolling can be used
    //            params.page = params.page || 1;
    //            return {
    //                results: data.Results,
    //                pagination: {
    //                    more: (params.page * pageSize) < data.Total
    //                }
    //            };
    //        },
    //        cache: true            
    //    }
    //});

    //$selectProfessional.change(function () {
    //    var value = $(this).val();
    //    console.log('subSkillsList', subSkillsList);
    //    var SubSkillsList = jQuery.grep(subSkillsList, function (item, index) {
    //        return (item.PREFID == value);
    //    });
    //    for (var i = 0; i < SubSkillsList.length; i++) {
    //        $('#sltSubSkils').select2({ placeholder: "Select Sub Skills", "val": "" });
    //        $('#sltSubSkils').empty();
    //        var optionslist = $('<option>', { value: "0", text: "*** Select Sub Skills ***" });
    //        $('#sltSubSkils').append(optionslist);
    //        $.each(SubSkillsList, function (i, item) {
    //            optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
    //            $('#sltSubSkils').append(optionslist);
    //        });
    //    }             
    //});
    //$selectsltSubSkils.select2({
    //    placeholder: "Select Sub Skills"
    //});
    $selectlocations.select2({placeholder: "Select Locations"});
    $("#sltDays").select2();
    $('#sltShortTimeWork').val("IN").trigger("change");
    $("#sltExperience").select2({
        placeholder: "Select Experience",
    });
    $("#txtFromTimeSlot,#txtToTimeSlot").timepicker();
    $('#divFileFormateP').unbind('click').click(function () {
        $('#txtGroup').hide();
        $('#fileGroup').show();
        $('#txtProfessionalDescription,#fileUploadProfessionals1,#fileUploadProfessionals').val('');
    });
    $('#divTextFormateP').unbind('click').click(function () {
        $('#txtGroup').show();
        $('#fileGroup').hide();
        $('#txtProfessionalDescription,#fileUploadProfessionals1,#fileUploadProfessionals').val('');
    });
    $('#rdbNagotioble').unbind('click').click(function () {
        $('.rdbNagotioblePrice').hide();
    });
    $('#rdbNonNagotioble').unbind('click').click(function () {
        $('.rdbNagotioblePrice').show();
    });
    $('#btnAddSlotsP').unbind('click').click(function () {
        if (daysarray.length > 0) {
            var fromtime = $("#txtFromTimeSlot").val();
            var totime = $("#txtToTimeSlot").val();
            var Ftime = fromtime.split('')[5];
            var Ttime = totime.split('')[5];
            var tdslist = '';
            if (fromtime == "") {
                alertMessage('From time is required.');
                return false;
            }
            else if (totime == "") {
                alertMessage('To time is required.');
                return false;
            }
            else if (fromtime == totime && Ftime == Ttime) {
                alertMessage('From time and to time should be differ.');
                return false;
            }
            else if (Ftime == 'P' && fromtime > totime) {
                alertMessage('From time should be less than to time.');
                return false;
            }
            else if ( fromtime > totime) {
                alertMessage('From time should be less than to time.');
                return false;
            }
            for (var i = 0; i < daysarray.length; i++) {
                var _day = daysarray[i];
                tdslist += "<tr>";
                tdslist += "<td>" + _day + "</td>";
                tdslist += "<td>" + fromtime + "</td>";
                tdslist += "<td>" + totime + "</td>";
                tdslist += "<td><button title='Delete Time Slot' class='btn btn-danger slotdelete' id='btnDeleteSlot_" + _day + "'><i class='fa fa-trash'></i></button></td>";
                tdslist += "</tr>";
            }
            daysarray = [];
            $("#txtFromTimeSlot").val('');
            $("#txtToTimeSlot").val('');
            $('#tblTimeSlots').show().append(tdslist);
            $('.slotdelete').unbind('click').click(function () {
                var _day = $(this).attr('id').split('_')[1];
                $(this).closest('tr').remove();
                $('#btnweekday' + _day).removeClass('btn-danger').addClass('btn-success');
            });
        }
        else {
            alertMessage('Day is required.');
        }
    });
    $('.daysP').unbind('click').click(function () { 
        if ($(this).hasClass('btn-danger')) {
            alertMessage("Slot alreday exists on this day.");
            return false;
        }
        else {
            daysarray.push($(this).val());
            $(this).removeClass('btn-success').addClass('btn-danger');
        }
    });
    //P_MasterSkills.Bind(REFGRPLIST);
    if ($('#hdnProfessionalId').val() > 0) {
        ProfessionalSkills.EDITSKILL();
    }
    $('#btnProfessionalSave').unbind('click').click(function () {
        var jsonArr = [];
        var proDetails = {};
        var selectProfessional = $('#sltProfessional').val();
        var selectsltSubSkils =''; //$('#sltSubSkils').val();
        var selectlocations = $('#sltLocations').val().toString();
        var sltExperience = $('#sltExperience').val();
        var sltPrice = $('#sltShortTimeWorkTimes').val();
        var Price = parseFloat($('#txtShortTimeWorkAmount').val());
        var sltWorktype = $('#sltWorktype').val();
        var txtMinPrice = parseFloat($('#txtMinPrice').val());
        var txtMaxPrice = parseFloat($('#txtMaxPrice').val());
        var txtMinShare =parseFloat($('#txtMinShare').val());
        var txtMaxShare =parseFloat($('#txtMaxShare').val());
        var fileUpload = $("#fileUploadProfessionals").get(0);
        var negType = $("input[name='NagotioblePrice']:checked").val();
        var files = fileUpload.files;
        var fileData = new FormData();
        var Projectsdescription = '';
         Projectsdescription = $('#txtProfCrrObjective').val().trim();
         
         if (selectProfessional == 0 || selectProfessional == null) {
            alertMessage("Please select professional skill.", 'Error', 0);
            return false;
        }
        //else if (selectsltSubSkils.length == 0) {
        //    alertMessage("Please select sub skill.", 'Error', 0);
        //    return false;
        //}
        else if (selectlocations.length == 0) {
            alertMessage("Please select location.", 'Error', 0);
            return false;
        }
        else if (Projectsdescription == '') {
            alertMessage("Please enter career objective.", 'Error', 0);
            return false;
        }
        else if (sltExperience == -1) {
            alertMessage("Please select experience.", 'Error', 0);
            return false;
        }
        else if (isNaN(Price)) {
            alertMessage("Please enter amount.", 'Error', 0);
            return false;
        }
        else if (Price === 0) {
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
        var _skils = $selectProfessional.val();
        var _subSkil = '';//$selectsltSubSkils.val();
        var _locations = $selectlocations.val().toString();
        var _exep = $('#sltExperience').val();
        var table = document.getElementById('tblTimeSlots');
        for (var i = 1, row; row = table.rows[i]; i++) {
            var col = row.cells;
            var jsonObj = {
                DayName: col[0].innerHTML,
                FromTime: col[1].innerHTML,
                ToTime: col[2].innerHTML,
            }
            jsonArr.push(jsonObj);
        }
        proDetails.PROSKILID = _skils;
        proDetails.ID = $('#hdnProfessionalId').val();
        proDetails.SUBSKILIDList = _subSkil;//_subSkil.join();
        proDetails.LocationList = _locations;
        proDetails.Experience = _exep;
       // proDetails.Description = Projectsdescription;
        proDetails.Careerobjective = $('#txtProfCrrObjective').val();
        proDetails.TimingsList = jsonArr;
        proDetails.STWMType = $('#sltShortTimeWork').val();
        proDetails.STWMoney = $('#txtShortTimeWorkAmount').val();
        proDetails.STWPerDayHours = $('#sltShortTimeWorkTimes').val();
        proDetails.NegMinAmounPrice = $('#txtMinPrice').val();
        proDetails.NegMaxAmounPrice = $('#txtMaxPrice').val();
        proDetails.NegMinSharePrice = $('#txtMinShare').val();
        proDetails.NegMaxSharePrice = $('#txtMaxShare').val();
        proDetails.LongTimeWorkType = negType;
        console.log(proDetails);
        if ((_url == '/') && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        $.ajax({
            url: rootUrl + 'Opportunity/UpdateProfessionalDetails',
            type: "POST",
            async: false,
            traditional: true,
            data: JSON.stringify({ 'ProDetails': proDetails }),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            beforeSend: function () {
                loader.show();
            },
            complete: function () {
                loader.hide();
            },
            success: function (result) { 
                if (result.ResponseStatus == 1) {
                    if (files.length > 0) {
                        if (window.FormData !== undefined) {
                            for (var i = 0; i < files.length; i++) {
                                fileData.append(files[i].name, files[i]);
                            }
                            fileData.append("ViewhamProId", result.lobcls_VH_PROFESSIONAL_SKILLS[0].ID);
                            fileData.append("FROM_TABLE", "VH_PROFESSIONAL_SKILLS");
                            $.ajax({
                                url: rootUrl + 'Opportunity/Updateportafolio',
                                data: fileData,
                                type: 'POST',
                                processData: false,
                                contentType: false,
                                success: function (Fileresults) {
                                    if (Fileresults.ResponseStatus == "1") {
                                        alertMessageforms(result.ResponseMessage, 'success', 1);
                                        $('#mySkillsModal').modal("hide");
                                        $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Home/Dashboard";
                                        });
                                        $('#btnRedirect').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Opportunity/ExpandProfession";
                                        });
                                    }
                                    else {
                                        alertMessage(Fileresults.ResponseMessage, 'error', 0);
                                    }
                                }
                            });
                        }
                        else {
                            alertMessage('FormData is not working', 'Error', 0);
                            $('#mySkillsModal').modal("hide");
                        }
                    }
                    else {
                        alertMessageforms(result.ResponseMessage, 'success', 1);
                        $('#mySkillsModal').modal("hide");
                        $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                            window.location.href = rootUrl + "Home/Dashboard";
                        });
                        $('#btnRedirect').unbind('click').click(function () {
                            window.location.href = rootUrl + "Opportunity/ExpandProfession";
                        });
                    }
                }
                else {
                    alertMessage(result.ResponseMessage, 'error', 0);
                }
            },
            error: function (err) {
                alertMessage(result.ResponseMessage, 'error', 0);
            }
        }); 
    });
    viewham.loadLocations('txtSearchLocations', 'sltLocations');

    $('#txtProfCrrObjective').bind("cut copy paste", function (e) {
        e.preventDefault();
    });
});
var P_MasterSkills = (function () { 
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
                    subSkillsList = jQuery.grep(items.lobcls_VH_MASTER_DATA, function (item, index) {
                        return (item.REFGRP == 'SUBSKIL');
                    });
                    //for (var i = 0; i < SkillsList.length; i++) { 
                    //    $('#sltProfessional').empty();
                    //    var optionslist = $('<option>', { value: "0", text: "*** Select Skill ***" });
                    //    $('#sltProfessional').append(optionslist);
                    //    $.each(SkillsList, function (i, item) {
                    //        optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                    //        $('#sltProfessional').append(optionslist);
                    //    });
                    //} 
                }
            });                 
        }  
    }
})();
var ProfessionalSkills = (function () {
    return {
        EDITSKILL: function () {
            $.ajax({
                type: "POST",
                url: rootUrl + "Opportunity/GetProfessionals",
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
                    if (response.lobcls_VH_PROFESSIONAL_SKILLS.length != 0) {
                        $('#btnProfessionalSave').val('Update').text('Update');
                        // $("#sltProfessional").val(parseInt(response.lobcls_VH_PROFESSIONAL_SKILLS[0].PROSKILID)).trigger("change");
                        $("#sltProfessional").append("<option value=" + parseInt(response.lobcls_VH_PROFESSIONAL_SKILLS[0].PROSKILID) + ">" + $('.spnProSkillName').text() + "</option>");
                        $("#sltProfessional").val(parseInt(response.lobcls_VH_PROFESSIONAL_SKILLS[0].PROSKILID)).trigger("change");
                        var subskilslIst = response.lobcls_VH_PROFESSIONAL_SKILLS[0].SUBSKILIDList;
                        var locationslIst = response.lobcls_VH_PROFESSIONAL_SKILLS[0].LocationList;
                        var exep = response.lobcls_VH_PROFESSIONAL_SKILLS[0].Experience;
                        //$('#sltSubSkils').val(subskilslIst.split(',')).trigger("change");
                        $("#sltLocations").empty();
                        var investorLocations = locationslIst.split(",");
                        if (investorLocations.length > 0) {
                            for (i = 0; i < investorLocations.length; i++) {
                                $("#sltLocations").selectTwo(investorLocations[i]);
                            }
                        }
                        $('#sltExperience').val(exep).trigger("change");
                        var daysarray = [];
                        if (response.WORK_TIMINGSList != null) {
                            var tdslist = '';
                            for (var i = 0; i < response.WORK_TIMINGSList.length; i++) {
                                var _day = response.WORK_TIMINGSList[i].WEEKDAY;
                                daysarray.push(_day);
                                tdslist += "<tr>";
                                tdslist += "<td>" + _day + "</td>";
                                tdslist += "<td>" + response.WORK_TIMINGSList[i].TIMEFROM + "</td>";
                                tdslist += "<td>" + response.WORK_TIMINGSList[i].TIMETO + "</td>";
                                tdslist += "<td><button title='Delete Time Slot' class='btn btn-danger slotdelete' id='btnDeleteSlot_" + _day + "'><i class='fa fa-trash'></i></button></td>";
                                tdslist += "</tr>";
                                $('#btnweekday' + _day).removeClass('btn-success').addClass('btn-danger');
                            }
                            $('#tblTimeSlots').show().append(tdslist);
                        }
                        $('#sltShortTimeWork').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].STWMType.trim()).trigger("change");
                        $('#txtShortTimeWorkAmount').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].STWMoney);
                        $('#sltShortTimeWorkTimes').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].STWPerDayHours);
                        $('#txtMinPrice').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].NegMinAmounPrice);
                        $('#txtMaxPrice').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].NegMaxAmounPrice);
                        $('#txtMinShare').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].NegMinSharePrice);
                        $('#txtMaxShare').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].NegMaxSharePrice);
                        $('#txtProfCrrObjective').val(response.lobcls_VH_PROFESSIONAL_SKILLS[0].Careerobjective);
                        if (response.lobcls_VH_PROFESSIONAL_SKILLS[0].LongTimeWorkType == 'N')
                            $("#rdbNagotioble").attr('checked', 'checked');
                        else if (response.lobcls_VH_PROFESSIONAL_SKILLS[0].LongTimeWorkType == 'X') {
                            $("#rdbNonNagotioble").attr('checked', 'checked');
                            $('.rdbNagotioblePrice').show();
                        }
                        $('.slotdelete').unbind('click').click(function () {
                            var _day = $(this).attr('id').split('_')[1];
                            $(this).closest('tr').remove();
                            $('#btnweekday' + _day).removeClass('btn-danger').addClass('btn-success');
                        });
                    }
                    else {
                        $('#btnProfessionalSave').val('Save').text('Save');
                    }
                }
            });
        },
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
 