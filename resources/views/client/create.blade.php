<x-app-layout>
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full space-y-8 p-2 bg-white shadow overflow-hidden sm:rounded-lg">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Créer un Client') }}
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

            <form action="{{ route('client.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nom -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nom">
                    </div>

                    <!-- Prénom -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Prénom">
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email">
                    </div>

                    <!-- Téléphone -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" value="{{ old('telephone') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Téléphone">
                    </div>

                    <!-- Adresse -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Adresse">
                    </div>

                    <!-- Type -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="type">Type</label>
                        <select id="type" name="type" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="0">Prospect</option>
                            <option value="1">Client</option>
                        </select>
                    </div>

                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Créer
                    </button>
                    <a href="{{ route('client.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">
                        Retour
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>