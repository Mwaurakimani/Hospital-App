<script setup>
import {Head} from '@inertiajs/vue3';
import HomeNavigation from "@/AppComponents/HomeNavigation.vue";

const doctors = [
    {
        id: 1,
        name: "Dr. John Doe",
        email: "john.doe@example.com",
        practice: "Cardiology",
        image: "https://picsum.photos/seed/1/150/200",
    },
    {
        id: 2,
        name: "Dr. Jane Smith",
        email: "jane.smith@example.com",
        practice: "Pediatrics",
        image: "https://picsum.photos/seed/2/150/200",
    },
    {
        id: 3,
        name: "Dr. Emily Johnson",
        email: "emily.johnson@example.com",
        practice: "Dermatology",
        image: "https://picsum.photos/seed/3/150/200",
    },
    {
        id: 4,
        name: "Dr. Sarah White",
        email: "sarah.white@example.com",
        practice: "Neurology",
        image: "https://picsum.photos/seed/4/150/200",
    },
    {
        id: 5,
        name: "Dr. James Brown",
        email: "james.brown@example.com",
        practice: "Orthopedics",
        image: "https://picsum.photos/seed/5/150/200",
    },
    {
        id: 6,
        name: "Dr. William Green",
        email: "william.green@example.com",
        practice: "Psychiatry",
        image: "https://picsum.photos/seed/6/150/200",
    },
    {
        id: 7,
        name: "Dr. Olivia Scott",
        email: "olivia.scott@example.com",
        practice: "Oncology",
        image: "https://picsum.photos/seed/7/150/200",
    },
    {
        id: 8,
        name: "Dr. Henry Adams",
        email: "henry.adams@example.com",
        practice: "Cardiology",
        image: "https://picsum.photos/seed/8/150/200",
    },
    {
        id: 9,
        name: "Dr. Sophia Carter",
        email: "sophia.carter@example.com",
        practice: "Radiology",
        image: "https://picsum.photos/seed/9/150/200",
    },
    {
        id: 10,
        name: "Dr. Daniel Harris",
        email: "daniel.harris@example.com",
        practice: "Gastroenterology",
        image: "https://picsum.photos/seed/10/150/200",
    },
    {
        id: 11,
        name: "Dr. Emma Wilson",
        email: "emma.wilson@example.com",
        practice: "Pediatrics",
        image: "https://picsum.photos/seed/11/150/200",
    },
    {
        id: 12,
        name: "Dr. Lucas Reed",
        email: "lucas.reed@example.com",
        practice: "Dermatology",
        image: "https://picsum.photos/seed/12/150/200",
    },
    {
        id: 13,
        name: "Dr. Amelia Cooper",
        email: "amelia.cooper@example.com",
        practice: "Neurology",
        image: "https://picsum.photos/seed/13/150/200",
    },
    {
        id: 14,
        name: "Dr. Benjamin Jenkins",
        email: "benjamin.jenkins@example.com",
        practice: "Psychiatry",
        image: "https://picsum.photos/seed/14/150/200",
    },
    {
        id: 15,
        name: "Dr. Mia Young",
        email: "mia.young@example.com",
        practice: "Orthopedics",
        image: "https://picsum.photos/seed/15/150/200",
    },
    {
        id: 16,
        name: "Dr. Ethan Ross",
        email: "ethan.ross@example.com",
        practice: "Radiology",
        image: "https://picsum.photos/seed/16/150/200",
    },
    {
        id: 17,
        name: "Dr. Harper Lee",
        email: "harper.lee@example.com",
        practice: "Gastroenterology",
        image: "https://picsum.photos/seed/17/150/200",
    },
    {
        id: 18,
        name: "Dr. Alexander Hill",
        email: "alexander.hill@example.com",
        practice: "Cardiology",
        image: "https://picsum.photos/seed/18/150/200",
    },
    {
        id: 19,
        name: "Dr. Grace King",
        email: "grace.king@example.com",
        practice: "Oncology",
        image: "https://picsum.photos/seed/19/150/200",
    },
    {
        id: 20,
        name: "Dr. Michael Wright",
        email: "michael.wright@example.com",
        practice: "Pediatrics",
        image: "https://picsum.photos/seed/20/150/200",
    },
];

const uniquePractices = [
    "Cardiology",
    "Pediatrics",
    "Dermatology",
    "Orthopedics",
    "Neurology",
    "Oncology",
    "Radiology",
    "Psychiatry",
    "Gastroenterology",
    "Emergency Medicine"
];
</script>

