{config_load file="me.conf" section="setup"}
{include file="_files/_header_default.tpl" title=foo}
<div id="container"> 
	<div id="content" style="position: relative" class="clearfix"> 
    <div id="column1" class="column"> 
			     		
				<div class="habblet-container ">		
	
						<div id="new-personal-info" style="background-image:url(http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/464/web-gallery/v2/images/personal_info/hotel_views/htlview_us.png)"> 
 
 
    <div class="enter-hotel-btn"> 
        <div class="open enter-btn"> 
                <a href="http://www.habbo.com/client" target="6dc8db79701b5ed97ab51eea67b8814d235ddc2f" onclick="HabboClient.openOrFocus(this); return false;">Enter Habbo Hotel<i></i></a> 
            <b></b> 
        </div> 
    </div> 
 
	<div id="habbo-plate"> 
		    <a href="http://www.habbo.com/identity/avatars"> 
				<img alt="{$USER.NAME}" src="http://habbo.de/habbo-imaging/avatarimage?figure={$USER.FIGURE}" /> 
		</a> 
	</div> 
 
	<div id="habbo-info"> 
		<div id="motto-container" class="clearfix">			
			<strong>{$USER.NAME}:</strong> 
			<div> 
				<span title="What's on your mind today?">{$USER.MOTTO}</span> 
				<p style="display: none"><input type="text" length="30" name="motto" value="footer_enable_toggle"/></p> 
			</div> 
		</div> 
		<div id="motto-links" style="display: none"><a href="#" id="motto-cancel">Cancel</a></div> 
	</div> 
	
	<ul id="link-bar" class="clearfix">		
		<li class="credits"> 
			<a href="http://www.habbo.com/credits">{$USER.CREDITS}</a> Credits
		</li> 
		
		 <li class="club"> 
            <span id="joinclub"> 
                <a href="/credits/habboclub">Join Habbo Club &raquo;</a> 
            </span> 
		 </li>	
		
		    <li class="activitypoints"> 
			    <a href="/credits/pixels">{$USER.PIXELS}</a> Pixels
		    </li> 
	</ul> 
	
	<div id="habbo-feed"> 
		<ul id="feed-items"> 

                <li class="small" id="feed-trading-enabled">Trading is on <a href="https://www.habbo.com/profile/securitysettings?tab=7">Click here to turn it off</a></li> 
 
	        <li class="small" id="feed-lastlogin"> 
                Last signed in:
                {$LASTVISIT}
	        </li> 
		</ul> 
	</div> 
	<p class="last"></p> 
</div> 
 
<script type="text/javascript"> 
	HabboView.add(function() {
		L10N.put("personal_info.motto_editor.spamming", "Don\'t spam me, bro!");
		PersonalInfo.init("{$USER.MOTTO}");
	});
</script> 
	
						
							
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
		
			 
 
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix orange "> 
	
							<h2 class="title">Hot Stuff
							</h2> 
						<div id="hotcampaigns-habblet-list-container"> 
    <ul id="hotcampaigns-habblet-list"> 
       {$HOT_CAMPAIGNS} 
    </ul> 
</div> 
	
						
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container minimail" id="mail">		
						<div class="cbb clearfix blue "> 
	
							<h2 class="title">My messages
							</h2> 
						<div id="minimail"> 
    <div class="minimail-contents"> 
<a href="#" class="new-button compose"><b>Compose</b><i></i></a> 
<div class="clearfix labels nostandard"> 
    <ul class="box-tabs"> 
        <li  class="selected"><a href="#" label="inbox">Inbox</a><span class="tab-spacer"></span></li> 
        <li ><a href="#" label="sent">Sent</a><span class="tab-spacer"></span></li> 
        <li ><a href="#" label="trash">Trash</a><span class="tab-spacer"></span></li> 
    </ul> 
</div> 
 
 
<div id="message-list" class="label-inbox"> 
<div class="new-buttons clearfix"> 
	<div class="labels inbox-refresh"><a href="#" class="new-button green-button" label="inbox" style="float: left; margin: 0"><b>Check for new mail</b><i></i></a></div> 
</div> 
<div style="clear: both; height: 1px"></div> 
 
<div class="navigation"> 
    <div class="unread-selector"><input type="checkbox" class="unread-only"/> only unread</div> 
</div> 
 
 
	<p class="no-messages"> 
	       No messages	   
	</p> 
 
