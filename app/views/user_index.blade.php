@extends('layout')

@section('content')
    <span>Name:    {{$user["name"]}}</span> <br />
    <span>LasName: {{$user["lastname"]}}</span> <br />
    <span>Wage:    {{$user["wage"]}}</span>
@stop