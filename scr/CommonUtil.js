//display message in modal popup.
//message - display given message in popup.
//title - this is the title for popup (default -> Message)
//messageType - three type of message types 0- error, 1 - success, 2 - warning(header color was changed (default - success))
var alertMessage = function (message, title,messageType) {
    if (title != undefined)
        $('#spnalertTitle').text(title+" Message");
    else
        $('#spnalertTitle').text("Message");
    $('#_alertMessage').text(message);
    $('#alertMessage').modal('show');
    if (messageType == undefined) messageType = 0;
    messageType = parseInt(messageType);
    switch (messageType) {
        case 0:
            alertType.error();
            break;
        case 1:
            alertType.success();
            break;
        case 2:
            alertType.warning();
            break;
        default:
            alertType.success();
            break;
    }
};

var alertMessageforms = function (message, title, messageType) {
    if (title != undefined)
        $('#spnalertTitleforms').text(title + " Message");
    else
        $('#spnalertTitleforms').text("Message");
    $('#_alertMessageforms').text(message);
    $('#alertMessageforms').modal('show');
    if (messageType == undefined) messageType = 0;
    messageType = parseInt(messageType);
    switch (messageType) {
        case 0:
            alertType.error();
            break;
        case 1:
            alertType.success();
            break;
        case 2:
            alertType.warning();
            break;
        default:
            alertType.success();
            break;
    }
};
var alertType = (function () {
    return {
        success: function () {
            $('#alertHeader').css("background-color", "#1ab394");
        },
        error: function () {
            $('#alertHeader').css("background-color", "#ec5f5f");
        },
        warning: function () {
            $('#alertHeader').css("background-color", "#ecbf5f");
        }
    }
})();
//Ajax loader
var loader =( function () {
    return {
        //show loader
        show :function(){
            $(".spinner").show();
        },
        //hide loader
        hide:function(){
        $(".spinner").hide();
    }
}
})();
 
//for Mask Time 24 hr format
var maskBehavior = function (val) {
    val = val.split(":");
    return (parseInt(val[0]) > 19) ? "HZ:M0" : "H0:M0";
}

var spOptions = {
    onKeyPress: function (val, e, field, options) {
        field.mask(maskBehavior.apply({}, arguments), options);
    },
    translation: {
        'H': { pattern: /[0-2]/, optional: false },
        'Z': { pattern: /[0-3]/, optional: false },
        'M': { pattern: /[0-5]/, optional: false }
    }
};
//for Mask Time 24 hr format

//Allow only Number, cut, copy, paste not allowed 
$.fn.numeric = function () {
    var $collection = this;
    $collection.bind("keypress", function (evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    });
    $collection.bind("cut copy paste", function (e) {
        e.preventDefault();
    });
};

//Confirm Delete popup
var confirmDelete = function (confirmMessage) {
    $('#ConfirmDeletePopup').modal('show');
    if (confirmMessage != undefined)
        $('#confirmMessage').text(confirmMessage);
};

// validate give email id is valid or not, This function returns boolean value.
var isEmail = function (email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$('input').keypress(function () {
    $('.clear').text('');
});
$('.noctrlxcv').bind("cut copy paste", function (e) {
    e.preventDefault();
});
//ex: arrayObjectIndexOf(usersList,3,'Id');
function arrayObjectIndexOf(myArray, searchTerm, property) {
    for (var i = 0, len = myArray.length; i < len; i++) {
        if (myArray[i][property] === searchTerm) return i;
    }
    return -1;
}

var messageTypes = (function () {
    return {
        error: "0",
        success: "1",
        warning:"2"
    }
})();

$.fn.rnumeric = function (max) {
    var $collection = this;
    $collection.bind("keypress", function (evt) {
       
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    });
    $collection.bind("keyup", function (e) {
        var $this = this;
        if (max==undefined) {
            max = 100;
        }
        if (parseInt($($this).val()) > parseInt(max)) {
            $($this).val(max);
        }
        else if (parseInt($($this).val())<0) {
            $($this).val(0);
        }
        else {
            $($this).val($($this).val());
        }
    })
    $collection.bind("cut copy paste", function (e) {
        e.preventDefault();
    });
};
// ex:file.Extension(pf); returns icons class
var file = (function () {
    return {
        //returns icons for Extension
        Extension: function (exten) {
            switch (exten) {
                case 'txt':
                    return 'fa-file-text-o';
                case 'png':
                    return 'fa-file-image-o';
                case 'jpg':
                    return 'fa-file-image-o';
                case 'jpeg':
                    return 'fa-file-image-o';
                case 'doc':
                    return  'fa-file-word-o';
                case 'docx':
                    return 'fa-file-word-o';
                case 'pdf':
                    return 'fa-file-pdf-o';
                default:
                    return '';
            }
        }
    }
})();

