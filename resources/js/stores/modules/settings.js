export default {
    state: {
        setting: {
            lang: ''
        }
    },
    actions: {},
    mutations: {
        setLangCurrent(state, lang){
            state.setting.lang = lang;
        }
    },
    getters: {
        getLang(state){
            return state.setting.lang;
        }
    }
}
