<template>
    <div id="container">
        <div id="sidebar">
            <router-link>Home</router-link>
            <router-link>Users</router-link>
            <router-link>Posts</router-link>
        </div>
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>