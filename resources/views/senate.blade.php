<x-guest-layout>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-4">
                    <h2 class="text-3xl font-bold">Sentors who have COVID-19</h2>
                    <div class="grid lg:grid-cols-5 gap-6 mt-6">
                    @foreach($positives as $person)
                        <div>
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-gray-100 text-gray-800">
                                {{ ucfirst($person->party) }}
                            </span>
                            
                            <h3 class="text-lg font-bold">{{ $person->name }} ({{ $person->state_code }})</h3>
                            <img class="mt-2 rounded w-full" src="{{ $person->photo_url }}" alt="">
                            <p class="text-xs mt-2">{{ $person->positive_date->format('M d, Y') }}</p>
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="p-4">
                    <h2 class="text-3xl font-bold">Sentors who had COVID-19</h2>
                    <div class="grid lg:grid-cols-5 gap-6 mt-6">
                    @foreach($pastPositives as $person)
                        <div>
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium leading-4 bg-gray-100 text-gray-800">
                                {{ ucfirst($person->party) }}
                            </span>

                            <h3 class="text-lg font-bold">{{ $person->name }} ({{ $person->state_code }})</h3>
                            <img class="mt-2 rounded w-full" src="{{ $person->photo_url }}" alt="">
                            <p class="text-xs mt-2">{{ $person->positive_date->format('M d, Y') }} - {{ $person->negative_date->format('M d, Y') }}</p>
                        </div>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
