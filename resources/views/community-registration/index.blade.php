<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Masukkan Informasi Komunitas Kamu') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Informasi komunitas yang jelas akan membantu teman-teman komunitas lain dalam mengenali komunitas kamu.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('community-registration.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')

                            <div>
                                <x-input-label for="community_name" :value="__('Nama Komunitas')" />
                                <x-text-input id="community_name" name="community_name" type="text" class="mt-1 block w-full" required autofocus autocomplete="community_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('community_name')" />
                            </div>

                            <div>
                                <x-input-label for="community_description" :value="__('Daerah Operasional Komunitas')" />
                                <textarea name="community_description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full mt-2" rows="5"></textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('community_description')" />
                            </div>


                            <div>
                                <x-input-label for="community_name" :value="__('Bidang Komunitas')" />
                                <x-text-input id="community_name" name="community_category" type="text" class="mt-1 block w-full" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('community_category')" />
                            </div>

                            <div>
                                <x-input-label for="community_name" :value="__('Daerah Operasional Komunitas')" />
                                <x-text-input id="community_name" name="community_area" type="text" class="mt-1 block w-full" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('community_area')" />
                            </div>

                            <x-primary-button>{{ __('Buat') }}</x-primary-button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
