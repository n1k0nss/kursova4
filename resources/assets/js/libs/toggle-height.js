let timeout;
export const slideHeight = (content, active,  transition = 400) => {
    if (active){
        clearInterval(timeout);
        content.style.height = content.scrollHeight + 'px';
        timeout=setInterval(()=>{
            content.style.height = 'fit-content';
            content.style.overflow= "visible";
            clearInterval(timeout);
        },transition + 10)
    }else {
        content.style.height = content.scrollHeight + 'px';
        content.style.overflow= "hidden";
        setTimeout(()=>{
            if (content.dataset.height){
                content.style.height = content.dataset.height;
                return;
            }
            content.style.height = ''
        },1)
    }
}
