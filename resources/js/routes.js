import Home from './components/Home.vue'
import Users from './components/Users.vue'
import Posts from './components/Posts.vue'
const routes = [
    {
        path: '/admin/home',
        component: Home
    },
    {
        path: '/admin/users',
        component: Users
    },
    {
        path: '/admin/posts',
        component: Posts
    }

]
export default routes
