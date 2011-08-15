<?php /* Smarty version Smarty-3.0.8, created on 2011-08-14 06:29:34
         compiled from "_templates/_pages/_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178254e474ef2097ca7-12999063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df90f240bee13fd3132c54f5026ab070d10713e5' => 
    array (
      0 => '_templates/_pages/_register.tpl',
      1 => 1313296150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178254e474ef2097ca7-12999063',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />

  <title><?php echo $_smarty_tpl->getVariable('HOTEL')->value['SHORT_NAME'];?>
 - Register</title>
  <link href="_templates/default/css/register.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type=
  "text/javascript">
</script>
  <script src="_templates/default/js/mango.js" type="text/javascript">
</script>
  <script type="text/javascript">
//<![CDATA[

  var RecaptchaOptions = {
  theme: 'custom',
  lang: 'en',
  custom_theme_widget: 'recaptcha_widget'
  };
  //]]>
  </script>
  <style type="text/css">
/*<![CDATA[*/
  div.c3 {
  text-align: center}
  div.c2 {
  display: none;}
  input.c1 {
  margin:2px 0 0 10px; height:27px; width:80px;}
  /*]]>*/
  </style>
</head>

<body>
  <div id="container">
    <a href="index.php"><img src="_templates/default/images/logo.png" id="logo" border=
    "0" name="logo" /></a> <span id="stats"><?php echo $_smarty_tpl->getVariable('HOTEL')->value['ONLINECOUNT'];?>
 <?php echo $_smarty_tpl->getVariable('T_USERS_ONLINE')->value;?>
</span>

    <div id="clear"></div>
    <hr />

    <div id="user_taken">
      <?php echo $_smarty_tpl->getVariable('T_NAME_NOT_AVAILABLE')->value;?>

    </div>

    <div id="user_avaliable">
      <?php echo $_smarty_tpl->getVariable('T_NAME_AVAILABLE')->value;?>

    </div><?php echo $_smarty_tpl->getVariable('T_REGISTER_GREETING')->value;?>
<br />
    <br />

    <form action="" method="post">
      <table width="100%" border="0">
        <tr>
          <td width="25%"><?php echo $_smarty_tpl->getVariable('T_USERNAME')->value;?>
:</td>

          <td width="75%"><input type="text" name="username" id="username" />
          <input type="button" name="button2" id="button2" value="Check" class="c1"
          onmousedown="mango.register.checkUsername()" /></td>
        </tr>

        <tr>
          <td><?php echo $_smarty_tpl->getVariable('T_PASSWORD')->value;?>
:</td>

          <td><input type="password" name="password" id="password" /></td>
        </tr>

        <tr>
          <td><?php echo $_smarty_tpl->getVariable('T_CONFIRM_PASSWORD')->value;?>
:</td>

          <td><input type="password" name="confirm_password" id=
          "confirm_password" /></td>
        </tr>

        <tr>
          <td><?php echo $_smarty_tpl->getVariable('T_EMAIL')->value;?>
:</td>

          <td><input type="text" name="email" id="email" /></td>
        </tr>

        <tr>
          <td valign="top"><?php echo $_smarty_tpl->getVariable('T_CAPTCHA')->value;?>
:</td>

          <td>
            <div id="recaptcha_image"></div>
          </td>
        </tr>

        <tr>
          <td><?php echo $_smarty_tpl->getVariable('T_ENTER_CAPTCHA')->value;?>
:</td>

          <td>
            <div id="recaptcha_widget" class="c2">
              <input id="recaptcha_response_field" name="recaptcha_response_field" type=
              "text" /><script type="text/javascript" src=
              "http://api.recaptcha.net/challenge?k=6LcMLMYSAAAAANVvSVG_lfWXjiogALFaVdc1Nze8&amp;lang=en">
</script> <noscript><iframe src=
"http://api.recaptcha.net/noscript?k=6LcMLMYSAAAAANVvSVG_lfWXjiogALFaVdc1Nze8lang=en"
              height="200" width="500" frameborder="0"></iframe> 
              <textarea name="recaptcha_challenge_field" rows="3" cols="40">
</textarea> <input type="'hidden'" name="'recaptcha_response_field'" value=
"'manual_challenge'" /></noscript>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div id="avatar-plate"><img id="user" src="figure.php?figure=1" name=
            "user" /></div>
          </td>

          <td>
            <?php echo $_smarty_tpl->getVariable('T_GIRLS')->value;?>
