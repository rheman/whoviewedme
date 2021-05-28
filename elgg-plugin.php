<?php
/**
 * Friend Request
**/
return [
	'bootstrap' => \Pessek\ProfileViewed\Bootstrap::class,
	'widgets' => [
		'whoviewedme' => [
			'context' => ['profile', 'dashboard', 'index', 'activity'],
		],
	]
];
