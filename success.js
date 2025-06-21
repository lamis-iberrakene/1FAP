// success.js
window.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById('messageContainer');
  const message = document.createElement('h1');
  message.className = 'success-message';
  message.innerText = '🎉 tache réussie ! 🎉';
  container.appendChild(message);
});
