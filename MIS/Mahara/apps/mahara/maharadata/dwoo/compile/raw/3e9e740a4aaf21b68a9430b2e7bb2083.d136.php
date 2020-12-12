<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (function_exists('PluginContextualhelp')===false)
	$this->getLoader()->loadPlugin('PluginContextualhelp');
/* end template head */ ob_start(); /* template body */ ?><div class="card">
    <h2 class="card-header">
        <?php echo PluginStr($this, "login", 'mahara', null, null, null, null, null);?>

        <span class="float-right"><?php echo PluginContextualhelp($this, 'core', 'core', null, null, 'loginbox', null);?></span>
    </h2>
    <div class="card-body">
        <noscript><p><?php echo PluginStr($this, "javascriptnotenabled", 'mahara', null, null, null, null, null);?></p></noscript>
        <?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo (isset($this->scope["messages"]["loginbox"]) ? $this->scope["messages"]["loginbox"]:null);?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo (isset($this->scope["messages"]["loginbox"]) ? $this->scope["messages"]["loginbox"]:null);
}?>

        <div id="loginform_container"><?php echo (isset($this->scope["sbdata"]["loginform"]) ? $this->scope["sbdata"]["loginform"]:null);?></div>
    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>