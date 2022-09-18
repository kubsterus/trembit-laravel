@props([
    'action' => '/'
])
<section class="contact" id="contact-section">
    <div class="container">
        <form class="contact-form" action="{{$action}}">
            <div class="contact-form__head">
                <div class="contact-form__radio">
                    <input type="radio" name="radio" checked>
                    <div>Join Our Team</div>
                </div>
                <div class="contact-form__radio">
                    <input type="radio" name="radio">
                    <div>Refer a friend</div>
                </div>
            </div>
            <div class="contact-form__row">
                <div class="contact-form__col">
                    <input class="contact-form__input" type="text" name="name" placeholder="Name" required>
                    <input class="contact-form__input" type="email" name="email" placeholder="Email" required>
                    <input class="contact-form__input" type="text" name="categorie" placeholder="All Categories">
                </div>
                <div class="contact-form__col">
                    <textarea class="contact-form__textarea" name="comment" placeholder="Cover letter"></textarea>
                    <div class="contact-form__footer">
                        <label class="contact-form__file-label" for="contact-form-file">
                            <svg viewbox="0 0 24 24">
                                <path d="M13.059 18.7178C13.059 18.7178 18.7158 13.061 20.13 11.6468C21.5442 10.2325 22.2513 6.69705 19.7765 4.22215C17.3016 1.74728 13.7661 2.45439 12.3518 3.8686C10.9376 5.2828 3.51304 12.7074 2.80593 13.4145C2.09882 14.1216 1.03816 16.5965 3.15948 18.7178C5.2808 20.8391 7.7557 19.7785 8.4628 19.0714C9.1699 18.3643 16.9481 10.5861 17.6552 9.879C18.3623 9.1719 18.7159 7.40415 17.6552 6.3435C16.5945 5.2828 14.8267 5.63635 14.1196 6.3435C13.4125 7.0506 7.40215 13.061 7.40215 13.061" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>Your CV ( pdf, doc, docx)<br>Max 2mb
                        </label>
                        <input class="contact-form__file-input" id="contact-form-file" type="file" name="cv" accept=".pdf, .doc, .docx">
                        <button class="btn contact-form__btn" type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
