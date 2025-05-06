<?php
trait Timestampable {
    protected $createdAt;
    protected $updatedAt;

    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }

    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

class Post {
    use Timestampable;

    public function create() {
        $this->setCreatedAt(date('Y-m-d H:i:s'));
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }
}

class Comment {
    use Timestampable;

    public function create() {
        $this->setCreatedAt(date('Y-m-d H:i:s'));
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }
}

function testTimestamps() {
    $post = new Post();
    $post->create();
    $currentDateTime = date('Y-m-d H:i:s');
    if ($post->getCreatedAt() != $currentDateTime || $post->getUpdatedAt() != $currentDateTime) {
        die("Ошибка в Post!<br>");
    }

    $comment = new Comment();
    $comment->create();
    if ($comment->getCreatedAt() != $currentDateTime || $comment->getUpdatedAt() != $currentDateTime) {
        die("Ошибка в Comment!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}

testTimestamps();

