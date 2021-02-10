<template>
  <div
    class="uploader"
    @dragenter="OnDragEnter"
    @dragleave="OnDragLeave"
    @dragover.prevent
    :class="{ dragging: isDragging }"
  >
    <i class="fas fa-cloud-upload-alt"></i>

    <p>Drag File disini</p>
    <div>Atau</div>
    <div class="file-input">
      <label for="file">Select</label>
      <input id="file" type="file" @change="onInputChange" multiple />
    </div>
  </div>
</template>

<script>
export default {
  name: "image-uploader",
  data() {
    return {
      isDragging: false,
      dragCount: 0,
      files: [],
      images: []
    };
  },
  methods: {
    OnDragEnter(e) {
      e.preventDefault();
      this.dragCount++;
      this.isDragging = true;
    },
    OnDragLeave(e) {
      e.preventDefault();
      this.dragCount--;
      if (this.dragCount <= 0) {
        this.isDragging = false;
      }
    },
    onInputChange(e) {
      console.log(e);
    },
    OnDrop(e) {
      e.preventDefault();
      e.stopPropagation();
      this.isDragging = false;
      const files = e.dataTransfer.files;
      // console.log(files);
      Array.from(files).forEach((fiel = this.addImage(file)));
    },
    addImage(file) {
      if (!file.type.match("image.*")) {
        console.log(`${file.name} bukan gambar`);
        return;
      }
      this.files.push(files);
    }
  }
};
</script>

<style lang="scss" scoped>
.uploader {
  width: 100%;
  background-color: #2196f3;
  color: #fff;
  padding: 10px 10px;
  text-align: center;
  border-radius: 10px;
  border: 3px dashed #fff;
  font-size: 20px;
  position: relative;
}
</style>