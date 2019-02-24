     document.addEventListener('DOMContentLoaded', function(){
       var carousels = bulmaCarousel.attach();
     }, false);
     var myFullpage = new fullpage('#fullpage', {
     	licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
         anchors: ['inicio', 'desarrollo', 'cloud', 'diseno', 'marketing', 'brandbuilder', 'laboratorio'],
         sectionsColor: ['#F2F2F2', '#fff', '#fff', '#fff', '#fff', '#0F1B9C', '#ff0000'],
         css3: true,
         scrollOverflow: true,
         slidesNavigation: true,
         controlArrows: false,
     });    