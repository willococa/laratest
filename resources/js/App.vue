<template>
    <div id="container">
        <div id="sidebar">
            <router-link to="/admin/home">Home</router-link>
            <router-link to="/admin/users">Users</router-link>
        </div>
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>