</div>	</div> 
	<div id="message-compose-wait"></div> 
    <form style="display: none" id="message-compose"> 
        <div>To</div> 
        <div id="message-recipients-container" class="input-text" style="width: 426px; margin-bottom: 1em"> 
        	<input type="text" value="" id="message-recipients" /> 
        	<div class="autocomplete" id="message-recipients-auto"> 
        		<div class="default" style="display: none;">Type the name of your friend</div> 
        		<ul class="feed" style="display: none;"></ul> 
        	</div> 
        </div> 
        <div>Subject<br/> 
        <input type="text" style="margin: 5px 0" id="message-subject" class="message-text" maxlength="100" tabindex="2" /> 
        </div> 
        <div>Message<br/> 
        <textarea style="margin: 5px 0" rows="5" cols="10" id="message-body" class="message-text" tabindex="3"></textarea> 
        </div> 
        <div class="new-buttons clearfix"> 
            <a href="#" class="new-button preview"><b>Preview</b><i></i></a> 
            <a href="#" class="new-button send"><b>Send</b><i></i></a> 
        </div> 
    </form>	
</div> 
<script type="text/javascript"> 
	L10N.put("minimail.compose", "Compose").put("minimail.cancel", "Cancel")
		.put("bbcode.colors.red", "Red").put("bbcode.colors.orange", "Orange")
    	.put("bbcode.colors.yellow", "Yellow").put("bbcode.colors.green", "Green")
    	.put("bbcode.colors.cyan", "Cyan").put("bbcode.colors.blue", "Blue")
    	.put("bbcode.colors.gray", "Gray").put("bbcode.colors.black", "Black")
    	.put("minimail.empty_body.confirm", "Are you sure you want to send the message with an empty body?")
    	.put("bbcode.colors.label", "Color").put("linktool.find.label", " ")
    	.put("linktool.scope.habbos", "Habbos").put("linktool.scope.rooms", "Rooms")
    	.put("linktool.scope.groups", "Groups").put("minimail.report.title", "Report message to moderators");
 
    L10N.put("date.pretty.just_now", "just now");            
    L10N.put("date.pretty.one_minute_ago", "1 minute ago");            
    L10N.put("date.pretty.minutes_ago", "{0} minutes ago");            
    L10N.put("date.pretty.one_hour_ago", "1 hour ago");            
    L10N.put("date.pretty.hours_ago", "{0} hours ago");            
    L10N.put("date.pretty.yesterday", "yesterday");            
    L10N.put("date.pretty.days_ago", "{0} days ago");            
    L10N.put("date.pretty.one_week_ago", "1 week ago");            
    L10N.put("date.pretty.weeks_ago", "{0} weeks ago");            
	new MiniMail({ pageSize: 10, 
	   total: 0, 
	   friendCount: 1, 
	   maxRecipients: 50, 
	   messageMaxLength: 20, 
	   bodyMaxLength: 4096
    });
</script> 
	
						
							
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
	
						
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix default "> 
<div class="box-tabs-container clearfix"> 
    <h2>Habbos</h2> 
    <ul class="box-tabs"> 
        <li id="tab-0-5-1" class="selected"><a href="#">Search Habbos</a><span class="tab-spacer"></span></li> 
    </ul> 
</div> 
    <div id="tab-0-5-1-content" > 
<div class="habblet-content-info"> 
    <a name="habbo-search">Type in the first characters of the name to search for other Habbos.</a> 
</div> 
<div id="habbo-search-error-container" style="display: none;"><div id="habbo-search-error" class="rounded rounded-red"></div></div> 
<br clear="all"/> 
<div id="avatar-habblet-list-search"> 
    <input type="text" id="avatar-habblet-search-string"/> 
    <a href="#" id="avatar-habblet-search-button" class="new-button"><b>Search</b><i></i></a> 
</div> 
 
<br clear="all"/> 
 
<div id="avatar-habblet-content"> 
<div id="avatar-habblet-list-container" class="habblet-list-container"> 
        <ul class="habblet-list"> 
        </ul> 
 
</div> 
<script type="text/javascript"> 
    L10N.put("habblet.search.error.search_string_too_long", "The search keyword was too long. Maximum length is 30 characters.");
    L10N.put("habblet.search.error.search_string_too_short", "The search keyword was too short. 2 characters required.");
    L10N.put("habblet.search.add_friend.title", "Add to friend list");
	new HabboSearchHabblet(2, 30);
 
