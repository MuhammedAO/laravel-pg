<template>
  <div>
    <button :type="type" class="my-btn" v-text="test.name"></button>
  </div>
</template>

<script>
export default {
  mounted() {
    axios.post("api/vue").then((res) => {
      this.test = res.data;
    });
  },
  data: function () {
    return {
      test: null,
    };
  },
  props: ["text", "type"],
};
</script>


<style>
.my-btn {
  background-color: #333;
  color: white;
  padding: 0 4px;
}
</style>