<template>
  <Layout>
    <section class=" container mt-2">
      <div class=" d-flex justify-content-between text-center">
        <a href="" class="btn btn-sm btn-primary">Back</a>
        <h5>Debt Create Form</h5>
      </div><br>
      <form @submit.prevent="storeDebt">
        <!-- Name input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form5Example1">Name</label>
          <input type="text" id="form5Example1" v-model="form.name" class="form-control" />
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form5Example2">Debt Amount</label>
          <input type="text" id="form5Example2" v-model="form.amount" class="form-control" />
        </div>
        
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Create</button>
      </form>
    </section>
  </Layout>
</template>

<script>
import { router } from '@inertiajs/vue3';
import Layout from '../../Layout/Layout.vue';
export default {
  name: "StoreDebt",
  data() {
    return {
      form: {
        amount: "",
        name:"",
      }
    }
  },
  methods: {
    storeDebt() {
      router.post('/debt',this.form)
    }
  },
  components: {
    Layout
  }
}
</script>

<style>

</style>
