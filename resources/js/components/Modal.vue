<script setup>
defineProps({
    show: Boolean
})
</script>
<template>
    <div v-if="show" class="modal-mask">
        <div class="modal-container">
            <header class="modal-header">
                <h1><slot name="header"/></h1>
            </header>
            <div class="modal-content">
                <slot name="content"/>
            </div>
            <footer class="modal-footer">
                <button @click="$emit('close')">Close</button>
            </footer>
        </div>
    </div>
</template>
<style>
.modal-mask{
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, .4);
    display: grid;
    place-items: center
}
.modal-container{
    background: white;
    padding: 1rem;
    width: 75vw;
    max-width: 500px;

}
.modal-container form{
    display: flex;
    flex-direction: column;
}
</style>
