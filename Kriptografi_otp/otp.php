<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Enkripsi XOR</title>
</head>
<body>

    <h2>Form Enkripsi XOR</h2>
    <form action="" method="post">
        <label for="text">Plaintext:</label>
        <input type="text" id="text" name="text" required>
        <br>
        <label for="key">Kunci:</label>
        <input type="text" id="key" name="key" required>
        <br>
        <button type="submit">Enkripsi</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $text = $_POST["text"];
    $key = $_POST["key"];

    // Fungsi enkripsi XOR
    function konversiascii($input) {
        $ascii_values = [];
        for ($i = 0; $i < strlen($input); $i++) {
            $ascii_value = ord($input[$i]);
            $ascii_values[] = $ascii_value;
        }
        return $ascii_values;
    }

    function konversibiner($input) {
        $binary_values = [];
        for ($i = 0; $i < count($input); $i++) {
            $binary_value = decbin($input[$i]);
            $binary_values[] = $binary_value;
        }
        return $binary_values;
    }

    function xor_biner($textb, $keyb) {
        $xor_values = [];
        for ($i = 0; $i < count($textb); $i++) {
            $result = bindec($textb[$i]) ^ bindec($keyb[$i]);
            $result_biner = str_pad(decbin($result), 7, '0', STR_PAD_LEFT);
            $xor_values[] = $result_biner;
        }
        return $xor_values;
    }

    function biner_ke_desimal($biner) {
        return bindec($biner);
    }

    function kodeascii($ascii_code) {
        return chr($ascii_code);
    }

    // Proses enkripsi XOR
    $asci = konversiascii($text);
    $key_A = konversiascii($key);
    $textb = konversibiner($asci);
    $keyb = konversibiner($key_A);
    $result = xor_biner($textb, $keyb);

    $decimal_results = array_map('biner_ke_desimal', $result);
    $ascii_results = array_map('kodeascii', $decimal_results);

    // Menampilkan hasil enkripsi
    echo "<h2>Hasil Enkripsi XOR:</h2>";
    echo "<p>Plaintext: $text</p>";
    echo "<p>Kunci: $key</p>";
    echo "<p>Hasil Enkripsi: " . implode('', $ascii_results) . "</p>";
} else {
    // Jika halaman diakses tanpa menggunakan metode POST
    echo "Akses tidak sah!";
}
?>

</body>
</html>