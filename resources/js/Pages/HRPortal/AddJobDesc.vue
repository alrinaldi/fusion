<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import HrPortalNav from '@/Components/HrPortalNav.vue';
import DataTable from 'datatables.net-vue3'
import DataTablesLib from 'datatables.net';
import 'datatables.net-select';
import { useForm } from '@inertiajs/inertia-vue3';
import {ref, computed,reactive} from  'vue';
import axios from 'axios';
import { Inertia } from '@inertiajs/inertia';


DataTable.use(DataTablesLib);

const props = defineProps({
    jobdesc: {
        type: Object,
        default: () => ({}),
    },
    dept: {
        type: String,
        default: () => ({}),
    },
    seksi: {
        type: Object,
        default: () => ({}),
    },
    jobtitledata: {
        type: Object,
        default: () => ({}),
    },
    jobtitled: {
        type: Object,
        default: () => ({}),
    },

});

const jobtitle = ref('');
const responsibleto = ref('');
const section = ref('');
const departement = ref('');
const division = ref('');
const rev = ref('');
const effectivedate = ref('');
const revisiondate = ref('');
const mainPurpose = ref('');
const keyAccountabilities = ref('');
const majorChallenges = ref('');
const authority = ref('');
const dimension = ref('');
const atasan = ref('');
const job = ref('');
const bawahan = ref('');
const internalRelations = ref('');
const externalRelations = ref('');
const education = ref('');
const experience = ref('');
const particularRequirement = ref('')
const hardCompetency = ref('');
const softCompetency = ref('');

//  async function selectNrp(){
//     console.log(nrp.value)
//     const datak = props.karyawan.find(datas => datas.Nrp === nrp.value);
//     console.log(datak.Nama); // { id: 2, name: 'Mary', age: 30 }
//     nama.value = datak.Nama;
//     kj.value = datak.KJ;
//     jabatan.value = datak.JobTitle;
// }

async function createJobDesc() {
      axios.post('createjobdesc', {
        jobtitle:jobtitle.value,
        responsibleto:responsibleto.value,
        section:section.value,
        departement:departement.value,
        rev:rev.value,
        effectivedate:effectivedate.value,
        division:division.value,
        revisiondate:revisiondate.value,
        mainpurpose: mainPurpose.value,
        keyaccountabilities: keyAccountabilities.value,
        majorchallenges :majorChallenges.value,
        authority: authority.value,
        dimension: dimension.value,
        atasan: atasan.value,
        job: job.value,
        bawahan: bawahan.value,
        internalrelations: internalRelations.value,
        externalrelations: externalRelations.value,
        education: education.value,
        experience: experience.value,
        particularrequirement:particularRequirement.value,
        hardcompetency: hardCompetency.value,
        softcompetency: softCompetency.value,
      })
      .then(response => {
        console.log(response)
      })
      .catch(error => {
        console.log(error)
      })
    }

            function deleteRow (data) {
                if (!confirm('Are you sure want to remove?')) return;
                console.log(data);
                Inertia.delete('strukturorghp/' + data)
                // this.reset();
                // this.closeModal();
            }

            // function editRow(data){
            //     console.log(data)
            //     ids.value = data;
            //     const datak = props.struktur.find(datas => datas.id === data);
            //     nrpu.value = datak.nrp;
            //     namau.value = datak.nama;
            //     kju.value = datak.kj;
            //     jabatanu.value = datak.jabatan;
            //     bagianu.value  = datak.bagian;
            //     console.log(nrpu.value);
            // }

            // function selectNrpU(){
            //     console.log(nrpu.value)
            //     const datak = props.karyawan.find(datas => datas.Nrp === nrpu.value);
            //     namau.value = datak.Nama;
            //     kju.value = datak.KJ;
            //     jabatanu.value = datak.JobTitle;
            // }



