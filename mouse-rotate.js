document.addEventListener('DOMContentLoaded', () => {
  const heading = document.querySelector('h1');
  if (!heading) return;
  const rotate = (event) => {
    const xPercent = event.clientX / window.innerWidth - 0.5;
    const yPercent = event.clientY / window.innerHeight - 0.5;
    const rotateY = xPercent * 30; // left/right
    const rotateX = -yPercent * 30; // up/down
    heading.style.transform = `perspective(500px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  };
  document.addEventListener('mousemove', rotate);
});

