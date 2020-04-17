<?php

namespace Controllers;

use Models\PageModel;

class PageController extends AbstractController
{
    public static $name = 'page';

    public function index($params)
    {      
        $page = PageModel::getByFriendly($params['friendly']);
		
		if (!$page) {
			header("Location: /404");
			return;
		}

        return $this->render(
            'index',
            [
                'page' => $page,
            ]
        );
    }
}