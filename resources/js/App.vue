<template>
    <div id="container">
        <div id="sidebar">
            <router-link class="sidebar_item" to="/admin/home">Home</router-link>
            <router-link class="sidebar_item" to="/admin/users">Users</router-link>
            <router-link class="sidebar_item" to="/admin/posts">Posts</router-link>
        </div>
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>
