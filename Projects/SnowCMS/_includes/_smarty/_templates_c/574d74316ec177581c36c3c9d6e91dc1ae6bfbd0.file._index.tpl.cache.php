<?php /* Smarty version Smarty-3.0.8, created on 2011-08-15 13:01:26
         compiled from "_templates/_pages/_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140744e48fc86e12c27-19025606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '574d74316ec177581c36c3c9d6e91dc1ae6bfbd0' => 
    array (
      0 => '_templates/_pages/_index.tpl',
      1 => 1313406083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140744e48fc86e12c27-19025606',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $sha = sha1("_files/_header_index.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("_files/_header_index.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
$_template->assign('title','foo'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 
<body id="frontpage">
<div id="overlay"></div>

<div id="change-password-form" style="display: none;">

    <div id="change-password-form-container" class="clearfix">

        <div id="change-password-form-title" class="bottom-border">Forgot Password?</div>

        <div id="change-password-form-content" style="display: none;">

            <form method="post" action="https://www.habbo.com/account/password/identityResetForm" id="forgotten-pw-form">

                <input type="hidden" name="page" value="/?changePwd=true" />

                <span>Type in your Habbo account email address:</span>

                <div id="email" class="center bottom-border">

                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>

                    <div id="change-password-error-container" class="error" style="display: none;">Please enter a correct email address</div>

                </div>

            </form>

            <div class="change-password-buttons">

                <a href="#" id="change-password-cancel-link">Cancel</a>

                <a href="#" id="change-password-submit-button" class="new-button"><b>Send Email</b><i></i></a>

            </div>

        </div>

        <div id="change-password-email-sent-notice" style="display: none;">

            <div class="bottom-border">

                <span>Hey, we just sent you an email with a link that lets you reset your password.<br> 
<br> 
 
NOTE! Remember to check your "junk" folder too!</span>

                <div id="email-sent-container"></div>

            </div>

            <div class="change-password-buttons">

                <a href="#" id="change-password-change-link">Back</a>

                <a href="#" id="change-password-success-button" class="new-button"><b>OK</b><i></i></a>

            </div>

        </div>

    </div>

    <div id="change-password-form-container-bottom"></div>

</div>



<script type="text/javascript">

HabboView.add( function() {

     ChangePassword.init();





});

</script>



<div id="site-header">





    <form id="loginformitem" name="loginformitem" action="index.php"

          method="post">



    







        <div style="clear: both;"></div>



        <div id="site-header-content">



            <div id="habbo-logo"></div>



            <div id="login-form">





                <div id="login-form-email">

                    <label for="login-username"

                           class="login-text">Username</label>

                    <input tabindex="3" type="text" class="login-field" name="username" id="login-username"

                           value="" maxlength="48"/>

                    <input tabindex="6" type="checkbox" name="_login_remember_me" id="login-remember-me"

                           value="true"/>

                    <label for="login-remember-me">Keep me logged in</label>



<div id="landing-remember-me-notification" class="bottom-bubble" style="display:none;"> 
	<div class="bottom-bubble-t"><div></div></div> 
	<div class="bottom-bubble-c"> 
                By selecting this you will stay logged in to Habbo, until you &quot;Log out&quot;.

	</div> 
	<div class="bottom-bubble-b"><div></div></div> 
</div> 


                </div>



                <div id="login-form-password">

                    <label for="login-password" class="login-text">Password</label>

                    <input tabindex="4" type="password" class="login-field" name="password"

                           id="login-password" maxlength="32"/>



                    <div id="login-forgot-password">

                        <a href="#" id="forgot-password"><span>Forgot your password?</span></a>

                    </div>

                </div>



                <div id="login-form-submit">

                    <input type="submit" value="Login" class="login-top-button"

                           id="login-submit-button"/>

                    <a href="#" tabindex="5"

                       id="login-submit-new-button"><span>Login</span></a>

                </div>



            </div>



           



<noscript>

<div id="alert-javascript-container">

    <div id="alert-javascript-title">

        Missing JavaScript support

    </div>

    <div id="alert-javascript-text">

        Javascript is disabled on your browser. Please enable JavaScript or upgrade to a Javascript-capable browser to use Habbo :)

    </div>

</div>

</noscript>



<div id="alert-cookies-container" style="display:none">

    <div id="alert-cookies-title">

        Missing cookie support

    </div>

    <div id="alert-cookies-text">

        Cookies are disabled on your browser. Please enable cookies to use Habbo.

    </div>

</div>

<script type="text/javascript">

    document.cookie = "habbotestcookie=supported";

    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;

    if (cookiesEnabled) {

        var date = new Date();

        date.setTime(date.getTime()-24*60*60*1000);

        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();

    } else {

        $('alert-cookies-container').show();

    }

</script>



            <script type="text/javascript">

                HabboView.add(function() {

                    LandingPage.init();

                    if (!LandingPage.focusForced) {

                        LandingPage.fieldFocus('login-username');

                    }

                });

            </script>



        </div>



    </form>



</div>



<div id="fp-container">

    <div id="content">

    <div id="column1" class="column"> 
			     		
				<div class="habblet-container ">		
	
						<div style="width: 890px; margin: 0 auto">

       
</div>



<div id="frontpage-image-container">





    <div id="join-now-button-container">

        <div id="join-now-button-wrapper-fb">

            <div class="join-now-alternative">&nbsp;</div>

            <div class="join-now-button">

              

                <span class="close"></span>

            </div>

            <div class="join-now-alternative">

                <a id="register-link-fb" href="/quickregister/start" onclick="startRegistration(this); return false;">

                or create a Habbo account

                </a>

            </div>

        </div>

        <div id="join-now-button-wrapper">

            <div class="join-now-alternative">

                <a href="/quickregister/start" class="newusers" onclick="startRegistration(this); return false;"><b>New to Habbo?</b><span style="color: #8f8f8f;">Click here to</span></a>

            </div>

            <div class="join-now-button">

                <a class="join-now-link" id="register-link" href="/quickregister/start" onclick="startRegistration(this); return false;"> 

                    <span class="join-now-text-big">Join now</span>

                    <span class="join-now-text-small">for Free</span>

                </a>

                <span class="close"></span>

            </div>


        </div>

    </div>

    <script type="text/javascript">

        function startRegistration(elem) {

            targetUrl = elem.href;

            if (typeof targetUrl == "undefined") {

                targetUrl = "/quickregister/start";

            }

            window.location.href = targetUrl;

        }

    </script>



    <div id="people-inside">

        <b><span><span class="stats-fig"><?php echo $_smarty_tpl->getVariable('HOTEL')->value['ONLINECOUNT'];?>
</span> <?php echo $_smarty_tpl->getVariable('T_USERS_ONLINE')->value;?>
</span></b>

        <i></i>

    </div>



    <a href="/quickregister/start" id="frontpage-image" style="background-image: url('http://images.habbo.com/c_images/Frontpage_images/front_page_beach.png')" onclick="startRegistration(this); return false;"></a>



</div>







<script type="text/javascript">

    document.observe("dom:loaded", function() {

        LandingPage.checkLoginButtonSetTimer();

    });

</script> 
	
						
							
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->

<?php $sha = sha1("_files/_footer_index.tpl" . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template("_files/_footer_index.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
$_template->assign('title','foo'); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>