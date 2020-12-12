<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (function_exists('PluginProfileUrl')===false)
	$this->getLoader()->loadPlugin('PluginProfileUrl');
if (function_exists('PluginDisplayDefaultName')===false)
	$this->getLoader()->loadPlugin('PluginDisplayDefaultName');
if (function_exists('PluginDisplayName')===false)
	$this->getLoader()->loadPlugin('PluginDisplayName');
/* end template head */ ob_start(); /* template body */ ?><div class="card">
    <h2 class="card-header">
        <?php echo PluginStr($this, "peopleonline", 'mahara', (is_string($tmp=(isset($this->scope["sbdata"]["count"]) ? $this->scope["sbdata"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>

        <br>
        <span id="lastminutes" class="text-small text-midtone">(<?php echo PluginStr($this, "lastminutes", 'mahara', (is_string($tmp=(isset($this->scope["sbdata"]["lastminutes"]) ? $this->scope["sbdata"]["lastminutes"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>)</span>
    </h2>
    <ul class="list-group">
        <?php 
$_fh5_data = (is_string($tmp=(isset($this->scope["sbdata"]["users"]) ? $this->scope["sbdata"]["users"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh5_data) == true)
{
	foreach ($_fh5_data as $this->scope['user'])
	{
/* -- foreach start output */
?>

            <li class="list-unstyled list-group-item-link list-group-item">
                <a href="<?php echo PluginProfileUrl($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), true, false);?>" class="online-user">
                    <span class="user-icon user-icon-20">
                        <img src="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'profileiconurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["user"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo PluginStr($this, 'profileimagetext', 'mahara', null, PluginDisplayDefaultName($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null, null, null);?>" class="profile-icon-container">
                    </span>
                    <span class="user-name text-small">
                        <?php echo PluginDisplayName($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, false, false);?>

                        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'loggedinfrom',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["user"]) ? $this->scope["user"]:null), true)) {
?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'loggedinfrom',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["user"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)<?php 
}?>

                    </span>
                </a>
            </li>
        <?php 
/* -- foreach end output */
	}
}?>

    </ul>
    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/online.php" class="online-users card-footer text-small" id="allonline">
        <?php echo PluginStr($this, "allpeopleonline", 'mahara', null, null, null, null, null);?>

        <span class="icon icon-arrow-circle-right float-right" role="presentation" aria-hidden="true"></span>
    </a>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>