<template>
    <Head title="Welcome"/>

    <HomeNavigation class="mb-4"></HomeNavigation>

    <section class=" mx-[100px]">
        <h1 class="mb-4 text-white">Doctors</h1>
        <div class="flex gap-2">
            <article class="bg-gray-700 p-4 rounded shadow-md w-[250px] sticky top-0 h-[calc(100vh_-_20px)]">
                <!-- Search Input -->
                <div class="mb-6">
                    <label for="search" class="text-white block text-sm font-bold mb-2">Search</label>
                    <input
                        id="search"
                        type="search"
                        placeholder="Search by name or email"
                        class="w-full p-2 rounded bg-gray-800 text-white border border-gray-600 placeholder-gray-500 focus:border-blue-500"
                    />
                </div>

                <!-- Practices -->
                <div class="mb-6">
                    <h4 class="text-white font-bold mb-3">Practices</h4>
                    <ul class="h-[150px] overflow-auto text-sm bg-gray-800 p-3 rounded border border-gray-600">
                        <li
                            v-for="practice in uniquePractices"
                            :key="practice"
                            class="flex items-center gap-2 mb-2"
                        >
                            <input
                                type="checkbox"
                                :id="`practice-${practice}`"
                                class="w-4 h-4 focus:ring-2 focus:ring-blue-600"
                            />
                            <label :for="`practice-${practice}`" class="text-white">{{ practice }}</label>
                        </li>
                    </ul>
                </div>

                <!-- Availability -->
                <div class="mb-6">
                    <h4 class="text-white font-bold mb-3">Availability</h4>
                    <select
                        name="availability"
                        class="w-full rounded p-2 bg-gray-800 text-white border border-gray-600 focus:border-blue-500"
                    >
                        <option value="">All</option>
                        <option value="today">Available Today</option>
                        <option value="week">Available This Week</option>
                        <option value="next">Next Available</option>
                    </select>
                </div>

                <!-- Gender -->
                <div class="mb-6">
                    <h4 class="text-white font-bold mb-3">Gender</h4>
                    <ul class="text-sm">
                        <li class="flex items-center gap-2 mb-2">
                            <input id="male" type="radio" name="gender" class="w-4 h-4">
                            <label for="male" class="text-white">Male</label>
                        </li>
                        <li class="flex items-center gap-2 mb-2">
                            <input id="female" type="radio" name="gender" class="w-4 h-4">
                            <label for="female" class="text-white">Female</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input id="other" type="radio" name="gender" class="w-4 h-4">
                            <label for="other" class="text-white">Other</label>
                        </li>
                    </ul>
                </div>

                <!-- Experience -->
                <div class="mb-6">
                    <h4 class="text-white font-bold mb-3">Experience</h4>
                    <ul class="text-sm">
                        <li class="flex items-center gap-2 mb-2">
                            <input id="exp-less-5" type="radio" name="experience" class="w-4 h-4">
                            <label for="exp-less-5" class="text-white">Less than 5 years</label>
                        </li>
                        <li class="flex items-center gap-2 mb-2">
                            <input id="exp-5-10" type="radio" name="experience" class="w-4 h-4">
                            <label for="exp-5-10" class="text-white">5-10 years</label>
                        </li>
                        <li class="flex items-center gap-2">
                            <input id="exp-more-10" type="radio" name="experience" class="w-4 h-4">
                            <label for="exp-more-10" class="text-white">More than 10 years</label>
                        </li>
                    </ul>
                </div>

                <!-- Budget (Consultation Fee) -->
                <div class="mb-6">
                    <h4 class="text-white font-bold mb-3">Consultation Fee</h4>
                    <ul class="text-sm">
                        <li class="flex items-center gap-2 mb-2">
                            <input id="free" type="radio" name="fee" class="w-4 h-4">
                            <label for="free" class="text-white">Free</label>
                        </li>
                        <li class="flex items-center gap-2 mb-2">
                            <input id="50" type="radio" name="fee" class="w-4 h-4">
                            <label for="50" class="text-white">Less than $50</label>
                        </li>
                        <li class="flex items-center gap-2 mb-2">
                            <input id="50-100" type="radio" name="fee" class="w-4 h-4">
                            <label for="50-100" class="text-white">$50-$100</label>
                        </li>
                    </ul>
                </div>

                <!-- Clear Filters Button -->
                <div class="mt-6">
                    <button
                        @click="clearFilters"
                        class="w-full p-2 bg-red-600 text-white font-bold rounded hover:bg-red-700 transition"
                    >
                        Clear Filters
                    </button>
                </div>
            </article>
            <section style="width: calc(100% - 250px)">
                <ul class="m-0 p-[10px] flex  flex-wrap justify-around">
                    <li
                        v-for="doctor in doctors"
                        :key="doctor.id"
                        class="col col-lg-3 mb-4"
                    >
                        <div class="card shadow-sm h-100">
                            <!-- Doctor's Image with 1:1 Ratio -->
                            <div class="ratio ratio-1x1">
                                <img
                                    :src="doctor.image"
                                    :alt="doctor.name"
                                    class="card-img-top object-fit-cover"
                                />
                            </div>

                            <!-- Doctor's Body -->
                            <div class="card-body text-center d-flex flex-column">
                                <h5 class="card-title mb-1">{{ doctor.name }}</h5>
                                <p class="card-text text-muted mb-1">{{ doctor.email }}</p>
                                <p class="card-text text-primary font-weight-bold">{{ doctor.practice }}</p>

                                <!-- Book Appointment Button -->
                                <button class="btn btn-primary mt-auto">
                                    Book Appointment
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </section>
</template>

<style lang="scss" scoped>
#banner {
}

.carousel-item img {
    object-fit: cover;
}
</style>
