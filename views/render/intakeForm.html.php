<?php


use app\extensions\helper\WaiverHelper;
# Additional
$Additionals = $data['additionals'];
// echo '<pre>' . var_export($Additionals, true) . '</pre>';


$videoImage = $this->WaiverHelper->convertImageToDataUrl("https://waiverphoto.s3.amazonaws.com/images/sBlGMB-video.png");
$logoImage = $this->WaiverHelper->convertImageToDataUrl($Header['logoImage']);

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
    <div class="additionals" style="padding-top: 10px;">
        <?php  foreach ($Additionals as $t): ?>

            <?php if ($t['type'] == 'textBox'):?>
                <div class="form-group">
                    <?php echo $t['text'];?>
                </div>
            <?php elseif ($t['type'] == 'multipleChoice'): ?>
                <div class="form-group">
                    <span><strong><?=$t['question']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <?php foreach ($t['choices'] as $k): ?>
                        <div>
                            <?php if ($k['checked']) {
                                    echo $k['text'];
                            }?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php elseif($t['type'] == 'email'): ?>
                <div class="form-group">
                    <span><strong>Email <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?=$t['value'];?></div>
                </div>
            <?php elseif($t['type'] == 'phone'): ?>
                <div class="form-group">
                    <span><strong>Phone <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?=$t['value'];?></div>
                </div>
            <?php elseif($t['type'] == 'country'): ?>
                <div class="form-group">
                    <span><strong>Country <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?=$t['value'];?></div>
                </div>
            <?php elseif($t['type'] == 'newName'): ?>
                <div class="form-group">
                    <span><strong>Name <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?= $t['first']?>&nbsp;&nbsp;<?= $t['second']?></div>
                </div>

            <?php elseif($t['type'] == 'shortAns'): ?>
                <div class="form-group">
                    <span><strong><?=$t['question']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?= $t['value']?></div>
                </div>
            <?php elseif($t['type'] == 'date'): ?>
                <div class="form-group">
                    <span><strong>Date <?= $t['dateFormat']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?= $this->WaiverHelper->getDateValue($t)?></div>
                </div>
            <?php elseif($t['type'] == 'dob'): ?>
                <div class="form-group">
                    <span><strong>Date of Birth <?= $t['dateFormat']?> <span style="color:red;"><?php if ($t['optional'] == false): ?> *<?php endif;?></span></strong></span>
                    <div><?= $this->WaiverHelper->getDateValue($t)?></div>
                </div>
            <?php elseif($t['type'] == 'checkBox'): ?>
                <div class="form-group">
                    <span>
                        <?php if ($t['value'] == true): ?>
                            <img src="https://waiverphoto.s3.amazonaws.com/images/bnsHR0-pc5Xn9dcB.png" class="checkmark"/>
                        <?php elseif ($t['value'] == false):  ?>
                            <img src="https://waiverphoto.s3.amazonaws.com/images/T7O7ky-OLBuV6-unchecked.png" class="checkmark"/>
                        <?php endif;?>

                        <strong style="margin-left: 10px;"><?=$t['des']?>
                            <span>
                            <?php if ($t['optional'] == false): ?>
                                (Required)
                            <?php endif;?>
                        </span>
                        </strong></span>
                </div>
            <?php elseif($t['type'] == 'address'): ?>
                <div class="form-group">
                    <span><strong>Address <span><?php if ($t['optional'] == false): ?>(Required)<?php endif;?></span></strong></span>

                    <div><span><?=$t['address1']?></span></div>
                    <div><span><?=$t['address2']?></span></div>
                    <div><span><?=$t['city']?>, <?=$t['state']?>, <?=$t['zip']?></span></div>
                </div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>

</div>
</body>
</html>