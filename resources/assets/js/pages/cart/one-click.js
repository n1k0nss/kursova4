import axios from 'axios';
import Modal from "@/libs/Modal";
import { errorModal, changeErrorText } from "@/common/error-modal";
import Validate from "@/libs/validate";

let checkCallGetResponse = true;

const config = {
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
};

const oneClickButton = document.getElementsByClassName('js--one-click')[0];
const oneClickForm = document.getElementsByClassName('js--one-click-form')[0];
const oneClickSubmitButton = oneClickForm.getElementsByClassName("js--one-click-submit")[0];

const oneClickModal = document.getElementsByClassName('js--one-click-modal')[0];

const oneClickModalBlock = new Modal(oneClickModal,{
    closeButtons: oneClickModal.getElementsByClassName('js--one-click-modal-close'),
    closeGlobal: true,
    overflow: true,
    overflowOnClose: false,
});

const toggleOneClick = ()=>{
    oneClickForm.classList.add('active');
    oneClickModalBlock.open();
}

let oneClickFormValidation;
let oneClickFormValid;
const submitOneClickOrder = (e)=>{
    e.preventDefault();
    !oneClickFormValidation ? oneClickFormValidation = new Validate(oneClickForm) : oneClickFormValidation.reinstall(oneClickForm);
    oneClickFormValid = oneClickFormValidation.validate();
    console.log(oneClickFormValid)
    if (oneClickFormValid){
        sendAjaxOneClick(e);
    }
}

function sendAjaxOneClick(e)
{
    const inputEl = e.currentTarget.querySelector('input[name="tel"]');
    const nameInputEl = e.currentTarget.querySelector('input[name="name"]');
    const emailInputEl = e.currentTarget.querySelector('input[name="email"]');
    const input = inputEl.value;
    const nameInput = nameInputEl.value;
    const emailInput = emailInputEl.value;

    let sendData = {
        'phone_number': input,
        'name': nameInput,
    };
    if (checkCallGetResponse) {
        checkCallGetResponse = false;
        axios
            .post(e.currentTarget.action, sendData, config)
            .then(response => {
                checkCallGetResponse = true;
                inputEl.value = '';
                nameInputEl.value = '';
                emailInputEl.value = '';
                oneClickSubmitButton.setAttribute("disabled", "");
            })
            .catch(function (error) {
                checkCallGetResponse = true;
                inputEl.value = '';
                nameInputEl.value = '';
                emailInputEl.value = '';
                oneClickSubmitButton.setAttribute("disabled", "");
                changeErrorText(error.response.data.message);
                errorModal.open();
            });
    }
}

function toggleFocus(element) {
    element.addEventListener('focus', (event) => {
        event.currentTarget.closest('.one-click__form-group').classList.add("is-focused");
    }, true);

    element.addEventListener('blur', (event) => {
        if (event.currentTarget.value < 1){
            event.currentTarget.closest('.one-click__form-group').classList.remove("is-focused");
        }
    }, true);
}

function addToggleFocusToItems(selector) {
    const items = document.querySelectorAll(selector);
    console.log(items)
    items.forEach((item) => {
        toggleFocus(item);
    });
}

if (!!oneClickForm){
    oneClickButton.addEventListener('click', toggleOneClick);
    oneClickForm.addEventListener('submit', submitOneClickOrder);
    addToggleFocusToItems('.one-click__form-input')
}
