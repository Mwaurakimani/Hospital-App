<script setup>
import {Head, usePage} from '@inertiajs/vue3';
import {authPages, HomeRoutes} from "@/AppData/HomeModules.js";

const page = usePage()

const is_active = (item) => {
    const currentRoute = route().current();
    return item.supported.includes(currentRoute);
}


</script>

<template>
    <nav class="flex justify-between h-[60px] items-center bg-gray-800 shadow">
        <div class="px-[20px]">
            <h3 class="text-white">LOGO</h3>
        </div>
        <div>
            <ul class="p-0 m-0 flex gap-2">
                <Link v-for="item in HomeRoutes" as="li" :href="item.link" :class="{'active':is_active(item)}">{{item.name}}</Link>
            </ul>
        </div>
        <div class="px-[20px]">
            <ul v-if="page.props.auth.user == null">
                <Link v-for="item in authPages" as="li" :href="item.link" :class="{'active':is_active(item)}">{{item.name}}</Link>
            </ul>
            <ul v-else>
                <Link as="li" :href="'/dashboard'">Dashboard</Link>
            </ul>
        </div>
    </nav>
</template>

<style lang="scss" scoped>
nav {
    ul {
        @apply p-0 m-0 flex gap-2;
        li {
            @apply text-white px-4 py-1 rounded hover:bg-gray-600 cursor-pointer;
            &.active {
                @apply bg-blue-400
            }
        }
    }
}
</style>
