<?php
/* template head */
if (function_exists('PluginCleanHtml')===false)
	$this->getLoader()->loadPlugin('PluginCleanHtml');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
if ((isset($this->scope["profileinfo"]) ? $this->scope["profileinfo"] : null)) {
?>

    <?php if (! (isset($this->scope["profileinfo"]["nodata"]) ? $this->scope["profileinfo"]["nodata"]:null)) {
?>

    <div class="card-body flush">
    <?php 
}?>

    <?php if ((isset($this->scope["profileiconpath"]) ? $this->scope["profileiconpath"] : null)) {
?>

        <div class="user-icon float-right user-icon-60">
            <img src="<?php echo (is_string($tmp=$this->scope["profileiconpath"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["profileiconalt"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
        </div>
    <?php 
}?>

    <?php if ((isset($this->scope["profileinfo"]["introduction"]) ? $this->scope["profileinfo"]["introduction"]:null)) {
?>

        <?php echo PluginCleanHtml($this, (isset($this->scope["profileinfo"]["introduction"]) ? $this->scope["profileinfo"]["introduction"]:null), false);?>

    <?php 
}?>

    <?php if (is_array((is_string($tmp=(isset($this->scope["profileinfo"]["internalprofiles"]) ? $this->scope["profileinfo"]["internalprofiles"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) && count((is_string($tmp=(isset($this->scope["profileinfo"]["internalprofiles"]) ? $this->scope["profileinfo"]["internalprofiles"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) > 0) {
?>

        <ul class="unstyled profile-info">
        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["profileinfo"]["internalprofiles"]) ? $this->scope["profileinfo"]["internalprofiles"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['key']=>$this->scope['item'])
	{
/* -- foreach start output */
?>

            <li><strong><?php echo get_desired_field_title((is_string($tmp=(isset($this->scope["item"]["type"]) ? $this->scope["item"]["type"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>:</strong> <?php echo PluginCleanHtml($this, (isset($this->scope["item"]["description"]) ? $this->scope["item"]["description"]:null), false);?></li>
        <?php 
/* -- foreach end output */
	}
}?>

        </ul>
    <?php 
}?>

    <?php if ((isset($this->scope["profileinfo"]["socialprofiles"]) ? $this->scope["profileinfo"]["socialprofiles"]:null)) {
?>

        <h3 class="sr-only"><?php echo PluginStr($this, 'socialprofiles', 'artefact.internal', null, null, null, null, null);?></h3>
        <ul class="unstyled profile-info">
        <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["profileinfo"]["socialprofiles"]) ? $this->scope["profileinfo"]["socialprofiles"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['item'])
	{
/* -- foreach start output */
?>

            <li><strong><?php echo (is_string($tmp=$this->scope["item"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>:</strong>
                <?php if ((isset($this->scope["item"]["link"]) ? $this->scope["item"]["link"]:null)) {
?><a href="<?php echo (is_string($tmp=$this->scope["item"]["link"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->scope["item"]["link"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}
echo PluginCleanHtml($this, (isset($this->scope["item"]["title"]) ? $this->scope["item"]["title"]:null), false);
if ((isset($this->scope["item"]["link"]) ? $this->scope["item"]["link"]:null)) {
?></a><?php 
}?>

            </li>
        <?php 
/* -- foreach end output */
	}
}?>

        </ul>
    <?php 
}?>

    <?php if ((isset($this->scope["profileinfo"]["nodata"]) ? $this->scope["profileinfo"]["nodata"]:null)) {
?>

        <p class="editor-description"><?php echo (is_string($tmp=$this->scope["profileinfo"]["nodata"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></p>
    <?php 
}?>

    <?php if (! (isset($this->scope["profileinfo"]["nodata"]) ? $this->scope["profileinfo"]["nodata"]:null)) {
?>

    </div>
    <?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>