<div class="status-modal js--one-click-modal one-click">
    <div class="status-modal__content one-click__content">
        <button class="one-click__close-button">
            <span class="one-click__button-icon js--one-click-modal-close"></span>
        </button>
        <div class="status-modal__header">
            <span class="status-modal__title js--status-modal-title">Оформити замовлення</span>
        </div>
        <form class="one-click__form js--one-click-form" method="POST" action="{{route('mail')}}">
            @csrf
            <div class="one-click__form-group js--validate-group">
                <label class="one-click__label" for="name">Введіть ім'я:</label>
                <input type="text" name="name" placeholder="Ім'я" class="one-click__form-input js--one-click-name"
                       data-pristine-required=""
                       data-pristine-required-message="Поле обов'язкове"
                       data-pristine-minlength-message="Мінімум 2 символи"
                       data-pristine-minlength="2">
            </div>
            <div class="one-click__form-group js--validate-group">
                <label class="one-click__label" for="tel">Номер телефону</label>
                <input type="tel" name="tel" placeholder="+38 (___) ___-__-__" class="one-click__form-input js--init-inputmask" inputmode="numeric"
                       data-pristine-required=""
                       data-pristine-required-message="Введіть номер телефону"
                       data-pristine-phone=""
                       data-pristine-phone-message="Введіть валідний номер телефону"
                >
            </div>
            <div class="one-click__form-group js--validate-group">
                <label class="one-click__label" for="email">Електронна пошта</label>
                <input type="email" name="email" placeholder="Email" class="one-click__form-input js--one-click-email"
                       data-pristine-required=""
                       data-pristine-required-message="Введіть email"
                       data-pristine-email-message="Введіть валідний email"
                >
            </div>

            <button class="one-click__form-submit js--one-click-submit" type="submit">
                Оформити
            </button>
        </form>
    </div>
    <div class="status-modal__backdrop js--one-click-modal-close"></div>
</div>
