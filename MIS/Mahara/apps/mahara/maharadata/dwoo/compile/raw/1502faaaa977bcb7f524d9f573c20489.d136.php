<?php
/* template head */
if (function_exists('PluginProfileIconUrl')===false)
	$this->getLoader()->loadPlugin('PluginProfileIconUrl');
if (function_exists('PluginDisplayDefaultName')===false)
	$this->getLoader()->loadPlugin('PluginDisplayDefaultName');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?><div id="wall" class="wall list-group list-group-lite list-group-top-border">
    <?php if ((isset($this->scope["wallmessage"]) ? $this->scope["wallmessage"] : null)) {
?>

        <div class="card-body lead text-small text-center"><?php echo (is_string($tmp=$this->scope["wallmessage"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
    <?php 
}?>

    <?php if ((isset($this->scope["wallposts"]) ? $this->scope["wallposts"] : null)) {
?>

        <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["wallposts"]) ? $this->scope["wallposts"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['wallpost'])
	{
/* -- foreach start output */
?>

            <div class="list-group-item <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'private',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["wallpost"]) ? $this->scope["wallpost"]:null), true)) {
?> list-group-item-private<?php 
}?> wallpost">
                <div class="usericon-heading">
                    <span class="user-icon user-icon-30 float-left" role="presentation" aria-hidden="true">
                        <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'profileurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["wallpost"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><img src="<?php echo PluginProfileIconUrl($this, (is_string($tmp=(isset($this->scope["wallpost"]) ? $this->scope["wallpost"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 30, 30);?>" alt="<?php echo PluginStr($this, 'profileimagetext', 'mahara', null, PluginDisplayDefaultName($this, (is_string($tmp=(isset($this->scope["wallpost"]) ? $this->scope["wallpost"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null, null, null);?>" /></a>
                    </span>
                    <h3 class="list-group-item-heading text-inline"><a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'profileurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["wallpost"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'displayname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["wallpost"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a><br /><span class="postedon text-small text-midtone"><?php echo format_date((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'postdate',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["wallpost"]) ? $this->scope["wallpost"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></span></h3>

                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'deletable',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["wallpost"]) ? $this->scope["wallpost"]:null), true)) {
?>

                    <div class="btn-group btn-group-top comment-item-buttons">
                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>blocktype/wall/deletepost.php?postid=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'postid',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["wallpost"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&return=<?php if ((isset($this->scope["wholewall"]) ? $this->scope["wholewall"] : null)) {
?>wall<?php 
}
else {
?>profile<?php 
}?>" class="btn btn-secondary btn-group-item form-as-button float-left">
                            <span class="icon icon-trash-alt text-danger" role="presentation" aria-hidden="true"></span>
                            <span class="sr-only"><?php echo PluginStr($this, 'delete', 'blocktype.wall', null, null, null, null, null);?></span>
                        </a>
                    </div>
                    <?php 
}?>

                </div>

                <div class="wallpost-text">
                    <?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'text',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["wallpost"]) ? $this->scope["wallpost"]:null), true);?>

                    <div class="metadata">
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'private',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["wallpost"]) ? $this->scope["wallpost"]:null), true)) {
?><em class="privatemessage"><?php echo PluginStr($this, 'wallpostprivate', 'blocktype.wall', null, null, null, null, null);?></em><?php 
}?>

                    </div>
                </div>

            </div>
        <?php 
/* -- foreach end output */
	}
}?>

    <?php 
}?>

</div>
<?php if (! (isset($this->scope["wholewall"]) ? $this->scope["wholewall"] : null)) {
?>

    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>blocktype/wall/wall.php?id=<?php echo (is_string($tmp=$this->scope["instanceid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="detail-link link-blocktype"><span class="icon icon-arrow-circle-right" role="presentation" aria-hidden="true"></span> <?php echo PluginStr($this, 'wholewall', 'blocktype.wall', null, null, null, null, null);?></a>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>