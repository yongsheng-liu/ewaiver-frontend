$(function(){


})
function addMinor(refId) {
    var url = "https://app.waiverelectronic.com/render/templateByRefId/" + refId; 
    window.location.href = url;
}

function jumpToProduction(refId) {
    var url = "https://app.waiverelectronic.com/render/templateByRefId/" + refId; 
    window.location.href = url;
}

var eleClass = '';
function openSignatureModal(className) {
    $('#mySignatureModal').modal('show');
    var divwidth = $('#mySignatureModal .modal-dialog').width() - 34;
    $('#mySignatureModal .modal-body').html('<div id="signature"></div>')
    $("#signature").jSignature({"decor-color":"transparent",'height': 220,'width':divwidth,lineWidth:2});
    eleClass = className
}

function closeModal() {
    $('#mySignatureModal .modal-body').html('');
    $('#mySignatureModal').modal('hide');
}

function save() {
    var datapair = $("#signature").jSignature("getData");
    $('.' + eleClass + ' img').css('display','inline-block');
    $('.' + eleClass + ' .i18n').css('display','none');
    $('.' + eleClass + ' img').attr('src',datapair);
    $('#mySignatureModal').modal('hide');
}

function Clear() {
    $("#signature").jSignature("reset");
}

function setToday(className) {
    var today = new Date();
    $('.' + className + ' .date-month').val(today.getMonth() + 1);
    $('.' + className + ' .date-day').val(today.getDate());
    $('.' + className + ' .date-year').val(today.getFullYear());
}

function uploadLocalImg(className) {
    var file = document.getElementById(className).files[0]
    var reader = new FileReader();

    reader.onloadend = function(e){
        var data = e.target.result;
        $('#loadingPng').toggle()
        //send you binary data via $http or $resource or do anything else with it
        $.ajax({
            'url':'https://app.waiverelectronic.com/api/waivers/uploadImage/',
            'type':'GET',
            'success': function(response) {
                if (response.result) {
                    var uploadImageData = response.success;
                    var url = uploadImageData.url
                    upload(url, uploadImageData.fields, file, file.name, className);
                } else {
                    $('#loadingPng').toggle()
                }
            }
        })
    }

    reader.readAsArrayBuffer(file);
}

function upload(url, fields, file, fileName, className) {
    var xhr = new XMLHttpRequest();
    xhr.onerror = function (e) {
        // handle failture
        $('#loadingPng').toggle()
        alert("Could not upload file.");
    };
    //console.log(url + data.key.replace('${filename}', file.name))
    xhr.upload.addEventListener('progress', function (e) {
        // handle notifications about upload progress: e.loaded / e.total
    }, false);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status >= 200 && xhr.status <= 299) {
                var imgSrc = url + fields.key.replace('${filename}', file.name);
                $('#'+ className).parent('span').parent('.upLocalImgBox').children('img').attr('src',imgSrc)
                $('#'+ className).parent('span').parent('.upLocalImgBox').children('img').css('display','block')
                $('#'+ className).parent('span').parent('.upLocalImgBox').children('span').toggle()
                $('#'+ className).parent('span').parent('.upLocalImgBox').children('button').toggle()
                $('#loadingPng').toggle()
            } else {
                $('#loadingPng').toggle()
                alert('some error when upload.')
            }
        }
    };
    xhr.open('POST', url, true);
    xhr.send(formData(fields, file, fileName));
}
function formData(fields, file, fileName) {
    var res = new FormData();
    for (var k in fields) {
        res.append(k, fields[k]);
    }
    res.append('file', file, fileName);
    return res;
}

