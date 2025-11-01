<template>
  <div>
    <h3>События:</h3>
    <ul>
      <li v-for="(event, index) in events" :key="index">
        {{ event.title }} — {{ event.date }}
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  name: "ExampleComponent",
  props: {
    events: Array
  }
}
</script>