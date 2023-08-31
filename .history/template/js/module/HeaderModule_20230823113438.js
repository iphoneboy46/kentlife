export default function HeaderModule() {
    const btnSearch = document.querySelector(".btn-search");

    if (btnSearch) {
        const btnSearchExits = document.querySelector(".btn-search-exit");
        const modalSearch = document.querySelector(".modal-search");
        btnSearch.addEventListener("click", () => {
            const headerSearchIp = document.querySelector(".header-search-ip");
            btnSearchExits.classList.add("showed");
            btnSearch.classList.add("hidden");

            headerSearchIp.classList.add("showed");
        })

        btnSearchExits.addEventListener("click", () => {
            const headerSearchIp = document.querySelector(".header-search-ip");
            btnSearchExits.classList.remove("showed");
            btnSearch.classList.remove("hidden");

            headerSearchIp.classList.remove("showed");
        })
    }
}