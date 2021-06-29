<x-app-layout>
  <livewire:community-ideas />
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
