import Home from './components/Home.vue'
import Users from '.components/Users.vue' 
export default {
    mode: 'history',
    routes:[
        {
            path: '/admin',
            component: Home 
        },
        {
            path: '/admin/users',
            component: Users
        }

    ]
}