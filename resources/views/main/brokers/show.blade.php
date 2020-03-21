@extends('main.layouts.app')

@section('title') {{ $broker->name }}   @endsection

@section('content')


 {{ $broker->name }}
 <br>
 {{ $broker->mobile }}
 <br>
 {{ $broker->email }}
 <br>
 {{ $broker->account_url }}


@endsection