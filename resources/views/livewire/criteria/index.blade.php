<thead>
    <tr>
        <th class="whitespace-no-wrap">#</th>
        <th class="whitespace-no-wrap">Nama</th>
        <th class="text-center whitespace-no-wrap">Action</th>
    </tr>
</thead>
<tbody>
    <?php $count = 1?>
    @foreach ($kriteria as $k)
    <tr class="intro-x">
        <td>{{$count}}</td>
        <td>
            <div class="font-medium whitespace-no-wrap">{{ ucfirst($k->name) }}</div>
        </td>
        <td class="table-report__action w-56">
            <div class="flex justify-center items-center">
                <x-button.update wire:click="show({{$k->id}})" />
                <x-button.delete wire:click="$emit('destroy', {{$k->id}})" />
            </div>
        </td>
    </tr>
    <?php $count++ ?>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <th class="whitespace-no-wrap">#</th>
        <th class="whitespace-no-wrap">Nama</th>
        <th class="text-center whitespace-no-wrap">Action</th>
    </tr>
</tfoot>

@push('script')
    <script>
        document.addEventListener('livewire:load', function () {
            @this.on('destroy', idKriteria => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    }
                })
            })
        })
    </script>
     
@endpush