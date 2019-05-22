@extends('boolean.layout.layout')

@section('content')

{{--  QUESTO è UN COMMENTO IN BLADE--}}
{{-- @php
dd($pagamenti);
@endphp --}}

  <table>
  @foreach($pagamenti as $pagamento)

  <tr>
    <td>{{ $pagamento -> id }}</td>
    <td>{{ $pagamento -> status }}</td>
    <td>{{ $pagamento -> price}}</td>
  </tr>

  @endforeach
  </table>

@stop
