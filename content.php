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