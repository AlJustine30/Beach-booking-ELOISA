<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-600 leading-tight font-['Pacifico']">
            {{ __('Book New Activity') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-teal-300">
                <div class="p-6 bg-white">
                    <form method="POST" action="{{ route('bookings.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-teal-600 text-sm font-bold mb-2">Activity Name</label>
                            <input type="text" name="name" id="name" required class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-teal-600 text-sm font-bold mb-2">Description</label>
                            <textarea name="description" id="description" rows="3" required class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500"></textarea>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="booking_date" class="block text-teal-600 text-sm font-bold mb-2">Date</label>
                                <input type="date" name="booking_date" id="booking_date" required class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                            </div>
                            <div class="mb-4">
                                <label for="booking_time" class="block text-teal-600 text-sm font-bold mb-2">Time</label>
                                <input type="time" name="booking_time" id="booking_time" required class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                            </div>
                        </div>
                        <div class="flex items-center justify-end">
                            <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded mr-2">
                                Cancel
                            </a>
                            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-4 rounded">
                                Book Activity
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
