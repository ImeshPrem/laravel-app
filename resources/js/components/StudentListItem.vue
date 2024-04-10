<template>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <div>
        {{ student.name }} ({{ student.age }})
      </div>
      <div class="btn-group">
        <a :href="'/students/' + student.id + '/edit'" class="btn btn-sm btn-outline-primary">Edit</a>
        <button @click="$emit('delete', student.id)" class="btn btn-sm btn-outline-danger">Delete</button>
      </div>
    </li>
  </template>
  
  <script>
  export default {
    props: {
      student: Object,
    },
    emits: ['delete'],
  };
  </script>
  