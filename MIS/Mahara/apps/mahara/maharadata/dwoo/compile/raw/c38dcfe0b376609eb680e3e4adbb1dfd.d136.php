<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header.tpl", null, null, null, '_root', null, array('headertype' => "profile")));?>


<div id="view" class="view-container">
    <div id="bottom-pane" class="user-page-content">
        <div id="column-container">
            <?php if ((isset($this->scope["restrictedview"]) ? $this->scope["restrictedview"] : null)) {
?>

            <strong><?php echo PluginStr($this, 'profilenotshared', 'view', null, null, null, null, null);?></strong>
            <?php 
}
else {
?>

            <div class="grid-stack">
                <?php if (! (isset($this->scope["newlayout"]) ? $this->scope["newlayout"] : null)) {
?>

                    <?php echo (isset($this->scope["viewcontent"]) ? $this->scope["viewcontent"] : null);?>

                <?php 
}?>

            </div>
            <?php 
}?>

        </div>
    </div>
</div>

<div class="metadata text-right last-updated">
    <?php echo (is_string($tmp=$this->scope["lastupdatedstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["visitstring"]) ? $this->scope["visitstring"] : null)) {
?>; <?php echo (is_string($tmp=$this->scope["visitstring"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>

</div>
<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("footer.tpl", null, null, null, '_root', null));?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>