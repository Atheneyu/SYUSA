document.getElementById('preferredMethod').addEventListener('change', function() {
    var selectedMethod = this.value;
    var usernameOrNumber = document.getElementById('usernameOrNumber');
  
    if (selectedMethod === 'other' || selectedMethod === 'phone') {
      usernameOrNumber.style.display = 'block';
    } else {
      usernameOrNumber.style.display = 'none';
    }
  });
  