<?php

namespace Helpers;

class UrlHelper
{
    public static function parseUrl()
    {
        $params = [];
        $controller;
        $action;

        if ($_SERVER['REQUEST_URI'] != '/') {
            $uri_parts = explode('/', trim($_SERVER['REQUEST_URI'], ' /'));

            if (count($uri_parts) % 2) {
				if(count($uri_parts) == 1) {
					$controller = 'page';
					$action = 'index';
					$params['friendly'] = $uri_parts[0];
				} else {
					throw new \Exception();
				}               
            } else {
				$controller = $uri_parts[0];
				$action = $uri_parts[1];

				for ($i = 2; $i < count($uri_parts); $i += 2) {
					if (!in_array($uri_parts[$i], ['id', 'order', 'order-type', 'per-page', 'page'])) {
						throw new \Exception();
					}
					$params[$uri_parts[$i]] = $uri_parts[$i + 1];
				}
			}            
        } else {
            $controller = 'index';
            $action = 'index';
        }

        return [
            'controller' => $controller,
            'action' => $action,
            'params' => $params
        ];
    }
}