@component('mail::message')
# Introduction

Hello, {{$email}}

Thank you for Subscribing us, we will update you daily.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
