<?php /* Smarty version Smarty-3.0.8, created on 2011-08-14 20:22:39
         compiled from "_templates/_pages/_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306804e4811e965f024-30554241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f975dc09f7fcd5074f85bcb8df277168378f689e' => 
    array (
      0 => '_templates/_pages/_articles.tpl',
      1 => 1313346158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306804e4811e965f024-30554241',
  'function' => 
  array (
  ),
  'cache_lifetime' => 60,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config("me.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php $sha = sha1("_header_default.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("_header_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
$_template->assign('title','foo'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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

      <li><a href="news.php"><?php echo $_smarty_tpl->getVariable('T_NAV_NEWS')->value;?>
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
        <div class="content-box" id="main_left">
      <div class="boxHeaderNews">
        <h2 style="color:#5AA600;padding-left:5px;font-family:Ubuntu;"><?php echo $_smarty_tpl->getVariable('A_ARTICLE_TITLE')->value;?>
</h2>
      </div>

      <div class="content-box-content">
        <p><span class="c3"><?php echo $_smarty_tpl->getVariable('A_ARTICLE_CONTENT')->value;?>
</span></p><br />
        <br />
      </div>
    </div>

    <div id="main_right">
      <div class="news-articles-box">
        <div class="news-articles-box-green">
          <h2 class="title">More Articles</h2>
        </div>

        <div class="c7">
          <?php echo $_smarty_tpl->getVariable('ARTICLE_LIST')->value;?>

        </div>
      </div><br />
      <br />
    
    </div>

    <div id="clear"></div>


<?php $sha = sha1("_footer_default.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("_footer_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
$_template->assign('title','foo'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>