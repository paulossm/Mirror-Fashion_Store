// function to valid the form for searching
function validaBusca() {
    if (document.querySelector('#q').value == '') {
        document.querySelector('#form-search').style.background = 'red';
        alert('Não podia ter deixado em branco a busca!');
        return false;
    }
}

// function to change features banners
var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var altes = ["Big City Nights", "Sunny Days"];
var bannerAtual = 0;
function changeBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.features img').src = banners[bannerAtual];
    document.querySelector('.features img').alt = altes[bannerAtual];
}
var timer = setInterval(changeBanner, 5000);

// control the changing of the banners
function pauseBanner() {
    var control = document.querySelector('#control');
    if(control.className == 'pause'){
        clearInterval(timer);
        control.className = "play";
    }
    else{
        timer = setInterval(changeBanner, 5000);
        control.className = "pause";
}
    return false;
}