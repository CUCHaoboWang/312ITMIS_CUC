<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="form-switch <?php echo (is_string($tmp=$this->scope["wrapper"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <div class="switch <?php echo (is_string($tmp=$this->scope["type"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <?php echo (isset($this->scope["checkbox"]) ? $this->scope["checkbox"] : null);?>

        <label class="switch-label" for="<?php echo (is_string($tmp=$this->scope["elementid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" aria-hidden="true">
            <span class="switch-inner"></span>
            <span class="switch-indicator"></span>
            <span class="state-label on"><?php echo (is_string($tmp=$this->scope["onlabel"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            <span class="state-label off"><?php echo (is_string($tmp=$this->scope["offlabel"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
        </label>
    </div>
    <script>
        if (!window.Switchbox) {
            jQuery.getScript("<?php echo (is_string($tmp=$this->scope["libfile"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>").done(function () { Switchbox.computeWidth("<?php echo (is_string($tmp=$this->scope["elementid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"); });
        }
        else {
            Switchbox.computeWidth("<?php echo (is_string($tmp=$this->scope["elementid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>");
        }
    </script>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>