<?php /* Smarty version 2.6.18, created on 2010-10-23 04:14:44
         compiled from carlist_v15/form-simple-search.tpl */ ?>
<div>
<?php if ($this->_tpl_vars['sellerid']): ?>

        <div style="float:left;">
        <img src="templates/carlist_v15/images/img_car1.gif" width="121" 
            height="85" class="image" style="margin:5px;" alt="Car Image" />
    </div>
    <div style="float:left;">
        <form id="form-simple-search-box" name="form-simple-search-box" action="dealer-listings.php?action=list" method="post">
            <p>
            <input name="fulltext_query" type="text" class="textSmall" id="fulltext_query" size="33" />
            <input name="sellerid" id="sellerid" type="hidden" value="<?php echo $this->_tpl_vars['sellerid']; ?>
" />
            <input name="myaction" type="hidden" value="store_search"/>
            </p>
            <input name="submit" type="image" value="<?php echo @SEARCH; ?>
"
                src="templates/carlist_v15/images/btn_searchresults.gif" width="122"
                height="22" border="0" alt="Full Text Search Button" />
            <br/>
            <a href="used-cars/seller/<?php echo $this->_tpl_vars['sellerid']; ?>
/?myaction=store_search" class="textSmall">View All Cars (<?php echo $this->_tpl_vars['userdata']['all_count']; ?>
)</a>
        </form>
    </div>
    <div style="clear:both;"><p/></div>

<?php elseif ($this->_tpl_vars['show_small_simple_search']): ?>

<table width="470" border="0" cellspacing="0" cellpadding="0" class="searchbox_bg">
<tr>
    <td width="12" align="left" valign="top">
        <img src="templates/carlist_v15/images/search_left.gif" width="12" height="68" alt="search left" />
    </td>
    <td align="left" valign="middle">
        <form id="form-simple-search-box" name="form-simple-search-box" action="listings.php?action=view" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="78" align="left" valign="middle" class="text12White">
                <strong>FIND A CAR</strong>
            </td>
            <td width="150" align="left" valign="middle" >
                <input name="fulltext_query" type="text" class="textSmall" id="fulltext_query" size="38" />
                <input name="myaction" type="hidden" value="new_search"/>
            </td>
            <td align="center" valign="middle">
                <input name="submit" type="image" value="<?php echo @SEARCH; ?>
"
                    src="templates/carlist_v15/images/btn_go.gif" width="95"
                    height="20" border="0" alt="Full Text Search Button" />
            </td>
        </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left" valign="middle" width="15%">
                <span class="textSmallW">&nbsp;</span>
            </td>
            <td align="left" valign="middle">
                <input type="checkbox" name="extra_sb" value="true" />
                <label for="sambung_bayar" class="textSmallW">Sambung Bayar&nbsp;</label>
            </td>
            <td align="right" valign="middle">
                <a href="adv-search.php" class="text11White">Advanced Search</a>
            </td>
        </tr>
        <tr>
            <td colspan="3">
            <script type="text/javascript"><!--
            google_ad_client = "pub-8199136552751886";
            /* Searchresults-Searchbar450x12 */
            google_ad_slot = "3374663823";
            google_ad_width = 450;
            google_ad_height = 12;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
            </td>
        </tr>
        </table>
        </form>
    </td>
    <td width="8" align="right" valign="top">
        <img src="templates/carlist_v15/images/search_right.gif" width="8" height="68" alt="search right" />
    </td>
</tr>
</table>

<?php else: ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="searchbox_bg">
<tr>
    <td width="30" align="left" valign="top">
        <img src="templates/carlist_v15/images/search_left_2.gif" width="12" height="100" alt="search left" />
    </td>
    <td align="left" valign="middle">
        <form id="form-simple-search-box" name="form-simple-search-box" action="listings.php?action=view" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="left" valign="middle" class="text13White">
                <strong>FIND A CAR</strong>
            </td>
            <td align="left" valign="middle">
                <input name="fulltext_query" type="text" class="text13" id="fulltext_query" size="60" />
                <input name="myaction" type="hidden" value="new_search"/>
            </td>
            <td align="middle" valign="middle">
                <input name="submit" type="image" value="<?php echo @SEARCH; ?>
"
                    src="templates/carlist_v15/images/btn_go.gif"
                    width="95" height="20" border="0" alt="Full Text Search Button" />
            </td>
        </tr>
        </table>
        <table width="99%" border="0" cellspacing="2" cellpadding="0">
        <tr>
            <td align="left" valign="middle" width="12%" >
                <span class="textSmallW">&nbsp;</span>
            </td>
            <td align="left" valign="middle">
                <input type="checkbox" name="extra_sb" value="true" />
                <label for="sambung_bayar" class="textSmallW">Sambung Bayar&nbsp;</label>
            </td>
            <td align="right" valign="middle">
                <a href="adv-search.php" class="text11White">Advanced Search</a>
            </td>
        </tr>
        <tr>
            <td colspan="3">
            <script type="text/javascript"><!--
            google_ad_client = "pub-8199136552751886";
            /* Homepage-Searchbar728x15 */
            google_ad_slot = "9524382577";
            google_ad_width = 728;
            google_ad_height = 15;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
            </td>
        </tr>
        </table>
        </form>
    </td>
    <td width="30" align="right" valign="top">
        <img src="templates/carlist_v15/images/search_right_2.gif" width="8" height="100" alt="search right" />
    </td>
</tr>
</table>

<?php endif; ?>

</div>