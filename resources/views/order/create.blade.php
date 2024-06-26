<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productSelect = document.getElementById('product_id');
        const quantityInput = document.getElementById('quantity');
        const amountDisplay = document.getElementById('calculated_amount');

        function updateAmount() {
            const price = productSelect.options[productSelect.selectedIndex].dataset.price;
            const quantity = quantityInput.value || 0; // Utilisez 0 comme valeur par défaut si la quantité est vide
            const amount = price * quantity;
            amountDisplay.value = amount.toFixed(2) + ' €'; // Affiche le montant calculé
        }

        productSelect.addEventListener('change', updateAmount);
        quantityInput.addEventListener('input', updateAmount);
    });
</script>

<x-app-layout>
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full space-y-8 p-2 bg-white shadow overflow-hidden sm:rounded-lg">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Créer une commande') }}
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

            <form action="{{ route('order.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Client -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="client_id">Client</label>
                        <select name="client_id" id="client_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            @foreach($clients as $client)
                            <option value="{{ $client->client_id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Produit -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="product_id">Produit</label>
                        <select name="product_id" id="product_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            @foreach($products as $product)
                            <option value="{{ $product->product_id }}" data-price="{{ $product->price }}">{{ $product->name }} - {{ $product->price }}€ </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Quantité -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="quantity">Quantité</label>
                        <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Date -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="date">Date</label>
                        <input type="date" name="date" id="date" value="{{ old('date') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Montant -->
                    <div class="form-group">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="calculated_amount">Montant Calculé</label>
                        <div class="relative rounded-md shadow-sm">
                            <input type="text" id="calculated_amount" name="amount" class="appearance-none block w-full py-2 px-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md pr-10 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="0.00" readonly>
                        </div>
                    </div>



                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="mr-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Créer
                    </button>
                    <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition ease-in-out duration-150">
                        Retour
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>