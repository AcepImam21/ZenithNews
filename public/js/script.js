
document.addEventListener("DOMContentLoaded", function () {
        // Navbar Element
        const navbar = document.querySelector("nav");

        // Jarak saat Navbar muncul fixed (misal: 100px dari atas)
        const scrollOffset = 100;

        // Tambahkan event listener untuk event scroll
        window.addEventListener("scroll", function () {
            // Periksa posisi scroll
            if (window.scrollY > scrollOffset) {
                navbar.classList.add("fixed-navbar");
            } else {
                navbar.classList.remove("fixed-navbar");
            }
        });
    });
