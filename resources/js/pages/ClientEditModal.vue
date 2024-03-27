<template>
    <div class="modal-container">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-2xl font-bold">Edit Client</h2>
            </div>
            <div class="modal-body">
                <form @submit.prevent="submit" class="max-w-md mx-auto">
                    <div class="mb-4"> <label for="name" class="block text-gray-700 font-bold mb-2">Name</label> <input
                            v-model="form.name" type="text" id="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required> </div>
                    <div class="mb-4"> <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                        <input v-model="form.address" type="text" id="address"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required> </div>
                    <div class="mb-4"> <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                        <input v-model="form.phone" type="tel" id="phone"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required> </div>
                    <div class="mb-4"> <label for="country" class="block text-gray-700 font-bold mb-2">Country</label>
                        <select v-model="form.country_id" id="country"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="" disabled>Select a country</option>
                            <option v-for="country in countries" :key="country.id" :value="country.id">{{ country.name
                                }}</option>
                        </select> </div> 
                        <div class="flex justify-between mt-4"> 
                      <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" @click="cancel">
                        Cancel
                      </button>
                        <button
                        type="button"
                        @click="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        Update Client
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia'

export default {
    props: {
        client: Object,
        countries: Array,
    },
    setup(props) {
        const form = useForm({
            name: props.client.name,
            address: props.client.address,
            phone: props.client.phone,
            country_id: props.client.country_id,
        });

        const submit = () => {
            form.submit('put', `/clients/${props.client.id}`);
        };
        
        const cancel = () => {
          Inertia.visit('/')
        }

        return { form, submit, cancel };
    },
};
</script>
