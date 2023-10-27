export const disableButton = (button , timeout = 300) => {
    let interval;
    clearInterval(interval);
    button.setAttribute("disabled", "");
    interval = setInterval(()=>{
        button.removeAttribute("disabled");
        clearInterval(interval);
    }, timeout)
}