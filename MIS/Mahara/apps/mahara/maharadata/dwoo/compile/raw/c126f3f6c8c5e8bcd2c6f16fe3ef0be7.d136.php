<?php
/* template head */
if (function_exists('PluginProfileIconUrl')===false)
	$this->getLoader()->loadPlugin('PluginProfileIconUrl');
if (function_exists('PluginDisplayDefaultName')===false)
	$this->getLoader()->loadPlugin('PluginDisplayDefaultName');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
/* end template head */ ob_start(); /* template body */ ?><div class="pageheader profileheader pageheader-actions">
    <div class="container pageheader-content">
        <div class="row">
            <div class="<?php if ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'pending') {
?>col-lg-6 <?php 
}
else {
?>col-md-12<?php 
}?> main">

                <h1 id="viewh1" class="user-icon-name page-header">
                    <span class="user-icon user-icon-50 float-left">
                        <img src="<?php echo PluginProfileIconUrl($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 50, 50);?>" alt="<?php echo PluginStr($this, 'profileimagetext', 'mahara', null, PluginDisplayDefaultName($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null, null, null);?>" />
                    </span>
                    <?php if ((isset($this->scope["pageheadinghtml"]) ? $this->scope["pageheadinghtml"] : null)) {
?>

                    <span><?php echo (isset($this->scope["pageheadinghtml"]) ? $this->scope["pageheadinghtml"] : null);?></span>
                    <?php 
}?>

                </h1>

                <div class="text-small">
                    <?php if ((isset($this->scope["siterole"]) ? $this->scope["siterole"] : null)) {
?>

                    <div>
                        <span class="icon icon-university left" role="presentation" aria-hidden="true"></span>
                        <?php echo (isset($this->scope["siterole"]) ? $this->scope["siterole"] : null);?>

                    </div>
                    <?php 
}?>

                    <?php if ((isset($this->scope["institutions"]) ? $this->scope["institutions"] : null)) {
?>

                    <div>
                        <span class="icon icon-university left" role="presentation" aria-hidden="true"></span>
                        <?php echo (isset($this->scope["institutions"]) ? $this->scope["institutions"] : null);?>

                    </div>
                    <?php 
}?>

                    <?php if ((isset($this->scope["invitedlist"]) ? $this->scope["invitedlist"] : null)) {
?>

                    <div>
                        <span class="icon icon-users left" role="presentation" aria-hidden="true"></span>
                        <?php echo PluginStr($this, 'groupinvitesfrom', 'group', null, null, null, null, null);?>

                        <?php echo (is_string($tmp=$this->scope["invitedlist"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                    </div>
                    <?php 
}?>

                    <?php if ((isset($this->scope["requestedlist"]) ? $this->scope["requestedlist"] : null)) {
?>

                    <div>
                        <span class="icon icon-users left" role="presentation" aria-hidden="true"></span>
                        <?php echo PluginStr($this, 'requestedmembershipin', 'group', null, null, null, null, null);?>

                        <?php echo (is_string($tmp=$this->scope["requestedlist"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                    </div>
                    <?php 
}?>

                </div>

                <?php if ((isset($this->scope["inviteform"]) ? $this->scope["inviteform"] : null) || (isset($this->scope["addform"]) ? $this->scope["addform"] : null)) {
?>

                    <?php if ((isset($this->scope["inviteform"]) ? $this->scope["inviteform"] : null)) {
?>

                        <?php echo (isset($this->scope["inviteform"]) ? $this->scope["inviteform"] : null);?>

                    <?php 
}?>

                    <?php if ((isset($this->scope["addform"]) ? $this->scope["addform"] : null)) {
?>

                        <?php echo (isset($this->scope["addform"]) ? $this->scope["addform"] : null);?>

                    <?php 
}?>

                <?php 
}?>


                <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/profileactions.tpl", null, null, null, '_root', null));?>

            </div>

            <?php if ((isset($this->scope["relationship"]) ? $this->scope["relationship"] : null) == 'pending') {
?>

                <div class="pendingfriendscard col-lg-6">
                    <div class="attentionmessage card bg-warning">
                        <h2 class="card-header"><?php echo PluginStr($this, 'whymakemeyourfriend', 'group', null, null, null, null, null);?></h2>
                        <div class="card-body"><?php echo (is_string($tmp=$this->scope["message"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
                        <div class="has-form card-footer">
                            <div class="btn btn-secondary btn-sm">
                                <span class="icon icon-check text-success left" role="presentation" aria-hidden="true"></span>
                                <span class="text-small acceptfriendbutton"><?php echo (isset($this->scope["acceptform"]) ? $this->scope["acceptform"] : null);?></span>
                            </div>
                            <a class="btn btn-secondary btn-sm" id="approve_deny_friendrequest_deny" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/denyrequest.php?id=<?php echo (is_string($tmp=$this->scope["USERID"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&returnto=view">
                                <span class="icon icon-ban left text-danger" role="presentation" aria-hidden="true"></span>
                                <span class="link-unstyled"><?php echo PluginStr($this, 'denyrequest', 'group', null, null, null, null, null);?></span>
                            </a>
                      </div>
                    </div>
                </div>
            <?php 
}?>


        </div>
    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>