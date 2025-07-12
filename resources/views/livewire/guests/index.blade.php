<?php


use App\Models\Table;
use App\Models\Guest;
use App\Models\NutritionalRequirements;
use Illuminate\Support\Collection;
use Livewire\Volt\Component;
use Mary\Traits\Toast;

new class extends Component {
    use Toast;

    public string $search = '';

    public bool $drawer = false;

    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];

    public $guestTables = null;
    public $guestRestrictions = null;

    public function tableChange($guestId, $value)
    {
        $guest = Guest::findOrFail($guestId);
        $guest->table_id = $value;
        $guest->save();

        $this->guestTables[$guest->id] = $guest->table_id;

        $this->success('Table changed', position: 'toast-bottom');
    }

    // Clear filters
    public function clear(): void
    {
        $this->reset();
        $this->success('Filters cleared.', position: 'toast-bottom');
    }

    // Delete action
    public function delete($id): void
    {
        $this->warning("Will delete #$id", 'It is fake.', position: 'toast-bottom');
    }

    // Table headers
    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1'],
            ['key' => 'name', 'label' => 'Meno', 'class' => 'w-64'],
            ['key' => 'parent', 'label' => 'Na svadbe s...', 'class' => 'w-64'],
            ['key' => 'table', 'label' => 'Stôl', 'class' => 'w-20'],
            ['key' => 'night1', 'label' => 'Noc pred', 'class' => 'w-20'],
            ['key' => 'night2', 'label' => 'Noc po', 'class' => 'w-20'],
            ['key' => 'room', 'label' => 'Izba', 'class' => 'w-20'],
            ['key' => 'restrictions', 'label' => 'Obmedzenia', 'class' => 'w-20'],
            ['key' => 'tags', 'label' => 'Značky', 'class' => 'w-20']

//            ['key' => 'age', 'label' => 'Age', 'class' => 'w-20'],
//            ['key' => 'email', 'label' => 'E-mail', 'sortable' => false],
        ];
    }

    /**
     * For demo purpose, this is a static collection.
     *
     * On real projects you do it with Eloquent collections.
     * Please, refer to maryUI docs to see the eloquent examples.
     */
    public function guests(): Collection
    {

        $guests = Guest::all();

        foreach ($guests as $guest) {
            $this->guestTables[$guest->id] = $guest->table_id;
            $this->guestRestrictions[$guest->id] = [];
        }

        return $guests;

//        return collect([
//            ['id' => 1, 'name' => 'Mary', 'email' => 'mary@mary-ui.com', 'age' => 23],
//            ['id' => 2, 'name' => 'Giovanna', 'email' => 'giovanna@mary-ui.com', 'age' => 7],
//            ['id' => 3, 'name' => 'Marina', 'email' => 'marina@mary-ui.com', 'age' => 5],
//        ])
//            ->sortBy([[...array_values($this->sortBy)]])
//            ->when($this->search, function (Collection $collection) {
//                return $collection->filter(fn(array $item) => str($item['name'])->contains($this->search, true));
//            });
    }

    public function tables(): Collection
    {
        return Table::all()->prepend((object)['id' => null, 'name' => 'Neusadený']);
    }

    public function restrictions(): Collection
    {
        return NutritionalRequirements::all();
    }


    public function with(): array
    {
        return [
            'headers' => $this->headers(),
            'guests' => $this->guests(),
            'tables' => $this->tables(),
            'restrictions' => $this->restrictions(),
            'tags' => [],
            'guestTables' => $this->guestTables,
            'guestRestrictions' => $this->guestRestrictions
        ];
    }
}; ?>

<div>
    <!-- HEADER -->
    <x-mary-header title="Hostia na svadbe" separator progress-indicator>
        <x-slot:middle class="!justify-end">
            <x-mary-input placeholder="Search..." wire:model.live.debounce="search" clearable
                          icon="o-magnifying-glass"/>
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button label="Filters" @click="$wire.drawer = true" responsive icon="o-funnel"/>
        </x-slot:actions>
    </x-mary-header>

    <!-- TABLE  -->
    <x-mary-card>
        <x-mary-table :headers="$headers" :rows="$guests" :sort-by="$sortBy">
            {{--            @scope('actions', $user)--}}
            {{--                <x-mary-button icon="o-trash" wire:click="delete({{ $user['id'] }})" wire:confirm="Are you sure?" spinner--}}
            {{--                      class="btn-ghost btn-sm text-red-500"/>--}}
            {{--            @endscope--}}


            @scope('cell_parent', $guest)
            {{ $guest->parent?->name }}
            @endscope

            @scope('cell_table', $guest, $tables)
            Stol {{$guest->table_id}}
            <x-mary-select
                    icon="gmdi.table-bar-o"
                    :options="$tables"
                    wire:change="tableChange({{ $guest->id }}, $event.target.value);"
                    wire:model="guestTables.{{ $guest->id }}"
            />
            @endscope

            @scope('cell_restrictions', $guest, $restrictions)
            {{--                <x-mary-choices label="Multiple" wire:model="guestRestrictions.{{ $guest->id }}" :options="$restrictions" />--}}
            @endscope


            @scope('cell_tags', $guest, $tags)
            {{--                <x-mary-choices label="Multiple" wire:model="guestRestrictions.{{ $guest->id }}" :options="$restrictions" />--}}
            @endscope

        </x-mary-table>
    </x-mary-card>

    <!-- FILTER DRAWER -->
    <x-mary-drawer wire:model="drawer" title="Filters" right separator with-close-button class="lg:w-1/3">
        <x-mary-input placeholder="Search..." wire:model.live.debounce="search" icon="o-magnifying-glass"
                      @keydown.enter="$wire.drawer = false"/>

        <x-slot:actions>
            <x-mary-button label="Reset" icon="o-x-mark" wire:click="clear" spinner/>
            <x-mary-button label="Done" icon="o-check" class="btn-primary" @click="$wire.drawer = false"/>
        </x-slot:actions>
    </x-mary-drawer>
</div>
