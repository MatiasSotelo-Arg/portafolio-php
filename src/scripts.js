document.addEventListener("DOMContentLoaded", function () {
    const lightbox = document.createElement("div");
    lightbox.classList.add("lightbox");
    lightbox.innerHTML = `
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-img" src="" alt="certificado en grande">
    `;
    document.body.appendChild(lightbox);

    const lightboxLinks = document.querySelectorAll(".lightbox-link");
    const lightboxImg = lightbox.querySelector(".lightbox-img");

    lightboxLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const imgUrl = this.querySelector("img").getAttribute("src"); 
            lightboxImg.setAttribute("src", imgUrl);
            lightbox.style.display = "block";
        });
    });

    lightbox.addEventListener("click", function (event) {
        if (event.target.classList.contains("lightbox") || event.target.classList.contains("lightbox-close")) {
            lightbox.style.display = "none";
        }
    });
});

