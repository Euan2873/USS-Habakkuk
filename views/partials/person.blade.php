<div class="md:w-1/2 bg-grey-lightest m-2 p-2">
    <div class="flex flex-row items-center">
        <div class="md:w-4/10 mr-2 text-center">
            <img style="width: 160px;" src="{{ $person['image'] }}" alt="{{ $person['name'] }}">
        </div>
        <div class="md:w-6/10">
            <h2 class="font-semibold text-2xl">{{ $person['name'] }}</h2>
            <p>{{ $person['description'] }}</p>
            @if(array_key_exists('pdf', $person))
	            <p>
	            	<a class="text-black" href="{{ $person['pdf'] }}">Click to open character sheet</a>
	            </p>
            @endif
        </div>
    </div>
</div>
