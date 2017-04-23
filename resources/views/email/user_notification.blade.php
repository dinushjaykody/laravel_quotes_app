<h1>Thank you for creating a Quote {{$name}}</h1>
<p>Please follow this link to register: <a href="{{route('mail_callback', ['author_name' => $name])}}"> Register </a></p>