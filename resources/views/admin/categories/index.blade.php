<x-admin-layout>
    
    <div class="container py-12">
        @livewire('admin.create-category')
    </div>

    @push('script')
        <script>
            Livewire.on('deleteCategory', categorySlug => {
            
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "¡No podras revertir el proceso!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, deseo borrar el categoria!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('admin.create-category', 'delete', categorySlug)
                        Swal.fire(
                            '¡Borrado!',
                            '¡Tu categoria ha sido eliminado!',
                            'Completado'
                        )
                    }
                })
            });
        </script>
    @endpush

</x-admin-layout>