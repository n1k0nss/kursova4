import lightGallery from "lightgallery";
import lgThumbnail from 'lightgallery/plugins/thumbnail';

lightGallery(document.getElementById('js--light-gallery'), {
    preload: 1,
    download: false,
    getCaptionFromTitleOrAlt: false,
    plugins: [lgThumbnail],
    speed: 300,
    mobileSettings: {
        controls: true, showCloseIcon: true, download: false,
    }
});