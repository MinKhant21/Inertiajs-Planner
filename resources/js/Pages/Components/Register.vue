<template>
  <Layout>
    <div class="container" style="width: 400px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;margin-top:20px">
        <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <br>
            <form @submit.prevent="storeUser">
            <div class="text-center mb-3">
                <h5 type="button" class="mx-1">
                    Register form
                </h5>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Username</label>
                <input type="text" id="name" name="name" class="form-control" v-model="userInfo.name" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Phone Number</label>
                <input type="text" id="loginName" name="phone" v-model="userInfo.phone" class="form-control" placeholder="eg : 09*********" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Email </label>
                <input type="email" id="loginName" class="form-control"  v-model="userInfo.email"/>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="loginPassword">Password</label>
                <input type="password" id="loginPassword" v-model="userInfo.password" class="form-control" />
                <button>
                    Show/Hide
                </button>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-success btn-block mb-4">Register Now</button>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Have an Account?  <Link href="login">Login</Link></p>
            </div>
            </form>
        </div>
       
        </div>
    </div>
  </Layout>
</template>

<script>
import Layout from '../../Layout/Layout.vue';
import { Link, router } from '@inertiajs/vue3'

export default {
    components: { Layout ,Link},
    data(){
        return{
            userInfo:{
                name : '',
                phone : "",
                email: "",
                password:""
            },
            show:true
        }
    },
    methods:{
        storeUser(){
            router.post('register',this.userInfo)
        }
    }
}
</script>

<style>

</style>