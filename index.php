<?php include("./templates/header.php");?>
<div class="container mt-4">
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a href="#longitud" class="nav-link active" data-bs-toggle="tab">Longitud</a>
        </li>
        <li class="nav-item">
            <a href="#masa" class="nav-link" data-bs-toggle="tab">Masa/Peso</a>
        </li>
        <li class="nav-item">
            <a href="#volumen" class="nav-link" data-bs-toggle="tab">Volumen</a>
        </li>
        <li class="nav-item">
            <a href="#temperatura" class="nav-link" data-bs-toggle="tab">Temperatura</a>
        </li>
        <li class="nav-item">
            <a href="#energia" class="nav-link" data-bs-toggle="tab">Energía</a>
        </li>
        <li class="nav-item">
            <a href="#area" class="nav-link" data-bs-toggle="tab">Área</a>
        </li>
        <li class="nav-item">
            <a href="#velocidad" class="nav-link" data-bs-toggle="tab">Velocidad</a>
        </li>
        <li class="nav-item">
            <a href="#datos" class="nav-link" data-bs-toggle="tab">Datos</a>
        </li>
        <li class="nav-item">
            <a href="#tiempo" class="nav-link" data-bs-toggle="tab">Tiempo</a>
        </li>
    </ul>

    <button class="btn btn-danger mt-3" onclick="clearInputs()">Limpiar Inputs</button>


    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="longitud">
            <div class="row">
                <div class="col-6">Kilómetro (km) <input type="number" class="form-control" id="input-km"
                        placeholder="Ingresa tu dato" oninput="convertLength()"></div>
                <div class="col-6">Metro (m) <input type="number" class="form-control" id="input-m" value="0"
                        oninput="convertLength()"></div>
                <div class="col-6">Milla (mi) <input type="number" class="form-control" id="input-mi" value="0"
                        oninput="convertLength()"></div>
                <div class="col-6">Centímetro (cm) <input type="number" class="form-control" id="input-cm" value="0"
                        oninput="convertLength()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="masa">
            <div class="row">
                <div class="col-6">Tonelada (t) <input type="number" class="form-control" id="input-t" value="0"
                        oninput="convertMass()"></div>
                <div class="col-6">Kilogramo (kg) <input type="number" class="form-control" id="input-kg" value="0"
                        oninput="convertMass()"></div>
                <div class="col-6">Libra (lb) <input type="number" class="form-control" id="input-lb" value="0"
                        oninput="convertMass()"></div>
                <div class="col-6">Onza (oz) <input type="number" class="form-control" id="input-oz" value="0"
                        oninput="convertMass()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="volumen">
            <div class="row">
                <div class="col-6">Metro cúbico (m³) <input type="number" class="form-control" id="input-m3" value="0"
                        oninput="convertVolume()"></div>
                <div class="col-6">Litro (L) <input type="number" class="form-control" id="input-L" value="0"
                        oninput="convertVolume()"></div>
                <div class="col-6">Galón (gal) <input type="number" class="form-control" id="input-gal" value="0"
                        oninput="convertVolume()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="temperatura">
            <div class="row">
                <div class="col-6">Celsius (°C) <input type="number" class="form-control" id="input-celsius" value="0"
                        oninput="convertTemperature()"></div>
                <div class="col-6">Fahrenheit (°F) <input type="number" class="form-control" id="input-fahrenheit"
                        value="0" oninput="convertTemperature()"></div>
                <div class="col-6">Kelvin (K) <input type="number" class="form-control" id="input-kelvin" value="0"
                        oninput="convertTemperature()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="energia">
            <div class="row">
                <div class="col-6">Kilovatio-hora (kWh) <input type="number" class="form-control" id="input-kWh"
                        value="0" oninput="convertEnergy()"></div>
                <div class="col-6">Joule (J) <input type="number" class="form-control" id="input-J" value="0"
                        oninput="convertEnergy()"></div>
                <div class="col-6">BTU <input type="number" class="form-control" id="input-BTU" value="0"
                        oninput="convertEnergy()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="area">
            <div class="row">
                <div class="col-6">Metro cuadrado (m²) <input type="number" class="form-control" id="input-m2" value="0"
                        oninput="convertArea()"></div>
                <div class="col-6">Kilómetro cuadrado (km²) <input type="number" class="form-control" id="input-km2"
                        value="0" oninput="convertArea()"></div>
                <div class="col-6">Hectárea (ha) <input type="number" class="form-control" id="input-ha" value="0"
                        oninput="convertArea()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="velocidad">
            <div class="row">
                <div class="col-6">Kilómetro por hora (km/h) <input type="number" class="form-control" id="input-kmph"
                        value="0" oninput="convertSpeed()"></div>
                <div class="col-6">Metro por segundo (m/s) <input type="number" class="form-control" id="input-mps"
                        value="0" oninput="convertSpeed()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="datos">
            <div class="row">
                <div class="col-6">Kilobyte (KB) <input type="number" class="form-control" id="input-KB" value="0"
                        oninput="convertData()"></div>
                <div class="col-6">Megabyte (MB) <input type="number" class="form-control" id="input-MB" value="0"
                        oninput="convertData()"></div>
                <div class="col-6">Gigabyte (GB) <input type="number" class="form-control" id="input-GB" value="0"
                        oninput="convertData()"></div>
                <div class="col-6">Terabyte (TB) <input type="number" class="form-control" id="input-TB" value="0"
                        oninput="convertData()"></div>
            </div>
        </div>

        <div class="tab-pane fade" id="tiempo">
            <div class="row">
                <div class="col-6">Segundo (s) <input type="number" class="form-control" id="input-s" value="0"
                        oninput="convertTime()"></div>
                <div class="col-6">Minuto (min) <input type="number" class="form-control" id="input-min" value="0"
                        oninput="convertData()">
                </div>
                <div class="col-6">Hora (h) <input type="number" class="form-control" id="input-h"
                        value="0">oninput="convertData()"</div>
                <div class="col-6">Día <input type="number" class="form-control" id="input-dia" value="0"
                        oninput="convertData()"></div>
            </div>
        </div>
    </div>
</div>
<p></p>
<?php include("./templates/footer.php");?>