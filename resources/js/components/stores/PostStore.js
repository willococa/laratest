import axios from "axios";
import { defineStore } from "pinia";
export const usePostStore = defineStore("posts", {
    //this is like data{}
    state: () =>{
        return {
            posts: null,
            post: {
                title: "",
                excerpt: "",
                body: "",
                thumbnail: "",
                category_id: null,

            }
        }

    },
    //this is like methods
    actions:{
        async fetchPosts(){
            await axios.get("http://127.0.0.1:8000/api/posts").then(res => {
                let data = res.data
                console.log(data.data);
                this.$patch({
                    posts: data.posts
                })

            }). catch(err => {
                console.log(err);
                return err;
             })
        },
        async createPost(post){
            await axios.post("http://127.0.0.1:8000/api/posts", post).then(res => {
                console.log(res);
                this.fetchPosts();
                return res;
            }).catch(err => {
                console.log(err);
                return err;
            })
        }

    },
    //this is like computed
    getters:{
        getPosts: (state) => state.posts,
        getPost: (state) => state.post,
        getTotal: (state)=> state.posts.length
    }
})


