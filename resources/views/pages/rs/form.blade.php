<x-layout>
    <x-card>
        <x-form :model="$model">
            <x-action form="form" />

            @bind($model)

            <x-form-input col="6" name="rs_nama" />
            <x-form-input col="6" name="rs_deskripsi" />
            <x-form-textarea col="6" name="rs_alamat" />
            <x-form-select col="6" class="tag" :default="$selected ?? []" name="ruangan[]" multiple :options="$ruangan" />

            @endbind

        </x-form>
    </x-card>
</x-layout>
