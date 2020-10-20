{{-- @props(['readonly' => '', 'required' => '']) --}}

<div class="mt-3">
    <label>{{ ucfirst($label) }}</label>
    <input wire:model="{{$label}}" @isset($required) required="required" @endisset @isset($readonly) readonly="readonly"
        @endisset name="{{ isset($name) ? $name : $id }}" id="{{ $id }}"
        {{ $attributes->merge(['class' => 'input w-full rounded-full border mt-4', 'type'=>'text']) }}
        placeholder="{{ ucfirst($label) }}"
        value="{{ old($id) ? (!isset($name) ? old($id) : old($id)[$index]) : (isset($value) ? $value : '') }}">
</div>
