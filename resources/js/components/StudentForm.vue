<template>
    <form @submit.prevent="handleSubmit">
        <div class="form-group">
      <label for="name">Name</label>
      <input type="text" v-model="student.name" class="form-control" id="name" required>
      <span v-if="errors.name" class="invalid-feedback" role="alert">
        <strong>{{ errors.name[0] }}</strong>
      </span>
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" v-model="student.age" class="form-control" id="age" required>
      <span v-if="errors.age" class="invalid-feedback" role="alert">
        <strong>{{ errors.name[0] }} (Replace 'name' with 'age' for specific error)</strong>
      </span>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select v-model="student.status" class="form-control" id="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
      <span v-if="errors.status" class="invalid-feedback" role="alert">
        <strong>{{ errors.status[0] }}</strong>
      </span>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </template>
  
  <script>
  export default {
    props: {
        errors: Object, // Prop to receive existing student data for edit
  },
  data() {
    return {
      // Define a local copy of student data for form handling
      formData: {
        name: '',
        age: null,
        status: '',
      },
    };
  },
  created() {
    // If editing an existing student, copy data to formData
    if (this.student) {
      Object.assign(this.formData, this.student);
    }
  },
    methods: {
      handleSubmit() {
        // Handle form submission logic (covered later)
        this.$emit('submit-student', this.formData);
      console.log('Submitted student data:', this.formData);
    },
  },
  props: {
  errors: Object, // Prop to receive validation errors
},
};
</script>
  