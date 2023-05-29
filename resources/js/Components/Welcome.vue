<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="grid grid-cols-2 gap-1 mx-1 sm:gap-4 sm:grid-cols-4 2xl:gap-12">
        <Link :href="route('deltas.index')">
            <div class="text-center">
                <img :src="'../storage/images/deltas.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    DELTAS - Delivery Tag System
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Empty Space for New Application
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Empty Space for New Application
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Empty Space for New Application
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Empty Space for New Application
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Empty Space for New Application
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Empty Space for New Application
                </div>
            </div>
        </Link>
        <Link :href="route('home')">
            <div class="text-center">
                <img :src="'../storage/images/management.png'" alt="Shoes" class="rounded-md"/>
                <div class="font-bold mt-1">
                    Application Access Management
                </div>
            </div>
        </Link>
    </div>
</template>
