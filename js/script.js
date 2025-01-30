
const etkinlikTarihi = new Date("2025-02-15T18:00:00"); 

function geriSayimGuncelle() {
    const simdi = new Date(); 
    const zamanFarki = etkinlikTarihi - simdi; 

    const sayacElementi = document.getElementById("timer");

    if (zamanFarki > 0) {
 
        const gunler = Math.floor(zamanFarki / (1000 * 60 * 60 * 24));
        const saatler = Math.floor((zamanFarki % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const dakikalar = Math.floor((zamanFarki % (1000 * 60 * 60)) / (1000 * 60));
        const saniyeler = Math.floor((zamanFarki % (1000 * 60)) / 1000);

        sayacElementi.textContent = `${gunler} Gün ${saatler} Saat ${dakikalar} Dakika ${saniyeler} Saniye`;
    } 
}

setInterval(geriSayimGuncelle, 1000);