const FilterData = computed(()=>{
        console.log(jobtitle.value);
        return props.jobtitled.filter(data => data.JobTitle === jobtitle.value);
    });

    // async function updateStruktur(){
    //   axios.post('updatesruktur', {
    //     nrp: nrpu.value,
    //     nama: namau.value,
    //     kj : kju.value,
    //     jabatan: jabatanu.value,
    //     bagian:bagianu.value,
    //     ids:ids.value,
    //   })
    //   .then(response => {
    //     console.log(response)
    //   })
    //   .catch(error => {
    //     console.log(error)
    //   })
    // }

    function ceklistall() {
      const checkboxes = document.querySelectorAll('.checklist');
      // Set value of all checkboxes to match the "checked all" checkbox
      checkboxes.forEach((checkbox) => {
        checkbox.checked = this.select;
      });

    }


    // function submitStruktur () {
    // if (!confirm('Are you sure want to submit?')) return;
    // var ids = [];
    // var i=0;
    // const checkboxes = document.querySelectorAll('.checklist');
    // checkboxes.forEach((checkbox) => {
    //     // checkbox.checked = this.select;
    //     if(checkbox.checked){
    //         ids[i] = checkbox.value;
    //         i++;
    //     }

    //   });

    //   axios.post('submitstruktur', {
    //     ids: ids,
    //   })
    //   .then(response => {
    //     location.reload();
    //     console.log(response)

    //   })
    //   .catch(error => {
    //     console.log(error)
    //   })

    //         }

</script>

<template>
    <AppLayout title="Data Produk">
        <template #sidenav>
            <HrPortalNav>
        </HrPortalNav>

        </template>



  <p class="font-serif text-2xl mx-8 my-8 underline text-sky-900 decoration-neutral-900">Job Description</p>

<label for="my-modal" class="btn my-1 mx-8">Create </label>

        <div class="card w-200 bg-base-100 shadow-xl my-8 mx-8 shadow-stone-600">
  <div class="card-body">
     <DataTable class="display  table-auto">
              <!-- <table class="table-auto w-full text-sm"> -->
                <thead class="text-lg">
                    <tr>
                        <th class="w-0.5"> <input type="checkbox" name="" id="" class="" @change="ceklistall()" v-model="select">Select</th>
                        <th class="text-center py-3">Job Title</th>
                        <th class="text-center py-3">Responsible To</th>
                        <th  class="text-center py-3">Section</th>
                        <th  class="text-center py-3">Effective Date</th>
                        <th  class="text-center py-3">Rev</th>
                        <th  class="text-center py-3">Revision Date</th>
                        <th  class="text-center py-3">Detail</th>
                        <th  class="text-center py-3">Action</th>

                    </tr>
                </thead>
                <tbody class="text-xl">
                    <tr
                        v-for="struktur in struktur"
                        :key="struktur.nrp"
                        class="bg-white border-b dark:bg-gray-800 text-xs overflow-y-auto min-h-screen"
                    >
                        <td><input type="checkbox" class="checklist" name="" id="" v-model="checkeds" :value="struktur.id"></td>
                        <td class=" py-3 text-gray-900">{{ struktur.nrp }}</td>
                        <td class=" py-3 text-gray-900">{{ struktur.nama }}</td>
                        <td class=" py-3 text-gray-900">{{ struktur.kj }}</td>
                        <td class=" py-3 text-gray-900">{{ struktur.jabatan }}</td>
                        <td class=" py-3 text-gray-900">{{ struktur.seksi }}</td>
                        <td class=" py-3 text-gray-900">{{ struktur.status }}</td>
                        <td class=" py-3 text-gray-900"> <label for="my-update" class="btn my-1 mx-8" @click="editRow(struktur.id)">Edit </label>

                        <button class="btn text-xs bg-red-600"  @click.prevent="deleteRow(struktur.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            <!-- </table> -->
</DataTable>
  </div>
