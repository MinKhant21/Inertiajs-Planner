<template>
    <Layout>
        <div class="container mt-2 header-Debt">
        <Link href="/debt-store" class=" btn btn-sm btn-success ">Add</Link>
        <a href="" class="btn btn-sm btn-danger text-white">
            <span>Debt People</span>
            <span class="badge rounded-pill badge-notification bg-success">
                {{ debtPeople.length}}
            </span>
        </a>
        <a href="" class="btn btn-sm btn-primary text-white">
            <span>History</span>
            <span class="badge rounded-pill badge-notification bg-danger">99</span>
        </a>
    </div>
    <section v-if="showAddDebt">
        <h1>Add Debt</h1>
    </section>
<!--    List Debt-->
    <section class=" container mt-2">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Rent Amount</th>
                <th scope="col">Paid Amount</th>
                <th scope="col">Left Amount</th>
                <th scope="col">Date</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="debt in debtPeople" :key="debt.id">
                    <td>
                        <span>{{debt.name}}</span>
                    </td>
                    <td>{{ debt.amount }} Ks</td>
                    <td>0 Ks</td>
                    <td>0 Ks</td>
                    <td>Monday 2023</td>
                    <td>
                        <!-- <p class="btn btn-sm btn-success">Paid</p> -->
                        <p class="btn btn-sm btn-danger">UnPaid</p>
                    </td>
                </tr>
            </tbody>
            </table>
    </section>
    
    </Layout>
    
</template>

<script>
import { Link } from '@inertiajs/vue3'
import Layout from '../../Layout/Layout.vue'
export default {
    name: "Debt",
    props: ['debtPeople'],
    data(){
        return {
            showAddDebt: false,
            showName:false
        }
    },
    mounted() {
    
    },
    components:{
        Link,
        Layout,
    },
    methods: {
       
    }
}
</script>

<style scoped>

.header-Debt{
    display: flex;
    justify-content: space-between;
    align-content: center;
}
</style>
