jQuery(function($){
   
    /*$('#login h1, #login form').wrapAll('<div class="grupo"></div>');
    
    $("body").vegas({
        slides: [
            { src : login_imagenes.ruta_plantilla + '/login/img/1.jpg' },
            { src : login_imagenes.ruta_plantilla + '/login/img/2.jpg' },
            { src : login_imagenes.ruta_plantilla + '/login/img/3.jpg' }
        ],
        overlay :  login_imagenes.ruta_plantilla + '/login/img/overlays/05.png',
        transitions : ['fade', 'zoomOut', 'swirlLeft']
    });*/
    var $elementoSVG = '<svg class="blobCont">'+
    '<image xlink:href="'+ login_imagenes.ruta_plantilla + '/login/img/logincolorBG.jpg' +'" mask="url(#mask)" preserveAspectRatio="xMidYMid slice" />'+
    '<defs>'+
  '<filter id="gooey" height="130%">'+
            '<feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />'+
            '<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />'+
    '</filter>'+
'</defs>'+
        '<mask id="mask" x="0" y="0">'+
           '<g style="filter: url(#gooey)">'+
      '<circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="50%" cy="10%" r="40" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="90%" cy="20%" r="120" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>'+
      '<circle class="blob" cx="50%" cy="60%" r="80" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="70%" cy="90%" r="10" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="90%" cy="60%" r="90" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="30%" cy="90%" r="80" fill="white" stroke="white"/>'+
      '<circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="50%" cy="10%" r="20" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="40%" cy="20%" r="120" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>'+
      '<circle class="blob" cx="80%" cy="60%" r="80" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="17%" cy="10%" r="100" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="40%" cy="60%" r="90" fill="white" stroke="white"/>'+
                '<circle class="blob" cx="10%" cy="50%" r="80" fill="white" stroke="white"/>'+
            '</g>'+
        '</mask>'+
'</svg>';

    $('body').prepend('<div class="bgImage"></div>');

    $('.bgImage').append($elementoSVG);

    TweenMax.staggerFromTo('.blob', 20 ,{
        cycle: {
        attr:function(i) {
        var r = i*90;
        return {
        transform:'rotate('+r+') translate( 200 ,0.1) rotate(-'+r+') '
        }      
        }
        }  
        },{
        cycle: {
        attr:function(i) {
        var r = i*90+360;
        return {
        transform:'rotate('+r+') translate( 200 ,0.1) rotate(-'+r+')'
        }      
        }
        },
        ease:Linear.easeNone,
        repeat:-1
    });


});