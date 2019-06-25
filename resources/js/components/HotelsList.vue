<template>
  <div class="card">
    <div class="card-header">
      Manage Hotels
      <a href="" class="btn btn-primary">New Hotel</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Address</td>
              <td>City</td>
              <td>State</td>
              <td>Country</td>
              <td>Phone Number</td>
              <td>Email</td>
              <td>Image</td>

              <td colspan="2">Actions</td>
            </tr>
          </thead>

          <tbody>
            <tr v-for="hotel in hotels" :key="hotel.id">
              <td>
                <a href="">{{hotel.id}}</a>
              </td>
              <td>
                <a href="">{{hotel.name}}</a>
              </td>
              <td>{{hotel.address}}</td>
              <td>{{hotel.email}}</td>
              <td>{{hotel.city}}</td>
              <td>{{hotel.state}}</td>
              <td>{{hotel.country}}</td>
              <td>{{hotel.phonenumber}}</td>
              <td>{{hotel.email}}</td>
              <td>
                <img src="">
              </td>
              <td>
                <a href="" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="" method="post">
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
  name: "HotelsList",
  props: {
    hotels: {
      type: Array,
      required: true
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
