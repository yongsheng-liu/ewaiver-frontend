<?php


use app\extensions\helper\WaiverHelper;

$waiver = $data['waiver']['success'];
$notes = $data['notes']['success'];
# Header
$signDate = $waiver['signedDate'];
$userId = $waiver['userId'];
$clientIP = $waiver['clientIP'];
$Header = $waiver['Header'];
$Settings = $waiver['settings'];
$this->title('Home');
$headerStyle = $this->WaiverHelper->getLogoStyles($Header);

# Additional
$Additionals = $waiver['Additionals'];
// echo '<pre>' . var_export($Additionals, true) . '</pre>';

$videoImage = $this->WaiverHelper->convertImageToDataUrl("https://waiverphoto.s3.amazonaws.com/images/sBlGMB-video.png");
$logoImage = $this->WaiverHelper->convertImageToDataUrl($Header['logoImage']);

# LastSection
$LastSections = $waiver['LastSections'];

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
    <title>Online Waiver - The World's Leading Online Waiver Application</title>
    <?php echo $this->html->style(array('renderWaiver')); ?>
    <?php echo $this->scripts(); ?>
    <?php echo $this->styles(); ?>
    <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
    <META content="Online Waiver| Waiver App - The best electronic waiver application in the world. In just a few minutes, you can have your own online waiver system with a speedy sign up process." name="description">
    <META content="index,follow" name="robots">
    <META content="index,follow" name="GOOGLEBOT">
    <META content="The World's Leading Digital Waiver Application"  name="Author">
    <link href="https://plus.google.com/104217211088502604025" ref="publisher">
    <link rel="shortcut icon" type="image/x-icon" href="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png" />
    <META content="online waiver,waiver app,waiver,electronic waiver, liability form, electronic waiver app, waiver electronic,digital waiver kiosk,digital waiver, waiver digital" name="keywords">
</head>
<style>
    * {
      font-family: 'droid_sansregular';
    }
</style>

