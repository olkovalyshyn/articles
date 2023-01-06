<?php
$notice = new CommentGet();
$notice->get();

class CommentGet
{
    public function get()
    {
        include "../../connect/connect.php";
        include "../../vendor/autoload.php";
        $comment = new \model\comments\CommentGet();
        $result = $comment->get();
        while ($row = $result->fetch_assoc()) {
            include "../../view/comments/commentGetParagraph.php";
        }
    }
}
