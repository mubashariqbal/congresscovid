<x-guest-layout>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Name
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Positive date
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Status
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Title
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($positives as $person)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ $person->photo_url }}" alt="">
                                </div>
                                <div class="ml-4">
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{ $person->name }}
                                </div>
                                <div class="text-sm leading-5 text-gray-500">
                                    @if ($person->party == 'democrat') 
                                        D
                                    @elseif ($person->party == 'republican') 
                                        R
                                    @else 
                                        I
                                    @endif

                                    &ndash; {{ $person->state_name }}
                                </div>
                                </div>
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                            <div class="text-sm leading-5 text-gray-900">
                                {{ $person->positive_date->format('M d, Y') }}
                                @if ($person->negative_date != null) 
                                    &mdash; {{ $person->negative_date->format('M d, Y') }}
                                @endif
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                                @if ($person->negative_date == null) 
                                    Active
                                @else 

                                @endif
                            </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                            {{ ucfirst($person->title) }} 
                            {{-- {{ ucfirst($person->office) }} --}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                <a href="{{ $person->website }}" class="text-indigo-600 hover:text-indigo-900">Website</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>


            {{-- <h2 class="text-3xl font-bold">Sentors who have COVID-19</h2>
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
            </div> --}}
        </div>
    </div>
</x-guest-layout>
