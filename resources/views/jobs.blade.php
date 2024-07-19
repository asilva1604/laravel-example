<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Available jobs:</h1>
    <ul>
        @foreach($jobs as $job)
            <li class="text-bold text-violet-500">
                <a href="/jobs/{{$job['id']}}">
                    {{$job['title']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
