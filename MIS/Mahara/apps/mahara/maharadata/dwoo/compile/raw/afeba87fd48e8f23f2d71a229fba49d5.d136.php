<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["USERGROUPS"]["count"]) ? $this->scope["USERGROUPS"]["count"]:null) > 0) {
?>

    <div id="usergroupstable" class="fullwidth listing">
        <?php echo (isset($this->scope["USERGROUPS"]["tablerows"]) ? $this->scope["USERGROUPS"]["tablerows"]:null);?>

    </div>
    <?php if ((isset($this->scope["USERGROUPS"]["pagination"]) ? $this->scope["USERGROUPS"]["pagination"]:null)) {
?>

        <div id="usergroups_page_container" class="d-none center"><?php echo (isset($this->scope["USERGROUPS"]["pagination"]) ? $this->scope["USERGROUPS"]["pagination"]:null);?></div>
    <?php 
}?>

    <?php if ((isset($this->scope["USERGROUPS"]["pagination_js"]) ? $this->scope["USERGROUPS"]["pagination_js"]:null)) {
?>

    <script>
        var cleanurlid = <?php echo (is_string($tmp=$this->scope["userid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>;
        jQuery(function($) {
            <?php echo (isset($this->scope["USERGROUPS"]["pagination_js"]) ? $this->scope["USERGROUPS"]["pagination_js"]:null);?>

            $('#usergroups_page_container').removeClass('d-none');
        });
    </script>
    <?php 
}?>

<?php 
}
else {
?>

    <div class="card-body">
        <p class="no-results-small"><?php echo PluginStr($this, 'notinanygroups', 'group', null, null, null, null, null);?></p>
    </div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>