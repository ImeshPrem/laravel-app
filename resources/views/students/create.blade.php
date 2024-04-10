
<template>
<form @submit.prevent="handleSubmit">
  <button type="submit">Submit</button>
</form>
</template>

<script>
export default {
methods: {
  handleSubmit() {
    const formData = this.student; // Assuming student data is in component state
    Inertia.post('/students', formData) // Submit data to StudentsController
        .then((response) => {
          // Handle successful submission (e.g., redirect to student list view)
          this.$message('Student created successfully!'); // Example success message
          this.$inertia.visit(route('students.index')); // Redirect to student list view
        })
        .catch((error) => {
          // Handle errors (e.g., display error messages)
          this.$message('Error creating student!', 'error'); // Example error message
          console.error(error); // Log the error for debugging
        });
  },
},
};
</script>
