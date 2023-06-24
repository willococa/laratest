import './bootstrap';
                                                            
import {createApp} from 'vue/dist/vue.esm-bundler.js';
import {createRouter, createWebHistory} from 'vue-router/dist/vue-router.esm-bundler.js';
import App from './App.vue';
import Home from './components/Home.vue';
import Users from './components/Users.vue';
import routes from './routes';


const router = createRouter({
    history: createWebHistory(),
    routes: routes
})


const app = createApp({});
app.component(Home);
app.component(Users);

app.component('app-component', App);
app.use(router);


app.mount("#app");
                                                        
                                                    
                                                            
                                                        
