document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const sidebar = document.querySelector(".sidebar");

    hamburger.addEventListener("click", () => {
        sidebar.classList.toggle("active");
    });

    // Optional: Close sidebar when clicking outside of it
    document.addEventListener("click", (event) => {
        if (!sidebar.contains(event.target) && !hamburger.contains(event.target)) {
            sidebar.classList.remove("active");
        }
    });
});
