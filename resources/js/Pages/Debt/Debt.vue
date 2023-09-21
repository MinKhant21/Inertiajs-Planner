// <script setup>
// import { Head } from '@inertiajs/vue3';

// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
// import { Head } from '@inertiajs/vue3';

// defineProps({
//     mustVerifyEmail: {
//         type: Boolean,
//     },
//     status: {
//         type: String,
//     },
// });
// </script>

<template>
    <Head title="Debt" />

    <AuthenticatedLayout>
        <template #header>
           <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Debt People</h2>
            <Link href="/debt-store" class=" bg-purple-400 border rounded-md p-2">Add People</Link>
            </div>
        </template>
        <div class="" >
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible flex justify-center items-center ">
                    <table class="table text-gray-400 w-5/12  border-separate space-y-6 text-sm " >
                        <thead class="shadow-lg shadow-indigo-500/40 ">
                            <tr>
                                <th class="p-3">Brand</th>
                                <th class="p-3 text-left">Category</th>
                                <th class="p-3 text-left">Price</th>
                                <th class="p-3 text-left">Status</th>
                                <th class="p-3 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="shadow-lg shadow-indigo-500/40 " v-for="people in debtPeople">
                                <td class="p-3">
                                    <div class="flex align-items-center">
                                        <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                        <div class="ml-3">
                                            <div class="">{{ people.name }}</div>
                                            <div class="text-gray-500">mail@rgmail.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-3">
                                    Technology
                                </td>
                                <td class="p-3 font-bold">
                                    {{ people.amount }} Ks
                                </td>
                                <td class="p-3">
                                    <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                                </td>
                                <td class="p-3 ">
                                    <a href="#" class="text-gray-400 hover:text-black mr-2">
                                        <i class="material-icons-outlined text-base">visibility</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-black  mx-2">
                                        <i class="material-icons-outlined text-base">edit</i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-black  ml-2">
                                        <i class="material-icons-round text-base">delete_outline</i>
                                    </a>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
export default {
    components:{
        Head,AuthenticatedLayout
    },
    props:['debtPeople'],
}
</script>
<style scoped>
.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
