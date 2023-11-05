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
                    <div class="col-span-2 grid grid-cols-2 gap-4">
                        <?php foreach($communities['data'] as $item): ?>
                            <a href="{{ route('community-profil.show', ['community' => $item['id']]) }}">
                                <div class="flex flex-cols p-4 rounded gap-2 cursor-pointer hover:bg-gray-100">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe" alt="" class="rounded-full">
                                    <div class="">
                                        <div class="font-bold">{{ $item['name'] }}</div>
                                        <div class="text-gray-600 text-sm">
                                            Berbasis di Padang dan begerak di bidang teknologi.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                        <div class="flex items-center justify-end">
                            <a href="" class="hover:underline">Lihat komunitas lainnya.</a>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold underline mb-2 p-2">
                            agenda komunitas terbaru:
                        </div>
                        <div>
                            tidak ada agenda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
