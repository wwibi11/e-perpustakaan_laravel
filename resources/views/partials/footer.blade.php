<script>
  // Keyboard Shortcut Handler for Circulation Desk Operators
  document.addEventListener('keydown', function(event) {
    if (event.key === 'F1') {
      event.preventDefault();
      alert('Membuka dialog Sirkulasi Pinjam Baru (F1)');
    } else if (event.key === 'F2') {
      event.preventDefault();
      alert('Membuka modul Pengembalian Buku & Hitung Denda (F2)');
    } else if (event.key === 'F3') {
      event.preventDefault();
      const searchInput = document.querySelector('input[placeholder*="Scan Barcode"]');
      if (searchInput) searchInput.focus();
    }
  });
</script>
</body>
</html>