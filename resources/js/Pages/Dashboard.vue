<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

const props = defineProps(['stats'])

const panels = [
    {name: 'Doctor', icon_link: 'https://img.icons8.com/ios-filled/FFFFFF/medical-doctor.png',val:props.stats.doctors},
    {name: 'Patients', icon_link: 'https://img.icons8.com/fluency-systems-filled/50/FFFFFF/triangular-bandage.png',val:props.stats.patients},
    {name: 'Appointments', icon_link: 'https://img.icons8.com/material-sharp/24/FFFFFF/person-calendar.png',val:props.stats.appointments},
]


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Dashboard</h2>
        </template>
        <div class="flex gap-2">
            <section class="w-[70%] h-[200px] p-[10px]">
                <h5 class="text-white mb-4">Over View</h5>
                <ul class="flex gap-2 justify-between mb-[20px]">
                    <li v-for="item in panels" class="w-[33%] h-[100px] bg-gray-800 rounded  flex items-center justify-between p-[20px]">
                        <div class="w-1/2 text-white">
                            <p>{{item.val}}</p>
                            <p class="text-sm">{{ item.name }}</p>
                        </div>
                        <div class="w-1/2 grid place-items-center gap-2">
                            <div class="w-[50px] h-[50px]">
                                <img width="50" height="50" :src="item.icon_link" alt="medical-doctor"/>
                            </div>
                        </div>
                    </li>
                </ul>
                <h5 class="text-white mb-4">Patient Appointments</h5>
                <div>
                    <table>
                        <thead></thead>
                        <tbody></tbody>
                    </table>
                </div>
            </section>
            <section class="w-[30%] h-[200px] p-[10px]">
                <h4 class="text-white">Over View</h4>
            </section>
        </div>
    </AppLayout>
</template>
