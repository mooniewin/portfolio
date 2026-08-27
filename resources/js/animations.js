const shape = document.getElementById('interactive-shape');

shape.addEventListener('mousemove', (e) => {
  const rect = shape.getBoundingClientRect();
  
  // calcular la posición del cursor en porcentaje dentro del elemento
  const x = ((e.clientX - rect.left) / rect.width) * 100;
  const y = ((e.clientY - rect.top) / rect.height) * 100;
  
  // actualizar las variables CSS
  shape.style.setProperty('--x', `${x}%`);
  shape.style.setProperty('--y', `${y}%`);
});