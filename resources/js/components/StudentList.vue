<template>
    <div>
      <h2>Students</h2>
      <ul class="list-group">
        <student-list-item v-for="student in students" :key="student.id" :student="student" @delete="handleDeleteStudent" />
      </ul>
      <student-form @submit-student="handleSubmitStudent" />
    </div>
  </template>
  
  <script>
  import StudentListItem from './StudentListItem.vue';
  
  export default {
    components: {
      StudentListItem,
    },
    props: {
      students: Array,
    },
    methods: {
      handleDeleteStudent(studentId) {
        // Handle student deletion logic (e.g., confirmation, call to delete method)
        console.log('Delete student with ID:', studentId);
        Inertia.post('/students', studentData);
      },
    },
  };
  </script>
  