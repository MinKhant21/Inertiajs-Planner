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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Debt People</h2>
            <Link href="/debt" class=" bg-purple-400 border rounded-md p-2">Back</Link>
            </div>
        </template>
     
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
