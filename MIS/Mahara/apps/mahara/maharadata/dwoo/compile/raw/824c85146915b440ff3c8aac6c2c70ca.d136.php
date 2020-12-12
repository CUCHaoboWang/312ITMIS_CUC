<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><input type="checkbox" <?php echo (isset($this->scope["baseattributes"]) ? $this->scope["baseattributes"] : null);?>

    <?php if ((isset($this->scope["arialabel"]) ? $this->scope["arialabel"] : null)) {
?> aria-label="<?php echo (is_string($tmp=$this->scope["arialabel"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?>

    <?php if ((isset($this->scope["checked"]) ? $this->scope["checked"] : null)) {
?> checked="checked"<?php 
}?>

>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>