@component('mail::message')
    Dear, {{ $details['first_name'] }} {{ $details['last_name'] }}

    Thank you for your request. We will review it and come back to you soon.

    Best regards,

    Denovo Sciences Team

@component('mail::button', ['url' => 'https://denovosciences.ai/'])
    Denovo Sciences
@endcomponent

@endcomponent
