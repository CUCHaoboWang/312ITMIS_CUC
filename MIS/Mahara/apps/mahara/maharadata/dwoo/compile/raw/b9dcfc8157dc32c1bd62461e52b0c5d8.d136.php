<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["watchlistempty"]) ? $this->scope["watchlistempty"] : null)) {
?>

    <div class="card-body">
        <p class="lead text-small"><?php echo PluginStr($this, 'nopages', 'blocktype.watchlist', null, null, null, null, null);?></p>
    </div>
<?php 
}
else {
?>

    <ul id="watchlistblock" class="viewlist list-group">
        <?php echo (isset($this->scope["watchlist"]["tablerows"]) ? $this->scope["watchlist"]["tablerows"]:null);?>

    </ul>
    <?php if ((isset($this->scope["watchlist"]["pagination"]) ? $this->scope["watchlist"]["pagination"]:null)) {
?>

        <div id="watchlist_page_container" class="d-none"><?php echo (isset($this->scope["watchlist"]["pagination"]) ? $this->scope["watchlist"]["pagination"]:null);?></div>
    <?php 
}?>

    <?php if ((isset($this->scope["watchlist"]["pagination_js"]) ? $this->scope["watchlist"]["pagination_js"]:null)) {
?>

    <script>
        jQuery(function($) {
            <?php echo (isset($this->scope["watchlist"]["pagination_js"]) ? $this->scope["watchlist"]["pagination_js"]:null);?>

            $('#watchlist_page_container').removeClass('d-none');
        });
    </script>
    <?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>