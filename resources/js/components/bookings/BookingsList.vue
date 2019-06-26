<template>
  <div class="card">
    <div class="card-header">
      Manage Bookings
      <a :href="'/bookings/create/'" class="btn btn-primary">New Booking</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>ID</td>
              <td>Hotel </td>
              <td>Room</td>
              <td>Start Date</td>
              <td>End Date</td>
              <td>Customer</td>
              <td colspan="2">Actions</td>
            </tr>
          </thead>

          <tbody>
            <tr v-for="booking in bookings" :key="booking.id">
              <td>
                <a :href="'/bookings/'+ booking.id">{{booking.id}}</a>
              </td>
              <td>{{booking.hotel_id}}</td>
              <td>{{booking.room_id}}</td>
              <td>{{booking.start_date}}</td>
              <td>{{booking.end_date}}</td>
              <td>{{booking.customer_id}}</td>
              <td>
                <img src="#">
              </td>
              <td>
                <a :href="'/bookings/edit/'+ booking.id"  class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form :action="'/bookings/destroy/'+ booking.id" method="post">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BookingsList",
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
