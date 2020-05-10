<template>
  <div class="container">
    <div class="form-signin">
      <h2 class="form-signin-heading">registration now</h2>
      <div class="login-wrap">
        <p>Enter your personal details below</p>
        <p
          :style="{'font-size':'13px', 'color': 'red'}"
          v-if="error == true"
        >You need to enter full information</p>
        <p
          :style="{'font-size':'13px', 'color': 'red'}"
          v-if="errorWhenRegistion == true"
        >Email Already Exists</p>
        <input
          type="text"
          class="form-control"
          placeholder="Full Name"
          name="fullname"
          autofocus
          v-model.trim="user.fullname"
        />
        <input
          type="text"
          class="form-control"
          placeholder="Address"
          autofocus
          v-model.trim="user.address"
        />
        <!-- <input type="text" class="form-control" placeholder="Email" autofocus v-model="user.email"> -->
        <input
          type="text"
          class="form-control"
          placeholder="City/Town"
          autofocus
          v-model.trim="user.city"
        />
        <div class="radios">
          <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
            <input
              name="sample-radio"
              id="radio-01"
              value="Male"
              type="radio"
              v-model="user.gender"
            /> Male
          </label>
          <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
            <input
              name="sample-radio"
              id="radio-02"
              value="Female"
              type="radio"
              v-model="user.gender"
            /> Female
          </label>
        </div>

        <p>Enter your account details below</p>
        <input
          type="email"
          class="form-control"
          placeholder="User Name"
          autofocus
          v-model.trim="user.email"
        />
        <input
          type="password"
          class="form-control"
          placeholder="Password"
          v-model.trim="user.password"
        />
        <input
          type="password"
          class="form-control"
          placeholder="Re-type Password"
          v-model.trim="user.repassword"
        />
        <label class="checkbox">
          <input type="checkbox" value="agree this condition" v-model="user.iAgree" /> I agree to the Terms of Service and Privacy Policy
        </label>
        <button class="btn btn-lg btn-login btn-block" @click="registion">Submit</button>

        <div class="registration">
          Already Registered.
          <router-link tag="a" to="/login">Login</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      user: {
        fullname: "",
        address: "",
        city: "",
        gender: "Male",
        email: "",
        password: "",
        repassword: "",
        iAgree: false
      },
      error: false,
      errorWhenRegistion: false
    };
  },
  methods: {
    registion() {
      if (this.user.iAgree == true) {
        if (this.user.fullname == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.address == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.city == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.email == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.password == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.repassword == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.password == "") {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.user.repassword != this.user.password) {
          this.error = true;
        } else {
          this.error = false;
        }
        if (this.error == false) {
          axios
            .post("/api/registion", {
              fullname: this.user.fullname,
              address: this.user.address,
              city: this.user.city,
              gender: this.user.gender,
              email: this.user.email,
              password: this.user.password
            })
            .then(response => {
              if (response.data == 0) {
                this.errorWhenRegistion = true
              } else {
                this.$router.push("/login");
              }
            })
            .catch(error => {});
        }
      } else {
        this.error = true;
      }
    }
  }
};
</script>

<style>
input.error {
  border: 1px solid red !important;
}
</style>