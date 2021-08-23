@component('mail::message')
# Introduction

message is :{{$message}} by : {{$name}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
