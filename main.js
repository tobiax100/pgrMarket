document.addEventListener("DOMContentLoaded", function () {
    const carruseles = document.querySelectorAll(".productosDb .carrusel-container");

    carruseles.forEach(carrusel => {
        const carruselItems = carrusel.querySelector(".carrusel-items");
        const prevBtn = carrusel.querySelector("#prevBtn");
        const nextBtn = carrusel.querySelector("#nextBtn");

        const step = 320; // Tamaño de una tarjeta

        function updateScroll(direction) {
            if (direction === "next") {
                carruselItems.scrollLeft += step;
            } else {
                carruselItems.scrollLeft -= step;
            }
        }

        prevBtn.addEventListener("click", () => updateScroll("prev"));
        nextBtn.addEventListener("click", () => updateScroll("next"));
    });
});