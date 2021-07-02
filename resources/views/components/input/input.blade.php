<div>
    <input {{ $attributes }} class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Idea" required>
    @if ($error)
    <p class="text-red text-xs mt-1">{{ $error }}</p>
    @endif
        
    
</div>