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
    require ('./controllers.php');
    require ('./content.php');
    echo
        "
        <section>
        ";
    if (isset($_GET["p"])) {
        switch ($_GET["p"]) {
            case "rebuild":
                rebuild();
                break;
            case "repair":
                repair();
                break;
            default:
                mainPage();
                break;
        }
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