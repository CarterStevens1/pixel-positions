<x-layout>
    <div class="space-y-10">

        <seciton class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Search jobs..."
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl"></x-forms.input>
            </x-forms.form>
        </seciton>

        <section class="pt-10">
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-expanded :job="$job" />
                @endforeach
            </div>
    </div>
</x-layout>
