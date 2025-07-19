<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-teal-700 leading-tight font-['Pacifico']">
            {{ __('Book Your Adventure') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-blue-50 to-teal-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl">
                <div class="p-8 sm:p-10 bg-white">
                    <div class="mb-8 text-center">
                        <h3 class="text-2xl font-bold text-teal-800">New Activity Details</h3>
                        <p class="text-teal-600 mt-2">Fill in the form to book your next adventure</p>
                    </div>
                    
                    <form method="POST" action="{{ route('bookings.store') }}" class="space-y-6">
                        @csrf
                        
                        <div class="space-y-1">
                            <label for="name" class="block text-sm font-medium text-teal-700">Activity Name</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="name" id="name" required class="focus:ring-2 focus:ring-amber-500 focus:border-teal-500 block w-full pl-10 sm:text-sm border-teal-300 rounded-lg py-3 bg-teal-50 border-2 text-teal-800 placeholder-teal-400">
                            </div>
                        </div>
                        
                        <div class="space-y-1">
                            <label for="description" class="block text-sm font-medium text-teal-700">Description</label>
                            <textarea name="description" id="description" rows="4" required class="shadow-sm focus:ring-2 focus:ring-amber-500 focus:border-teal-500 mt-1 block w-full sm:text-sm border-teal-300 rounded-lg py-3 px-4 bg-teal-50 border-2 text-teal-800 placeholder-teal-400"></textarea>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-1">
                                <label for="booking_date" class="block text-sm font-medium text-teal-700">Date</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <input type="date" name="booking_date" id="booking_date" required class="focus:ring-2 focus:ring-amber-500 focus:border-teal-500 block w-full pl-10 sm:text-sm border-teal-300 rounded-lg py-3 bg-teal-50 border-2 text-teal-800">
                                </div>
                            </div>
                            
                            <div class="space-y-1">
                                <label for="booking_time" class="block text-sm font-medium text-teal-700">Time</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <input type="time" name="booking_time" id="booking_time" required class="focus:ring-2 focus:ring-amber-500 focus:border-teal-500 block w-full pl-10 sm:text-sm border-teal-300 rounded-lg py-3 bg-teal-50 border-2 text-teal-800">
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between pt-6">
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                                </svg>
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 transition-all duration-150">
                                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                                Book Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
