@props([
    'title' => 'Let us work <br> together',
    'action' => '/send.php',
    'messages' => [
        'success' => 'Thank you! Your message has been successfully sent. We will contact you as soon as we review your message.',
        'error' => 'Failed! For enquiries please call us on the telephone number below.'
    ],
])
<section id="lets-us" style="position: relative;background-color: rgb(33 18 96);padding-top: 90px;padding-bottom: 0px;min-height: 100vh;display: flex;flex-direction: column;justify-content: center;">
    <div class="flex">
        <div class="case-bl case-bl-1 show" style="width: 48%;text-align: center;margin: auto;">
            <h3 class="title-lats" style="margin: auto;padding: 7% 0%;">{!! $title !!}</h3>
            <form method="post" action="{{$action}}" target="_top" id="form" novalidate="" class="i-amphtml-form user-invalid">
                <input class="text contactField user-valid valid" placeholder="Name" name="name" type="text" required>
                <input class="text contactField user-valid valid" placeholder="email" name="email" type="email" required>
                <input class="text contactField user-valid valid" type="tel" placeholder="Phone" name="phone" required>
                <textarea name="message" placeholder="Your message"></textarea>
                <input class="submit-b user-valid valid" id="submit" type="submit" value="Get in touch">
                <div class="submit-success">
                    <p>{{$messages['success']}}</p>
                </div>
                <div class="submit-error">
                    <p>{{$messages['error']}}</p>
                </div>
            </form>
        </div>
    </div>
</section>
