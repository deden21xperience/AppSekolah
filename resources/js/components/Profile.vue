<template>
  <div class="card-body box-profile">
    <div class="text-center">
      <!-- <img class="profile-user-img img-fluid img-circle" alt="User profile picture" /> -->
    </div>
    <!-- src="../../dist/img/user4-128x128.jpg" -->

    <h3 class="profile-username text-center">{{ nama }}</h3>

    <p class="text-muted text-center">Software Engineer</p>

    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Followers</b>
        <a class="float-right">1,322</a>
      </li>
      <li class="list-group-item">
        <b>Following</b>
        <a class="float-right">543</a>
      </li>
      <li class="list-group-item">
        <b>Friends</b>
        <a class="float-right">13,287</a>
      </li>
    </ul>

    <a href="#" class="btn btn-primary btn-block">
      <b>Follow</b>
    </a>
  </div>
</template>

<script>
export default {
  name: "profile",
  data() {
    return {
      nama: ""
    };
  },
  mounted() {
    this.$store.dispatch(getCostumers);
  }

  // mounted() {
  //     console.log('Component mounted.')
  // }
};
</script>