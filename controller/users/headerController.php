<?php
$header = new HeaderController();
$header->control();

class HeaderController
{
    public function control()
    {
        include "./view/users/headerLogo.html";
?>
        <div class="log">
            <?php
            if ($_COOKIE["user"] == "") {
                include "./view/users/headerLogin.html";
            } else
                include "./view/users/headerLogout.php";
            ?>
        </div>
<?php
    }
}
