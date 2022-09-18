@props([
    'title' => 'Why Choose Us?',
    'subtitle' => 'Trembit is a leading live streaming app development company with over a decade of experience helping clients optimize and modernize their business. Leveraging the latest technology, the team of skilled video conferencing developers will quickly and easily provide you with innovative solutions tailored to your business needs.',
    'image' => asset('view/images/bg_office.webp')
])
<section id="lets-us" style="position: relative;background-color: rgb(33 18 96);padding-top: 0px;padding-bottom: 0px;min-height: auto;">
    <div class="flex">
        <div class="bl-3w">
            <div class="case-bl case-bl-1 show">
                <h3 class="title-lats">{{$title}}</h3>
                <p>{{$subtitle}}</p>
                <form method="post" action="https://preview.trembit.com/send.php" target="_top" id="form" novalidate="" class="i-amphtml-form user-invalid">
                    <input type="text" placeholder="Name" name="name" class="text contactField user-valid valid" required="">
                    <input type="email" placeholder="Email" name="email" class="text contactField user-valid valid" required="">
                    <input type="tel" placeholder="Phone" name="phone" class="text contactField user-valid valid" required="">
                    <textarea name="message" placeholder="Your message" class=" contactField user-valid valid"></textarea>
                    <input class="submit-b but-as" type="submit" value="Send Message" id="btn-submit">
                    <div class="submit-success">
                        <p>Thank you! Your message has been successfully sent. We will contact you as soon as we review your message.</p>
                    </div>
                    <div class="submit-error">
                        <p>Failed! For enquiries please call us on the telephone number below.</p>
                    </div>
                </form>
            </div>
        </div>
        <div class="bl-7w">
            <div class="flex">
                <picture><source srcset="{{$image}}" type="image/webp"><img alt="Office" src="{{$image}}" style="width: 100%;"></picture>
            </div>
        </div>
    </div>
</section>
