@component('mail::message')
Контактная форма <br>
Имя - {{$contact->name}} <br>
Email - {{$contact->email}} <br>
Содержание: {{$contact->content}} <br>
@endcomponent