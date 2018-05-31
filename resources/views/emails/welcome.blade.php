@component('mail::message')
# Introduction

The body of your message.

Thank you , Your Email Is Activated Now.

@component('mail::button', ['url' => 'http://localhost:8000/'])

	Start Browsing

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
