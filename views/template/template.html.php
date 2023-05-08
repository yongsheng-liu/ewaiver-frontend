<?php
use app\extensions\helper\WaiverHelper;
$waiver = $data;
$frontTitle = $waiver['title'];
$frontH1 = $waiver['header'];
$frontDes = $waiver['des'];
$userId = $waiver['userId'];
$seoTemplateRefId = $waiver['refId'];
$template = $waiver['template'];
$additionals = $waiver['template']['additionals'];
$lastSections = $waiver['template']['lastSections']['signatures'];
// echo '<pre>' . var_export($additionals, true) . '</pre>';
$Header = $waiver['template']['Header'];
$headerStyle = $this->WaiverHelper->getLogoStyles($Header);
$logoImage = $this->WaiverHelper->convertImageToDataUrl($Header['logoImage']);
// $multipleStyle = $this->WaiverHelper->layoutFormatStyle($Header);
?>


<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
    <?php echo $this->html->charset();?>
    <title><?php echo $frontTitle;?> - WaiverElectronic</title>
    <?php echo $this->html->style(array('renderWaiver','bootstrap.min')); ?>
    <?php echo $this->html->script(array('jquery-1.9.1.min.js','seoTemplate.js','bootstrap.min.js','countrypicker.min.js','bootstrap-select.min.js','jSignature.min.js')); ?>
    <?php echo $this->styles(); ?>
    <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
    <META content="<?php echo $frontDes; ?>" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <META content="index,follow" name="robots">
    <META content="index,follow" name="GOOGLEBOT">
    <META content="The World's Leading Digital Waiver Application"  name="Author">
    <link href="https://plus.google.com/104217211088502604025" ref="publisher">
    <link rel="shortcut icon" type="image/x-icon" href="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png" />
    <META content="online waiver,waiver app,waiver,electronic waiver, liability form, electronic waiver app, waiver electronic,digital waiver kiosk,digital waiver, waiver digital" name="keywords">

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-78757167-1', 'auto');
	ga('send', 'pageview');

</script>

</head>


