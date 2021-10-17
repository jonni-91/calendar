import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// loads the Icon plugin
UIkit.use(Icons);

// components can be called from the imported UIkit reference
// UIkit.notification('Проверка уведомления.');

UIkit.util.ready(function () {
    document.getElementById('toggle-login').addEventListener('click', function () {
        //setTimeout(function() { document.getElementById('toggle').click(); }, 1);
        document.getElementById("login").required = !document.getElementById("login").required;
        document.getElementById("phone").required = !document.getElementById("phone").required;
    });
});
//UIkit.toggle("#toggle-login").toggle();

window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('../components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        users: ['user'],
        postFontSize: 1
    }
});
