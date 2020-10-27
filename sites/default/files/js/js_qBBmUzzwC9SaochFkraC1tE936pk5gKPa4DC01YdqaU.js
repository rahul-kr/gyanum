/**
 * @file
 * Defines Javascript behaviors for the drupal8 w3css theme.
 */

(function ($, Drupal) {
  'use strict';
    // Used for fixed menu.
  let origOffsetY;
  let didScroll = false;
  let mainNavigation = document.querySelector('#main-navigation-h');
    // In case the main menu not printed.
  if ($('#main-navigation-h .ul-parent').length > 0) {
    origOffsetY = mainNavigation.offsetTop;
  }
    // Add flex position to the main menu at scroll.
  let scrollWindow = function () {
    didScroll = true;
    if (window.scrollY > origOffsetY) {
      mainNavigation.classList.add('w3-sticky');
    }
    else {
      if ($('.w3-sticky').length) {
        mainNavigation.classList.remove('w3-sticky');
      }
    }
  };
    // Add and remove classes on window resize.
  let mediaSize = function () {
    let currentWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    let mainMenuChild = $('#main-navigation-h').css('background-color');
    if (currentWidth >= 993) {
      // Add class to the body for large screen.
      $('body').addClass('large-screen');
      $('body').removeClass('small-screen');
      $('body').removeClass('medium-screen');
      $('.ul-parent').removeClass('w3-show');
      $('.ul-child').removeClass('w3-show');
      $('.ul-responsive-h .ul-parent').removeAttr('style');
      $('.ul-responsive-h .ul-child').removeAttr('style');
      $('#main-navigation-h .ul-parent').removeAttr('style');
      $('#main-navigation-h .ul-child').removeAttr('style');
      $('#main-navigation-h .ul-child').css('background-color', mainMenuChild);
      // Make sure all the inside regions have the same height.
      $('.top-region').matchHeight({property: 'height'});
      $('.main-region').matchHeight({property: 'height'});
      $('.bottom-region').matchHeight({property: 'height'});
      $('.footer-region').matchHeight({property: 'height'});
    }
    else if ((currentWidth >= 601) && (currentWidth <= 992)) {
      // Add class to the body for medium screen.
      $('body').addClass('medium-screen');
      $('body').removeClass('large-screen');
      $('body').removeClass('small-screen');
    }
    else if (currentWidth <= 600) {
            // Add class to the body for small screen.
      $('body').addClass('small-screen');
      $('body').removeClass('large-screen');
      $('body').removeClass('medium-screen');
    }
    else if (currentWidth <= 992) {
            // Remove the match height on small screen.
      $('.top-region').matchHeight({remove: true});
      $('.main-region').matchHeight({remove: true});
      $('.bottom-region').matchHeight({remove: true});
      $('.footer-region').matchHeight({remove: true});
    }
  };

  let fadeBox = function () {
    didScroll = true;
    let animationHeight = $(window).innerHeight() * 0.25;
    let ratio = Math.round((1 / animationHeight) * 10000) / 10000;
    $('.d8-fade').each(function () {
      let objectTop = $(this).offset().top;
      let windowBottom = $(window).scrollTop() + $(window).innerHeight();
      if (objectTop < windowBottom) {
        if (objectTop < windowBottom - animationHeight) {
          $(this).css({
            transition: 'opacity 1s linear',
            opacity: 1
          });
        }
        else {
          $(this).css({
            transition: 'opacity 0.5s linear',
            opacity: (windowBottom - objectTop) * ratio
          });
        }
      }
      else {
        $(this).css('opacity', 0);
      }
    });
  };

  setInterval(function () {
    if (didScroll) {
      didScroll = false;
    }
  }, 100);

  Drupal.behaviors.d8w3cssMenuDepth = {
    attach: function (context, settings) {
            // Add class to any UL/LI according to the depth.
      $(context)
            .find('ul')
            .once('ul')
            .each(function () {
              let depth = $(this).parents('ul').length;
              $(this).addClass('ul-' + depth);
            });
      $(context)
            .find('ul li')
            .once('ul li')
            .each(function () {
              let depth = $(this).parents('li').length;
              $(this).addClass('li-' + depth);
            });
    }
  };

  Drupal.behaviors.d8w3cssResponsiveMenu = {
    attach: function (context, settings) {
            // Add class to any UL/LI according to the depth.
      $(context)
            .find('.mobile-nav-responsive')
            .once('.mobile-nav-responsive')
            .on(
                'click', function () {
                  if ($('.ul-responsive-h .ul-parent').is(':hidden')) {
                    $('.ul-responsive-h .ul-parent').slideDown(350);
                  }
                  else {
                    $('.ul-responsive-h .ul-parent').slideUp(350);
                  }
                }
            );
      $(context)
            .find('.tMenu-v')
            .once('.tMenu-v')
            .on(
                'click', function (e) {
                  e.preventDefault();
                  let $this = $(this);
                  if ($this.next().hasClass('show')) {
                    $this.next().removeClass('show');
                    $this.next().slideUp(350);
                  }
                  else {
                    $this.parent().parent().find('li .ul-child').removeClass('show');
                    $this.parent().parent().find('li .ul-child').slideUp(350);
                    $this.next().toggleClass('show');
                    $this.next().slideToggle(350);
                  }
                });
    }
  };

  Drupal.behaviors.d8w3cssMainNav = {
    attach: function (context, settings) {

            // On click show/hide the vertical main menu.
      $(context)
            .find('#main-navigation-v #close-nav')
            .once('#main-navigation-v #close-nav')
            .on(
                'click', function () {
                  document.getElementById('main-navigation-v').style.display = 'none';
                }
            );
      $(context)
            .find('#open-nav-inner')
            .once('#open-nav-inner')
            .on(
                'click', function () {
                  document.getElementById('main-navigation-v').style.display = 'block';
                }
            );
            // Show the mobile menu on click horizontal.
      $(context)
            .find('#main-navigation-h .mobile-nav')
            .once('#main-navigation-h .mobile-nav')
            .on(
                'click', function () {
                  if ($('#main-navigation-h .ul-parent').is(':hidden')) {
                    $('#main-navigation-h .ul-parent').slideDown(350);
                  }
                  else {
                    $('#main-navigation-h .ul-parent').slideUp(350);
                  }
                }
            );
            // On click expand the dropdown menu for small device.
      $(context)
            .find('.tMenu')
            .once('.tMenu')
            .on(
                'click', function (e) {
                  e.preventDefault();
                  let currentWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                  let $this = $(this);
                  if ((currentWidth <= 992) || ($('#main-navigation-v').css('display') === 'block')) {
                    if ($this.next().hasClass('show')) {
                      $this.next().removeClass('show');
                      $this.next().slideUp(350);
                    }
                    else {
                      $this.parent().parent().find('li .ul-child').removeClass('show');
                      $this.parent().parent().find('li .ul-child').slideUp(350);
                      $this.next().toggleClass('show');
                      $this.next().slideToggle(350);
                    }
                  }
                });
    }
  };

  Drupal.behaviors.d8w3cssTheme = {
    attach: function (context, settings) {
            // Change the form color to match the footer color.
      let footerFormBg = $('#footer-menu').css('background-color');
      $(context)
            .find('#footer-menu form')
            .once('#footer-menu form')
            .css('background-color', footerFormBg);

            // Change the sub menu color as the main menu.
      let mainMenuChild = $('.main-navigation-wrapper').css('background-color');
      $(context)
            .find('.main-navigation-wrapper .ul-child')
            .once('.main-navigation-wrapper .ul-child')
            .css('background-color', mainMenuChild);
            // Add classes to search page.
      $(context)
            .find('.search-form .search-advanced')
            .once('.search-form .search-advanced')
            .addClass('w3-padding-large w3-border w3-bar w3-left-align w3-margin-bottom');
      $(context)
            .find('.search-form .search-advanced > summary')
            .once('summary')
            .addClass('w3-button w3-bar w3-left-align');
      $(context)
            .find('.search-form .search-help-link')
            .once('.search-form .search-help-link')
            .addClass('w3-button w3-right w3-border w3-margin-top');
      $(context)
            .find('.tabledrag-toggle-weight-wrapper button')
            .once('button')
            .addClass('w3-button');
            // Theme settings.
      $(context)
            .find('#system-theme-settings details')
            .once('details')
            .removeAttr('open')
            .addClass('w3-border w3-bar w3-left-align w3-margin-bottom');
      $(context)
            .find('#system-theme-settings details > summary')
            .once('summary')
            .addClass('w3-button w3-bar w3-left-align');
      $(context)
            .find('#system-theme-settings details > .details-wrapper')
            .once('.details-wrapper')
            .addClass('w3-padding-large w3-left-align');
      $(context)
            .find('.d8-fade')
            .once('.d8-fade')
            .css('opacity', 0);
      $(context)
            .find('a > .w3-image')
            .once('a > .w3-image')
            .each(
                function () {
                  $(this).parent().addClass('d8-has-image');
                }
            );
      mediaSize();
      fadeBox();
      window.addEventListener('resize', mediaSize);
      window.addEventListener('scroll', scrollWindow);
      window.addEventListener('scroll', fadeBox);
    }
  };
})(jQuery, Drupal);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

