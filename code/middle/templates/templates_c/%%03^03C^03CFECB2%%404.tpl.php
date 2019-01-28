<?php /* Smarty version 2.6.18, created on 2010-10-23 04:14:44
         compiled from carlist_v15/404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'carlist_v15/404.tpl', 40, false),array('modifier', 'number_format', 'carlist_v15/404.tpl', 41, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "carlist_v15/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- main content area start -->
	<div id="content_main">
        <div id="content_top">
            <div class="searchbox">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td height="100" align="left" valign="middle">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="searchbox_bg">
                                <tr>
                                    <td height="100" align="left" valign="middle">
                                        <script src="scripts/form-simple-search.js" type="text/javascript"></script>
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "carlist_v15/form-simple-search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div><!-- searchbox -->
    	</div><!-- content_top -->

		<div id="content_main_header">
			<span class="header">Your Page Not Found</span>
		</div>

		<div class="text13 justified error">
            Oops! It looks like the page you are trying to access does not exist.<br/>
            Try using our search bar to find what you’re looking for or the links below to help you get back on track.
        </div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "carlist_v15/seo-footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    </div><!-- content_main -->

    <div class="featured_car_dealers">
    	<div id="statistics">
        	<span class="label" style="font-weight:bold;font-size:12px;">Cars Listed &amp; Counting:</span>
            <span class="bg-counter" style="font-weight:bold;font-size:18px;color:#F00;padding-top:2px;"><?php echo $this->_tpl_vars['total_listings']; ?>
</span>
        	<span class="label">Listings Added Yesterday (<?php echo ((is_array($_tmp=$this->_tpl_vars['yesterday_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
):</span>
            <span style="font-weight:bold;font-size:12px;color:#009;"><?php echo ((is_array($_tmp=$this->_tpl_vars['listings_added_yesterday'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</span>
        </div>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "carlist_v15/services-panel.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div><!-- featured_car_dealers -->


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "carlist_v15/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>