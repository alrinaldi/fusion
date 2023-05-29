<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex w-full px-2 py-2 rounded-md items-center bg-cyan-600 transition'
        : 'inline-flex w-full px-2 py-2 rounded-md items-center leading-5 text-gray-500 hover:bg-cyan-600 transition';
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
