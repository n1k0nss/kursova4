import { overflow } from './overflow';
import { disableButton } from './disable-button';

class Modal {
    constructor(modal, options) {
        this.modal = modal;
        this.modalContainer = options.modalContainer;
        this.openButtons = options.openButtons;
        this.closeButtons = options.closeButtons;
        this.overflow = !!options.overflow;
        this.overflowOnClose = !!options.overflowOnClose;
        this.otherSelector = options.otherSelector;
        this.closeOther = !!options.closeOther;
        this.closeGlobal = !!options.closeGlobal;
        this.closeOnButtonOnly = !!options.closeOnButtonOnly;
        if (this.openButtons){
            this.init();
        }
    }
    init() {
        this.initOpenButtons();
    }
    initOpenButtons() {
        Array.from(this.openButtons, (button) => {
            button.addEventListener('click', () => {
                this.open();
                disableButton(button, 411);
            });
        });
    }
    open() {
        if(this.modal.classList.contains('active')) return;
        this.closeGlobal && this.closeAll();
        this.closeOther && this.closeSameType();
        this.modal.classList.add('active');
        setTimeout(()=>{
            this.overflow ? overflow() : overflow(false);
            this.initClose();
        }, 411)
    }

    close(){
        this.overflowOnClose ? overflow() : overflow(false)
        this.modal.classList.remove('active');
    }

    initClose() {
        const modal = this.modal;
        const closeOnButtonOnly = this.closeOnButtonOnly;
        const closeButtons = this.closeButtons;
        const overflowOnClose = this.overflowOnClose;
        const close = function (e){
            const target = e.target;
            if(closeOnButtonOnly && [...closeButtons].indexOf(target) === -1) return;
            if(!modal.contains(target) || [...closeButtons].indexOf(target) !== -1){
                overflowOnClose ? overflow() : overflow(false)
                modal.classList.remove('active');
                document.removeEventListener('click', close);
            }
        }
        document.addEventListener('click', close);
    }
    closeSameType() {
        const otherModals = document.querySelectorAll(this.otherSelector);
        Array.from(otherModals, (modal) => {
            if (modal !== this.modal) {
                modal.classList.remove('active');
            }
        });
    }
    closeAll(){
        Array.from(document.getElementsByClassName('js--modal'),(modal)=>{
            if(modal !== this.modal){
                modal.classList.remove('active');
            }
        });
    }
}

export default Modal;
