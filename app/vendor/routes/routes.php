<?php
return [
	'/webLibrary/' => [
		'controller' => 'main',
		'action' => 'index',
		'notAuthAccess' => true
	],
	'/webLibrary/auth/' => [
		'controller' => 'auth',
		'action' => 'index',
		'notAuthAccess' => true
	],
	'/webLibrary/auth/do/' => [
		'controller' => 'auth',
		'action' => 'do',
		'notAuthAccess' => true
	],
	'/webLibrary/auth/logout/' => [
		'controller' => 'auth',
		'action' => 'logout',
		'notAuthAccess' => true
	],
];