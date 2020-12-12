<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginStr')===false)
	$this->getLoader()->loadPlugin('PluginStr');
if (function_exists('PluginProfileUrl')===false)
	$this->getLoader()->loadPlugin('PluginProfileUrl');
if (function_exists('PluginProfileIconUrl')===false)
	$this->getLoader()->loadPlugin('PluginProfileIconUrl');
if (function_exists('PluginDisplayName')===false)
	$this->getLoader()->loadPlugin('PluginDisplayName');
/* end template head */ ob_start(); /* template body */ ?><!doctype html>
<!--[if IE 8 ]><html<?php if ((isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html<?php if ((isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html<?php if ((isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><!--<![endif]-->
<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/head.tpl", null, null, null, '_root', null));?>

<body data-usethemedjs="true" class="no-js <?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {
?>admin<?php 
}?> <?php if ((isset($this->scope["loggedout"]) ? $this->scope["loggedout"] : null)) {
?>loggedout<?php 
}?> <?php if ((isset($this->scope["pagename"]) ? $this->scope["pagename"] : null)) {

echo (is_string($tmp=$this->scope["pagename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}?> <?php echo (($tmp = (is_string($tmp=(isset($this->scope["presentation"]) ? $this->scope["presentation"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))===null||$tmp==='' ? 'window' : $tmp);?>">
    <div class="skiplink btn-group btn-group-top">
        <a class="sr-only sr-only-focusable btn btn-secondary" <?php if ((isset($this->scope["headertype"]) ? $this->scope["headertype"] : null) == 'page') {
?>href="#header-target-main"<?php 
}
else {
?>href="#header-main"<?php 
}?>><?php echo PluginStr($this, 'skipmenu', 'mahara', null, null, null, null, null);?></a>
    </div>

    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null) || ! (isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null) || (isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null) || (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) {
?>

        <div class="site-messages">
    <?php 
}?>


    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) {
?>

        <div class="site-message alert alert-warning" role="alert">
            <div class="container">
                <span><?php echo (is_string($tmp=$this->scope["masqueradedetails"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                <a href="<?php echo (is_string($tmp=$this->scope["becomeyoulink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["becomeyouagain"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
            </div>
        </div>
    <?php 
}?>

    <?php if (! (isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null)) {
?>

        <div class="site-message alert alert-info" role="alert">
            <div class="container">
                <?php echo PluginStr($this, 'notproductionsite', 'error', null, null, null, null, null);?>

            </div>
        </div>
    <?php 
}?>

    <?php if ((isset($this->scope["SITEOUTOFSYNC"]) ? $this->scope["SITEOUTOFSYNC"] : null)) {
?>

        <div class="site-message alert alert-warning" role="alert">
            <div class="container">
                <?php echo PluginStr($this, 'siteoutofsyncfor', 'error', null, (is_string($tmp=(isset($this->scope["SITEOUTOFSYNC"]) ? $this->scope["SITEOUTOFSYNC"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?>

            </div>
        </div>
    <?php 
}?>

    <?php if ((isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null)) {
?>

        <div class="site-message alert alert-danger" role="alert">
            <div class="container">
                <?php if ((isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null) == 'logindisabled') {

echo PluginStr($this, 'siteclosedlogindisabled', 'mahara', null, "".(is_string($tmp=(isset($this->scope["WWWROOT"]) ? $this->scope["WWWROOT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."admin/upgrade.php", null, null, null);

}
else {

echo PluginStr($this, 'siteclosed', 'mahara', null, null, null, null, null);

}?>

            </div>
        </div>
    <?php 
}?>

    <?php if ((isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) {
?>

       <div id="switchwrap"><?php echo (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null);?></div>
    <?php 
}?>


    <?php if ((isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null) || ! (isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null) || (isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null) || (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) {
?>

        </div>
    <?php 
}?>


    <header class="header fixed-top no-site-messages">
        <div class="navbar navbar-default navbar-main">
            <div class="container">
                <div id="logo-area" class="logo-area">
                    <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="logo <?php if ((isset($this->scope["sitelogocustomsmall"]) ? $this->scope["sitelogocustomsmall"] : null) || ( ! (isset($this->scope["sitelogocustomsmall"]) ? $this->scope["sitelogocustomsmall"] : null) && ! (isset($this->scope["sitelogocustom"]) ? $this->scope["sitelogocustom"] : null) )) {
?>change-to-small<?php 
}?>">
                        <img src="<?php echo (is_string($tmp=$this->scope["sitelogo"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["sitename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" data-customlogo="<?php echo (is_string($tmp=$this->scope["sitelogocustom"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" >
                    </a>
                    <?php if ((isset($this->scope["sitelogocustomsmall"]) ? $this->scope["sitelogocustomsmall"] : null)) {
?>

                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="logoxs">
                            <img src="<?php echo (is_string($tmp=$this->scope["sitelogocustomsmall"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["sitename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                        </a>
                    <?php 
}?>

                    <?php if (! (isset($this->scope["sitelogocustom"]) ? $this->scope["sitelogocustom"] : null) && ! (isset($this->scope["sitelogocustomsmall"]) ? $this->scope["sitelogocustomsmall"] : null)) {
?>

                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="logoxs change-to-small-default">
                            <img src="<?php echo (is_string($tmp=$this->scope["sitelogosmall"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["sitename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                        </a>
                    <?php 
}?>

                    <?php if ((isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null) || (isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null) || (isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null) || (isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) {
?>

                        <div class="admin-title">
                            <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/" class="admin-site"><?php echo PluginStr($this, "administration", 'mahara', null, null, null, null, null);?></a>
                        </div>
                    <?php 
}?>

                    <div id="loading-box" class="loading-box d-none"></div>
                </div>

                <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/topright.tpl", null, null, null, '_root', null));?>


                <div class="nav-toggle-area">
                    <?php if ((isset($this->scope["MAINNAV"]) ? $this->scope["MAINNAV"] : null)) {
?>

                        <button class="main-nav-toggle navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".nav-main" aria-expanded="false" aria-controls="main-nav" title='<?php echo PluginStr($this, "mainmenu", 'mahara', null, null, null, null, null);?>'>
                            <span class="sr-only"><?php echo PluginStr($this, "showmainmenu", 'mahara', null, null, null, null, null);?></span>
                            <span class="icon icon-bars icon-lg" role="presentation" aria-hidden="true"></span>
                        </button>
                    <?php 
}?>

                    <?php if ((isset($this->scope["MAINNAVADMIN"]) ? $this->scope["MAINNAVADMIN"] : null)) {
?>

                        <button class="admin-toggle navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".nav-main-admin" aria-expanded="false" aria-controls="main-nav-admin" title='<?php echo PluginStr($this, "adminmenu", 'mahara', null, null, null, null, null);?>'>
                            <span class="sr-only"><?php echo PluginStr($this, "showadminmenu", 'mahara', null, null, null, null, null);?></span>
                            <span class="icon icon-wrench icon-lg" role="presentation" aria-hidden="true"></span>
                        </button>
                    <?php 
}?>

                    <?php if ((isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) {
?>

                        <a href="<?php echo PluginProfileUrl($this, (is_string($tmp=(isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), true, false);?>" class="user-icon user-icon-25" title='<?php echo PluginStr($this, "profilepage", 'mahara', null, null, null, null, null);?>'>
                            <img src="<?php echo PluginProfileIconUrl($this, (is_string($tmp=(isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 25, 25);?>" alt="<?php echo PluginStr($this, 'profileimagefor', 'artefact.internal', null, PluginDisplayName($this, (is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get('id') : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, false, false), null, null, null);?>">
                        </a>
                        <button class="user-toggle navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-main-user" aria-expanded="false" aria-controls="main-nav-user" title='<?php echo PluginStr($this, "usermenu1", 'mahara', null, null, null, null, null);?>'>
                            <span class="sr-only"><?php echo PluginStr($this, "showusermenu1", 'mahara', null, null, null, null, null);?></span>
                            <span class="icon icon-chevron-down collapsed"></span>
                        </button>
                    <?php 
}?>

                    <?php if ((isset($this->scope["MESSAGEBOX"]) ? $this->scope["MESSAGEBOX"] : null)) {
?>

                        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["MESSAGEBOX"]) ? $this->scope["MESSAGEBOX"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['item'])
	{
/* -- foreach start output */
?>

                        <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->scope["item"]["alt"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" role="button" id="nav-<?php echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="navbar-toggle navbar-messages collapsed">
                            <span class="sr-only"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <span class="<?php echo (is_string($tmp=$this->scope["item"]["countclasssr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["unread"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></span>
                            <span class="icon icon-<?php echo (is_string($tmp=$this->scope["item"]["iconclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> icon-lg" role="presentation" aria-hidden="true"></span>
                            <?php if ((isset($this->scope["item"]["count"]) ? $this->scope["item"]["count"]:null)) {
?>

                                <span class="navbar-messages-count">
                                    <span class="<?php echo (is_string($tmp=$this->scope["item"]["countclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["count"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                                </span>
                            <?php 
}?>

                        </a>
                        <?php 
/* -- foreach end output */
	}
}?>

                    <?php 
}?>

                    <?php if ((isset($this->scope["LANGCHOICES"]) ? $this->scope["LANGCHOICES"] : null)) {
?>

                        <button class="lang-toggle navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-language" aria-expanded="false" aria-controls="main-language" title='<?php echo PluginStr($this, "chooselanguage", 'mahara', null, null, null, null, null);?>'>
                            <span class="sr-only"><?php echo PluginStr($this, "chooselanguage", 'mahara', null, null, null, null, null);?></span>
                            <span class="icon icon-language icon-lg" role="presentation" aria-hidden="true"></span>
                        </button>
                    <?php 
}?>

                    <!-- HIDE WHEN ON DESKTOP -->
                    <?php if (! (isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null) && ( (isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null) || (isset($this->scope["publicsearchallowed"]) ? $this->scope["publicsearchallowed"] : null) )) {
?>

                    <button class="search-toggle navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-form" aria-expanded="false" aria-controls="usf">
                        <span class="icon icon-search icon-lg" role="presentation" aria-hidden="true"></span>
                        <span class="nav-title sr-only"><?php echo PluginStr($this, "showsearch", 'mahara', null, null, null, null, null);?></span>
                    </button>
                    <?php 
}?>

                </div>
                <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/navigation.tpl", null, null, null, '_root', null));?>

                <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/language.tpl", null, null, null, '_root', null));?>

            </div>
        </div>
    </header>

    <?php if ((isset($this->scope["headertype"]) ? $this->scope["headertype"] : null) == "page") {
?>

        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/pageheader.tpl", null, null, null, '_root', null));?>

    <?php 
}
elseif ((isset($this->scope["headertype"]) ? $this->scope["headertype"] : null) == "profile") {
?>

        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/profileheader.tpl", null, null, null, '_root', null));?>

    <?php 
}
elseif ((isset($this->scope["headertype"]) ? $this->scope["headertype"] : null) == "matrix" || (isset($this->scope["headertype"]) ? $this->scope["headertype"] : null) == "progresscompletion") {
?>

        <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("header/matrixheader.tpl", null, null, null, '_root', null));?>

    <?php 
}?>


    <div class="container main-content">
        <div class="row">
            <a id="header-main"></a>
            <main id="main" class="<?php if ((isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) {

if ((isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) {
?>col-xl-9 <?php 
}
else {
?>col-xl-9 order-md-2 <?php 
}

}
else {
?>col-md-12<?php 
}?> main">
                <div id="content" class="main-column<?php if ((isset($this->scope["selected"]) ? $this->scope["selected"] : null) == 'content') {
?> editcontent<?php 
}?>">
                    <div id="main-column-container">

                        <?php if ((isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null) || (isset($this->scope["sectiontabs"]) ? $this->scope["sectiontabs"] : null)) {
?>

                        <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'item');?>

                        <div class="arrow-bar <?php echo (is_string($tmp=$this->scope["item"]["subnav"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                            <span class="arrow d-none d-md-block">
                                <span class="text">
                                <?php if (((is_string($tmp=(isset($this->scope["PAGEHEADINGARROW"]) ? $this->scope["PAGEHEADINGARROW"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>

                                    <?php echo (is_string($tmp=$this->scope["PAGEHEADINGARROW"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                <?php 
}
elseif (((is_string($tmp=(isset($this->scope["PAGEHEADING"]) ? $this->scope["PAGEHEADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>

                                    <?php echo (is_string($tmp=$this->scope["PAGEHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                <?php 
}?>

                                </span>
                            </span>
                            <div class="right-text">
                                <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("inpagenav.tpl", null, null, null, '_root', null));?>

                            </div>
                        </div>
                        <?php 
}?>


                        <?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo (isset($this->scope["messages"]["messages"]) ? $this->scope["messages"]["messages"]:null);?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo (isset($this->scope["messages"]["messages"]) ? $this->scope["messages"]["messages"]:null);
}?>

                        <?php if ((isset($this->scope["institutionselector"]) ? $this->scope["institutionselector"] : null)) {
?>

                            <div class="institutionselector">
                            <?php echo (isset($this->scope["institutionselector"]) ? $this->scope["institutionselector"] : null);?>

                            </div>
                        <?php 
}?>


                        <?php if (((is_string($tmp=(isset($this->scope["PAGEHEADING"]) ? $this->scope["PAGEHEADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>

                            <h1 class="<?php echo (is_string($tmp=$this->scope["headingclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                                <?php if (((is_string($tmp=(isset($this->scope["pageicon"]) ? $this->scope["pageicon"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>

                                <span class="<?php echo (is_string($tmp=$this->scope["pageicon"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></span>
                                <?php 
}?>

                                <?php if ((isset($this->scope["SUBSECTIONHEADING"]) ? $this->scope["SUBSECTIONHEADING"] : null)) {
?>

                                <span class="section-heading">
                                    <?php echo (is_string($tmp=$this->scope["SUBSECTIONHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                </span>
                                <?php 
}?>

                                <span class="section-heading">
                                    <?php if ((isset($this->scope["SUBSECTIONHEADING"]) ? $this->scope["SUBSECTIONHEADING"] : null)) {
?>| <?php 
}
echo (is_string($tmp=$this->scope["PAGEHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                </span>
                                <?php if ((isset($this->scope["PAGEHELPNAME"]) ? $this->scope["PAGEHELPNAME"] : null)) {
?><span class="page-help-icon"><?php echo (isset($this->scope["PAGEHELPICON"]) ? $this->scope["PAGEHELPICON"] : null);?></span><?php 
}?>

                                <?php if ((isset($this->scope["publicgroup"]) ? $this->scope["publicgroup"] : null) && (isset($this->scope["rsswithtitle"]) ? $this->scope["rsswithtitle"] : null)) {
?>

                                <a href="<?php echo (is_string($tmp=$this->scope["feedlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="mahara-rss-icon text-small float-right " role="presentation" aria-hidden="true">
                                    <span class="icon-rss icon icon-lg" role="presentation" aria-hidden="true"></span>
                                </a>
                                <?php 
}?>

                            </h1>
                        <?php 
}?>


                        <?php if ((isset($this->scope["SUBPAGETOP"]) ? $this->scope["SUBPAGETOP"] : null)) {
?>

                            <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array((is_string($tmp=(isset($this->scope["SUBPAGETOP"]) ? $this->scope["SUBPAGETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, '_root', null));?>

                        <?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>