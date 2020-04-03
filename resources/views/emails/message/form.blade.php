@component('mail::message')
{{ $name ?? '' }}
{{ $email ?? '' }}


The body of your message.

{{ $msg ?? '' }}
@endcomponent