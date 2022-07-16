setInterval(() => {
    a = new Date(); 
    hr = a.getHours();
    min = a.getMinutes();
    sec = a.getSeconds();
    hr_rotation = 30 * hr + min / 2; 
    min_rotation = 6 * min;
    sec_rotation = 6 * sec;
    
    hora.style.transform = `rotate(${hr_rotation}deg)`;
    minuto.style.transform = `rotate(${min_rotation}deg)`;
    segundo.style.transform = `rotate(${sec_rotation}deg)`;
}, 1000);