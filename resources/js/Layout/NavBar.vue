<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">KaungMinKhant</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/debt" class="nav-link">Debt</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                        <li class="nav-item">
<!--                            <a  :href="$route('user.login')" class="nav-link">Login</a>-->
                             <a href="login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item dropdown position-static">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
    </div>
</template>

<script>
export default {
    name:"NavBar",
    components:{


    }
}
</script>

<style>

</style>
