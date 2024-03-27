<template>
  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Create Client</h1>
    <form @submit.prevent="submit" class="max-w-md mx-auto">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
        <input v-model="form.name" type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
        <input v-model="form.address" type="text" id="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
        <input v-model="form.phone" type="tel" id="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      <div class="mb-4">
        <label for="country" class="block text-gray-700 font-bold mb-2">Country</label>
        <select v-model="form.country_id" id="country" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <option value="" disabled>Select a country</option>
          <option v-for="country in countries" :key="country.id" :value="country.id">{{ country.name }}</option>
        </select>
      </div>
      <div class="flex justify-between">
        <button type="button" @click="cancel" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Cancel
        </button>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Create Client
        </button>
      </div>
    </form>
  </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
  props: {
    countries: Array,
  },
  setup() {
    const form = useForm({
      name: '',
      address: '',
      phone: '',
      country_id: null,
    })

    const submit = () => {
      form.submit('post', '/clients')
    }

    const cancel = () => {
      Inertia.visit('/')
    }

    return { form, submit, cancel }
  },
}
</script>
