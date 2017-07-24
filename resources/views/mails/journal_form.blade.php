@component('mail::message')
Покупка журнала <br>
Имя - {{$contact->name}} <br>
Email - {{$contact->email}} <br>
Телефон - {{$contact->phone}} <br>
Журнал - {{$journal->title}}
@endcomponent
