<thead>
    <tr>
        <th class="whitespace-no-wrap">#</th>
        <th class="whitespace-no-wrap">Nama</th>
        <th class="text-center whitespace-no-wrap">Action</th>
    </tr>
</thead>
<tbody>
    <?php $count = 1?>
    @foreach ($alternatif as $a)
    <tr class="intro-x">
        <td>{{$count}}</td>
        <td>
            <div class="font-medium whitespace-no-wrap">{{ ucfirst($a->name) }}</div>
        </td>
        <td class="table-report__action w-56">
            <div class="flex justify-center items-center">
                <x-button.update wire:click="show({{$a->id}})" />
                <x-button.delete wire:model="$emit('destroy', {{$a->id}})" />
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

@prepend('script')
    <script>
        document.addEventListener('livewire:load', function () {
            @this.on('destroy', id => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                        )
                    }
                })
            })
        })
            
    </script>
@endprepend