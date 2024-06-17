function changeTheme() {

    let html = document.documentElement;
    let button = document.getElementById("themeChanger");
    let theme = html.getAttribute("data-theme");

    switch (theme) {
        case "dark":
            localStorage.setItem("theme", "light");
            html.setAttribute("data-theme", "light");
            button.setAttribute("class", "icon-sun");
            break;

        case "light":
            localStorage.setItem("theme", "dark");
            html.setAttribute("data-theme", "dark");
            button.setAttribute("class", "icon-moon");
            break;
    }
}


function catchMyTheme() {
    let html = document.documentElement;
    let button = document.getElementById("themeChanger");
    let theme = localStorage.getItem("theme");

    switch (theme) {
        case "light":
            html.setAttribute("data-theme", "light");
            button.setAttribute("class", "icon-sun");
            break;

        case "dark":
            html.setAttribute("data-theme", "dark");
            button.setAttribute("class", "icon-moon");
            break;
    }
}

catchMyTheme();

//TODO: Find that if the taking of all html tag is safe option.