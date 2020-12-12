<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?><div class="pageactions">
    <div class="btn-group-vertical">
        <?php if ((isset($this->scope["ownprofile"]) ? $this->scope["ownprofile"] : null)) {
?>

            <a title="<?php echo PluginStr($this, 'editthisview', 'view', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?profile=1" class="btn btn-secondary">
                <span class="icon-pencil-alt icon left" role="presentation" aria-hidden="true"></span>
                <span class="sr-only"><?php echo PluginStr($this, 'editthisview', 'view', null, null, null, null, null);?></span>
            </a>
        <?php 
}?>

        <?php if ((isset($this->scope["loginas"]) ? $this->scope["loginas"] : null)) {
?>

            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/changeuser.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="btn-login btn btn-secondary" title="<?php echo (is_string($tmp=$this->scope["loginas"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <span class="icon-user-secret icon left" role="presentation" aria-hidden="true"></span>
                <span class="sr-only"><?php echo (is_string($tmp=$this->scope["loginas"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </a>

            <?php if ((($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get('admin') : null)) {
?>

            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/edit.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="btn-edit btn btn-secondary" title="<?php echo PluginStr($this, 'accountsettings', 'admin', null, null, null, null, null);?>">
                <span class="icon-cogs icon left" role="presentation" aria-hidden="true"></span>
                <span class="sr-only"><?php echo PluginStr($this, 'accountsettings', 'admin', null, null, null, null, null);?></span>
            </a>
            <?php 
}?>

        <?php 
}?>


        <?php if ((isset($this->scope["canmessage"]) ? $this->scope["canmessage"] : null)) {
?>

        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["mrmoduleactive"]) ? $this->scope["mrmoduleactive"] : null)) {
?>module/multirecipientnotification<?php 
}
else {
?>user<?php 
}?>/sendmessage.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;returnto=view" class="btn-message btn btn-secondary" title="<?php echo PluginStr($this, 'sendmessage', 'group', null, null, null, null, null);?>">
            <span class="icon-envelope icon left" role="presentation" aria-hidden="true"></span>
            <span class="sr-only"><?php echo PluginStr($this, 'sendmessage', 'group', null, null, null, null, null);?></span>
        </a>
        <?php 
}?>


        <?php if ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'existingfriend') {
?>

            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/removefriend.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;returnto=view" class="btn-del btn btn-secondary" title="<?php echo PluginStr($this, 'removefromfriendslist', 'group', null, null, null, null, null);?>">
                <span class="icon-user-times icon left text-danger" role="presentation" aria-hidden="true"></span>
                <span class="sr-only"><?php echo PluginStr($this, 'removefromfriendslist', 'group', null, null, null, null, null);?></span>
            </a>

        <?php 
}
elseif ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'none' && (isset($this->scope["friendscontrol"]) ? $this->scope["friendscontrol"] : null) == 'auto') {
?>


        <?php echo (isset($this->scope["newfriendform"]) ? $this->scope["newfriendform"] : null);?>


        <?php 
}
elseif ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'none' && (isset($this->scope["friendscontrol"]) ? $this->scope["friendscontrol"] : null) == 'auth') {
?>

        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/requestfriendship.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;returnto=view" class="btn-friend btn btn-secondary" title="<?php echo PluginStr($this, 'requestfriendship', 'group', null, null, null, null, null);?>">
            <span class="icon-user-plus icon left" role="presentation" aria-hidden="true"></span>
            <span class="sr-only"><?php echo PluginStr($this, 'requestfriendship', 'group', null, null, null, null, null);?></span>
        </a>
        <?php 
}?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>