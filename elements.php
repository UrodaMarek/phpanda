<?php
function logo()
{
    echo
        "
        <header>
            <h1>
                PhPanda
                <i class=\"icon-database\"></i>
                <a onclick=\"changeTheme()\">
                    <i id=\"themeChanger\" class=\"icon-moon\"></i>
                </a>
            </h1>
        </header>
        ";
    //? Should we make a logo
}
function menu()
{
    echo
        "
        <nav>
            <a href=\"./index.php\" title=\"Strona Główna\"><div><i class=\"icon-home\"></i><div>Strona Główna</div></div></a>
            <div class=\"border\">=======</div>
            <a href=\"./index.php?p=rebuild\" title=\"Odbuduj\"><div>Odbuduj</div></a>
            <div class=\"border\">=======</div>
            <a href=\"./index.php?p=repair\" title=\"Napraw\"><div>Napraw</div></a>
        </nav>
        ";
}

function content()
{
    require ('./content.php');
    require ("./controllers.php");
    echo
        "
        <section>
        ";
    if (isset($_GET["p"])) {
        switch ($_GET["p"]) {
            case "rebuild":
                if
                (
                    isset($_POST["db_server"]) &&
                    isset($_POST["db_name"]) &&
                    isset($_POST["db_user"]) &&
                    isset($_POST["db_new_user_login"]) &&
                    isset($_POST["db_new_user_password"]) &&
                    isset($_POST["warning"]) &&
                    $_POST["warning"] === "true"
                ) {
                    rebuild(
                        $_POST["db_server"],
                        $_POST["db_name"],
                        $_POST["db_user"],
                        $_POST["db_password"],
                        $_POST["db_new_user_login"],
                        $_POST["db_new_user_password"],
                    );
                } else {
                    $_POST = null;
                    rebuildContent();
                }

                break;
            case "repair":
                repairContent();
                break;
            default:
                mainPage();
                break;
        }
    } else {
        mainPage();
    }
    echo
        "
        </section>
        ";
}

function footer()
{
    echo
        "
        <div>
            <footer>
                Wszystkie prawa zastrzeżone. &copy; 2024<br/>
                Stworzone przez Marek7639
            </footer>
        </div>
        ";
}