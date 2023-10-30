import {slideHeight} from "@/libs/toggle-height";
import {disableButton} from "@/libs/disable-button";

const initShowMore = () => {
    const showButtons = document.getElementsByClassName('js--show-more');
    if (!!showButtons) {

        const changeButtonText = (button)=> {
            button.classList.toggle('active');
            if (button.dataset.showMoreText){
                const currentText = button.querySelector('.js--show-more-text').textContent;
                const newText = button.dataset.showMoreText;
                button.querySelector('.js--show-more-text').textContent = newText;
                button.dataset.showMoreText = currentText;
            }
        }

        const unfoldContent = (button, content) =>{
            content.style.height = 'fit-content';
            content.style.overflow= "visible";
            changeButtonText(button);
        }

        const toggleshowMoreContainer = (e) => {
            const button = e.currentTarget;
            disableButton(button);
            const container = button.closest('.js--show-more-container');
            const content = container.querySelector('.js--show-more-content');
            content.classList.toggle('active');
            changeButtonText(button);
            slideHeight(content, content.classList.contains('active'));
        }

        Array.from(showButtons, (button) => {
            const container = button.closest('.js--show-more-container');
            const content = container.querySelector('.js--show-more-content');
            if (!content){
                return;
            }
            const anchor = container.querySelector('.js--show-more-anchor');
            let anchorHeight;
            if (!!anchor){
                anchorHeight = `${anchor.offsetTop}px`;
                content.style.height = anchorHeight;
                content.dataset.height = anchorHeight;
            }
            if(content.clientHeight + 20 < content.scrollHeight){
                button.style= "display:flex;";
                button.addEventListener("click", toggleshowMoreContainer);
                if (content.classList.contains('active')){
                    unfoldContent(button, content);
                }
            }else{
                content.style = "height: fit-content";
                content.classList.add('active');
            }
        })
    }
}

initShowMore();

export default initShowMore;