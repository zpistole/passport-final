$('img').on('dragstart', function(event) { event.preventDefault(); });
$('document').ready(function() {
  $('img.swap').on({
    'mouseover' : function() {
      $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/rocket-back.png');
    },
    mouseout : function() {
  $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/playcraft-systems-passport-rocket.jpg');
    }
  }); //END ROCKET IMAGE

  $('img.swap2').on({
    'mouseover' : function() {
      $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/locomotive-back.png');
    },
    mouseout : function() {
  $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/playcraft-systems-passport-train.jpg');
    }
  }); //END TRAIN THEME

  $('img.swap3').on({
    'mouseover' : function() {
      $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/western-back.png');
    },
    mouseout : function() {
  $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/playcraft-systems-passport-western.jpg');
    }
  }); //END WESTERN THEME

  $('img.swap4').on({
    'mouseover' : function() {
      $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/castle-back.png');
    },
    mouseout : function() {
  $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/playcraft-systems-passport-castle.jpg');
    }
  }); //END CASTLE THEME

  $('img.swap5').on({
    'mouseover' : function() {
      $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/pirate-back.png');
    },
    mouseout : function() {
  $(this).attr('src','http://www.playcraftsystems.com/staging/passport/img/playcraft-systems-passport-pirate.jpg');
    }
  }); //END PIRATE THEME
});
