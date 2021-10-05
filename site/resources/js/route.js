import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import Index from "./views/index";
import Blog from "./views/blog";
const routes=[
    {
        path:"/",
        component: Index
    },
    {
        path: "/blog",
        component: Blog
    },
];
export default new vueRouter({
    mode: "history",
    routes
});
