<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
/* end template head */ ob_start(); /* template body */ ;
echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header.tpl", null, null, null, '_root', null));?>

    <?php if (! (isset($this->scope["noedit"]) ? $this->scope["noedit"] : null)) {
?>

    <div class="btn-top-right btn-group btn-group-top <?php if ((isset($this->scope["GROUP"]) ? $this->scope["GROUP"] : null)) {
?> pagetabs<?php 
}?>">
        <a id="addview-button" class="btn btn-secondary" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/editlayout.php?new=1<?php echo (is_string($tmp=$this->scope["urlparamsstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <span class="icon icon-plus left" role="presentation" aria-hidden="true"></span>
            <?php echo PluginStr($this, 'add', 'mahara', null, null, null, null, null);?>

        </a>
        <a id="copyview-button" class="btn btn-secondary" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/choosetemplate.php?searchcollection=1<?php echo (is_string($tmp=$this->scope["urlparamsstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <span class="icon icon-regular icon-copy left" role="presentation" aria-hidden="true"></span>
            <?php echo PluginStr($this, 'copy', 'mahara', null, null, null, null, null);?>

        </a>
    </div>
    <?php 
}?>

    <?php echo (isset($this->scope["searchform"]) ? $this->scope["searchform"] : null);?>


    <div class="grouppageswrap view-container">

            <?php if ((isset($this->scope["views"]) ? $this->scope["views"] : null)) {
?>

                <div id="myviews" class="row">
                <?php echo (isset($this->scope["viewresults"]) ? $this->scope["viewresults"] : null);?>

                </div>
            <?php 
}
else {
?>

                <div class="no-results">
                    <?php if ((isset($this->scope["GROUP"]) ? $this->scope["GROUP"] : null)) {
?>

                        <?php echo PluginStr($this, "noviewstosee", "group", null, null, null, null, null);?>

                    <?php 
}
elseif ((isset($this->scope["institution"]) ? $this->scope["institution"] : null)) {
?>

                        <?php echo PluginStr($this, "noviews1", "view", null, null, null, null, null);?>

                    <?php 
}
else {
?>

                        <?php echo PluginStr($this, "youhavenoviews1", "view", null, null, null, null, null);?>

                    <?php 
}?>

                </div>
            <?php 
}?>


    </div>
    <div tabindex="0" class="modal fade" id="addview-form">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="<?php echo PluginStr($this, 'Close', 'mahara', null, null, null, null, null);?>"><span aria-hidden="true">&times;</span></button>
                    <h1 class="modal-title">
                        <span class="icon icon-plus"></span>
                        <?php echo PluginStr($this, 'confirmaddtitle', 'view', null, null, null, null, null);?>

                    </h1>
                </div>
                <div class="modal-body">
                    <p><?php echo PluginStr($this, 'confirmadddesc', 'view', null, null, null, null, null);?></p>
                    <div class="btn-group">
                        <button id="add-collection-button" type="button" class="btn btn-secondary"><span class="icon icon-folder-open"></span> <?php echo PluginStr($this, 'Collection', 'collection', null, null, null, null, null);?></button>
                        <button id="add-view-button" type="button" class="btn btn-secondary"><span class="icon icon-regular icon-file-alt"></span> <?php echo PluginStr($this, 'view', 'mahara', null, null, null, null, null);?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    var addurl = $j("#addview-button").attr('href');

    $j("#addview-button").on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $j("#addview-form").modal('show');
    });

    $j("#add-view-button").on('click', function() {
        window.location = addurl;
    });
    $j("#add-collection-button").on('click', function() {
        // redirect to the collection section
        var url = addurl.replace(/view\/editlayout/, 'collection/edit');
        window.location = url;
    });

    $('.modal').on('shown.bs.modal', function() {
        $('#add-collection-button').trigger("focus");
    });
    $('.modal').on('d-none.bs.modal', function() {
        $('#addview-button').trigger("focus");
    });
    </script>

<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("footer.tpl", null, null, null, '_root', null));?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>