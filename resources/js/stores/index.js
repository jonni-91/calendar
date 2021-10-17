import Vue from "vue";
import Vuex from "vuex";
import Global from "./Global";
import User from "./modules/user"
import Settings from "./modules/settings"

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        global: Global,
        user: User,
        settings: Settings
    }
});

export default store;
