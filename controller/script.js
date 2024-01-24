function parsearEcuacion(ecuacion) {
  // Agregar coeficientes implícitos de 1
  ecuacion = ecuacion.replace(/\bx\b/g, '1x').replace(/\by\b/g, '1y');
  // Eliminar espacios y separar los términos
  let terminos = ecuacion.replace(/\s+/g, '').match(/([-+]?[0-9]*\.?[0-9]*)x([-+]?[0-9]*\.?[0-9]*)y=([-+]?[0-9]*\.?[0-9]+)/);
  if (!terminos || terminos.length !== 4) {
      return null;
  }
  return {
      a: parseFloat(terminos[1]) || 1,
      b: parseFloat(terminos[2]) || 1,
      c: parseFloat(terminos[3])
  };
}

function calcularPuntoInterseccion(terminos1, terminos2) {
  // Calcular el determinante del sistema
  let det = terminos1.a * terminos2.b - terminos1.b * terminos2.a;
  if (det === 0) {
      return null; // No hay una solución única, las líneas son paralelas o coincidentes
  }
  
  // Calcular el determinante para x
  let detX = terminos1.c * terminos2.b - terminos1.b * terminos2.c;
  // Calcular el determinante para y
  let detY = terminos1.a * terminos2.c - terminos1.c * terminos2.a;
  
  // Calcular las soluciones
  let x = detX / det;
  let y = detY / det;
  
  return { x: x, y: y };
}

function mostrarResultadoInterseccion(punto) {
  let resultado = document.getElementById('resultado-interseccion');
  if (punto) {
      resultado.innerHTML = `
          La intersección de las rectas es en el punto (${punto.x}, ${punto.y})<br>
          <b>Por lo tanto:</b> x = ${punto.x}; y = ${punto.y}
      `;
  } else {
      resultado.textContent = "Las rectas no se intersectan o son coincidentes.";
  }
}

function generarPuntos(terminos) {
  let puntos = [];
  for (let x = -2; x <= 2; x++) {
      let y = Math.round((terminos.c - terminos.a * x) / terminos.b);
      puntos.push({x, y});
  }
  return puntos;
}

function mostrarTablaValores(terminos, idTabla) {
  let tabla = `<table class="table table-bordered"><tr><th>x</th><th>y</th></tr>`;
  for (let x = -2; x <= 2; x++) {
      let y = (terminos.c - terminos.a * x) / terminos.b;
      tabla += `<tr><td>${x}</td><td>${y}</td></tr>`;
  }
  tabla += '</table>';
  document.getElementById(idTabla).innerHTML = tabla;
}

function dibujarRectasConPlotly(terminos1, terminos2) {
  // Definir un rango más amplio para 'x' en función del tamaño del gráfico actual
  let xRange = calcularRangoDeGrafico(terminos1, terminos2);
  let datos = [
      // Datos para la primera ecuación
      {
          x: [xRange.min, xRange.max],
          y: [xRange.min, xRange.max].map(x => (terminos1.c - terminos1.a * x) / terminos1.b),
          type: 'scatter',
          mode: 'lines',
          name: 'Primera Ecuación'
      },
      // Datos para la segunda ecuación
      {
          x: [xRange.min, xRange.max],
          y: [xRange.min, xRange.max].map(x => (terminos2.c - terminos2.a * x) / terminos2.b),
          type: 'scatter',
          mode: 'lines',
          name: 'Segunda Ecuación'
      },
  ];
  return datos;
}

function calcularRangoDeGrafico(terminos1, terminos2) {
  let min = -30;
  let max = 30;
  return { min, max };
}

function graficar() {
  // Obtener las ecuaciones de los campos de texto
  let ecuacion1 = document.getElementById("ecuacion1").value;
  let ecuacion2 = document.getElementById("ecuacion2").value;
  
  // Parsear las ecuaciones
  let terminos1 = parsearEcuacion(ecuacion1);
  let terminos2 = parsearEcuacion(ecuacion2);

  if (!terminos1 || !terminos2) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Por favor, ingrese ecuaciones válidas en el formato 'ax+by=c'. Ejemplo: x+y=2"
      });
      return;
  }

  // Obtener los datos de las rectas
  let datosRectas = dibujarRectasConPlotly(terminos1, terminos2);

  // Generar puntos para las tablas de valores
  let puntos1 = generarPuntos(terminos1);
  let puntos2 = generarPuntos(terminos2);

  // Preparar los datos para la primera y segunda ecuación
  let datos = datosRectas.concat([
      {
          x: puntos1.map(p => p.x),
          y: puntos1.map(p => p.y),
          mode: 'markers',
          type: 'scatter',
          name: 'Puntos Primera Ecuación'
      },
      {
          x: puntos2.map(p => p.x),
          y: puntos2.map(p => p.y),
          mode: 'markers',
          type: 'scatter',
          name: 'Puntos Segunda Ecuación',
          marker: {
              color: 'rgb(108, 52, 131)',
              size: 6
          }
      }
  ]);

  // Calcular el punto de intersección y lo muestra
  let puntoInterseccion = calcularPuntoInterseccion(terminos1, terminos2);
  mostrarResultadoInterseccion(puntoInterseccion);

  if (puntoInterseccion) {
      // Agregar el punto de intersección al array de datos
      datos.push({
          x: [puntoInterseccion.x],
          y: [puntoInterseccion.y],
          mode: 'markers',
          type: 'scatter',
          name: 'Intersección',
          marker: {
              color: 'rgb(255, 65, 54)',
              size: 10
          }
      });
  }

  // Configuración del layout del gráfico
  let layout = {
      title: 'Gráfico de Ecuaciones Lineales',
      xaxis: {
          title: 'Eje X',
      },
      yaxis: {
          title: 'Eje Y'
      }
  };

  // Dibujar la gráfica con Plotly
  Plotly.newPlot('grafico', datos, layout);

  // Mostrar las tablas de valores
  mostrarTablaValores(terminos1, 'tabla1');
  mostrarTablaValores(terminos2, 'tabla2');
}

function reiniciar() {
  // Limpiar la gráfica
  Plotly.purge('grafico');
  // Limpiar las tablas de valores
  document.getElementById('tabla1').innerHTML = '';
  document.getElementById('tabla2').innerHTML = '';
  // Limpiar los campos de texto de las ecuaciones
  document.getElementById('ecuacion1').value = '';
  document.getElementById('ecuacion2').value = '';
  // Limpiar el texto del resultado de la intersección
  document.getElementById('resultado-interseccion').innerHTML = '';
}
