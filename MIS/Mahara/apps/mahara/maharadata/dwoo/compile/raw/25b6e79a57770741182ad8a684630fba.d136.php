<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["myviews"]) ? $this->scope["myviews"] : null)) {
?>

    <div class="list-group">
        <div id="myviewlist">
            <?php echo (isset($this->scope["myviews"]["tablerows"]) ? $this->scope["myviews"]["tablerows"]:null);?>

        </div>
    <?php if ((isset($this->scope["myviews"]["pagination"]) ? $this->scope["myviews"]["pagination"]:null)) {
?>

        <div id="myviews_page_container" class="d-none"><?php echo (isset($this->scope["myviews"]["pagination"]) ? $this->scope["myviews"]["pagination"]:null);?></div>
    <?php 
}?>

    <?php if ((isset($this->scope["myviews"]["pagination_js"]) ? $this->scope["myviews"]["pagination_js"]:null)) {
?>

    <script>
        jQuery(function($) {
            <?php echo (isset($this->scope["myviews"]["pagination_js"]) ? $this->scope["myviews"]["pagination_js"]:null);?>

            $('#myviews_page_container').removeClass('d-none');
        });
    </script>
    <?php 
}?>

    </div>
<?php 
}
else {
?>

<p class="content-text lead text-center"><?php echo PluginStr($this, 'noviewstosee', 'group', null, null, null, null, null);?></p>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>