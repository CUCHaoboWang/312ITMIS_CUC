<?php
/* template head */
if (function_exists('PluginProfileUrl')===false)
	$this->getLoader()->loadPlugin('PluginProfileUrl');
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?>    <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['as']=>$this->scope['view'])
	{
/* -- foreach start output */
?>

        <li class="list-group-item flush">
            <h3 class="title list-group-item-heading">
                <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
            </h3>
            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {
?>

                <div class="groupuserdate text-small">
                <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'group',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true) && (isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>

                <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',    1 => '->',  ),  2 =>   array (    0 => 'groupdata',    1 => 'homeurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'owner',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true) && (isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) {
?>

                    <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'anonymous',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {
?>

                        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'staff_or_admin',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {
?>

                            <?php echo $this->assignInScope((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'realauthor');?>

                            <?php echo $this->assignInScope(PluginProfileUrl($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'user',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), true, false), 'realauthorlink');?>

                        <?php 
}?>

                        <?php echo $this->assignInScope(get_string('anonymoususer'), 'author');?>

                        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array('author.tpl', null, null, null, '_root', null));?>

                    <?php 
}
else {
?>

                        <a href="<?php echo PluginProfileUrl($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'user',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), true, false);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                    <?php 
}?>

                <?php 
}
else {
?>

                    <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'sharedby',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php 
}?>

                <span class="postedon text-midtone">
                - <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'mtime',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true) == $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'ctime',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) {

echo PluginStr($this, 'Created', 'mahara', null, null, null, null, null);

}
else {

echo PluginStr($this, 'Updated', 'mahara', null, null, null, null, null);

}?>

                <?php echo format_date(strtotime((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'mtime',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["view"]) ? $this->scope["view"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strftimedate');?></span>
                </div>
            <?php 
}?>

        </li>
    <?php 
/* -- foreach end output */
	}
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>