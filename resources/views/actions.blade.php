<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Actions
        </h2>
    </x-slot>

    


    @push('js')
        

        <script>
            function notificacion(){
                
                window.$wireui.notify({
                    'title': 'Notificación',
                    'description': 'Esta es una notificación de prueba',
                    'icon': 'info'
                })

            }

            function confirmarNotificacion(){
                window.$wireui.confirmNotification({
                    'title': 'Notificación',
                    'description': 'Esta es una notificación de prueba',
                    'icon': 'question',
                    'accept': {
                        'label': 'Aceptar',
                        'execute': () => {
                            
                            alert('Ejecutando acción')

                        }
                    },
                    'reject': {
                        'label': 'Cancelar',
                    },
                })
            }
        </script>

    @endpush

</x-app-layout>