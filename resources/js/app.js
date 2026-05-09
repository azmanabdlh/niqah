import Alpine from "alpinejs";
window.Alpine = Alpine;

document.addEventListener('alpine:init', () => {
    console.log("AlpineJS initialized");
})

Alpine.start();
