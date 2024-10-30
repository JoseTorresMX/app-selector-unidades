// Funciones de conversión
function convertLength() {
    const km = parseFloat(document.getElementById('input-km').value) || 0;
    document.getElementById('input-m').value = km * 1000; // Convertir a metros
    document.getElementById('input-mi').value = km * 0.621371; // Convertir a millas
    document.getElementById('input-cm').value = km * 100000; // Convertir a centímetros
}

function convertMass() {
    const t = parseFloat(document.getElementById('input-t').value) || 0;
    document.getElementById('input-kg').value = t * 1000; // Convertir a kilogramos
    document.getElementById('input-lb').value = t * 2204.62; // Convertir a libras
    document.getElementById('input-oz').value = t * 35273.96; // Convertir a onzas
}

function convertVolume() {
    const m3 = parseFloat(document.getElementById('input-m3').value) || 0;
    document.getElementById('input-L').value = m3 * 1000; // Convertir a litros
    document.getElementById('input-gal').value = m3 * 264.172; // Convertir a galones
}

function convertTemperature() {
    const celsius = parseFloat(document.getElementById('input-celsius').value) || 0;
    document.getElementById('input-fahrenheit').value = (celsius * 9/5) + 32; // Convertir a Fahrenheit
    document.getElementById('input-kelvin').value = celsius + 273.15; // Convertir a Kelvin
}

function convertEnergy() {
    const kWh = parseFloat(document.getElementById('input-kWh').value) || 0;
    document.getElementById('input-J').value = kWh * 3600000; // Convertir a Joules
    document.getElementById('input-BTU').value = kWh * 3412.14; // Convertir a BTU
}

function convertArea() {
    const m2 = parseFloat(document.getElementById('input-m2').value) || 0;
    document.getElementById('input-km2').value = m2 / 1000000; // Convertir a kilómetros cuadrados
    document.getElementById('input-ha').value = m2 / 10000; // Convertir a hectáreas
}

function convertSpeed() {
    const kmph = parseFloat(document.getElementById('input-kmph').value) || 0;
    document.getElementById('input-mps').value = kmph / 3.6; // Convertir a metros por segundo
}

function convertData() {
    const KB = parseFloat(document.getElementById('input-KB').value) || 0;
    document.getElementById('input-MB').value = KB / 1024; // Convertir a Megabytes
    document.getElementById('input-GB').value = KB / (1024 * 1024); // Convertir a Gigabytes
    document.getElementById('input-TB').value = KB / (1024 * 1024 * 1024); // Convertir a Terabytes
}

function convertTime() {
    const seconds = parseFloat(document.getElementById('input-s').value) || 0;
    document.getElementById('input-min').value = seconds / 60; // Convertir a minutos
    document.getElementById('input-h').value = seconds / 3600; // Convertir a horas
    document.getElementById('input-dia').value = seconds / 86400; // Convertir a días
}

function clearInputs() {
    // Seleccionar todos los inputs dentro de los tabs
    const inputs = document.querySelectorAll('input.input-sin-borde');
    inputs.forEach(input => {
        input.value = ''; // Limpiar el valor de cada input
    });
}