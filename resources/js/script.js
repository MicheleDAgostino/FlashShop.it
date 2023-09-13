document.addEventListener("DOMContentLoaded", function () {
    const categorySelect = document.getElementById("categorySelect");

    if (categorySelect) {
        categorySelect.addEventListener("click", function () {
            this.querySelector("option:first-child").setAttribute("disabled", "disabled");
        });
    }
    
});

