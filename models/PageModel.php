<?php

namespace Models;
use Database\DatabaseConnection;

class PageModel
{
    public $id;
    public $friendly;
    public $title;
    public $description;
	
	public static function getByFriendly($friendly)
    {
		$dbConnection = DatabaseConnection::createConnection();
        $stmt = $dbConnection->getConnection()->prepare(
            "SELECT id, friendly, title, description FROM pages WHERE friendly = ?"
        );
        $stmt->bind_param('s', $friendly);

        $stmt->execute();
        $stmt->bind_result($id, $friendly, $title, $description);
        if ($stmt->fetch()) {
            $page = new self();
            $page->id = $id;
            $page->friendly = $friendly;
            $page->title = $title;
            $page->description = $description;
            $stmt->close;
            return $page;
        } else {
            $stmt->close;
            return false;
        }
    }
}