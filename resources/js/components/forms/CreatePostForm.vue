<script setup>
import {computed} from 'vue'
import Modal from "../Modal.vue"
import { useCategoryStore } from "../stores/CategoryStore";
let store = useCategoryStore()
store.fetchCategories()
let categories= computed(()=>store.getCategories)
defineProps({
    show: Boolean
})
</script>
<template>
    <Modal :show="show">
        <template v-slot:header>Create new Post</template>
        <template v-slot:content>
            <form class="post-form" name="post" action="/api/posts" method="post" enctype="multipart/form-data">
                <input type="text" name="title" id="title" placeholder="Title..">
                <input type="text" name="excerpt" id="excerpt" placeholder="Excerpt..">
                <input type="file" name="thumbnail" id="thumbnail" placeholder="Thumbnail..">
                <select id="category" name="category" class="form-control">
                        <option v-for="category in categories" :value="category.id">{{ category.name }}</option>

                </select>
                <textarea name="body" id="body" placeholder="Body..."></textarea>
                <button type="submit">Create</button>
            </form>
        </template>
    </Modal>
</template>
