<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Discover Parfum</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    form {
        text-align: center;
    }
    label {
        font-weight: bold;
        margin-right: 10px;
    }
    select {
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
    #hasilParfum {
        margin-top: 30px;
    }
    #hasilParfum p {
        text-align: center;
        font-size: 18px;
        color: #333;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Discover Parfum</h1>

    <!-- Form untuk input karakteristik pengguna -->
    <form id="parfumForm">
        <label for="aroma">Aroma:</label>
        <select id="aroma">
            <option value="floral">Floral</option>
            <option value="fruity">Fruity</option>
            <option value="woody">Woody</option>
            <!-- Tambahkan lebih banyak opsi aroma jika diperlukan -->
        </select><br><br>

        <label for="intensitas">Intensitas:</label>
        <select id="intensitas">
            <option value="rendah">Rendah</option>
            <option value="sedang">Sedang</option>
            <option value="tinggi">Tinggi</option>
            <!-- Tambahkan lebih banyak opsi intensitas jika diperlukan -->
        </select><br><br>

        <label for="ketahanan">Ketahanan:</label>
        <select id="ketahanan">
            <option value="6 jam">6 Jam</option>
            <option value="8 jam">8 Jam</option>
            <option value="12 jam">12 Jam</option>
            <!-- Tambahkan lebih banyak opsi ketahanan jika diperlukan -->
        </select><br><br>

        <button type="button" onclick="temukanParfum()">Temukan Parfum</button>
    </form>

    <!-- Container untuk menampilkan hasil pencarian -->
    <div id="hasilParfum"></div>
</div>

<script>
    // Data parfum yang tersedia
    const databaseParfum = [
        { nama: "Parfum A", aroma: "floral", intensitas: "sedang", ketahanan: "8 jam" },
        { nama: "Parfum B", aroma: "fruity", intensitas: "tinggi", ketahanan: "6 jam" },
        { nama: "Parfum C", aroma: "woody", intensitas: "rendah", ketahanan: "12 jam" },
        // Tambahkan lebih banyak data parfum jika diperlukan
    ];

    // Fungsi untuk mencari parfum yang sesuai dengan karakteristik pengguna
    function temukanParfum() {
        // Ambil nilai dari input form
        const aroma = document.getElementById("aroma").value;
        const intensitas = document.getElementById("intensitas").value;
        const ketahanan = document.getElementById("ketahanan").value;

        // Temukan parfum yang sesuai dengan karakteristik pengguna
        const hasilPencarian = databaseParfum.filter(parfum => (
            parfum.aroma === aroma &&
            parfum.intensitas === intensitas &&
            parfum.ketahanan === ketahanan
        ));

        // Tampilkan hasil pencarian
        if (hasilPencarian.length > 0) {
            let hasilHTML = "<h2>Hasil Pencarian:</h2>";
            hasilPencarian.forEach(parfum => {
                // Hitung presentase parfum
                const presentase = ((1 / databaseParfum.length) * 100).toFixed(2);
                hasilHTML += `<p>${parfum.nama} (${presentase}%)</p>`;
            });
            document.getElementById("hasilParfum").innerHTML = hasilHTML;
        } else {
            document.getElementById("hasilParfum").innerHTML = "<p>Tidak ada parfum yang sesuai dengan karakteristik yang Anda pilih.</p>";
        }
    }
</script>

</body>
</html>
