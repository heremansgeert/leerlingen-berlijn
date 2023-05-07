<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input type="text" wire:model.live="search" placeholder="Zoek studenten..."/>
    <x-tables.with-border>
        <tr>
            <x-tables.table-heading-cell>
                Voornaam
            </x-tables.table-heading-cell>
            <x-tables.table-heading-cell>
                Achternaam
            </x-tables.table-heading-cell>
            <x-tables.table-heading-cell>
                Klas
            </x-tables.table-heading-cell>
        </tr>
        @forelse($this->students() as $student)
            <tr>
                <x-tables.table-cell>
                    {{ $student->voornaam    }}
                </x-tables.table-cell>
                <x-tables.table-cell>
                    {{ $student->familienaam }}
                </x-tables.table-cell>
                <x-tables.table-cell>
                    {{ $student->group->naam }}
                </x-tables.table-cell>
                <x-tables.table-cell>
                    <a href="{{ route('students.show', $student) }}">Edit</a>
                </x-tables.table-cell>
            </tr>
        @empty
            <tr>
                <x-tables.table-cell colspan="3">
                    Geen studenten gevonden.
                </x-tables.table-cell>
            </tr>
        @endforelse

    </x-tables.with-border>
</div>
