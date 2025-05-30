<x-layout>
    <div class="space-y-10">

        <seciton class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <form action="" class="mt-6">
                <input placeholder="Search jobs..." type="text"
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </seciton>

        <section class="pt-10">
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag>PHP</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Javascript</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Javascript</x-tag>
                <x-tag>Laravel</x-tag>
                <x-tag>Javascript</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-expanded />
                <x-job-card-expanded />
                <x-job-card-expanded />
            </div>
    </div>
</x-layout>