</div>
<button class="btn btn-text-xs bg-blue-500 my-1 mx-8" @click="submitStruktur()">Submit</button>
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
  <div class="modal-box modal-box w-full max-w-7xl"  >
    <h3 class="font-bold text-lg">Add Job Desc</h3>
    <hr>
  <form @submit="createJobDesc" class="mt-3">
    <div class="w-9/12">
        <table class="table w-full  border-collapse border border-slate-400  ..." >
  <thead>

  </thead>
  <tbody class="" cellspacing="0" cellpadding="0">
    <tr class="">
      <td class="border border-slate-300 p-0 m-0 ...">Job Title</td>
      <td class="border border-slate-300 p-0 m-0 ...">
        <!-- <input type="text" placeholder="type here" name="jobtitle" id="" class="input input-ghost w-full" v-model="jobtitle"> -->
        <select name="" id="" class="input input-ghost w-full" v-model="jobtitle">
            <!-- <option value="">Select Job Title</option> -->
            <option  v-for="jobtitledata in jobtitledata" :key="jobtitledata.jobtitledt" :value="jobtitledata.jobtitledt">{{ jobtitledata.jobtitledt }}</option>
        </select>
      </td>
      <td class="border border-slate-300 p-0 m-0 ..."></td>
      <td class="border border-slate-300 p-0 m-0 ..."></td>
    </tr>
      <tr>
        <td class="border border-slate-300 p-0 m-0 ...">Responsible To</td>
        <td class="border border-slate-300 p-0 m-0 ..."><input type="text" placeholder="type here" name="responsible" id="" class="input input-ghost w-full "
            v-model="responsibleto" ></td>
        <td class="border border-slate-300 p-0 m-0 ..."></td>
        <td class="border border-slate-300 p-0 m-0 ..."></td>
    </tr>
    <tr>
        <td class="border border-slate-300 p-0 m-0 ...">Section</td>
        <td class="border border-slate-300 p-0 m-0 ...">
            <!-- <input type="text" placeholder="type here" name="section" id="" class="input input-ghost w-full " v-model="section"> -->
            <select name="" id="" class="input input-ghost w-full">
            <option value="" disabled></option>
            <option v-for="data in FilterData" :key="data.Seksi"  :value="data.Seksi">{{ data.Seksi }}</option>
            </select>
        </td>
        <td class="border border-slate-300 p-0 m-0 ...">Rev</td>
        <td class="border border-slate-300 p-0 m-0 ..."><input type="text" placeholder="type here" name="" id="" class="input input-ghost w-full " v-model="rev"></td>
    </tr>
    <tr>
        <td class="border border-slate-300 p-0 m-0 ...">Departement</td>
        <td class="border border-slate-300 p-0 m-0 ..."><input type="text" placeholder="type here" name="departement" id="" class="input input-ghost w-full"
             v-model="departement"></td>
        <td class="border border-slate-300 p-0 m-0 ...">Effective date</td>
        <td class="border border-slate-300 p-0 m-0 ..."><input type="date" placeholder="type here" name="" id="" class="input input-ghost w-full " v-model="effectivedate"></td>
    </tr>
    <tr>
        <td class="border border-slate-300 p-0 m-0 ...">Division</td>
        <td class="border border-slate-300 p-0 m-0 ..."><input type="text" placeholder="type here" name="division" id="" class="input input-ghost w-full " v-model="division"></td>
        <td class="border border-slate-300 p-0 m-0 ...">Revision date</td>
        <td class="border border-slate-300 p-0 m-0 ..."><input type="date" placeholder="type here" name="" id="" class="input input-ghost w-full " v-model="revisiondate"></td>
    </tr>
  </tbody>
