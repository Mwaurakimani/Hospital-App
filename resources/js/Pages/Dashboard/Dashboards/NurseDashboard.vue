<script setup>
import Pagination from "@/AppComponents/Pagination.vue";
import {route} from "ziggy-js";
import BookAppointment from "@/Pages/Dashboard/Dashboards/Components/BookAppointment.vue";

const props = defineProps(['dashboardData'])


const bookPatientAppointMent = () => {
    console.log()
}

</script>
<template>
    <teleport to="body">
        <div class=" w-[100vw] h-[100vh] absolute flex items-center justify-center top-0 left-0" style="z-index: 10000">
            <BookAppointment/>
        </div>
    </teleport>

    <div class="flex gap-2">
        <section class="w-full h-[200px] p-[20px]">
            <h5 class="text-white mb-4">All Patient Appointments</h5>
            <div class="w-full">
                <table class="table table-dark text-sm table-striped table-hover cursor-pointer">
                    <thead class="bg-gray-800">
                    <tr>
                        <th>REF</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="appointment in dashboardData.appointments">
                        <td>AP-{{ appointment.id }}</td>
                        <td>{{ appointment.patient.first_name }} {{ appointment.patient.last_name }} {{ appointment.patient.middle_name }}</td>
                        <td>{{ appointment.patient.phone }}</td>
                        <td>{{ appointment.doctor.first_name }} {{ appointment.doctor.last_name }} {{ appointment.doctor.middle_name }}</td>
                        <td>{{ appointment.date }}</td>
                        <td>{{ appointment.time }}</td>
                        <td>{{ appointment.status == 1 ? 'Confirmed' : 'Pending' }}</td>
                    </tr>
                    </tbody>
                </table>
                <Pagination></Pagination>
            </div>
        </section>
        <section class="w-[300px] h-[200px] p-[10px]">
            <h4 class="text-white mb-4">Quick Actions</h4>
            <ul>
                <li class="mb-2">
                    <Link as="button" :href="route('dashboard.users.create')" class="block w-100 btn btn-primary">Register Patient</Link>
                </li>
                <li class="mb-2">
                    <button class="block w-100 btn btn-primary" @click.prevent="bookPatientAppointMent">Book Appointment</button>
                </li>
            </ul>
        </section>
    </div>
</template>
