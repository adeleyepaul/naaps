@component('mail::message')

# Thank you for your message

<strong>Name:</strong> {{ $data['name'] }}<br>
<strong>Email:</strong> {{ $data['email'] }}<br>
<strong>Phone No:</strong> {{ $data['phone']}}<br>
<strong>Title:</strong> {{ $data['title']}}<br>

<strong>Message</strong>

{{ $data['message'] }}
@endcomponent
