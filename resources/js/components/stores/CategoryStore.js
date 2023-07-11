import axios from "axios";
import { defineStore } from "pinia";
export const useCategoryStore = defineStore("categories", {
    //this is like data{}
    state: () =>{
        return {
            categories: null
        }

    },
    //this is like methods
    actions:{
        async fetchCategories(){
            await axios.get("http://127.0.0.1:8000/api/categories").then(res => {
                let data = res.data
                console.log(data.data);
                this.$patch({
                    categories: data.categories
                })

            }). catch(err => {
                console.log(err);
                return err;
             })
        }
    },
    //this is like computed
    getters:{
        getCategories: (state) => state.categories,
        getTotal: (state)=> state.categorys.length
    }
})


