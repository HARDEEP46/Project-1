function calculateTotalPrice() {
  const carSelect = document.getElementById("carSelect");
  const durationSelect = document.getElementById("durationSelect");
  const priceDisplay = document.getElementById("priceDisplay");

  const carPrice = parseFloat(carSelect.value);
  const duration = parseInt(durationSelect.value);
  const totalPrice = carPrice * duration;

  priceDisplay.textContent = "$" + totalPrice;
}

