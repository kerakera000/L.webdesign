/// <reference path="../../types/jquery.d.ts" />
Vue.directive("scroll", {
    inserted: function (el, binding) {
      let f = function (evt) {
        if (binding.value(evt, el)) {
          window.removeEventListener("scroll", f);
        }
      };
      window.addEventListener("scroll", f);
    },
  });
  
  // main app
  new Vue({
    el: "#app",
    data: {
      navbutton2:false
    },
    methods: {
      handleScroll: function (evt, el) {
        if (window.scrollY > 800) {
          el.setAttribute("style", "background-color: rgba(85, 85, 85, 0.616);");
        } 
        return window.scrollY > 800;
      },
      jumpbutton : function (evt, el) {
          if (window.scrollY > 800) {
            el.setAttribute("style", "opacity: 1;");
          }
          return window.scrollY > 800;
        },
    },
  });
