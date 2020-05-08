import Vue from "vue";
import VueRouter from "vue-router";
import Category from "./components/admin/Category";
import App from "./components/admin/App";
import AddCategory from "./components/admin/AddCategory";
Vue.use(VueRouter);

const  foo={template:"<h2>I am foo component</h2>"}
const  bar={template:"<h1 type='success'>I am bar component</h1>"}



const routes=[

    // {
    //     path:'/',
    //     redirect:'/login'
    // },
    {
        path: '/',
        component: App,
        name:"admin"
    },
    {
        path: '/admin',
        component: foo,
        name:"admin"
    },
    {
        path: '/category',
        component: Category,
        //name:"category",
        // beforeEnter: (to, from, next) => {
        //
        //     if ( localStorage.getItem('token')){
        //         next();
        //     }
        //     else{
        //         next('/login');
        //     }
        //
        // }
    },
    {
        path: '/add/category',
        component: AddCategory,
        name:"AddCategory"
    }
];

const router = new VueRouter({
    routes,
    mode: "history",

})

export default new VueRouter({routes});
