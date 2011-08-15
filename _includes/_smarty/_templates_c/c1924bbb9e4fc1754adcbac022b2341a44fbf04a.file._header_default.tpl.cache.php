<?php /* Smarty version Smarty-3.0.8, created on 2011-08-14 20:50:26
         compiled from "_templates/_header_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12994e4818f25ba357-95518069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1924bbb9e4fc1754adcbac022b2341a44fbf04a' => 
    array (
      0 => '_templates/_header_default.tpl',
      1 => 1313347820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12994e4818f25ba357-95518069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" type="text/css" href=
  "http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&amp;subset=Latin" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />

  <title><?php echo $_smarty_tpl->getVariable('page_title')->value;?>
 - <?php echo $_smarty_tpl->getVariable('USER')->value['NAME'];?>
</title>
  <link href="_templates/default/css/style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="_templates/default/images/favicon.png" />
  <script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/439/web-gallery/static/js/visual.js" type="text/javascript"></script>
  <script src="_templates/default/js/mango.js" type="text/javascript"></script>
  <script type='text/javascript' src='_templates/default/js/scriptaculous.js?load=effects'></script>
  <style type="text/css">
<![CDATA[
  li.c6 {
  list-style: none
  }
  div.c5 {
  text-align:right; margin:3px;}
  div.c7 {
  text-align:left; padding-left:5px;}
  div.c4 {
  padding-top:0px; padding-bottom:0px;}
  div.c3 {
  clear:both;}
  div.c2 {
  text-align: center}
  img.c1 {
  vertical-align:middle;margin-right:5px;}
  ]]>
  </style>
</head>
<body>
  <div id="header_bar">
    <div class="mid" id="container">
      <div class="lefts">
	  <div id="top_habbo" style="background-image:url(http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $_smarty_tpl->getVariable('USER')->value['FIGURE'];?>
);"></div>
        <h1><?php echo $_smarty_tpl->getVariable('T_WELCOME_BACK')->value;?>
<?php echo $_smarty_tpl->getVariable('USER')->value['NAME'];?>
</h1>
      </div>

      <div class="right">
	  <div id="top_credits"></div><div class="top_text"><h1><?php echo $_smarty_tpl->getVariable('USER')->value['CREDITS'];?>
 <?php echo $_smarty_tpl->getVariable('T_CREDITS')->value;?>
</h1></div>
	  <div id="top_pixels"></div><div class="top_text"><h1><?php echo $_smarty_tpl->getVariable('USER')->value['PIXELS'];?>
 <?php echo $_smarty_tpl->getVariable('T_PIXELS')->value;?>
</h1></div>
	  <div id="top_users"></div><div class="top_text"><h1><?php echo $_smarty_tpl->getVariable('HOTEL')->value['ONLINECOUNT'];?>
 <?php echo $_smarty_tpl->getVariable('T_HABBOS_ONLINE')->value;?>
</h1></div>
     
      </div>
    </div>
  </div>
  <div id="content">
   <div id="top">
     <a style="float:left" href="index.php"><img src="_templates/default/images/logo.png" id="logo" border="0" name="logo" /></a>
	
	
 <div class="enterButton c2" id="enter_area" style="float:left;margin-top:-20px;">
        <a href="client.php" onclick="mango.client.popup(); return false;"><?php echo $_smarty_tpl->getVariable('T_ENTER_HABBO')->value;?>
</a>
      </div>

    <ul id="menu">
	
      <li><a href="me.php"><?php echo $_smarty_tpl->getVariable('T_NAV_ME')->value;?>
</a></li>

      <li><a href="myaccount.php"><?php echo $_smarty_tpl->getVariable('T_NAV_MY_ACCOUNT')->value;?>
</a></li>

      <li><a href="articles.php"><?php echo $_smarty_tpl->getVariable('T_NAV_NEWS')->value;?>
</a></li>

      <li><a href="logout.php"><?php echo $_smarty_tpl->getVariable('T_NAV_LOGOUT')->value;?>
</a></li>
    </ul>

   </div>

  

    <div class="c2">
    
    </div><br />

     <!--  <div class="content-box" style="width:100%;">

        <div class="content-box-content">
<div class="topnews" style="background:url(_templates/default/images/top_pic.jpg) no-repeat;">
<h1>Erotisches Habbo CMS!</h1>
So sieht's aus liebe Porno Fans! Wir..
</div>
        </div>
      </div> -->
<br>