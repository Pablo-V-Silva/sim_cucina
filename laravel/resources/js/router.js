import { createWebHistory, createRouter } from "vue-router";

import calcolo from './components/calcolo.vue';
import confronto from './components/confronto.vue';
import calcolaConfronto from './components/calcolaConfronto.vue';

const routes = [
    {
        path: '/cucina/calcolo',
        name: 'Calcolo',
        component: calcolo
    },
    {
        path: '/cucina/confronto',
        name: 'Confronto',
        component: confronto,
    },
    {
        path: '/cucina/calcola-confronto',
        name: 'CalcolaConfronto',
        component: calcolaConfronto,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;