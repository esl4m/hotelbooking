<template>
  <div class="card">
    <div class="card-header">
      New Booking
      <a :href="'/bookings/'" class="btn btn-primary">List Bookings</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">

      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BookingsCreate",
  props: {
    bookings: {
      type: Array,
      required: true
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
