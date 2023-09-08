<template>
    
        <div class="container mt-2 header-Debt">
        <Link href="/store" class=" btn btn-sm btn-success ">Home</Link>

        <a class="btn btn-sm btn-dark text-white w-full">Debt People</a>
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
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <input type="checkbox" class="form-checkbox">
                <div>
                    <span class="badge bg-primary rounded-pill">14</span>
                    <h5>Kaung Min Khant</h5>
                    Day - 20 . 3 . 2000
                </div>
                <div class="border p-4 rounded-lg">
                    Rent - 2000 MMK <br>
                    Paid - 1000 MMk <br>
                    <hr />
                    Left - 1000 MMK
                </div>

            </li>
            <hr>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <input type="checkbox" class="form-checkbox">
                <div>
                    <span class="badge bg-primary rounded-pill">14</span>
                    <h5>Kaung Min Khant</h5>
                    Day - 20 . 3 . 2000
                </div>
                <div class="border p-4 rounded-lg">
                    Rent - 2000 MMK <br>
                    Paid - 1000 MMk <br>
                    <hr />
                    Left - 1000 MMK
                </div>

            </li>
            <hr>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <input type="checkbox" class="form-checkbox">
                <div>
                    <span class="badge bg-primary rounded-pill">14</span>
                    <h5>Kaung Min Khant</h5>
                    Day - 20 . 3 . 2000
                </div>
                <div class="border p-4 rounded-lg">
                    Rent - 2000 MMK <br>
                    Paid - 1000 MMk <br>
                    <hr />
                    Left - 1000 MMK
                </div>

            </li>
            <hr>
        </ul>
    </section>
    
    
</template>

<script>
import { Link } from '@inertiajs/vue3'
export default {
    name:"Debt",
    data(){
        return{
            showAddDebt:false
        }
    },
    components:{
        Link,
      
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
