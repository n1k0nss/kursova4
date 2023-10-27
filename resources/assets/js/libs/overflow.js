export const overflow = (isScrollbar = true) => {
    if (!isScrollbar) {
        setTimeout(() => {
            document.documentElement.classList.remove('fixing');
            document.body.style.width = '100%';
        }, 400)
    } else {
        if (document.documentElement.classList.contains('fixing')) {
            return;
        }
        const beforeWidthDocument = document.body.clientWidth;
        document.documentElement.classList.add('fixing');
        const afterWidthDocument = document.body.clientWidth;
        const widthScrollbar = afterWidthDocument - beforeWidthDocument;
        document.body.style.width = `calc(100% - ${widthScrollbar}px)`;
    }
}