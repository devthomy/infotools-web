<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-2xl leading-tight">
                        {{ __('Dashboard') }}
                    </h2>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="animate-fade-in-down">
                            <div
                                class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                                <a href="{{ url('/product') }}"
                                    class="block p-6 bg-white rounded-lg border border-gray-300 shadow-lg hover:shadow-2xl hover:border-blue-500">
                                    <h5 class="text-lg leading-tight font-medium mb-2" style="color: #6875F5;">Produits
                                    </h5>
                                    <p class="text-gray-600 text-base">
                                        Gérez votre inventaire et consultez vos produits ici.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="animate-fade-in-up">
                            <div
                                class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                                <a href="{{ url('/appointment') }}"
                                    class="block p-6 bg-white rounded-lg border border-gray-300 shadow-lg hover:shadow-2xl hover:border-green-500">
                                    <h5 class="text-lg leading-tight font-medium mb-2" style="color: #6875F5;">
                                        Rendez-vous</h5>
                                    <p class="text-gray-600 text-base">
                                        Planifiez et consultez vos prochains rendez-vous.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="animate-fade-in-right">
                            <div
                                class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                                <a href="{{ url('/order') }}"
                                    class="block p-6 bg-white rounded-lg border border-gray-300 shadow-lg hover:shadow-2xl hover:border-red-500">
                                    <h5 class="text-lg leading-tight font-medium mb-2" style="color: #6875F5;">Commandes
                                    </h5>
                                    <p class="text-gray-600 text-base">
                                        Accédez aux détails et au suivi des commandes des clients.
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-semibold text-xl leading-tight mb-6">Mes Prochains Rendez-vous</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                @foreach ($appointments as $appointment)
                                <div class="transition duration-500 ease-in-out hover:shadow-lg">
                                    <div
                                        class="p-6 bg-white rounded-lg border border-gray-200 h-full flex flex-col justify-between">
                                        <div>
                                            <h5 class="text-lg font-bold mb-2" style="color: #6875F5;">
                                                Rendez-vous le {{
                                                \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y') }}
                                            </h5>
                                            <p class="text-gray-700 text-base mb-2">
                                                <strong>Heure :</strong> {{
                                                \Carbon\Carbon::parse($appointment->date_time)->format('H:i') }}
                                            </p>
                                            <p class="text-gray-700 text-base mb-3">
                                                <strong>Lieu :</strong> {{ $appointment->location }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-gray-600 text-sm">
                                                <strong>Statut :</strong> {{ $appointment->status }}
                                            </p>
                                        </div>
                                        <div class="text-right mt-4">
                                            <!-- Bouton pour voir plus de détails sur le rendez-vous -->
                                            <a href="{{ route('appointments.show', ['appointment' => $appointment->appointment_id]) }}"
                                                class="text-sm text-blue-600 hover:text-blue-900">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>