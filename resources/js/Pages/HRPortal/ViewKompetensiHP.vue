<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import HrPortalNav from '@/Components/HrPortalNav.vue';
import DataTable from 'datatables.net-vue3'
import DataTablesLib from 'datatables.net';
import 'datatables.net-select';

DataTable.use(DataTablesLib);

const props = defineProps({
    masterData: {
        type: Object,
        default: () => ({}),
    },

});

</script>

<template>
    <AppLayout title="Data Produk">
        <template #sidenav>
            <HrPortalNav>
        </HrPortalNav>

        </template>





    </AppLayout>

</template>

