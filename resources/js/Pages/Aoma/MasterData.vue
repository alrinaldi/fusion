<script setup>
// import Vue from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import DataTable from 'datatables.net-vue3'
import DataTablesLib from 'datatables.net';
import 'datatables.net-select';
import { useForm } from '@inertiajs/inertia-vue3';

DataTable.use(DataTablesLib);
// import DataTables from 'vue-datatables-net'

const props = defineProps({
    masterData: {
        type: Object,
        default: () => ({}),
    },

});

const form = useForm({
    kategori:'',
    deskripsi:'',
    nomerasset:'',
    workcenter:'',
    tanggal:'',
    supplier:'',
    po:'',
})



</script>

<template>
    <AppLayout title="Data Produk">
        <template #sidenav>
            <ul class="pt-2 pb-4 space-y-1 text-sm">
                <li>
                    <NavLink :href="route('fams.homefams')" :active="route().current('fams.homefams')">
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

                        <span class="text-gray-100 pl-2">Home</span>
                    </NavLink>
                </li>
                <li>
                    <NavLink :href="route('fams.masterdatafams')">
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

                        <span class="text-gray-100 pl-2">Master Data</span>
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


  <p class="font-serif text-2xl mx-8 my-8 underline text-sky-900 decoration-neutral-900">Master Data</p>

<label for="my-modal" class="btn my-1 mx-8">Create </label>

        <div class="card w-200 bg-base-100 shadow-xl my-8 mx-8 shadow-stone-600">
  <div class="card-body">
     <DataTable class="display text-lg">
              <!-- <table class="table-auto w-full text-sm"> -->
                <thead class="">
                    <tr>
                        <th>Select</th>
                        <th class="text-center py-3">Kategori</th>
                        <th class="text-center py-3">Deskripsi</th>
                        <th  class="text-center py-3">Nomer Asset</th>
                        <th  class="text-center py-3">Workcenter</th>
                        <th  class="text-center py-3">Tanggal Akuisisi</th>
                        <th  class="text-center py-3">Supplier</th>
                        <th  class="text-center py-3">PO</th>
                        <th  class="text-center py-3">Status Asset</th>
                        <th  class="text-center py-3">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="value in masterData"
                        :key="value.nomerassetbaru"
                        class="bg-white border-b dark:bg-gray-800 text-xs overflow-y-auto min-h-screen"
                    >
                        <td><input type="checkbox" name="" id="" v-model="checked" value="{{ value.nomerassetbaru }}"></td>
                        <td class="text-center py-3 text-gray-900">{{ value.kategori }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.deskripsi }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.nomerassetbaru }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.wct }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.tanggal_akuisisi }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.supplier }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.po }}</td>
                        <td class="text-center py-3 text-gray-900">{{ value.status }}</td>
                        <td class="text-center py-3 text-gray-900"> <PrimaryButton>Edit</PrimaryButton>
                        </td>
                    </tr>
                </tbody>
            <!-- </table> -->
</DataTable>
  </div>
</div>
        <div class=" fixed bottom-0 w-full">
<footer class="footer items-center p-4 bg-neutral text-neutral-content">
  <div class="items-center grid-flow-col">
    <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
    <p>Copyright © 2023 - All right reserved</p>
  </div>
  <div class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
    </a>
    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
    <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
  </div>
</footer>
</div>

<input type="checkbox" id="my-modal" class="modal-toggle" />
<div class="modal">
  <div class="modal-box modal-box w-12/12 max-w-6xl"  >
    <h3 class="font-bold text-lg">Master Asset</h3>
    <hr>
  <form @submit.prevent="form.post('addasset')" class="mt-3">

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Kategori</label>
            <select class="select select-primary w-full" name="kategori" v-model="form.kategori">
            <option disabled selected>Pilih Kategori</option>
            <option value="Building">Building</option>
            <option value="Machine">Machine</option>
            <option value="Factory Equipment">Factory Equipment</option>
            </select>
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Description</label>
          <input v-model="form.deskripsi"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" name="description">
        </div>
      </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">No asset</label>
          <input v-model="form.nomerasset" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="nomerasset">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Workcenter</label>
          <input v-model="form.workcenter"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="workcenter">
        </div>
      </div>
          <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Tanggal Akuisisi</label>
          <input v-model="form.tanggal" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="tanggal">
        </div>
        <div class="w-full md:w-1/3 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Supplier</label>
          <input v-model="form.supplier"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" name="supplier">
        </div>
         <div class="w-full md:w-1/3 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">PO</label>
          <input v-model="form.po"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="po">
        </div>
      </div>
      <div class="flex items-center justify-start">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
        </button>
      </div>
    </form>

    <div class="modal-action">

      <label for="my-modal" class="btn">Close!</label>
    </div>
  </div>
</div>

    </AppLayout>
</template>
<style>
@import 'datatables.net-dt';
</style>
