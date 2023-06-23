import './bootstrap';
                                                            
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import Users from './components/Users.vue';
import App from './App.vue';
import routes from './routes';


const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes
})


const app = createApp({});
app.component(Home);
app.component(Users);

app.component('app-component', App);
app.use(router);


app.mount("#app");
                                                        
                                                    
                                                            
                                                        
