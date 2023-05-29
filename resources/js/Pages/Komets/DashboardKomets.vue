<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import HrPortalNav from '@/Components/HrPortalNav.vue';
import DataTable from 'datatables.net-vue3'
import DataTablesLib from 'datatables.net';
import 'datatables.net-select';
import KometsAdmin from '../../Components/KometsAdmin.vue';

DataTable.use(DataTablesLib);

// const props = defineProps({
//     masterData: {
//         type: Object,
//         default: () => ({}),
//     },
//     dept:{
//         type:String,
//         default: () => ({}),
//     }

// });

</script>

<template>
    <AppLayout title="Data Produk">
        <template #sidenav>

            <KometsAdmin>
            </KometsAdmin>
            <!-- <div v-if="dept!='HR'">
                <HrPortalNav>
             </HrPortalNav>
            </div>
            <div v-else>
                <HrPortalAdminNav></HrPortalAdminNav>
            </div> -->


        </template>
        {{ dept }}
    </AppLayout>

</template>

