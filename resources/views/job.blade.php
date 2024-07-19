<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <h2 class="text-lg font-bold">{{$job['title']}}</h2>

    <p>
        This job has an ID of {{$job['id']}}
    </p>
</x-layout>
