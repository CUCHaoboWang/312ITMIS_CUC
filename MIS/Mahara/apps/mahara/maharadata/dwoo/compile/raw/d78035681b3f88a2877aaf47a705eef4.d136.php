<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (function_exists('PluginCleanHtml')===false)
	$this->getLoader()->loadPlugin('PluginCleanHtml');
/* end template head */ ob_start(); /* template body */ ;
if (! (isset($this->scope["items"]) ? $this->scope["items"] : null)) {
?>

    <div class="card-body">
        <p class="lead text-small"><?php echo PluginStr($this, 'nomessages', 'blocktype.inbox', null, null, null, null, null);?></p>
    </div>
<?php 
}
else {
?>

    <div id="inboxblock" class="inboxblock list-group">
        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["items"]) ? $this->scope["items"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['i'])
	{
/* -- foreach start output */
?>

        <div class="collapsible list-group-item flush-collapsible<?php if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'read',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?> js-card-unread<?php 
}?>" data-requesturl="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>module/multirecipientnotification/indexin.json.php">
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>

                <h3 class="title list-group-item-heading"><a class="collapsed link-block<?php if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'read',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?> unread<?php 
}?>" data-toggle="collapse" href="#message_content_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-id="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-list="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'table',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" aria-expanded="false">
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'usermessage') {
?>

                        <span class="icon icon-envelope text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'institutionmessage') {
?>

                        <span class="icon icon-university text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'feedback') {
?>

                        <span class="icon icon-comments text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'annotationfeedback') {
?>

                        <span class="icon icon-comments-o text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true) == 'wallpost') {
?>

                        <span class="icon icon-wall text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}
else {
?>

                        <span class="icon icon-wrench text-default left" role="presentation" aria-hidden="true"></span>
                    <?php 
}?>

                    <span class="sr-only"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'strtype',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                    <span class="subject"><?php echo str_shorten_html($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true), 50, true);?></span>
                    <span class="icon icon-chevron-down collapse-indicator float-right" role="presentation" aria-hidden="true"></span>
                </a></h3>
            <?php 
}?>

            <div class="collapse" id="message_content_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>

                    <p class="content-text"><?php echo PluginCleanHtml($this, $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true), false);?></p>
                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>

                        <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-small">
                            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'urltext',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {

echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'urltext',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
else {

echo PluginStr($this, "more...", 'mahara', null, null, null, null, null);

}?> <span class="icon icon-arrow-right mls icon-sm" role="presentation" aria-hidden="true"></span>
                        </a>
                    <?php 
}?>

                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canreplyall',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>

                    <a title="<?php echo PluginStr($this, 'replyall', 'module.multirecipientnotification', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>module/multirecipientnotification/sendmessage.php?replyto=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&returnto=outbox" class="text-small">
                        <span class="icon icon-reply-all left" role="presentation" aria-hidden="true"></span>
                        <?php echo PluginStr($this, 'replyall', 'module.multirecipientnotification', null, null, null, null, null);?>

                    </a>
                    <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'canreply',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>

                        <a title="<?php echo PluginStr($this, 'reply', 'module.multirecipientnotification', null, null, null, null, null);?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>module/multirecipientnotification/sendmessage.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fromusr',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if (! $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'startnewthread',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>&replyto=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>&returnto=outbox" class="text-small">
                            <span class="icon icon icon-reply left" role="presentation" aria-hidden="true"></span>
                            <?php echo PluginStr($this, 'reply', 'module.multirecipientnotification', null, null, null, null, null);?>

                        </a>
                    <?php 
}?>

                <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) {
?>

                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="text-small"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                <?php 
}
else {
?>

                    <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php 
}?>

            </div>
        </div>
        <?php 
/* -- foreach end output */
	}
}?>

    </div>
    <?php if ((isset($this->scope["morelink"]) ? $this->scope["morelink"] : null)) {
?>

    <div class="artefact-detail-link">
        <a class="link-blocktype last" href="<?php echo (is_string($tmp=$this->scope["morelink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <span class="icon icon-arrow-circle-right" role="presentation" aria-hidden="true"></span>
        <?php echo PluginStr($this, 'More', 'blocktype.inbox', null, null, null, null, null);?></a>
    </div>
    <?php 
}?>

    <script>
    jQuery(document).trigger('pageupdated');
    </script>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>