@component('mail::message')
# Hey Admin

- {{ $msg->nom }}
- {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
