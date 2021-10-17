<template>
    <div>
        <a href="#" aria-expanded="true">
            <img src="assets/img/avatars/avatar_default_sm@2x.png" alt="" data-rjs="2" data-rjs-processed="true" width="50" height="50">
        </a>
        <div class="uk-navbar-dropdown uk-dropdown-small uk-close uk-navbar-dropdown-bottom-right" style="left: 681.206px; top: 48px;">
            <ul class="uk-nav uk-nav-navbar">
                <li><router-link :to="{name: 'ViewProfile', params: {lang: this.getLang}}">Profile</router-link></li>
                <li><router-link :to="{name: 'ViewIndex', params: {lang: this.getLang}}">Settings</router-link></li>
            </ul>
        </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex';
export default {
    name: "ProfileComponent",
    computed: mapGetters(['getUserId','getLang']),
 }
</script>

<style scoped>

</style>
