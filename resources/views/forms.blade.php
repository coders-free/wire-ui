<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Formularios
        </h2>
    </x-slot>

    <x-container class="py-12">


        <form action="{{route('forms.store')}}" method="POST">

            @csrf

            <x-card title="Componentes de formulario">

                <x-slot name="action">

                    <x-button icon="plus" primary>
                        Agregar
                    </x-button>

                </x-slot>

                <x-errors class="mb-4" title="Titulo de prueba ({errors} errores)" />

                <div class="mb-4">
                    <x-input label="Nombre" 
                    name="name" 
                    placeholder="Ingresa un nombre"
                    hint="*Información relevante"
                    corner-hint="Ejm: Victor Arana"
                    icon="user"
                    right-icon="pencil" />
                </div>

                <div class="mb-4">
                    <x-input 
                        name="website"
                        label="Sitio web" class="pl-[4.3rem]"
                        placeholder="tu-sitio-web.com"
                        prefix="https://"/>
                </div>

                <div class="mb-4">
                    <x-input label="Correo electrónico"
                        placeholder="Tu correo"
                        suffix="@codersfree.com"
                        class="pr-40"/>
                </div>

                <div class="mb-4">
                    <x-input
                        class="pl-16"
                        placeholder="Contraseña"
                    >

                        <x-slot name="prepend">

                            <div class="absolute inset-y-0">
                                <x-button
                                    class="h-full"
                                    icon="lock-closed"
                                    primary
                                />
                            </div>

                        </x-slot>


                    </x-input>
                </div>

                <div class="mb-4">
                    <x-input
                        class="pr-16"
                        placeholder="Contraseña"
                    >

                        <x-slot name="append">

                            <div class="absolute inset-y-0 right-0">
                                <x-button
                                    class="h-full"
                                    icon="lock-closed"
                                    primary
                                />
                            </div>

                        </x-slot>


                    </x-input>
                </div>

                <div class="mb-4">

                    <x-inputs.password label="Contraseña" placeholder="Escriba una contraseña" name="password" />

                </div>


                <div class="mb-4">
                    <x-inputs.number label="Edad" />
                </div>

                <div class="mb-4">

                    <x-textarea label="Comentario" placeholder="Escriba su comentario" />

                </div>

                <div class="mb-4">


                    <x-native-select 
                        label="Pais"   
                        name="country" 
                        placeholder="Seleccione un país"
                    >

                        <option value="1">Perú</option>
                        <option value="2">Chile</option>
                        <option value="3">Argentina</option>
                        <option value="4">Bolivia</option>
                        <option value="5">Colombia</option>
                        <option value="6">Ecuador</option>
                        <option value="7">Paraguay</option>
                        <option value="8">Uruguay</option>
                        <option value="9">Venezuela</option>

                    </x-native-select>

                </div>

                <div class="mb-4">
                    
                    <x-select
                        name="users[]"
                        placeholder="Seleccione un usario"
                        label="Usuarios"
                        :async-data="route('api.users.index')"
                        option-label="name"
                        option-value="id"
                        multiselect
                        :template="[
                            'name' => 'user-option',
                            'config' => [
                                'src' => 'profile_photo_url',
                            ]
                        ]"
                    />

                </div>

                <div class="mb-4">
                    <x-color-picker 
                        label="Color" 
                        placeholder="Seleccione un color" 
                        :colors="[
                            '#FFF',
                            '#000',
                            '#14b8a6',
                            '#64748b',
                            '#ef4444',
                            '#a3e635',
                            '#38bdf8',
                            '#8b5cf6',
                            '#8b5cf6',
                            '#6366f1',
                        ]"
                    />
                </div>


                <div class="mb-4">

                    <x-toggle lg label="Estado" name="status" value="1" />

                </div>

                <div class="mb-4 flex space-x-4">

                    <x-checkbox lg label="Rol 1" id="rol1" value="1" name="roles[]" />
                    <x-checkbox lg label="Rol 2" id="rol2" value="2" name="roles[]" />
                    <x-checkbox lg label="Rol 3" id="rol3" value="3" name="roles[]" />
                    <x-checkbox lg label="Rol 4" id="rol4" value="4" name="roles[]" />

                </div>

                <div class="mb-4 flex space-x-4">    
                    <x-radio lg label="Persona 1" id="persona1" value="1" name="persona" />
                    <x-radio lg label="Persona 2" id="persona2" value="2" name="persona" />
                    <x-radio lg label="Persona 3" id="persona3" value="3" name="persona" />
                    <x-radio lg label="Persona 4" id="persona4" value="4" name="persona" />
                </div>

                <x-slot name="footer">

                    <x-button 
                        type="submit"
                        primary
                        label="Guardar"
                    />
                    

                </x-slot>

            </x-card>

        </form>

    </x-container>

</x-app-layout>