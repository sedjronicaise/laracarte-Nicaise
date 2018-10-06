@component('mail::message')
#hi! admin

- {{ $name }}
- {{ $email }}

@component('mail::panel')
{{ $msg }}
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'success'])
Creer un compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
 