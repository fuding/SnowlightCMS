<?php /* Smarty version Smarty-3.0.8, created on 2011-08-15 20:35:24
         compiled from "_templates/_files/_subheader_articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1284e4966ecc28365-47523673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bbf88aec4b4276da63c4feb732a8d371a68498f' => 
    array (
      0 => '_templates/_files/_subheader_articles.tpl',
      1 => 1313433317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1284e4966ecc28365-47523673',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body id="news" class=" "> 
<div id="overlay"></div> 
<div id="header-container"> 
	<div id="header" class="clearfix"> 
		<h1><a href="index.php"></a></h1> 
<div id="subnavi">

     <div id="subnavi-user">

         <ul>

             <li id="myfriends"><a href="#"><span>My Friends</span></a><span class="r"></span></li>

             <li id="mygroups"><a href="#"><span>My Groups</span></a><span class="r"></span></li>

             <li id="myrooms"><a href="#"><span>My Rooms</span></a><span class="r"></span></li>

         </ul>

     </div>

     <div id="subnavi-search">

         <div id="subnavi-search-upper">

         <ul id="subnavi-search-links">

                 <li><a href="https://help.habbo.com/login" target="habbohelp" >Help</a></li>

             <li><a href="logout.php?token=56f90d8e7f" class="userlink" id="signout">Sign Out</a></li>

         </ul>

         </div>

     </div>

     <div id="to-hotel">

                 <a href="client.php" class="new-button green-button" target="6dc8db79701b5ed97ab51eea67b8814d235ddc2f" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter Habbo Hotel</b><i></i></a>

     </div>

 </div>

 <script type="text/javascript">

 L10N.put("purchase.group.title", "Create a Group");

 document.observe("dom:loaded", function() {

     $("signout").observe("click", function() {

         HabboClient.close();

     });

 });

 </script><ul id="navi"> 
        <li class="metab selected"> 
<strong> 
<?php echo $_smarty_tpl->getVariable('USER')->value['NAME'];?>

</strong> 
<span></span> 
</li> 
		<li> 
			<a href="/community">Community</a> 
			<span></span> 
		</li> 
		<li> 
			<a href="/safety">Safety</a> 
			<span></span> 
		</li> 
		<li> 
			<a href="/credits">Credits</a> 
			<span></span> 
		</li> 
</ul> 
 
        <div id="habbos-online"><div class="rounded"><span><?php echo $_smarty_tpl->getVariable('HOTEL')->value['ONLINECOUNT'];?>
 members online</span></div></div> 
	</div> 
</div> 
 
<div id="content-container"> 
 
<div id="navi2-container" class="pngbg"> 
    <div id="navi2" class="pngbg clearfix"> 
	<ul> 
			<li class="selected"> 
				Home
				
			</li> 
    		<li class=""> 
				<a href="/home/moritz83">My Page</a> 
    		</li> 
    		<li class=""> 
				<a href="https://www.habbo.com/profile">Account Settings</a> 
    		</li> 
    		<li class=" last"> 
				<a href="/credits/habboclub">Habbo Club/VIP</a> 
    		</li> 
	</ul> 
    </div> 
</div>