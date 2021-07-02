<div>
    <form wire:submit.prevent="createIdea" class="space-y-4 px-4 py-6">
        <x-input.input  wire:model.defer="title" type="text" :error="$errors->first('title')"/>
        <x-input.select  :categories="$categories"/>
        @error('category')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
        
        <x-input.rich-text-editor wire:model.lazy="description"  input="description"  :initial-value="$description"/>
        <div class="flex items-center justify-between space-x-3">
                    <label class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border cursor-pointer border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                        <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="ml-1">Attach</span>
                        <input wire:model="image" type='file' class="hidden" />
                    </label>
                @error('image')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
            <button
                id="submit"
                type="submit"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
            >
                <span class="ml-1">Submit</span>
            </button>
        </div>
        @if (session('success_message'))
        <div class="bg-green  rounded-3xl text-center">
                <div
                    x-data="{ isVisible: true }"
                    x-init="
                        setTimeout(() => {
                            isVisible = false
                        }, 5000)
                    "
                    x-show.transition.duration.1000ms="isVisible"
                    class="text-white mt-4"
                >
                    {{ session('success_message') }}
                </div>
        </div>
        @endif
    </form>
</div>