Drupal.debounce = function (func, wait, immediate) {
  var timeout = void 0;
  var result = void 0;
  return function () {
    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    var context = this;
    var later = function later() {
      timeout = null;
      if (!immediate) {
        result = func.apply(context, args);
      }
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) {
      result = func.apply(context, args);
    }
    return result;
  };
};;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, debounce) {
  $.fn.drupalGetSummary = function () {
    var callback = this.data('summaryCallback');
    return this[0] && callback ? $.trim(callback(this[0])) : '';
  };

  $.fn.drupalSetSummary = function (callback) {
    var self = this;

    if (typeof callback !== 'function') {
      var val = callback;
      callback = function callback() {
        return val;
      };
    }

    return this.data('summaryCallback', callback).off('formUpdated.summary').on('formUpdated.summary', function () {
      self.trigger('summaryUpdated');
    }).trigger('summaryUpdated');
  };

  Drupal.behaviors.formSingleSubmit = {
    attach: function attach() {
      function onFormSubmit(e) {
        var $form = $(e.currentTarget);
        var formValues = $form.serialize();
        var previousValues = $form.attr('data-drupal-form-submit-last');
        if (previousValues === formValues) {
          e.preventDefault();
        } else {
          $form.attr('data-drupal-form-submit-last', formValues);
        }
      }

      $('body').once('form-single-submit').on('submit.singleSubmit', 'form:not([method~="GET"])', onFormSubmit);
    }
  };

  function triggerFormUpdated(element) {
    $(element).trigger('formUpdated');
  }

  function fieldsList(form) {
    var $fieldList = $(form).find('[name]').map(function (index, element) {
      return element.getAttribute('id');
    });

    return $.makeArray($fieldList);
  }

  Drupal.behaviors.formUpdated = {
    attach: function attach(context) {
      var $context = $(context);
      var contextIsForm = $context.is('form');
      var $forms = (contextIsForm ? $context : $context.find('form')).once('form-updated');
      var formFields = void 0;

      if ($forms.length) {
        $.makeArray($forms).forEach(function (form) {
          var events = 'change.formUpdated input.formUpdated ';
          var eventHandler = debounce(function (event) {
            triggerFormUpdated(event.target);
          }, 300);
          formFields = fieldsList(form).join(',');

          form.setAttribute('data-drupal-form-fields', formFields);
          $(form).on(events, eventHandler);
        });
      }

      if (contextIsForm) {
        formFields = fieldsList(context).join(',');

        var currentFields = $(context).attr('data-drupal-form-fields');

        if (formFields !== currentFields) {
          triggerFormUpdated(context);
        }
      }
    },
    detach: function detach(context, settings, trigger) {
      var $context = $(context);
      var contextIsForm = $context.is('form');
      if (trigger === 'unload') {
        var $forms = (contextIsForm ? $context : $context.find('form')).removeOnce('form-updated');
        if ($forms.length) {
          $.makeArray($forms).forEach(function (form) {
            form.removeAttribute('data-drupal-form-fields');
            $(form).off('.formUpdated');
          });
        }
      }
    }
  };

  Drupal.behaviors.fillUserInfoFromBrowser = {
    attach: function attach(context, settings) {
      var userInfo = ['name', 'mail', 'homepage'];
      var $forms = $('[data-user-info-from-browser]').once('user-info-from-browser');
      if ($forms.length) {
        userInfo.forEach(function (info) {
          var $element = $forms.find('[name=' + info + ']');
          var browserData = localStorage.getItem('Drupal.visitor.' + info);
          var emptyOrDefault = $element.val() === '' || $element.attr('data-drupal-default-value') === $element.val();
          if ($element.length && emptyOrDefault && browserData) {
            $element.val(browserData);
          }
        });
      }
      $forms.on('submit', function () {
        userInfo.forEach(function (info) {
          var $element = $forms.find('[name=' + info + ']');
          if ($element.length) {
            localStorage.setItem('Drupal.visitor.' + info, $element.val());
          }
        });
      });
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e) {
    var url = void 0;
    if (e.type === 'click') {
      url = e.currentTarget.location ? e.currentTarget.location : e.currentTarget;
    } else {
      url = window.location;
    }
    var hash = url.hash.substr(1);
    if (hash) {
      var $target = $('#' + hash);
      $('body').trigger('formFragmentLinkClickOrHashChange', [$target]);

      setTimeout(function () {
        return $target.trigger('focus');
      }, 300);
    }
  };

  var debouncedHandleFragmentLinkClickOrHashChange = debounce(handleFragmentLinkClickOrHashChange, 300, true);

  $(window).on('hashchange.form-fragment', debouncedHandleFragmentLinkClickOrHashChange);

  $(document).on('click.form-fragment', 'a[href*="#"]', debouncedHandleFragmentLinkClickOrHashChange);
})(jQuery, Drupal, Drupal.debounce);;