</script> 
</div> 
 
<script type="text/javascript"> 
    Rounder.addCorners($("habbo-search-error"), 8, 8);
</script>    </div> 
 
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
	
						
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<div id="column2" class="column"> 
			     		
				<div class="habblet-container ">		
	
						
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container news-promo">		
						<div class="cbb clearfix notitle "> 
	
							
						<div id="newspromo"> 
        <div id="topstories"> 
	        {$TOPSTORY_NEWS}
            <div id="topstories-nav" style="display: none"><a href="#" class="prev">&#171; Previous</a><span>1</span> / 3<a href="#" class="next">Next &#187;</a></div> 
        </div> 
        <ul class="widelist"> 
            {$SUBNEWS}            
            <li class="last"><a href="/articles">More news &raquo;</a></li>            
        </ul> 
</div> 
<script type="text/javascript"> 
	document.observe("dom:loaded", function() { NewsPromo.init(); });
</script> 
	
						
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container"> 
<!-- Ad Container -->
</div> 
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix red "> 
<div class="box-tabs-container clearfix"> 
    <h2>Staff Picks</h2> 
    <ul class="box-tabs"> 
        <li id="tab-1-3-1"><a href="#">Rooms</a><span class="tab-spacer"></span></li> 
        <li id="tab-1-3-2" class="selected"><a href="#">Groups</a><span class="tab-spacer"></span></li> 
    </ul> 
</div> 
    <div id="tab-1-3-1-content"  style="display: none"> 
    		<div class="progressbar"><img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/464/web-gallery/images/progress_bubbles.gif" alt="" width="29" height="6" /></div> 
    		<a href="/habblet/proxy?hid=h17" class="tab-ajax"></a> 
    </div> 
    <div id="tab-1-3-2-content" > 
<div id="staffpicks-groups-habblet-list-container" class="habblet-list-container groups-list"> 
    <ul class="habblet-list two-cols"> 
        {$HOT_STUFF}
        
    </ul> 
</div> 
    </div> 
 
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix blue "> 
	
							<h2 class="title">Events
							</h2> 
						<div id="current-events"> 
	<div class="category-selector"> 
	<p>Browse latest events by their category</p> 
	<select id="event-category"> 
		<option value="1">Parties &amp; Music</option> 
		<option value="2">Trading</option> 
		<option value="3">Games</option> 
		<option value="4">Earth Hour Gatherings</option> 
		<option value="5">Debates &amp; Discussion</option> 
		<option value="6">Grand Openings</option> 
		<option value="7">Dating</option> 
		<option value="8">Jobs</option> 
		<option value="9">Group Events</option> 
		<option value="10">Performance</option> 
		<option value="11">Help Desk</option> 
	</select> 
	</div> 
	<div id="event-list"> 
