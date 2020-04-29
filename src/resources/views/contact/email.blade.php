@component('mail::message')
# Introduction
There is new message for {{$name}}
<br>
Message:
{{$message}}

@component('mail::button', ['url' => ''])
Thank you
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
