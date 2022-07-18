@component('mail::message')
# Introduction

I think you wanna hear more about {{ $topic }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
