<!-- resources/views/vacancies/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Vacancy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Display success or error messages -->
                @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form for creating a vacancy -->
                <form method="POST" action="{{ route('vacancies.store') }}">
                    @csrf
                    <div class="space-y-6">
                        <!-- Job Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                            <input type="text" name="job_title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select name="employment_category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="IT">IT</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Finance">Finance</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <!-- Type -->
                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <select name="employment_type" id="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Select job type</option>
                                <option value="Full-Time">Full-Time</option>
                                <option value="Part-Time">Part-Time</option>
                                <option value="Contract">Contract</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <!-- Location -->
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <select name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="" disabled selected>Select a location</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Nakuru">Nakuru</option>
                                <option value="Eldoret">Eldoret</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4 text-right">
                            <button type="submit" class="bg-blue-500 text-blue px-4 py-2 rounded-md hover:bg-blue-600">
                                Create Vacancy
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

