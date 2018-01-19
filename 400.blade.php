@extends('errors.layouts.base')

@section('title', '400 Bad Request')

@section('message', 'There is an error in the request.')
{{-- リクエストにエラーがあります。 --}}

@section('detail', 'This response indicates that the server can not understand the request because the syntax is invalid.')
{{-- このレスポンスは、構文が無効であるためサーバーがリクエストを理解できないことを示します。 --}}