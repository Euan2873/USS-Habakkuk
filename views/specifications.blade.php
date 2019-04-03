@extends('layouts.app')

<?php 
    $command = $matter['command'];
    // $operations = $matter['operations'];
    // $science = $matter['science'];
    // $civilian = $matter['civilian'];
?>

@section('content')
<h1 class="text-center text-5xl mb-6">{{ $title }}</h1>
{!! $content !!}

<h1 class="underline uppercase text-center">Command</h1>
<?php foreach($command as $section) { ?>
    <h2 class="text-center">{{ $section['title'] }}</h2>
    <div class="flex flex-row flex-wrap items-center justify-center">
        <?php foreach($section['people'] as $person) { ?>
            @include('partials.person')
        <?php } ?>
    </div>
<?php } ?>
@endsection