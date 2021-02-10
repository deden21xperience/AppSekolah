<template>
  <div class="small-box bg-info">
    <div class="inner">
      <h3>150</h3>
      <p>Teacher</p>
    </div>
    <div class="icon">
      <!-- <i class="fas fa-shopping-cart"></i> -->
      <i class="fas fa-user-plus"></i>
    </div>
    <a href="#" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</template>

<script>
export default {
  name: "box-dashboard",
};
</script>

<style lang="scss" scoped>
.small-box .icon {
  color: rgba(0, 0, 0, 0.15);
  z-index: 0;
}
.small-box {
  border-radius: 0.25rem;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
  display: block;
  margin-bottom: 20px;
  position: relative;
}
.small-box > .small-box-footer {
  background: rgba(0, 0, 0, 0.1);
  color: rgba(255, 255, 255, 0.8);
  display: block;
  padding: 3px 0;
  position: relative;
  text-align: center;
  text-decoration: none;
  z-index: 10;
}
.small-box > .inner {
  padding: 10px;
}
</style>