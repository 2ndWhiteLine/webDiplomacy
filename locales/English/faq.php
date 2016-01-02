<?php
/*
    Copyright (C) 2004-2010 Kestas J. Kuliukas

	This file is part of webDiplomacy.

    webDiplomacy is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    webDiplomacy is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with webDiplomacy.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('IN_CODE') or die('This script can not be run by itself.');

/**
 * @package Base
 * @subpackage Static
 */


$faq = array();

if( isset(Config::$faq) && is_array(Config::$faq) && count(Config::$faq) )
{
	$faq["Server-specific"]="Sub-section";
	foreach(Config::$faq as $Q=>$A)
		$faq[$Q]=$A;
}

$globalFaq = array(
"The Basics of webDiplomacy" => "Sub-section",
"How does this site work?" => "webDiplomacy is an online version of the classic Avalon Hill ® board game Diplomacy. If you haven’t played Diplomacy before and would like to learn, see <a href='http://webdiplomacy.net/intro.php'class='light'>Diplomacy Rules and Gameplay</a>. If you know what you’re getting into, and would like to play right away, see how to <a href='INSERT LINK' class='light'>start a game</a> or <a href='INSERT LINK' class='light'>join a game</a>. If you’re using this site for a larger (school) project, please visit our <a href='INSERT LINK' class='light'>Teacher / Project Guide</a> or feel free to contact us personally at <a href='INSERT LINK' class='light'>webdipmod@gmail.com</a>. ",
"Home Page" => "The Navigation Bar on the top of the Home page shows all the sections of the site in a clear and accessible manner: Home / Forum / Games / New Game / Settings / Help. Selecting your username will take you to your profile.<br>,
	       Immediately under the Navigation Bar, there is room for Notifications, which will be shown in Tabs. If there are no Notifications, this section is empty. Notifications come in two kinds: Private Messages (shown by ‘PM’) and Game Notifications which remind you of pending orders or pending messages. The name of the Games you are in will display at the top of the page if you need to enter orders or check an unread message. They will appear in the colour of the Power that you are playing in that game. Note that If you have entered orders and have no unread messages, games will not appear in this section but can be accessed in your “My Games” column.<br>,
	       Below the Notification section, there are three columns. The column at the left displays the Upcoming Live Games section (if there are any active) and underneath it, the Forum. If you don’t want to see live games, you can turn that feature off on the Settings page. The middle column contains all Notices: processed game updates as well as Private Messages from other users. The column at the right is name My Games, and arguably the most important. It contains all your ongoing games, including games in which you have been eliminated. Games appear here as soon as you sign up and disappear only when finished. Below My Games is a section for Spectated Games through which you can follow games in which you are not a participant.",
"Forum" => "The forum is a section of webDiplomacy dedicated to user discussions. There are a few restrictions on forum posts, which you can find on our site rules page. Click on the forum link at the top of the page if you’d like to post a new thread or click open to reply. If you do not want to see a particular thread, you have the option to mute that thread by clicking on the mute link in the specific post.",	       
"User Profiles" => "Sub-section",
"Your Profile" => "webDiplomacy allows users to customize their profile with any information of his or her choosing. This section may be edited in the settings page. ",
"Points" => "webDiplomacy operates on a point-based system. Each new player begins with 100 points. All games on webDiplomacy require a point wager. Depending on the game type, you can possibly win all the wagered points or a portion of the wagered points if you win, draw, or survive. If you are eliminated, your points will be refunded if you are below 100 when your games finish. See more on our points page.",	      
"Rank/position" => "Your point-based ranking among all players on webDiplomacy.",
"Available points" => "The number of points you have available to join games.",
"Points in play" => "The number of points you have wagered in ongoing games.",
"Game stats" => "Player statistics that reflect all finished games on webDiplomacy.",
"Reliability Rating" => "Included in your game stats is your Reliability Rating (RR), which is expressed as a percentage of all finished games in which you neither missed a turn nor went into civil disorder.<br>
			Reliability Rating is also an advanced game creation setting. Users who create a game can set a minimum RR to exclude those players who fall below that threshold. Typically, this ensures fewer or no missed turns or civil disorder.<br>
			Players have the option of improving their RR. Taking over civil disorders by other players will grant you a bonus to your RR. Of course, playing more games will also reduce the proportion of missed turns in your record.",
"Messaging" => "All players have the ability to send a private message (PM) to other players. PMs are displayed on your home page under Notices. To access old PMs, select the arrow link at the top of the Notices column.<br>
	       You cannot send PMs to players who have you muted on the forum.",
"Ongoing and finished games" => "All ongoing and finished games are shown at the bottom of your profile. Ongoing public, non-anon games are visible to all users, anonymous games are hidden.",
"New Games: The Basics" => "Sub-section",
"Starting a game" => "To start a new game, select the new game link in the navigation menu. You will then have the option of selecting the specific settings you want for your game. Specific settings are detailed below.",
"Basic game settings" => "The default game setting on webDiplomacy is the same as a traditional game of Diplomacy: a public Classic map, draw size scoring (winner take all), non-anon, all messaging, public draw votes, no RR requirement, and a 24 hour join period.",
"Phase length" => "The phase length is the maximum number of hours/minutes allowed for players to negotiate and enter orders. A longer phase length means more time to talk to other players, but makes the game longer overall. A shorter phase length results in a faster game but players must check the game more frequently to avoid an NMR. <br>
All games have a countdown clock that displays remaining time before the game will process. However, if all players select the ready option in-game, the game will process sooner.",
"Bet Size" => "The bet size is the wager that each player has to make before joining the game. The default value is a pre-set percentage of your available points. Remember, a lower buy-in means that more players have the possibility joining.",
"Advanced Settings" => "Sub-section",
"Variant maps" => "webDiplomacy hosts several other Diplomacy variants in addition to the Classic version. Variants are changed occasionally but currently include World Diplomacy IX, Ancient Mediterranean, Modern Diplomacy II, or Fall of the American Empire IV.<br>
Game rules are the same for each variant with a few minor exceptions. You can read more about these rules on the individual variant page.<br>
If you wish to play additional variants, many more are hosted on our sister site, vDiplomacy.",
"Scoring" => "You may select how you want to distribute wagered points to game participants. See our points page for more information.",
"Anonymous Players" => "In an anonymous game, players will not see each other’s names and user information. Players are revealed at the end of the game.",
"In-game messaging" => "webDiplomacy allows for three different types of in-game messaging. Players can allow all messages (both public and private), public messages only, or no messages. No message games are also known as Gunboat Diplomacy.",
"Draw votes" => "In the event that a player wants to vote for a draw, you can select whether that draw vote is hidden from other players or is displayed publicly. A game is drawn when all current players vote for a draw.",
"Joining pre-game period length" => "The length of time players have to join a game before it automatically cancels. Players have the option of selecting join times ranging from 5 minutes to 2 days, 2 hours.<br>
Games will begin as soon as the last player joins. The exceptions to this rule are games with 5 and 7 minute phases, which start immediately at the end of the pre-game join period even when full.",
"Reliability requirement" => "The minimum reliability rating that a player must have in order to join a game.",
"Password protect" => "If you wish to play a game with specific players, we recommend setting a password. This is also known as a private game. A password is required for all games in which you know players in real life. For more on this, see our metagaming policy.",
"Joining a Game" => "Sub-section",
"How do I find a game to join?" => "If you do not want to create a new game, you can join a new game created by another user or take over a position in an ongoing game. You can do both by clicking on the Games link in the navigation menu.<br>
The Games page displays all new, ongoing, and finished games on webDiplomacy. Select the games you want to view from the menu display. New games will display all games (private and public) in the pre-game join period. Joinable games include all ongoing games with an available position vacated by another player. Active games include all ongoing games, and Finished will display an archive of all finished games on webDiplomacy.<br>
Clicking on the type of game you want will display a search function. For example, selecting New will display all new games. Selecting New again will display a search function in which you can limit the type of games returned. This allows you to sort games by victory condition, variant, phase length, and several other options.",
"How do I find passwords to private games?" => "The user who created the game knows the password. Usually, if you’re invited you will be sent the password via PM. Signups for private games are quite common on the forum, so watch for new game threads!",
"Game Interface" => "Sub-section",
"Game screen layout" => "The game screen is designed to give you all the information necessary to play your game. The general screen sections include the game info area, the small map, orders panel, and current game status."
"Game name and settings" => "The very top of the game interface displays all information about game settings and current order/message status. At the very top, you will see your game name, pot size, current turn, and chosen game settings - winner-take-all or points-per-supply-center, messaging type (if applicable), anonymous (if applicable), and hidden draw vote (if applicable). Also displayed is the phase length and the countdown clock until the phase ends.<br>
Below the game settings, you will see your country, orders status, and number of unread messages. Above and below your country name, two colored bars indicate the current balance of power in your game. The top bar is your current unit balance: a green tip indicates more centers than units, while a red tip indicates more units than centers.",
"Messaging" => "The message interface includes a color coordinated tab for each country in the game. Your own country’s tab is displayed as a “Notes” tab, on which you can take game notes or helpful information to remember. To send a message to a specific player, simply select that country’s tab and enter your message in the text box displayed. To message all players, enter your message in the Global tab. If you are playing gunboat, you will only see the Global and Notes tabs and you will only be able to type in the Notes section.",
"Map" => "The game map is the most distinctive and important part of the game interface. The webDiplomacy map is color coordinated for better tracking of owned centers and territory. As you gain centers and territories, they will be shaded in the color of your country. Territories will change color after each phase, while centers will only change color after a fall phase to reflect ownership.",
"Arrows and moves" => "The webDiplomacy game map uses arrows to reflect the most recent set of orders. A red arrow indicates a successful move, while a failed move will be indicated with a red X through the arrow. Yellow arrows indicate a supported move, while green arrows indicate a supported hold. Convoys are indicated with a blue line connected to the red move arrow.<br>
A full set of orders can be seen in the Orders archive at the bottom of the page as well as consulting the big game map.",
"Large map, game history, and preview" => "Below the game map, there are a series of small blue arrow icons. The right and left arrows will move your game forward or backward in time, either one turn or all the way back to the beginning or forward to the current phase. <br>
The arrow/checkmark icon is our Preview feature. After entering orders, selecting this button will display your orders in graphic arrow format on the map. This function works for moves only, not builds, and only reflects your own orders.<br>
The boxed arrow icon will open the large map in a new window. For clarity and space purposes, our small map does not show failed support orders. Selecting the large map icon will not only provide a larger version of the map, but it will also display all failed orders in addition to successful ones shown on the small map.",
"Orders" => "webDiplomacy differs slightly from traditional face-to-face Diplomacy in that orders must be entered in a specific format to allow proper processing. Therefore, each unit with an available move will be presented with all possible move options. If you have no moves to enter in a given phase, no orders will display.<br>
Build orders must be entered in two parts: selecting the unit type and location. Selecting your desired unit type will prompt you to select from all available build locations. It is possible to enter orders to build two units in a single center. Obviously, this is impossible, so the site will only build one unit in that center. However, this will cause you to forgo the additional build for that phase, so always double check your build orders.",
"Save/Ready buttons" => "After all orders are entered, you have two options to enter your orders. Selecting “save” will enter your orders for the current turn. Selecting “ready” will save your orders as well as indicate that you are ready to proceed to the next phase. If all eligible players ready their orders, the game will process right away and move to the next phase.<br>
Your orders in the status bar will show a grey check if you have saved orders and a green chat for ready. If no orders have been entered and you have neither selected save nor ready, a double red exclamation point will be displayed.",
"Game status" => "Below the game map and orders section is the current game status in full detail. Each country is displayed as well as their orders status (saved, ready, or none entered).",
"Archive" => "At the bottom of each game screen, you can access the current set of orders as well as past turns. You can also select maps from previous turns and access an archive of all global and private in-game messages.",


	 
//FAQs to organize later
"How is my country selected?" => "Country selection is a weighted random selection; that is to say, your odds of getting a specific country is affected by your prior started games. However, your probabilities are affected by the other players on the board as well. For example, a player who hasn’t had Turkey in 10 games has a greater chance of drawing Turkey than a player who hasn’t played it in 9 games.<br>
				 Occasionally, players may draw the same country for several games in a row. It is not unheard of for a player to draw the same country 5 or 6 games in a row. This is a highly unlikely but statistically possible result of the weighted random selection."
"Can I message multiple countries at once?" => "At this time, you are not able to message multiple countries at once."
"Why can't I see old messages?" => "Due to space restrictions, only a certain number of recent messages are displayed in each chat tab. To access a full archive of all game messages, select the Messages archive at the bottom of the page."
"Why do I see a single red exclamation point?" => "This indicates a bad convoy order. Double check any convoys and make sure the destinations match."	      
"Can I play with my friends from off-site?" => "Yes, but only in private, passworded games. We also require that you tell everyone in the game that you know each other outside the site before they join the game. For more information, see our rules page."	  
"What is gunboat?" => "Gunboat is a term for games with no in-game messaging and anonymous players. All communication in gunboat games is done by using your unit movements and supports to indicate intentions. Remember, working around the press restrictions is a violation of our site rules."	 
"Is there a webDiplomacy mobile app?" => "No, and we currently have no plans to create one. However, we’re always working on improving the site, and making it better on mobile. We are open source - if you would like to help out, please see our developer instructions."	  
"How do I leave a game?" => "It is considered poor form to start a game without intending to finish it. Having a player absent from the game unbalances the game for everyone, so there is no leave/resign option. If you stop entering turns, you will lose some of your reliability rating, which can make it harder to get into games in the future.<br>
			    Remember, you’re never defeated in Diplomacy until you no longer have units on the board. Many times, one-centre powers have gone on to be included in the draw or even win. However, if some life event is preventing you from continuing the game, please contact the moderators."
"I can't see messages that I sent/received in the past" => "To make the press box manageable, only the most recent messages are shown. The full message archive is available via the “Messages” archive link at the bottom of the page, below the player listing."
"I muted the wrong thread! How can I unmute it?" => "The list of muted threads is available on your settings page. There are buttons to unmute the threads there."
"A player is being rude to me in a game. Can you do something about it?" => "Unfortunately, “chainsaw diplomacy” is a legitimate tactic, so generally we allow most things in-game, but we draw the line at real life threats or players posting personal information. Diplomacy is only a game, and as such any abuse should stay in-game. However, if you are being harassed via private message, in the forum, or otherwise being made uncomfortable in game, please don’t hesitate to contact the moderators."
"How do I report a possible bug?" => "Bugs can be reported to the moderators. Before you report a bug, please double check all possible explanations for a perceived bug - orders are entered correctly, it is the correct phase, and an attempted move is legal. Remember, if you hear hoofbeats, don't think zebra."
"What is the software license?" => "The <a href='AGPL.txt' class='light'>GNU Affero General License</a>
	(<a href='http://www.opensource.org/licenses/agpl-v3.html' class='light'>Open Source Initiative</a> approved),
	which basically says you can download and change the code as you like, and put it up on your
	own website, but you can't claim you wrote it, and you have to give any changes
	you make back to the community.<br /><br />
	See <a href='credits.php' class='light'>the credits</a> for information about the
	small elements which are under different licenses.",
"I need a pause in a gunboat game. How can I get one?" => "Depending on circumstances, the moderators will work with you to grant a pause. Emergencies are always grounds for a forced pause. If you are aware that you will need a pause before the game starts, it is helpful to arrange the pause with other players before the game starts. ",
"I suspect two players are cheating! What do I do?" => "Email the moderators! The more information you can include in your email, the better - game link, countries, relevant press, etc.",
"Can a moderator force my game to draw?" => "If players have forced a clear stalemate but a player refuses to draw the game, the moderators will evaluate the game to determine if a forced draw is necessary. In this case, the moderators will email the player in question and ask for a plan on how to break the stalemate. We will allow two full years (four turns) to break the stalemate. Should neither of these conditions be met, we will draw the game.",
"How do I know if my game is at a stalemate?" => "Rod Walker defines a stalemate as a position on the board which prevents any further advance by the enemy. A stalemate line is a line of units, none of which can be dislodged by <i>any</i> combination of opposing attacks and supports. A stalemate normally occurs when two or more players combine to form a stalemate to prevent another player from gaining an 18th center. If you feel that you have reached this point in a game, either by yourself or in combination with one or more additional players, then a draw is the likely outcome." "

	      
"I'm new here" => "Sub-section",
"What is this site about?" => "The easiest way to understand is to look at
	<a href='http://webdiplomacy.net/doc/0.90-screenshot.png' class='light'>an in-game screenshot</a>. If the concept is still strange
	read <a href='intro.php' class='light'>the intro to webDiplomacy</a>.",
"How do I play?" => "The gameplay is quite self explanatory, but if you're unsure about something read
	<a href='intro.php' class='light'>the intro to webDiplomacy</a>, and feel free
	to ask for help or clarification in <a href='forum.php' class='light'>the public forum</a>.",
"What's the software license?" => "The <a href='AGPL.txt' class='light'>GNU Affero General License</a>
	(<a href='http://www.opensource.org/licenses/agpl-v3.html' class='light'>Open Source Initiative</a> approved),
	which basically says you can download and change the code as you like, and put it up on your
	own website, but you can't claim you wrote it, and you have to give any changes
	you make back to the community.<br /><br />
	See <a href='credits.php' class='light'>the credits</a> for information about the
	small elements which are under different licenses.",

"Is this software related to phpDiplomacy?" => "This software used to be called phpDiplomacy until version 0.9.
	Sorry for the confusion, we hate name changes too, but for our user-base the old 'php' prefix wasn't
	the immediately recognizable label that it was intended to be.",


"The interface" => "Sub-section",
"What are those green circles next to peoples names?" => "The green icon appears when a player is logged into the server. This
	means that if the player has accessed the server in the last ~10-15 minutes they will have the green icon next to their name.",
"What the hell is that thing? (<img src='images/icons/online.png' />, <img src='images/icons/mail.png' />, etc)" => "If you see an icon/button/image and don't understand what it means try hovering your mouse over it,
	it may give you a tool-tip helping explain it. If it doesn't feel free to ask on the <a href='forum.php' class='light'>forum</a>.",
"Why do my order choices turn from green to red?" => "Red order choices are unsaved; if you see a lot of red in your orders you should
	save, or you might forget and lose them by closing the browser window or chatting to someone.",
"What do 'Save' and 'Ready' mean?" => "'Save' saves your order; your red, unsaved order choices will turn green once they're successfully
	saved. 'Ready' means you have finished entering your orders, and are ready to continue to the next turn. If everyone is 'Ready' the
	game continues right away, speeding up the game.",
"What are the codes which can add HTML into forum messages? (icons, game links, etc)" => "Often in the forum people discuss points, or
	want to link others to games/user accounts/other forum threads. To make this easier certain forum-codes are recognized and replaced
	with proper links/icons:
	<ul><li><strong>'<em>[number]</em> points'</strong>/<strong>'<em>[number]</em> D'</strong> will result in
	<strong>'points'</strong> / <strong>'D'</strong> being replaced with the points icon (".libHTML::points().").</li>
	<li><strong>'gameID=<em>[number]</em>'</strong> / <strong>'threadID=<em>[number]</em>'</strong> / <strong>'userID=<em>[number]</em>'</strong> will have
	a link to the appropriate game/thread/profile substituted into the message.</li></ul>",
"Why do some things appear to change just after the page has loaded?" => "After a page is loaded JavaScript runs, making a few changes
	(e.g. putting GMT/UTC times into your computer's time zone, making your posts bold, etc) which enhance the page.",

"Game rules" => "Sub-section",
"I want to learn the basic rules" => "See the <a href='intro.php' class='light'>intro page</a>.",
"I want to learn the complete rules" => "See Avalon Hill's <a href='http://www.wizards.com/avalonhill/rules/diplomacy.pdf' class='light'>rulebook</a>.",
"I want to learn the exact specifics of the rules" => "We use the DATC to lay out exactly how all sorts of tricky
	situations are processed, in the cases where there is ambiguity in the rules. (This sort of stuff doesn't come up
	in usual play though.)<br />
	See our DATC page <a href='datc.php' class='light'>here</a>.",
"If someone has to destroy a unit, but doesn't enter destroy orders, what unit is destroyed?" => "It's done as the DATC recommends:
	It's the furthest from your home supply centers. Distance is defined as the smallest number of moves to get from the unit's position
	to a home supply center. When calculating the smallest number of moves armies can move across seas, but fleets can only move across
	seas and coasts. If there are two units both the same distance from a home supply center then fleets disband before armies. If there's still a tie, 
	the territory which is first alphabetically is removed first.",
"If a convoy is attacked does the convoy fail?" => "No; for a convoy to fail it has to be dislodged, and there must be no other convoys
	the the army being convoyed can go through instead.",
"What happens if I order to build/destroy two units in the same territory?" => "The first build order will be accepted, the second won't",
"What happens if two units retreat to the same place?" => "They will both be disbanded",
"Can I dislodge my own units?" => "No; you cannot dislodge your own units, or support the dislodgement of your own units",
"Any other rules I should bear in mind?" => "There is a full list of rules on the <a href='rules.php' class='light'>rules</a> page,
	listing a few extra non-game rules you have to follow to help keep the site fun for everyone.",

"Points" => "Sub-section",
"What happens when I run out?" => "You can't run out: Your total number of points include the number of points which you have 'bet' into games you're currently playing in,
	as well as the points you have in your account. Your total number of points never falls below 100; whenever it does
	you're given your points back.<br /><br />
	To put it another way; any player who isn't currently playing in any games will always have at least 100 points, so
	you won't run out!",
"How are the points split in a draw?" => "In a draw the points are split evenly among all the survivors still in the game,
	regardless of the number of supply centers each player has.<br/>
	Read <a href='points.php' class='light'>the points guide</a> for more info about the points system.",
"I have an idea for a better system" => "We constantly get new ideas for the points system, but usually they're either missing
	out in some aspect (the points system serves multiple functions), or they improve in one area but are worse in another.<br /><br />
	The points system does the job fine, so it's unlikely to be replaced.
	(See <a href='http://forum.webdiplomacy.net/viewtopic.php?p=288#p288' class='light'>this page</a> for an
	explanation regarding the role of the existing system, and what a replacement would have to do.)<br /><br />
	There's no real way to express how good a player really is in a single number, the points system as it is is
	probably good enough for now, and there's definitely no agreement on what would replace it.",
"Can you draw the game, but give 2/3rds of the points to this player and ..." => "Draws can only be given one way; an even split to
	all survivors.",

"Bugs" => "Sub-section",
"My game has crashed!" => "Sometimes (usually only shortly after code updates) a software bug or server error may occur while a
	game is being processed.
	When this happens the problem is detected, all changes are undone, and the game is marked as crashed.<br /><br />
	Admins will see a message whenever a game crashes, and information about the crash is saved so that the problem that caused it can be fixed quickly.
	Once a mod or admin has marked the game as OK the game will continue where it left off again.<br /><br />

	If your game has been crashed for a long time try asking about it in the forum.",
"The phase ends \"Now\"? \"Processing has been paused\"?" => "When the server detects that no games have processed for a while
	(over 30 minutes or so), or a moderator/admin sees a problem and his the panic button, all game processing is disabled until
	the problem is resolved.<br />
	After the all-clear is given games will usually be given time to make up for any during which orders couldn't be entered, and
	processing will resume. Until that point if a game says it will be processed 'Now' that means it would process now, except
	processing is disabled.<br /><br />

	You may also see it if you a games timer counted down to 0 while you were viewing the page, in which
	case you should refresh the page to view the newly processed game.",
"I didn't enter those orders!" => "Occasionally we get this complaint, but every time we have checked the
	input logs to see what order was actually entered it turns out to be the mistaken order.
	Also the mistaken orders are often the 'Bulgaria'/'Budapest' sort of mistake which are easier to
	imagine human error than a bug.<br /><br />
	Try finalizing your orders and then checking them over, so you can be sure of what you entered.",
"Someone says their orders messed up, and I'm paying the price!" => "
	Unfortunately it does seem that sometimes people will claim that their orders came out wrong to cover up the intention of
	their actions. (e.g. \"I was going to stab you, then read your message and changed my orders so I wasn't going to stab you,
	but my old orders came out instead of the new ones! Oh so sorry about that!\")<br /><br />

	This is against <a href='rules.php' class='light'>the rules</a>, as it makes work for admins over made up bugs. When someone
	tells you a bug caused a mistake in their orders you should reserve some skepticism, and remember that the official server alone
	receives and processes over 20,000 orders per day (as of Feb 2010) without mistake every minute of every day for years on
	end, so sudden bugs which change whole order-sets around simply don't seem to genuinely happen ever, despite checking every
	single report.
",
"My orders gave the wrong results!" => "Before reporting this as a bug double check that you entered your orders correctly and you're
	not misunderstanding the rules. 99.999% of the time \"adjudicator bugs\" turn out to be a misunderstanding.<br />
	If you're still positive there's a problem let us know in the <a class='light' href='forum.php'>forum</a>.",
"A part of the site looks wrong in an alternative browser" => "webDiplomacy isn't currently completely web standards compliant,
	so there may be glitches. We would like to get webDiplomacy working on everything (within reason) but we need users
	of alternative browsers to let us know what's wrong and tell us how to make it look right in that browser.",
"This site seems to slow my computer down" => "See Help > What is Plura? for a likely cause and fix.",

"Feature Requests" => "Sub-section",
"Better forum" => "A better forum would be good, but getting it to fit in and appear as part of webDiplomacy, rather than just
	a separate site, is difficult, and would likely use more server resources than our efficient but lightweight built-in forum.<br />
	At the moment we are trying to improve our existing forum in small increments.",
"A point and click interactive map" => "This is being worked on, but progress is slow. If you know JavaScript and SVG/Canvas why not
	carry on the work on the <a href='http://forum.webdiplomacy.net/' class='light'>development forum</a>?",
"Translations" => "Eventually translations will be supported, but it is a long process and not a top priority.",
"New variants" => "If a variant has lasting appeal, is well balanced, isn't gimmicky, has been tried and tested on another server, and was
	created by a reputable developer, then it's up for consideration to be included in the standard release.<br />
	You can discuss this in the variants section of the webDiplomacy
	<a href='http://forum.webdiplomacy.net/' class='light'>developers forum</a>.<br /><br />

	Also creating your own variants or porting
	existing variants to the webDiplomacy variants system is easier than ever, from simple map-change variants all the
	way to strange rule-changing variants, the system is flexible enough to accommodate your variant ideas.
	",
"Can I suggest a feature?" => "Feature suggestions are best made in the <a class='light' href='http://forum.webdiplomacy.net/'>developer forums</a>,
	elsewhere they're likely to be missed. Remember that unless you can back-up your suggestion with code even good ideas may not get far.",

"Helping out" => "Sub-section",
"Can I help develop the software?" => "You sure can: if you're an HTML/CSS/JavaScript/PHP 5/MySQL/SVG/Canvas developer,
	graphics/icon artist, or want to learn, check out the <a class='light' href='http://webdiplomacy.net/developers.php'>dev info</a>,
	and if you get lost you can get help/discuss ideas in the <a class='light' href='http://forum.webdiplomacy.net/'>developer forums</a>.",
"Can I donate?" => "See the server-specific section for a donate link, thanks!",
"Do I get anything for being a donator?" => "Markers are given for donators based on total donated to date; this lets everyone
see who is helping keep the site online and who has put value in their webDiplomacy account, but no extra
functionality is available to donators.",
/*"How much do you need to donate to get a silver/gold mark?" => "
We'd rather people donate whatever/whenever they feel is appropriate, rather than aiming for a certain mark.
",*/
"How else can I help?" => "Tell your friends about webDiplomacy, put links on your website, help new players out in the forums,
	and give helpful feedback to developers. Thanks!",

"Map" => "Sub-section",
"Why are some orders missing from the map?" => "Not all orders are drawn on the small map. Below the small map there is a set of icons;
	the one in the middle (<img src='images/historyicons/external.png' alt='example' />) opens up the large map, which contains all orders.<br/>
	Also at the bottom of the board page is a link to open up a textual list of all the orders entered in the game, if you can't see
	something in the large map.",
"I can't tell the difference between Germany and Austria" => "Color-blind people may have trouble distinguishing Germany and Austria's
	colors. We hope to fix this problem in the future."
);

foreach($globalFaq as $Q=>$A)
	$faq[$Q]=$A;

$i=1;

print libHTML::pageTitle('Frequently Asked Questions','Answers to the questions people often ask in the forums; click on a question to expand the answer.');


$sections = array();
$section=0;
foreach( $faq as $q => $a )
	if ( $a == "Sub-section" )
		$sections[] = '<a href="#faq_'.$section++.'" class="light">'.$q.'</a>';
print '<div style="text-align:center; font-weight:bold"><strong>Sections:</strong> '.implode(' - ', $sections).'</div>
	<div class="hr"></div>';

$section=0;
foreach( $faq as $q => $a )
{
	if ( $a == "Sub-section" )
	{
		if( $section ) print '</ul></div>';

		print '<div><p><a name="faq_'.$section.'"></a><strong>'.$q.'</strong></p><ul>';

		$question=1;
		$section++;
	}
	else
	{
		print '<li><div id="faq_answer_'.$section.'_'.$question.'">
			<a class="faq_question" name="faq_'.$section.'_'.$question.'"
			onclick="FAQShow('.$section.', '.$question.'); return false;" href="#">'.$q.'</a>
			<div class="faq_answer" style="margin-top:5px; margin-bottom:15px;"><ul><li>'.$a.'</li></ul></div>
			</div></li>';
		$question++;
	}
}
print '</ul></div>
</div>';

?>
<script type="text/javascript">
function FAQHide() {
	$$('.faq_question').map( function (e) {e.setStyle({fontWeight:'normal'});} );
	$$('.faq_answer').map( function (e) {e.hide();} );
}
function FAQShow(section, question) {
	FAQHide();
	$$('#faq_answer_'+section+'_'+question+' .faq_answer').map(function (e) {e.show();});
	$$('#faq_answer_'+section+'_'+question+' .faq_question').map(function (e) {e.setStyle({fontWeight:'bold'});});
}
</script>
<?php libHTML::$footerScript[] = 'FAQHide();'; ?>
