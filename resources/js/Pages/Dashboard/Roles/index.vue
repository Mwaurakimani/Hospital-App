<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps(['roles'])


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Roles</h2>
        </template>
        <div class="flex">
            <section class=" w-full p-[20px] overflow-hidden rounded-lg">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in roles">
                        <td>{{item.id}}</td>
                        <td>{{item.name}}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </AppLayout>
</template>
