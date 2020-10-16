<label>{{ $label }}</label>
<input wire:model="{{$label}}" @isset($required) required="required" @endisset @isset($readonly) readonly="readonly" @endisset type="text" name="{{ isset($name) ? $name : $id }}" id="{{ $id }}" class="input w-full rounded-full border mt-2" placeholder="{{ $label }}" value="{{ old($id) ? (!isset($name) ? old($id) : old($id)[$index]) : (isset($value) ? $value : '') }}">