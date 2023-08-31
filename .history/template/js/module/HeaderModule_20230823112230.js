export default function HeaderModule(){
    const btnSearch = document.querySelector("btn-search");
    if(btnSearch){
        btnSearch.addEventListener("click",()=>{
            const headerSearchIp = document.querySelector(".header-search-ip");
            headerSearchIp.classList.toggle("showed");
        })
    }
}