<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/AppComponents/Pagination.vue";
import {ref, watch} from "vue";
import {Inertia} from "@inertiajs/inertia";
import {route} from "ziggy-js";

const props = defineProps(['roles', 'users'])
const roleSet = ref(null)

watch(roleSet, (newValue,oldValue) => {
    window.location.href = route('dashboard.roles.list')+'?role=' + roleSet.value;
})

</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Roles</h2>
        </template>

        <!-- Ribbon below header for Role Selection -->
        <div class="bg-gray-700 py-2 px-4 flex justify-between items-center mt-6 mx-[20px] mb-2 rounded">
            <div class="flex text-sm items-center">
                <label for="roleSelect" class="text-white mr-2 mb-0 p-0 w-[200px]">Select Role:</label>
                <select
                    id="roleSelect"
                    class="form-select !text-sm !p-1 h-[30px] bg-gray-800 border border-gray-600 rounded-md outline-none focus:ring focus:ring-blue-500"
                    v-model="roleSet"
                >
                    <option value="" selected disabled>Select a role</option>
                    <option v-for="role in roles" :key="role.id" :value="role.id">
                        {{ role.name }}
                    </option>
                </select>
            </div>
        </div>

        <!-- Table for Listed People in the Role -->
        <div class="mt-4 mx-[20px]">
            <table class="w-full text-sm text-left text-gray-400 border border-gray-600 bg-gray-800 rounded overflow-hidden">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                </tr>
                </thead>
                <tbody>
                <Link :href="route('dashboard.users.view',[user.id])" as="tr" v-for="user in users" :key="user.id" class="bg-gray-900 border-b border-gray-600">
                    <td class="px-6 py-2">{{ user.id }}</td>
                    <td class="px-6 py-2">{{ user.name }}</td>
                    <td class="px-6 py-2">{{ user.email }}</td>
                    <td class="px-6 py-2">{{ user.account_type }}</td>
                </Link>
                </tbody>
            </table>
            <Pagination></Pagination>
        </div>
    </AppLayout>
</template>


