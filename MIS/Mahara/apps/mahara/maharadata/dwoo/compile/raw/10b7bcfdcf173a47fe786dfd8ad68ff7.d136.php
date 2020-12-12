<?php
/* template head */
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (class_exists('Dwoo\Plugins\Functions\PluginEscape')===false)
	$this->getLoader()->loadPlugin('PluginEscape');
if (function_exists('PluginCleanHtml')===false)
	$this->getLoader()->loadPlugin('PluginCleanHtml');
/* end template head */ ob_start(); /* template body */ ?>                <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh3_data) == true)
{
	foreach ($_fh3_data as $this->scope['view'])
	{
/* -- foreach start output */
?>

                <div class="card-quarter <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>card-collection<?php 
}
else {
?>card-view<?php 
}?>">
                    <div class="card <?php if ((isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null)) {
?> bg-submitted<?php 
}?>

                    <?php if ((isset($this->scope["view"]["template"]) ? $this->scope["view"]["template"]:null) == (isset($this->scope["sitetemplate"]) ? $this->scope["sitetemplate"] : null)) {
?> site-template<?php 
}?>">
                        <h2 class="card-header has-link">
                            <a class="title-link title"
                            href="
                                <?php if ((isset($this->scope["view"]["template"]) ? $this->scope["view"]["template"]:null) == (isset($this->scope["sitetemplate"]) ? $this->scope["sitetemplate"] : null)) {
?>

                                    <?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                <?php 
}
elseif (((is_string($tmp=(isset($this->scope["view"]["numviews"]) ? $this->scope["view"]["numviews"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null) && (isset($this->scope["view"]["numviews"]) ? $this->scope["view"]["numviews"]:null) == 0) {
?>

                                    <?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/views.php?id=<?php echo (is_string($tmp=$this->scope["view"]["collid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                <?php 
}
else {
?>

                                    <?php echo (is_string($tmp=$this->scope["view"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                <?php 
}?>"
                            title="<?php echo (is_string($tmp=$this->scope["view"]["displaytitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                                <?php echo (is_string($tmp=$this->scope["view"]["displaytitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                            </a>
                        </h2>
                        <div class="card-body<?php if ((isset($this->scope["view"]["coverimage"]) ? $this->scope["view"]["coverimage"]:null)) {
?> coverimage<?php 
}?>">
                            <?php if ((isset($this->scope["view"]["coverimage"]) ? $this->scope["view"]["coverimage"]:null) && (isset($this->scope["view"]["coverimageurl"]) ? $this->scope["view"]["coverimageurl"]:null)) {
?>

                            <div class="widget-heading">
                                <img src="<?php echo (is_string($tmp=$this->scope["view"]["coverimageurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"
                                <?php if ((isset($this->scope["view"]["coverimagedescription"]) ? $this->scope["view"]["coverimagedescription"]:null)) {
?>

                                    alt="<?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["coverimagedescription"]) ? $this->scope["view"]["coverimagedescription"]:null), 120, true));?>"
                                <?php 
}?>

                                width="100%">
                            </div>
                            <?php if ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'profile') {
?>

                            <div class="widget-detail"><p><?php echo PluginStr($this, 'profiledescription', 'mahara', null, null, null, null, null);?></p></div>
                            <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'dashboard') {
?>

                            <div class="widget-detail"><p><?php echo PluginStr($this, 'dashboarddescription', 'mahara', null, null, null, null, null);?></p></div>
                            <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'grouphomepage') {
?>

                            <div class="widget-detail"><p><?php echo PluginStr($this, 'grouphomepagedescription', 'view', null, null, null, null, null);?></p></div>
                            <?php 
}
elseif ((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null)) {
?>

                            <div class="widget-detail">
                                <p>
                                <?php if ((isset($this->scope["view"]["issitetemplate"]) ? $this->scope["view"]["issitetemplate"]:null) && (isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'portfolio') {
?>

                                   <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 160, true));?>

                                <?php 
}
else {
?>

                                   <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 120, true));?>

                                <?php 
}?>

                                </p>
                            </div>
                            <?php 
}?>

                            <?php 
}
else {
?>

                            <div class="detail text-small">
                                <?php if ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'profile') {
?>

                                    <p><?php echo PluginStr($this, 'profiledescription', 'mahara', null, null, null, null, null);?></p>
                                <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'dashboard') {
?>

                                    <p><?php echo PluginStr($this, 'dashboarddescription', 'mahara', null, null, null, null, null);?></p>
                                <?php 
}
elseif ((isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'grouphomepage') {
?>

                                    <p><?php echo PluginStr($this, 'grouphomepagedescription', 'view', null, null, null, null, null);?></p>
                                <?php 
}
elseif ((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null)) {
?>

                                    <p>
                                    <?php if ((isset($this->scope["view"]["issitetemplate"]) ? $this->scope["view"]["issitetemplate"]:null) && (isset($this->scope["view"]["type"]) ? $this->scope["view"]["type"]:null) == 'portfolio') {
?>

                                       <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 160, true));?>

                                    <?php 
}
else {
?>

                                       <?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 120, true));?>

                                    <?php 
}?>

                                  </p>
                                <?php 
}
else {
?>

                                &nbsp;
                                <?php 
}?>

                            </div>
                            <?php 
}?>

                        </div>
                        <div class="card-footer">
                            <div class="page-access">
                                <?php if ((isset($this->scope["view"]["accesslist"]) ? $this->scope["view"]["accesslist"]:null) || (isset($this->scope["view"]["manageaccess"]) ? $this->scope["view"]["manageaccess"]:null)) {
?>

                                    <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown" aria-expanded="false" title="<?php echo PluginStr($this, 'manageaccess', 'view', null, null, null, null, null);?>">
                                        <span class="icon icon-chevron-down open-indicator" role="presentation" aria-hidden="true"></span>
                                        <span class="icon <?php if (! (isset($this->scope["view"]["accesslist"]) ? $this->scope["view"]["accesslist"]:null)) {
?>icon-lock<?php 
}
else {
?>icon-unlock<?php 
}?> close-indicator" role="presentation" aria-hidden="true"></span>
                                        <span class="sr-only"><?php echo PluginStr($this, "accessrulesfor", "view", null, "".(is_string($tmp=(isset($this->scope["view"]["vtitle"]) ? $this->scope["view"]["vtitle"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."", null, null, null);?></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                      <?php if ((isset($this->scope["view"]["manageaccesssuspended"]) ? $this->scope["view"]["manageaccesssuspended"]:null)) {
?>

                                        <li class="view-details"><?php echo PluginStr($this, "pending", "view", null, null, null, null, null);?></li>
                                      <?php 
}
else {
?>

                                        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["view"]["manageaccess"]) ? $this->scope["view"]["manageaccess"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['manageitem'])
	{
/* -- foreach start output */
?>

                                        <li class="dropdown-item">
                                            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'accesstype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["manageitem"]) ? $this->scope["manageitem"]:null), true) == 'managesharing') {
?>

                                            <a class="seperator" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/accessurl.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>&collection=<?php echo (is_string($tmp=$this->scope["view"]["collid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>">
                                                <span class="icon <?php if ((isset($this->scope["view"]["locked"]) ? $this->scope["view"]["locked"]:null)) {
?>icon-lock<?php 
}
else {
?>icon-unlock<?php 
}?> left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'displayname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["manageitem"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                                <span class="sr-only"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'accessibilityname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["manageitem"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                            </a>
                                            <?php 
}?>

                                        </li>
                                        <?php 
/* -- foreach end output */
	}
}?>

                                        <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["view"]["accesslist"]) ? $this->scope["view"]["accesslist"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['accessitem'])
	{
/* -- foreach start output */
?>

                                        <li class="dropdown-item">
                                            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/accessurl.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>&collection=<?php echo (is_string($tmp=$this->scope["view"]["collid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?>">
                                            <?php if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'accesstype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true) == 'loggedin') {
?>

                                                <span class="icon icon-user-plus left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo PluginStr($this, "registeredusers", "view", null, null, null, null, null);?></span>
                                            <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'accesstype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true) == 'public') {
?>

                                                <span class="icon icon-globe left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo PluginStr($this, "public", "view", null, null, null, null, null);?></span>
                                            <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'accesstype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true) == 'friends') {
?>

                                                <span class="icon icon-user-plus left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo PluginStr($this, "friends", "view", null, null, null, null, null);?></span>
                                            <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'group',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true)) {
?>

                                                <span class="icon icon-users left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'displayname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["accessitem"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                            <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'institution',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true)) {
?>

                                                <span class="icon icon-university left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'displayname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["accessitem"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                            <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'usr',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true)) {
?>

                                                <span class="icon icon-user left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'displayname',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["accessitem"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'role',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true)) {
?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'roledisplay',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["accessitem"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)<?php 
}?> </span>
                                            <?php 
}
elseif ($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'token',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["accessitem"]) ? $this->scope["accessitem"]:null), true)) {
?>

                                                <span class="icon icon-globe left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo PluginStr($this, "token", "view", null, null, null, null, null);?></span>
                                            <?php 
}?>

                                            </a>
                                        </li>
                                        <?php 
/* -- foreach end output */
	}
}?>

                                      <?php 
}?>

                                    </ul>
                                <?php 
}?>

                            </div>

                            <div class="page-controls">
                                <a href="#" class="dropdown-toggle moremenu btn btn-link" data-toggle="dropdown" aria-expanded="false" title="<?php echo PluginStr($this, 'moreoptions', 'mahara', null, null, null, null, null);?>">
                                    <span class="icon icon-chevron-down open-indicator" role="presentation" aria-hidden="true"></span>
                                    <span class="icon icon-ellipsis-v close-indicator" role="presentation" aria-hidden="true"></span>
                                    <span class="sr-only"><?php echo PluginStr($this, 'moreoptionsfor', 'mahara', null, "".(is_string($tmp=(isset($this->scope["view"]["vtitle"]) ? $this->scope["view"]["vtitle"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."", null, null, null);?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null) && ! (isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null) && ! (isset($this->scope["noedit"]) ? $this->scope["noedit"] : null)) {
?>

                                    <li class="dropdown-item">
                                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/views.php?id=<?php echo (is_string($tmp=$this->scope["view"]["collid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo PluginStr($this, 'manageviews', 'collection', null, null, null, null, null);?>">
                                            <span class="icon icon-list left" role="presentation" aria-hidden="true"></span>
                                            <span class="link-text"><?php echo PluginStr($this, "manage", "collection", null, null, null, null, null);?></span>
                                            <span class="sr-only"><?php echo $this->classCall('Dwoo\Plugins\Functions\Pluginescape', array(PluginStr($this, 'manageviewsspecific', 'collection', null, (isset($this->scope["view"]["displaytitle"]) ? $this->scope["view"]["displaytitle"]:null), null, null, null), 'html', null));?></span>
                                        </a>
                                    </li>
                                <?php 
}?>

                                <?php if (! (isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null) && ! (isset($this->scope["noedit"]) ? $this->scope["noedit"] : null) && ( ! (isset($this->scope["view"]["locked"]) ? $this->scope["view"]["locked"]:null) || (isset($this->scope["editlocked"]) ? $this->scope["editlocked"] : null) )) {
?>

                                    <li class="dropdown-item">
                                    <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>

                                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/edit.php?id=<?php echo (is_string($tmp=$this->scope["view"]["collid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo PluginStr($this, 'edittitleanddescription', 'view', null, null, null, null, null);?>">
                                    <?php 
}
else {
?>

                                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&<?php echo (is_string($tmp=$this->scope["querystring"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo PluginStr($this, "editcontentandlayout", "view", null, null, null, null, null);?>">
                                    <?php 
}?>

                                            <span class="icon icon-pencil-alt left" role="presentation" aria-hidden="true"></span>
                                            <span class="link-text"><?php echo PluginStr($this, "edit", "mahara", null, null, null, null, null);?></span>
                                            <span class="sr-only"><?php echo $this->classCall('Dwoo\Plugins\Functions\Pluginescape', array(PluginStr($this, 'editspecific', 'mahara', null, (isset($this->scope["view"]["displaytitle"]) ? $this->scope["view"]["displaytitle"]:null), null, null, null), 'html', null));?></span>
                                        </a>
                                    </li>
                                <?php 
}?>

                                <?php if (! (isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null) && (isset($this->scope["view"]["removable"]) ? $this->scope["view"]["removable"]:null) && ! (isset($this->scope["noedit"]) ? $this->scope["noedit"] : null) && ( ! (isset($this->scope["view"]["locked"]) ? $this->scope["view"]["locked"]:null) || (isset($this->scope["editlocked"]) ? $this->scope["editlocked"] : null) )) {
?>

                                    <li class="dropdown-item">
                                    <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>

                                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>collection/delete.php?id=<?php echo (is_string($tmp=$this->scope["view"]["collid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo PluginStr($this, 'deletecollection', 'collection', null, null, null, null, null);?>">
                                    <?php 
}
else {
?>

                                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/delete.php?id=<?php echo (is_string($tmp=$this->scope["view"]["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&<?php echo (is_string($tmp=$this->scope["querystring"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo PluginStr($this, 'deletethisview', 'view', null, null, null, null, null);?>">
                                    <?php 
}?>

                                             <span class="icon icon-trash-alt text-danger left" role="presentation" aria-hidden="true"></span>
                                             <span class="link-text"><?php echo PluginStr($this, "delete", "mahara", null, null, null, null, null);?></span>
                                             <span class="sr-only"><?php echo $this->classCall('Dwoo\Plugins\Functions\Pluginescape', array(PluginStr($this, 'deletespecific', 'mahara', null, (isset($this->scope["view"]["displaytitle"]) ? $this->scope["view"]["displaytitle"]:null), null, null, null), 'html', null));?></span>
                                        </a>
                                    </li>
                                <?php 
}?>

                                <li class="view-details dropdown-item">
                                    <?php echo PluginStr($this, 'Created', 'mahara', null, null, null, null, null);?> <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["view"]["vctime"]) ? $this->scope["view"]["vctime"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strftimerecentyear');?>

                                    <br>
                                    <?php echo PluginStr($this, 'modified', 'mahara', null, null, null, null, null);?> <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["view"]["vmtime"]) ? $this->scope["view"]["vmtime"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strftimerecentyear');?>

                                    <br>
                                </li>
                                <?php if ((isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null)) {
?>

                                <li class="view-details dropdown-item">
                                    <?php echo PluginCleanHtml($this, (isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null), false);?>

                                </li>
                                <?php 
}?>

                                <?php if ((isset($this->scope["view"]["manageaccesssuspended"]) ? $this->scope["view"]["manageaccesssuspended"]:null)) {
?>

                                <li class="view-details dropdown-item">
                                    <?php echo PluginStr($this, 'pending', 'view', null, null, null, null, null);?>

                                </li>
                                <?php 
}?>

                                </ul>
                            </div>

                            <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>

                                <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["view"]["numviews"]) ? $this->scope["view"]["numviews"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'fullnumviews');?>

                                <?php if ((isset($this->scope["view"]["progresscompletion"]) ? $this->scope["view"]["progresscompletion"]:null)) {
?>

                                    <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["fullnumviews"]) ? $this->scope["fullnumviews"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)+1, 'fullnumviews');?>

                                <?php 
}?>

                                <?php if ((isset($this->scope["view"]["framework"]) ? $this->scope["view"]["framework"]:null)) {
?>

                                    <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["fullnumviews"]) ? $this->scope["fullnumviews"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)+1, 'fullnumviews');?>

                                <?php 
}?>

                                <div class="collection-list" title="<?php echo PluginStr($this, 'numviewsincollection', 'collection', null, ''.(is_string($tmp=(isset($this->scope["fullnumviews"]) ? $this->scope["fullnumviews"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp).'', null, null, null);?>">
                                    <?php if ((isset($this->scope["view"]["numviews"]) ? $this->scope["view"]["numviews"]:null) > 0) {
?>

                                    <a href="#" class="dropdown-toggle btn btn-link" data-toggle="dropdown" aria-expanded="false">
                                        <span class="icon icon-chevron-down open-indicator" role="presentation" aria-hidden="true"></span>
                                        <span class="page-count"><?php echo (is_string($tmp=$this->scope["fullnumviews"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                        <span class="icon icon-file close-indicator" role="presentation" aria-hidden="true">
                                            <?php if ((isset($this->scope["view"]["numviews"]) ? $this->scope["view"]["numviews"]:null) > 1) {
?>

                                            <span class="collection-indicator few"></span>
                                                <?php if ((isset($this->scope["view"]["numviews"]) ? $this->scope["view"]["numviews"]:null) > 10) {
?>

                                                <span class="collection-indicator many"></span>
                                                <?php 
}?>

                                            <?php 
}?>

                                        </span>
                                    </a>
                                    <?php 
}
else {
?>

                                    <a href="#" class="dropdown-toggle btn btn-link">
                                        <span class="page-count"><?php echo (is_string($tmp=$this->scope["view"]["numviews"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                        <span class="icon icon-file" role="presentation" aria-hidden="true">
                                    </a>
                                    <?php 
}?>

                                    <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null) && (isset($this->scope["view"]["collviews"]) ? $this->scope["view"]["collviews"]:null) > 0) {
?>

                                    <ul class="dropdown-menu" role="menu">
                                        <?php if ((isset($this->scope["view"]["progresscompletion"]) ? $this->scope["view"]["progresscompletion"]:null)) {
?>

                                        <li class="dropdown-item">
                                            <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"]["progresscompletion"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                                                <span class="icon icon-clipboard-check left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"]["progresscompletion"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                            </a>
                                        </li>
                                        <?php 
}?>

                                        <?php if ((isset($this->scope["view"]["framework"]) ? $this->scope["view"]["framework"]:null)) {
?>

                                        <li class="dropdown-item">
                                            <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"]["framework"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                                                <span class="icon icon-clipboard-check left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',    2 => '',  ),), $this->scope["view"]["framework"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                            </a>
                                        </li>
                                        <?php 
}?>

                                        <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["view"]["collviews"]["views"]) ? $this->scope["view"]["collviews"]["views"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh2_data) == true)
{
	foreach ($_fh2_data as $this->scope['cview'])
	{
/* -- foreach start output */
?>

                                        <li class="dropdown-item">
                                            <a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["cview"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                                                <span class="icon icon-regular icon-file left" role="presentation" aria-hidden="true"></span>
                                                <span class="link-text"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["cview"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                            </a>
                                        </li>
                                        <?php 
/* -- foreach end output */
	}
}?>

                                    </ul>
                                    <?php 
}?>

                                </div>
                            <?php 
}?>


                        </div>
                    </div>
                    <?php if ((isset($this->scope["view"]["collid"]) ? $this->scope["view"]["collid"]:null)) {
?>

                        <div class="collection-stack <?php if ((isset($this->scope["view"]["submittedto"]) ? $this->scope["view"]["submittedto"]:null)) {
?> bg-warning<?php 
}?>"></div>
                    <?php 
}?>

                </div>
                <?php 
/* -- foreach end output */
	}
}?>

                <?php echo (isset($this->scope["pagination"]) ? $this->scope["pagination"] : null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>