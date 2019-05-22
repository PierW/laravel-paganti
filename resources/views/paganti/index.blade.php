@extends('boolean.layout.layout')

@section('content')

{{--  QUESTO è UN COMMENTO IN BLADE--}}
{{--@php
dd($paganti);
@endphp--}}

  <table>
  @foreach($paganti as $pagante)

  <tr>
    <td><strong>{{ $pagante -> id }}</strong></td>
    <td>{{ $pagante -> name }}</td>
    <td>{{ $pagante -> lastname}}</td>
  </tr>

  @endforeach
  </table>

@stop
