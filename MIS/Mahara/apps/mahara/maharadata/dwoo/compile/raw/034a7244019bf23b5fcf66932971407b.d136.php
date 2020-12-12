<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?><div class="friends card-body">
<?php if ((isset($this->scope["friends"]) ? $this->scope["friends"] : null)) {
?>

    <div id="userfriendstable">
       <?php echo (isset($this->scope["friends"]["tablerows"]) ? $this->scope["friends"]["tablerows"]:null);?>

    </div>
    <div id="myfriends_page_container" class="d-none ">
        <?php echo (isset($this->scope["friends"]["pagination"]) ? $this->scope["friends"]["pagination"]:null);?>

    </div>
    <script>
    jQuery(function($) {
        <?php echo (isset($this->scope["friends"]["pagination_js"]) ? $this->scope["friends"]["pagination_js"]:null);?>

        $('#myfriends_page_container').removeClass('d-none');
        $(window).on('pageupdated', { }, function() {
            $('.js-masonry.user-thumbnails').masonry({ itemSelector: '.user-icon' });
        });
    });
    </script>
<?php 
}
else {
?>

    <?php if ((isset($this->scope["lookingatownpage"]) ? $this->scope["lookingatownpage"] : null)) {
?>

        <div class="text-center">
            <?php echo PluginStr($this, "trysearchingforfriends", 'group', (is_string($tmp=(isset($this->scope["searchingforfriends"]) ? $this->scope["searchingforfriends"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>

        </div>
    <?php 
}
elseif ((isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>

        <?php if ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'none' && (isset($this->scope["friendscontrol"]) ? $this->scope["friendscontrol"] : null) == 'auto') {
?>

            <?php echo (isset($this->scope["newfriendform"]) ? $this->scope["newfriendform"] : null);?>

        <?php 
}
elseif ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'none' && (isset($this->scope["friendscontrol"]) ? $this->scope["friendscontrol"] : null) == 'auth') {
?>

        <div class="text-center">
            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/requestfriendship.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;returnto=view">
                <?php echo PluginStr($this, 'requestfriendship', 'group', null, null, null, null, null);?>

            </a>
        </div>
        <?php 
}
elseif ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'requestedfriendship') {
?>

        <div class="text-center">
            <?php echo PluginStr($this, 'friendshiprequested', 'group', null, null, null, null, null);?>

        </div>
        <?php 
}?>

    <?php 
}?>

<?php 
}?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>