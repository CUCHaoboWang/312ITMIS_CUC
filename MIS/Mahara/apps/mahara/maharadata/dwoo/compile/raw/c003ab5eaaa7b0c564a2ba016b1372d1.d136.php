<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header.tpl", null, null, null, '_root', null));?>

<a title="<?php echo PluginStr($this, 'composemessagedesc', 'module.multirecipientnotification', null, null, null, null, null);?>" class="btn-with-heading btn-lg btn btn-secondary" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>module/multirecipientnotification/sendmessage.php">
    <span class="icon icon-edit icon-regular left" role="presentation" aria-hidden="true"></span>
    <?php echo PluginStr($this, 'composemessage', 'module.multirecipientnotification', null, null, null, null, null);?>

</a>

<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("module:multirecipientnotification:indexsearch.tpl", null, null, null, '_root', null, array('searchdata' => (is_string($tmp=(isset($this->scope["searchdata"]) ? $this->scope["searchdata"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'boxtype' => 'inbox')));?>

<?php if ((isset($this->scope["activitylist"]["count"]) ? $this->scope["activitylist"]["count"]:null) > 0) {
?>


    <div id="notifications" class="notification-parent view-container" data-requesturl="indexin.json.php">

        <div class="btn-group bulk-actions" role="group">
            <label class="btn btn-secondary" for="selectall">
                <input type="checkbox" name="selectall" id="selectall" data-togglecheckbox="tocheck">
                <span class="sr-only"><?php echo PluginStr($this, 'selectall', 'activity', null, null, null, null, null);?></span>
            </label>

            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <?php echo PluginStr($this, 'bulkactions', 'admin', null, null, null, null, null);?>  <span class="icon icon-caret-down right"></span>
            </button>

            <div class="activity-buttons dropdown-menu" role="menu">
                <button class="btn btn-link text-left" data-action="markasread">
                    <?php echo PluginStr($this, 'markasread', 'activity', null, null, null, null, null);?>

                </button>
                <button class="btn btn-link btn-link-danger text-left" data-action="deleteselected">
                    <?php echo PluginStr($this, 'delete', 'mahara', null, null, null, null, null);?>

                </button>
                <a class="btn btn-link btn-link-danger text-left" href="#delete_all_notifications_submit" data-triggersubmit="delete_all_notifications_submit">
                    <?php echo PluginStr($this, 'deleteallnotifications', 'activity', null, null, null, null, null);?>

                </a>
            </div>
        </div>
        <form method="post" class="form-inline form-select-filter pieform form-as-button">
            <div class="form-group">
                <label class="sr-only" for="notifications_type"><?php echo PluginStr($this, 'type', 'activity', null, null, null, null, null);?>:</label>
                <div class="input-group select-group">
                    <div class="input-group-prepend" id="icon-addon-filter">
                        <span class="icon icon-filter" role="presentation" aria-hidden="true"></span>
                    </div>
                    <div class="select form-group">
                        <div class="picker">
                            <select class="form-control select js-notifications-type" id="notifications_type" name="type">
                            <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["options"]) ? $this->scope["options"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['t']=>$this->scope['name'])
	{
/* -- foreach start output */
?>

                                <option value="<?php echo (is_string($tmp=$this->scope["t"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((isset($this->scope["type"]) ? $this->scope["type"] : null) == (isset($this->scope["t"]) ? $this->scope["t"] : null)) {
?> selected<?php 
}?>>
                                    <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                </option>
                            <?php 
/* -- foreach end output */
	}
}?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form class="form-notificationlist js-notifications" name="notificationlist" method="post">
            <div id="activitylist" class="notification-list">
                <?php echo (isset($this->scope["activitylist"]["html"]) ? $this->scope["activitylist"]["html"]:null);?>

            </div>
        </form>

        <?php echo (isset($this->scope["deleteall"]) ? $this->scope["deleteall"] : null);?>

        <div class="fullwidth">
            <?php echo (isset($this->scope["activitylist"]["pagination"]) ? $this->scope["activitylist"]["pagination"]:null);?>

        </div>
    </div>
<?php 
}
else {
?>

<div class="notifications-empty" id="notifications">
    <p class="no-results">
        <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'searchtext',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["searchdata"]) ? $this->scope["searchdata"]:null), true)) {
?>

            <?php echo PluginStr($this, 'noresultsfound', 'activity', null, null, null, null, null);?>

        <?php 
}
else {
?>

            <?php echo PluginStr($this, 'yourinboxisempty', 'activity', null, null, null, null, null);?>

        <?php 
}?>

    </p>
</div>
<?php 
}?>


<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("footer.tpl", null, null, null, '_root', null));?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>