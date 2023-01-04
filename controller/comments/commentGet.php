<?php

    $comment = new CommentGet();
    $comment->get();

    class CommentGet
    {
        public function get()
        {
            include "../../connect/connect.php";
            include "../../model/comments/commentGet.php";
            $comment = new \model\comments\CommentGet($pdo);
            $result = $comment->get();
            while ($row = $result->fetch_assoc()) {
                include "../../view/comments/commentGetParagraph.php";
            }
        }
    }
