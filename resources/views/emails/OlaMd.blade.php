@component('mail::message')
# Ola T91 MD

Lorem ipsum **dolor** sit amet consectetur adipisicing elit. Alias possimus, minus officiis tempora nam, ipsam soluta iusto 
aut itaque distinctio repudiandae deleniti consequuntur enim error necessitatibus magni? Consequatur, inventore tempore!

- item
- item 2
@component('mail::button', ['url' => 'http://uol.com.br'])
Button Text
@endcomponent

obrigado,<br>
{{ config('app.name') }}
@endcomponent
