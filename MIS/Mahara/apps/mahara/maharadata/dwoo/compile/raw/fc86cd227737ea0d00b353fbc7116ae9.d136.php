<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (function_exists('PluginStrShortenText')===false)
	$this->getLoader()->loadPlugin('PluginStrShortenText');
/* end template head */ ob_start(); /* template body */ ?><div class="card">
    <h2 class="card-header has-link">
        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>tags.php"><?php echo PluginStr($this, "tags", 'mahara', null, null, null, null, null);?> <span class="icon icon-arrow-right float-right" role="presentation" aria-hidden="true"></span></a>
    </h2>
    <div class="tagblock card-body">
        <?php if ((isset($this->scope["sbdata"]["tags"]) ? $this->scope["sbdata"]["tags"]:null)) {
?>

            <?php 
$_fh4_data = (is_string($tmp=(isset($this->scope["sbdata"]["tags"]) ? $this->scope["sbdata"]["tags"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh4_data) == true)
{
	foreach ($_fh4_data as $this->scope['tag'])
	{
/* -- foreach start output */
?>

                <a class="tag"<?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'size',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true)) {
?> style="font-size: <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'size',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["tag"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>em;"<?php 
}?> href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>tags.php?tag=<?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tagurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true);?>" title="<?php echo PluginStr($this, 'nitems', 'mahara', null, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'count',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?>"><?php echo PluginStrShortenText($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'tag',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["tag"]) ? $this->scope["tag"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 30, false);?></a> &nbsp;
            <?php 
/* -- foreach end output */
	}
}?>

        <?php 
}
else {
?>

            <div class="no-results-small text-small"><?php echo PluginStr($this, 'youhavenottaggedanythingyet', 'mahara', null, null, null, null, null);?></div>
        <?php 
}?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>