<ul class="habblet-list"> 
 
    <li class="even room-occupancy-2" roomid="37577716"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=37577716" onclick="HabboClient.roomForward(this, '37577716', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">1 Coin Shop!</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/starjustinback1">starjustinback1</a></span> 
		<p>come everything only 1 coin! (<span class="event-date">9:04 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-3" roomid="48720482"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=48720482" onclick="HabboClient.roomForward(this, '48720482', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Cc|</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/ipod1rules">ipod1rules</a></span> 
		<p>COme!  (<span class="event-date">9:04 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="31504586"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=31504586" onclick="HabboClient.roomForward(this, '31504586', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Doctors</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/%21.%3A%21RoXy%21%3A.%21">!.:!RoXy!:.!</a></span> 
		<p>Come In :D | (<span class="event-date">9:03 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-1" roomid="49534585"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49534585" onclick="HabboClient.roomForward(this, '49534585', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Selling Stages</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/deathleaf">deathleaf</a></span> 
		<p>come (<span class="event-date">9:03 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="31366714"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=31366714" onclick="HabboClient.roomForward(this, '31366714', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d"><img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/464/web-gallery/images/fonts/volter/165.gif" class="vchar" /> 1 COIN SHOP <img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/464/web-gallery/images/fonts/volter/165.gif" class="vchar" /></a> 
        </span> 
		<span class="event-owner"> by <a href="/home/Play-">Play-</a></span> 
		<p>:)\ (<span class="event-date">9:03 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="49534524"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49534524" onclick="HabboClient.roomForward(this, '49534524', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">plz donate coins to me :(</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/.Redninja">.Redninja</a></span> 
		<p>i need coins for vip plzz donate some (<span class="event-date">9:03 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="31440202"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=31440202" onclick="HabboClient.roomForward(this, '31440202', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">1c shop come now </a> 
        </span> 
		<span class="event-owner"> by <a href="/home/IKINGOFDARKNESS">IKINGOFDARKNESS</a></span> 
		<p>everything i have is 1c (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="49477522"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49477522" onclick="HabboClient.roomForward(this, '49477522', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Country Lodge|</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/Shankdefied11">Shankdefied11</a></span> 
		<p>we have two honeymooners suites and one family suite, male/female bathrooms and kitchen/dining. (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="49423842"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49423842" onclick="HabboClient.roomForward(this, '49423842', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Adopting babies</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/Maca%21%2C">Maca!,</a></span> 
		<p>come (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="41801844"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=41801844" onclick="HabboClient.roomForward(this, '41801844', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">s/2 for 3c</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/jasmen2007">jasmen2007</a></span> 
		<p>com (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="47215786"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=47215786" onclick="HabboClient.roomForward(this, '47215786', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">buying styling chairs|</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/LoveYouBabes123">LoveYouBabes123</a></span> 
		<p>tuyuou (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="49528971"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49528971" onclick="HabboClient.roomForward(this, '49528971', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">MASSIVE 1C SHOP</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/darkliam3k">darkliam3k</a></span> 
		<p>MASSIVE SALE EVERYTHING 1C (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="49524895"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49524895" onclick="HabboClient.roomForward(this, '49524895', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Donate please [rd desc]</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/MmmImLovinIt">MmmImLovinIt</a></span> 
		<p>Heya, Im trying to get VIP and i have 10c and a few furni, could you either buy furni 1c per or don- (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="49530235"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49530235" onclick="HabboClient.roomForward(this, '49530235', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">ff win 20 c</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/nat-ghana">nat-ghana</a></span> 
		<p>vbcnm (<span class="event-date">9:02 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="10366669"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=10366669" onclick="HabboClient.roomForward(this, '10366669', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">COME TO HIDE OUT BURGERRS</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/Clockelvis">Clockelvis</a></span> 
		<p>EATT! (<span class="event-date">9:01 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-3" roomid="48688370"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=48688370" onclick="HabboClient.roomForward(this, '48688370', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Gay Bi Les Trans Dating |</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/DDRfreek">DDRfreek</a></span> 
		<p>Come be yourself, with booths | (<span class="event-date">9:00 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="49513225"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49513225" onclick="HabboClient.roomForward(this, '49513225', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">party</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/thewolfman444">thewolfman444</a></span> 
		<p>come now (<span class="event-date">9:00 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="47412753"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=47412753" onclick="HabboClient.roomForward(this, '47412753', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">Donate ANY Furni PLZZZZZZ</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/k4tniss">k4tniss</a></span> 
		<p>Thank Yuuuuuu :) ||||| (<span class="event-date">9:00 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="even room-occupancy-2" roomid="49534001"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=49534001" onclick="HabboClient.roomForward(this, '49534001', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">relaxing room</a> 
        </span> 
		<span class="event-owner"> by <a href="/home/linda5480">linda5480</a></span> 
		<p>with jaccuzie and 3 beds 2 pets and .......... (<span class="event-date">8:59 AM</span>)</p> 
    </div> 
</li> 
 
    <li class="odd room-occupancy-2" roomid="34052764"> 
    <div title="Go to the room where this event is held"> 
        <span class="event-name"> 
                <a href="http://www.habbo.com/client?forwardId=2&amp;roomId=34052764" onclick="HabboClient.roomForward(this, '34052764', 'private'); return false;" target="93a18165a3fc63108e23a52b5879b7308a93f46d">1 coin shop </a> 
        </span> 
		<span class="event-owner"> by <a href="/home/Sirbrownman">Sirbrownman</a></span> 
		<p>come hc sofa 2c (<span class="event-date">8:59 AM</span>)</p> 
    </div> 
</li> 
</ul> 
	</div> 
</div> 
<script type="text/javascript"> 
	document.observe('dom:loaded', function() {
		CurrentRoomEvents.init();
	});
</script> 
	
						
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
 
 
</div> 
<script type="text/javascript"> 
HabboView.run();
</script> 
<div id="column3" class="column"> 
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container"> 
<!--JavaScript Tag // Tag for network 957: Sulake // Website: HabboHotel_US // Page: Me_Page // Placement: Me_Page marketing_button 160 x 110 (2131064) // created at: Jun 17, 2010 11:19:41 AM-->

<script language="javascript">

<!--

if (window.adgroupid == undefined) {

	window.adgroupid = Math.round(Math.random() * 1000);

}

if (window.adkeywords == undefined) {

    if (typeof(ad_keywords) == 'undefined') {

        window.adkeywords = '';

    } else {

        window.adkeywords = ad_keywords.split(',').join('+');

    }

}

document.write('<scr'+'ipt language="javascript1.1" src="http://adtech.habbo.com/addyn|3.0|957.1|2131064|0|1778|ADTECH;cookie=info;alias=;loc=100;target=_blank;key='+window.adkeywords+';grp='+window.adgroupid+';misc='+new Date().getTime()+'"></scri'+'pt>');

//-->

</script><noscript><a href="http://adtech.habbo.com/adlink|3.0|957.1|12131064|0|1778|ADTECH;loc=300;alias=;key=key1+key2+key3+key4;cookie=info;" target="_blank" target="_blank"><img src="http://adtech.habbo.com/adserv|3.0|957.1|2131064|0|1778|ADTECH;loc=300;alias=;key=key1+key2+key3+key4;cookie=info;" border="0"></a></noscript>

<!-- End of JavaScript Tag -->



<br>





<!--JavaScript Tag // Tag for network 957: Sulake // Website: HabboHotel_US // Page: Me_Page // Placement: Me_Page partner_button 160 x 110 (2131079) // created at: Jun 17, 2010 11:20:10 AM-->

<script language="javascript">

<!--

if (window.adgroupid == undefined) {

	window.adgroupid = Math.round(Math.random() * 1000);

}

if (window.adkeywords == undefined) {

    if (typeof(ad_keywords) == 'undefined') {

        window.adkeywords = '';

    } else {

        window.adkeywords = ad_keywords.split(',').join('+');

    }

}

document.write('<scr'+'ipt language="javascript1.1" src="http://adtech.habbo.com/addyn|3.0|957.1|2131079|0|1778|ADTECH;cookie=info;alias=;loc=100;target=_blank;key='+window.adkeywords+';grp='+window.adgroupid+';misc='+new Date().getTime()+'"></scri'+'pt>');

//-->

</script><noscript><a href="http://adtech.habbo.com/adlink|3.0|957.1|12131079|0|1778|ADTECH;loc=300;alias=;key=key1+key2+key3+key4;cookie=info;" target="_blank" target="_blank"><img src="http://adtech.habbo.com/adserv|3.0|957.1|2131079|0|1778|ADTECH;loc=300;alias=;key=key1+key2+key3+key4;cookie=info;" border="0"></a></noscript>

<!-- End of JavaScript Tag -->

 
</div> 
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container"> 
<!--JavaScript Tag // Tag for network 957: Sulake // Website: HabboHotel_US // Page: Me_Page // Placement: Me_Page sky_wide 160 x 600 (2131080) // created at: Jul 14, 2009 11:27:52 PM-->

<script language="javascript">

<!--

if (window.adgroupid == undefined) {

	window.adgroupid = Math.round(Math.random() * 1000);

}

if (window.adkeywords == undefined) {

    if (typeof(ad_keywords) == 'undefined') {

        window.adkeywords = '';

    } else {

        window.adkeywords = ad_keywords.split(',').join('+');

    }

}

document.write('<scr'+'ipt language="javascript1.1" src="http://adtech.habbo.com/addyn|3.0|957.1|2131080|0|154|ADTECH;cookie=info;alias=;loc=100;target=_blank;key='+window.adkeywords+';grp='+window.adgroupid+';misc='+new Date().getTime()+'"></scri'+'pt>');

//-->

</script><noscript><a href="http://adtech.habbo.com/adlink|3.0|957.1|12131080|0|154|ADTECH;loc=300;alias=;key=;cookie=info;" target="_blank" target="_blank"><img src="http://adtech.habbo.com/adserv|3.0|957.1|2131080|0|154|ADTECH;loc=300;alias=;key=;cookie=info;" border="0"></a></noscript>

<!-- End of JavaScript Tag -->



 
</div> 
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]--> 
    </div> 

{include file="_files/_footer_default.tpl" title=foo}