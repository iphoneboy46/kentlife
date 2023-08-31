export default function HeaderModule() {
 
    const header = document.querySelector(".header");
    if (btnSearch) {
        const btnSearch = header.querySelector(".btn-search");
        const btnSearchExits = header.querySelector(".btn-search-exit");
        const modalSearch = document.querySelector(".modal-search");
        btnSearch.addEventListener("click", () => {
            const headerSearchIp = document.querySelector(".header-search-ip");
            btnSearchExits.classList.add("showed");
            modalSearch.classList.add("showed");
            btnSearch.classList.add("hidden");
            headerSearchIp.classList.add("showed");
        })

        btnSearchExits.addEventListener("click", () => {
            const headerSearchIp = document.querySelector(".header-search-ip");
            btnSearchExits.classList.remove("showed");
            btnSearch.classList.remove("hidden");
            modalSearch.classList.remove("showed");
            headerSearchIp.classList.remove("showed");
        })

        modalSearch.addEventListener("click", () => {
            const headerSearchIp = document.querySelector(".header-search-ip");
            btnSearchExits.classList.remove("showed");
            btnSearch.classList.remove("hidden");
            modalSearch.classList.remove("showed");
            headerSearchIp.classList.remove("showed");
        })

    }
}