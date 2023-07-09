import axios from "axios";
import { defineStore } from "pinia";
export const useUserStore = defineStore("users", {
    //this is like data{}
    state: () =>{
        return {
            users: null
        }

    },
    //this is like methods
    actions:{
        async fetchUsers(){
            await axios.get("http://127.0.0.1:8000/api/users").then(res => {
                let data = res.data
                this.$patch({
                    users: data.users
                })

            }). catch(err => {
                console.log(err);
                return err;
             })
        }
    },
    //this is like computed
    getters:{
        getUsers: (state) => state.users,
        getTotal: (state)=> state.users.length
    }
})


