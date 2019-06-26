<template>
  <div class="card">
    <div class="card-header">
      Manage Customers
      <a href="#" class="btn btn-primary">New Customer</a>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>ID</td>
              <td>Full Name</td>
              <td>Address</td>
              <td>City</td>
              <td>Country</td>
              <td>Phone Number</td>
              <td>Fax</td>
              <td>Email</td>
              <td colspan="2">Actions</td>
            </tr>
          </thead>

          <tbody>
            <tr v-for="customer in customers" :key="customer.id">
              <td>
                <a :href="'/customers/'+ customer.id">{{customer.id}}</a>
              </td>
              <td>
                <a :href="'/customers/'+ customer.id">{{customer.fullname}}</a>
              </td>
              <td>{{customer.address}}</td>
              <td>{{customer.city}}</td>
              <td>{{customer.country}}</td>
              <td>{{customer.phone}}</td>
              <td>{{customer.fax}}</td>
              <td>{{customer.email}}</td>
              <td>
                <a :href="'/customers/edit/'+ customer.id" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form :action="'/customers/destroy/'+ customer.id" method="post">
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
  name: "CustomersList",
  props: {
    customers: {
      type: Array,
      required: true
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
