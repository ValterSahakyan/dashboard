@component('mail::message')
    Dear, {{ $details['request']['first_name'] }} {{ $details['request']['last_name'] }}

    Thank you for your request, it has been approved. Find the dataset attached below.

    Best regards,

    Denovo Sciences Team

@component('mail::button', ['url' => 'https://denovosciences.ai/'])
    Denovo Sciences
@endcomponent

@endcomponent
