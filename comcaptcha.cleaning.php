<?php
/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/comcaptcha/comcaptcha.cleaning.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Plugin to protect the comments for guests with a CAPTCHA.
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=comcaptcha
Part=cleaning
File=comcaptcha.cleaning
Hooks=comments.send.new
Tags=
Order=10
[END_SED_EXTPLUGIN]

==================== */

if ($usr['id'] == '0')
	{
    $usr['name'] = '';
    }

?>