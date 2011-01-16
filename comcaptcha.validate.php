<?php
/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/comcaptcha/comcaptcha.validate.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Plugin to protect the comments for guests with a CAPTCHA.
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=comcaptcha
Part=validation
File=comcaptcha.validate
Hooks=comments.send.first
Tags=
Order=10
[END_SED_EXTPLUGIN]

==================== */

if ($usr['id'] == '0')
	{
    $rverify  = sed_import('rverify','P','TXT');

    require("inc/php-captcha.inc.php");
    require('lang/comcaptcha.'.$usr['lang'].'.lang.php');

    if (!PhpCaptcha::Validate($rverify))
        {
        $error_string .= $L['plu_verification_failed']."<br />";
        }
    
    $usr['name'] = $L['plu_guest'];
    }

?>
