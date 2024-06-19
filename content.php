<?php
function mainPage()
{
    echo
        "
            <h1>Witaj</h1>

            <p>
                Drogi użytkowniku Phpanda to aplikacja, dzięki której <br/>
                możesz odbudować swoje środowisko bazodanowe lub je naprawić.<br/>
                Jest to bezpłatne narzędzie, link do oficjalnego repozytorium znajdziesz poniżej.<br/><br/>

                <a href=\"https://github.com/UrodaMarek/phpanda\" title=\"Github Phpanda\" target=\"_blank\">
                    Phpanda Github
                </a>
            </p>
        "; //TODO: Use fontello icon of Github.

    pandaAsciiArt();
}

function rebuildContent()
{
    echo
        "
        <header>
            <h1>Odbudowa</h1>
        </header>
        <form action=\"index.php?p=rebuild\" method=\"post\">
        ";
    newUserContent();
    conContent();
    echo
        "
            <label for=\"warning\">Mam pełną świadomość że dane zawarte w bazie danych zostaną utracone. </label>
            <input type=\"checkbox\" id=\"warning\" name=\"warning\" value=\"true\" required />
            <br/><br/><br/>
            <button type=\"submit\">Odbuduj</button>
        </form>
        ";
}

function repairContent()
{
    echo
        "
        <form>
        </form>
    ";
}

function conContent()
{
    echo "
        <label for=\"db_server\">Adres serwera bazodanowego:</label>
        <input type=\"text\" id=\"db_server\" name=\"db_server\" required/>
        <br/><br/><br/>
        <label for=\"db_name\">Nazwa bazy danych:</label>
        <input type=\"text\" id=\"db_name\" name=\"db_name\" required />
        <br/><br/><br/>
        <label for=\"db_user\">Login użytkownika bazodanowego:</label>
        <input type=\"text\" id=\"db_user\" name=\"db_user\" required />
        <br/><br/><br/>
        <label for=\"db_password\">Hasło użytkownika bazodanowego:</label>
        <input type=\"password\" id=\"db_password\" name=\"db_password\" />
        <br/><br/><br/>
    ";
}

function newUserContent()
{
    echo "
        <label for=\"db_server\">Login nowego użytkownika bazodanowego:</label>
        <input type=\"text\" id=\"db_new_user_login\" name=\"db_new_user_login\" required/>
        <br/><br/><br/>
        <label for=\"db_name\">Hasło nowego użytkownika bazodanowego:</label>
        <input type=\"password\" id=\"db_new_user_password\" name=\"db_new_user_password\" required />
        <br/><br/><br/>
    ";
}

function pandaAsciiArt()
{
    echo
        "
            ⠀⠀⠀⠀⠀⢀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀<br/>
            ⠀⠀⠀⠀⢰⣿⡿⠗⠀⠠⠄⡀⠀⠀⠀⠀<br/>
            ⠀⠀⠀⠀⡜⢁⣀⡀⠀⠀⠀⠈⠑⢶⣶⡄<br/>
            ⢀⣶⣦⣸⠈⢿⣟⡇⠀⠀⣀⣀⠀⠘⡿⠃<br/>
            ⠀⢿⣿⣿⣄ ⠀⠠⢶⡂⢫⣿⢇⢀⠃⠀<br/>
            ⠀⠈⢿⡿⣿⣿⣶⣤⣀⣀⣀⣀⡠⠊⠀⠀<br/>
            ⠀⠀⠀⡇⠀⠀⠉⠙⠛⠿⣿⣿⣧⠀⠀⠀<br/>
            ⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠘⣿⣿⡇⠀⠀<br/>
            ⠀⠀⠀⣿⣧⡤⠄⣀⣀⣀⣴⡟⠿⠃⠀⠀<br/>
            ⠀⠀⠀⢻⣿⣿⠉⠉⢹⣿⣿⠁⠀⠀⠀⠀<br/>
            ⠀⠀⠀⠀⠉⠁⠀⠀⠀⠉⠁⠀⠀⠀⠀⠀
        ";
}