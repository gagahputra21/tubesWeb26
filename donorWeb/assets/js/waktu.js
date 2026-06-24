function tampilWaktu(){

    const sekarang = new Date();

    let jam =
        String(sekarang.getHours())
        .padStart(2,'0');

    let menit =
        String(sekarang.getMinutes())
        .padStart(2,'0');

    let detik =
        String(sekarang.getSeconds())
        .padStart(2,'0');

    const waktu =
        jam + ":" +
        menit + ":" +
        detik;

    const target =
        document.getElementById("waktu");

    if(target){
        target.innerHTML = waktu;
    }

}

setInterval(
    tampilWaktu,
    1000
);