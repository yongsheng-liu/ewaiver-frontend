
function openPreviewModal(url, title) {
    $('#previewModal').modal('show');
    // var divwidth = $('#previewModal .modal-dialog').width() - 34;
    var htm = "<iframe frameborder=0 style='width: 100%;height: 100%;' src='" + url + "' id='waiver-link'></iframe>"
    $('#previewModal .modal-header .waiver-title').text(title);
    $('#previewModal .modal-body .iframe').html(htm);
}

function closeModal() {
    $('#previewModal .modal-header .waiver-title').text('');
    $('#previewModal .modal-body .iframe').html('');
    $('#previewModal').modal('hide');
}

function useModel(type) {
    $('#previewModal #preview-body .tools .fa').removeClass('toolActive');
    $('#previewModal #preview-body .iframe').removeClass('phoneIframe');
    $('#previewModal #preview-body .iframe').removeClass('padIframe');
    if (type == 'pc') {
        $('#previewModal #preview-body .tools .fa-desktop').addClass('toolActive');
    } else if (type == 'pad') {
        $('#previewModal #preview-body .tools .fa-tablet').addClass('toolActive');
        $('#previewModal #preview-body .iframe').addClass('padIframe');
    } else if (type == 'phone') {
        $('#previewModal #preview-body .tools .fa-mobile').addClass('toolActive');
        $('#previewModal #preview-body .iframe').addClass('phoneIframe');
    }
}

$(window).scroll(function(){
    var winTop=$(window).scrollTop();
    var waiverH = $('.gallery .templates').height();
    var navH = $('#nav-box').height();
    if (winTop >= (waiverH - navH)) {
        $('.gallery').addClass('up');
    } else {
        $('.gallery').removeClass('up');
    }
});