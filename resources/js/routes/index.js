import VueRouter from 'vue-router';
import Vue from 'vue';
import Store from "./../stores";

Vue.use(VueRouter);

import Index from "../views/Index";
import Profile from "../views/Profile";

const routes = [
    {
        path: "/:lang/persons/",
        name: "ViewIndex",
        component: Index

    },
    {
        path: "/:lang/persons/profile",
        name: "ViewProfile",
        component: Profile

    }
];

export default new VueRouter({
    mode: "history",
    routes: routes
});
