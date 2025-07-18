<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-600 leading-tight font-['Pacifico']">
            {{ __('Edit Your Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-teal-300">
                <div class="p-6 bg-white">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-teal-600 text-sm font-bold mb-2">Name</label>
                            <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" required class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-teal-600 text-sm font-bold mb-2">Email</label>
                            <input type="email" name="email" id="email" value="{{ auth()->user()->email }}" required class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-teal-600 text-sm font-bold mb-2">New Password (leave blank to keep current)</label>
                            <input type="password" name="password" id="password" class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-teal-600 text-sm font-bold mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border border-teal-300 rounded w-full py-2 px-3 bg-blue-50 text-gray-700 leading-tight focus:outline-none focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-4 rounded">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
