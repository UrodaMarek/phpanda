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
    echo
        "
        <section>
            <h1>Something</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
?>