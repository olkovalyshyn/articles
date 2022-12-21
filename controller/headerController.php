      <?php
        if ($_COOKIE["user"] == "") {
            include "./view/users/headerLogin.html";

            // include "./view/users/headerLogin.html";
        } else
            include "./view/users/headerLogout.html";

        // class GreetUser
        // {
        //     public $user = $_COOKIE["user"];
        //     public function Greet($user)
        //     {
        //     }
        // }
