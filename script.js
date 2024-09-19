// Display current date in the navbar
document.addEventListener('DOMContentLoaded', function() {
  const dateElement = document.getElementById('date');
  const today = new Date();
  const formattedDate = today.toLocaleDateString('en-US', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
  dateElement.textContent = formattedDate;
});
