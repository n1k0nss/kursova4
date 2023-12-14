import {slideHeight} from "@/libs/toggle-height.js";
const faqButtons = document.getElementsByClassName("js--faq-button");
const faqItems = document.getElementsByClassName('js--faq-item');
const toggleFaq = (e) => {
    const faqItem = e.currentTarget.closest('.js--faq-item');
    if (!faqItem.classList.contains("active")) {
        Array.from(faqItems, (item) => {
            if (item !== faqItem && item.classList.contains('active')) {
                slideHeight(item.getElementsByClassName("faq__collapse")[0], false);
                item.classList.remove("active");
            }})}
    faqItem.classList.toggle('active');
    slideHeight(faqItem.getElementsByClassName("faq__collapse")[0], faqItem.classList.contains("active"));
}
Array.from(faqButtons, (button) => {
    button.addEventListener("click", toggleFaq);
})
