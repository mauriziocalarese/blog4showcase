@component('mail::message')
# Introduction

Thanks for registering!

@component('mail::button', ['url' => 'http://www.messinainweb.it'])
Browse me
@endcomponent

@component('mail::panel', ['url' => ''])
Some text into the Panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
