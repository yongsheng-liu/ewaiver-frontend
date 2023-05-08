<?php

use app\extensions\helper\WaiverHelper;

$splashId = $data['splashId'];
$splash = $data['splash']['success'];
$templist = $data['templist']['success'];

$headerStyle = $this->WaiverHelper->getLogoStyles($splash);

// echo '<pre>' . var_export($templist, true) . '</pre>';
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
    <title>Online Waiver and Waiver App for your business</title>
    <?php echo $this->html->style(array('renderSplash','bootstrap.min')); ?>
    <?php echo $this->html->script(array('jquery-1.9.1.min.js')); ?>
    <?php echo $this->styles(); ?>
    <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <META content="Online Waiver & Waiver App - Leading online waiver system in the world. Set up the electronic waiver in 2 minunites and get rid of the traditional paper waivers forever." name="description">
    <META content="index,follow" name="robots">
    <META content="index,follow" name="GOOGLEBOT">
    <META content="The World's Leading Digital Waiver Application"  name="Author">
    <link href="https://plus.google.com/104217211088502604025" ref="publisher">
    <link rel="shortcut icon" type="image/x-icon" href="https://waiverphoto.s3.amazonaws.com/images/OyOT4M-logo.png" />
    <META content="online waiver,waiver app,waiver,electronic waiver, liability form, electronic waiver app, waiver electronic,digital waiver kiosk,digital waiver, waiver digital" name="keywords">
</head>


<body>
<div name="myForm" novalidate>

    <?php if(!($splash['useCustomColor'] == 'true') && !($splash['useCustomColor'] == 'myBg')):?>
        <div id="bg" class="no-print">
            <?php if($splash['background'] && strlen($splash['background'])> 0):?>
                <img src="https://app.waiverelectronic.com/<?php echo $splash['background'];?>">
            <?php elseif(!$splash['background'] || strlen($splash['background']) <= 0): ?>
                <img src="https://app.waiverelectronic.com/images/retina_wood_@2X.png">
            <?php endif;?>
        </div>
    <?php endif; ?>

    <?php if($splash['useCustomColor'] == 'myBg'): ?>
        <div id="bg" class="no-print">
            <img src="<?=$splash['backgroundImage']?>" alt="">
        </div>
    <?php endif; ?>

    <?php if($splash['useCustomColor'] == 'true'): ?>
        <div id="bg" class="no-print" style="background-color:<?=$splash['backgroundColor']?>"></div>
    <?php endif;?>

    <form name="myForm" id="template" novalidate class="template">
        <div class="waiverBody" >
            <div class="headerInfo" style="overflow: hidden;">

                <?php if (array_key_exists('logoImage', $splash) && strlen($splash['logoImage']) > 0):?>
                    <img style="<?=$headerStyle['logoStyle']?>" src="<?=$splash['logoImage']?>"/>
                <?php endif;?>
                <div class="headerInfo" style="<?=$headerStyle['headerStyle']?>; padding-top: 30px;">
                    <?php echo html_entity_decode($splash['text'])?>
                </div>
            </div><br/>
        </div>
    </form>


    <div class="template splash-templist-box">
        <?php if($splash['dropdownList'] == 'false'):?>
            <?php foreach($templist as $t):?>
                <div class="waiverList">
                    <?php if($t['published'] && !$t['refId']):?>
                        <span onclick="fillWaiver('<?=$t['mangoId']?>','<?=$splashId?>')" class="button splashButton"><?=$t['header']?></span>
                    <?php endif;?>
                    <?php if($t['published'] && $t['refId']):?>
                        <span onclick="fillWaiver('<?=$t['refId']?>', '<?=$splashId?>')"class="button splashButton"><?=$t['header']?></span>
                    <?php endif;?>
                </div>
            <?php endforeach;?>
        <?php endif;?>

        <?php if($splash['dropdownList']  == 'true'):?>
            <div class="select-box">
                <select onchange="selectChange()" class="splash-select-box" style="width:90%;height:34px;" >
                    <option value="">Select a waiver in this list or search the waiver name...</option>
                    <?php foreach($templist as $t):?>
                        <?php if($t['published'] && !$t['refId']):?>
                            <option value="<?=$t['mangoId']?>"><?=$t['header']?></option>
                        <?php endif;?>
                        <?php if($t['published'] && $t['refId']):?>
                            <option value="<?=$t['refId']?>"><?=$t['header']?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                </select>
                <button id="selectBtn" class="btn btn-primary pull-right" onclick="viewTemplate('<?=$splashId?>')" disabled="disabled" >Go!</button>
            </div>
        <?php endif;?>
    </div>

</div>
</body>
</html>

<script>
    function fillWaiver(id, splashId) {
        window.location.href = 'https://app.waiverelectronic.com/render/templateByRefId/' + id + '?splashId=' + splashId;
    }
    function viewTemplate(splashId) {
        var id = $('.splash-select-box').val();
        if(id) {
            window.location.href = 'https://app.waiverelectronic.com/render/templateByRefId/' + id + '?splashId=' + splashId;
        }
    }
    function selectChange() {
        var id = $('.splash-select-box').val();
        if(id) {
            $('#selectBtn').attr('disabled',false);
        } else {
            $('#selectBtn').attr('disabled',true);
        }
    }
</script>