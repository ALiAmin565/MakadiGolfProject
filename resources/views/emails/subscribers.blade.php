<img src="https://madinatmakadigolf.com/img/logo-white.png" alt="Your Logo"
    style="max-width: 150px; display:block;margin:auto;">
<br>
@component('mail::message')
# Welcome 
Dear {{$name}},
<br>
We look forward to communicating more with you. For more information visit our website.
{{-- @component('mail::button', ['url' => 'https://laraveltuts.com'])
Blog
@endcomponent --}}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
