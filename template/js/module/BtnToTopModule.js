export default function BtnToTopModule() {


  const btnToTop = document.querySelector(".btn-to-top");
  if (btnToTop) {
    btnToTop.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    })
  }
}
