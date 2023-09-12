function setSidebarContent(body){
    let sidebarLI = document.querySelector('#sidebarLI');
    sidebarLI.textContent(body);
}

document.addEventListener("DOMContentLoaded", function () {
    const categorySelect = document.getElementById("categorySelect");

    categorySelect.addEventListener("click", function () {
        this.querySelector("option:first-child").setAttribute("disabled", "disabled");
    });
});

