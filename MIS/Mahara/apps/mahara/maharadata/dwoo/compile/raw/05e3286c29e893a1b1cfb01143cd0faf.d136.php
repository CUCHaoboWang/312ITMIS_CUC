<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ?>



<?php if ((isset($this->scope["sectiontabs"]) ? $this->scope["sectiontabs"] : null)) {
?>

<form id="report" method="post">
    <select id="users" class="d-none" multiple="multiple" name="users[]">
    <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["users"]) ? $this->scope["users"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['id']=>$this->scope['item'])
	{
/* -- foreach start output */
?>

    <option selected="selected" value="<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></option>
    <?php 
/* -- foreach end output */
	}
}?>

    </select>
    <ul class="nav nav-pills nav-inpage">
        <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["sectiontabs"]) ? $this->scope["sectiontabs"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['item'])
	{
/* -- foreach start output */
?>

          <li <?php if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
?> class="active"<?php 
}?>>
            <button type="submit" class="btn-link btn<?php if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
?> active<?php 
}?>" name="report:<?php echo (is_string($tmp=$this->scope["item"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" value="<?php echo (is_string($tmp=$this->scope["item"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
              <span class="text"><?php echo (is_string($tmp=$this->scope["item"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
               <span class="accessible-hidden sr-only">(<?php if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
?> <?php echo PluginStr($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span>
            </button>
          </li>
        <?php 
/* -- foreach end output */
	}
}?>

    </ul>
</form>
<?php 
}
else {
?>

<ul class="nav nav-pills nav-inpage">
    <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['item'])
	{
/* -- foreach start output */
?>

        <?php if ((isset($this->scope["item"]["url"]) ? $this->scope["item"]["url"]:null)) {
?>

        <li class="<?php if ((isset($this->scope["item"]["class"]) ? $this->scope["item"]["class"]:null)) {

echo (is_string($tmp=$this->scope["item"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php 
}
if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
?> current-tab active<?php 
}?>">
            <a <?php if ((isset($this->scope["item"]["tooltip"]) ? $this->scope["item"]["tooltip"]:null)) {
?>title="<?php echo (is_string($tmp=$this->scope["item"]["tooltip"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php 
}?> class="<?php if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
?> current-tab<?php 
}?>" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php if ((isset($this->scope["item"]["iconclass"]) ? $this->scope["item"]["iconclass"]:null)) {
?><span class="<?php echo (is_string($tmp=$this->scope["item"]["iconclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> left"></span><?php 
}?>

                <?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <span class="accessible-hidden sr-only">(<?php echo PluginStr($this, 'tab', 'mahara', null, null, null, null, null);
if ((isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) {
?> <?php echo PluginStr($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span>
            </a>
        </li>
        <?php 
}?>

    <?php 
/* -- foreach end output */
	}
}?>

</ul>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>