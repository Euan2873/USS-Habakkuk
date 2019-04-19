<a class="md:w-1/4 bg-grey-lightest m-4 no-underline text-black rounded-6" href="{{ $episode['slug'] }}">
    <img class="img-thumbnail" src="{{ $episode['image'] }}" alt="{{ $episode['title'] }}" $episode -> resizeImage(100, 200);>
    <h2 class="font-semibold text-2xl text-center">{{ $episode['title'] }}</h2>
</a>
