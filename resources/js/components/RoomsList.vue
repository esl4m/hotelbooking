<template>
  <div class="card">
    <div class="card-header">
      Manage Rooms
      <a href class="btn btn-primary">Add New Room</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>ID</td>
              <td>Room Name</td>
              <td>Hotel </td>
              <td>Room Type</td>
              <td>Room Image</td>
              <td colspan="2">Actions</td>
            </tr>
          </thead>

          <tbody>
            <tr v-for="room in rooms" :key="room.id">
              <td>
                <a :href="#">{{room.id}}</a>
              </td>
              <td>
                <a :href="#">{{room.room_name}}</a>
              </td>
              <td>{{room.hotel_id}}</td>
              <td>{{room.room_type}}</td>
              <td>
                <img src="#">
              </td>
              <td>
                <a :href="'/rooms/edit/'+ room.id"  class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form :action="'/rooms/destroy/'+ room.id" method="post">
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
  name: "RoomsList",
  props: {
    rooms: {
      type: Array,
      required: true
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
