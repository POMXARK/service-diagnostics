<template>
    <div>
        <nav class="pc-sidebar @@menuclass" id="sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="/" class="b-brand adaptive-content">
                        <!-- ========   change your logo hear   ============ -->

<!--                        <img src="{{ asset('images/logo.svg') }}" alt="" class="logo logo-lg">-->
<!--                        <img src="{{ asset('images/logo-sm.svg') }}" alt="" class="logo logo-sm">-->
                    </a>
                    <a id="hide-sidebar-toggle" class="d-md-none d-lg-block">
                        <i class="fas fa-chevron-circle-left text-primary fs-3 text-end"
                           id="hide-sidebar-toggle-icon"
                           style="position: absolute; right: -10px;"></i>
                    </a>

                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <Sidebar/>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pc-container">
            <div class="card p-3">
                <RouterView/>
            </div>
        </div>
    </div>
</template>

<script>

// import Sidebar from "../Sidebar.vue";

import Sidebar from "./components/Sidebar.vue";

export default {
    components: {Sidebar},
    mounted() {

    }
}
</script>

<style scoped>

</style>
