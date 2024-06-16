function changeTheme() {

    let html = document.documentElement;
    let button = document.getElementById("themeChanger");
    let theme = html.getAttribute("data-theme");
    //TODO: Use switch and make it smarter.

    if (theme == "dark") {
        localStorage.setItem("theme", "light");
        html.setAttribute("data-theme", "light");
        button.setAttribute("class", "icon-sun");
    } else if (theme == "light") {
        localStorage.setItem("theme", "dark");
        html.setAttribute("data-theme", "dark");
        button.setAttribute("class", "icon-moon");
    }
}


function catchMyTheme() {
    let html = document.documentElement;
    let button = document.getElementById("themeChanger");
    let theme = localStorage.getItem("theme");

    if (theme == "light") {
        html.setAttribute("data-theme", "light");
        button.setAttribute("class", "icon-sun");

    } else if (theme == "dark") {
        html.setAttribute("data-theme", "dark");
        button.setAttribute("class", "icon-moon");

    }
}

catchMyTheme();