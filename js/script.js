function changeTheme() {
    let html = document.documentElement;
    let button = document.getElementById("themeChanger");

    let theme = html.getAttribute("data-theme");

    //TODO: Use switch and make it smarter. It should remember value, when you reload.

    if (theme == "dark") {
        html.setAttribute("data-theme", "light");
        button.setAttribute("class", "icon-sun");
    } else if (theme == "light") {
        html.setAttribute("data-theme", "dark");
        button.setAttribute("class", "icon-moon");
    }
}
