<!-- resources/views/vacancies/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Vacancy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Form for editing a vacancy -->
                <form method="POST" action="{{ route('vacancies.update', $vacancy->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="space-y-6">
                        <!-- Job Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                            <input type="text" name="job_title" id="title" value="{{ old('title', $vacancy->job_title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <input type="text" name="employment_category" id="category" value="{{ old('category', $vacancy->employment_category) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Type -->
                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <input type="text" name="employment_type" id="type" value="{{ old('type', $vacancy->employment_type) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Location -->
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" name="location" id="location" value="{{ old('location', $vacancy->location) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4 text-right">
                            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600">
                                Update Vacancy
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
