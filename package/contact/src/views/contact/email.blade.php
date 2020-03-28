@component('mail::message')
# Introduction

This is new mail from {{ $name }}

{{--The body of your message.--}}
<br>
Message :

{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
