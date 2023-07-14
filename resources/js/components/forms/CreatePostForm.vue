<script setup>
import {computed, ref} from 'vue'
import {ErrorMessage, Form, Field} from 'vee-validate'
import * as yup from 'yup';
import Modal from "../Modal.vue"
import { useCategoryStore } from "../stores/CategoryStore"
import { usePostStore } from '../stores/PostStore';
let user_store = usePostStore()
let category_store = useCategoryStore()
category_store.fetchCategories()
let categories= computed(()=>category_store.getCategories)
// const MAX_FILE_SIZE = 102400; //100KB

const validFileExtensions = { image: ['jpg', 'gif', 'png', 'jpeg', 'svg', 'webp'] };

function isValidFileType(fileName, fileType) {
  return fileName && validFileExtensions[fileType].indexOf(fileName.split('.').pop()) > -1;
}
const schema = yup.object({
    title: yup.string().required(),
    excerpt: yup.string().required(),
    body: yup.string().required(),
    category_id: yup.number().required(),
    thumbnail: yup.mixed().required('Thumbnail is required')
        .test("is-valid-type", "Not a valid image type",
            value => isValidFileType(value && value.name.toLowerCase(), "image"))
        //   .test("is-valid-size", "Max allowed size is 100KB",
        //     value => value && value.size <= MAX_FILE_SIZE)

});



defineProps({
    show: Boolean
})

// Creates a submission handler
// It validate all fields and doesn't call your function unless all fields are valid
 const onSubmit =  async  (values) => {
    alert(JSON.stringify(values, null, 2));
    user_store.createPost(values)

};

</script>
<template>
    <Modal :show="show">
        <template v-slot:header>Create new Post</template>
        <template v-slot:content>
            <Form class="post-form" name="post" @submit="onSubmit" :validation-schema="schema" enctype="multipart/form-data">
                <Field name="title" placeholder="Title.."/>
                <ErrorMessage name="title" />
                <Field name="excerpt" placeholder="Excerpt.."/>
                <ErrorMessage name="excerpt" />
                <Field name="thumbnail"
                v-slot="{ handleChange, handleBlur }">
                    <input
                        type="file"
                        accept="image/*"
                        name="thumbnail"
                        id="thumbnail"
                        @change="handleChange" @blur="handleBlur"/>
                </Field>
                <ErrorMessage name="thumbnail" />
                <Field name="category_id" as="select" class="form-control">
                    <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                </Field>
                <ErrorMessage name="category_id" />
                <Field name="body" id="body" as="textarea" placeholder="Body..."></Field>
                <ErrorMessage name="body" />
                <button type="submit">Create</button>
            </Form>
        </template>
    </Modal>
</template>
