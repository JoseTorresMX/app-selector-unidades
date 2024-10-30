<?php include("./templates/header.php");?>
        <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Convertidor de Unidades</span>
            </div>
        </nav>
        </header>
        <main>
        <div class="container mt-5">
        <!-- Tabs -->
        <ul class="nav nav-tabs nav-justified" id="unitTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#length" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="length" aria-selected="true">Longitud</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#mass" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="mass" aria-selected="false">Masa/Peso</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#volume" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="volume" aria-selected="false">Volumen</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#temperature" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="temperature" aria-selected="false">Temperatura</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#energy" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="energy" aria-selected="false">Energía</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#area" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="area" aria-selected="false">Área</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#speed" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="speed" aria-selected="false">Velocidad</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#data" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="data" aria-selected="false">Datos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#time" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="time" aria-selected="false">Tiempo</a>
            </li>
        </ul>

        <!-- Tab content -->
        <div class="tab-content" id="unitTabsContent">
            <div class="tab-pane fade show active" id="length" role="tabpanel" aria-labelledby="length-tab">
                <h4>Unidades de Longitud</h4>
                <ul>
                    <li>Metro (m)</li>
                    <li>Centímetro (cm)</li>
                    <li>Milímetro (mm)</li>
                    <li>Kilómetro (km)</li>
                    <li>Pulgada (in)</li>
                    <li>Pie (ft)</li>
                    <li>Yarda (yd)</li>
                    <li>Milla (mi)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="mass" role="tabpanel" aria-labelledby="mass-tab">
                <h4>Unidades de Masa/Peso</h4>
                <ul>
                    <li>Kilogramo (kg)</li>
                    <li>Gramo (g)</li>
                    <li>Miligramo (mg)</li>
                    <li>Tonelada métrica (t)</li>
                    <li>Libra (lb)</li>
                    <li>Onza (oz)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="volume" role="tabpanel" aria-labelledby="volume-tab">
                <h4>Unidades de Volumen</h4>
                <ul>
                    <li>Litro (L)</li>
                    <li>Mililitro (mL)</li>
                    <li>Centímetro cúbico (cm³)</li>
                    <li>Metro cúbico (m³)</li>
                    <li>Galón (gal)</li>
                    <li>Onza líquida (oz)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="temperature" role="tabpanel" aria-labelledby="temperature-tab">
                <h4>Unidades de Temperatura</h4>
                <ul>
                    <li>Celsius (°C)</li>
                    <li>Fahrenheit (°F)</li>
                    <li>Kelvin (K)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="energy" role="tabpanel" aria-labelledby="energy-tab">
                <h4>Unidades de Energía</h4>
                <ul>
                    <li>Julio (J)</li>
                    <li>Caloría (cal)</li>
                    <li>Kilovatio-hora (kWh)</li>
                    <li>BTU (Unidad Térmica Británica)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="area" role="tabpanel" aria-labelledby="area-tab">
                <h4>Unidades de Área</h4>
                <ul>
                    <li>Metro cuadrado (m²)</li>
                    <li>Centímetro cuadrado (cm²)</li>
                    <li>Hectárea (ha)</li>
                    <li>Kilómetro cuadrado (km²)</li>
                    <li>Acres</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="speed" role="tabpanel" aria-labelledby="speed-tab">
                <h4>Unidades de Velocidad</h4>
                <ul>
                    <li>Metro por segundo (m/s)</li>
                    <li>Kilómetro por hora (km/h)</li>
                    <li>Millas por hora (mph)</li>
                    <li>Nudos (kn)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="data" role="tabpanel" aria-labelledby="data-tab">
                <h4>Unidades de Datos</h4>
                <ul>
                    <li>Bit</li>
                    <li>Byte</li>
                    <li>Kilobyte (KB)</li>
                    <li>Megabyte (MB)</li>
                    <li>Gigabyte (GB)</li>
                    <li>Terabyte (TB)</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="time" role="tabpanel" aria-labelledby="time-tab">
                <h4>Unidades de Tiempo</h4>
                <ul>
                    <li>Segundo (s)</li>
                    <li>Minuto (min)</li>
                    <li>Hora (h)</li>
                    <li>Día</li>
                    <li>Año</li>
                </ul>
            </div>
        </div>
    </div>

        </main>
<?php include("./templates/footer.php");