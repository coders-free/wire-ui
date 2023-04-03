<div>
    

    <div class="mb-4">
        <x-inputs.maskable 
            label="Número de telefono"
            placeholder="Ingrese su número de telefono"
            mask="['(+##) ####-#####', '(+###) ####-#####']"
        />
    </div>

    <div class="mb-4">
        
        <x-inputs.currency 
            label="Moneda"
            icon="currency-dollar"
            />

    </div>

    <div class="mb-4">
        
        <x-inputs.currency 
            label="Moneda"
            prefix="S/."
            />

    </div>

    <div class="mb-4">
        <x-datetime-picker
            label="Fecha"
            without-time
            placeholder="Ingrese la fecha"
            :min="now()->subDays(7)->format('Y-m-d')"
            :max="now()->addDays(7)->format('Y-m-d')"
        />
    </div>


    <div class="mb-4">
        <x-time-picker 
            label="Hora"
            placeholder="Ingrese la hora"
            format="24"
            interval="30"
        />
    </div>

</div>
