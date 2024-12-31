<script setup>
import {ref} from 'vue';
import {Head, Link, router} from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {route} from "ziggy-js";

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);
const logout = () => {
    router.post(route('logout'));
};

const adminRoutes = [
    {
        name:'Roles',
        link:'dashboard.roles.list',
        supported:[
            'dashboard.roles.list',
            'dashboard'
        ]
    }
]

function is_active(module){
    for(let key in module['supported']){
        if(route().current(module['supported'][key])){
            return true;
        }
    }
    return false;
}


</script>

<template>
    <div class="overflow-hidden">
        <Head :title="title"/>

        <div class="h-[100vh] flex overflow-hidden">
            <section class="w-[200px] h-screen bg-gray-800">
                <div class="w-full mb-[20px] h-[50px] grid place-items-center">
                    <ApplicationMark class="block h-9 w-auto"/>
                </div>
                <ul class="py-0 px-[10px] mx-0 ml-2">
                    <h5 class="text-white mb-[10px]">Application</h5>
                    <Link :href="route('dashboard')" as="li" class="NavigationLink" :class="{'active':route().current('dashboard')}">Dashboard</Link>
                    <Link :href="route('dashboard')" as="li" class="NavigationLink" :class="{'active':route().current('patients')}">Patients</Link>
                    <Link :href="route('dashboard')" as="li" class="NavigationLink" :class="{'active':route().current('doctors')}">Doctors</Link>
                    <hr class="border-gray-400 mb-[20px]"/>
                    <h5 class="text-white mb-[10px]">Admin</h5>
                    <Link v-for="module in adminRoutes" :href="route(module.link)" as="li" :class="['NavigationLink',{'active':is_active(module),}]">{{module.name}}</Link>
                </ul>
            </section>
            <section class="h-screen w-[calc(100%-200px)] overflow-auto">
                <header v-if="$slots.header" class="shadow bg-gray-800 flex justify-between items-center pr-3 sticky-top">
                    <div class="py-2 px-4 sm:px-6 text-white lg:px-8 ">
                        <slot name="header"/>
                    </div>
                    <div class="ms-3 relative">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <button v-if="$page.props.jetstream.managesProfilePhotos"
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="size-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                </button>

                                <span v-else class="inline-flex rounded-md">
                                            <button type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                                </svg>
                                            </button>
                                        </span>
                            </template>

                            <template #content>
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-900">
                                    Manage Account
                                </div>

                                <DropdownLink :href="route('profile.show')">
                                    Profile
                                </DropdownLink>

                                <div class="border-t border-gray-200"/>

                                <!-- Authentication -->
                                <form @submit.prevent="logout">
                                    <DropdownLink as="button">
                                        Log Out
                                    </DropdownLink>
                                </form>
                            </template>
                        </Dropdown>
                    </div>
                </header>
                <main class="w-100">
                    <slot/>
                </main>
            </section>
        </div>

    </div>
</template>
<style lang="css" scoped>
.NavigationLink {
    @apply text-white bg-gray-700 rounded-sm py-1.5 px-3 mb-[10px] cursor-pointer hover:bg-blue-500 transition duration-200 ease-in-out duration-150;

    &.active {
        @apply bg-blue-600;
    }
}
</style>