<br />

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-515-45.hd-600-8.ch-884-76.lg-696-76.sh-740-76.ea-1401-76.ca-1815-62')"
            src=
            "figure.php?figure=hr-515-45.hd-600-8.ch-884-76.lg-696-76.sh-740-76.ea-1401-76.ca-1815-62&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-515-48.hd-625-22.ch-660-79.lg-700-64.ea-1406')"
            src=
            "figure.php?figure=hr-515-48.hd-625-22.ch-660-79.lg-700-64.ea-1406&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-540-34.hd-600-9.ch-640-62.lg-700-64.sh-907-70.he-1602-62.ca-1804-73')"
            src=
            "figure.php?figure=hr-540-34.hd-600-9.ch-640-62.lg-700-64.sh-907-70.he-1602-62.ca-1804-73&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-545-33.hd-600-1.ch-665-78.lg-715-89.sh-907-62')"
            src=
            "figure.php?figure=hr-545-33.hd-600-1.ch-665-78.lg-715-89.sh-907-62&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-545-39.hd-600-8.ch-655-62.lg-710-73.sh-730-62.he-1602-73.ca-1812')"
            src=
            "figure.php?figure=hr-545-39.hd-600-8.ch-655-62.lg-710-73.sh-730-62.he-1602-73.ca-1812&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-545-42.hd-600-28.ch-884-68.lg-700-68.sh-905-71.he-1601.ea-1406.fa-1')"
            src=
            "figure.php?figure=hr-545-42.hd-600-28.ch-884-68.lg-700-68.sh-905-71.he-1601.ea-1406.fa-1&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-890-31.hd-600-2.ch-660-62.lg-700-79.sh-906-62.he-1602-80.ca-1805-78')"
            src=
            "figure.php?figure=hr-890-31.hd-600-2.ch-660-62.lg-700-79.sh-906-62.he-1602-80.ca-1805-78&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-890-42.hd-629-1.ch-685-74.lg-710-74.sh-907-74.he-1608.ca-1815-74.wa')"
            src=
            "figure.php?figure=hr-890-42.hd-629-1.ch-685-74.lg-710-74.sh-907-74.he-1608.ca-1815-74.wa&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-890-47.hd-629-1.ch-685-78.lg-715-85.sh-735-72.he-1606-85.ca-1804-84')"
            src=
            "figure.php?figure=hr-890-47.hd-629-1.ch-685-78.lg-715-85.sh-735-72.he-1606-85.ca-1804-84&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-892-45.hd-600-1.ch-645-83.lg-720-83.sh-907-83.fa-1212.ca-1819')"
            src=
            "figure.php?figure=hr-892-45.hd-600-1.ch-645-83.lg-720-83.sh-907-83.fa-1212.ca-1819&amp;size=s" /></div><br />

            <br />
            <br />
            <br />
            <?php echo $_smarty_tpl->getVariable('T_BOYS')->value;?>
<br />

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-155-39.hd-180-1.ch-267-64.lg-281-64')" src=
            "figure.php?figure=hr-155-39.hd-180-1.ch-267-64.lg-281-64&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-165-32.hd-209-17.ch-878-1315-81.lg-3116-72-1315.ea-1401-62.fa-1212.')"
            src=
            "figure.php?figure=hr-165-32.hd-209-17.ch-878-1315-81.lg-3116-72-1315.ea-1401-62.fa-1212.&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-165-36.hd-180-1.ch-235-64.lg-285-64.sh-305-64.ea-1404-62.wa-2009-62')"
            src=
            "figure.php?figure=hr-165-36.hd-180-1.ch-235-64.lg-285-64.sh-305-64.ea-1404-62.wa-2009-62&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-165-40.hd-206-2.ch-255-77.lg-275-76.sh-305-78.ha-1010-65.ea-1404-78')"
            src=
            "figure.php?figure=hr-165-40.hd-206-2.ch-255-77.lg-275-76.sh-305-78.ha-1010-65.ea-1404-78&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-165-42.hd-180-1.ch-255-62.lg-280-64.sh-906-62.ea-1404-62.wa-2011')"
            src=
            "figure.php?figure=hr-165-42.hd-180-1.ch-255-62.lg-280-64.sh-906-62.ea-1404-62.wa-2011&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-165-45.hd-180-3.ch-215-62.lg-3116-64-73.sh-300-62')"
            src=
            "figure.php?figure=hr-165-45.hd-180-3.ch-215-62.lg-3116-64-73.sh-300-62&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-165-45.hd-207-9.ch-255-64.lg-275-64.sh-305-64')"
            src=
            "figure.php?figure=hr-165-45.hd-207-9.ch-255-64.lg-275-64.sh-305-64&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-893-33.hd-209-1.ch-3110-81-76.lg-270-80.fa-1202-80')"
            src=
            "figure.php?figure=hr-893-33.hd-209-1.ch-3110-81-76.lg-270-80.fa-1202-80&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-893-37.hd-180-1.ch-3111-68-67.lg-270-64.sh-906-62')"
            src=
            "figure.php?figure=hr-893-37.hd-180-1.ch-3111-68-67.lg-270-64.sh-906-62&amp;size=s" /></div>

            <div class="avatar"><img onclick=
            "mango.register.updateLook('hr-893-39.hd-180-7.ch-245-64.lg-281-64.sh-906-64.ea-1404-64')"
            src=
            "figure.php?figure=hr-893-39.hd-180-7.ch-245-64.lg-281-64.sh-906-64.ea-1404-64&amp;size=s" /></div>
          </td>
        </tr>

        <tr>
          <td><input name="figure" id="figure" type="hidden" /></td>

          <td><input type="submit" name="button" id="button" value="Register" /></td>
        </tr>
      </table>
    </form>
    <hr />

    <div class="c3">
      Bla pwoered by shizzleCMS ...
    </div>
  </div><br />
  <br />

  <div class="c3">
    
  </div>
</body>
</html>
