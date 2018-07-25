<template>
  <div>
      <h1>{{ title }}</h1>
      <p>{{ message }}</p>
      <button @click="editButton" class="btn btn-primary">edit</button>
  </div>
</template>


<script>
  export default {
  data() {
    return {
      title: "Laravel + Vue.js",
      message: "Initialize"
    };
  },
  methods: {
    editButton: function() {
      alert("edit");
      this.title = "Welcome to Vue.js!";
      this.message = "This is a sample application.";
    }
  } 
};
</script>
