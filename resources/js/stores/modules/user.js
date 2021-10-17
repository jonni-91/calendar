import axios from "axios";
export default {
    state: {
        user: {
            id: '',
            name: '',
            avatar: ''
        }
    },
    actions: {
            loadUserData(context){
                axios
                    .post('/api/user', {
                        id: '1'
                    })
                    .then((response) => {
                        context.commit('setUserName', response.data.data['0']['name']);
                        context.commit('setUserAvatar', response.data.data['0']['avatar']);
                        console.log(this.user);
                    })
                    .catch(function (error){
                        console.log(error);
                    });
        }
    },
    mutations: {
        setUserId(state, int){
            state.user.id = int;
        },
        setUserName(state, str){
            state.user.name = str;
        },
        setUserAvatar(state, url){
            state.user.avatar = url;
        }
    },
    getters: {
        getUserId(state){
            return state.user.id;
        },
        getUserAvatar(state){
            return state.user.avatar;
        },
        getUserName(state){
            return state.user.name;
        }
    }
}
