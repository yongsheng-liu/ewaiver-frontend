var templateId;
var dataText = 'Sign Your Waiver Online';
var dataPosition = 'right: 30px;';
var dataBackgroundColor = '#a4c1d0';
var dataFontColor = '#ffffff';
var waiver_frame_width;
var waiver_frame_height;
(function () {
  templateId = document.getElementById("templateId").getAttribute("data-value");

  var text = document.getElementById("templateId").getAttribute("data-text"); 
  if (text.length > 0){
    dataText = text;
  }

  var position = document.getElementById("templateId").getAttribute("data-position");
  if (position && position == 'left') {
    dataPosition = 'left: 30px;';
  }

  var backgroundColor = document.getElementById("templateId").getAttribute("data-backgroundColor");
  if (backgroundColor) {
    dataBackgroundColor = backgroundColor;
  }

  var fontColor = document.getElementById("templateId").getAttribute("data-fontColor");
  if (fontColor) {
    dataFontColor = fontColor;
  }

  waiver_frame_width = window.innerWidth - 80;
  waiver_frame_height = window.innerHeight * 0.8;
})();
function toggle() {
  var sign = document.getElementById("sign").innerHTML;
  var waiver_frame_width = window.innerWidth - 80;
  var waiver_frame_height = window.innerHeight * 0.8;
  if (sign == '+') {
    document.getElementById("sign").innerHTML = ''
    document.getElementById("waiverElectronic_iframe_div").classList.add('waiverElectronic_iframe_div_hight_toggle');
    document.getElementById("waiverElectronic_cancelIcon").style.display = "block";
    document.getElementById("waiverElectronic_floater").style.bottom = (window.innerHeight - waiver_frame_height - 54)/2 + "px";

  } else {
    document.getElementById("sign").innerHTML = '+'
    document.getElementById("waiverElectronic_iframe_div").classList.remove('waiverElectronic_iframe_div_hight_toggle');
    document.getElementById("waiverElectronic_cancelIcon").style.display = "none";
    document.getElementById("waiverElectronic_floater").style.bottom = "-4px"
  }
}
var templateCss = '<style type="text/css">'
              +'#waiverElectronic_floater {'
                +'min-height: 25px !important;z-index: 2147483647 !important;cursor: pointer !important;position: fixed !important;'
                +'bottom: -4px;'
                +'display:none;'
                +'text-align: initial !important;'
                + dataPosition
              +'}'
              +'#waiverElectronic_iframe_div{'
                +'-webkit-overflow-scrolling: touch;overflow: auto;'
                +'height: 0px;'
                +'width:0px;'
                +'-webkit-transition:height 1s, width 1s;'
                +'border:' + dataBackgroundColor + ' solid 2px !important;'
              +'}'
              +'.waiverElectronic_iframe_div_hight_toggle{'
                +'height:' + waiver_frame_height + 'px !important;'
                +'width:' + waiver_frame_width + 'px !important;'
              +'}'
              +'#waiverElectronic_link {'
                +'display: inline-block; padding:10px 15px;border-top-left-radius: 4px !important;font-size: 20px !important'
                +'line-height:20px !important;border-top-right-radius: 4px !important;font-family: "Verdana" !important;'
                +'color:' + dataFontColor +' !important;'
                +'background:' + dataBackgroundColor + '; text-align: center'
              +'}'
              +'#waiverElectronic_link:hover {'
                +'text-decoration:none !important;'
              +'}'
              +'#waiverElectronic_iframe{'
                +'width: 100%;height: 100%;'
              +'}'
              +'#waiverElectronic_cancelIcon{'
                +'position: absolute;'
                +'width: 50px;'
                +'height: 50px;'
                +'display:inline-block;'
                +'border-radius:25px;'
                +'text-align:center;'
                +'color: #ffffff !important;' 
                +'background:' + dataBackgroundColor + ';'
                +'right:-21px;'
                +'top:21px;'
                +'display:none;'
              +'}'
              +'#waiverElectronic_cancelIcon:before, #waiverElectronic_cancelIcon:after {'
                +'position: absolute;left: 24px;content: " ";top: 9px;height: 33px;width: 2px;background-color:#ffffff !important;'
              +'}'
              +'#waiverElectronic_cancelIcon:before {'
                +'transform: rotate(45deg);'
              +'}'
              +'#waiverElectronic_cancelIcon:after {'
                +'transform: rotate(-45deg);'
              +'}'
        +'</style>'
var templateHtml = '<div id="waiverElectronic_floater">'
            +'<a id="waiverElectronic_link" onclick=toggle() style="">'
            + dataText +' <span id="sign" style="display:none;">+</span> </a>'
            +'<span onclick=toggle() id="waiverElectronic_cancelIcon" style=""></span>'
            +'<div id="waiverElectronic_iframe_div">'
                +'<iframe id="waiverElectronic_iframe" onload="loadWaiver()" src="https://www.waiverelectronic.com/render/templateByRefId/'+templateId+'" frameborder=0 ></iframe>'
            +'</div>'
        +'</div>'

var templateContainer = document.getElementById("templateId");
var templateContent = document.createElement("div");
templateContent.innerHTML = templateCss + templateHtml;
templateContainer.appendChild(templateContent);

function loadWaiver() {
  document.getElementById("waiverElectronic_floater").style.display = "block";
}