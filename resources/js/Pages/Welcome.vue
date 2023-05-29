<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="carousel w-full h-screen">
            <div id="slide1" class="carousel-item relative w-full">
                <img :src="'../storage/images/fusionhah.gif'" alt="image" class="rounded-lg w-full my-7 mx-7"/>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide2" class="carousel-item relative w-full">
                <img :src="'../storage/images/slide2.jpeg'" class="rounded-lg w-full my-7 mx-7" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <img :src="'../storage/images/slide3.jpeg'" class="rounded-lg w-full my-7 mx-7" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide4" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide4" class="carousel-item relative w-full">
                <img :src="'../storage/images/slide4.jpeg'" class="rounded-lg w-full my-7 mx-7" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div class="fixed top-1 left-0 px-7 text-sm text-gray-700">
                FUSION - Fasilitas Unifikasi Sistem Integrasi Online
            </div>
            <div v-if="canLogin" class="fixed top-0 right-0 px-7 sm:block">
                <Link v-if="$page.props.user" :href="route('home')" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</Link>

                <template v-else>
                    <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</Link>
                </template>
            </div>
        </div>
        <div class="absolute flex justify-center inset-x-0 bottom-0 w-full py-2 gap-2">
            <a href="#slide1" class="btn btn-sm">1</a>
            <a href="#slide2" class="btn btn-sm">2</a>
            <a href="#slide3" class="btn btn-sm">3</a>
            <a href="#slide4" class="btn btn-sm">4</a>
        </div>
    </div>
</template>
