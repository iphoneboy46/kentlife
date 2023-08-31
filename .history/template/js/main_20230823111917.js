import AosModule from "./module/AosModule.js";
import SwiperModule from "./module/SwiperModule.js";
import Select2Module from "./module/Select2Module.js";
import GalleryModule from "./module/GalleryModule.js";
import TabModule from "./module/TabModule.js";

window.addEventListener("DOMContentLoaded", () => {
    // Animation
    AosModule();
    // Tab
    TabModule();
    // Select
    Select2Module();
    // Component
    SwiperModule();
    GalleryModule();
    
});