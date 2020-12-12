<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?><div class="bt-<?php echo (is_string($tmp=$this->scope["blocktype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> gridstackblock card card-secondary <?php echo (is_string($tmp=$this->scope["cardicontype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> clearfix <?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?>collapsible<?php 
}?>" id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <?php if (! (isset($this->scope["editing"]) ? $this->scope["editing"] : null) && (isset($this->scope["blockheader"]) ? $this->scope["blockheader"] : null) && ! (isset($this->scope["versioning"]) ? $this->scope["versioning"] : null) && ! (isset($this->scope["peerroleonly"]) ? $this->scope["peerroleonly"] : null)) {
?>

        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array('header/block-comments-details-header.tpl', null, null, null, '_root', null, array('artefactid' => (is_string($tmp=(isset($this->scope["artefactid"]) ? $this->scope["artefactid"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'blockid' => (is_string($tmp=(isset($this->scope["blockid"]) ? $this->scope["blockid"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'commentcount' => (is_string($tmp=(isset($this->scope["commentcount"]) ? $this->scope["commentcount"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

    <?php 
}?>

    <?php if ((isset($this->scope["showquickedit"]) ? $this->scope["showquickedit"] : null)) {
?>

        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array('header/block-quickedit-header.tpl', null, null, null, '_root', null, array('blockid' => (is_string($tmp=(isset($this->scope["blockid"]) ? $this->scope["blockid"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

    <?php 
}?>

    <?php if ((isset($this->scope["title"]) ? $this->scope["title"] : null)) {
?>

        <h2 class="title card-header js-heading">
            <?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?>

            <a data-toggle="collapse" href="#blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_target<?php if ((isset($this->scope["versioning"]) ? $this->scope["versioning"] : null)) {
?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'version',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["versioning"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" aria-expanded="<?php if ((isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) {
?>false<?php 
}
else {
?>true<?php 
}?>" aria-controls="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_target<?php if ((isset($this->scope["versioning"]) ? $this->scope["versioning"] : null)) {
?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'version',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["versioning"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" class="outer-link<?php if ((isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) {
?> collapsed<?php 
}?>"></a>
            <?php 
}?>


            <span class="collapse-inline">
                <?php echo (is_string($tmp=$this->scope["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php if ((isset($this->scope["feedlink"]) ? $this->scope["feedlink"] : null)) {
?>

                    <a href="<?php echo (is_string($tmp=$this->scope["feedlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="secondary-link inner-link">
                        <span class="icon-rss icon icon-lg mahara-rss-icon right" role="presentation" aria-hidden="true"></span>
                        <span class="sr-only">RSS</span>
                    </a>
                <?php 
}?>

            </span>

            <?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?>

            <span class="icon icon-chevron-up collapse-indicator float-right" role="presentation" aria-hidden="true"></span>
            <?php 
}?>


        </h2>
    <?php 
}
else {
?>

        <?php if ((isset($this->scope["link"]) ? $this->scope["link"] : null)) {
?>

            <a href="<?php echo (is_string($tmp=$this->scope["link"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-default btn-secondary btn-sm float-right">
                <?php echo PluginStr($this, 'detailslinkalt', 'view', null, null, null, null, null);?>

            </a>
        <?php 
}?>

    <?php 
}?>


    <div class="<?php if (! (isset($this->scope["title"]) ? $this->scope["title"] : null)) {
?>no-heading <?php 
}?>block<?php if ((isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) {
?> collapse<?php if ((isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) {


}
else {
?> show<?php 
}

}
if ((isset($this->scope["draft"]) ? $this->scope["draft"] : null)) {
?> draft<?php 
}?>"  id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_target<?php if ((isset($this->scope["versioning"]) ? $this->scope["versioning"] : null)) {
?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'version',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["versioning"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>" <?php if ((isset($this->scope["loadbyajax"]) ? $this->scope["loadbyajax"] : null)) {
?>data-blocktype-ajax="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}
else {
?>data-blocktype-noajax="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?>>
        <?php if ((isset($this->scope["draft"]) ? $this->scope["draft"] : null)) {
?>

        <span class="sr-only"><?php echo PluginStr($this, 'draft', 'artefact.blog', null, null, null, null, null);?></span>
        <?php 
}?>

        <?php if (! (isset($this->scope["loadbyajax"]) ? $this->scope["loadbyajax"] : null)) {
?>

            <?php echo (isset($this->scope["content"]) ? $this->scope["content"] : null);?>

        <?php 
}
else {
?>

            <div id="loadingicon<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><span class="icon icon-spinner icon-pulse"></span> <?php echo PluginStr($this, 'loading', 'mahara', null, null, null, null, null);?></div>
        <?php 
}?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>