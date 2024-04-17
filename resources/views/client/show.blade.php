<x-app-layout>
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full space-y-8 p-4">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Détail du client') }}
                </h2>
            </x-slot>

            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $client->first_name }} {{ $client->last_name }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Informations sur le client.
                    </p>
                </div>
                <div class="border-t border-gray-200 pt-5">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <!-- ID du client -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-medium text-gray-500">
                                ID du client
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $client->client_id }}
                            </dd>
                        </div>

                        <!-- Email -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-medium text-gray-500">
                                Email
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $client->email }}
                            </dd>
                        </div>

                        <!-- Téléphone -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-medium text-gray-500">
                                Téléphone
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $client->phone }}
                            </dd>
                        </div>

                        <!-- Adresse -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-medium text-gray-500">
                                Adresse
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $client->address }}
                            </dd>
                        </div>


                        <!-- Type -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-medium text-gray-500">
                                Type
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $client->type == 0 ? 'Prospect' : 'Client' }}
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="bg-gray-50 text-right sm:px-6 mt-5">
                    <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition ease-in-out duration-150">
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>