var ctx = document.getElementById('myCanvas').getContext('2d');
var img = new Image();
img.onload = function () {
    ctx.drawImage(img,0,10,10);
};
img.src = './image/logo.png';