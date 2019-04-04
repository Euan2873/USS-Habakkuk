@extends('layouts.app')

<?php 
    $command = $matter['command'];
    $operations = $matter['operations'];
    $science = $matter['science'];
    $civilian = $matter['civilian'];
?>

@section('content')
<h1 class="text-center text-5xl mb-6">{{ $title }}</h1>
{!! $content !!}

@include('partials.crew', ['title' => 'Command', 'variable' => $matter['command']])
@include('partials.crew', ['title' => 'Operations', 'variable' => $matter['operations']])
@include('partials.crew', ['title' => 'Science', 'variable' => $matter['science']])
@include('partials.crew', ['title' => 'Civilian', 'variable' => $matter['civilian']])
@endsection