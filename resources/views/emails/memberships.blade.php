<img src="https://madinatmakadigolf.com/img/logo-white.png" alt="Your Logo"
    style="max-width: 150px; display:block;margin:auto;">
<br>
@component('mail::message')
    # Welcome to the first Newletter
    Dear {{ $name }},
    
    We look forward to communicating more with you. For more information visit our blog.
  
    Thanks,
    {{ config('app.name') }}
@endcomponent
