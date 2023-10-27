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

            this.pristineObj.addValidator(phone, function(value) {

                return !!value && value.match(/\d/g).length === 12;
            }, "");
        });

        [...this.el.querySelectorAll('[data-pristine-select]')]
            .filter(item => !item.parentNode.classList.contains('disabled'))
            .map(select => {
                this.pristineObj.addValidator(select, (value) => {

                    return !!value;
                }, "");
            })
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
        } else {
            el.closest('.js--validate-group').classList.remove('error');
            el.closest('.js--validate-group').classList.add('valid');
        }
    }
}

export default Validate;
