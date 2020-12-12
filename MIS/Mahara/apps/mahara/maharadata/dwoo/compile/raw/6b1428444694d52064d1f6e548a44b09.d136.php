<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?><form action="<?php echo (is_string($tmp=$this->scope["boxtype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.php" method="post" class="pieform form-inline with-heading">
    <div>
        <label class="inline-label"><?php echo PluginStr($this, 'labelsearch', 'module.multirecipientnotification', null, null, null, null, null);?></label>
        <input type="text" name="search" id="search" autofocus="autofocus" value="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'searchtext',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["searchdata"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <input type="hidden" name="searcharea" value="All_data">
        <button type="submit" name="buttonsubmit" class="btn btn-secondary submitcancel submit"><?php echo PluginStr($this, 'go', 'mahara', null, null, null, null, null);?></button>
    </div>
</form>
<?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'searchtext',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["searchdata"]) ? $this->scope["searchdata"]:null), true)) {
?>

<div class="notifications-tabswrap">
    <span class="accessible-hidden sr-only"><?php echo PluginStr($this, 'messagetype', 'activity', null, null, null, null, null);?></span>
    <ul class="in-page-tabs searchtab nav nav-tabs">
        <?php 
$_fh4_data = (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tabs',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["searchdata"]) ? $this->scope["searchdata"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh4_data) == true)
{
	foreach ($_fh4_data as $this->scope['term'])
	{
/* -- foreach start output */
?>

        <li class="<?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'searcharea',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["searchdata"]) ? $this->scope["searchdata"]:null), true) === $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["term"]) ? $this->scope["term"]:null), true)) {
?>current-tab active<?php 
}?>">
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["term"]) ? $this->scope["term"]:null), true) > 0) {
?>

                <a class="<?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'searcharea',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["searchdata"]) ? $this->scope["searchdata"]:null), true) === $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["term"]) ? $this->scope["term"]:null), true)) {
?>current-tab active<?php 
}?>" href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'searchurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["searchdata"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["term"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php echo PluginStr($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tag',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["term"]) ? $this->scope["term"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'module.multirecipientnotification', null, null, null, null, null);
if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["term"]) ? $this->scope["term"]:null), true) > 0) {
?> <span class="countresults">(<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["term"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</span><?php 
}?>

                </a>
            <?php 
}
else {
?>

                <a class="inactive">
                    <?php echo PluginStr($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tag',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["term"]) ? $this->scope["term"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'module.multirecipientnotification', null, null, null, null, null);?>

                    <span class="accessible-hidden sr-only">(<?php echo PluginStr($this, 'tab', 'mahara', null, null, null, null, null);?> <?php echo PluginStr($this, 'disabled', 'mahara', null, null, null, null, null);?>)</span>
                </a>
            <?php 
}?>

        </li>
        <?php 
/* -- foreach end output */
	}
}?>

    </ul>
</div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>