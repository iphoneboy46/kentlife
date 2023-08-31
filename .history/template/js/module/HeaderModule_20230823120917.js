export default function HeaderModule() {
 
    const header = document.querySelector(".header");
    if (header) {
        const btnSearch = header.querySelector(".btn-search");
        const btnSearchExits = header.querySelector(".btn-search-exit");
        const modalSearch = document.querySelector(".modal-search");
        const headerSearchIp = header.querySelector(".header-search-ip");
        btnSearch.addEventListener("click", () => {
          
            btnSearchExits.classList.add("showed");
            modalSearch.classList.add("showed");
            btnSearch.classList.add("hidden");
            headerSearchIp.classList.add("showed");
        })

        btnSearchExits.addEventListener("click", () => {
          
            btnSearchExits.classList.remove("showed");
            btnSearch.classList.remove("hidden");
            modalSearch.classList.remove("showed");
            headerSearchIp.classList.remove("showed");
        })

        modalSearch.addEventListener("click", () => {
            
            btnSearchExits.classList.remove("showed");
            btnSearch.classList.remove("hidden");
            modalSearch.classList.remove("showed");
            headerSearchIp.classList.remove("showed");
        })


        const btnMobi = header.querySelector(".btn-mobi");
        console.log(btnMobi);
        btnMobi.addEventListener("click", () => {
           
            btnMobi.classList.toggle("actived")
        })

    }
}