<x-app-layout>
    <div>
        <a href={{ $backUrl }} class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
            <span class="ml-2">All ideas (Or back to previous )</span>
        </a>
    </div>

    <livewire:idea-single :idea="$idea" :votesCount="$votesCount" />

    @can('update', $idea)
        <livewire:edit-idea :idea="$idea"/>
    @endcan
    
    @can('delete', $idea)
        <livewire:delete-idea :idea="$idea"/>
    @endcan
    
    <livewire:manage-spam :idea="$idea" />

    <livewire:mark-as-not-spam :idea="$idea" />
        
    <livewire:idea-comments :idea="$idea"/>
        
    <script>
        const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast'
                },
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true
            })
        window.addEventListener('swal', event =>{
             Toast.fire(event.detail);
        });
        
    </script>
</x-app-layout>