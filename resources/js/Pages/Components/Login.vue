<template>
  <Layout>
    <div class="container" style="width: 400px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;margin-top:20px">
        <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <br>
            <form @submit.prevent="Login">
            <div class="text-center mb-3">
                <h5 type="button" class="mx-1">
                    Login form
                </h5>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Email or username</label>
                <input type="email" id="loginName" v-model="loginForm.email" class="form-control" />
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="loginPassword">Password</label>

                <input type="password" id="loginPassword" v-model="loginForm.password" class="form-control" />
            </div>
            <!-- 2 column grid layout -->
            <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check mb-3 mb-md-0">
                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
              
                <p>Not a member?  <Link href="register">Register</Link></p>
            </div>
            </form>
        </div>
       
        </div>
    </div>
  </Layout>
</template>

<script>
import Layout from '../../Layout/Layout.vue';
import { Link ,router} from '@inertiajs/vue3'

export default {
    data(){
        return {
            loginForm:{
                email:"",
                password:""
            }
        }
    },
    methods:{
        Login(){
            router.post('/login',this.loginForm)
        }   
    },
    components: { Layout ,Link}
}
</script>

<style>

</style>