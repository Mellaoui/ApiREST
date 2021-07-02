@props(['initialValue' => ''])

<div 
    wire:ignore 
    x-data
    {{ $attributes }} 
    @trix-blur="$dispatch('change',$event.target.value)"
class="form-group">

    <input id="x" name="description" type="hidden">
    <trix-editor input="x" value="{{ $initialValue }}"  name="idea" id="idea" cols="30" rows="4" class="trix-content w-full bg-gray-100 rounded-xl border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Describe your idea" required></trix-editor>
    @error('description')
        <p class="text-red text-xs mt-1">{{ $message }}</p>
    @enderror
</div>