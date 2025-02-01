<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {getAccountType} from "@/functions.js";

//dashboards
import AdminDashboard from "@/Pages/Dashboard/Dashboards/AdminDashboard.vue";
import NurseDashboard from "@/Pages/Dashboard/Dashboards/NurseDashboard.vue";

const props = defineProps(['dashboardData'])
const accountType = getAccountType()

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight">Dashboard</h2>
        </template>
        <NurseDashboard v-if="accountType == 'Nurse'" :dashboardData/>
        <AdminDashboard v-else-if="accountType == 'Administrator'" :stats/>
    </AppLayout>
</template>
