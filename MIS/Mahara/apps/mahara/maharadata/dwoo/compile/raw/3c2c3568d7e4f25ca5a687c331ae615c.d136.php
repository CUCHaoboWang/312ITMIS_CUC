<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginCleanHtml')===false)
	$this->getLoader()->loadPlugin('PluginCleanHtml');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header.tpl", null, null, null, '_root', null));?>

<?php echo PluginCleanHtml($this, (isset($this->scope["page_content"]) ? $this->scope["page_content"] : null), false);?>

<?php if (get_config('homepageinfo') && ( ! (($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null) || (($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get_account_preference('showhomeinfo') : null) )) {
?>

    <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("homeinfo.tpl", null, null, null, '_root', null, array('url' => (is_string($tmp=(isset($this->scope["url"]) ? $this->scope["url"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

<?php 
}?>

<?php if ((isset($this->scope["dashboardview"]) ? $this->scope["dashboardview"] : null)) {
?>

    <div class="dashboard-editable">
        <div class="btn-top-right btn-group btn-group-top" id="editdashboard">
            <a class="btn btn-secondary" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><span class="btn-edit"><span class="icon icon-pencil-alt left" role="presentation" aria-hidden="true"> </span> <?php echo PluginStr($this, 'editdashboard', 'mahara', null, null, null, null, null);?></span></a>
        </div>

        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("user/dashboard.tpl", null, null, null, '_root', null));?>


    </div>
<?php 
}?>


<?php if ((isset($this->scope["saml_logout"]) ? $this->scope["saml_logout"] : null)) {
?>

<script>
window.top.location.href = '<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>';
</script>
<?php 
}?>


<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("footer.tpl", null, null, null, '_root', null));?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>