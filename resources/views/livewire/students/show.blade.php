<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-6 sm:px-6">
            <a class="align-left text-blue-600 mb-2" href="{{ route('students.index') }}">Terug</a>
            <h3 class="text-base font-semibold leading-7 text-gray-900">Leerling informatie </h3>


        </div>
        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Naam</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $student->voornaam }}  {{ $student->familienaam}}<br/>
                        {{$student->group->naam}}

                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">GSM nr</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <a href="tel:{{ $student->mobile}}">{{ $student->mobile }}</a>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Tel voogd1</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span>{{$student->name_voogd}}</span><br/>
                        <a href="tel:{{ $student->tel_home}}">{{ $student->tel_home }}</a>
                    </dd>
                </div>

                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Tel voogd2</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span>{{$student->name_voogd2}}</span><br/>
                        <a href="tel:{{ $student->tel_home2}}">{{ $student->tel_home2 }}</a>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Woonplaats</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{ $student->street_nr }}<br/>
                        {{ $student->zipcode }} {{ $student->city }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Allergieen</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                     <strong>{{ $student->alergischeinfo }}</strong>
                    </dd>

                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Medische info</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <strong>{{ $student->txt_illnes }}</strong>
                    </dd>

                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Medicijnen (tolerantie)
                    <span class="block p-2 w-1/2 mb-2
                                text-green-600 bg-green-200">leerling mag medicijn nemen</span>
                    <span class="block p-2 w-1/2 mb-2
                                bg-red-500 text-white">leerling mag medicijn niet nemen</span>
                    </dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <span
                         @class([
		'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_paracetamol,
                                'bg-red-500 text-white' =>  $student->f_paracetamol
                            ])>
                            Paracetamol
                        </span>
                        <span
                            @class([
									'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_immodium,
                                'bg-red-500 text-white' => $student->f_immodium
                            ])>
                            Immmodium
                        </span>
                        <span
                            @class([
									'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_enterol,
                                'bg-red-500 text-white' => $student->f_enterol
                            ])>
                            Enterol
                        </span>

                        <span
                            @class([
'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_hibitane,
                                'bg-red-500 text-white' => $student->f_hibitane
                            ])>
                            Hibitane
                        </span>

                        <span
                            @class([
'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_flamazine,
                                'bg-red-500 text-white' => $student->f_flamazine
                            ])>
                            Flamazine
                        </span>
                        <span
                            @class([
'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_euceta,
                                'bg-red-500 text-white' => $student->f_euceta
                            ])>
                            Euceta
                        </span>

                        <span
                            @class([
'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_isobetadine,
                                'bg-red-500 text-white' => $student->f_isobetadine
                            ])>
                            Isobetadine
                        </span>
                        <span
                            @class([
'block p-2 w-1/2 mb-2',
                                'text-green-600 bg-green-200' => !$student->f_flexiumgel,
                                'bg-red-500 text-white' => $student->f_flexiumgel
                            ])>
                            Flexiumgel
                        </span>



                </div>

            </dl>
        </div>
    </div>
</div>
