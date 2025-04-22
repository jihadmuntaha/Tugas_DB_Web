<x-layout></x-layout>
    <h1>{{ $category['name'] }}</h1>
    <hr>
    <p>
        {{ $category['description'] }}
    </p>
</x-layout>
use App\Models\Categories;
$categories = Categories::all();
