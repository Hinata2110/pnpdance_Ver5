<style type="text/css">
* {
    font-family: Arial,Verdana,Helvetica,sans-serif;
}

#container {
    margin: 0 auto;
    text-align: left;
    width: 960px;
    background-color: #FFFFFF;
    color: #000000;
    font-size: 12px;
}
#container, #content {
    border: 1px solid #CC9933;
    padding: 20px;
}
h2 {
    color: #268CCD;
    font-size: 1.4em;
    margin: 0 0 0.83em;
}
fieldset {
    background: none repeat scroll 0 0 #FFFFF0;
    border: 1px solid #DFD5C3;
    font-size: 1.1em;
    margin: 0;
    padding: 1em;
}
legend {
    font-family: Trebuchet,Arial,Helvetica,sans-serif;
    background: none repeat scroll 0 0 #FFF6D3;
    border: 1px solid #DFD5C3;
    font-weight: 700;
    margin: 0;
    padding: 0.2em 0.5em;
    text-align: left;
}
label {
    float: left;
    font-weight: bold;
    padding: 0.2em 0.5em 0 0;
    /*padding: 0;*/
    text-align: right;
    width: 200px;
}
.margin-form {
    color: #7F7F7F;
    font-size: 0.85em;
    padding: 0 0 1em 210px;
}
.clear {
    clear: both;
}
.pspace {
    padding-top: 1em;
}
input[type="text"], input[type="password"], input[type="file"], textarea {
    border: 1px solid #E0D0B1;
}
input[type="text"], input[type="password"], input[type="file"], textarea, select, option {
    background-color: #FFFFFF;
}
input[type="text"], input[type="password"], input[type="file"], textarea {
    padding: 2px 4px;
}
input[type="radio"], input[type="checkbox"] {
    background-color: transparent;
}
input, textarea, option {
    color: #000000;
    font-size: 12px;
    margin: 0;
    padding: 0;
}
input {
    vertical-align: middle;
}
select {
    border: 1px solid #E0D0B1;
}
label.t {
    clear: none;
    float: none;
    font-size: 12px;
    font-weight: bold;
    margin: 0;
    /*padding: 0;*/
    padding: 0 4px;
    /*padding:0.2em 0 0; */
    width: auto;
}
.button {
    background-color: #FFF6D3;
    border-color: #FFF6D3 #DFD5AF #DFD5AF #FFF6D3;
    border-right: 1px solid #DFD5AF;
    border-style: solid;
    border-width: 1px;
    color: #268CCD;
    padding: 3px;
}
.hint {
    background-color: #FFFFCC;
    border: 1px solid #CC9933;
    color: #7F7F7F;
    display: block;
    left: 0px;
    margin-bottom: 2px;
    margin-top: 4px;
    padding: 6px;
    position: relative;
    width: 501px;
}
</style>
<script type="text/javascript">
    //<![CDATA[
    //]]>
</script>
<script src="<?php echo $glob['rootRel']; ?>modules/magictoolbox/MagicThumb/options.js" type="text/javascript"></script>
<div id="container">
<h2>Magic Thumb configuration</h2>
<form action="<?php echo $glob['adminFile']; ?>?_g=<?php echo $_GET['_g']; ?>&amp;module=<?php echo $_GET['module']; ?>" method="post" enctype="multipart/form-data">
<div id="content" class="">
<?php

$groupTitle = '';
$closeFieldset = false;
foreach($tool->params->params as $id => $param) {
    switch($id) {
        case 'disable-zoom':
        case 'disable-expand':
            continue 2;
    }
    if(isset($param['hidden']) && $param['hidden'] == 'true') {
        continue;
    }
    if($groupTitle != $param['group']) {
        $groupTitle = $param['group'];
        if($closeFieldset) {
            ?></fieldset><br /><?php
        }
        ?><fieldset><legend><?php echo $groupTitle; ?></legend><?php
        $closeFieldset = true;
    }
    $param_value = $tool->params->getValue($id);
    ?><label for="<?php echo $id; ?>"><?php echo $param['label']; ?></label>
    <div class="margin-form"><?php
    switch($param['type']) {
        case "array":
            if($param['subType'] == 'radio') {
                foreach($param['values'] as $p) {
                    ?><input type="radio" value="<?php echo $p; ?>"<?php echo (($param_value == $p)?' checked="checked"':''); ?> name="<?php echo $id; ?>" id="<?php echo $id.'-'.$p; ?>" /><?php
                    ?><label class="t" for="<?php echo $id.'-'.$p; ?>"><?php echo $p; ?></label><?php
                }
            } elseif($param['subType'] == 'select') {
                ?><select name="<?php echo $id; ?>" id="<?php echo $id; ?>"><?php
                foreach($param['values'] as $p) {
                    ?><option value="<?php echo $p; ?>"<?php echo (($param_value==$p)?' selected="selected"':''); ?>><?php echo $p; ?></option><?php
                }
                ?></select><?php
            } else {
                ?><input type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo $param_value; ?>" /><?php
            }
            break;
        case "num":
        case "text":
        default:
            ?><input type="text" name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo $param_value; ?>" /><?php
    }
    $hint = '';
    if(isset($param['description']))
        $hint = $param['description'];
    if(($param['type'] != "array") && isset($param['values'])) {
        if($hint != '') $hint .= "<br />";
        $hint .= "#allowed values: ".implode(", ",$param['values']);
    }
    if($hint != '') {
        ?><p class="hint clear"><?php echo $hint; ?></p><?php
    }
    ?>
    </div>
    <div class="clear pspace"></div><?php
}
if($closeFieldset) {
    ?></fieldset><br /><?php
}
?></div>
<p style="text-align: center;"><input class="button" type="submit" id="submit" name="submit" value="Save settings" /></p>
</form>
</div>

<script type="text/javascript">initOptionsValidation('template', 'magicscroll');</script>

