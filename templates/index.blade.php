@extends('app')

@section('content')

<h1>Slim</h1>
    @if(isset($name))
        <h2>Hello {{$name}}!.</h2>
    @else
        <p>Try <a href="http://www.slimframework.com">SlimFramework</a></p>
        {{$path}}
    @endif

@endsection