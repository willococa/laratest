import axios from "axios";
import { defineStore } from "pinia";
export const usePostStore = defineStore("posts", {
    //this is like data{}
    state: () =>{
        return {
            posts: null
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
        }
    },
    //this is like computed
    getters:{
        getPosts: (state) => state.posts,
        getTotal: (state)=> state.posts.length
    }
})


