<?php

function rebuild($db_server, $db_name, $db_user, $db_password, $db_new_user_login, $db_new_user_password)
{
    $_POST = null;
    $destination = "rebuild";
    $con = con($db_server, $db_name, $db_user, $db_password, $destination);
    try {
        $q = "CREATE OR REPLACE DATABASE $db_name CHARACTER SET utf8 COLLATE utf8_polish_ci";
        $r = mysqli_query($con, $q);

        $q = "CREATE OR REPLACE USER $db_new_user_login@$db_server IDENTIFIED BY '$db_new_user_password'";
        $r = mysqli_query($con, $q);

        $q = "GRANT ALL PRIVILEGES ON $db_name.* TO '$db_new_user_login'@$db_server;";
        $r = mysqli_query($con, $q);

        $q = "
            CREATE OR REPLACE TABLE $db_name.osoby
            (
                id_osoby TINYINT NOT NULL AUTO_INCREMENT,
                imie1 VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_polish_ci,
                nazwisko VARCHAR(50) CHARACTER SET utf8,
                data_wpisu TIMESTAMP,
                data_modyfikacji DATETIME DEFAULT NULL,
                ip_ukonta VARCHAR(39) DEFAULT NULL,
                login VARCHAR(25) CHARACTER SET latin1 DEFAULT NULL,
                haslo CHAR(64) CHARACTER SET latin1 DEFAULT NULL,
                PRIMARY KEY(id_osoby)
            )";
        $r = mysqli_query($con, $q);

        $q = "
            CREATE OR REPLACE TABLE $db_name.pliki
            (
                id INT NOT NULL AUTO_INCREMENT,
                name VARCHAR(15),
                path VARCHAR(20),
                PRIMARY KEY(id)
            )
        ";
        $r = mysqli_query($con, $q);

        echo
            "
            <p>
                Wszystko wykonano poprawnie
            </p>
            <a href=\"index.php\">
                <button type=\"button\">
                    Powrót
                </button>
            </a>
        ";

    } catch (mysqli_sql_exception $exception) {
        $exception_message = $exception->getMessage();
        $exception_number = $exception->getCode();

        echo
            "
            <p>
                ERROR info: $exception_message | numer: $exception_number
            </p>
            <a href=\"index.php?p=$destination\">
                <button type=\"button\">
                    Powrót
                </button>
            </a>
        ";
    }
}

function repair()
{

}

function con($db_server, $db_name, $db_user, $db_password, $destination)
{
    try {
        $con = mysqli_connect
        (
            $db_server,
            $db_user,
            $db_password,
            $db_name
        );
        return $con;
    } catch (mysqli_sql_exception $exception) {
        $exception_message = $exception->getMessage();
        $exception_number = $exception->getCode();

        echo
            "
            <p>
                ERROR info: $exception_message | numer: $exception_number
            </p>
            <a href=\"index.php?p=$destination\">
                <button type=\"button\">
                    Powrót
                </button>
            </a>
        ";
    }


}

// TODO: Make Backend, switch, secure connection to database, handle JSON files.