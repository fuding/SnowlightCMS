<?php /* Smarty version Smarty-3.0.8, created on 2011-08-15 21:11:09
         compiled from "_templates/_files/_subheader_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216844e496f4d6be907-57545309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651e7e0257df6c7bc4376702a8d0f968e4f3e530' => 
    array (
      0 => '_templates/_files/_subheader_default.tpl',
      1 => 1313435361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216844e496f4d6be907-57545309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars['f'] = new Smarty_variable(pathinfo($_SERVER['SCRIPT_NAME'],@PATHINFO_FILENAME), null, null);?>
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
        <li class="metab<?php if ($_smarty_tpl->getVariable('f')->value=="me"){?> selected<?php }?>"> 
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
	        
            <?php if ($_smarty_tpl->getVariable('f')->value=="me"){?>
			<li class="selected"> 
				Home
			</li>
            <?php }else{ ?>
            <li class=""> 
				<a href="index.php">Home</a> 
    		</li>
    		<?php }?>
             
    		<li class=""> 
				<a href="/home/<?php echo $_smarty_tpl->getVariable('USER')->value['NAME'];?>
">My Page</a> 
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