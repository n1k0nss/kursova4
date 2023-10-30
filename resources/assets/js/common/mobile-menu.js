(() => {
    const mainMenuBtnRef = document.querySelector("[data-main-menu-button]");
    const mobileMainMenuRef = document.querySelector("[data-main-menu]");
    const lock = document.querySelector("[data-lock]");


    mainMenuBtnRef.addEventListener("click", () => {
        const expanded =
            mainMenuBtnRef.getAttribute("aria-expanded") === "true" || false;

        mainMenuBtnRef.classList.toggle("is-open");
        mainMenuBtnRef.setAttribute("aria-expanded", !expanded);

        mobileMainMenuRef.classList.toggle("is-open");

        lock.classList.toggle("fixing");

    });
})();
