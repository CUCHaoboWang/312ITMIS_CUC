<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?><ul class="nav topright-menu">
    <?php if (! (isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null) && ! (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) && (isset($this->scope["languageform"]) ? $this->scope["languageform"] : null)) {
?>

        <li id="language" class="language-form">
            <?php echo (isset($this->scope["languageform"]) ? $this->scope["languageform"] : null);?>

        </li>
    <?php 
}?>

    <?php if (! (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) && ! (isset($this->scope["SHOWLOGINBLOCK"]) ? $this->scope["SHOWLOGINBLOCK"] : null) && ! (isset($this->scope["LOGINPAGE"]) ? $this->scope["LOGINPAGE"] : null)) {
?>

        <li id="loginlink" class="has-icon login-link">
            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>?login">
                <span class="icon icon-sign-in-alt" role="presentation" aria-hidden="true"></span>
                <span><?php echo PluginStr($this, "login", 'mahara', null, null, null, null, null);?></span>
            </a>
        </li>
    <?php 
}?>

</ul>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>