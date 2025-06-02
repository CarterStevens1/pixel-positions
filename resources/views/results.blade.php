<x-layout>
    <x-page-heading>Search results</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-expanded :job="$job" />
        @endforeach
    </div>
</x-layout>
