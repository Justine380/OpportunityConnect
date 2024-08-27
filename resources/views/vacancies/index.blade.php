<!-- resources/views/vacancies/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vacancies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Vacancy Cards -->
                <div class="space-y-6">
                    @foreach ($vacancies as $vacancy)
                        <div class="border border-gray-300 rounded-lg p-4">
                            <div class="flex items-center space-x-4">
                                <div class="bg-gray-200 p-2 rounded-full">
                                    <!-- Icon Placeholder -->
                                    <span class="text-gray-600 font-bold text-lg">
                                        <!-- Dynamic Initials (e.g., "EC" for Event Coordinator) -->
                                        {{ strtoupper(substr($vacancy->job_title, 0, 2)) }}
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">{{ $vacancy->job_title }}</h3>
                                    <p class="text-sm text-gray-600">{{ $vacancy->employment_category }} · 
                                        {{ $vacancy->employment_type }}</p>
                                    <p class="text-sm text-gray-600">{{ $vacancy->location }}</p>
                                </div>
                            </div>
                            <div class="mt-4 text-right space-x-2">
                            <!-- Apply Button -->
                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-blue font-bold py-2 px-4 rounded">Apply</a>

                            <!-- Edit Button -->
                            <a href="{{ route('vacancies.edit', $vacancy->id) }}" class="bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-700">Edit</a>

                            <!-- Delete Button -->
                                <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-black px-4 py-2 rounded-md hover:bg-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

