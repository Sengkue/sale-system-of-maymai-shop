import { createWebHistory, createRouter } from "vue-router";

import Home from "../Pages/Home.vue";
import Pos from "../Pages/Pos.vue";
import Store from "../Pages/Store.vue";
import Transection from "../Pages/Tramsection.vue";
import Report from "../Pages/Report.vue";
import NoPage from "../Pages/Nopage.vue";

import Login from "../Pages/Login.vue";
import Register from "../Pages/Register.vue";

const routes = [
    {
        name: "login",
        path:"/login",
        component: Login
    },
    {
        name: "register",
        path:"/register",
        component: Register
    },
    {
        name: "home",
        path:"/",
        component: Login
    },
    {
        name: "pos",
        path:"/pos",
        component: Pos
    },
    {
        name: "store",
        path:"/store",
        component: Store
    },
    {
        name: "transection",
        path:"/transection",
        component: Transection
    },
    {
        name: "report-data",
        path:"/report",
        component: Report
    },
    {
        name: "nopage",
        path:"/:catchAll(.*)",
        component: NoPage
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
    scrollBehavior(){
        window.scrollTo(0,0);
    }
});

export default router;