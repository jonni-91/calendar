export default {
    actions: {
        async axiosGetFriend(){

        }
    },
    state: {
        friend: []
    },
    mutations: {
        setFriend(state, data){
            state.friend.unshift(data);
        }
    },
    getters: {
        getFriends(state){
            return state.friend;
        }
    }
}
