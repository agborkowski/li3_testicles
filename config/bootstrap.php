<?php

use \lithium\action\Dispatcher;
use \lithium\net\http\Router;

Dispatcher::applyFilter('run', function($self, $params, $chain) {
	$response = $chain->next($self, $params, $chain);
	$request = Router::process($params['request']);
	if ($request->params['controller'] == 'lithium\test\Controller') {
		$base = $request->env('base');
		$html = '<link rel="stylesheet" type="text/css" href="' . $base . '/li3_testicles/css/style.css" />
		<script type="text/javascript" src="' . $base . '/li3_testicles/js/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="' . $base . '/li3_testicles/js/li3_testicles.js"></script>';
		return str_replace('</head>', $html . '</head>', $response);
	}
  return $response;
});

?>