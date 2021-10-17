import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// loads the Icon plugin
UIkit.use(Icons);

UIkit.util.ready(function () {
    const inputFile = document.getElementById("user_edit_avatar_control");
    inputFile.addEventListener("change", handleFiles, false);
    function handleFiles() {
        const fileList = this.files; /* now you can work with the file list */
        console.log(fileList);
    }

    const deleteAvatar = document.getElementsByClassName("user_avatar_controls");

});


window.Vue = require('vue').default;
import routers from "../routes/index";
import stores from "../stores/index";
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('settings-component', require('../components/SettingsComponent.vue').default);
Vue.component('profile-component', require('../components/ProfileComponent.vue').default);
// import SettingsComponent from "../components/SettingsComponent";
// import ProfileComponent  from "../components/ProfileComponent";

const app = new Vue({
    el: '#app',
    router: routers,
    store: stores,
});

