<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {route} from "ziggy-js";

const props = defineProps(['user'])

console.log(props.user)

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Users</h2>
        </template>
        <div class="flex">
            <section class=" w-full p-[20px] overflow-hidden rounded-lg">
                <div class="mb-4">
                    <Link :href="route('dashboard.users.sign_in_as',[user.id])" class="btn btn-primary">Log in As user</Link>
                </div>
                <div class="h-100 text-white bg-gray-800 p-[20px] mx-auto rounded">
                    <ul>
                        <li class="flex" v-for="(key,item) in user">
                            <p class="w-[200px]">{{item}}</p>
                            <p>{{key}}</p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </AppLayout>
</template>
