<?php
/**
 * @package		 Vyty Modules
 * @subpackage	 Joomla!
 * @copyright    Copyright (C) 2010 Vyty.com. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Vyty Leaderboard is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined( "_JEXEC" ) or die;

static $vytyFlag = 0;

if($params->get("imp_code")) {
    
    if(!$vytyFlag) {
        echo '<div id="vyty_root"></div>
    <script type="text/javascript">
      (function() {
        var vy = document.createElement("script"); 
        vy.type = "text/javascript"; vy.async = true;
        vy.src = "http://api.vyty.vi/js/bonsai.js";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(vy, s);
      })();
    </script>';
    
    $vytyFlag = 1;
    }
}

echo '
<div class="vyty_leaderboard" 
	data-game="' . $params->get("game_id", 0) .'" 
	data-leaderboard="' . $params->get("lb_id", 0) .'" 
	data-players-position="' . $params->get("position", "left") .'"  
	data-points-state="' . $params->get("points_state", "full") .'" ></div>
';
