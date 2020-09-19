var subSkillsList = '';
var tdslist = '';
$(function () {
    var _url = window.location.pathname;
    var REFGRPLIST = 'SKIL,SUBSKIL';
    $('#txtMinShareH,#txtMaxShareH').rnumeric();
    $('#txtMinPriceH,#txtMaxPriceH,#txtHobbyamonut').numeric();
    $("#txtFromTimeSlotH,#txtToTimeSlotH").timepicker();
    var daysarray = [];
    var $sltHobbytype = $('#ddlHobbytype');
    //var $sltSubtype = $('#ddlSubskill');
    var $sltLocation = $('#ddlLocation'); 
    //$sltHobbytype.select2({ placeholder: "Select hobby Skills" });

    var options = {
        placeholder: "Type your hobby Skills",
        pageSize: 50,
        searchIn: 'SKIL',
        url: rootUrl + "Opportunity/opGetDynamicMasterData",
        minimumSearchTextLength: 2
    };
    $sltHobbytype.autofillSelect(options);

    //$sltSubtype.select2({placeholder: "Select sub Skills","val": ""});
    $sltLocation.select2({placeholder: "Select Locations"});
     
    $("#sltDays").select2({placeholder: "Select Day",allowClear: false});
    $('#sltPrice').val("IN").trigger("change"); 
    $('#divFileFormateH').unbind('click').click(function () {
        $('#txtGroupH').hide();
        $('#fileGroupH').show();
        $('#btnHobbyFileupload,#btnHobbyFileupload1,#txtHobbytext').val(''); 
    });
    $('#divTextFormateH').unbind('click').click(function () {
        $('#txtGroupH').show();
        $('#fileGroupH').hide();
        $('#btnHobbyFileupload,#btnHobbyFileupload1,#txtHobbytext').val('');
    });
    $('#rdbNagotiobleH').unbind('click').click(function () {
        $('.NagotioblePriceH').hide();
    });
    $('#rdbNonNagotiobleH').unbind('click').click(function () {
        $('.NagotioblePriceH').show();
    });
    $('#btnAddSlotsH').unbind('click').click(function () {
        if (daysarray.length > 0) {
            var fromtime = $("#txtFromTimeSlotH").val();
            var totime = $("#txtToTimeSlotH").val();
            var Ftime = fromtime.split('')[5];
            var Ttime = totime.split('')[5];
            var tdslist = '';
            if (fromtime == "") {
                alertMessage('From time is required.', 'Error', 0);
                return false;
            }
            else if (totime == "") {
                alertMessage('To time is required.', 'Error', 0); 
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
            else if (fromtime > totime ) {
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
            $("#txtFromTimeSlotH,#txtToTimeSlotH").val('');
            $('#tblTimeSlotsH').show().append(tdslist);
            $('.slotdelete').unbind('click').click(function () {
                var _day = $(this).attr('id').split('_')[1];
                $(this).closest('tr').remove();
                $('#Hbtnweekday' + _day).removeClass('btn-danger').addClass('btn-success');
            });
        }
        else {
            alertMessage('Day is required.', 'Error', 0);
        }
    });
    $('.daysH').unbind('click').unbind('click').click(function () {
        if ($(this).hasClass('btn-danger')) {
            alertMessage("Slot alreday exists on this day.");
            return false;
        }
        else {
            daysarray.push($(this).val());
            $(this).removeClass('btn-success').addClass('btn-danger');
        }
    });
   // H_MasterSkills.Bind(REFGRPLIST);
    if ($('#hdnHobbyId').val() > 0) {
        getHobbySkill.EditHobbyskill();
    }
    $('#btnHobbySave').click(function () {
        var daysarray = []; 
        var sltHobbytype = $('#ddlHobbytype').val();
        var sltSubtype = '';//$('#ddlSubskill').val();
        var sltLocation = $('#ddlLocation').val();
        var sltSkillExpertice = $('#ddlSkillExpertice').val();
        var Fileupload = $('#btnHobbyFileupload').get(0);
        var sltPrice = $('#sltPrice').val();
        var Price =parseFloat($('#txtHobbyamonut').val());
        var sltWorktype = $('#sltWorktypeH').val();
        var txtMinPrice = parseFloat($('#txtMinPriceH').val());
        var txtMaxPrice = parseFloat($('#txtMaxPriceH').val());
        var txtMinShare = parseFloat($('#txtMinShareH').val());
        var txtMaxShare = parseFloat($('#txtMaxShareH').val());
        var files = Fileupload.files;
        var negType = $("input[name='NagotioblePriceHB']:checked").val();
        var fileData = new FormData();
        var Projectsdescription = ''; 
            Projectsdescription = $('#txtHobbyCrrObjective').val().trim();
            if (sltHobbytype == 0 || sltHobbytype==null) {
            alertMessage("Please select hobby type.", 'Error', 0);
            return false;
        }
        //else if (sltSubtype.length == 0) {
        //    alertMessage("Please select sub skill.", 'Error', 0);
        //    return false;
        //}
        else if (sltLocation.length == 0) {
            alertMessage("Please select location.", 'Error', 0);
            return false;
        }
        else if (Projectsdescription == '') {
            alertMessage("Please enter career objective.", 'Error', 0);
            return false;
        }
        else if (sltSkillExpertice == 0) {
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
        else if (negType == 'X') {
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
        var buttonType = $(this).val();
        var jsonArr = []; 
        var HobDetails = {};
        var sltSkillExpertice = $('#ddlSkillExpertice').val();
        var table = document.getElementById('tblTimeSlotsH');
        for (var i = 1, row; row = table.rows[i]; i++) {
            var col = row.cells;
            var jsonObj = {
                DayName: col[0].innerHTML,
                FromTime: col[1].innerHTML,
                ToTime: col[2].innerHTML,
            }
            jsonArr.push(jsonObj);
        }
        HobDetails.SkillID = sltHobbytype;
        HobDetails.ID = $('#hdnHobbyId').val();
        HobDetails.SubSkills = sltSubtype.toString();
        HobDetails.PreferredLocation = sltLocation.toString();
        HobDetails.OverallExp = sltSkillExpertice;
       // HobDetails.Description = $('#txtHobbyCrrObjective').val();
        HobDetails.TimingsList = jsonArr;
        HobDetails.CurrencyId = $('#sltPrice').val();
        HobDetails.Amount = $('#txtHobbyamonut').val();
        HobDetails.STWPerDayHours = $('#sltWorktypeH').val();
        HobDetails.NegMinAmounPrice = $('#txtMinPriceH').val();
        HobDetails.NegMaxAmounPrice = $('#txtMaxPriceH').val();
        HobDetails.NegMinSharePrice = $('#txtMinShareH').val();
        HobDetails.NegMaxSharePrice = $('#txtMaxShareH').val();
        HobDetails.careerobjective = $('#txtHobbyCrrObjective').val();
        HobDetails.LongTimeWorkType = negType; 
        if ((_url == '/') && !(isAllow)) {
            $('#myLoginModal').modal("show");
            return false;
        }
        $('#myLoginModal').modal("hide");
        $.ajax({
            url: rootUrl + 'Opportunity/HobbyDetails',
            type: "POST",
            async: false,
            traditional: true,
            data: JSON.stringify({ 'HobDetails': HobDetails }),
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
                if (result.ResponseStatus == "1") {
                    if (files.length > 0) {
                        if (window.FormData !== undefined) {
                            var fileData = new FormData();
                            for (var i = 0; i < files.length; i++) {
                                fileData.append(files[i].name, files[i]);
                            }
                            fileData.append("ViewhamProId", result.lobcls_VH_HOBBY_SKILLS[0].ID);
                            fileData.append("FROM_TABLE", "VH_HOBBIES");
                            $.ajax({
                                url: rootUrl + 'Opportunity/Updateportafolio',
                                data: fileData,
                                type: 'POST',
                                processData: false,
                                contentType: false,
                                success: function (Hobbyresult) {
                                    if (Hobbyresult.ResponseStatus == "1") {
                                        alertMessage(result.ResponseMessage, 'success', 1);
                                        $('#myHobbysModal').modal("hide");
                                        $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                                            window.location.href = rootUrl + "Home/Dashboard";
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
                            $('#myHobbysModal').modal("hide");
                        }
                    }
                    else {
                        alertMessageforms(result.ResponseMessage, 'success', 1);
                        $('#myHobbysModal').modal("hide");
                        $('#btnAlertMessageClose,#btnAlertMessageTopClose').unbind('click').click(function () {
                            window.location.href = rootUrl + "Home/Dashboard";
                        });
                        $('#btnRedirect').unbind('click').click(function () {
                            window.location.href = rootUrl + "Opportunity/ExpandHobby";
                        });
                    }
                }
                else {
                    alertMessage(result.ResponseMessage, 'error', 0);
                }
            },
            error: function (err) {
                alertMessage(err, 'Error', 0);
            }
        });
    });
    viewham.loadLocations('txtHSearchLocations', 'ddlLocation');
    $('.noctrlxcv').bind("cut copy paste", function (e) {
        e.preventDefault();
    });
});
var getHobbySkill = (function () {
    return {
        EditHobbyskill: function () {
            $.ajax({
                type: "POST",
                url: rootUrl + "Opportunity/opGetHobbies",
                async: false,
                traditional: false,
                data: {},
                dataType: "json",
                beforeSend: function () {
                    loader.show();
                },
                complete: function () {
                    loader.hide();
                },
                success: function (response) {
                    if (response.lobcls_VH_HOBBY_SKILLS != null) {
                        if (response.lobcls_VH_HOBBY_SKILLS.length != 0) {
                            $('#btnHobbySave').val('Update').text('Update');
                            $('#hdnHobbyId').val(response.lobcls_VH_HOBBY_SKILLS[0].ID);
                            var Hobbyskills = response.lobcls_VH_HOBBY_SKILLS[0];
                            $("#ddlHobbytype").append("<option value=" + Hobbyskills.SkillID + ">" + $('.spnHobSkillName').text() + "</option>");
                            $("#ddlHobbytype").val(Hobbyskills.SkillID).trigger("change");
                            //$('#ddlSubskill').val(Hobbyskills.SubSkills.split(',')).trigger("change");
                            $("#ddlLocation").empty();
                            var investorLocations = Hobbyskills.PreferredLocation.split(",");
                            if (investorLocations.length > 0) {
                                for (i = 0; i < investorLocations.length; i++) {
                                    $("#ddlLocation").selectTwo(investorLocations[i]);
                                }
                            }
                            $('#ddlSkillExpertice').val(Hobbyskills.OverallExp).trigger("change");
                            $('#sltPrice').val(Hobbyskills.CurrencyId.trim()).trigger("change");
                            $('#txtHobbyamonut').val(Hobbyskills.Amount);
                            $('#sltWorktypeH').val(Hobbyskills.STWPerDayHours);
                            $('#txtMinPriceH').val(Hobbyskills.NegMinAmounPrice);
                            $('#txtMaxPriceH').val(Hobbyskills.NegMaxAmounPrice);
                            $('#txtMinShareH').val(Hobbyskills.NegMinSharePrice);
                            $('#txtMaxShareH').val(Hobbyskills.NegMaxSharePrice);
                            $('#txtHobbyCrrObjective').val(Hobbyskills.Careerobjective);
                            if (response.lobcls_VH_HOBBY_SKILLS[0].LongTimeWorkType == 'N')
                                $("#rdbNagotiobleH").attr('checked', 'checked');
                            else if (response.lobcls_VH_HOBBY_SKILLS[0].LongTimeWorkType == 'X') {
                                $("#rdbNonNagotiobleH").attr('checked', 'checked');
                                $('.NagotioblePriceH').show();
                            }
                            var daysarray = [];
                            if (response.WORK_TIMINGSList.length != 0) {
                                debugger;
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
                                    $('#Hbtnweekday' + _day).removeClass('btn-success').addClass('btn-danger');
                                }
                                $('#tblTimeSlotsH').show().append(tdslist);
                                $('.slotdelete').click(function () {
                                    var _day = $(this).attr('id').split('_')[1];
                                    $(this).closest('tr').remove();
                                    $('#Hbtnweekday' + _day).removeClass('btn-danger').addClass('btn-success');
                                });
                               // $('#tblTimeSlotsH').empty();
                            }
                        }
                        else {
                            $('#btnHobbySave').val('Save').text('Save');
                        }
                    }
                }
            });
        },
    }
})();
var H_MasterSkills = (function () {
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
                    for (var i = 0; i < SkillsList.length; i++) {
                        $('#ddlHobbytype').empty();
                        var optionslist = $('<option>', { value: "0", text: "*** Select Skill ***" });
                        $('#ddlHobbytype').append(optionslist);
                        $.each(SkillsList, function (i, item) {
                            optionslist = $('<option>', { value: item.REFID, text: item.SDESC });
                            $('#ddlHobbytype').append(optionslist);
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
