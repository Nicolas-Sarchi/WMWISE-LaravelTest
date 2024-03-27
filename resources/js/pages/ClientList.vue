<template>
  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Clients</h1>
    <table class="w-full table-auto">
      <thead>
        <tr class="bg-gray-200">
          <th class="px-4 py-2">Name</th>
          <th class="px-4 py-2">Address</th>
          <th class="px-4 py-2">Phone</th>
          <th class="px-4 py-2">Country</th>
          <th class="px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="client in clients"
          :key="client.id"
          class="odd:bg-gray-100 even:bg-white"
        >
          <td class="px-4 py-2">{{ client.name }}</td>
          <td class="px-4 py-2">{{ client.address }}</td>
          <td class="px-4 py-2">{{ client.phone }}</td>
          <td class="px-4 py-2">{{ client.country.name }}</td>
          <td class="px-4 py-2 flex gap-2"> <!-- Agregado gap-2 para separación horizontal -->
            <a
              :href="`/clients/${client.id}/edit`"
              class="text-blue-600 hover:text-blue-800"
            >
              Edit
            </a>
            <a
              @click.prevent="confirmDeleteClient(client.id)"
              class=" delete text-red-600 hover:text-red-800"
            >
              Delete
            </a>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="flex justify-center mt-4"> <!-- Centrar el botón usando flex y justify-center -->
      <a
        href="/clients/create"
        class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"
      >
        Create New Client
      </a>
    </div>
  </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import swal from 'sweetalert';


export default {
  props: {
    clients: Array,
    countries: Array,
  },
  methods: {

    confirmDeleteClient(clientId) {
      
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this client!",
        icon: "warning",
        buttons: true,
        dangerMode: true,

      }).then((willDelete) => {
        if (willDelete) {
          this.deleteClient(clientId);
        }

        
      })
    },
    deleteClient(clientId) {
      Inertia.delete(`/clients/${clientId}`);
    },
  },
};
</script>