</table>
    </div>
    <hr>
      <div class="flex flex-wrap -mx-3 mb-6 mt-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">1. Main Purpose</label>
            <!-- <select class="select select-primary w-full" name="nrp" v-model="nrp" v-on:change="selectNrp" id="nrps">
            <option disabled selected>Pilih Nrp</option>
            <option  v-for="karyawan in karyawan" :key="karyawan.Nrp" :value="karyawan.Nrp">{{ karyawan.Nrp }}</option>
            </select> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full	" v-model="mainPurpose" ></textarea>

        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">2. Key Accountabilities</label>
          <!-- <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="nama"  v-model="nama"> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full" v-model="keyAccountabilities" ></textarea>

        </div>
      </div>
    <div class="flex flex-wrap -mx-3 mb-6 mt-5">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">3. Major Challenges</label>
          <!-- <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="kj"  v-model="kj" readonly> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full	" v-model="majorChallenges"></textarea>

        </div>
        <div class="w-full md:w-1/3 px-3">

          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">4. Authority</label>
          <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          type="text" v-model="jabatan" name="jabatan" readonly> -->
          <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full	" v-model="authority"></textarea>

        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">5. Dimension</label>
          <!-- <select class="select select-primary w-full" name="bagian" v-model="bagian"  id="seksi">
            <option disabled selected>Pilih Bagian</option>
            <option v-for="seksi in seksi" :key="seksi.Seksi" :value="seksi.Seksi">{{ seksi.Seksi }}</option>
            </select> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full	" v-model="dimension"></textarea>

                </div>
      </div>
      <p class="pt-3 mt-3"></p>
      <hr class="">
      <h2>SCOPE OF WORK</h2>
      <hr>
      <div class="flex flex-wrap -mx-3 mb-6 mt-5">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">6. 6. ORGANIZATION CHART</label>
          <!-- <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="kj"  v-model="kj" readonly> -->
            <!-- <textarea placeholder="Bio" class="textarea textarea-bordered textarea-lg w-full h-full	" ></textarea> -->
            <table class="table w-full  border-collapse border border-slate-400  ..." >
  <thead>

  </thead>
  <tbody class="" cellspacing="0" cellpadding="0">


    <tr class="">
      <td class="border border-slate-300 p-0 m-0 ...">Atasan</td>
      <td class="border border-slate-300 p-0 m-0 ..."><input type="text" v-model="atasan" placeholder="type here" name="atasan" id="atasan" class="input input-ghost w-full "></td>
    </tr>
    <tr>
        <td class="border border-slate-300 p-0 m-0 ...">Job</td>
      <td class="border border-slate-300 p-0 m-0 ..."><input type="text" v-model="job" placeholder="type here" name="job" id="job" class="input input-ghost w-full "></td>
    </tr>
    <tr>
        <td class="border border-slate-300 p-0 m-0 ...">Bawahan</td>
      <td class="border border-slate-300 p-0 m-0 ..."><input type="text" v-model="bawahan" placeholder="type here" name="bawahan" id="bawahan" class="input input-ghost w-full "></td>
    </tr>
  </tbody>
