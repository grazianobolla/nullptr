document.addEventListener('DOMContentLoaded', function () {
    const storedTheme = localStorage.getItem("theme");
    if (storedTheme === null) {
        document.documentElement.setAttribute("data-theme", "");
        return;
    }

    document.documentElement.setAttribute("data-theme", storedTheme);
});

function switchTheme() {
    const currentTheme = document.documentElement.getAttribute("data-theme");
    const newTheme = currentTheme === "light" ? "" : "light";
    document.documentElement.setAttribute("data-theme", newTheme);
    localStorage.setItem("theme", newTheme);
}