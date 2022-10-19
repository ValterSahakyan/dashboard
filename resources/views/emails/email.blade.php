@component('mail::message')
    <h1>{{ $details['first_name'] }} {{ $details['last_name'] }}</h1>
    <p>Email : {{ $details['email'] }}</p>
    @if(isset($details['company_name']))
        <p>Company Name/Affiliation : {{ $details['company_name'] }}</p>
    @endif
    @if(isset($details['job_title']))
        <p>Job Title : {{ $details['job_title'] }}</p>
    @endif
    <p>Message : {{ $details['message'] }}</p>

    {{ config('app.name') }}
@endcomponent
