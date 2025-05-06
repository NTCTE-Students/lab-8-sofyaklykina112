<?php
class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }
}

class Article extends Material {}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }
}

$book = new Book("Изучаем PHP", "Иванов И.З.", 500);
echo "Название: " . $book->title . ", Автор: " . $book->author . ", Страницы: " . $book->pages . "\n";

$article = new Article("Основы ООП", "Петров В.П."); 
echo "Название: " . $article->title . ", Автор: " . $article->author . "\n";

$video = new Video("Основы PHP", "Сидоров С.Л.", "50 минут"); 
echo "Название: " . $video->title . ", Автор: " . $video->author . ", Длительность: " . $video->duration . "\n";

