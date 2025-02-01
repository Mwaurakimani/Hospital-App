<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {route} from "ziggy-js";

const props = defineProps(['users'])


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Patients</h2>
        </template>
        <div class="flex">
            <section class=" w-full p-[20px] overflow-hidden rounded-lg">
                <table class="table table-dark table-striped table-hover cursor-pointer">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Appointments</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <Link :href="route('dashboard.users.view',[item.id])" as="tr" v-for="item in users">
                        <td>{{item.id}}</td>
                        <td>{{item.name}}</td>
                        <td>{{item.phone}}</td>
                        <td>{{item.email}}</td>
                        <td>{{item.appointments_count}}</td>
                        <td>
                            <div>
                                <button class="btn btn-primary mx-2 btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </td>
                    </Link>
                    </tbody>
                </table>
            </section>
        </div>
    </AppLayout>
</template>
