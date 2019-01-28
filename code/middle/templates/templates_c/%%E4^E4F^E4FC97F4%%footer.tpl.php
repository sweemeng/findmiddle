<?php /* Smarty version 2.6.18, created on 2010-10-23 04:14:44
         compiled from carlist_v15/footer.tpl */ ?>
	<!-- main content area end -->
    <div id="footer_clear">&nbsp;<br /></div>
	<div id="footer">
        <a href="privacy.php" class="footerText12">Privacy Policy</a> &nbsp;|&nbsp; <a href="tos.php" class="footerText12">Terms of Use</a> &nbsp;|&nbsp; <a href="about-us.php" class="footerText12">About Us</a> &nbsp;|&nbsp; <a href="sitemap.php" class="footerText12">Site Map</a> &nbsp;|&nbsp; <a href="contact.php" class="footerText12">Contact Us</a>
		<br/>
		<span class="footerText11">Auto Discounts Sdn Bhd @ Copyright. All Rights Reserved.</span>
	</div>
</div>
&nbsp;
<script type="text/javascript">
//<![CDATA[
<!--
clickaider_cid = "<?php echo @CLICKAIDER_CID; ?>
";
clickaider_track_links = "all";
clickaider_track_forms = "all";

<?php if ($this->_tpl_vars['track_fulltext_query']): ?>
clickaider_variable1 = "<?php echo $this->_tpl_vars['track_fulltext_query']; ?>
";
<?php endif; ?>

<?php if ($this->_tpl_vars['track_login_user']): ?>
clickaider_variable2 = "<?php echo $this->_tpl_vars['track_login_user']; ?>
";
<?php endif; ?>

<?php if ($this->_tpl_vars['track_car_details']): ?>
clickaider_variable3 = "<?php echo $this->_tpl_vars['track_car_details']; ?>
";
<?php endif; ?>

// -->
//]]>
</script>
<noscript>
<img src="http://hit.clickaider.com/pv?c=<?php echo @CLICKAIDER_CID; ?>
" alt="ClickAider" border="0" width="1" height="1" />
</noscript>
<script type="text/javascript" src="http://hit.clickaider.com/clickaider.js"></script>
<?php if (@GOOGLE_CID): ?>
<?php echo '
<script type="text/javascript">
//<![CDATA[
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
try {
'; ?>

var pageTracker = _gat._getTracker("<?php echo @GOOGLE_CID; ?>
");
pageTracker._setDomainName('.carlist.my');
pageTracker._setAllowHash(false);
<?php echo '
pageTracker._trackPageview();
} catch(err) {}
//]]>
</script>
'; ?>

<?php endif; ?>
<script type="text/javascript" language="JavaScript">
 //<![CDATA[
 document.write(unescape('%3Cscript%20type%3D%22text/javascript%22%20language%3D%22JavaScript%22%20src%3D%22'));
 document.write((location.protocol.indexOf('https')>-1?'https://my-ssl':'http://my-cdn')
 +unescape('.effectivemeasure.net/em.js%22%3E%3C/script%3E'));
 //]]>
</script>
<noscript>
 <img src="//my.effectivemeasure.net/em_image" alt="" style="position:absolute;
left:-5px;" />
</noscript>
</body>
</html>