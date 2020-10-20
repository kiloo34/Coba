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
            <div class="font-medium whitespace-no-wrap">Sony A7 III</div>
        </td>
        <td class="table-report__action w-56">
            <x-button.update />
            <x-button.delete />
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
