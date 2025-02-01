<script setup>

const props = defineProps(['stats'])


const panels = [
    {name: 'Doctor', icon_link: 'https://img.icons8.com/ios-filled/FFFFFF/medical-doctor.png', val: props.stats.doctors},
    {name: 'Doctor', icon_link: 'https://img.icons8.com/ios-filled/FFFFFF/medical-doctor.png', val: props.stats.doctors},
    {name: 'Patients', icon_link: 'https://img.icons8.com/fluency-systems-filled/50/FFFFFF/triangular-bandage.png', val: props.stats.patients},
    {name: 'Appointments', icon_link: 'https://img.icons8.com/material-sharp/24/FFFFFF/person-calendar.png', val: props.stats.appointments},
]
</script>
<template>
  <div class="flex gap-2">
    <section class="w-[70%] h-[200px] p-[10px]">
      <ul class="flex gap-2 justify-between mb-[20px]">
        <li v-for="item in panels" class="w-[25%] h-[100px] bg-gray-800 rounded  flex items-center justify-between p-[20px]">
          <div class="w-1/2 text-white">
            <p>{{ item.val }}</p>
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
      <div class="w-full">
        <table class="table table-dark table-striped table-hover cursor-pointer">
          <thead class="bg-gray-800">
          <tr>
            <th>REF</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <tr v-for="item in 10">
            <td>A-001</td>
            <td>Peter Mwaura</td>
            <td>0719445697</td>
            <td>Rajesh</td>
            <td>
              <p>00/00/0000</p>
              <p>00:00 am</p>
            </td>
            <td>Confirmed</td>
          </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section class="w-[30%] h-[200px] p-[10px]">
      <h4 class="text-white">Todays Appointment</h4>
      <div class="bg-gray-600 rounded w-full mb-[20px] text-white p-[10px] hover:bg-gray-700 hover:cursor-pointer" v-for="item in 10">
        <h5 class="mb-[10px]">Mwaura Kimani</h5>
        <div class="bg-gray-500 p-[10px] rounded flex justify-between px-[20px] text-sm">
          <div class="flex items-center  justify-between">
            <div class="w-[40px] h-[40px] bg-red-500 rounded"></div>
            <p class="p-1 m-0">Monday July 25</p>
          </div>
          <div class="flex items-center  justify-between">
            <div class="w-[40px] h-[40px] bg-red-500 rounded"></div>
            <p class="p-1 m-0">Monday July 25</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: 'AdminDashboard'
}
</script>
