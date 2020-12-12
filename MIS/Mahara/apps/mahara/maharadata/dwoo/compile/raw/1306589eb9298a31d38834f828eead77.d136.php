<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="list-group">
    <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["items"]) ? $this->scope["items"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['item'])
	{
/* -- foreach start output */
?>

    <div class="list-group-item flush">
        <h3 class="text-inline list-group-item-heading"><a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'homeurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></h3>
        <span class="text-small text-midtone"> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'roledisplay',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["item"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</span>
    </div>
    <?php 
/* -- foreach end output */
	}
}?>

</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>