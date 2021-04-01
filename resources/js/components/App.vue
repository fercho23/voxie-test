<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link" >Home</router-link>
                    <router-link to="/contacts/list" class="nav-item nav-link">Contact List</router-link>
                    <router-link to="/contacts/create" class="nav-item nav-link">Create Contact</router-link>
                </div>

            </div>
        </nav>

        <router-view> </router-view>
    </div>
</template>

<script>

</script>
