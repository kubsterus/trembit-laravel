@props([
    'title' => 'Lets us work together',
    'description' => [
        'Trembit team is open to discuss your solution and project requirements. Fill in the form to schedule a call with WebRTC experts.',
        'Looking forward to your message!'
    ],
    'action' => '/send.php',
    'messages' => [
        'success' => 'Thank you! Your message has been successfully sent. We will contact you as soon as we review your message.',
        'error' => 'Failed! For enquiries please call us on the telephone number below.'
    ],
])
<section id="lets-us" style="position: relative;background-color: rgb(33 18 96);padding: 5em 1em;min-height: auto;">
    <div class="flex lt-us">
        <div class="form-box-1" style="align-items: center;display: flex;padding-left: 6%;">
            <div class="flex" style="flex-direction: column;flex-wrap: nowrap;">
                <h3 class="title-lats">{{$title}}</h3>
                @foreach($description as $p)
                    <p>{{$p}}</p>
                @endforeach
            </div>
        </div>
        <div class="form-box-2" style="align-items: center;display: flex;">
            <form method="post" action="{{$action}}" target="_top" id="form" novalidate="" class="i-amphtml-form user-invalid">
                <div class="case-bl case-bl-1 show">
                    <input type="text" placeholder="Name" name="name" class="text contactField user-valid valid" required>
                    <input type="email" placeholder="Email" name="email" class="text contactField user-valid valid" required>
                    <input type="tel" placeholder="Phone" name="phone" class="text contactField user-valid valid" required>
                </div>
                <div class="case-bl case-bl-1 show">
                    <textarea name="message" placeholder="Your message" class=" contactField user-valid valid"></textarea>
                    <input class="submit-b" type="submit" value="Send Message" id="btn-submit">
                    <div class="submit-success">
                        <p>{{$messages['success']}}</p>
                    </div>
                    <div class="submit-error">
                        <p>{{$messages['error']}}</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@inlineCss(css/sections/lets-us.css)
