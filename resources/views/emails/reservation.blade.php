@component('mail::message')
# Introduction

Reservation For {{ $name }} at {{ config('app.name') }}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
