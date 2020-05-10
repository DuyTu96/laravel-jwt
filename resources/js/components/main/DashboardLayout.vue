<template>
  <section id="container">
      <Header/>
      <Sidebar/>
      <router-view></router-view>
      <RightSidebar/>
      <!-- <Footer/> -->
    </section>
</template>

<script>
import Header from "../../components/layouts/Header";
import Sidebar from "../../components/layouts/Sidebar";
import RightSidebar from "../../components/layouts/RightSidebar";
import Footer from "../../components/layouts/Footer";


export default {
    components: {
        Header,
        Sidebar,
        RightSidebar,
        Footer,
    }
}
</script>

<style>

</style>