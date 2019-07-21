      var mouth = Snap("#mouth"),
         eyebrowL = Snap('#eyebrowL'),
         eyebrowR = Snap('#eyebrowR'),
         items = document.querySelectorAll('[data-reaction]'),
         eyebrowPathLeft,
         eyebrowPathRight,
         mouthPath;

      for (var i = 0; i < items.length; i++) {
         items[i].addEventListener('click', function() {
            switchReaction(this.getAttribute('data-reaction'));
         });
      }

      function switchReaction(reaction) {
         switch (reaction) {
            case 'smile':
               mouthPath = 'M90,80 C100,124 144,124 155,80 C144,80 100,80 90,80';
               eyebrowPathLeft = 'M10,28 C20,4 46,4 56,28';
               eyebrowPathRight = 'M189,28 C199,4 223,4 233,28';
               break;
            case 'less-smile':
               mouthPath = 'M90,80 C100,124 144,124 155,80 C144,124 100,124 90,80';
               eyebrowPathLeft = 'M10,28 C20,4 46,4 56,28';
               eyebrowPathRight = 'M189,28 C199,4 223,4 233,28';
               break;
            case 'serious':
               mouthPath = 'M90,110 C100,110 144,110 155,110 C144,110 100,110 90,110';
               eyebrowPathLeft = 'M14,30 56,8';
               eyebrowPathRight = 'M189,28 232,28';
               break;
            case 'less-angry':
               mouthPath = 'M90,110 C100,80 144,80 155,110 C144,80 100,80 90,110';
               eyebrowPathLeft = 'M10,28 C20,4 46,4 56,28';
               eyebrowPathRight = 'M189,28 C199,4 223,4 233,28';
               break;
            case 'angry':
               mouthPath = 'M90,110 C100,110 144,110 155,110 C144,110 100,110 90,110';
               eyebrowPathLeft = 'M14,8 56,30';
               eyebrowPathRight = 'M189,28 232,6';
               break;
         }

         mouth.animate({
            d: mouthPath
         }, 600, mina.backout);

         eyebrowL.animate({
            d: eyebrowPathLeft
         }, 600, mina.backout);

         eyebrowR.animate({
            d: eyebrowPathRight
         }, 600, mina.backout);
      }