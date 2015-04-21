<?php

/*

License: GPLv2 or later
  <http://www.gnu.org/licenses/gpl-2.0.html>

*/

error_reporting(E_ALL);

include_once 'lib/password.php';
include_once 'lib/ntbb-session.lib.php';
include_once 'lib/dispatcher.lib.php';

$dispatcher = new ActionDispatcher(array(
	new DefaultActionHandler(),
	new LadderActionHandler()
));
$dispatcher->executeActions();
