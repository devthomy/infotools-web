<x-app-layout>
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full space-y-8 p-2 bg-white shadow overflow-hidden sm:rounded-lg">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Modifier le Client') }}
                </h2>
            </x-slot>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erreur !</strong> Il y a des problèmes avec les données saisies.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('client.update', $client->client_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                    <!-- Nom -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" value="{{ $client->last_name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nom">
                    </div>

                    <!-- Prénom -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" value="{{ $client->first_name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Prénom">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ $client->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email">
                    </div>

                    <!-- Téléphone -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" value="{{ $client->phone }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Téléphone">
                    </div>

                    <!-- Adresse -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" value="{{ $client->address }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Adresse">
                    </div>

                    <div class="form-group">
                        <dt class="text-sm font-medium text-gray-500">
                            Type
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <select name="type" id="type"class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
                                <option value="0" {{ $client->type == 0 ? 'selected' : '' }}>Prospect</option>
                                <option value="1" {{ $client->type == 1 ? 'selected' : '' }}>Client</option>
                            </select>
                        </dd>
                    </div>

                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Mettre à jour
                    </button>
                    <a href="{{ route('client.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">
                        Retour
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>