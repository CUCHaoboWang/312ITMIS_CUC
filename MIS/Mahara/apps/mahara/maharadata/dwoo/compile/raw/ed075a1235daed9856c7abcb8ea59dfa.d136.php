<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
if (function_exists('PluginThemeImageUrl')===false)
	$this->getLoader()->loadPlugin('PluginThemeImageUrl');
if (function_exists('PluginMaharaVersion')===false)
	$this->getLoader()->loadPlugin('PluginMaharaVersion');
if (function_exists('PluginMaharaPerformanceInfo')===false)
	$this->getLoader()->loadPlugin('PluginMaharaPerformanceInfo');
/* end template head */ ob_start(); /* template body */ ?>                    </div><!-- end main-column -->

                </div><!-- mainmiddle -->

            </main>

            <?php if ((isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null) && (isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) {
?>

            <div class="col-xl-3 sidebar">
                    <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("sidebar.tpl", null, null, null, '_root', null, array('blocks' => (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

            </div>
            <?php 
}?>


            <?php if ((isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null) && (isset($this->scope["SIDEBLOCKS"]["left"]) ? $this->scope["SIDEBLOCKS"]["left"]:null)) {
?>

            <div class="col-xl-3 order-lg-1 sidebar">
                            <?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude',
                        array("sidebar.tpl", null, null, null, '_root', null, array('blocks' => (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["left"]) ? $this->scope["SIDEBLOCKS"]["left"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))));?>

            </div>
            <?php 
}?>


        </div><!-- row -->

    </div><!-- container -->

<footer class="<?php if ((isset($this->scope["editing"]) ? $this->scope["editing"] : null) == true) {
?>editcontent<?php 
}?> footer">
    <div class="footer-inner container">
        <div id="powered-by" class="float-left mahara-logo">
            <a href="https://mahara.org/">
                <img src="<?php echo PluginThemeImageUrl($this, 'powered_by_mahara', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="Powered by Mahara" class="mahara-footer-logo">
            </a>
        </div>
        <!-- This site is powered by Mahara, an Open Source
        ePortfolio system. See https://mahara.org/ for more
        details.
        NOTE: this image and link are a way that you can
        support the Mahara project. Please consider
        displaying them on your site to spread the word! -->
        <ul class="nav nav-pills footer-nav float-left">
        <?php 
$_fh15_data = (is_string($tmp=(isset($this->scope["FOOTERMENU"]) ? $this->scope["FOOTERMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isTraversable($_fh15_data) == true)
{
	foreach ($_fh15_data as $this->scope['item'])
	{
/* -- foreach start output */
?>

            <li>
                <?php if ((isset($this->scope["item"]["fullurl"]) ? $this->scope["item"]["fullurl"]:null)) {
?>

                <?php echo (isset($this->scope["item"]["fullurl"]) ? $this->scope["item"]["fullurl"]:null);?>

                <?php 
}
else {
?>

                <a href="<?php echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="nav-link"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                <?php 
}?>

            </li>
        <?php 
/* -- foreach end output */
	}
}?>

        </ul>
        <div class="metadata float-right mahara-version" id="version">
            <?php echo PluginMaharaVersion($this);?>

        </div>

        <div class="metadata fullwidth site-performace">
            <!-- there is a div id="performance-info" wrapping this -->
            <?php echo PluginMaharaPerformanceInfo($this);?>

        </div>
    </div>
</footer><!-- footer-wrap -->
<?php if ((isset($this->scope["ADDITIONALHTMLFOOTER"]) ? $this->scope["ADDITIONALHTMLFOOTER"] : null)) {

echo (isset($this->scope["ADDITIONALHTMLFOOTER"]) ? $this->scope["ADDITIONALHTMLFOOTER"] : null);

}?>

</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>