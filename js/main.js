function convertir() {
  const valor = parseFloat(document.getElementById("valor").value);
  const conversion = document.getElementById("conversion").value;
  let resultado;

  // Validación básica
  if (isNaN(valor)) {
    alert("Por favor, ingrese un número válido.");
    return;
  }

  // Lógica de conversión según la opción seleccionada
  switch (conversion) {
    case "metros_kilometros":
      resultado = valor / 1000;
      break;
    case "kilometros_metros":
      resultado = valor * 1000;
      break;
    case "celsius_fahrenheit":
      resultado = (valor * 9) / 5 + 32;
      break;
    case "fahrenheit_celsius":
      resultado = ((valor - 32) * 5) / 9;
      break;
    case "kilogramos_libras":
      resultado = valor * 2.20462;
      break;
    case "libras_kilogramos":
      resultado = valor / 2.20462;
      break;
    case "metros_cuadrados_centimetros_cuadrados":
      resultado = valor * 10000;
      break;
    case "centimetros_cuadrados_metros_cuadrados":
      resultado = valor / 10000;
      break;
    case "litros_mililitros":
      resultado = valor * 1000;
      break;
    case "mililitros_litros":
      resultado = valor / 1000;
      break;
    case "metros_cubicos_litros":
      resultado = valor * 1000;
      break;
    case "litros_metros_cubicos":
      resultado = valor / 1000;
      break;

    default:
      resultado = "Conversión no válida";
  }

  document.getElementById("resultado").textContent = resultado;
}
