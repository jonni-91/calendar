import actions from "./actions";
import getters from "./getter";
import mutations from "./mutation";
import state from "./state";

export default {
    namespaced: true,

    state: state,
    actions: actions,
    getters: getters,
    mutations: mutations
};
