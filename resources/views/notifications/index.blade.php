<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-teal-600 leading-tight font-['Pacifico']">
            {{ __('Messages') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-teal-300">
                <div class="p-6 bg-white">
                    @if($notifications->isEmpty())
                        <p class="text-gray-700">No messages found.</p>
                    @else
                        <ul class="divide-y divide-gray-200">
                            @foreach($notifications as $notification)
                            <li class="py-4">
                                <div class="flex justify-between">
                                    <p class="text-gray-700 {{ $notification->read_at ? '' : 'font-bold text-teal-600' }}">
                                        📨 {{ $notification->message }}
                                    </p>
                                    <div class="flex space-x-2">
                                        <span class="text-sm text-gray-500">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </span>
                                        @if(!$notification->read_at)
                                        <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-amber-600 hover:text-amber-500 text-sm">
                                                Dismiss
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
