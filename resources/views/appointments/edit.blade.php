<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200 min-w-full">
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Modifier un rendez-vous') }}
                        </h2>
                    </x-slot>

                    <form action="{{ route('appointment.update', $appointment->appointment_id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-4">
                            <label for="client_id" class="block text-gray-700 text-sm font-bold mb-2">Client / Prospect</label>
                            <select name="client_id" id="client_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Sélectionner un client</option>
                                @foreach($clients as $client)
                                <option value="{{ $client->client_id }}" {{ ($appointment->client_id == $client->client_id) ? 'selected' : '' }}>
                                    {{ $client->first_name }}
                                </option>
                                @endforeach
                            </select>

                        </div>


                        <!-- Date and Time -->
                        <div class="mb-4">
                            <label for="date_time" class="block text-gray-700 text-sm font-bold mb-2">Date and Time:</label>
                            <input type="datetime-local" name="date_time" id="date_time" value="{{ \Carbon\Carbon::parse($appointment->date_time)->format('Y-m-d\TH:i') }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <!-- Location -->
                        <div class="mb-4">
                            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <input type="text" name="location" id="location" value="{{ $appointment->location }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                            <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                <option value="Planned" {{ $appointment->status === 'Planned' ? 'selected' : '' }}>Planned</option>
                                <option value="Realized" {{ $appointment->status === 'Realized' ? 'selected' : '' }}>Realized</option>
                                <option value="Canceled" {{ $appointment->status === 'Canceled' ? 'selected' : '' }}>Canceled</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Mettre à jour
                            </button>
                            <a href="{{ route('appointment.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">
                                Retour
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>