@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/contacts.css)
@endsection
@section('content')
    <x-lets-us-centered-section />
    <x-contacts-section>
        <x-slot name="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.1903100126647!2d30.472910738048228!3d50.47480071384169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cddc313e93e7%3A0x4c9032f91701116!2z0YPQuy4g0J3QsNCz0L7RgNC90LDRjywgNiwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1664962264817!5m2!1sru!2sua" width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </x-slot>
    </x-contacts-section>
@endsection
