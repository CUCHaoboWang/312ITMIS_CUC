<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginCounter')===false)
	$this->getLoader()->loadPlugin('PluginCounter');
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
/* end template head */ ob_start(); /* template body */ ;

$_fh16_data = (is_string($tmp=(isset($this->scope["blocks"]) ? $this->scope["blocks"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh16_data) == true)
{
	foreach ($_fh16_data as $this->scope['sideblock'])
	{
/* -- foreach start output */

echo $this->classCall('Dwoo\Plugins\Functions\Plugincounter',array("sidebar", null, null, null, null, 'sequence'));?><div<?php if ((isset($this->scope["sideblock"]["id"]) ? $this->scope["sideblock"]["id"]:null)) {
?> id="<?php echo (is_string($tmp=$this->scope["sideblock"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?> class="sideblock-<?php echo (is_string($tmp=$this->scope["sequence"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php if ((isset($this->scope["sideblock"]["class"]) ? $this->scope["sideblock"]["class"]:null)) {

echo (is_string($tmp=$this->scope["sideblock"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>">
    <?php if ((isset($this->scope["sideblock"]["template"]) ? $this->scope["sideblock"]["template"]:null)) {
?>

    <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array((is_string($tmp=(isset($this->scope["sideblock"]["template"]) ? $this->scope["sideblock"]["template"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, '_root', null, array('sbdata' => (is_string($tmp=(isset($this->scope["sideblock"]["data"]) ? $this->scope["sideblock"]["data"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

    <?php 
}
else {
?>

    <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("sideblocks/generic.tpl", null, null, null, '_root', null, array('sbdata' => (is_string($tmp=(isset($this->scope["sideblock"]) ? $this->scope["sideblock"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

    <?php 
}?>

</div>
<?php 
/* -- foreach end output */
	}
}?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>