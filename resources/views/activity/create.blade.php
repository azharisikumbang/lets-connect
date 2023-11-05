<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sebarkan Kegiatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Sebarkan Kegiatan ke Sesama Komunitas') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Isi informasi sejelas mungkin, agar kegiatan dapat berjalan sesuai rencana.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('activities.store') }}" class="mt-6 space-y-6">
                            <div class="w-1/2">
                                @csrf
                                @method('post')

                                <div class="w-full">
                                    <x-input-label for="title" :value="__('Judul Kegiatan Kamu')" />
                                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus autocomplete="title" />
                                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                                </div>

                                <div class="mt-4 mb-4">
                                    <x-input-label for="images" :value="__('Tambahkan gambar pendukung (jpg/png)')" />
                                    <input type="file" accept="image/*" name="images" class="w-full mt-2">
                                    <x-input-error class="mt-2" :messages="$errors->get('images')" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="content" :value="__('Deksripsi Kegiatan Kamu')" />
                                    <textarea name="content" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-2" rows="5"></textarea>
                                    <x-input-error class="mt-2" :messages="$errors->get('content')" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="deadline" :value="__('Tanggal Kegiatan Kamu')" />
                                    <input type="date" name="deadline" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-2">
                                    <x-input-error class="mt-2" :messages="$errors->get('deadline')" />
                                </div>
                            </div>

                            <div class="flex items-center mt-12">
                                <x-primary-button>{{ __('Sebarkan') }}</x-primary-button>
                                <label class="inline-flex items-center ml-2">
                                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="publish_to_communities">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Sebarkan undangan langsung ke komunitas terhubung.') }}</span>
                                </label>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
