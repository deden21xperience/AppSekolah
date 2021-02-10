<template>
  <div class="container">
    <h3>Materi Pembelajaran</h3>
    <p>Mata Pelajaran</p>
    <select>
      <option value>--Pilih--</option>
    </select>
    <hr />
    <div>
      <h3>File Perangkat</h3>
      <p>File yang bisa diupload hanya file dengan eksistensi</p>
      <ImageUploader />
    </div>
  </div>
</template>

<script>
import ImageUploader from "./ImageUploader";
export default {
  name: "materi",
  data() {
    return {
      materiPembelajaran: ["Matemaika", "Bahasa Indonesia"]
    };
  },
  components: {
    ImageUploader
  }
  // mounted() {
  //     console.log('Component mounted.')
  // }
};
</script>