<body class="seoTemplate">
    <div id="loadingPng"><img src="/img/loading.gif"></div>
    <h1 style="color: #fff;"><?=$frontH1?></h1>
    <?php if(!($template['settings']['useCustomColor'] == 'true') && !($template['settings']['useCustomColor'] == 'myBg')):?>
        <div id="bg">
            <?php if($template['settings'] && $template['settings']['background'] && strlen($template['settings']['background'])> 0):?>
                <img src="https://app.waiverelectronic.com/<?php echo $template['settings']['background'];?>">
            <?php elseif($template['settings'] || !$template['settings']['background'] || strlen($template['settings']['background']) <= 0): ?>
                <img src="https://app.waiverelectronic.com/images/retina_wood_@2X.png">
            <?php endif;?>
        </div>
    <?php elseif($template['settings']['useCustomColor'] == 'true'): ?>
        <div id="bg" style="background-color:<?php echo $template['settings']['backgroundColor']; ?>"></div>
    <?php elseif($template['settings']['useCustomColor'] == 'myBg'): ?>
        <div id="bg">
            <img src="<?php echo $template['settings']['backgroundImage'];?>">
        </div>
    <?php endif;?>

    <?php if($template['settings']['minor'] && ($template['settings']['minor']['enable'] == 'true' || $template['settings']['minor']['enable'] == 'either')): ?>
        <div class="minorSelection template">
            <h3 class="center" style="margin-bottom: 20px">Please select who will be participating...</h3>

            <?php if($template['settings']['minor'] && $template['settings']['minor']['enable'] == 'true'): ?>
                <div class="selection-buttons center">
                    <button class="btn btn-primary" onClick="jumpToProduction('<?=$seoTemplateRefId?>')">Adults Only</button>
                    <button class="btn btn-primary" onClick="jumpToProduction('<?=$seoTemplateRefId?>')"style="margin-left: 32px">Adults with Minors (Children) Only</button>
                </div>
                <div class="minor-buttons row user-select" style="display:none;">
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">1 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">2 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">3 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">4 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">5 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">6 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">7 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">8 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">9 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor('<?=$seoTemplateRefId?>')">10 Minors</button>
                </div>
            <?php endif;?>
            <?php if($template['settings']['minor'] && $template['settings']['minor']['enable'] == 'either'):?>
                <div class="minor-buttons row">
                    <button  class="btn btn-info col-md-2" onClick="addMinor(1)">1 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(2)">2 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(3)">3 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(4)">4 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(5)">5 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(6)">6 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(7)">7 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(8)">8 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(9)">9 Minors</button>
                    <button  class="btn btn-info col-md-2" onClick="addMinor(10)">10 Minors</button>
                </div>
            <?php endif;?>
            <div class="selection-buttons goContinue" style="margin-top: 30px; display:none;">
                <button class="btn btn-primary" onClick="goToTemplate()">Continue</button>
            </div>
        </div>
    <?php endif;?>


    <?php if(!($template['settings']['minor'] && ($template['settings']['minor']['enable'] == 'true' || $template['settings']['minor']['enable'] == 'either'))): ?>     
        <div class="template">
            <!-- header -->
            <div class="headerInfo" style="overflow: hidden;">
                <div class="headerBox" >
                    <?php if(!($Header['logoPosition'] == 'right') && $Header['logoImage']):?>
                        <span class="headerLogo" style="<?=$headerStyle['logoStyle']?>">
                            <img style="width:100%" src="<?=$logoImage?>" />
                        </span>
                    <?php endif;?>
                    <!-- <h4 ng-hide="true" class="header" style="text-align: center">{{template.Header.header}}</h4> -->
                    <p style="<?=$headerStyle['headerStyle']?>.'overflow:hidden;'"><?php echo html_entity_decode($Header['text']); ?></p>

                    <?php if($Header['logoPosition'] == 'right' && $Header['logoImage']):?>
                        <span class="headerLogo" style="<?=$headerStyle['logoStyle']?>">
                            <img style="width:100%" src="<?=$logoImage?>" />
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- additionals -->
            <?php if($additionals):?>
                <div class="additional">
                    <?php foreach($additionals as $i=>$t):?>
                        <?php if($t['type'] == 'name'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <input type="text" name="fullName" class="form-control form-control-render"  placeholder="Name" autocomplete="off">
                                <span class="error">Please enter your name.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'newName'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <div class="row newName">
                                    <div class="row newName newName-50">
                                        <input type="text" name="fullName" class="col-sm-6 form-control newNameFormControl newNameFirst form-control-render"  placeholder="<?=$t['firstText']?>" autocomplete="off">
                                    </div>
                                    <div class="row newName newName-50">
                                        <input type="text" name="fullName" class="col-sm-6 form-control newNameFormControl newNameLast form-control-render"  placeholder="<?=$t['secondText']?>" autocomplete="off">
                                    </div>
                                </div>
                                <span class="error">Please enter your full name.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'phone'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <input type="number" name="fullName" class="form-control form-control-render"  placeholder="Phone" autocomplete="off">
                                <span class="error">Please enter your phone number.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'email'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <input type="text" name="email" class="form-control form-control-render"  placeholder="Email" autocomplete="off">
                                <span class="error">Please enter your email.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'dob'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" ageRange="<?=$t['ageRange']==true?'true':'false' ?>" ageFrom="<?=$t['ageFrom']?>" ageTo="<?=$t['ageTo']?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?>
                                    <?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?>
                                    <?php if($t['fromat']):?><span> (<?=$t['fromat']?>)</span><?php endif;?>
                                    <?php if($t['ageRange'] == true):?>
                                        <span>(Valid Age Range: <?=$t['ageFrom']?> - <?=$t['ageTo']?>)</span>
                                    <?php endif;?>
                                </label>
                                <div>
                                    <?php if($t['format'] == "YYYY/MM/DD"):?>
                                        <input type="number" min="0" max="5000" class="form-control dateFormControl form-control-render year" placeholder="YYYY"/>
                                        <input type="number" min="1" max="12" class="form-control dateFormControl form-control-render month" placeholder="MM"/>
                                        <input type="number" min="1" max="31" class="form-control dateFormControl form-control-render day" placeholder="DD"/>
                                    <?php elseif($t['format'] == "DD/MM/YYYY"):?>
                                        <input type="number" min="1" max="31" class="form-control dateFormControl form-control-render day" placeholder="DD"/>
                                        <input type="number" min="1" max="12" class="form-control dateFormControl form-control-render month" placeholder="MM"/>
                                        <input type="number" min="0" max="5000" class="form-control dateFormControl form-control-render year" placeholder="YYYY"/>
                                    <?php else:?>
                                        <input type="number" min="1" max="12" class="form-control dateFormControl form-control-render month" placeholder="MM"/>
                                        <input type="number" min="1" max="31" class="form-control dateFormControl form-control-render day" placeholder="DD"/>
                                        <input type="number" min="0" max="5000" class="form-control dateFormControl form-control-render year" placeholder="YYYY"/>
                                    <?php endif;?>
                                </div>
                                <span class="error">Please enter valid date.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'date'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?>
                                    <?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?>
                                    <?php if($t['fromat']):?><span> (<?=$t['fromat']?>)</span><?php endif;?>
                                </label>
                                <div class="<?=$t['type'].$i ?>">
                                    <?php if($t['format'] == "YYYY/MM/DD"):?>
                                        <input type="number" min="0" max="5000" class="date-year form-control dateFormControl form-control-render" placeholder="YYYY"/>
                                        <input type="number" min="1" max="12" class="date-month form-control dateFormControl form-control-render" placeholder="MM"/>
                                        <input type="number" min="1" max="31" class="date-day form-control dateFormControl form-control-render" placeholder="DD"/>
                                        <button type="button" class="btn btn-default setDayBtn" onClick="setToday('<?=$t['type'].$i ?>')">Set Today</button>
                                    <?php elseif($t['format'] == "DD/MM/YYYY"):?>
                                        <input type="number" min="1" max="31" class="date-day form-control dateFormControl form-control-render" placeholder="DD"/>
                                        <input type="number" min="1" max="12" class="date-month form-control dateFormControl form-control-render" placeholder="MM"/>
                                        <input type="number" min="0" max="5000" class="date-year form-control dateFormControl form-control-render" placeholder="YYYY"/>
                                        <button type="button" class="btn btn-default setDayBtn" onClick="setToday('<?=$t['type'].$i ?>')">Set Today</button>
                                    <?php else:?>
                                        <input type="number" min="1" max="12" class="date-month form-control dateFormControl form-control-render" placeholder="MM"/>
                                        <input type="number" min="1" max="31" class="date-day form-control dateFormControl form-control-render" placeholder="DD"/>
                                        <input type="number" min="0" max="5000" class="date-year form-control dateFormControl form-control-render" placeholder="YYYY"/>
                                        <button type="button" class="btn btn-default setDayBtn" onClick="setToday('<?=$t['type'].$i ?>')">Set Today</button>
                                    <?php endif;?>
                                </div>
                                <span class="error">Please enter valid date.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'gender'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <select class="form-control">
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Prefer not to disclose">Prefer not to disclose</option>
                                </select>
                                <span class="error">Please select one here.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'country'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <select class="countrypicker form-control" data-default="United States" data-flag="false"></select>
                                <span class="error">Please select one here.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'video'):?>
                            <div style="margin-top: 15px;">
                                <iframe width="560" height="315" src="<?=$t['value']?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'signature'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields <?=$t['type'].$i ?>" optional="<?=$t['optional']==true?'true':'false' ?>" type="<?=$t['type']?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <div class="lastSectionInput signatureArea" style="width: 100%" onClick="openSignatureModal('<?=$t['type'].$i ?>')">
                                    <div class="signaturePad">
                                        <span class="i18n" title="signature">Click to sign</span>
                                        <img class="tp" onClick="openSignatureModal('<?=$t['type'].$i ?>')" style="display:none;"/>
                                    </div>
                                </div>
                                <span class="error">Please sign here.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'initial'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields <?=$t['type'].$i ?>" optional="<?=$t['optional']==true?'true':'false' ?>" type="<?=$t['type']?>" style="margin-top: 15px;">
                                <div class="initialPad-new" onClick="openSignatureModal('<?=$t['type'].$i ?>')">
                                    <span class="i18n" title="signature"><?=$t['title']?></span>
                                    <div><img class="tp tp-initial" onClick="openSignatureModal('<?=$t['type'].$i ?>')" style="display:none;"/></div>
                                </div>
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                
                                <span class="error">Please click the yellow area and provide your initials here.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'upLocalImg'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" optional="<?=$t['optional']==true?'true':'false' ?>" type="<?=$t['type']?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <div class="upLocalImgBox">
                                    <span class="btn uploadBtn">Click to select image
                                        <input type="file" id="<?=$t['type'].$i.'uploadImg'?>" accept="image/gif, image/jpeg, image/png, image/jpg" onchange="uploadLocalImg('<?=$t['type'].$i.'uploadImg'?>')"/>
                                    </span>
                                    <img style="display:none;" >
                                    <button type="button" class="btn btn-default setDayBtn" onClick="removeImg('<?=$t['type'].$i.'uploadImg'?>')" style="display:none;">Remove</button>
                                </div>
                                
                                <span class="error">Please upload image.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'number'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" numberRange="<?=$t['numberRange']==true?'true':'false' ?>" numberFrom="<?=$t['numberFrom']?>" numberTo="<?=$t['numberTo']?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?>
                                    <?php if($t['numberRange'] == true):?>
                                        <span>(Valid Number Range: <?=$t['numberFrom']?> - <?=$t['numberTo']?>)</span>
                                    <?php endif;?>
                                </label>
                                <input type="number" name="number" class="form-control form-control-render"  placeholder="" autocomplete="off">
                                <span class="error">Please enter a number.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'textBox'):?>
                            <div style="margin-top: 15px;">
                                <?php echo html_entity_decode($t['model']); ?>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'multiple'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" selectMore="<?=$t['selectMore']==true?'true':'false'?>" dropDownStyle="<?=$t['dropDownStyle']==true?'true':'false'?>"  useOthers="<?=$t['useOthers']==true?'true':'false'?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <div class="row">
                                <?php if(!$t['dropDownStyle']):?>
                                    <?php if($t['selectMore'] == 'true'): ?>
                                        <?php foreach($t['choices'] as $ix=>$choice): ?>
                                            <div class="box" style="<?php if($t['layoutFormat']=='2 Column'): echo 'width:49%;display:inline-block';?>
                                                        <?php elseif($t['layoutFormat']=='3 Column'): echo 'width:32%;display:inline-block';?>
                                                        <?php elseif($t['layoutFormat']=='Side By Side'): echo 'display:inline-block;margin-right:10px;';?>
                                                        <?php else: echo 'width:100%';?>
                                                        <?php endif; ?>">
                                                <input type="checkbox" name="noSelectMore" id="<?=$t['type'].$i.'check'.$ix?>" style="transform: none;" >&nbsp;
                                                <label for="<?=$t['type'].$i.'check'.$ix?>" class="multiple-label-select"><?php echo $choice['text'];?></label>
                                            </div>
                                        <?php endforeach;?>
                                        <?php if($t['useOthers']):?>
                                            <div class="othersBox">
                                                <input type="text" class="form-control form-control-render othersValue" autocomplete="off" placeholder="<?=$t['othersText']?>" othersText="<?=$t['othersText']?>">                                               
                                            </div>
                                        <?php endif;?>
                                    <?php else:?>
                                        <?php foreach($t['choices'] as $ix=>$choice): ?>
                                            <div class="box" style="<?php if($t['layoutFormat']=='2 Column'): echo 'width:49%;display:inline-block';?>
                                                        <?php elseif($t['layoutFormat']=='3 Column'): echo 'width:32%;display:inline-block';?>
                                                        <?php elseif($t['layoutFormat']=='Side By Side'): echo 'display:inline-block;margin-right:10px;';?>
                                                        <?php else: echo 'width:100%';?>
                                                        <?php endif; ?>">
                                                <input type="radio" name="multipleRadio<?=$i?>" id="<?=$t['type'].$i.'radio'.$ix?>" style="transform: none;" >&nbsp;
                                                <label for="<?=$t['type'].$i.'radio'.$ix?>" class="multiple-label-select"><?php echo $choice['text'];?></label>
                                            </div>
                                        <?php endforeach;?>
                                        <?php if($t['useOthers']):?>
                                            <div class="othersBox">
                                                <input type="radio" name="multipleRadio<?=$i?>" id="<?=$t['type'].$i.'check996'?>" style="transform: none;display:inline-block">&nbsp;
                                                <input type="text" class="form-control form-control-render othersValue" autocomplete="off" placeholder="<?=$t['othersText']?>" othersText="<?=$t['othersText']?>" style="width: 96%;display: inline-block;">
                                            </div>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endif;?>
                                <?php if($t['dropDownStyle']):?>
                                    <select class="form-control box" onchange="selectChange(this, '<?=$t['othersText']?>')" othersText="<?=$t['othersText']?>">
                                        <option value=""></option>
                                        <?php foreach($t['choices'] as $choice):?>
                                            <option value="<?=$choice['text']?>" templateDate="true"><?=$choice['text']?></option>
                                        <?php endforeach;?>
                                        <?php if($t['useOthers'] && $t['othersText']):?>
                                            <option value="<?=$t['othersText']?>"><?=$t['othersText']?></option>
                                        <?php endif;?>
                                        <?php if($t['useOthers'] && !$t['othersText']):?>
                                            <option value="dropDownStyleValueOthers">OTHERS</option>
                                        <?php endif;?> 
                                    </select>
                                    <div class="othersBox">
                                        <input type="text" class="form-control form-control-render othersValue" autocomplete="off" placeholder="Please write here." style="display:none;margin-top:10px;">
                                    </div>
                                <?php endif;?>
                                </div>
                                <span class="error">Please select at least one choice above.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'shortAns'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <input type="text" name="ans" class="form-control form-control-render" autocomplete="off">
                                <span class="error">Please enter your answer here.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'address'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <input type="text" class="form-control form-control-render address1" placeholder="<?=$t['holderAddress1'] ?>" autocomplete="off">
                                <input type="text" class="form-control form-control-render address2" placeholder="<?=$t['holderAddress2'] ?>" autocomplete="off">
                                <div class="row">
                                    <input type="text" class="address-control col-md-4 form-control form-control-render city" placeholder="<?=$t['holderCity'] ?>" autocomplete="off">
                                    <input type="text" class="address-control col-md-4 address-middle form-control form-control-render state" placeholder="<?=$t['holderState'] ?>" autocomplete="off">
                                    <input type="text" class="address-control col-md-4 form-control form-control-render zip" placeholder="<?=$t['holderZip'] ?>" autocomplete="off">
                                </div>
                                <span class="error">Please enter address.</span>
                            </div>
                        <?php endif;?>
                        <?php if($t['type'] == 'checkBox'):?>
                            <div id="additional<?=$t['type'].$i?>" class="fields" type="<?=$t['type']?>" optional="<?=$t['optional']==true?'true':'false' ?>" style="margin-top: 15px;">
                                <label><input class="additionals-checkbox" type="checkbox"><?=$t['text'] ?><?php if($t['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <span class="error">Please check it here.</span>
                            </div>
                        <?php endif;?>
                    <?php endforeach; ?>
                
                </div>
            <?php endif;?>

            <!-- lastsection -->
            <?php if($lastSections):?>
                <div class="lastSection">
                    <?php foreach($lastSections as $i=>$s):?>
                        <?php if($s['type'] == 'shortAns'):?>
                            <div id="lastSection<?=$s['type'].$i?>" class="section" type="<?=$s['type']?>" optional="<?=$s['optional']==true?'true':'false' ?>" renewable="<?=$s['renewable']==true?'true':'false' ?>" signatureText="<?=$s['signatureText'] ?>" style="margin-top: 15px;">
                                <label><?=$s['signatureText'] ?><?php if($s['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <input type="text" name="fullName" class="form-control form-control-render"  placeholder="Name" autocomplete="off">
                                <span class="error">Please enter your answer here.</span>
                            </div>
                        <?php endif;?>
                        <?php if($s['type'] == 'date'):?>
                            <div id="lastSection<?=$s['type'].$i?>" class="section" type="<?=$s['type']?>" optional="<?=$s['optional']==true?'true':'false' ?>" renewable="<?=$s['renewable']==true?'true':'false' ?>" signatureText="<?=$s['signatureText'] ?>" style="margin-top: 15px;">
                                <label><?=$s['signatureText'] ?><?php if($s['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <div class="<?=$s['type'].$i.'section' ?>">
                                    <input type="number" min="1" max="12" class="date-month form-control dateFormControl form-control-render" placeholder="MM"/>
                                    <input type="number" min="1" max="31" class="date-day form-control dateFormControl form-control-render" placeholder="DD"/>
                                    <input type="number" min="0" max="5000" class="date-year form-control dateFormControl form-control-render" placeholder="YYYY"/>
                                    <button type="button" class="btn btn-default setDayBtn" onClick="setToday('<?=$s['type'].$i.'section' ?>')">Set Today</button>                    
                                </div>
                                <span class="error">Please enter valid date.</span>
                            </div>
                        <?php endif;?>
                        <?php if($s['type'] == 'signature'):?>
                            <div id="lastSection<?=$s['type'].$i?>" class="section <?=$s['type'].$i.'section' ?>" type="<?=$s['type']?>" optional="<?=$s['optional']==true?'true':'false' ?>" renewable="<?=$s['renewable']==true?'true':'false' ?>" signatureText="<?=$s['signatureText'] ?>" style="margin-top: 15px;">
                                <label><?=$s['signatureText'] ?><?php if($s['optional'] == false):?><span class="requiredRed"> *</span><?php endif;?></label>
                                <div class="lastSectionInput signatureArea" style="width: 100%" onClick="openSignatureModal('<?=$s['type'].$i.'section' ?>')">
                                    <div class="signaturePad">
                                        <span class="i18n" title="signature">Click to sign</span>
                                        <img class="tp" onClick="openSignatureModal('<?=$s['type'].$i.'section' ?>')" style="display:none;"/>
                                    </div>
                                </div>
                                <span class="error">Please sign here.</span>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
        <div class="sub-btn-div">
            <button id="submit" onClick="submit('<?=$Header['header']?>','<?=$userId?>','<?=$template['_id']?>')">Submit</button>
        </div>
    <?php endif;?>
    <!-- signature modal -->
    <!-- Modal -->
    <div class="modal fade" id="mySignatureModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
            
                <div class="modal-body">
                    
                </div>
                <div class="signature-foot-btn">
                    <button type="button" class="btn btn-default" onClick="Clear()">Clear</button>
                    <button type="button" class="btn btn-default" onClick="closeModal()">Cancel</button>
                    <button type="button" class="btn btn-primary" onClick="save()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer renderTemplate" >
        <div class="col-md-6 col-sm-6 footer-des">
            <p><a target="_blank" href="https://www.waiverelectronic.com/?ftemplate"><img src="https://waiverphoto.s3.amazonaws.com/images/tTf2uY-logo.png">
            <span style="color: white; text-decoration: none;">Best Online Waiver System | Apps for iPad & Android</label></p></a>
            <p class="badges" style="margin-bottom: 0;">
                <a href="https://geo.itunes.apple.com/us/app/waiverelectronic/id1120918528?mt=8" class="app apple-light"><span class="accessAid sr-only">Download on the Apple Store</span></a>
                <a href="https://play.google.com/store/apps/details?id=com.ionicframework.techspec871250" class="app android-light"><span class="accessAid sr-only">Get it on Google Play</span></a>
            </p>
        </div>
        <div class="col-md-6 col-sm-6 footer-right">
            <a href="https://www.waiverelectronic.com/register?ftemplate" class="footer-btn" onclick="ga('send', 'event', 'registration', 'click', 'template', 1);">Sign up for Free</a>
        </div>
        
    </div>

        <script type="text/javascript">
        function selectChange(obj, othersText) {
            var selectValue = obj.value;
            if (selectValue == othersText || selectValue == 'dropDownStyleValueOthers') {
                obj.parentNode.children[1].children[0].style.display = 'block';
            } else {
                obj.parentNode.children[1].children[0].style.display = 'none';
            }
        }
    </script>

</body>
</html>