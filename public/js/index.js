import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.config.devtools = true;
new Vue({
    el: '#app',
    mounted: function () {
        console.log("Mounted")
    },
    created: function() {
        console.log("created")
    },
    destroyed: function() {
        console.log("destroyed")
    }
  });