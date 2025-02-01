<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavigation from "@/AppComponents/HomeNavigation.vue";
import Carousel from "@/AppComponents/CarouselGallery.vue";
</script>

<template>
    <Head title="Welcome" />
    <HomeNavigation class="mb-4"></HomeNavigation>
    <section id="banner" class="container h-[500px] rounded mb-4">
    </section>
    <section class="temp-container container">

    </section>

</template>

<style lang="scss" scoped>
#banner {
}
</style>
