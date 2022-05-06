


const btnsw=document.querySelector('#sw');
    side=document.querySelector('#sidebar');
    h5=document.querySelector('#h5');
    ca1=document.querySelector('#ca1');
    us1=document.querySelector('#us1');
    po1=document.querySelector('#po1');
    ad1=document.querySelector('#ad1');
    co1=document.querySelector('#co1');
    cf1=document.querySelector('#cf1');
    an1=document.querySelector('#an1');
    cc1=document.querySelector('#cc1');
    cl1=document.querySelector('#cl1');
    li1=document.querySelector('#li1');
    li2=document.querySelector('#li2');
    li3=document.querySelector('#li3');
    li4=document.querySelector('#li4');
    li5=document.querySelector('#li5');






btnsw.addEventListener('click',()=>{
    document.body.classList.toggle('claro');
    btnsw.classList.toggle('active');
    side.classList.toggle('masclaro');
    h5.classList.toggle('letragriss');
    ca1.classList.toggle('letragris');
    us1.classList.toggle('letragris');
    po1.classList.toggle('letragris');
    ad1.classList.toggle('letragris');
    co1.classList.toggle('letragris');
    cf1.classList.toggle('letragris');
    an1.classList.toggle('letragris');
    cc1.classList.toggle('letragris');
    cl1.classList.toggle('letragris');
    li1.classList.toggle('masclaro');
    li2.classList.toggle('masclaro');
    li3.classList.toggle('masclaro');
    li4.classList.toggle('masclaro');
    li5.classList.toggle('masclaro');



//guardar modo en localstorage
if(document.body.classList.contains('claro')){
    localStorage.setItem('modo-claro','true');
}else{
    localStorage.setItem('modo-claro','false');
}


});

//obtener el modo actual
if(localStorage.getItem('modo-claro')==='true'){
    document.body.classList.add('claro');
    btnsw.classList.add('active');
    side.classList.add('masclaro');
    h5.classList.add('letragriss');
    ca1.classList.add('letragris');
    us1.classList.add('letragris');
    po1.classList.add('letragris');
    ad1.classList.add('letragris');
    co1.classList.add('letragris');
    cf1.classList.add('letragris');
    an1.classList.add('letragris');
    cc1.classList.add('letragris');
    cl1.classList.add('letragris');
    li1.classList.add('masclaro');
    li2.classList.add('masclaro');
    li3.classList.add('masclaro');
    li4.classList.add('masclaro');
    li5.classList.add('masclaro');
}else{
    document.body.classList.remove('claro');
    btnsw.classList.remove('active');
    side.classList.remove('masclaro');
    h5.classList.remove('letragriss');
    ca1.classList.remove('letragris');
    us1.classList.remove('letragris');
    po1.classList.remove('letragris');
    ad1.classList.remove('letragris');
    co1.classList.remove('letragris');
    cf1.classList.remove('letragris');
    an1.classList.remove('letragris');
    cc1.classList.remove('letragris');
    cl1.classList.remove('letragris');
    li1.classList.remove('masclaro');
    li2.classList.remove('masclaro');
    li3.classList.remove('masclaro');
    li4.classList.remove('masclaro');
    li5.classList.remove('masclaro');

}