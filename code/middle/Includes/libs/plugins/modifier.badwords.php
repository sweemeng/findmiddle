<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * Type:    modifier
 * Name:    badwords
 * Version:    0.4
 * Date:    2003-04-12
 * Author:    Joscha Feth, joscha@feth.com, www.feth.com
 * Purpose: format a text having all "bad" words (defined in a file) x-ed out.
 * Usage:    There are three different badword-modes :)
 *             -    strict: matches bad words having a whitespace
 *                         before and after it and having the same
 *                         case as defined in the badwords-list.
 *
 *           -    normal: matches bad words which stand alone
 *                       and are not within another word.
 *                       this is the default
 *
 *           -    wild:    matches bad words also within other
 *                         words.
 *
 *
 *             In the template, use
 *            {$text|badwords}            =>    to use norml badword-mode and replace bad words by "*"
 *            or
 *            {$text|badwords:"x"}        =>    to use normal badword-mode and replace bad words by "x"
 *            or
 *            {$text|badwords:"*":"wild"}    =>    to use wild badword-mode and replace bad words by "*"
 * Params:
 *             string    subst        the character to use for substitution
 *            enum    type        the used badword-mode
 * Badwords:
 *             Just drop a file called badwords.txt in the same directory you copy the plugin to.
 *            Insert one bad word per line.
 * Install: Drop into the plugin directory
 * -------------------------------------------------------------
 *        CHANGES:    2003-04-12        -    got rid of some unneeded code    
 *                    2003-04-11        -    fixed some preg problems (thanks Monte)
 *                                        and improved array_walk by only running once
 *                                        through all words per mode and per template    
 *                    2003-04-10        -    fixed some bugs
 *                                        and improved badwordlist-handling (thanks messju)
 *                                        (man, this neologisms really get on my **** :-)
 *                    2003-04-10        -    created
 *
 * -------------------------------------------------------------
 */
function smarty_modifier_badwords($text,$subst = '*',$type = 'normal')
{
    static $badwords     =    null;
    static $pregs        =    array();
    
    if(!is_array($badwords)) {    
        //~ read bad words from the badword-file
        $badwords = file(dirname(__FILE__).DIRECTORY_SEPARATOR."badwords.txt");
    }

    if(!is_array($pregs[$type])) {
        $pregs[$type] = $badwords;
        //~ create preg-usable search pattern depending on the used badword-mode
        array_walk($pregs[$type],'smarty_modifier_badwords_walk',$type);
    }

    //~ replace all bad words in the text
    $text = preg_replace($pregs[$type],'str_repeat("'.$subst.'",strlen("\\1"))',$text);

    //~ return x-ed text
    return $text;
} //~ end function

function smarty_modifier_badwords_walk(&$badword,$key,$type)
{
    switch ($type) {
                //~ this is case 'normal'
                default:
                        $badword = '/(\b'.preg_quote(trim($badword)).'\b)/ie';
                        break;

        case    'wild':
                        $badword = '/('.preg_quote(trim($badword)).')/ie';
                        break;

        case    'strict':
                        $badword = '/(\b'.preg_quote(trim($badword)).'\b)/e';
                        break;
    } //~ end switch
} //~ end function
?>