<x-layout>

    <x-page-heading>Post a Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        <x-forms.input name="title" label="Title" />
        <x-forms.input name="salary" label="Salary" />
        <x-forms.input name="location" label="Location" />

        <x-forms.select name="schedule" label="Schedule">
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
            <option value="contract">Contract</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" />
        <x-forms.checkbox name="featured" label="Featured (Costs extra)" />

        <x.forms.divider />

        <x-forms.input name="tags" label="Tag (comma seperated)" />

        <x-forms.button>Create Job</x-forms.button>
    </x-forms.form>
</x-layout>