</table>

        </div>
        <div class="w-full md:w-1/3 px-3">

          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">7. Internal Relations</label>
          <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          type="text" v-model="jabatan" name="jabatan" readonly> -->
          <textarea placeholder="Type Here" v-model="internalRelations" class="textarea textarea-bordered textarea-lg w-full h-full	" ></textarea>

        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">8. External Relations</label>
          <!-- <select class="select select-primary w-full" name="bagian" v-model="bagian"  id="seksi">
            <option disabled selected>Pilih Bagian</option>
            <option v-for="seksi in seksi" :key="seksi.Seksi" :value="seksi.Seksi">{{ seksi.Seksi }}</option>
            </select> -->
            <textarea placeholder="Type Here" v-model="externalRelations" class="textarea textarea-bordered textarea-lg w-full h-full	" ></textarea>

                </div>
      </div>
      <p class="pt-3 mt-3"></p>
      <hr class="">
      <h2>JOB SPECIFICATION</h2>
      <hr>
      <div class="flex flex-wrap -mx-3 mb-6 mt-5">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">9. Formal Education</label>
          <!-- <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="kj"  v-model="kj" readonly> -->
            <!-- <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full" ></textarea> -->
            <select class="select select-info w-full max-w-xs" v-model="education">
                <option disabled selected>Select </option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                </select>

        </div>
        <div class="w-full md:w-1/3 px-3">

          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Experience</label>
          <!-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          type="text" v-model="jabatan" name="jabatan" readonly> -->
          <!-- <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full	" ></textarea> -->

          <select class="select select-info w-full max-w-xs" v-model="experience">
                <option disabled selected>Select </option>
                <option value="Fresh Graduate">Fresh Graduate</option>
                <option value="Min 1 Year">Min 1 Year</option>
                <option value="2 Years">2 Years</option>
                <option value="3 Years">3 Years</option>
                <option value="4 Years">4 Years</option>
                <option value="5 Years">5 Years</option>
                <option value="10 Years">10 Years</option>
                </select>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">10. Particular Requirement</label>
          <!-- <select class="select select-primary w-full" name="bagian" v-model="bagian"  id="seksi">
            <option disabled selected>Pilih Bagian</option>
            <option v-for="seksi in seksi" :key="seksi.Seksi" :value="seksi.Seksi">{{ seksi.Seksi }}</option>
            </select> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full" v-model="particularRequirement" ></textarea>

                </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6 mt-3">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">11. Hard Competency</label>
            <!-- <select class="select select-primary w-full" name="nrp" v-model="nrp" v-on:change="selectNrp" id="nrps">
            <option disabled selected>Pilih Nrp</option>
            <option  v-for="karyawan in karyawan" :key="karyawan.Nrp" :value="karyawan.Nrp">{{ karyawan.Nrp }}</option>
            </select> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full" v-model="hardCompetency" ></textarea>

        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">12. Soft Competency</label>
          <!-- <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="nama"  v-model="nama"> -->
            <textarea placeholder="Type Here" class="textarea textarea-bordered textarea-lg w-full h-full" v-model="softCompetency" ></textarea>

        </div>
      </div>

      <p class="mt-3 pt-3"></p>
      <div class="flex items-center justify-start mt-5">
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


<input type="checkbox" id="my-update" class="modal-toggle" />
<div class="modal">
  <div class="modal-box modal-box w-12/12 max-w-6xl"  >
    <h3 class="font-bold text-lg">Update Struktur</h3>
    <hr>
  <form @submit="updateStruktur" class="mt-3">
    <input type="hidden" name="ids" v-model="ids" id="">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Nrp</label>
            <select class="select select-primary w-full" name="nrpu" v-model="nrpu" v-on:change="selectNrpU" id="nrps">
            <option disabled selected>Pilih Nrp</option>
            <option  v-for="karyawan in karyawan" :key="karyawan.Nrp" :value="karyawan.Nrp">{{ karyawan.Nrp }}</option>
            </select>
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Nama</label>
          <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="namau"  v-model="namau">
        </div>
      </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">KJ</label>
          <input   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" name="kju"  v-model="kju" readonly>
        </div>
        <div class="w-full md:w-1/3 px-3">

          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">Jabatan</label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          type="text" v-model="jabatanu" name="jabatanu" readonly>

        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Bagian</label>
          <select class="select select-primary w-full" name="bagianu" v-model="bagianu"  id="seksi">
            <option disabled selected>Pilih Bagian</option>
            <option v-for="seksi in seksi" :key="seksi.Seksi" :value="seksi.Seksi">{{ seksi.Seksi }}</option>
            </select>
        </div>
      </div>
      <div class="flex items-center justify-start">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Submit
        </button>
      </div>
    </form>

    <div class="modal-action">
      <label for="my-update" class="btn">Close!</label>
    </div>
  </div>
</div>

    </AppLayout>

</template>
<style>
@import 'datatables.net-dt';
</style>