<body>
<div name="myForm" novalidate class="template">
    <div class="signedDate" style="color: grey;">
        <?php if ($userId == 18939):?>
            <?php echo date("Y-m-d",strtotime($signDate)); ?>
        <?php endif;?>
        <?php if ($userId != 18939):?>
            <?php echo $h($signDate); ?>
        <?php endif;?>
    </div>
    <?php if ($clientIP && $userId != 18939):?>
        <div class="signedDate" style="color: grey;">IP Address: <?php echo $h($clientIP); ?></div>
    <?php endif;?>
    <p style="text-align:center">&nbsp;</p>

    <div class="headerInfo" style="overflow: hidden;">

        <?php if (array_key_exists('logoImage', $Header) && strlen($logoImage) > 0):?>
            <img style="<?php echo $h($headerStyle['logoStyle']); ?>" src="<?php echo $h($logoImage); ?>"/>
        <?php endif;?>
        <p class="headerInfo" style="<?php echo $h($headerStyle['headerStyle']); ?>.'overflow:hidden;'">
            <?php echo $Header['text']?>
        </p><br/>
    </div>

    <!--Additionals-->
    <div class="additionals" style="padding-top: 10px;">
        <?php foreach ($Additionals as $t): ?>

            <?php if ($t['type'] == 'textBox' || $t['type'] == 'video'):?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true') ):?>
                    <div class = "additional" >
                        <div class="form-group">
                            <p>
                                <?php if ($t['type'] == 'textBox'): ?>
                                    <?php echo $t['model'];?>
                                <?php elseif  ($t['type'] == 'video'):?>
                                    <img class="videoImg" src="<?php echo $h($videoImage); ?>"/>
                                <?php endif;?>
                            </p>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif ($t['type'] == 'multiple'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class = "additional" >
                        <div class="form-group">
                            <span><strong><?php echo $h($t['text']); ?></strong></span><br/>
                            <?php if($t['dropDownStyle']): ?>
                                <?php if($t['dropDownStyleValue'] && $t['dropDownStyleValue'] != $t['othersText'] && $t['dropDownStyleValue'] != 'dropDownStyleValueOthers'): ?>
                                    <div><?php echo $h($t['dropDownStyleValue']); ?></div>
                                <?php endif; ?>
                                <?php if($t['dropDownStyleValue'] == $t['othersText'] || $t['dropDownStyleValue'] != 'dropDownStyleValueOthers'): ?>
                                    <div><?php echo $h($t['othersValue']); ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(!$t['dropDownStyle']): ?>
                                <?php  foreach ($t['value'] as $k => $v): ?>
                                    <div><span>
                                        <?php
                                            if ($v) {
                                                echo $k;
                                            }
                                        ?>
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                                <?php if(($t['othersCheck'] && $t['othersValue']) || ($t['selectMore'] && $t['othersValue'])): ?>
                                    <div><?php echo $h($t['othersValue']); ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'name' || $t['type'] == 'number' || $t['type'] == 'email' || $t['type'] == 'phone' || $t['type'] == 'country' ||$t['type'] == 'gender'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                            <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                        </strong></span>
                        <div>
                            <?php if(array_key_exists('ans', $t) && strlen($t['ans']) > 0): ?>
                                <?php echo $h($t['ans']); ?>
                            <?php elseif (array_key_exists('value', $t)):?>
                                <?php echo $h($t['value']); ?>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'newName'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                            <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                        </strong></span>
                        <div><?php echo $h($t['first']); ?>&nbsp;&nbsp;<?php echo $h($t['second']); ?></div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'takePic' && $t['value']): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                            <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                        </strong></span>
                        <div><img class="tp-initial" src="<?php echo $h($t['value']); ?>"></div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'upLocalImg' && $t['value']): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                            <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                        </strong></span>
                        <div>
                            <?php if (!$t['newUpLocal']): ?> 
                                <img class="tp-initial" src="<?php echo $h($t['value']); ?>">
                            <?php else: ?>
                                <?php  foreach ($t['value'] as $k): ?>
                                    <?php if ($k['fileType'] != 'application/pdf' && $k['fileType'] != 'application/msword'): ?> 
                                        <img class="tp-initial" src="<?php echo $h($k['url']); ?>">
                                    <?php endif;?>
                                    <?php if ($k['fileType'] == 'application/pdf' || $k['fileType'] == 'application/msword'): ?> 
                                        <a href="<?php echo $h($k['url']); ?>"><?php echo $h($k['url']); ?></a>
                                    <?php endif;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'photoOrFile' && $t['value']): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                            <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                        </strong></span>
                        <div>
                            <?php  foreach ($t['value'] as $k): ?>
                                <?php if ($k['fileType'] != 'application/pdf' && $k['fileType'] != 'application/msword'): ?> 
                                    <img class="tp-initial" src="<?php echo $h($k['url']); ?>">
                                <?php endif;?>
                                <?php if ($k['fileType'] == 'application/pdf' || $k['fileType'] == 'application/msword'): ?> 
                                    <a href="<?php echo $h($k['url']); ?>"><?php echo $h($k['url']); ?></a>
                                <?php endif;?>
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'image' && $t['value']): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <div><img style="max-width:100%;" src="<?php echo $h($t['value']); ?>"></div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'shortAns'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                                <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                            </strong></span>
                        <div><?php echo $h($t['ans']); ?></div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'date' || $t['type'] == 'dob'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                                <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                            </strong></span>
                        <div>
                            <?php echo $this->WaiverHelper->getDateValue($t); ?>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'checkBox'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span>
                            <?php if ($t['checked'] == true): ?>
                                <img src="https://waiverphoto.s3.amazonaws.com/images/bnsHR0-pc5Xn9dcB.png" class="checkmark"/>
                            <?php elseif ($t['checked'] == false):  ?>
                                <img src="https://waiverphoto.s3.amazonaws.com/images/T7O7ky-OLBuV6-unchecked.png" class="checkmark"/>
                            <?php endif;?>

                            <strong style="margin-left: 10px;"><?php echo $h($t['text']); ?>
                                <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                            </strong></span>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'initial'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <?php if (!$t["dataUrl"]):?>
                            <div class="initialPad-outPointer"><img class="tp-initial" src=""></div>
                        <?php elseif (array_key_exists('dataUrl', $t) && array_key_exists('dataUrl', $t['dataUrl'])):?>
                            <div class="initialPad-outPointer"><img class="tp-initial" src="<?php echo $h($t['dataUrl']['dataUrl']); ?>"></div>
                        <?php endif;?>
                        <span class="initialPad-label"><?php echo $h($t['text']); ?></span>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'signature'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <div class="signatures">
                        <span><strong><?php echo $h($t['text']); ?>
                                <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                            </strong></span>
                            <?php if (!$t["dataUrl"]):?>
                                <div><img src=""/></div>
                            <?php elseif (array_key_exists('dataUrl', $t) && array_key_exists('dataUrl', $t['dataUrl'])):?>
                                <div><img src="<?php echo $h($t['dataUrl']['dataUrl']); ?>"/></div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'address'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong><?php echo $h($t['text']); ?>
                                <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                            </strong></span>

                            <div><span><?php echo $h($t['address1']); ?></span></div>
                            <div><span><?php echo $h($t['address2']); ?></span></div>
                            <div><span><?php echo $h($t['city']); ?>, <?php echo $h($t['state']); ?>, <?php echo $h($t['zip']); ?></span></div>
                    </div>
                <?php endif;?>
            <?php elseif($t['type'] == 'stripe'): ?>
                <?php if (!($t['minorsOnly'] && !$waiver['showMinorTemplate'] && $Settings['minor']['enable'] == 'true')):?>
                    <div class="form-group">
                        <span><strong style="display:block;"><?php echo $h($t['text']); ?>
                                <span>
                                <?php if ($t['optional'] == false): ?>
                                    (Required)
                                <?php endif;?>
                            </span>
                            </strong></span>
                            <div style="width:28%;float:right;"><img style="height:32px;float:right" src="https://waiverphoto.s3.amazonaws.com/images/zLY6V7-powered_by_stripe@2x.png"/></div>
                            <?php if($t['paid']):?>
                                <div><span>Paid $<?php echo $h($t['paidValue']); ?></span></div>
                            <?php endif;?>
                            <?php if(!$t['paid']):?>
                                <div><span>Did not make any payment</div>
                            <?php endif;?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach;?>
    </div>

    <!--Minors-->
    <div class="minorSection">
        <?php  foreach ($waiver['minorInfo'] as $t): ?>
            <?php if($t['type'] == 'name' || $t['type'] == 'email' || $t['type'] == 'phone' || $t['type'] == 'gender' || $t['type'] == 'shortAns'): ?>
                <div class="form-group">
                    <span><strong><?php echo $h($t['text']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                <div>
                    <?php if(array_key_exists('ans', $t) && strlen($t['ans']) > 0): ?>
                        <?php echo $h($t['ans']); ?>
                    <?php elseif (array_key_exists('value_second', $t)):?>
                        <?php echo $h($t['value']); ?>&nbsp;<?php echo $h($t['value_second']); ?>
                    <?php elseif (array_key_exists('value', $t)):?>
                        <?php echo $h($t['value']); ?>
                    <?php endif;?>
                </div>
            </div>
            <?php elseif($t['type'] == 'date' || $t['type'] == 'dob'): ?>
                <div class="form-group">
                    <span><strong><?php echo $h($t['text']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                    <div>
                        <?php echo $this->WaiverHelper->getDateValue($t); ?>
                    </div>
                </div>
            <?php elseif($t['type'] == 'image'): ?>
                <div class="form-group">
                    <span><strong><?php echo $h($t['text']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                    <div>
                        <?php if ($t['value']): ?> 
                            <?php  foreach ($t['value'] as $k): ?>
                                <img class="tp-initial" src="<?php echo $h($k['url']); ?>">
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            <?php elseif ($t['type'] == 'multiple'): ?>
                <div class="form-group">
                    <span><strong><?php echo $h($t['text']); ?></strong></span>
                    <div>
                        <?php if($t['dropDownStyle']): ?>
                            <?php if($t['dropDownStyleValue'] && $t['dropDownStyleValue'] != $t['othersText'] && $t['dropDownStyleValue'] != 'dropDownStyleValueOthers'): ?>
                                <span><?php echo $h($t['dropDownStyleValue']); ?></span>
                            <?php endif;?>

                            <?php if($t['dropDownStyleValue'] == $t['othersText'] || $t['dropDownStyleValue'] == 'dropDownStyleValueOthers'): ?>
                                <div><span><?php echo $h($t['othersValue']); ?></span></div>
                            <?php endif;?>
                        <?php endif;?>
                        <?php if(!$t['dropDownStyle']): ?>
                            <?php foreach ($t['selected'] as $v): ?>
                                <div><span><?php echo $h($v); ?></span></div>
                            <?php endforeach;?>
                            <?php if(($t['othersCheck'] && $t['othersValue']) || $t['selectMore'] && $t['othersValue']): ?>
                                <div><span><?php echo $h($t['othersValue']); ?></span></div>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                </div>
            <?php elseif($t['type'] == 'signature'): ?>
                <div class="form-group">
                    <div class="signatures">
                    <span><strong><?php echo $h($t['text']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                        <?php if (array_key_exists('dataUrl', $t) && array_key_exists('dataUrl', $t['dataUrl'])):?>
                            <div><img src="<?php echo $h($t['dataUrl']['dataUrl']); ?>"/></div>
                        <?php endif;?>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>

    <!--Last Sections-->
    <div class="lastSections">
        <div class="signatureContent">
            <strong>
                <?php echo $h($LastSections['signatureContent']); ?>
            </strong>
        </div>
        <div class="signatureContentText"><?php echo $h($LastSections['signatureContent']); ?></div>

        <div class="signatures">
            <?php  foreach ($LastSections['signatures'] as $t): ?>
                <?php if($t['type'] == 'shortAns'): ?>
                <div class="form-group">
                    <span><strong><?php echo $h($t['signatureText']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                    <div><?php echo $h($t['value']); ?></div>
                </div>
                <?php elseif($t['type'] == 'date'): ?>
                    <div class="form-group">
                    <span><strong><?php echo $h($t['signatureText']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                        <div><?php echo $this->WaiverHelper->getDateValue($t); ?></div>
                    </div>
                <?php elseif($t['type'] == 'signature'): ?>
                    <div class="form-group">
                        <div class="signatures">
                    <span><strong><?php echo $h($t['signatureText']); ?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                            <?php if (array_key_exists('dataUrl', $t) && array_key_exists('dataUrl', $t['dataUrl'])):?>
                                <div><img src="<?php echo $h($t['dataUrl']['dataUrl']); ?>"/></div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>

    <?php if (count($notes) > 0):?>
        <div class="notes">
            <h3>Notes from Business Owner:</h3>

            <?php  foreach ($notes as $n): ?>
                <hr/>
                <h4><?php echo $h($n['title']); ?></h4>
                <p><?php echo $h($n['notes']); ?></p>
                <?php  foreach ($n['notesSignatures'] as $s): ?>
                    <div><img src="<?php echo $h($s['value']['dataUrl']); ?>"/></div>
                <?php endforeach;?>
            <?php endforeach;?>
            <hr/>
        </div>
    <?php endif;?>
</div>
</body>
</html>