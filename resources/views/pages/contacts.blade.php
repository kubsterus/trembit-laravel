@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/contacts.css)
@endsection
@section('content')
    <x-lets-us-centered-section />
    <x-contacts-section>
        <x-slot name="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.166327970342!2d30.54318601499861!3d50.438002479473674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cfa7c5b45bfb%3A0x8ba229e6c36c0ad7!2z0YPQuy4g0JzQvtGB0LrQvtCy0YHQutCw0Y8sIDIzLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1639910771969!5m2!1sru!2sua" height="209" style="width:100%;border:0;" allowfullscreen="" loading="lazy"></iframe>
        </x-slot>
    </x-contacts-section>
@endsection
