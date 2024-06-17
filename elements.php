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
            <a href=\"./index.php\"><div><i class=\"icon-home\"></i><div>Strona Główna</div></div></a>
            <div class=\"border\">=======</div>
            <a href=\"./index.php?p=rebuild\"><div>Odbuduj</div></a>
            <div class=\"border\">=======</div>
            <a href=\"./index.php?p=repair\"><div>Napraw</div></a>
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

        switch ($_GET["p"]) {
            case "rebuild":
                break;
            case "repair":
                break;
            default:
                mainPage();
                break;
        }

    echo 
        "
        </section>
        ";
    //TODO: Make Backend, switch, secure connection to database, handle JSON files.
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