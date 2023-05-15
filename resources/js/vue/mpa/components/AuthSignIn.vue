<template>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <img src="/images/logo-dark.svg" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Sign In</h4>
                                <form @submit.prevent="submitForm">
                                    <div class="input-group mb-3">
                                        <span class="text-danger" v-if="error">{{ error }}</span>
                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                        <input v-model="email" type="email" class="form-control" placeholder="Email address" required>
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text"><i data-feather="lock"></i></span>
                                        <input v-model="password" type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group text-left mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Save credentials
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-block btn-primary mb-4">Sign In</button>
                                </form>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup" class="f-w-400">Signup</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    // props: ['route'],
    data() {
        return {
            email: "",
            password: "",
            error: null,
            route: '/authenticate',
        };
    },
    methods: {
        submitForm: function () {
            axios.post(this.route, {email : this.email, password: this.password})
                .then(response =>  {
                    if (response.data.status) window.location = response.data.redirect;
                    else this.error = response.data.error
                });
        },
    }
}
</script>

<style scoped>

</style>
