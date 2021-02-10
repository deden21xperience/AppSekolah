<template>
  <div>
    <hr />
    <div class="row">
      <div class="col-md-3">
        <box-dashboard />
      </div>
      <div class="col-md-3">
        <box-dashboard />
      </div>
      <div class="col-md-3">
        <box-dashboard />
      </div>
      <div class="col-md-3">
        <box-dashboard />
      </div>
    </div>

    <button @click="tes">tes</button>
    <!-- Table -->
    <ul>
      <li>{{ welcome }}</li>
    </ul>
    <!-- Enfo of Table -->
    <!-- <h3>{{ welcome }}</h3> -->
    <!-- <p class="text-primary">.text-primary</p>
    <p class="text-secondary">.text-secondary</p>
    <p class="text-success">.text-success</p>
    <p class="text-danger">.text-danger</p>
    <p class="text-warning">.text-warning</p>
    <p class="text-info">.text-info</p>
    <p class="text-light bg-dark">.text-light</p>
    <p class="text-dark">.text-dark</p>
    <p class="text-body">.text-body</p>
    <p class="text-muted">.text-muted</p>
    <p class="text-white bg-dark">.text-white</p>
    <p class="text-black-50">.text-black-50</p>
    <p class="text-white-50 bg-dark">.text-white-50</p>-->

    <!-- {{ info}} -->
  </div>
</template>

<script>
import BoxDashboard from "./BoxDashboard";
export default {
  data() {
    return {
      info: null
    };
  },
  name: "dashboard",
  // mounted() {
  //     console.log('Component mounted.')
  // }
  components: {
    BoxDashboard
  },
  computed: {
    welcome() {
      return "hello world";
    }
  },
  mounted() {
    axios.get("/api/members").then(response => {
      this.info = response.data;
    });
  },
  methods: {
    tes() {
      console.log(this.info.data[0]["nama"]);
    }
  }
};
</script>
