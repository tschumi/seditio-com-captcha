<?php
/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net

[BEGIN_SED]
File=plugins/comcaptcha/comcaptcha.tags.php
Version=100
Updated=2006-apr-23
Type=Plugin
Author=riptide
Description=Plugin to protect the comments for guests with a CAPTCHA.
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=comcaptcha
Part=page.tags
File=comcaptcha.tags
Hooks=page.tags
Tags=
Order=10
[END_SED_EXTPLUGIN]

==================== */

if (!defined('SED_CODE')) { die("Wrong URL."); }

if ($usr['id'] == '0')
	{
    $verifyimg = "<img src='plugins/comcaptcha/inc/captcha.php' width='200' height='60' alt='CAPTCHA'>";
    $verifyinput = "<input name=\"rverify\" type=\"text\" id=\"rverify\" size=\"10\" maxlength=\"6\">";

    $comments_display = str_replace('<p><input type="submit"', '<p>'.$verifyimg.'<br />'.$verifyinput.'</p>'.'<p><input type="submit"', $comments_display);

    $t->assign(array(
        "PAGE_COMMENTS_DISPLAY" => $comments_display,
        ));
	}

?>
