'use strict';

var XHR = ('onload' in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;

document.addEventListener('DOMContentLoaded',function(){

  var orderSub = document.querySelector('#order_sub') || document.querySelector('head');
  var orderAppSub = document.querySelector('#app-order_sub') || document.querySelector('head');
  var unsubscribeSub = document.querySelector('#unsubscribe_sub') || document.querySelector('head');
  var freeAuditSub = document.querySelector('#free-audit_sub') || document.querySelector('head');

  var windowButtonClose = document.querySelector('.window__button-close') || document.querySelector('head');
  var windowPopup       = document.querySelector('.window') || document.querySelector('head');
  var ajaxAlertPopup    = document.querySelector('.ajax-alert-popup') || document.querySelector('head');

  orderSub.addEventListener('click', function(e){
    var fio    = document.querySelector('#fio').value;
    var tel     = document.querySelector('#tel').value;
    var email = document.querySelector('#email').value;
    var description = document.querySelector('#description').value;
    var file    = document.querySelector('#file__back').files[0];


    if(fio != '' && tel != '' && email != '' && description != '') {
      e.preventDefault();
      var xhr = new XHR();
      var formData = new FormData();

      formData.append('fio', fio);
      formData.append('tel', tel);
      formData.append('email', email);
      formData.append('description', description);
      formData.append('file', file);

      xhr.open('POST', '/includes/ajax/order.php', true);
      xhr.send(formData);

      xhr.onreadystatechange = function(){
        if(xhr.readyState != 4) return;

        if(xhr.status == 200){
          //success
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--done');
          document.querySelector('.window__text--done').style.display = 'block';
        }
        else{

          //error
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--error');
          document.querySelector('.window__text--error').style.display = 'block';
        }
      }
    }
  });

  orderAppSub.addEventListener('click', function(e){
    var fio    = document.querySelector('#app-fio').value;
    var tel     = document.querySelector('#app-tel').value;
    var email = document.querySelector('#app-email').value;
    var description = document.querySelector('#app-description').value;

    if(fio != '' && tel != '' && email != '' && description != '') {
      e.preventDefault();
      var xhr = new XHR();
      var formData = new FormData();

      formData.append('app-fio', fio);
      formData.append('app-tel', tel);
      formData.append('app-email', email);
      formData.append('app-description', description);

      xhr.open('POST', '/includes/ajax/app-order.php', true);
      xhr.send(formData);

      xhr.onreadystatechange = function(){
        if(xhr.readyState != 4) return;

        if(xhr.status == 200){
          //success
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--done');
          document.querySelector('.window__text--done').style.display = 'block';
        }
        else{

          //error
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--error');
          document.querySelector('.window__text--error').style.display = 'block';
        }
      }
    }
  });

  unsubscribeSub.addEventListener('click', function(e){
    var email = document.querySelector('#email').value;
    var comment = document.querySelector('#comment').value;

    if(email != '') {
      e.preventDefault();
      var xhr = new XHR();
      var formData = new FormData();

      formData.append('email', email);
      formData.append('comment', comment);

      xhr.open('POST', '/includes/ajax/unsubscribe.php', true);
      xhr.send(formData);

      xhr.onreadystatechange = function(){
        if(xhr.readyState != 4) return;

        if(xhr.status == 200){
          //success
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--done');
          document.querySelector('.window__text--done').style.display = 'block';
        }
        else{

          //error
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--error');
          document.querySelector('.window__text--error').style.display = 'block';
        }
      }
    }
  });

  freeAuditSub.addEventListener('click', function(e){
    var email = document.querySelector('#email').value;
    var site  = document.querySelector('#site').value;

    if(site != '') {
      e.preventDefault();
      var xhr = new XHR();
      var formData = new FormData();

      formData.append('site', site);
      formData.append('email', email);

      xhr.open('POST', '/includes/ajax/audit.php', true);
      xhr.send(formData);

      xhr.onreadystatechange = function(){
        if(xhr.readyState != 4) return;

        if(xhr.status == 200){
          //success
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--done');
          document.querySelector('.window__text--done').style.display = 'block';
        }
        else{

          //error
          addClass(ajaxAlertPopup, 'ajax-alert-popup--open');
          addClass(windowPopup, 'window--error');
          document.querySelector('.window__text--error').style.display = 'block';
        }
      }
    }
  });

  windowButtonClose.addEventListener('click', function(){
    removeClass(ajaxAlertPopup, 'ajax-alert-popup--open');
    removeClass(windowPopup, 'window--done window--error');
    document.querySelector('.window__text--done').style.display = 'none';
    document.querySelector('.window__text--error').style.display = 'none';
  });

});
