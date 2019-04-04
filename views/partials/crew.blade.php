<h1 class="underline uppercase text-center">{{ $title }}</h1>
<?php foreach($variable as $section) { ?>
    <h2 class="text-center">{{ $section['title'] }}</h2>
    <div class="flex flex-row flex-wrap items-center justify-center">
        <?php foreach($section['people'] as $person) { ?>
            @include('partials.person')
        <?php } ?>
    </div>
<?php } ?>