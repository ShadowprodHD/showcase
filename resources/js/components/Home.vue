<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label for="name">Naam Customer</label>
                <input type="text" id="name" name="name" v-model="fields.naam" placeholder="customer name" required>
            </div>
            <div class="col-12">
                <label for="email">Email Customer</label>
                <input type="email" id="email" name="email" v-model="fields.email" placeholder="example@email.com" required>
            </div>
            <div class="col-12">
                <label for="logo">Logo</label>
                <input type="file" id="logo" v-model="fields.logo" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="button" v-on:click="saveCustomer">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home",
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
               fields: {
                   naam: '',
                   email: '',
                   logo: '',
               }
            };
        },
        methods: {
            saveCustomer: function () {
                let fields = this.fields;

                axios.post('/api/customer/create/', fields)
                    .then((response) => {
                        console.log(response.data);
                    }).catch((error) => {
                        console.log(error);
                    });
            }
        }
    }
</script>