function removeImg(className) {
    $('#'+ className).parent('span').parent('.upLocalImgBox').children('img').attr('src','')
    $('#'+ className).parent('span').parent('.upLocalImgBox').children('img').css('display','none')
    $('#'+ className).parent('span').parent('.upLocalImgBox').children('span').toggle()
    $('#'+ className).parent('span').parent('.upLocalImgBox').children('button').toggle()
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validDate(date) {

    if (date.year) {
       date.year = date.year.toString();
    }

    if (!date.day || date.day < 1 || date.day > 31 || !date.month || date.month < 1 || date.month > 12 || !date.year || date.year.length > 4) {
       return false;
    }
    if (date.ageRange == 'true') {
       return validAge(date);
    }
    return true;
}

function validAge(date) {
    var ageFrom = date.ageFrom;
    var ageTo = date.ageTo;

    var dobYear = date.year;
    var dobMonth = date.month;
    var dobDay = date.day;

    var nowDate = new Date();
    var nowYear = nowDate.getFullYear();
    var nowMonth = nowDate.getMonth() + 1;
    var nowDay = nowDate.getDate();

    var totalAge;
    if ((nowYear - dobYear) < 0) {
        return false;
    } else {
        if ((nowMonth - dobMonth) < 0) {
            totalAge = nowYear - dobYear - 1;
        } else if (nowMonth == dobMonth) {
            if ((nowDay - dobDay) < 0) {
                totalAge = nowYear - dobYear - 1;
            } else {
                totalAge = nowYear - dobYear;
            }
        } else {
            totalAge = nowYear - dobYear;
        }
    }
    if (ageFrom && ageTo) {
        if (!(ageFrom <= totalAge && totalAge <= ageTo)) {
            return false;
        }
    }
    if (ageFrom || ageTo) {
        if ((ageFrom && totalAge < ageFrom) || (ageTo && ageTo < totalAge)) {
            return false;
        }
    }
    return true;
}

function validMultiple(data, optional, selectMore, others, dropDown) {
    var res = {}
    var result = 0;   
    if (!optional && dropDown) {
        var othersText = data.attr("othersText");
        var dropDownStyleValue = data.val();
        var othersValue = others.children('.othersValue').val();
        if (!dropDownStyleValue) {
            return {'data':res, 'result':0}
        }
        if (dropDownStyleValue == othersText || dropDownStyleValue == 'dropDownStyleValueOthers') {
            if (!othersValue){
                return {'data':res, 'result':0}
            }
        }
        var selectArray = data[0].children;
        for (var i = 0; i < selectArray.length; i++) {
            var key = selectArray[i].value;
            if (selectArray[i].getAttribute('templateDate') == 'true' && key == dropDownStyleValue) {
                res[key] = true;
            } else if (selectArray[i].getAttribute('templateDate') == 'true' && key != dropDownStyleValue) {
                res[key] = false;
            }
        }
        return {'data':res, 'result':1, 'othersCheck':false, 'othersValue': othersValue, 'dropDownStyleValue': dropDownStyleValue}
    }
    if (!dropDown) {
        data.each(function(){
            if($(this).children('input')[0].checked) {
                result ++;
            }
            var key = $(this).children('label').html();
            res[key] = $(this).children('input')[0].checked;
        })
    }
    if (!optional && !selectMore && others.length > 0) {
        var othersCheck = others.children('input')[0].checked;
        var othersValue = others.children('.othersValue').val();
        if (result <=0 && (!othersCheck || !othersValue)) {
            return {'data':res, 'result':0}
        } else {
            if(!othersCheck) {
                othersValue = '';
            }
            return {'data':res, 'result':1, 'othersCheck':othersCheck, 'othersValue': othersValue};
        }      
    }
    if (!optional && selectMore && others.length > 0) {
        var othersValue = others.children('.othersValue').val();
        if (result <= 0 && !othersValue) {
            return {'data':res, 'result':0}
        } else {
            return {'data':res, 'result':1, 'othersCheck':false, 'othersValue': othersValue};
        }
    }
    if (optional) {
        if (dropDown) {
            var othersText = data.attr("othersText");
            var dropDownStyleValue = data.val();
            var othersValue = others.children('.othersValue').val();
            var selectArray = data[0].children;
            for (var i = 0; i < selectArray.length; i++) {
                var key = selectArray[i].value;
                if (selectArray[i].getAttribute('templateDate') == 'true' && key == dropDownStyleValue) {
                    res[key] = true;
                } else if (selectArray[i].getAttribute('templateDate') == 'true' && key != dropDownStyleValue) {
                    res[key] = false;
                }
            }
            return {'data':res, 'result':1, 'othersCheck':false, 'othersValue': othersValue, 'dropDownStyleValue': dropDownStyleValue}
        }
        if (!selectMore && others.length > 0) {
            var othersCheck = others.children('input')[0].checked;
            var othersValue = others.children('.othersValue').val();
            return {'data':res, 'result':1, 'othersCheck':othersCheck, 'othersValue': othersValue};
        }
        if (selectMore && others.length > 0) {
            var othersValue = others.children('.othersValue').val();
            return {'data':res, 'result':1, 'othersCheck':false, 'othersValue': othersValue};
        }
        return {'data':res, 'result':1}
    } else {
        return {'data':res, 'result':result}
    }
}

function validAddress(address1, city, state, zip) {
    return (address1 && address1.length > 0) && (city && city.length > 0) && (state && state.length > 0) && (zip && zip.length > 0);
}

function validNumberField(t){
    if(t.numberRange) {
        if (t.numberFrom && t.numberTo) {
            if (!(t.numberFrom <= t.value && t.value <= t.numberTo)) {
                return false;
            }
        }
        if (t.numberFrom || t.numberTo) {
            if ((t.numberFrom && t.value < t.numberFrom) || (t.numberTo && t.numberTo < t.value)) {
                return false;
            }
        }
    } else if (!t.value) {
        return false;
    }
    return true;
}

function submit(header, userId, templateId) {
    $('#loadingPng').toggle()
    var errorEle = '';
    var Additionals = [];
    var signatures = [];
    var name = '';
    var allNames = '';
    var allPhones = '';
    var dateOfBirth = '';
    var phone = '';
    $('.additional .fields').each(function(){
        if ($(this).attr('type') == 'name') {
            var value = $(this).children('input').val();
            var selecter = $(this).attr('id');
            if (!value && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                name = name? name:value;
                allNames = allNames? allNames + ',' + value : value;
                Additionals.push({
                    type:'name',
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'newName') {
            var valueFirst = $(this).children('div').children('div').children('.newNameFirst').val();
            var valueLast = $(this).children('div').children('div').children('.newNameLast').val();
            var selecter = $(this).attr('id');
            if ((!valueFirst || !valueLast) && $(this).attr('optional') == 'false') {    
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                var fullName = valueFirst + ' ' + valueLast;
                name = name? name:fullName;
                allNames = allNames? allNames + ',' + fullName: fullName;
                Additionals.push({
                    type:'newName',
                    value:fullName,
                    first:valueFirst,
                    second:valueLast
                })
            }
        } else if ($(this).attr('type') == 'phone') {
            var value = $(this).children('input').val();
            var selecter = $(this).attr('id');
            if ((!value || value.length < 6) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                phone = phone? '':value;
                allPhones = allPhones? allPhones + ',' + value: value;
                Additionals.push({
                    type:'phone',
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'email') {
            var value = $(this).children('input').val();
            var selecter = $(this).attr('id');
            if ((!value || !validateEmail(value)) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'email',
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'dob') {
            var year = $(this).children('div').children('.year').val();
            var month = $(this).children('div').children('.month').val();
            var day = $(this).children('div').children('.day').val();
            var ageRange = $(this).attr('ageRange');
            var ageFrom = $(this).attr('ageFrom');
            var ageTo = $(this).attr('ageTo');
            var data = {
                'year':year,
                'month':month,
                'day':day,
                'ageRange':ageRange,
                'ageFrom':ageFrom,
                'ageTo':ageTo
            }
            var selecter = $(this).attr('id');
            if ((!year || !month || !day || !validDate(data)) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                var dateVal = month + "/" + day + "/" + year;
                dateOfBirth = new Date(dateVal).getTime()/1000;
                Additionals.push({
                    type:'dob',
                    year:year,
                    month:month,
                    day:day
                })
            }
        } else if ($(this).attr('type') == 'date') {
            var year = $(this).children('div').children('.date-year').val();
            var month = $(this).children('div').children('.date-month').val();
            var day = $(this).children('div').children('.date-day').val();
            var data = {
                'year':year,
                'month':month,
                'day':day,
            }
            var selecter = $(this).attr('id');
            if ((!year || !month || !day || !validDate(data)) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'dob',
                    year:year,
                    month:month,
                    day:day
                })
            }
        } else if ($(this).attr('type') == 'gender' || $(this).attr('type') == 'country') {
            var value = $(this).children('select').val();
            var selecter = $(this).attr('id');
            if ((!value || value.length <= 0) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:$(this).attr('type'),
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'signature' || $(this).attr('type') == 'initial') {
            var value = $(this).children('div').children('div').children('img').attr('src');
            var selecter = $(this).attr('id');
            if ((!value || value.length <= 0) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:$(this).attr('type'),
                    dataUrl:{
                        dataUrl:value
                    }
                })
            }
        } else if ($(this).attr('type') == 'upLocalImg') {
            var value = $(this).children('div').children('img').attr('src');
            var selecter = $(this).attr('id');
            if ((!value || value.length <= 0) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'upLocalImg',
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'number') {
            var value = $(this).children('input').val();
            var selecter = $(this).attr('id');
            var numberRange = $(this).attr('numberRange');
            var numberFrom = $(this).attr('numberFrom');
            var numberTo = $(this).attr('numberTo');
            var numberData = {
                'value':value,
                'numberRange':numberRange,
                'numberFrom':numberFrom,
                'numberTo':numberTo
            }
            if ((!value || !validNumberField(numberData)) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'number',
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'multiple') {
            var multiple = $(this).children('div').children('.box');
            var others = $(this).children('div').children('.othersBox');
            var selecter = $(this).attr('id');
            var selectMore = $(this).attr('selectMore') == 'true';
            var optional = $(this).attr('optional') == 'true';
            var dropDown = $(this).attr('dropDownStyle') == 'true';

            var multipleChoices = validMultiple(multiple, optional, selectMore, others, dropDown);
            
            var fieldOthersText = $(this).children('div').children('.othersBox').children('.othersValue').attr('othersText');
            var fieldUseOthers = $(this).attr('useOthers') == 'true'? true: false;
            if (multipleChoices.result <= 0) {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                var oTCheck = multipleChoices.othersCheck?multipleChoices.othersCheck : false;
                var oTValue = multipleChoices.othersValue?multipleChoices.othersValue : '';
                Additionals.push({
                    type:'multiple',
                    value: multipleChoices.data,
                    useOthers: fieldUseOthers,
                    othersCheck: oTCheck,
                    othersValue: oTValue,
                    dropDownStyleValue: multipleChoices.dropDownStyleValue,
                    othersText: fieldOthersText
                })
            }
        } else if ($(this).attr('type') == 'shortAns') {
            var value = $(this).children('input').val();
            var selecter = $(this).attr('id');
            if (!value && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'shortAns',
                    ans:value
                })
            }
        } else if ($(this).attr('type') == 'address') {
            var address1 = $(this).children('.address1').val();
            var address2 = $(this).children('.address2').val();
            var city = $(this).children('div').children('.city').val();
            var state = $(this).children('div').children('.state').val();
            var zip = $(this).children('div').children('.zip').val();
            var selecter = $(this).attr('id');
            if(!validAddress(address1, city, state, zip) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'address',
                    address1:address1,
                    address2:address2,
                    city:city,
                    state:state,
                    zip:zip
                })
            }
        } else if ($(this).attr('type') == 'checkBox') {
            var selecter = $(this).attr('id');
            if(!$(this).children('label').children('input')[0].checked && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                Additionals.push({
                    type:'checkBox',
                    checked:$(this).children('label').children('input')[0].checked
                })
            }
        }
    })
    $('.lastSection .section').each(function(){
        if ($(this).attr('type') == 'shortAns') {
            var value = $(this).children('input').val();
            var selecter = $(this).attr('id');
            if (!value && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                name = name? name:value;
                allNames = allNames? allNames + ',' + value : value;
                signatures.push({
                    type:'shortAns',
                    signatureText: $(this).attr('signatureText'),
                    optional: $(this).attr('optional') == 'false'? false: true,
                    renewable: $(this).attr('renewable') == 'false'? false: true,
                    value:value
                })
            }
        } else if ($(this).attr('type') == 'signature') {
            var value = $(this).children('div').children('div').children('img').attr('src');
            var selecter = $(this).attr('id');
            if ((!value || value.length <= 0) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                signatures.push({
                    type:'signature',
                    signatureText:$(this).attr('signatureText'),
                    optional: $(this).attr('optional') == 'false'? false: true,
                    renewable: $(this).attr('renewable') == 'false'? false: true,
                    dataUrl:{
                        dataUrl:value
                    }
                })
            }
        } else if ($(this).attr('type') == 'date') {
            var year = $(this).children('div').children('.date-year').val();
            var month = $(this).children('div').children('.date-month').val();
            var day = $(this).children('div').children('.date-day').val();
            var data = {
                'year':year,
                'month':month,
                'day':day,
            }
            var selecter = $(this).attr('id');
            if ((!year || !month || !day || !validDate(data)) && $(this).attr('optional') == 'false') {
                $('#' + selecter).children('.error').css('display','block');
                if(!errorEle) errorEle = selecter;
            } else {
                $('#' + selecter).children('.error').css('display','none');
                signatures.push({
                    type:'date',
                    renewable: $(this).attr('renewable') == 'false'? false: true,
                    optional: $(this).attr('optional') == 'false'? false: true,
                    renewable: false,
                    signatureText: $(this).attr('signatureText'),
                    year:year,
                    month:month,
                    day:day
                })
            }
        }
    })
    if(errorEle) {
        $('#loadingPng').toggle()
        var scrollHeight = $('#' + errorEle).offset().top;
        $('html,body').animate({'scrollTop':scrollHeight}, 250)
        return;
    }
    var postData = {
        Additionals:Additionals,
        LastSections:{signatures:signatures},
        Header:{header:header},
        userId:parseInt(userId),
        name:name,
        allNames:allNames,
        allPhones:allPhones,
        phone:phone,
        dateOfBirth:dateOfBirth,
        showMinorTemplate: false,
        signedDate: new Date(),
        templateId: templateId,
        simpleData: true,
        platform: 'WEB',
    }
    $.ajax({
        url:'https://app.waiverelectronic.com/api/waivers/waivers/',
        type:'POST',
        headers:{
            'Content-Type': 'application/json;charset=UTF-8'
        },
        data:JSON.stringify(postData),
        success:function(res){
            if(res.result) {
                $('#loadingPng').toggle()
                window.location.href = "https://www.waiverelectronic.com"
            } else {
                $('#loadingPng').toggle()
            }
        }

    })
}