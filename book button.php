<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Twinkling Book Now Button</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #111;
  color: #fff;
}

/* Main book now button */
#book-now {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
  background: linear-gradient(135deg, #ff0057, #ff7e00);
  color: #fff;
  border: none;
  border-radius: 50px;
  padding: 15px 25px;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 0 15px rgba(255, 0, 87, 0.6);
  animation: twinkle 1s infinite alternate;
  display: flex;
  align-items: center;
  gap: 10px;
}

@keyframes twinkle {
  from { box-shadow: 0 0 15px rgba(255, 0, 87, 0.6); }
  to { box-shadow: 0 0 25px rgba(255, 126, 0, 0.8); }
}

#options-container {
  position: fixed;
  bottom: 80px;
  right: 20px;
  z-index: 9998;
  display: none;
  flex-direction: column;
  gap: 10px;
}

.option-button {
  background: linear-gradient(135deg, #1a1a1a, #333);
  border: none;
  border-radius: 30px;
  padding: 10px 20px;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.3s ease;
}

.option-button i {
  font-size: 16px;
}

.option-button:hover {
  background: linear-gradient(135deg, #ff0057, #ff7e00);
  transform: scale(1.05);
}

.show-options .option-button {
  opacity: 1;
  transform: translateY(0);
}

</style>
</head>
<body>

<!-- Main Book Now Button -->
<button id="book-now">
  <i class="fas fa-calendar-plus"></i> Book Now
</button>

<!-- Hidden Options -->
<div id="options-container">
  <button class="option-button">
    <i class="fas fa-music"></i> Book Event
  </button>
  <button class="option-button">
    <i class="fas fa-user"></i> Book Artist
  </button>
  <button class="option-button">
    <i class="fas fa-headphones"></i> Book Studio
  </button>
</div>

<script>
const bookNow = document.getElementById('book-now');
const optionsContainer = document.getElementById('options-container');

bookNow.addEventListener('click', () => {
  optionsContainer.classList.toggle('show-options');
  optionsContainer.style.display = optionsContainer.classList.contains('show-options') ? 'flex' : 'none';
});
</script>

</body>
</html>
