function changeFlavour(url,secondUrl,color){
    document.querySelector('.logo').src = url;
    document.querySelector('.cannette').src = secondUrl;
    const bodyBg = document.querySelector('.bg-color-change');
    bodyBg.style.background = color;
}