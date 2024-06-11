<?php
    function menu() {
        echo
        "
        <header>
            <h1>PhPanda</h1>
        </header>
        <nav>
            <a href=\"./PhPanda.php\"><div><i class=\"icon-home\"></i></div></a>
            <a href=\"./PhPanda.php?p=rebuild\"><div>Odbuduj</div></a>
            <a href=\"./PhPanda.php?p=repair\"><div>Napraw</div></a>
        </nav>
        ";
    }

    function footer() {
        echo
        "
        <footer>
            Wszystkie prawa zastrzeżone. &copy; 2024<br/>
            Stworzone przez Marek7639
        </footer>
        ";
    }
?>