import AosModule from "./module/AosModule.js";
import SwiperModule from "./module/SwiperModule.js";
import Select2Module from "./module/Select2Module.js";
import GalleryModule from "./module/GalleryModule.js";
import TabModule from "./module/TabModule.js";
import HeaderModule from "./module/HeaderModule.js";
import Tabs from "./module/tabs.js";
import PopupModule from "./module/PopupModule.js";
import CollapseModule from "./module/CollapseModule.js";

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
    HeaderModule();
    PopupModule();
    Tabs();
    CollapseModule()
});