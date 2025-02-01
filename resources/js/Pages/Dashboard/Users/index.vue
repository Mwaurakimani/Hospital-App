<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {route} from "ziggy-js";
import Pagination from "@/AppComponents/Pagination.vue";

const props = defineProps(['users'])


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Users</h2>
        </template>

        <div class="my-3 mx-3">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Active Users -->
                <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Active Users</h3>
                    <p class="text-3xl font-semibold">128</p>
                    <p class="text-sm mt-2">Total number of users currently active in the system.</p>
                </div>

                <!-- Deleted Users -->
                <div class="bg-red-600 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Deleted Users</h3>
                    <p class="text-3xl font-semibold">15</p>
                    <p class="text-sm mt-2">Users who have been removed from the system.</p>
                </div>

                <!-- Roles Available -->
                <div class="bg-green-600 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Roles Available</h3>
                    <p class="text-3xl font-semibold">5</p>
                    <p class="text-sm mt-2">The number of unique roles defined for users.</p>
                </div>

                <!-- Pending Role Assignments -->
                <div class="bg-yellow-600 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Pending Role Assignments</h3>
                    <p class="text-3xl font-semibold">10</p>
                    <p class="text-sm mt-2">User accounts waiting for role assignment.</p>
                </div>
            </div>
        </div>

        <!-- Input Section Ribbon -->
        <div class="bg-gray-700 py-2 px-4 flex justify-between items-center mx-3 mb-4 rounded shadow-md">
            <!-- Add User Button -->
            <button
                class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 shadow-md font-semibold"
            >
                Add User
            </button>

            <!-- Search User Input -->
            <div class="flex items-center space-x-3">
                <label for="searchUser" class="text-white text-sm">Search User:</label>
                <input
                    id="searchUser"
                    type="text"
                    placeholder="Enter name or email"
                    class="bg-gray-800 text-white border border-gray-600 p-2 rounded-md outline-none focus:ring focus:ring-blue-500 w-[250px]"
                />
            </div>
        </div>

        <div class="flex">
            <section class=" w-full p-[20px] overflow-hidden rounded-lg">
                <table class="w-full table-sm !text-sm text-sm text-left text-gray-400 border border-gray-600 bg-gray-800 rounded overflow-hidden">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Account Type</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in users" :key="item.id" @click="route('dashboard.users.view', [item.id])" class="bg-gray-900 border-b border-gray-600 hover:bg-gray-700 transition">
                        <td class="px-6 py-2">{{ item.id }}</td>
                        <td class="px-6 py-2">{{ item.name }}</td>
                        <td class="px-6 py-2">{{ item.email }}</td>
                        <td class="px-6 py-2">{{ item.account_type }}</td>
                    </tr>
                    </tbody>
                </table>
                <Pagination></Pagination>
            </section>
        </div>
    </AppLayout>
</template>
