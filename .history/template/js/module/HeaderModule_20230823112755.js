export default function HeaderModule(){
    const btnSearch = document.querySelector(".btn-search");

    if(btnSearch){
    const btnSearchExits = document.querySelector(".btn-search-exit");

        btnSearch.addEventListener("click",()=>{
            const headerSearchIp = document.querySelector(".header-search-ip");
            btnSearchExits.classList.add("showed")
            headerSearchIp.classList.add("showed");
        })
    }
}