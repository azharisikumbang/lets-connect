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
                    <div class="col-span-2 grid grid-cols-3 gap-8">
                        <div class="col-span-2">
                            <h1 class="text-2xl font-bold">
                                {{ $activity['title'] }}
                            </h1>
                            <div>
                                Penyelenggara: {{ $activity['owner']['name'] }}
                            </div>
                            <p>
                                {{ $activity['body'] }}
                            </p>
                            <p>
                                Tanggal kegiatan: {{ date('d-m-Y', strtotime($activity['deadline'])) }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="mb-2 font-semibol">
                                Interaksi:
                            </div>
                            @foreach($activity['comments'] as $comment)
                                <div class="mb-2 border-b">
                                    <div class="font-semibold">{{ $comment['commented_by']['name'] }}</div>
                                    <div>{{ $comment['body'] }}</div>
                                </div>
                            @endforeach
                        </div>

                        <form method="post" action="{{ route('comments.store', ['activity' => $activity['id']]) }}" class="mt-6">
                            @csrf
                            @method('post')

                            <div class="w-full mb-2">
                                <x-text-input placeholder="ketik komentar.." name="comment" type="text" class="mt-1 block w-full" required autofocus autocomplete="comment" />
                                <x-input-error class="mt-2" :messages="$errors->get('comment')" />
                            </div>

                            <x-primary-button>{{ __('Kirim Komentar') }}</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
