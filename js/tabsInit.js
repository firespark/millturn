function Tabs() {
    
    function stopDefAction(evt) {
      evt.preventDefault();
    }
    document.querySelectorAll('.nav-tabs').forEach(tab => {
      tab.addEventListener(
          'click', stopDefAction, false
      );
    })
    const bindAll = function() {
      var menuElements = document.querySelectorAll('[data-tab]');
      for(var i = 0; i < menuElements.length ; i++) {
        menuElements[i].addEventListener('click', change, false);
      }
    }
    const clear = function() {
      var menuElements = document.querySelectorAll('[data-tab]');
      for(var i = 0; i < menuElements.length ; i++) {
        menuElements[i].parentElement.classList.remove('active');
        var id = menuElements[i].getAttribute('data-tab');
        console.log(id);
        document.getElementById(id).classList.remove('active');
      }
    }
    const change = function(e) {
      clear();
      e.target.parentElement.classList.add('active');
      var id = e.currentTarget.getAttribute('data-tab');
      document.getElementById(id).classList.add('active');
    }
    bindAll();
    console.log('TabsInit');
  }
  document.addEventListener("DOMContentLoaded", function(event){
    const connectTabs = new Tabs();
  })
