window.onload=function () {
        let banner=document.querySelector('.banner');
        let dian=document.querySelectorAll('.lunbo li');
        let bannerimg=document.querySelectorAll('.banner1 li');
        let right=document.querySelector('.right')
        let left=document.querySelector('.left')
        let falg=true;
        var index=0
        var t=setInterval(move,2000);
        function move(way='r') {
            if(falg){
                falg=false;
                if(way=='r'){
                    index++;
                    if(index>=bannerimg.length){
                        index=0;
                    }
                }if(way=='l'){
                    index--;
                    if(index<0){
                        index=bannerimg.length-1;
                    };
                };
                dian.forEach(function (value) {
                    value.classList.remove('actrve');
                    dian[index].classList.add('actrve');
                    bannerimg.forEach(function (obj) {
                        obj.classList.remove('actrve');
                    });
                });
                bannerimg[index].classList.add('actrve')
            }
                bannerimg.forEach(function(vale){
                    vale.addEventListener('transitionend',function () {
                        falg=true;
                    });
                });
        }
        banner.onmousemove=function () {
            clearInterval(t);
            left.style.display="block";
            right.style.display="block";
        };
        banner.onmouseout=function () {
            t=setInterval(move,2000);
            left.style.display="none";
            right.style.display="none";
        };
        dian.forEach(function (value,n){
            value.onclick=function () {
                dian.forEach(function (obg) {
                    obg.classList.remove('actrve');
                });
                this.classList.add('actrve');
                bannerimg.forEach(function (obk) {
                    obk.classList.remove('actrve');
                })
                bannerimg[n].classList.add('actrve')
                index=n;
            };
        });
        right.onclick=function () {
            move();
        };
        left.onclick=function () {
            move('l')
        }
    }