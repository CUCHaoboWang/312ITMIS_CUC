<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["LANGCHOICES"]) ? $this->scope["LANGCHOICES"] : null)) {
?>

<nav>
  <div id="main-language" class="nav collapse navbar-collapse nav-language" role="tabcard">
    <ul id="navadmin" class="nav navbar-nav"><?php $_fh14_data = (is_string($tmp=(isset($this->scope["LANGCHOICES"]) ? $this->scope["LANGCHOICES"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isTraversable($_fh14_data) == true){foreach ($_fh14_data as $this->scope['key']=>$this->scope['item']){/* -- foreach start output */?><li class="<?php if ((isset($this->scope["LANGCURRENT"]) ? $this->scope["LANGCURRENT"] : null) == (isset($this->scope["key"]) ? $this->scope["key"] : null)) {?>active<?php }?>"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>changelanguage.php?lang=<?php echo (is_string($tmp=$this->scope["key"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li><?php /* -- foreach end output */}}?>

    </ul>
  </div>
</nav>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>