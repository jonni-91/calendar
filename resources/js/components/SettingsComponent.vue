<template>
    <div>
<!--        <button v-on:click="getLang">-->
<!--            Узнать язык-->
<!--        </button>-->
    </div>
</template>
<script>
import {mapMutations} from 'vuex';
export default {
    name: "SettingsComponent",
    props: {
        lang: {
            type: String,
            default() {
                return {}
            }
        },
        user: {
            type: String,
            default() {
                return {}
            }
        },
    },
    mounted() {
        this.setLang(this.lang);
        this.setUser(this.user);
    },
    methods: {
        ...mapMutations(["setUserId", "setLangCurrent"]),
        setLang(data) {
            this.setLangCurrent(data);
            //this.$root.settings.lang = data ? data : 'ru';
            console.log('setLang = ', data);
        },
        setUser(data) {
            if(data){
                this.setUserId(data ? data : '0');
                //this.$root.settings.user = data ? data : '0';
                console.log('setUser = ', data);
            } else {
                console.log('User undefined');
            }

        }
    }
}
</script>

<style scoped>

</style>
