<form wire:submit:prevent="store" method="post">
    {{-- <x-input.label>Nama</x-input.label> --}}
    <x-input.input label="nama" id="name" />
    <div class="text-right mt-5">
        <x-button.cancel />
        <x-button.submit label="submit" />
    </div>
</form>
