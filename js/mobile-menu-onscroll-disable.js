//body scrolling disabled while mobile menu is active

  function lockScroll() {
        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
        }
        else {
            $('body').addClass('lock-scroll');
        }
  }
