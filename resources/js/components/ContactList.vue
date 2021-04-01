<template>
    <div>
        <h2 class="text-center">Contact List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="contact in contacts" :key="contact.id">
                <td>{{ contact.id }}</td>
                <td>{{ contact.name }}</td>
                <td>{{ contact.email }}</td>
                <td>
                    <button class="btn btn-danger" @click="deleteContact(contact.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                contacts: []
            }
        },
        created() {
            this.axios
                .get('/api/contacts/')
                .then(response => {
                    this.contacts = response.data;
                });
        },
        methods: {
            deleteContact(id) {
                this.axios
                    .delete(`/api/contacts/${id}`)
                    .then(response => {
                        let i = this.contacts.map(data => data.id).indexOf(id);
                        this.contacts.splice(i, 1)
                    });
            }
        }
    }
</script>