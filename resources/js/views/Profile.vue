<template>
    <div class="container">
        <div class="uk-card uk-sticky" data-uk-sticky="offset: 64; media: @l">
            <div class="uk-card-body">
                <div class="uk-text-center">
                    <div class="sc-user-profile-avatar fileinput fileinput-exists uk-margin-bottom" data-provides="fileinput">
                        <div class="fileinput-new thumbnail thumbnail-lg">
                            <img src="assets/img/blank@2x.gif" alt="" data-rjs="2" data-rjs-processed="true" width="1" height="1">
                        </div>

                        <div class="fileinput-preview fileinput-exists thumbnail thumbnail-lg">
                            <img :src="getUserAvatar" class="sc-avatar " alt="pankunding" data-rjs="2" data-rjs-processed="true" width="96" height="96">                                        </div>
                        <div class="user_avatar_controls">
                                            <span class="btn-file">
                                                <span class="fileinput-new" uk-icon="upload"></span>
                                                <span class="fileinput-exists" uk-icon="refresh"></span>
                                                <form enctype="multipart/form-data" action=" route('edit_avatar', app()->getLocale())" method="post">
                                                    @csrf
                                                    <input type="file" name="user_edit_avatar_control" id="user_edit_avatar_control">
                                                    <input type="submit" style="display:none;">
                                                </form>
                                            </span>
                            <a href="#" class="btn-file fileinput-exists" id="avatar_trash" uk-icon="trash"></a>
                        </div>
                    </div>
                    <h4 class="uk-card-title">{{getUserName}}</h4>
                    <span class="sc-color-secondary">Kuphal, Jones and Glover</span>
                </div>
                <ul class="uk-list uk-list-divider">
                    <li class="sc-list-group">
                        <div class="sc-list-addon">
                            <i class="mdi mdi-email"></i>
                        </div>
                        <div class="sc-list-body">
                            <div class="sc-list-body-inner">monty.oconner@hotmail.com</div>
                        </div>
                    </li>
                    <li class="sc-list-group">
                        <div class="sc-list-addon">
                            <i class="mdi mdi-phone"></i>
                        </div>
                        <div class="sc-list-body">910.403.8480 x97362</div>
                    </li>
                    <li class="sc-list-group">
                        <div class="sc-list-addon">
                            <i class="mdi mdi-office-building"></i>
                        </div>
                        <div class="sc-list-body">Collins-Koch</div>
                    </li>
                    <li class="sc-list-group">
                        <div class="sc-list-addon">
                            <i class="mdi mdi-link"></i>
                        </div>
                        <div class="sc-list-body">
                            https://tzdthemes.com
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
export default {
    name: "Profile",
    computed: mapGetters(["getUserId","getUserAvatar","getUserName"]),
    methods: mapActions(["loadUserData"]),
    mounted() {
        console.log('Profile component mounted.')
        this.loadUserData();
    },
}
</script>

<style scoped>

</style>
