window.addEventListener("DOMContentLoaded", () => {
    const abrir = document.getElementById("abrirPopup");
    const popup = document.getElementById("bg");
    const cancelar = document.getElementById("cancelar");

    const sidebar = document.getElementById("sidebar");
    const hoverSidebar = document.querySelector(".s");
    const toggleBtn = document.getElementById("toggleBtn");

    const abrirPrefsBtns = document.querySelectorAll(".abrirPrefs");
    const bgPrefs = document.getElementById("bgPrefs");
    const fecharPrefs = document.getElementById("fecharPrefs");

    if (abrir && popup && cancelar) {
        abrir.addEventListener("click", () => {
            popup.style.display = "flex";
        });

        cancelar.addEventListener("click", () => {
            popup.style.display = "none";
        });
    }

    abrirPrefsBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            if (bgPrefs) bgPrefs.style.display = "flex";
        });
    });

    if (fecharPrefs) {
        fecharPrefs.addEventListener("click", () => {
            if (bgPrefs) bgPrefs.style.display = "none";
        });
    }

    window.setModo = function(modo){
        if (!sidebar || !hoverSidebar || !toggleBtn) return;
        if(modo === "hover"){
            hoverSidebar.style.display = "flex";
            sidebar.style.display = "none";
            toggleBtn.style.display = "none";
        } else {
            hoverSidebar.style.display = "none";
            sidebar.style.display = "flex";
            toggleBtn.style.display = "flex";
        }
        localStorage.setItem("modoSidebar", modo);
        if (bgPrefs) bgPrefs.style.display = "none";
    }

    const modo = localStorage.getItem("modoSidebar") || "normal";

    if (sidebar && hoverSidebar && toggleBtn) {
        if(modo === "hover"){
            hoverSidebar.style.display = "flex";
            sidebar.style.display = "none";
            toggleBtn.style.display = "none";
        } else {
            hoverSidebar.style.display = "none";
            sidebar.style.display = "flex";
            toggleBtn.style.display = "flex";
        }
    }

});