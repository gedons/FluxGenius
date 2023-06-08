import { createRouter, createWebHistory } from "vue-router";
import Index from '../components/Index.vue';
// import Contact from '../components/Contact.vue';

const routes = [
    {
        path: "/",
        name: 'Index',
        component: Index
    },
    // {
    //     path: "/contact",
    //     name: 'Contact',
    //     component: Contact
    // },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
  });

  export default router;



