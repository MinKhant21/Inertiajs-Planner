<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Calendar from '../Components/Home/Calendar.vue';
import Content from '../Components/Home/Content.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Home</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="grid grid-cols-7 gap-4">
                        <div class="col-span-1 bg-zinc-700">01</div>
                        <div class=" col-span-4 bg-zinc-700">
                            <Content/>
                        </div>
                        <div class="col-span-2">
                            <Calendar/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
