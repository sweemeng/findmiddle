<?php /* Smarty version 2.6.18, created on 2010-10-23 04:14:44
         compiled from carlist_v15/services-panel.tpl */ ?>
<table id="services" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center">
            <table width="230" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="19" align="left" valign="top"><img src="templates/carlist_v15/images/finder_topleft.gif" width="19" height="27" /></td>
                    <td align="left" valign="top" class="featured_car_dealers_header"><img src="templates/carlist_v15/images/header_services.gif" width="60" height="23" /></td>
                    <td width="17" align="left" valign="top"><img src="templates/carlist_v15/images/finder_topright.gif" width="17" height="27" /></td>
                </tr>
                <tr>
                    <td height="5" colspan="3" align="left" valign="top"><img src="templates/carlist_v15/images/clear.gif" width="1" height="5" /></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="post-car-request.php"><img src="templates/carlist_v15/images/services_car_requests.gif" alt="Car Requests" border="0" width="227" height="90"/></a></td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="services.php?buy_car=true"><img src="templates/carlist_v15/images/services_buying_2.gif" alt="Need Help Buying A Car?" border="0" width="227" height="90"/></a></td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="services.php?sell_car=true"><img src="templates/carlist_v15/images/services_selling_3.gif" alt="Need Help Selling Your Car?" border="0" width="227" height="90"/></a></td>
    </tr>
        <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="services.php?myeg=true"><img src="templates/carlist_v15/images/services_myeg_4.png" alt="MyEG Services" border="0" width="227" height="90"/></a></td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="notification-service.php"><img src="templates/carlist_v15/images/services_email_notification_5.png" alt="Email Notification" border="0" width="227" height="90"/></a></td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF">
            <iframe src="http://www.facebook.com/plugins/likebox.php?id=131182876912587&amp;width=227&amp;connections=10&amp;stream=false&amp;header=true&amp;height=287"
                scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:227px; height:287px; margin-bottom:6px;" allowTransparency="true"></iframe>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF">
            <a href="http://www.twitter.com/carlistmalaysia" target="_blank">
                <img src="http://twitter-badges.s3.amazonaws.com/follow_us-a.png" alt="Follow carlistmalaysia on Twitter" style="float:none;" />
            </a>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF">
        <?php if ($this->_tpl_vars['index']): ?>
            <a href="http://www.drift.com.my/" target="_blank">
                <img alt="Drift.com.my" src="templates/carlist_v15/images/banner_drift.jpg" height="285" width="227" />
            </a><br />
            <a href="http://www.malaysiads.com" target="_blank">
                <img alt="Malaysiads.com" src="templates/carlist_v15/images/banner_malaysiads.png" height="263" width="227" />
            </a>
        <?php else: ?>
            <script type="text/javascript"><!--
            google_ad_client = "pub-8199136552751886";
            /* Searchresults-Sidebar160x600 */
            google_ad_slot = "2178471946";
            google_ad_width = 160;
            google_ad_height = 600;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        <?php endif; ?>
        </td>
    </tr>
</table>