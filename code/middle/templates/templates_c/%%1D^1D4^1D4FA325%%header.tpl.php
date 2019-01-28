<?php /* Smarty version 2.6.18, created on 2010-10-23 04:14:44
         compiled from carlist_v15/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo @SITE_URL; ?>
/" />
<link href="favicon.gif" type="image/gif" rel="shortcut icon"/>
<?php if ($this->_tpl_vars['viewsingle']): ?>

<?php $_from = $this->_tpl_vars['singlelistdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['records']):
?>
<?php $this->assign('tempid', ($this->_tpl_vars['records']['id'])); ?>
<?php $this->assign('fbimage', ($this->_tpl_vars['records']['images'])); ?>
<title>
    <?php echo $this->_tpl_vars['records']['make']; ?>
 <?php echo $this->_tpl_vars['records']['model']; ?>
 <?php echo $this->_tpl_vars['records']['year']; ?>
 
    <?php if ($this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]): ?> Deposit: RM<?php echo $this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]['deposit']; ?>
 Monthly: RM<?php echo $this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]['monthly_payment']; ?>

    <?php else: ?>RM<?php echo $this->_tpl_vars['records']['price']; ?>
<?php endif; ?> |
    Used <?php echo $this->_tpl_vars['records']['make']; ?>
 | Used Cars for Sale | Malaysia Car Classified : Carlist.my
</title>
<meta name="description" content="You are currently viewing
    <?php echo $this->_tpl_vars['records']['make']; ?>
 <?php echo $this->_tpl_vars['records']['model']; ?>
 <?php echo $this->_tpl_vars['records']['year']; ?>

    <?php if ($this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]): ?> Deposit: RM<?php echo $this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]['deposit']; ?>
 Monthly: RM<?php echo $this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]['monthly_payment']; ?>

    <?php else: ?>RM<?php echo $this->_tpl_vars['records']['price']; ?>
<?php endif; ?>.  Looking for other used <?php echo $this->_tpl_vars['records']['make']; ?>
 or used cars for sale?
    <?php echo @DESCRIPTION; ?>
" >
</meta>
<link rel="image_src" href="used-cars/watermark/<?php if ($this->_tpl_vars['fbimage']['0']['imagepath']): ?><?php echo $this->_tpl_vars['fbimage']['0']['imagepath']; ?>
<?php else: ?>images/no_image.gif<?php endif; ?>/facebook/" />
<?php endforeach; endif; unset($_from); ?>

<?php else: ?>
<title>
<?php if ($this->_tpl_vars['userdata']['0']['company_name']): ?><?php echo $this->_tpl_vars['userdata']['0']['company_name']; ?>
 | <?php endif; ?>
<?php echo $this->_tpl_vars['header_make']; ?>
 <?php echo $this->_tpl_vars['header_model']; ?>
 <?php if ($this->_tpl_vars['header_make'] || $this->_tpl_vars['header_model']): ?> | <?php endif; ?>
<?php if ($this->_tpl_vars['extra_title']): ?><?php echo $this->_tpl_vars['extra_title']; ?>
 | <?php endif; ?>
Cars for Sale | Used Cars | Car Price | Malaysia Car Classified : Carlist.my
</title>
<meta name="description" content="<?php if ($this->_tpl_vars['userdata']['0']['company_name']): ?><?php echo $this->_tpl_vars['userdata']['0']['company_name']; ?>
 is a member of Carlist.my. <?php endif; ?>
<?php if ($this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]): ?>Need Sambung Bayar? <?php endif; ?><?php if ($this->_tpl_vars['header_make'] || $this->_tpl_vars['header_model']): ?>Looking for <?php echo $this->_tpl_vars['header_make']; ?>
 <?php echo $this->_tpl_vars['header_model']; ?>
? <?php endif; ?>
<?php if ($this->_tpl_vars['extra_desc']): ?><?php echo $this->_tpl_vars['extra_desc']; ?>
 <?php endif; ?><?php echo @DESCRIPTION; ?>
" />
<?php endif; ?>

<meta name="keywords" content="<?php if ($this->_tpl_vars['viewsingle']): ?><?php $_from = $this->_tpl_vars['singlelistdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['records']):
?><?php if ($this->_tpl_vars['sb_singlecar'][$this->_tpl_vars['tempid']]): ?>sambung bayar,<?php endif; ?>
<?php if ($this->_tpl_vars['records']['make']): ?><?php echo $this->_tpl_vars['records']['make']; ?>
,<?php endif; ?><?php if ($this->_tpl_vars['records']['model']): ?><?php echo $this->_tpl_vars['records']['model']; ?>
,<?php endif; ?><?php if ($this->_tpl_vars['records']['year']): ?><?php echo $this->_tpl_vars['records']['year']; ?>
,<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if ($this->_tpl_vars['header_make']): ?><?php echo $this->_tpl_vars['header_make']; ?>
,<?php endif; ?><?php if ($this->_tpl_vars['header_model']): ?><?php echo $this->_tpl_vars['header_model']; ?>
,<?php endif; ?><?php if ($this->_tpl_vars['extra_keywords']): ?><?php echo $this->_tpl_vars['extra_keywords']; ?>
,<?php endif; ?><?php echo @KEYWORDS; ?>
"
/>
<meta name="robot" content="index,follow" />
<meta name="copyright" content="Copyright © <?php echo @SITE_NAME; ?>
 All Rights Reserved." />
<meta name="revisit-after" content="14" />

<?php if ($this->_tpl_vars['index']): ?>
<link href="templates/carlist_v15/images/default.css" rel="stylesheet" type="text/css" />
<?php else: ?>
<link href="templates/carlist_v15/images/default_noindex.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php echo $this->_tpl_vars['external_css']; ?>

<?php echo '
<script type="text/javascript">
//<![CDATA[
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
//]]>
</script>
'; ?>

<?php echo $this->_tpl_vars['xajax_js']; ?>

<?php echo $this->_tpl_vars['xajax_upload']; ?>

</head>

<body>

<div id="wrapper">
	<!-- header section start -->
    <div id="verticals">
        <ul id="verticalstab">
            <li class="general"><a href="http://www.malaysiads.com" target="_blank">General Classifieds</a></li>
			<li class="property"><a href="http://www.thinkproperty.my" target="_blank">Property</a></li>
            <li class="cars"><a class="selected" href="javascript:;">Cars For Sale</a></li>
        </ul>
    </div>
    <?php if ($this->_tpl_vars['index']): ?>
	<div id="logo">
        <a href="index.php"><img src="templates/carlist_v15/images/logo1.gif" width="222" height="105" border="0" alt="Carlist.my Logo" /></a>
	</div>
	<div id="banner_left">
	</div>
	<div id="banner">
		<div id="banner_top">
		</div>
		<div id="banner_main">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="744" height="107">
                <param name="movie" value="images/banner1.swf" />
                <param name="quality" value="high" />
                <embed src="images/banner1.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="744" height="107"></embed>
            </object>
		</div>
	</div>
	<div id="banner_right">
	</div>
    <?php else: ?>
	<div id="logo_small">
        <a href="index.php"><img src="templates/carlist_v15/images/logo1.gif" width="222" height="105" border="0" alt="Carlist.my Logo" /></a>
	</div>
	<div id="banner_left_small">
	</div>
	<div id="banner_small">
		<div id="banner_top_small">
		</div>
		<div id="banner_main_small">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="744" height="107">
                <param name="movie" value="images/banner2.swf" />
                <param name="quality" value="high" />
                <embed src="images/banner2.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="744" height="107"></embed>
            </object>
		</div>
	</div>
	<div id="banner_right_small">
	</div>
    <?php endif; ?>
	<!-- header section end -->

	<!-- menu bar start -->
	<div id="menu">
        <table width="1014" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="609" height="62" align="left" valign="top">
                    <table width="609" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="6" align="right" valign="top"><img src="templates/carlist_v15/images/menu_div.gif" width="6" height="26" class="vtop" alt="Menu Divider" /></td>
                            <td width="72" align="center" valign="bottom">
                                <a href="index.php">
                                    <?php if ($this->_tpl_vars['index']): ?>
                                        <img src="templates/carlist_v15/images/btn_home2.gif" width="62" height="26" border="0" class="vmid" alt="Home Button" />
                                    <?php else: ?>
                                        <img src="templates/carlist_v15/images/btn_home1.gif" name="Image3" width="62" height="26" border="0" id="Image3" class="vmid" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','templates/carlist_v15/images/btn_home2.gif',1)" alt="Home Button" />
                                    <?php endif; ?>
                                </a>
                            </td>
                            <td width="6" align="right" valign="top"><img src="templates/carlist_v15/images/menu_div.gif" width="6" height="26" class="vtop" alt="Menu Divider" /></td>
                            <td width="65" align="center" valign="bottom">
                                <a href="help.php">
                                    <?php if ($this->_tpl_vars['help']): ?>
                                        <img src="templates/carlist_v15/images/btn_help2.gif" width="59" height="26" border="0" class="vmid" alt="Help Button" />
                                    <?php else: ?>
                                        <img src="templates/carlist_v15/images/btn_help1.gif" name="Image4" width="59" height="26" border="0" id="Image4" class="vmid" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','templates/carlist_v15/images/btn_help2.gif',1)" alt="Help Button" />
                                    <?php endif; ?>
                                </a>
                            </td>
                            <td width="6" align="right" valign="top"><img src="templates/carlist_v15/images/menu_div.gif" width="6" height="26" class="vtop" /></td>
                            <td width="115" align="center" valign="bottom">
                                <a href="contact.php">
                                    <?php if ($this->_tpl_vars['contact']): ?>
                                        <img src="templates/carlist_v15/images/btn_contact2.gif" width="103" height="26" border="0" class="vmid"/>
                                    <?php else: ?>
                                        <img src="templates/carlist_v15/images/btn_contact1.gif" name="Image5" width="103" height="26" border="0" id="Image5" class="vmid" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','templates/carlist_v15/images/btn_contact2.gif',1)"/>
                                    <?php endif; ?>
                                </a>
                            </td>
                            <td width="6" align="right" valign="top"><img src="templates/carlist_v15/images/menu_div.gif" width="6" height="26" class="vtop" alt="Menu Divider" /></td>
                            <td width="98" height="30" align="center" valign="bottom">
                                <a href="contact.php?advertisers=true">
                                    <?php if ($this->_tpl_vars['advertisers']): ?>
                                        <img src="templates/carlist_v15/images/btn_advertiser2.gif" width="92" height="26" border="0" class="vmid" alt="Advertiser Button" />
                                    <?php else: ?>
                                        <img src="templates/carlist_v15/images/btn_advertiser1.gif" name="Image6" width="92" height="26" border="0" name="Image6" class="vmid" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','templates/carlist_v15/images/btn_advertiser2.gif',1)" alt="Advertiser Button" />
                                    <?php endif; ?>
                                </a>
                            </td>
                            <td width="6" align="right" valign="top"><img src="templates/carlist_v15/images/menu_div.gif" width="6" height="26" class="vtop" alt="Menu Divider" /></td>
                            <td width="106" height="30" align="center" valign="bottom">
                                <a href="http://blog.carlist.my">
                                    <img src="templates/carlist_v15/images/btn_blog1.gif" name="Image8" width="76" height="26" border="0" class="vmid" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','templates/carlist_v15/images/btn_blog2.gif',1)"  alt="Blog Button" />
                                </a>
                            </td>
                            <td width="6" align="right" valign="top"><img src="templates/carlist_v15/images/menu_div.gif" width="6" height="26" class="vtop" /></td>
                            <td width="108" height="30" align="center" valign="bottom">
                                <a href="contact.php?feedback=true">
                                    <?php if ($this->_tpl_vars['feedback']): ?>
                                        <img src="templates/carlist_v15/images/btn_feedback2.gif" width="94" height="26" border="0" class="vmid" alt="Feedback Button" />
                                    <?php else: ?>
                                        <img src="templates/carlist_v15/images/btn_feedback1.gif" name="Image7" width="94" height="26" border="0" id="Image7" class="vmid" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','templates/carlist_v15/images/btn_feedback2.gif',1)" alt="Feedback Button" />
                                    <?php endif; ?>
                                </a>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" border="0" cellspacing="5" cellpadding="0">
                        <tr height="38">
                            <td width="6" height="18" align="left" valign="top"><img src="images/clear.gif" width="6" height="1" alt="Clear Divider" /></td>
                            <td valign="bottom"><span class="text13">Welcome, <strong><?php if ($this->_tpl_vars['logged_in']): ?><?php echo $_SESSION['user']; ?>
!<?php else: ?>Guest!<?php endif; ?></strong></span></td>
                            <td width="400" align="right" valign="bottom">
                                    <?php if ($this->_tpl_vars['logged_in']): ?>
                                        <a href="member.php"><img src="templates/carlist_v15/images/btn_profile.gif" width="180" height="22" border="0" alt="Member Profile Button" /></a>
                                        <?php if ($this->_tpl_vars['admin']): ?>
                                            <a href="admin/admin.php"><img src="templates/carlist_v15/images/btn_dashboard.gif" width="100" height="22" border="0" alt="Dashboard Button" /></a>
                                        <?php elseif ($this->_tpl_vars['staff1']): ?>
                                            <a href="admin/staff1.php"><img src="templates/carlist_v15/images/btn_dashboard.gif" width="100" height="22" border="0" alt="Dashboard Button" /></a>
                                        <?php endif; ?>
                                        <a href="login.php?logoff"><img src="templates/carlist_v15/images/btn_logout2.gif" width="75" height="22" border="0" alt="Logout Button" /></a>
                                    <?php else: ?>
                                        <a href="login.php"><img src="templates/carlist_v15/images/btn_login2.gif" width="61" height="22" hspace="5" border="0" alt="Login Button" /></a>
                                        <a href="register.php"><img src="templates/carlist_v15/images/btn_registernow.gif" width="114" height="22" border="0" alt="Register Button" /></a>
                                    <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="221" align="left" valign="top">
                    <a href="adv-search.php">
                        <img src="templates/carlist_v15/images/find1_1.gif" name="Image1" width="221" height="57" border="0" id="Image1" onmouseover="MM_swapImage('Image1','','templates/carlist_v15/images/find1_2.gif',1)" onmouseout="MM_swapImgRestore()" alt="Find A Car" />
                    </a>
                </td>
                <td width="183" align="left" valign="top">
                    <a href="addlisting.php">
                        <img src="templates/carlist_v15/images/sell1_1.gif" name="Image2" width="183" height="57" border="0" id="Image2" onmouseover="MM_swapImage('Image2','','templates/carlist_v15/images/sell1_2.gif',1)" onmouseout="MM_swapImgRestore()" alt="Sell A Car" />
                    </a>
                </td>
            </tr>
        </table>
	</div>
	<!-- menu bar end -->