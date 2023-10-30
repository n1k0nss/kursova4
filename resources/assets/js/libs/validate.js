import Pristine from "pristinejs";

class Validate {
    constructor(el) {
        this.el = el;
        this.pristineObj;

        this.initValid();
    }
    initValid() {
        this.pristineObj = new Pristine(this.el, {
            classTo: 'js--validate-group',
            errorClass: 'error',
            successClass: 'valid',
            errorTextParent: 'js--validate-group',
        });
        this.customValid();
    }
    customValid() {
        [...this.el.querySelectorAll('[data-pristine-phone]')].map(phone => {
            let message = phone.dataset.pristinePhoneMessage ?? '';
            this.pristineObj.addValidator(phone, function(value) {
                if(!!value) {
                    let currentValue = value.replace(/\D/g,'');

                    return currentValue.length == 12;
                } else {
                    return false;
                }
            }, message);
        });

        [...this.el.querySelectorAll('[data-pristine-select]')]
            .filter(item => !item.parentNode.classList.contains('disabled')).map(select => {
            let message = select.dataset.pristineSelectMessage ?? '';

            this.pristineObj.addValidator(select, (value) => {

                return !!value;
            }, message);
        });

        [...this.el.querySelectorAll('[data-pristine-input]')]
            .map(item => {
                let message = item.dataset.pristineInputMessage ?? '';
                this.pristineObj.addValidator(item, function(value) {
                    if(!item.closest('.js--validate-group').classList.contains('disabled')) {

                        if(!!value) {
                            return value.length >= 1;
                        } else {
                            return false;
                        }
                    } else {
                        return true;
                    }
                }, message);
            });
    }
    validate() {
        let formValid = this.pristineObj.validate();

        [...this.el.querySelectorAll('[data-pristine-select]')]
            .filter(el => !el.parentNode.classList.contains('disabled'))
            .map(select => {
                this.checkSelect(select);
                select.addEventListener('change', () => {
                    this.checkSelect(select);
                })
            });

        return formValid;
    }
    destroy() {
        this.pristineObj.destroy();
    }
    reinstall(obj) {
        this.el = obj;
        this.destroy();
        this.initValid();
    }
    checkSelect(el) {
        if(!el.value) {
            el.closest('.js--validate-group').classList.remove('valid');
            el.closest('.js--validate-group').classList.add('error');
            this.customMessage(true, el);
        } else {
            el.closest('.js--validate-group').classList.remove('error');
            el.closest('.js--validate-group').classList.add('valid');
            this.customMessage(false, el);
        }
    }
    customMessage(isOpen, select) {
        if(isOpen) {
            let custom = document.createElement('div');
            custom.classList.add('pristine-error', 'text-help', 'js--pristine-custom');
            custom.innerHTML = select.pristine.messages.select;
            if(!select.closest('.js--validate-group').getElementsByClassName('js--pristine-custom')[0]) {
                select.closest('.js--validate-group').append(custom);
            }
        } else {
            [...select.closest('.js--validate-group').getElementsByClassName('pristine-error')].map(message => message.remove());
        }
    }
}

export default Validate;
