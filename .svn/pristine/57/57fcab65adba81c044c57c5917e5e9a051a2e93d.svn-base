var viewham = (function () {
    return {
        //get definition of short name ex: viewham.getDefinition('EMP'), it returns 'As Employee/Salary'
        getDefinition: function (shortName) {
            return viewhamDefinitions['' + shortName.toUpperCase() + ''];
        },
        setLabelText: function () {
            setLabelText();
        },
        //Google Api Locations
        loadLocations : function (searchControl,selectControl) {
            google.maps.event.addDomListener(window, 'load', function () {
                var invSearchLocation = new google.maps.places.Autocomplete(document.getElementById(searchControl));
                google.maps.event.addListener(invSearchLocation, 'place_changed', function () {
                    $('#' + searchControl).val('');
                    var investorLocation = invSearchLocation.getPlace();
                    var selectedLocation = investorLocation.name;
                    $("#" + selectControl).selectTwo(selectedLocation);
                    $('#' + searchControl).focus();
                });
            });
        },
    }
})();
var viewhamDefinitions = {
    '': '-- Please select --',
    'BTH': 'Both',
    'EMP': 'As Employee/Salary',
    'PRO': 'As Profit Share/Partner',
    'INV': 'As Investor',
    'SLB': 'Salary based',
    'PSB': 'Profit Share based',
    'FUN': 'Funding/Investment',
    'CON': 'Consultation',
    'MEN': 'Mentorship',
    'SLP': 'As Sleeping Partner',
    'COF': 'As Co-Founder',
    'STP': 'As Strategic Partner',
    'FIN': 'As Financier',
    'OTH': 'Others',
    'MTR': 'As a Mentor',
    'EOB': 'Establishing Own business',
    'AOP': 'Accepting Outsourced Projects',
    'AFR': 'Accepting Franchise'
};

$.fn.setText = function () {
    var $collection = this;
    var shortName = $collection.attr('name');
    shortName = shortName == undefined ? '' : shortName;
    $collection.text(viewham.getDefinition(shortName));
};
function setLabelText() {
    $("*[name='']").setText();
    $("*[name=BTH]").setText();
    $("*[name=EMP]").setText();
    $('*[name=PRO]').setText();
    $('*[name=INV]').setText();
    $('*[name=SLB]').setText();
    $('*[name=PSB]').setText();
    $('*[name=FUN]').setText();
    $('*[name=CON]').setText();
    $('*[name=MEN]').setText();
    $('*[name=SLP]').setText();
    $('*[name=COF]').setText();
    $('*[name=STP]').setText();
    $('*[name=FIN]').setText();
    $('*[name=OTH]').setText();
    $('*[name=MTR]').setText();
    $('*[name=EOB]').setText();
    $('*[name=AOP]').setText();
    $('*[name=AFR]').setText();
}

//get Query string Values
function getQueryStringValue(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
$.fn.rdoInfo = function (lblTxt) {
    var $control = this;
    var lbltxt = '';
    if (lblTxt != undefined && lblTxt != "")
    {
        var $Id = $control.attr('id');
        lbltxt = '<label for="'+$Id+'">'+lblTxt+'</label>';
    }
    
    //genarate radio button
    $($control).wrapAll('<ul  class=\"porfolio\"><li></li></ul>');
    $($control).parent().append(lbltxt+'<div class="check"><div class="inside"></div></div>');
};
 
$.fn.selectTwo = function (newOptionVal) {
    var $this = this;
    if ($this.find("option[value='" + newOptionVal + "']").length) {
        //$this.val(newOptionVal).trigger("change"); 
        $this.find("option[value='" + newOptionVal + "']").remove();
    }
    //else {
        // Create the DOM option that is pre-selected by default
        var newOption = new Option(newOptionVal, newOptionVal, true, true);
        // Append it to the select
        $this.append(newOption).trigger('change');
   // }
};

var enumIdeaType = (function () {
    return {
        AllIdeas:'A',
        PostedIdeas: 'P',
        SavedIdeas: 'S',
        ContributedIdeas: 'C',
        InitiatedIdeas: 'I',
        RelatedIdeas:'R'
    }
})();

var enumIdeaTypeFull = (function () {
    return {
        A: 'Ideas',
        P: 'Posted Ideas',
        S: 'Saved Ideas',
        C: 'Contributed Ideas',
        I: 'Initiated Ideas',
        R:'Related Ideas'
    }
})();

var panel = (function () {
    return {
        Create: function (panelTitle,panelBody,panelFooter) {
            var panelControl = ''; 
            panelControl +='<div class="panel panel-info">';
            //Header
            panelControl += '<div class="panel-heading text-center">';
            panelControl += '<span><b>' + panelTitle + '</b></span>';
            panelControl +='</div>';
            //Body
            panelControl += '<div class="panel-body">';
            panelControl += panelBody;
            panelControl += '</div>';
            ////Footer
            //panelControl += '<div class="panel-footer">';
            //panelControl += '<div class="row form-group">';
            //panelControl += panelFooter;
            //panelControl +='</div>';
            //panelControl += '</div>';

            panelControl += '</div>';
            return panelControl;
        }
    }
})();

//
$.fn.autofillSelect = function (options) {
    var $selectControl = this;
    $selectControl.select2({
        placeholder: options.placeholder,
        minimumInputLength:  options.minimumSearchTextLength,
        allowClear: true,
        ajax: {
            //How long the user has to pause their typing before sending the next request
            quietMillis: 150,
            //The url of the json service
            url: options.url,
            dataType: 'json',
            //Our search term and what page we are on
            data: function (params) {
                return {
                    SearchIn: options.searchIn,
                    SearchWith: params.term,
                    PageNum: params.page || 1,
                    PageSize: options.pageSize
                };
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;
                return {
                    results: data.Results,
                    pagination: {
                        more: (params.page * options.pageSize) < data.Total
                    }
                };
            },
            cache: true
        }
    });
};
