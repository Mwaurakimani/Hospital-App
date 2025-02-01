<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {route} from "ziggy-js";

const props = defineProps(['user', 'appointments'])
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Users</h2>
        </template>
        <div class=" flex gap-x-[20px] p-[20px] mb-1">
            <Link :href="route('dashboard.users.sign_in_as',[user.id])" class="btn btn-primary">Log in As user</Link>
            <div class="flex items-center justify-center">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="flex">
            <section class="p-[20px] rounded-lg">
                <div class=" user-card h-100 w-fit text-white bg-gray-800 p-[20px] rounded">
                    <div class="w-[400px] h-[400px] bg-gray-200">

                    </div>
                    <ul>
                        <h3 class="mb-[20px]">Account Details</h3>
                        <li>
                            <p>ID:</p>
                            <p>{{ user.id }}</p>
                        </li>
                        <li>
                            <p>Name</p>
                            <p>{{ user.name }}</p>
                        </li>
                        <li>
                            <p>Email</p>
                            <p>{{ user.email }}</p>
                        </li>
                        <li>
                            <p>Account Type</p>
                            <p>{{ user.account_type }}</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="p-[20px] w-full rounded-lg">
                <div class=" user-card h-100 w-full text-white bg-gray-800 p-[20px] rounded">
                    <h3 class="mb-[20px]">Vitals</h3>
                </div>
            </section>
        </div>
        <section class="mx-[20px] rounded ">
            <ul class="navigation-tab text-white">
                <li class="active">Appointments</li>
            </ul>
            <div class="bg-gray-800 p-[10px]">
                <div class=" rounded" v-if="appointments.length > 0">
                    <table class="table table-dark table-striped table-hover cursor-pointer">
                        <thead>
                        <tr>
                            <th scope="col">Ref</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date</th>
                            <th scope="col">status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="appointment in appointments">
                            <td>{{ appointment.id }}</td>
                            <td>{{ appointment.patient.first_name + ' ' + appointment.patient.last_name }}</td>
                            <td>{{ appointment.id }}</td>
                            <td>{{ appointment.id }}</td>
                            <td>{{ appointment.id }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </AppLayout>
</template>

<style lang="scss" scoped>
@use "index";
.user-card {
    @apply flex gap-[20px];
    div {
        @apply rounded;
    }

    ul {
        @apply w-[400px] ;
        li {
            @apply flex w-full border-b border-gray-700 mb-[10px] px-[10px];
            p:first-of-type {
                @apply w-[200px]  ;
            }
        }
    }
}
</style>
