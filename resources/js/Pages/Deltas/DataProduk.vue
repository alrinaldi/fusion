<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    dataProduk: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <AppLayout title="Data Produk">
        <template #sidenav>
            <ul class="pt-2 pb-4 space-y-1 text-sm">
                <li>
                    <NavLink :href="route('deltas.data_produk')" :active="route().current('deltas.data_produk')">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 text-gray-100"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"
                            />
                        </svg>

                        <span class="text-gray-100 pl-2">Data Produk</span>
                    </NavLink>
                </li>
                <li>
                    <NavLink :href="route('deltas.produksi_mf2w')">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 text-gray-100"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4h6v8h-6z"></path>
                            <path d="M4 16h6v4h-6z"></path>
                            <path d="M14 12h6v8h-6z"></path>
                            <path d="M14 4h6v4h-6z"></path>
                        </svg>

                        <span class="text-gray-100 pl-2">Produksi MF2W</span>
                    </NavLink>
                </li>
                <li>
                    <NavLink :href="route('deltas.produksi_mf2w')">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 text-gray-100"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21h18"></path>
                            <path d="M5 21v-12l5 4v-4l5 4h4"></path>
                            <path d="M19 21v-8l-1.436 -9.574a0.5 .5 0 0 0 -.495 -.426h-1.145a0.5 .5 0 0 0 -.494 .418l-1.43 8.582"></path>
                            <path d="M9 17h1"></path>
                            <path d="M14 17h1"></path>
                        </svg>

                        <span class="text-gray-100 pl-2">Waho & Kanban</span>
                    </NavLink>
                </li>
                <li>
                    <NavLink :href="route('deltas.produksi_mf2w')">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 text-gray-100"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>

                        <span class="text-gray-100 pl-2">Pengaturan User</span>
                    </NavLink>
                </li>
            </ul>
        </template>
        <div class="sm:py-1 lg:py-3 sm:px-1 lg:px-3">
            <table class="table-auto w-full text-sm">
                <thead class="text-gray-700 uppercase bg-gray-50 w-full">
                    <tr>
                        <th scope="col" class="text-center py-3">#</th>
                        <th scope="col" class="text-center py-3">Part Name</th>
                        <th scope="col" class="text-center py-3">Operator</th>
                        <th scope="col" class="text-center py-3">Inpector</th>
                        <th scope="col" class="text-center py-3">Tables</th>
                        <th scope="col" class="text-center py-3">Quantity</th>
                        <th scope="col" class="text-center py-3">Shift</th>
                        <th scope="col" class="text-center py-3">Date Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="value in dataProduk"
                        :key="value.id"
                        class="bg-white border-b dark:bg-gray-800 text-xs overflow-y-auto min-h-screen"
                    >
                        <td class="text-center py-3 text-gray-900">{{ value.part_name }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.customer_part_number }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.special_tag }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.part_description }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.category }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.production_plant }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.quantity }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.report_db }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.report_mf2w }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.report_mf4w }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.hso }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.discontinue }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>

