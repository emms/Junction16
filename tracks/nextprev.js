$(window).load(function(){
    $('a').each(function(){
        if(!$(this).hasClass('barba-nav')){
            $(this).addClass('no-barba');
        }
    });
    $('.nav').each(function(){
        if(!$(this).hasClass('barba-nav')){
            $(this).addClass('no-barba');
        }
    });

});

document.addEventListener("DOMContentLoaded", function() {
  var lastElementClicked;
  var PrevLink = document.querySelector('a.barba-nav.prev');
  var NextLink = document.querySelector('a.barba-nav.next');

  Barba.Pjax.init();
  Barba.Prefetch.init();

  Barba.Dispatcher.on('linkClicked', function(el) {
    lastElementClicked = el;
  });

  var MovePage = Barba.BaseTransition.extend({
    start: function() {
      this.originalThumb = lastElementClicked;

      Promise
        .all([this.newContainerLoading, this.scrollTop()])
        .then(this.movePages.bind(this));
    },

    scrollTop: function() {
      var deferred = Barba.Utils.deferred();
      var obj = { y: window.pageYOffset };

      TweenLite.to(obj, 0.4, {
        y: 0,
        onUpdate: function() {
          if (obj.y === 0) {
            deferred.resolve();
          }

          window.scroll(0, obj.y);
        },
        onComplete: function() {
          deferred.resolve();
        }
      });

      return deferred.promise;
    },

    movePages: function() {
      var _this = this;
      var goingForward = true;
      this.updateLinks();

      if (this.getNewPageFile() === this.oldContainer.dataset.prev) {
        goingForward = false;
      }

      if(lastElementClicked.classList.contains('next')){
          goingForward = true;
      } else {
          goingForward = false;
      }

      TweenLite.set(this.newContainer, {
        visibility: 'visible',
        xPercent: goingForward ? 100 : -100,
        position: 'fixed',
        left: 0,
        top: 0,
        right: 0
      });

      TweenLite.to(this.oldContainer, 0.6, { xPercent: goingForward ? -100 : 100 });
      TweenLite.to(this.newContainer, 0.6, { xPercent: 0, onComplete: function() {
        TweenLite.set(_this.newContainer, { clearProps: 'all' });
        _this.done();
      }});
    },

    updateLinks: function() {
      PrevLink.href = this.newContainer.dataset.prev;
      NextLink.href = this.newContainer.dataset.next;
    },

    getNewPageFile: function() {
      //return Barba.HistoryManager.currentStatus().url.split('/').pop();
      return Barba.HistoryManager.currentStatus().url;
    }
  });

  Barba.Pjax.getTransition = function() {
    return MovePage;
  };
});

/*
document.addEventListener("DOMContentLoaded", function() {
  if (!('webkitClipPath' in document.body.style)) {
    alert('Sorry, this demo is available just with webkitClipPath. Try with Chrome/Safari.');
  }

  Barba.Pjax.init();
  Barba.Prefetch.init();

  var isAnimating = false;

  document.addEventListener('mouseover', function(e) {
    tweenMaskTo(e.target, 100);
  });

  document.addEventListener('mouseout', function(e) {
    tweenMaskTo(e.target, 40);
  });

  var tweenMaskTo = function(el, radius) {
    if (isAnimating || !el.classList.contains('barba-nav'))
      return;

    var xCoord = el.classList.contains('next') ? '97' : '3';
    TweenLite.to(el, 0.3, { webkitClipPath: 'circle(' + radius + 'px at ' + xCoord + '% 50%)' });
  };

  var CoverMaskTransition = Barba.BaseTransition.extend({
    start: function() {
      isAnimating = true;

      Promise
        .all([this.newContainerLoading, this.scrollTop()])
        .then(this.display.bind(this));
    },

    scrollTop: function() {
      var deferred = Barba.Utils.deferred();
      var obj = { y: window.pageYOffset };

      TweenLite.to(obj, 0.4, {
        y: 0,
        onUpdate: function() {
          if (obj.y === 0) {
            deferred.resolve();
          }

          window.scroll(0, obj.y);
        },
        onComplete: function() {
          deferred.resolve();
        }
      });

      return deferred.promise;
    },

    getNewPageFile: function() {
      //return Barba.HistoryManager.currentStatus().url.split('/').pop();
      return Barba.HistoryManager.currentStatus().url;
    },

    getLinkByHref: function(href) {
      return document.querySelector('a[href="' + href + '"]');
    },

    display: function() {
      var _this = this;
      var tl = new TimelineMax({
        onComplete: function() {
          _this.newContainer.style.position = 'static';
          _this.done();
          isAnimating = false;
        }
      });

      var wWidth = window.innerWidth;
      var oldText = this.oldContainer.querySelector('.text');
      var newText = this.newContainer.querySelector('.text');
      var newLinkPrev = this.newContainer.querySelector('.barba-nav.prev');
      var newLinkNext = this.newContainer.querySelector('.barba-nav.next');

      var linkyLink = this.getNewPageFile();
      linkyLink = linkyLink.substring(34, linkyLink.length);
      console.log(linkyLink);

      var linkElement = this.getLinkByHref(linkyLink);
      var xCoord = linkElement.classList.contains('next') ? '97' : '3';

      TweenLite.set(linkElement, { zIndex: 100 });

      TweenLite.set(this.newContainer, {
        position: 'fixed',
        visibility: 'visible',
        top: 0,
        right: 0,
        bottom: 0,
        left: 0,
        opacity: 0,
        zIndex: 200
      });

      TweenLite.set(newText, { opacity: 0 });
      TweenLite.set(newLinkPrev, { webkitClipPath: 'circle(0px at 3% 50%)' });
      TweenLite.set(newLinkNext, { webkitClipPath: 'circle(0px at 97% 50%)' });

      tl.add('start');
      tl.to(oldText, 0.3, { opacity: 0 }, 'start');
      tl.to(linkElement, 1, { webkitClipPath: 'circle(' + wWidth + 'px at ' + xCoord + '% 50%)' }, 'start');
      tl.to(this.newContainer, 0.3, { opacity: 1 });
      tl.to(newText, 0.3, { opacity: 1 });

      tl.add('nextLinks');
      tl.to(newLinkPrev, 0.2, { webkitClipPath: 'circle(40px at 3% 50%)' }, 'nextLinks');
      tl.to(newLinkNext, 0.2, { webkitClipPath: 'circle(40px at 97% 50%)' }, 'nextLinks');
    }
  });

  Barba.Pjax.getTransition = function() {
    return CoverMaskTransition;
  };
});
*/
