@props(['job'])

<x-panel class="flex flex-row gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="text-xl font-bold mt-3 group-hover:text-blue-600 transition-all duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">Full time - from {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>
