function Unloader() {

    var o = this;
  
    this.unload = function(evt) {
      var message = "Данные не будут сохранены после обновления страницы или перехода";
      if ($("#taskname").val() != "" || $(".note-editable").text()) { // проверка моих полей на пустоту
        if (typeof evt == "undefined") {
          evt = window.event;
        };
        if (evt) {
          evt.returnValue = message;
        };
        return message;
      };
    };
  
    this.resetUnload = function() {
        $(window).off('beforeunload', o.unload);
  
        setTimeout(function() {
          $(window).on('beforeunload', o.unload);
        }, 2000);
    };
  
    this.init = function() {
  
      $(window).on('beforeunload', o.unload);
  
      // Клик на a#ms-submit-button
      $('a#ms-submit-button').on('click', function() {
          $(window).off('beforeunload', o.unload);
  
          setTimeout(function() {
            $(window).on('beforeunload', o.unload);
          }, 2000);
      });
      
      $(document).on('submit', 'form', function() {
        o.resetUnload;
      });
      $(document).on('keydown', function(event) {
        if ((event.ctrlKey && event.keyCode == 116) || event.keyCode == 116) {
          o.resetUnload;
        };
      });
    };
    this.init();
};
  
$(function() {
    if (typeof window.obUnloader != 'object') {
        window.obUnloader = new Unloader();
    };
});