@extends('layouts.app')

<?php 
    $episodes = $matter['episodes'] 
?>

@section('content')
<h1 class="text-center text-5xl mb-6">{{ $title }}</h1>
{!! $content !!}

<div class="flex flex-row flex-wrap justify-center">
    <?php foreach($episodes as $episode) { ?>
        @include('partials.episode')
    <?php } ?>
</div>
@endsection