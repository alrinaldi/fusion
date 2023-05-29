<script setup>
import BaseLayout from '@/Layouts/BaseLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <BaseLayout title="Dashboard">
        <div class="sm:py-1 lg:py-3 sm:px-1 lg:px-3 2xl:py-12 2xl:px-12">
            <div class="grid grid-cols-2 gap-1 mx-1 sm:gap-4 sm:grid-cols-4 2xl:gap-12">
                <Link :href="route('deltas.data_produk')">
                    <div class="text-center">
                        <img :src="'../storage/images/deltas.png'" alt="Shoes" class="rounded-md"/>
                        <div class="font-bold mt-1">
                            DELTAS - Delivery Tag System
                        </div>
                    </div>
                </Link>
                <Link :href="route('fams.homefams')">
                    <div class="text-center">
                        <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                        <div class="font-bold mt-1 text-center">
                            FAMS (Fixed Asset Managament System)
                        </div>
                    </div>
                </Link>
                <Link :href="route('hrportal.dashboardhp')">
                    <div class="text-center">
                        <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                        <div class="font-bold mt-1">
                            HR Portal
                        </div>
                    </div>
                </Link>
                <Link :href="route('komets.dashboardkomet')">
                    <div class="text-center">
                        <img :src="'../storage/images/empty.png'" alt="Shoes" class="rounded-md"/>
                        <div class="font-bold mt-1">
                            Komets
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
        </div>
    </BaseLayout>
</template>

