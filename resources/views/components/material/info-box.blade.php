@props(['type' => 'alert-triangle'])
{{-- , 'count' => 'jumlah', 'label' => 'judul' --}}

<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
    <div class="report-box zoom-in">
        <div class="box p-5">
            <div class="flex">
                <i {{ $attributes->merge(['data-feather' => 'shopping-cart']) }} class="report-box__icon text-theme-10"></i>
                {{-- <div class="ml-auto">
                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month">
                        33%  <i data-feather="chevron-up" class="w-4 h-4"></i>
                    </div>
                </div> --}}
            </div>
            <div class="text-3xl font-bold leading-8 mt-6">{{ $count }}</div>
            {{-- <div class="text-3xl font-bold leading-8 mt-6">count</div> --}}
            <div class="text-base text-gray-600 mt-1">{{ $label }}</div>
            {{-- <div class="text-base text-gray-600 mt-1">label</div> --}}
        </div> 
    </div>
</div>