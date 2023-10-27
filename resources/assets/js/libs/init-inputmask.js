import Inputmask from "inputmask";

const phoneInputs = document.getElementsByClassName('js--init-inputmask');
const im = new Inputmask({
    mask: '+38 (999) 999 99 99',
    showMaskOnHover: false,
    inputmode: 'numeric',
});
Array.from(phoneInputs, (el)=>{
    im.mask(el);
});