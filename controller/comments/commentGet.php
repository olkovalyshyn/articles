    <?php
    include "../../connect/connect.php";
    include "../../model/comments/commentGet.php";

    while ($row = $result->fetch_assoc()) {
        include "../../view/comments/commentGetParagraph.php";
    }

