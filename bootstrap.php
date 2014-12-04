<?php
/**
 * Application bootstrap.
 * Sets up configuration options and class autoloading then routes requests.
 *
 * @author Chris Horak <chris@chrishorak.com>
 */

/**
 * Configuration options.
 */
date_default_timezone_set('America/New_York');

define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

/**
 * Setup class autoloading.
 */
spl_autoload_register(function ($class) {
	$class_locations = ['controllers', 'libs'];
	foreach ($class_locations as $location) {
		if (file_exists($location = ROOT . DS . $location . DS . $class . '.php')) {
			require $location;
			break;
		}
	}
});

/**
 * Route the request.
 */
$request = preg_replace(['/^\//', '/\?.*$/'], '', $_SERVER['REQUEST_URI']);
$request = explode('/', strtolower($request));

$controller = 'IndexController';
$action = 'index';
$parameters = [];

foreach ($request as $index => $value) {
	if (!empty($value)) {
		switch ($index) {
			case 0: //Controller
				$controller = str_replace('-', '_', ucfirst($value)) . 'Controller';
				break;

			case 1: //Action
				$action = str_replace('-', '_', $value);
				break;

			default: //Parameters
				$parameters[] = $value;
				break;
		}
	}
}

/**
 * Validate the request.
 */
if (class_exists($controller) && method_exists($controller, $action)) {
	$template = new Template;
	$controller = new $controller($template);
	$controller->$action($parameters);
} else {
	//Show 404;
	exit;
}