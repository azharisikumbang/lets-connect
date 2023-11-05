<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-2">
            <div class="w-full grid grid-cols-3 items-center">
                <div class="italic text-gray-700">
                    Just a tool to connect us.
                </div>
                <div>
                    <div class="flex items-center">
                        <x-text-input name="search" class="w-96 text-center" type="text" placeholder="ketik sesuatu untuk mencari..." />   
                    </div>
                </div>
                <div>
                    @if (Route::has('login'))
                    <div class="text-right">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hover:underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="hover:underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 hover:underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2 grid grid-cols-3 gap-8 items-center">
                        <div>
                            <img class="w-full rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt="">
                        </div>
                        <div class="col-span-2">
                            <h1 class="text-2xl font-bold">
                                {{ $community['name'] }}
                            </h1>
                            <p>
                                {{ $community['description'] }}
                            </p>
                            <div class="mt-4">
                                <x-primary-button>Hubungkan</x-primary-button>
                                <x-secondary-button>Kirim Pesan</x-secondary-button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold underline mb-2 p-2">
                            agenda komunitas {{ $community['name'] }}:
                        </div>
                        <div>
                            @if($community['activities'])
                                @foreach($community['activities'] as $activity)
                                    <div class="border-b border-grey-400 mb-2 p-2 hover:bg-gray-100 cursor-pointer">
                                        <div class="font-semibold">
                                            {{ $activity['title'] }}
                                        </div>
                                        <p>{{ substr($activity['body'], 0, 25) }}...</p>
                                        <p class="italic text-sm text-gray-400">
                                            tanggal: {{ date('d-m-Y', strtotime($activity['deadline'])) }}
                                        </p>
                                    </div>
                                @endforeach
                            @else
                                <div class="italic text-sm p-2">tidak ada agenda.</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
